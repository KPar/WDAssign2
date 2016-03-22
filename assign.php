<?php
/**
 * Created by PhpStorm.
 * User: Ken Par
 * Date: 8/06/2015
 * Time: 4:26 PM
 * Student ID: 1084471
 */


$bookingref = $_GET['assign'];

$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'test';

//connect to db
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection error: " . mysql_error());
}

$query = "UPDATE wdassign2 SET Status ='Assigned' ";

if(mysqli_query($conn,$query)) {
    echo 'Record updated successfully';
} else {
    echo 'Error updating record'. mysqli_error($conn);
}

mysqli_close($conn);


?>