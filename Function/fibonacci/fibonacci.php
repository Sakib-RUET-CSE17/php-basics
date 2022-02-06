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
    function fibonacci($n)
    {
        echo "Fibonacci Series up to $n is ";
        if ($n < 1)
            return;
        $i = 0;
        $j = 1;
        echo "$i $j";
        $fib = $i + $j;
        while ($fib <= $n) {
            echo " $fib";
            $i = $j;
            $j = $fib;
            $fib = $i + $j;
        }
    }
    // fibonacci(100);
    ?>
</body>

</html>