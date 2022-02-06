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
    require_once "bodmas.php";
    $result = bracket();
    echo "2 * (4 + 2) = $result<br>";
    $result = order();
    echo "2<sup>4</sup> = $result<br>";
    $result = division();
    echo "4 / 2 = $result<br>";
    $result = multiplication();
    echo "2 * 4 = $result<br>";
    $result = addition();
    echo "4 + 2 = $result<br>";
    $result = subtraction();
    echo "4 - 2 =$result";
    ?>
</body>

</html>