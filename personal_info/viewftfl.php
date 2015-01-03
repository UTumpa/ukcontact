<?php

$id = $_GET['id'];

include('connectftfl.php');
$query = "select * from user WHERE id = $id";

$result = mysqli_query($conft, $query);

$row = mysqli_fetch_assoc($result);
?>
<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td> First Name:</td>>
        <td>Last Name:</td>>
        <td>Email:</td>>
        <td>Password:</td>>
        <td>Date Of Birth:</td>>
        <td>Gender:</td>>
        <td>Hobby:</td>>
        <td>Favourite Food:</td>>
        <td>Comment:</td>>
        <td>Created:</td>>
        <td>Modified:</td>>

    </tr>


    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['date_birth']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['hobby']; ?></td>
        <td><?php echo $row['fav_food']; ?></td>
        <td><?php echo $row['comment']; ?></td>
        <td><?php echo $row['created']; ?></td>
        <td><?php echo $row['modified']; ?></td>
</tr>>

    <a href="listftfl.php">Go to Home</a>