<?php

$id = $_GET['id'];

include('connect.php');
$query = "select * from traintable WHERE id = $id";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
?>
<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td>Training Title :</td>>
        <td>Training Description :</td>>
        <td>Institute:</td>>
        <td>Address:</td>>
        <td>Training Year:</td>>
        <td>Duration:</td>>
        <td>Start Date:</td>>
        <td>End Date:</td>>
        <td>Course Title:</td>>
        <td>Trainer Detail:</td>>

    </tr>
    <tr>
        <td><?php echo $row['id' ]; ?></td>
        <td><?php echo $row['training_title']; ?></td>
        <td><?php echo $row[ 'training_des']; ?></td>
        <td><?php echo $row['Institute']; ?></td>
        <td><?php echo $row[' address'];?></td>
        <td><?php echo $row['training_year']; ?></td>
        <td><?php echo $row['duration']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['end_date']; ?></td>
        <td><?php echo $row[' Course_title']; ?></td>
        <td><?php echo $row[' trainer_detail']; ?></td>
        </tr>


    <a href="listtra.php">Go to Home</a>


