<?php
$films=array(array(
    'title'=>'Funny Movie 2',
    'genre'=>'comedy',
    'stars'=> array('leading actress',
                     'leading actor',
                     'expendable dude',
                      'somebody else')
),
    array(
        'title'=>'Funny Movie 3',
        'genre'=>'horror',
        'stars'=> array('survivor lady',
            'survivor dude',
            'expendable dude',
            'somebody else')
    ),
);
?>
<html>
<body>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>
<table border="2">
    <tr>
        <th>title</th>
        <th>genre</th>
        <th>stars</th>
    </tr>


    <?php foreach($films as $movie){ ?>
        <tr>
            <td><?php echo $movie['title'] ;?></td>
            <td><?php echo $movie['genre'] ;?></td>
            <td>
                <ul>
                    <?php foreach ($movie['stars'] as $acting){ ?>
            <li><?php echo $acting; }?></li>
                </ul>
            </td>
        </tr>
    <?php } ?>

    </table>
</body>
</html>


