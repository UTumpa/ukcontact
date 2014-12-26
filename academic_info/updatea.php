<?php

$id = $_POST['id'];
$level_edu = $_POST['level_edu'];
$e_title = $_POST['e_title'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
echo$query = "UPDATE `academicinfo`.`information` SET `level_edu` = '".$level_edu."',
`e_title` = '".$e_title ."' WHERE `information`.`id` = $id;";
mysqli_query($link, $query);
header('location:lista.php');