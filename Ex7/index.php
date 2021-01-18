<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2E7</title>
</head>

<body>

    <?php

    // Traduire ce code avec des if et des else :
    //       $var_b = 'Je suis une variable qui à une valeur';
    //       echo $var_b ?? 'Je suis une variable sans valeur';

    $var_b = 'Je suis une variable qui à une valeur';
    if (isset($var_b)) { // Isset = DOIT etre defini ET différent de null.
        echo 'Je suis une variable sans valeur';
    } else {
        echo 'j\'ai une valeur';
    }


    ?>
    <!-- test ?? code à renvoyer si le résultat du test est NULL. -->
    <!-- ?? sert a faire un isset. -->

</body>

</html>