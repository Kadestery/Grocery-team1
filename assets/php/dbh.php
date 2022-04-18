<?php
//set up database

$servername = 'localhost';
$user = 'root';	
$pass = ''; 
$dbName = 'logindb';


$conn = mysqli_connect($servername, $user, $pass, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
