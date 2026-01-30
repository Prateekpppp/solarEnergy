<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'solarenergy';

$conn = new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error){
    echo 'Server Error';
    die();
}

?>