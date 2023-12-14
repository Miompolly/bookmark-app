<?php
$con = mysqli_connect('localhost', 'root', '', 'BOOKMARKAPP');

if(!$con){
    echo "Database not connected";
}else{
    
    if (isset($_POST['signup'])) {
        // Collect form data
        $fullname =$_POST['fullName'];
        $email =$_POST['email'];
        $password =$_POST['password'];
    
      
        $sql = "INSERT INTO users (fullName,email , password) VALUES ('$fullname', '$email','$password')";
    
        if (mysqli_query($con, $sql)) {
            echo '<script>';
            echo 'alert("User Created go to login page");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            exit(); 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }


    
        
        
}}




?>