<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// My server online website server connection...
// $db_host = "sql210.epizy.com";
// $db_user = "epiz_30791519";
// $db_password = "ShxZs1DOm2v";
// $db_name = "epiz_30791519_wms";   

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "wms";


// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
 echo "your error is".$conn->connect_error;
}
?>