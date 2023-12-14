<?php
$con = mysqli_connect('localhost', 'root', '', 'BOOKMARKAPP');

if (!$con) {
    echo "Database not connected";
}

if (isset($_POST['login'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $selectSql = "SELECT * FROM users WHERE email='$Email' AND password='$Password'";
    $result = mysqli_query($con, $selectSql);

    if ($result->num_rows > 0) {
        header("Location: bookmark.php");
        exit(); 
    } else {
        echo "<script>alert('Invalid login email or password!'); 
        window.location.href='index.php';</script>";
    }
}


mysqli_close($con);