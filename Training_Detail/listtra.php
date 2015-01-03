<?php

include('connect.php');

$query = "select * from traintable;";

$result = mysqli_query($con,$query);

?>
<ol>

    <li><a href="createt.html">Create New</a> </li>
</ol>

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



    <?php

    foreach($result as $row){
        ?>

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

            <td> <a href="update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="deletetra.php?id=<?php echo $row['id']?>">Delete</a> | <a href="viewtra.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php



    }
    ?>
</table>

