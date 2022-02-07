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
    $myfile = fopen('users.csv', "r") or die("Unable to open file!");

    $names = [];

    while (!feof($myfile)) {
        array_push($names, fgetcsv($myfile));
    }

    // unset header row
    unset($names[0]);

    foreach ($names as $name) {
        echo $name[1].'<br>';
    }
    fclose($myfile);
    ?>
</body>

</html>