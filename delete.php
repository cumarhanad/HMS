<?php

include("connection.php");
$id=$_GET['id'];
$query=mysqli_query($con,"delete from customer where cusid='$id'");
if($query){
    header("location:cusprocess.php");
}
?>