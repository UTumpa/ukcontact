<?php

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "crud01");
$query = "UPDATE `crud01`.`students` SET `father_name` = '".$father_name."',
`mother_name` = '".$mother_name ."' WHERE `students`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');