<?php
include(connect.php);
$query="INSERT INTO student VALUES('','amjad','amjad@gmail.com','kamlia')";
$data=mysqli_query($con,$query);
if($data){
echo "Data Inserted";
}
else{
    echo"Data Failed";
}

?>