<?php
$u=$_REQUEST["t1"];
$p=$_REQUEST["t2"];
$con=mysqli_connect('localhost','root','Saikrishna@545','mydb');
mysqli_query($con,"insert into myusers values('$u','$p')");
echo "<h1><center>ACCOUNT CREATED<center></h1>";
?>
