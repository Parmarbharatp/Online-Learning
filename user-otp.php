<?php
session_start();
require "dbconnect.php"; // Include the database connection file

$errors = array();

// Check if the form is submitted
if(isset($_POST['submit'])){
    $otp_entered = mysqli_real_escape_string($conn, $_POST['otp']); // Sanitize the user-entered OTP
    $email = $_SESSION['email']; // Retrieve the email from the session

    // Retrieve the OTP from the database for the given email
    $email_check = "SELECT otp FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $email_check);

    if(mysqli_num_rows($result) == 1){ // Check if the email exists in the database
        $row = mysqli_fetch_assoc($result);
        $otp_from_db = $row['otp']; // Retrieve the OTP from the database

        if($otp_from_db == $otp_entered){ // Check if the entered OTP matches the OTP from the database
            // OTP matched, redirect to login page
            header('location: login_form.php');
            exit();
        } else {
            // OTP does not match, display error message
            $errors['otp'] = "Invalid OTP! Please enter the correct OTP.";
        }
    } else {
        // Email not found in the database, display error message
        $errors['otp'] = "Email not found or invalid session.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="design.css">
    <style>
        .btn-primary {
            color: #fff;
            background-color: #6610f2;
            border-color: #007bff;
        }
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/2.jpg'); /* Adjust the path to your background image */
            background-size: cover;
            background-position: center;
           
            
           
           
        }
        #countdown {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
            color: #ccc;
            padding: 5px;
        }
        #resend-link {
            color: #000;
        }
       
        
        

.form {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
}

.form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST">
                    <h2 class="text-center">OTP Verification</h2>
                    <?php if(isset($errors['otp'])) { ?>
                        <div class="alert alert-danger"><?php echo $errors['otp']; ?></div>
                    <?php } ?>
                    <div class="form-group">
                        <input type="number" class="form-control" name="otp" placeholder="Enter OTP" required>
                    </div>
                  
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block" id="submit">Verify OTP</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
  
</body>
</html>
