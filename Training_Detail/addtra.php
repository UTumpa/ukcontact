<?php

include('connect.php');
echo $query="INSERT INTO `traininginfo`.`traintable` ( `training_title` ,`training_des` ,`Institute` ,
` address` ,`training_year` ,`duration` ,`start_date` ,`end_date` ,` Course_title` ,` trainer_detail` )
 VALUES ( '$_POST[t_title]', '$_POST[train_des]', '$_POST[institute]','$_POST[address]', '$_POST[train_yr]', '$_POST[duration]',
 '$_POST[start_date]', '$_POST[end_date]', '$_POST[cou_title]','$_POST[train_detail]')";

mysqli_query($con, $query) or mysql_error();

header('location:listtra.php');
