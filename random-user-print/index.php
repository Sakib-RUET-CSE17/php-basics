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
    $myfile = fopen('users.txt', "r") or die("Unable to open file!");
    $content = '';
    while (!feof($myfile)) {
        $content .= fgets($myfile) . '<br>';
    }
    echo $content;
    fclose($myfile);
    ?>
</body>

</html>