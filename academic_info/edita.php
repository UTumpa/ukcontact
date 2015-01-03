<?php

include('connecta.php');

$id=$_POST['id'];
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





echo $id;
echo$query ="UPDATE `information` SET `level_education`='$level_education' ,`exam_title`='$exam_title' ,`group_`='$group' ,`institution`='$institution' ,`result_type`='$result_type' ,
`result`='$result' ,`scale`='$scale' ,`passing_year`='$passing_year' ,`duration`='$duration' ,`achievement`='$achievement'  WHERE `id`='$id'";


mysqli_query($cona, $query) or mysql_error();


/*header('location:lista.php');
?>

