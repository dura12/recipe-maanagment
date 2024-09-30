<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "moya";
$conn = "";

try {
    $conn = mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);
} catch (Exception $e) {
    echo "connection failed". $e->getMessage();
}
// if($conn) {
//     echo"successfull";
// }