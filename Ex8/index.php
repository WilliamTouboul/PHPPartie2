<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = rand(0, 45);

    if ($number % 5 == 0 && $number % 3 == 0) {
        echo 'FizzBuzz';
    } else if ($number % 3 == 0) {
        echo 'Fizz';
    } else if ($number % 5 == 0) {
        echo 'Buzz';
    } else {
        echo $number;
    }

    ?>

</body>

</html>