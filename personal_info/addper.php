<?php
include('connectftfl.php');

print_r($_POST);


$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];

$dob = $year.'-'.$month.'-'.$day;

echo $dob;

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sex=$_POST['sex'];
$hobby=$_POST['hobby'];
$fav_food=$_POST['fav_food'];
$comment=$_POST['comment'];
//$created=$_POST['created'];
//$modified=$_POST['modified'];



echo $query="INSERT INTO `ftflbook`.`user` ( `first_name`, `last_name`, `email`, `password`, `date_birth`, `gender`, `hobby`, `fav_food`, `comment`)
 VALUES ('$first_name', '$last_name', '$email', '$password', '$dob', '$sex', '$hobby', '$fav_food', '$comment')";

mysqli_query($conft, $query) or mysql_error();

header('location:listftfl.php');
