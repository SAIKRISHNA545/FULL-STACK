<?php
$a=$_REQUEST["t3"];
$b=$_REQUEST["t4"];
$con=mysqli_connect('localhost','root','Saikrishna@545','mydb');
$rows=mysqli_query($con,"select * from myusers where username='$a' and password='$b'");
$row=mysqli_fetch_row($rows);
$count=$row[0];
if($count==0){
    echo "<h1 style='color:red;'><i><center>Invalid Credientails</center></i></h1>";
    echo "<h1 style='color:red;'><i><center>404 ERROR</center></i></h1>";

}
else{
    echo "<h1>WELCOME </h1";
    
    header("Location:   https://usharama.edu.in/home");
}
?>
