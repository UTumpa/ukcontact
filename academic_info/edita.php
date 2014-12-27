<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "academicinfo");
$query = "select * from information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="updatea.php" method="post">
    <label>Level Education </label>
    <select name="level_edu" view=<?php echo $row['academic'] ?>>
        <option value="Diploma" selected="selected">Diploma</option>
        <option value="Bachelor/Honors">Bachelor/Honors</option>
        <option value="Masters">Masters</option>
    </select>
    </div>

    <br />
    <div>
        <label>Exam Title *</label>

        <input type="text" name="e_title" view=<?php echo $row['exam_title'] ?> />
    </div>
    <button type="submit">Update</button>
</form>