<?php
include('connect.php');

$id=$_GET['id'];
$query="DELETE FROM `traininginfo`.`traintable` WHERE `traintable`.`id` = $id";
mysqli_query($con,$query);
header('location: listtra.php');
mysqli_close($con);
?>