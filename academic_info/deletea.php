<?php

$id=$_GET['id'];
$con = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academicinfo");

$query="DELETE FROM `academicinfo`.`information` WHERE `information`.`id` = $id";
mysqli_query($con,$query);
header('location: lista.php');
mysqli_close($con);
?>