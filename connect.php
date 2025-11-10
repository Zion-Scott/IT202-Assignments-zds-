<?php
// connect.php — Database connection for IT202

$servername = "sql1.njit.edu";   // Always this for NJIT
$username   = "zds";             // Your UCID
$password   = "TheFundraiser821!"; // Your MySQL password
$dbname     = "zds";             // Same as your UCID

// Create the connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
// If this runs, $con is now your active database connection
?>