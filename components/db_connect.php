<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db_name = "library";

$conn = mysqli_connect($localhost, $user, $pass, $db_name);

if (!$conn) {
    echo "There was an error";
}
// else{
//     echo "Concected";
// }
