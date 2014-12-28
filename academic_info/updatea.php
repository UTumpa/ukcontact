<?php

include('connecta.php');

$id = $_GET['id'];


$query = "select * from information WHERE id = $id";

$result = mysqli_query($cona, $query);

$row = mysqli_fetch_assoc($result);


?>


    <form action="edita.php" method="post">
        <div>
            <td><input type="hidden" name="id" value=<?php echo $row['id']; ?> /> </td>
            <label>Level Education </label>
            <select name="level_edu" value=<?php echo $row['academic'] ?> />
                <option value="Diploma" selected="selected">Diploma</option>
                <option value="Bachelor/Honors">Bachelor/Honors</option>
                <option value="Masters">Masters</option>
            </select>
        </div>

        <br />
        <div>
            <label>Exam Title *</label>

            <input type="text" name="e_title" value=<?php echo $row['exam_title'] ?> />
        </div>
        <br />

        <div>
            <label>Group/Subject *</label>

            <input type="text" name="group_sub" value=<?php echo $row['subject' ] ?> />
        </div>

        <br />
        <div>
            <label>Institution *</label>
            <select name="ins_ion" value=<?php echo $row['institution'] ?> />
                <option value="select institute" selected="selected">--select institute--</option>
                <option value="UAP">UAP</option>
                <option value="DU">DU</option>
                <option value="North">North</option>
                <option value="South">South</option>
            </select>
        </div>
        <br />

        <div>
            <label>Result Type *</label>
            <select name="r_type" value=<?php echo $row['result_type'] ?> />
                <option value="Grade" selected="selected">Grade</option>
                <option value="Other">Other</option>

            </select>
        </div>
        <br />
        <div>

            <label>Result *</label>

            <input type="text" name="result" value=<?php echo $row['result' ] ?> />

            <label>Scale *</label>
            <input type="text" name="scale" value=<?php echo $row['scale'] ?>/>
        </div>
        <br />

        <div>
            <label>Passing Year *</label>

            <input type="text" name="pass_yr" value=<?php echo $row['year'] ?> />
        </div>

        <br />
        <div>
            <label>Duration (in year) </label>

            <input type="text" name="dur_yr" value=<?php echo $row['duration' ] ?> />
        </div>

        <br />

        <label>Achievement </label>

        <textarea name="achieve" value=<?php echo $row['achievement'] ?> rows="5" cols="40"></textarea>


        <button type="submit" name="submit" style="width: 210px;">Submit</button>




    </form>

<br />
<a href="lista.php"><b>Goto List</b></a>

        </body>
        </html>