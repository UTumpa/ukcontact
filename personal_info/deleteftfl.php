<?php
include('connectftfl.php');

$id=$_GET['id'];
$query="DELETE FROM `ftflbook`.`user` WHERE  `user`.`id` = $id";
mysqli_query($conft,$query);
header('location: listftfl.php');
mysqli_close($conft);
?>