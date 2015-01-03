<?php

include('connectict.php');
echo $query="INSERT INTO `skilldatabase`.`skilltable` (
`expe_cate` ,`programming` ,`skill_desc` ,`extra_activities`)
 VALUES ( '$_POST[emergency_cate]', '$_POST[programme]', '$_POST[skill_des]','$_POST[extra_act]')";

mysqli_query($cons, $query) or mysql_error();



header('location:listict.php');


