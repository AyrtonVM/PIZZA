<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'slijterij';


$conn = new mysqli($hostname, $username, $password, $database);

if ( $conn->connect_error) {
    
die('Unavailable');

}

 ?>
