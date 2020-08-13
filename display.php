<?php
include("connection.php");
$query="SELECT * FROM student";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
while($result=mysqli_fetch_assoc($data));
echo $result['name']." ".$result['id']." ".$result['address'];
?>