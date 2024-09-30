<?php
session_start();
include("database.php");
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "select * from user where email='$email'";
try {

    $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception $e) {
    echo "" . $e->getMessage() . "";
}
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["id"] = $row["userId"];
    header("Location: ../index.php");
} else {
    echo "<script type='text/javascript'>
            alert('incorrect email or password');
            window.location.href = '../login.php';
        </script>";
}