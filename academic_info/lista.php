<?php

include('connecta.php');



$query = "select * from information;";

$result = mysqli_query($cona,$query);

?>
<ol>

    <li><a href="createa.html">Create New</a> </li>
</ol>

<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td>Level Education:</td>>
        <td>Exam Title:</td>>
        <td>Group:</td>>
        <td>Institution:</td>>
        <td>Result Type:</td>>
        <td>Result:</td>>
        <td>Scale:</td>>
        <td>Passing Year:</td>>
        <td>Duration:</td>>
        <td>Achievement:</td>>

    </tr>


    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id' ]; ?></td>
            <td><?php echo $row['academic']; ?></td>
            <td><?php echo $row['exam_title']; ?></td>
            <td><?php echo $row['subject' ]; ?></td>
            <td><?php echo $row['institution']; ?></td>
            <td><?php echo $row['result_type']; ?></td>
            <td><?php echo $row['result' ]; ?></td>
            <td><?php echo $row['scale']; ?></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['duration' ]; ?></td>
            <td><?php echo $row['achievement']; ?></td>
            <td> <a href="updatea.php?id=<?php echo $row['id']?>">Edit</a> | <a href="deletea.php?id=<?php echo $row['id']?>">Delete</a> | <a href="viewa.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php



    }
    ?>
</table>

