<link rel="stylesheet" href="style.css" />
<?php
$dbname = "railway";

$conn =  mysqli_connect("localhost","root","", $dbname);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
} 
?>
