<?php
    //This is a crud application with update.php file

    $con=mysqli_connect("localhost","root","lict@2","contactinfo") or die("Error: ".mysqli_error($con));

    $id=$_GET['id'];
    $query="SELECT * FROM `contactinfo`.`information` WHERE `information`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    $current=$rows['c_location'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>FTFLMS</title>
</head>
<body>
<h1>Applicant Personal Information</h1>
<form action="list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <fieldset>
        <legend>Contact Information</legend>
        <div>
            <label>Mobile </label>
            <input type="text" name="mobile" value="<?php echo $rows['mobile']?>" />
        </div>

        <div>
            <label>Home Phone </label>
            <input type="text" name="h_phone" value="<?php echo $rows['h_phone']?>" />
        </div>

        <div>
            <label>Emergency Contact </label>
            <input type="text" name="e_contact" value="<?php echo $rows['e_contact']?>" />
        </div>

        <div>
            <label>Email </label>
            <input type="text" name="email" value="<?php echo $rows['email']?>" />
        </div>

        <div>
            <label>Alternate Email </label>
            <input type="text" name="a_email" value="<?php echo $rows['a_email']?>" />
        </div>

        <div>
            <label>Current Location </label>
            <select name="c_location">
                <option <?php if ($current == 'Dhaka' ) echo 'selected'; ?> value="Dhaka" selected="selected">Dhaka</option>
                <option <?php if ($current == 'Chittagong' ) echo 'selected'; ?> value="Chittagong">Chittagong</option>
                <option <?php if ($current == 'Khulna' ) echo 'selected'; ?> value="Khulna">Khulna</option>
                <option <?php if ($current == 'Sylhet' ) echo 'selected'; ?> value="Sylhet">Sylhet</option>
            </select>
        </div>

        <div>
            <label>Present Address </label>

            <input type="text" name="p_address" value="<?php echo $rows['p_address']?>" />
        </div>

        <div>
            <label>Permanent Address </label>

            <input type="text" name="per_address" value="<?php echo $rows['per_address']?>" />
        </div>
    </fieldset>
    <hr>
    <div>

        <input type="submit" value="Update" name="update" />

    </div>
</form>
<br />
<a href="list.php"><b>Go  Home</b></a>
</body>
</html>