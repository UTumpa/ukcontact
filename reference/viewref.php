<?php

$id = $_GET['id'];

include('connectr.php');
$query = "select * from reftable WHERE id = $id";

$result = mysqli_query($conr, $query);

$row = mysqli_fetch_assoc($result);
?>
<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td>Name:</td>>
        <td>Organization:</td>>
        <td>Address:</td>>
        <td>Relation:</td>>
        <td>Phone Office:</td>>
        <td>Phone Home:</td>>
        <td>Mobile:</td>>
        <td>Email:</td>>


    </tr>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name_r']; ?></td>
        <td><?php echo $row['organi']; ?></td>
        <td><?php echo $row['addrs_r']; ?></td>
        <td><?php echo $row['relation']; ?></td>
        <td><?php echo $row['p_office']; ?></td>
        <td><?php echo $row['p_home']; ?></td>
        <td><?php echo $row['mobile_r']; ?></td>
        <td><?php echo $row['email_r']; ?></td>

      </tr>>

    <a href="listref.php">Go to Home</a>


