<?php

$id = $_GET['id'];

include('connectftfl.php');
$query = "select * from user WHERE id = $id";

$result = mysqli_query($conft, $query);

$row = mysqli_fetch_assoc($result);

echo $row['date_birth'];
?>

<form action="editftfl.php" method="post">
    <div>


        <input type="hidden" name="id" value=<?php echo $row['id']; ?> />
    </div>


    <div>
        <label>First Name: </label>
        <input type="text" name="first_name" value=<?php echo $row['first_name']; ?> />
    </div>

    <div>
        <label>Last Name: </label>
        <input type="text" name="last_name" value= <?php echo $row['last_name']; ?>/>
    </div>
    <div>
        <label>Email: </label>
        <input type="text" name="email" value=<?php echo $row['email']; ?> />
    </div>

    <div>
        <label>Password: </label>
        <input type="text" name="password" value=<?php echo $row['password']; ?> />
    </div>
    <div>
        <?php
        $date=explode('-',$row['date_birth']);
        var_dump($date);
        list($year, $month, $day)=$date;
        ?>
        <label>Date of Birth</label>
        <select name="year">
            <option <?php if ($year == "2013") echo 'selected'; ?> value="2013">2013</option>
            <option <?php if ($year == "2012") echo 'selected'; ?> value="2012">2012</option>
            <option <?php if ($year == "2011") echo 'selected'; ?> value="2011">2011</option>
            <option <?php if ($year == "2010") echo 'selected'; ?> value="2010">2010</option>
            <option <?php if ($year == "2009") echo 'selected'; ?> value="2009">2009</option>
            <option <?php if ($year == "2008") echo 'selected'; ?> value="2008">2008</option>
            <option <?php if ($year == "2007") echo 'selected'; ?> value="2007">2007</option>
            <option <?php if ($year == "2006") echo 'selected'; ?> value="2006">2006</option>
            <option <?php if ($year == "2005") echo 'selected'; ?> value="2005">2005</option>
            <option <?php if ($year == "2004") echo 'selected'; ?> value="2004">2004</option>
            <option <?php if ($year == "2003") echo 'selected'; ?> value="2003">2003</option>
            <option <?php if ($year == "2002") echo 'selected'; ?> value="2002">2002</option>
            <option <?php if ($year == "2001") echo 'selected'; ?> value="2001">2001</option>
        </select>
        <select name="month">
            <option <?php if ($month == "01") echo 'selected'; ?> value="01">jan</option>
            <option <?php if ($month == "01") echo 'selected'; ?> value="02">jan</option>
            <option <?php if ($month == "03") echo 'selected'; ?> value="03">jan</option>
            <option <?php if ($month == "04") echo 'selected'; ?> value="04">jan</option>
            <option <?php if ($month == "05") echo 'selected'; ?> value="05">jan</option>
            <option <?php if ($month == "06") echo 'selected'; ?> value="06">jan</option>
            <option <?php if ($month == "07") echo 'selected'; ?> value="07">jan</option>
            <option <?php if ($month == "08") echo 'selected'; ?> value="08">jan</option>
            <option <?php if ($month == "09") echo 'selected'; ?> value="09">jan</option>
            <option <?php if ($month == "10") echo 'selected'; ?> value="10">jan</option>
            <option <?php if ($month == "11") echo 'selected'; ?> value="11">jan</option>
            <option <?php if ($month == "12") echo 'selected'; ?> value="12">jan</option>
        </select>
        <select name="day">
            <option <?php if ($day == "01") echo 'selected'; ?> value="01">jan</option>
            <option <?php if ($day == "01") echo 'selected'; ?> value="02">Feb</option>
            <option <?php if ($day == "03") echo 'selected'; ?> value="03">Mar</option>
            <option <?php if ($day == "04") echo 'selected'; ?> value="04">apr</option>
            <option <?php if ($day == "05") echo 'selected'; ?> value="05">may</option>
            <option <?php if ($day == "06") echo 'selected'; ?> value="06">jun</option>
            <option <?php if ($day == "07") echo 'selected'; ?> value="07">jul</option>
            <option <?php if ($day == "08") echo 'selected'; ?> value="08">aug</option>
            <option <?php if ($day == "09") echo 'selected'; ?> value="09">sep</option>
            <option <?php if ($day == "10") echo 'selected'; ?> value="10">oct</option>
            <option <?php if ($day == "11") echo 'selected'; ?> value="11">nov</option>
            <option <?php if ($day == "12") echo 'selected'; ?> value="12">dec </option>
        </select>
    </div>


    <div>
        <label>Gender: </label><br>
        <input type="radio" name="sex" <?php if ($row['gender']=='Male')echo 'checked'; ?> value="Male"; ?>>Male<br>
        <input type="radio" name="sex" <?php if ($row['gender']=='Female')echo 'checked'; ?> value="Female" $row['gender']; ?>>Female
        </select>
    </div>
    <label>Hobby: </label><br>
    <input type="checkbox" name="hobby" value=<?php echo $row['hobby']; ?>>Reading<br>
    <input type="checkbox" name="hobby" value=<?php echo $row['hobby']; ?>>Travelling<br>
    <input type="checkbox" name="hobby" value=<?php echo $row['hobby']; ?>>Gardening<br>
    <input type="checkbox" name="hobby" value=<?php echo $row['hobby']; ?>>Other
    <div>
        <label>Favourite Food: </label>
        <input type="text" name="fav_food" value=<?php echo $row['fav_food']; ?> />
    </div>

    <div>
        <label>Comment: </label>
        <textarea name="comment" value=<?php echo $row['comment']; ?> rows="5" cols="40"></textarea>
    </div>
    <div>
        <label>Created: </label>
        <input title="Date format: YYYY-MM-DD" placeholder="yyyy-mm-dd" maxlength="10" type="text" name="created" value=<?php echo $row['created']; ?> />
    </div>
    <div>
        <label>Modified: </label>
        <input type="text" name="modified" value=<?php echo $row['modified']; ?> />
    </div>

    <button type="submit">Submit</button>

</form>

<a href="listftfl.php">Go to Home</a>
</body>
</html>