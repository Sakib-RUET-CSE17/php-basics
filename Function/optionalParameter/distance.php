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
    function distance($x, $y, $z = 0)
    {
        return sqrt($x ** 2 + $y ** 2 + $z ** 2);
    }
    // echo distance(1, 2);
    ?>
</body>

</html>