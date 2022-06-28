<?php
$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "delivery";
$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "error";
}



// $servername = "localhost";
// $dbuser = "techso_courier";
// $dbpass = "courier";
// $dbname = "techso_courier";
// $conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
// if (!$conn) {
//     echo "db error";
// }
