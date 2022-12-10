<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login form with JavaScript Validation</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link rel="stylesheet" href="./sstyle.css" />
  </head>
  <body
    style="
      background-image: url(rp6.jpeg);
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    "
  >
    <div class="logo text-center">
      <h1>Enquiry</h1>
    </div>
    <div class="wrapper">
      <div class="inner-warpper text-center">

<?php

session_start();
$_SESSION=array();
session_destroy();

?>
<div align="center"> 
<form action="enquiry_result.php" method="post">

Starting Point:
</br> <select id="sp" name="sp" required>
        
<?php

require "db.php";
            
            $cdquery="SELECT sname FROM station";
            $cdresult=mysqli_query($conn,$cdquery);
        
	
            echo " <option value = \"\" >
                    
                </option>";

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['sname'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
            
            }
?>
    
</select>
<br><br>
   
Destination Point: 
</br><select id="dp" name="dp" required>
        
<?php

require "db.php";
            
            $cdquery="SELECT sname FROM station";
            $cdresult=mysqli_query($conn,$cdquery);
        
            echo " <option value = \"\" >
                    
                </option>";

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['sname'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
            
            }
?>
    
</select>
<br><br>
     
Date of Journey: 
</br><input type="date" name="doj" required><br>
        </br>
<input type="submit">

</form>
<br><br><a href="http://localhost/railway/index.htm">Go to Home Page!!!</a>
  
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="./sccript.js"></script>
  </body>
</html>
