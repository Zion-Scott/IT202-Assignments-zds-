<?php //Error #1 Incorrect opening tag for php

require('connect.php'); // Error #2 No quotes around connect.php | Error #3 missing semicolon after require statement
// This code has 10 errors. Find and fix them. Error #4 Incorrect comment tag
$name = $_POST['name'];
if (isset ($name)) { //Error #5 Incorrect variable name ($name and $Name) | Error #6 missing closing parenthesis
 //Error #7 No closing curly bracket 
$sql = "SELECT * FROM 'Client Table' WHERE Name='$name' "; 
$result = mysqli_query($con, $sql); //Error #8 Missing semicolon after defining result variable
$rows = mysql_num_rows($result);
}

if($rows == 1) //Error #9 Using assignment operand (=)instead of comparison (==) operand
{
echo $name; //Error #10 Forgot to add $ for $name variable
} 

?>

