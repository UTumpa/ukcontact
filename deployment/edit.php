<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "deploydatabase");
$query = "select * from deploment WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//var_dump($row ['']);

?>

<html>
<head>
    <title></title>
</head>


<body style="text-align: center; width: 100%; height: 100%;">
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <h3>Employment Information</h3>

    <label>Company Name: </label>
    <input type="text" name="company_name" value="<?php echo $row['company_name'];?>"  />
    <br>
    <label>Company Business: </label>
    <input type="text" name="company_business" value="<?php echo $row['company_business'];?>"  />
    <br>
    <label>Adress: </label>
    <textarea name="address" cols="40" rows="3"><?php echo $row['address'];?></textarea>
    <br>
    <label>Designation: </label>
    <input type="text" name="designation" value="<?php echo $row['designation'];?>"  />
    <br>
    <label>Department: </label>
    <input type="text" name="department"  value="<?php echo $row['department'];?>" />
    <br>
    <label>From: </label>
    <input type="date" name="timefrom" value="<?php echo $row['timefrom'];?>"  />
    <br>
    <label>To: </label>
    <input type="date" name="timeto" value="<?php echo $row['timeto'];?>"  />
    <br>
    <label>Employment Duration: </label>
    <input type="text" name="duration"  value="<?php echo $row['duration'];?>" />
    <br>
    <label>Responsibilities: </label>
    <textarea name="responsibilities" cols="40" rows="3"><?php echo $row['responsibilities'];?></textarea>
    <br>
    <button type="submit">Update</button>
    <a href="list.php">Go to Home</a>
</form>
</body>
</html>
