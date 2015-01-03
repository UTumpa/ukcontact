<?php
//print_r($_POST);

$Name = $_POST['full_name'];
$Email = $_POST['u_email'];
$Username= $_POST['user_name'];
$Password =$_POST['password'];
if(isset($_POST['full_name']) && !empty($_POST['full_name']))
{
    $Name = $_POST['full_name'];
}

else{

    header('location:registration.php');
}

if(isset($_POST['u_email']) && !empty($_POST['u_email']))
{
    $Email = $_POST['u_email'];
}

else{

    header('location:registration.php');
}
if(isset($_POST['user_name']) && !empty($_POST['user_name']))
{
    $Username = $_POST['user_name'];
}

else{

    header('location:registration.php');
}
if(isset($_POST['password']) && !empty($_POST['password']))
{
    $Password = $_POST['password'];
}

else{

    header('location:registration.php');
}


$Createddate  = $_POST['created_date'];
$Modifieddate  = $_POST['modified_date'];


$link = mysqli_connect("localhost",
    "root",
    "",
    "admin_login") or die('cannot connect');



$query = "INSERT INTO `admin_login`.`registration` (`id`,
`full_name`,`u_email`,`user_name`,`password`,`created_date`,`modified_date`)
VALUES (NULL ,'$Name', '$Email','$Username','$Password',NOW(),'$Modifieddate')";

//echo $query;
mysqli_query($link, $query);
//header('location:index.php');

//<button type="submit" onclick="location.href='login.php'">Now Login</button> &nbsp;
?>



    <a href="login.php">  Now Click Here to LOG IN </a><?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/3/15
 * Time: 9:49 AM
 */ 