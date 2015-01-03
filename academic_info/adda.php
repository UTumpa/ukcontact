<?php
include('connecta.php');


$level_education= $_POST['level_edu'];
$exam_title  = $_POST['e_title'];
$group  = $_POST['group_sub'];
$institution= $_POST['ins_ion'];
$result_type  = $_POST['r_type'];
$result = $_POST['result'];
$scale= $_POST['scale'];
$passing_year = $_POST['pass_yr'];
$duration= $_POST['dur_yr'];
$achievement = $_POST['achieve'];



echo$query = "INSERT INTO `academicinfo`.`information` (`level_education` ,`exam_title` ,`group_` ,`institution` ,`result_type` ,
`result` ,`scale` ,`passing_year` ,`duration` ,`achievement`  )
VALUES ('$level_education','$exam_title', '$group','$institution','$result_type','$result','$scale','$passing_year',
    '$duration','$achievement')";

#var_dump($query);
mysqli_query($cona, $query) or mysql_error();


header('location:lista.php');


