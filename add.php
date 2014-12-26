<?php
    //This is a crud application with add.php file

$con=mysqli_connect("localhost","root","lict@2","contactinfo") or die("Error: ".mysqli_error($con));

$query="INSERT INTO `academicinfo`.`information` (`id` ,`mobile` ,`h_phone` ,`e_contact` ,`email` ,`a_email` ,`c_location` ,`p_address` ,`per_address`)
        VALUES ('', '$_POST[mobile]', '$_POST[h_phone]', '$_POST[e_contact]', '$_POST[email]', '$_POST[a_email]', '$_POST[c_location]', '$_POST[p_address]', '$_POST[per_address]');";

mysqli_query($con,$query);

header('location:list.php');