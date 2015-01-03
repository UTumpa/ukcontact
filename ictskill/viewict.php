<?php

$id = $_GET['id'];

include('connectict.php');
$query = "select * from skilltable WHERE id = $id";

$result = mysqli_query($cons, $query);

$row = mysqli_fetch_assoc($result);
?>
<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td>Experience Category :</td>>
        <td> Programming :</td>>
        <td>Skill Description:</td>>
        <td>Extracurricular Activities:</td>>

    </tr>
    <tr>
        <td><?php echo $row['id' ]; ?></td>
        <td><?php echo $row['expe_cate']; ?></td>
        <td><?php echo $row['programming']; ?></td>
        <td><?php echo $row['skill_desc']; ?></td>
        <td><?php echo $row['extra_activities'];?></td>
    </tr>


    <a href="listict.php">Go to Home</a>

