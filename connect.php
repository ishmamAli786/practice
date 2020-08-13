<?php
$con=mysqli_connect("localhost","root","","uni");
if($con){
    echo "connection OK"
    else{
        die ("connection failed".mysqli_connect_error());
    }
}
?>