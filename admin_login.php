<html>
<body style=" background-image: url(rp13.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
<div align="center">
<?php 
session_start();

$uiid=isset($_POST["uid"]);
if($uiid=='admin' AND $_POST["password"]=='admin' )
{
$_SESSION["admin_login"]=True;
}

if($_SESSION["admin_login"]==True)
{
echo " <br><a href=\"http://localhost/railway/insert_into_stations.php\"> Show All Stations </a><br> ";
echo " <br><a href=\"http://localhost/railway/show_trains.php\"> Show All Trains </a><br> ";
echo " <br><a href=\"http://localhost/railway/show_users.php\"> Show All Users </a><br> ";
echo " <br><a href=\"http://localhost/railway/insert_into_train_3.php\"> Enter New Train </a><br> ";
echo " <br><a href=\"http://localhost/railway/insert_into_classseats_3.php\"> Enter Train Schedule </a><br> ";
echo " <br><a href=\"http://localhost/railway/booked.php\"> View all booked tickets </a><br> ";
echo " <br><a href=\"http://localhost/railway/cancelled.php\"> View all cancelled tickets </a><br> ";
echo " <br><a href=\"http://localhost/railway/remark.php\"> View all Reviews </a><br> ";

//echo " <br><a href=\"http://localhost/railway/logout.php\"> Logout </a><br> ";
}
else 
{

echo "
<form action=\"admin_login.php\" method=\"post\">
User ID: <input type=\"text\" name=\"uid\" required><br>
Password: <input type=\"password\" name=\"password\" required><br>
<input type=\"submit\">
</form>
";
}


?>
<br><a href="http://localhost/railway/index.htm">Go to Home Page!!!</a>
</div>
</body>
</html>
