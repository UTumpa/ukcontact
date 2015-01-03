<?php


include('connectftfl.php');

$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$date=$_POST['date_'];
$sex=$_POST['sex'];
$hobby=$_POST['hobby'];
$fav_food=$_POST['fav_food'];
$comment=$_POST['comment'];
$created=$_POST['created'];
$modified=$_POST['modified'];

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];

$dob = $year.'-'.$month.'-'.$day;




echo $id;
$query= "UPDATE `user` SET `first_name`='$first_name' ,`last_name`='$last_name' ,`email`='$email' ,`password`='$password' ,`date_birth`='$dob' ,`gender`='$sex' ,
`hobby`='$hobby' ,`fav_food`='$fav_food' ,`comment`='$comment' ,`created`='$created' ,`modified`='$modified'
 WHERE `id`='$id'";
mysqli_query($conft, $query) or mysql_error();

header('location:listftfl.php');
?>



