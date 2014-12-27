<?php

$id = $_GET['id'];

include('connect.php');
$query = "select * from traintable WHERE id = $id";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<form action="edited.php" method="post">
    <fieldset>
        <br />
        <div>
            <label>ID</label>

            <input type="text" name="id" value=<?php echo $row['id']; ?> />
        </div>

        <div>
            <label>Training Title *</label>

            <input type="text" name="t_title" value=<?php echo $row['training_title']; ?>/>
        </div>

        <br />
        <div>
            <label>Training Description *</label>

            <textarea name="train_des"rows="4" cols="50"><?php echo $row[ 'training_des']; ?></textarea>
        </div>

        <br />

        <div>
            <label>Institute  *</label>

            <input type="text" name="institute" value=<?php echo $row['Institute']; ?> />
        </div>
        <br />

        <div>
            <label> Address</label>

            <textarea name="address"rows="4" cols="50"><?php echo $row[' address'];?></textarea>
        </div>
        <br />

        <div>
            <label> Training Year *</label>

            <input type="text" name="train_yr" value=<?php echo $row['training_year']; ?>/>
        </div>
        <br />


        <div>
            <label>Duration (in days)</label>

            <input type="text" name="duration" value=<?php echo $row['duration']; ?>/>
        </div>

    </fieldset>
    <br />

    <fieldset>

        <br />
        <div>
            <label>Start Date</label>

            <input type="text" name="start_date" value=<?php echo $row['start_date']; ?> />
        </div>

        <br />
        <div>
            <label>End Date</label>

            <input type="text" name="end_date" value=<?php echo $row['end_date']; ?> />
        </div>

        <br />
        <div>
            <label> Course Title</label>

            <input type="text" name="cou_title" value=<?php echo $row[' Course_title']; ?>/>
        </div>

        <br />
        <div>
            <label> Trainer Detail</label>

            <input type="text" name="train_detail" value=<?php echo $row[' trainer_detail']; ?>/>
        </div>

        <br />
    </fieldset>
    <br />
    <br />

    <button type="submit"><h4>Submit</h4></button>
    <button type="submit"><h4>Cancel</h4></button>
    </form>


</body>
</html>