<?php

include('connect.php');
$id=$_POST['id'];
echo $id;

echo $query="UPDATE `traintable` SET `training_title`='$_POST[t_title]',
`training_des`='$_POST[train_des]',`Institute`='$_POST[institute]',` address`='$_POST[address]',`training_year`='$_POST[train_yr]',
`duration`='$_POST[duration]',`start_date`='$_POST[start_date]',`end_date`='$_POST[end_date]'],` Course_title`='$_POST[cou_title]',
` trainer_detail`='$_POST[train_detail]') WHERE `id`='$_POST['id']'";

mysqli_query($con, $query) or mysql_error();

//header('location:listtra.php');
