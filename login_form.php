<?php

include 'dbconnect.php';
session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']); // Assuming the password is not hashed for now

    $select = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        // Fetch the user record
        $row = mysqli_fetch_array($result);

        // Verify the password (for now, assuming passwords are not hashed)
        if($row['password'] == $password){
            // Password is correct
            $_SESSION['email'] = $row['email'];
            header('location: about.php');
            exit();
        } else {
            // Password is incorrect
            $error[] = 'Incorrect email or password!';
        }
    } else {
        // User not found
        $error[] = 'User not found!';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="design.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      Email: <input type="email" name="email" required placeholder="name@gmail.com"><br>
      Password: <input type="password" name="pass" required placeholder="Enter your password"><br><br>
      <input type="submit" name="submit" value="Login Now" class="form-btn"><br>
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
   </form>
</div>

</body>
</html>
