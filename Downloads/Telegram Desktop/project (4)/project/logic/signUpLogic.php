<?php
// header("Location: index.php");
include("database.php");
$fname = $_POST["firstName"];
$lname = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "insert into user (firstName, lastName, email, password, admin)
values ('$fname', '$lname', '$email', '$password', '0' )";
try {
    $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception) {
    echo"<script>alert('fill all the inputs properly');</script>";
    header("Location: ../signUp.php");
}
if ($result) {
    header("Location: ../login.php");
}

// mysqli_close($conn);
