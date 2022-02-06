<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "distance.php";
    $d = distance(1, 2, 3);
    echo "Distance from (0, 0, 0) to (1, 2, 3) is $d<br>";
    $d = distance(1, 2);
    echo "Distance from (0, 0) to (1, 2) is $d";

    ?>
</body>

</html>