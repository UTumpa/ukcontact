<?php

include('connectict.php');
$id=$_POST['id'];
$exp=$_POST['exp'];
$programming=$_POST['programming'];
$skill=$_POST['skill'];
$extra=$_POST['extra'];

echo $id;
echo $query="UPDATE `skilltable` SET `expe_cate`='$exp',
`programming`='$programming',`skill_desc`='$skill',`extra_activities`='$extra' WHERE `id`='$id' ";

mysqli_query($cons, $query) or mysql_error();

header('location:listict.php');
?>
