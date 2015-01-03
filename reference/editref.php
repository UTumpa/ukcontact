<?php

include('connectr.php');

$id=$_POST['id'];
$namer=$_POST['nameref'];
$organization=$_POST['orga'];
$address=$_POST['address'];
$relation=$_POST['relation'];
$poffice=$_POST['p_office'];
$phome=$_POST['p_home'];
$mobile=$_POST['r_mobile'];
$email=$_POST['email_r'];



echo $id;
echo $query="UPDATE `reftable` SET  `name_r`= '$namer',`organi`= '$organization',`addrs_r`='$addres',`relation`='$relation',
`p_office`='$poffice',`p_home`='$phome' ,`mobile_r`='$mobile' ,`email_r`='$email'
WHERE `id`='$id'";
mysqli_query($conr, $query) or mysql_error();
header('location:listref.php');
?>