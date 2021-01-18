<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- traduire : 
  $number = 11;
  echo ($number % 5 == 0 && $number % 3 == 0)
  ? 'FizzBuzz'
  : ( $number % 3 == 0
    ? 'Fizz'
    : ($number % 5 == 0 ? 'Buzz' : $number)
    ); -->

    <?php
    $number = rand(0, 45);

    if ($number % 5 == 0 && $number % 3 == 0) {
        echo 'FizzBuzz';
    } else if ($number % 3 == 0) {
        echo 'Fizz';
    } else if ($number % 5 == 0) {
        echo 'Buzz';
    } else {
        echo $number . ' n\'est pas divisible par 3 ou 5.';
    }

    ?>

</body>

</html>