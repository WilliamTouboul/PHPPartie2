<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2E3</title>
</head>

<body>

    <?php

    $age = 24;
    $gender = false;
    /*gender true=1=homme false=0=femme */

    if ($gender) {
        if ($age >= 18) {
            echo 'Vous etes un homme majeur';
        } else {
            echo 'Vous etes un homme mineur';
        }
    } else if (!$gender) {
        if ($age >= 18) {
            echo 'Vous etes une femme majeure';
        } else {
            echo 'Vous etes une femme mineure';
        }
    }


    ?>


</body>

</html>