<?php

$servername = 'localhost';
$username = 'ddbando2_opnsrc';
$password = 'opensource123';
$dbName = 'ddbando2_test';

//Create connection
$conn = mysqli_connect($servername, $username, $password);

//Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
//select database
mysqli_select_db($conn, $dbName);


