<?php
/**
 * Created by PhpStorm.
 * User: Ken Par
 * Date: 7/06/2015
 * Time: 3:26 PM
 * Student ID: 1084471
 */

$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'test';

//connect to db
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection error: " . mysql_error());
}

$query = "SELECT * FROM wdassign2 WHERE Status = 'unassigned'";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Unassigned Booking</h2>";
    while($row = mysqli_fetch_assoc($result)) {
        $bookingid = $row['BookingNum'];
        $name = $row['CustName'];
        $number =$row['CustNum'];
        $stnum =$row['StNum'];
        $stname =$row['StName'];
        $suburb =$row ['Suburb'];
        $destination = $row['Destination'];
        $date=$row['Date'];
        $time=$row['Time'];
        $status = 'unassigned';

        echo "<table style='width:50%' border='1'>";

        echo "<tr>";
        echo "<th> Booking ID</th> . <th> Name </th>. <th> Phone </th>  .<th>Address</th>.
            . <th>Destination</th> . <th>Date</th> . <th>Time</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$bookingid</td> . <td>$name</td> . <td>$number</td> . <td>$stnum, $stname, $suburb</td> .
                <td>$destination</td> . <td>$date</td> . <td>$time</td>";
        echo "</tr>";

    }

} else {
    echo "No bookings found";
}

mysqli_close($conn);

?>