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

    function getFileData($fileName)
    {
        $myfile = fopen($fileName, "r") or die("Unable to open file!");

        $data = [];

        while (!feof($myfile)) {
            array_push($data, fgetcsv($myfile));
        }

        // unset header row
        unset($data[0]);

        fclose($myfile);

        return $data;
    }

    // $myfile = fopen('users.csv', "r") or die("Unable to open file!");

    // $names = [];

    // while (!feof($myfile)) {
    //     array_push($names, fgetcsv($myfile));
    // }

    // // unset header row
    // unset($names[0]);



    $data = getFileData('users.csv');

    function printName($row)
    {
        echo $row[1] . '<br>';
    }
    array_map('printName', $data)

    ?>
</body>

</html>