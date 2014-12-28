
    <?php

    include('connecta.php');

    $id = $_GET['id'];




    $query = "select * from information WHERE id = $id";


    $result = mysqli_query($cona,$query);
    $row = mysqli_fetch_assoc($result);


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


            <tr>
                <td><?php echo $row['id' ]  ?></td>
                <td><?php echo $row['academic'] ?></td>
                <td><?php echo $row['exam_title'] ?></td>
                <td><?php echo $row['subject' ] ?></td>
                <td><?php echo $row['institution'] ?></td>
                <td><?php echo $row['result_type'] ?></td>
                <td><?php echo $row['result' ] ?></td>
                <td><?php echo $row['scale'] ?></td>
                <td><?php echo $row['year'] ?></td>
                <td><?php echo $row['duration' ] ?></td>
                <td><?php echo $row['achievement'] ?></td>

            </tr>
        <a href="lista.php">Go to Home</a>
        <?php

