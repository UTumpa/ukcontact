<?php

$id = $_GET['id'];

include('connectr.php');
$query = "select * from reftable WHERE id = $id";

$result = mysqli_query($conr, $query);

$row = mysqli_fetch_assoc($result);
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>  Add Reference </h1>

<form action="editref.php" method="post">

    <br />
    <div>


        <input type="hidden" name="id" value=<?php echo $row['id']; ?> />
    </div>

    <div>
        <label> Name *</label>

        <input type="text" name="nameref" value=<?php echo $row['name_r']; ?> />
    </div>
    <br />

    <div>
        <label>  Organization </label>

        <input type="text" name="orga" value=<?php echo $row['organi']; ?> />
    </div>
    <br />
    <div>
        <label> Address</label>

        <textarea name="address"rows="4" cols="50"><?php echo $row['addrs_r']; ?></textarea>
    </div>
    <br />

    <div>
        <label>  Relation </label>

        <input type="text" name="relation" value=<?php echo $row['relation']; ?>/>
    </div>
    <br />

    <div>
        <label>  Phone (Office) *</label>

        <input type="text" name="p_office" value=<?php echo $row['p_office']; ?> />
    </div>

    <br />
    <div>
        <label> Phone (Home)</label>

        <input type="text" name="p_home" value=<?php echo $row['p_home']; ?> />
    </div>

    <br />
    <div>
        <label>  Mobile *</label>

        <input type="text" name="r_mobile" value=<?php echo $row['mobile_r']; ?> />
    </div>

    <br />

    <div>
        <label>  Email *</label>

        <input type="text" name="email_r" value=<?php echo $row['email_r']; ?> />
    </div>
    <br />
    <button type="submit"><h4>Update</h4></button>

</form>

<a href="listref.php">Go to Home</a>
</body>
</html>