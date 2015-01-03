<?php
include('connectict.php');

$id=$_GET['id'];
$query="DELETE FROM `skilldatabase`.`skilltable` WHERE `skilltable`.`id` = $id";
mysqli_query($cons,$query);
header('location: listict.php');
mysqli_close($cons);
?>