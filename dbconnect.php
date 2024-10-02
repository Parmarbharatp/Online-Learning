<?php
$servername="localhost";
$username="root";
$password="";
$mydb = "otp1";
$conn = new mysqli($servername,$username,$password,$mydb);
if($conn){
    echo " ";
}
else{
    echo "error";
}
// $sql="CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL,
//     user_type VARCHAR(50) NOT NULL,
//     otp INT(6) NOT NULL,
//     `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";


// if ($conn->query($sql) === TRUE) {
//     echo "Table users created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
?>