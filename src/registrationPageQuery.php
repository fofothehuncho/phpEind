<?php
require("database.php");

$inputEmail = mysqli_real_escape_string($conn, $_POST['email']);
$inputPassword = mysqli_real_escape_string($conn, $_POST['password']);


// Correctly concatenate the SQL string
$sql = "INSERT INTO users(userName, pass) VALUES ('$inputEmail', '$inputPassword');";

if (mysqli_query($conn, $sql)) {
    header("location: fullstack.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>