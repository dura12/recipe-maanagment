<?php
session_start();
include("database.php");
$foodName = $_POST["foodName"];
$category = $_POST["category"];
$duration = $_POST["duration"];
$ingredients = $_POST["ingredients"];
$cookware = $_POST["cookware"];
$directions = $_POST["directions"];
if (isset($_POST["submit"]) && isset($_FILES["userImage"])) {
    // echo"<pre>";
    // print_r($_FILES["userImage"]);
    // echo"</pre>";
    $image_name = $_FILES["userImage"]["name"];
    $userId = $_SESSION["id"];
    $uploadDir = "../userImg/";
    $uploadPath = $uploadDir . basename($_FILES["userImage"]["name"]);
    move_uploaded_file($_FILES["userImage"]["tmp_name"], $uploadPath);
    // echo  $_FILES["userImage"]["error"];

    $sql = "insert into food(name, duration, ingredients, cookware, directions, category, varification, image, userId) values('$foodName', '$duration', '$ingredients','$cookware', '$directions', '$category', 'P', '$image_name', '$userId')";
    try {

    $result = mysqli_query($conn, $sql);
    }catch(mysqli_sql_exception $e) {
        echo "". $e->getMessage();
    }
    header("Location: ../addRecipe.php");
}
