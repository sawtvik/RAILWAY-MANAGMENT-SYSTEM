<html>
<body style=" background-image: url(rp1.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;" >

<?php 

require "db.php";

$trainno=$_POST["trainno"];
$review=$_POST["message"];

$sql = "INSERT INTO review (trainno,message) VALUES ('".$trainno."','".$review."')";
// echo $sql;

if ($conn->query($sql) === TRUE) 
{
 echo "Hi, <a href=\"http://localhost/railway/index.htm\"> Click here </a> to browse through our website!!! " ;
} 
else 
{
 echo "Error:" . $conn->error. "<br> <a href=\"http://localhost/railway/new_user_form.htm\">Go Back to Login!!!</a> ";
}

$conn->close(); 
?>

</body>
</html>
