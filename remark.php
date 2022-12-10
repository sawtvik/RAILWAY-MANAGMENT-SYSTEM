<html>
<body style=" background-image: url(rp17.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
     "
    >

<?php

require "db.php";

$cdquery="SELECT * FROM review";
$cdresult=mysqli_query($conn,$cdquery);
echo "
<table>
<thead><td>Train Number</td><td>Message</td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
   echo "
<tr><td>".$cdrow[0]."</td><td>".$cdrow[1]."</td><td></td></tr>
";
}
echo "</table>";

echo " <br><a href=\"http://localhost/railway/review.html\"> Add Review </a><br> ";
echo " <br><a href=\"http://localhost/railway/admin_login.php\">Go Back to Admin Menu!!!</a> ";
?>
</body>
</html>
