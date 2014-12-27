<?php

include('connect.php');
$query="INSERT INTO `students`.`users` (`id`, `first_name`, `last_name`, `phone_number`)
 VALUES ('', '$_POST[fname]', '$_POST[lname]', '$_POST[pnumber]');";

i(mysqli_query($con,$query))
header('location:list.php');