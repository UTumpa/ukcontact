<?php
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

include('connectmul.php');

    $hobby = '';

    if(array_key_exists('hobby_gardening',$_POST) && !empty($_POST['hobby_gardening'])) {
        $hobby = $hobby . $_POST['hobby_gardening'].',';
    }

    if(array_key_exists('hobby_travelling',$_POST) && !empty($_POST['hobby_travelling'])) {
        $hobby = $hobby . $_POST['hobby_travelling'].',';
    }
    if(array_key_exists('hobby_reading',$_POST) && !empty($_POST['hobby_reading'])) {
        $hobby = $hobby . $_POST['hobby_reading'] . ',';
    }

    if(array_key_exists('hobby_swimming',$_POST) && !empty($_POST['hobby_swimming'])) {
        $hobby = $hobby . $_POST['hobby_swimming'].',';
    }
    $hobby1=trim($hobby,',');


$food = '';

if(array_key_exists('food',$_POST) && !empty($_POST['food'])) {
    $food = implode(',',$_POST['food']);
}

if(array_key_exists('cities',$_POST) && !empty($_POST['cities'])) {
    $cities = implode(',', $_POST['cities']);
}

    $query="INSERT INTO `multidatabase`.`multitable`(`id`, `full_name`, `hobby`,`food`, `job_location`, `created`)
            VALUES ('', '$_POST[full_name]', '$hobby1','$food' ,'$cities', NOW());";


if(mysqli_query($conml,$query))
    echo "Successfully added 1 data into database";
else
    die("Error: ".mysqli_error($conml));
?>
    <br />
    <a href="createmul.html"><b>Add New Record</b></a>

<?php mysqli_close($conml);?>