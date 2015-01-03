<?php

include('connectr.php');

$query = "select * from reftable;";

$result = mysqli_query($conr,$query);

?>
<ol>

    <li><a href="createref.html">Create New</a> </li>
</ol>

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



    <?php

    foreach($result as $row){
        ?>

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

            <td> <a href="updateref.php?id=<?php echo $row['id']?>">Edit</a> | <a href="deleteref.php?id=<?php echo $row['id']?>">Delete</a> | <a href="viewref.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php



    }
    ?>
</table>

