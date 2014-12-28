<?php

include('connectict.php');

$id = $_GET['id'];


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
        <td>Extracurricular Activities:</td>
        <td>Action</td>

    </tr>
    <form action="updated.php" method="post">


        <tr>
            <form action="edited.php" method="post">
            <td><input type="text" name="id" value=<?php echo $row['id']; ?> /> </td>
            <td><input type="text" name="exp" value=<?php echo $row['expe_cate']; ?>  /> </td>
            <td><input type="text" name="programming" value=<?php echo $row['programming']; ?> /></td>
            <td><input type="text" name="skill" value=<?php echo $row['skill_desc']; ?> /></td>
            <td><input type="text" name="extra" value=<?php echo $row['extra_activities'];?> /></td>
            <td><button type="submit"><h4>Update</h4></button></td>
            </form>

        </tr>
        </form>

</table>

