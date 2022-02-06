<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    $fullName = $_POST["name"];
    $length = strlen($fullName);
    // echo $length;
    $firstName = '';
    $lastName = '';
    $i = 0;
    for (; $i < $length; $i++) {
        if ($fullName[$i] === ' ')
            break;
        $firstName .= $fullName[$i];
    }
    for ($i++; $i < $length; $i++) {
        $lastName .= $fullName[$i];
    }
    echo 'First Name: ' . $firstName  . '<br>';
    echo 'Last Name: ' . $lastName  . '<br>';
    $email = $_POST["email"];
    echo 'Email: ' . $email . '<br>';
    $address = $_POST["address"];
    echo 'Address: ' . $_POST["address"] . '<br>';
    // echo time();

    $myfile = fopen(time() . '.txt', "w") or die("Unable to open file!");
    // $myfile = fopen(time() . "$fullName$email$address.txt", "w") or die("Unable to open file!");
    fwrite($myfile, "$fullName\n");
    fwrite($myfile, "$email\n");
    fwrite($myfile, $address);
    fclose($myfile);
    ?>
</body>

</html>