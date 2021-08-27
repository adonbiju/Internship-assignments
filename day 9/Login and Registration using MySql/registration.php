<?php

include("config.php");
// Check Connection
if ($conn -> connect_error) {
    die("Connection Failed: " . $conn -> connect_error);
}

$email = $_POST["email"];
$password = MD5($_POST["password"]);

$sql = "INSERT INTO users(email, password) VALUES('".$email."','".$password."')";

if (mysqli_query($conn, $sql)) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Registration Successful!!');window.location.href='dashboard.html';</script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Error!');window.location.href='register.html';</script>");
}
$conn->close();


?>