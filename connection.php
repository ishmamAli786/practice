<?php
/*$name="ishmam Ali khan";
$age="29 years old";
echo $name;
echo $age;*/
$servername="localhost";
$username="root";
$password="";
$dbname="uni";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{
    echo  "connection OK";
}
else{
    die("connection failed becuase".mysqli_connect_error());
}
?>