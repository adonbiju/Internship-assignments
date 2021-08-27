<?php

include("config.php");
// Check Connection
if ($conn -> connect_error) {
    die("Connection Failed: " . $conn -> connect_error);
}

$email = $_POST["email"];
$password = MD5($_POST["password"]);

$query = mysqli_query($conn, "select * from users where email='$email' AND password='$password'");
    $rows = mysqli_fetch_assoc($query);
    $num = mysqli_num_rows($query);
    if($num == 1) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Logged In!');window.location.href='dashboard.html';</script>");
    }
    else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Error!');window.location.href='index.html';</script>");
    }
$conn->close();


?>