
<?php
/**
 * Created by PhpStorm.
 * User: Ken Par
 * Date: 1/06/2015
 * Time: 8:28 PM
 * Student ID: 1084471
 */
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die ('Unable to connect to Database' . mysql_error());
}


$result = mysqli_query($conn, 'show tables like "wdassign2"');
$row = mysqli_fetch_assoc($result);

if (isset($row)) {
} else {

    $newTable = "CREATE TABLE wdassign2 (BookingNum VARCHAR (6) UNIQUE KEY, CustName VARCHAR (20) NOT NULL,
                     CustNum INT (15) NOT NULL , UnitNum VARCHAR (5),StNum VARCHAR (5) NOT NULL , StName VARCHAR (30) NOT NULL ,
                     Suburb VARCHAR (30) NOT NULL , Destination VARCHAR (50) NOT NULL ,
                     Date DATE NOT NULL , Time TIME NOT NULL, Status VARCHAR (10) )";

    if (mysqli_query($conn, $newTable)) {

    } else {
        echo "Error Creating Table: " . mysqli_errno($conn);
    }

}

$bookingref = mt_rand(100000, 999999);
$custname = $_POST['customername'];
$custnum = $_POST['customernumber'];
$unitnumber = $_POST['unitnumber'];
$stnumber = $_POST['streetnumber'];
$stname = $_POST['streetname'];
$suburb = $_POST['suburb'];
$des = $_POST['destinationaddress'];
$date = $_POST['date'];
$time = $_POST['time'];

$SQL = "INSERT INTO wdassign2 (BookingNum, CustName, CustNum, UnitNum, StNum, StName, Suburb, Destination, Date, Time, Status)
                            VALUES ('$bookingref','$custname','$custnum','$unitnumber','$stnumber','$stname','$suburb','$des','$date','$time','Unassigned')";

if (mysqli_query($conn, $SQL)) {
    echo '<script>';
    echo 'alert("you have booked successfully booked")';
    echo '</script>';


} else {

    echo "Error: " . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Cabs Online Booking</title>
</head>
<link rel="stylesheet" type="text/css" href="design.css">

<div id="menu" class="center">
    <h1>Cabs Online</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="booking.html">Book A Taxi</a></li>
        <li><a href="admin.html">Admin</a></li>
    </ul>
</div>

<body>
<div
<h1>Booking Reference</h1>
<p>Congratulations you have successfully booked your taxi!!<br>
    Please take note of the following information<br>
    Booking Reference: <?php echo $bookingref; ?><br>
    Pick Up Time: <?php echo $time;?> <br>
    Pick Up Location: <?php echo $stnumber ," ", $stname;?></p>
</body>
</html>