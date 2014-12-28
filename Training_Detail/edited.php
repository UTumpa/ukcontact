<?php

include('connect.php');
$id=$_POST['id'];
$training=$_POST['t_title'];
$des=$_POST['train_des'];
$institute=$_POST['institute'];
$address=$_POST['address'];
$year=$_POST['train_yr'];
$duration=$_POST['duration'];
$sdate=$_POST['start_date'];
$edate=$_POST['end_date'];
$courseTitle=$_POST['cou_title'];
$trainerdetail=$_POST['train_detail'];

echo $id;
echo $query="UPDATE `traintable` SET `training_title`='$training',`training_des`='$des',
`Institute`='$institute',` address`='$address',`training_year`='$year',
`duration`='$duration',`start_date`='$sdate',`end_date`='$edate',` Course_title`='$courseTitle',` trainer_detail`='$trainerdetail'
 WHERE `id`='$id'";
mysqli_query($con, $query) or mysql_error();

header('location:listtra.php');
?>
