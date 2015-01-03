<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "deploydatabase");
$query = "DELETE FROM `deploydatabase`.`deploment` WHERE `deploment`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>
