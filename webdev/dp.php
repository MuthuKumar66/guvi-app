<?php
$con=mysqli_connect("localhost","root","","test");

if($con){
    echo "connected";
}
else{
    echo "not connected";
}
?>