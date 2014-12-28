<?php
include('connecta.php');

$id=$_GET['id'];

$query="DELETE FROM `academicinfo`.`information` WHERE `information`.`id` = $id";
mysqli_query($cona,$query);
header('location: lista.php');
mysqli_close($cona);
?>
