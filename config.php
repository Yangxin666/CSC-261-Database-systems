<?php
session_start();
$server = "localhost";
$user = "yfan24";
$password = "E%aiQRN=";                                                                                                                                                                                            $db = 'siyer9_1';

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 echo "Failed"; 
 die("Connection failed: " . mysqli_connect_error());
}

?>
