<?php

include('connectict.php');

$query = "select * from skilltable;";

$result = mysqli_query($cons,$query);

?>
<ol>

    <li><a href="createict.html">Create New</a> </li>
</ol>

<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td>Experience Category :</td>>
        <td> Programming :</td>>
        <td>Skill Description:</td>>
        <td>Extracurricular Activities:</td>>

    </tr>


    <?php

    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id' ]; ?></td>
            <td><?php echo $row['expe_cate']; ?></td>
            <td><?php echo $row['programming']; ?></td>
            <td><?php echo $row['skill_desc']; ?></td>
            <td><?php echo $row['extra_activities'];?></td>
            <td> <a href="updateict.php?id=<?php echo $row['id']?>">Edit</a> | <a href="deleteict.php?id=<?php echo $row['id']?>">Delete</a> | <a href="viewict.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>


    <?php


    }


    ?>
</table>

