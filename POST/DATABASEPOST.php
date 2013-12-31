<?php
$con=mysqli_connect("localhost","root","tiger","phpDB");
 if(mysqli_connect_errno())
     {
        echo "Failed  :" . mysqli_connect_error();
     }

$stm = "insert into user values('".$_GET['userName']. "','" .$_GET['address']."', '".$_GET['phone']."')";  
if(mysqli_query($con,$stm)){
	   echo "Data Inserted Successfully";

}
 else {
 	  echo "ERROR OCCURED ...!";
 }
?>