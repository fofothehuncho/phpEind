<?php
require("database.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputMail = mysqli_real_escape_string($conn, $_POST['userName']);
    $inputPassword = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE userName = '$inputMail' AND pass = '$inputPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User credentials are correct
        $row = mysqli_fetch_assoc($result);
        $userData = implode(', ', $row);
        header("Location: fullstack.php?back");
        exit();
    } else {
        header("location: loginPage.php");
    }
}
?>