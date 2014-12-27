<?php
include('connectr.php');

$id=$_GET['id'];
$query="DELETE FROM `refdatabase`.`reftable` WHERE `reftable`.`id` = $id";
mysqli_query($conr,$query);
header('location: listref.php');
mysqli_close($conr);
?>