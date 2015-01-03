<?php

include('connectr.php');
echo $query="INSERT INTO `refdatabase`.`reftable` ( `name_r` ,`organi` ,`addrs_r` ,`relation` ,`p_office` ,`p_home` ,`mobile_r` ,`email_r` )
 VALUES ( '$_POST[nameref]', '$_POST[orga]', '$_POST[address]','$_POST[relation]', '$_POST[p_office]', '$_POST[p_home]',
 '$_POST[r_mobile]', '$_POST[email_r]')";

mysqli_query($conr, $query) or mysql_error();

header('location:listref.php');
