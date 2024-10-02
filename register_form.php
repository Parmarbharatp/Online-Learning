<?php
session_start();
require "dbconnect.php"; // Include the database connection file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = "";
$name = "";
$errors = array();

// if user signup button is clicked
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']); // Use $conn from dbconnect.php
    $email = mysqli_real_escape_string($conn, $_POST['email']); // Use $conn from dbconnect.php
    $password = mysqli_real_escape_string($conn, $_POST['pass']); // Use $conn from dbconnect.php
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']); // Use $conn from dbconnect.php
    

    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }

    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);

    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }

    if(count($errors) === 0){
        // $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $insert_data = "INSERT INTO users (name, email, password, otp)
        VALUES ('$name', '$email', '$password', '$code')";

        $data_check = mysqli_query($conn, $insert_data);

        if($data_check){
            // Send verification email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'premjibhaiparmar524@gmail.com';
                $mail->Password   = 'spuq ttjk kucp trhs';
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;

                //Recipients
                $mail->setFrom('premjibhaiparmar524@gmail.com', 'parmar Bharat');
                $mail->addAddress($email, $name);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification Code';
                $mail->Body    = "Your verification code is $code";

                $mail->send();

                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } catch (Exception $e) {
                $errors['otp-error'] = "Failed while sending code! Error: {$mail->ErrorInfo}";
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div id="container">
      <input type="text" name="name" id="name" class="input" required placeholder="enter your name"><br>
      <input type="email" name="email" id="email" class="input" required placeholder="enter your email"><br>
      <input type="password" name="pass" id="pass" class="input" required placeholder="enter your password"><br>
      <input type="password" name="cpass" class="input" id="cpass" required placeholder="confirm your password"><br>
    <select name="user_type" class="input" id="type"><br>
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <br><input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </div>
   </form>

</div>

</body>
</html>