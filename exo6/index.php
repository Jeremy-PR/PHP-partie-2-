<?php

$age = 2;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if ($age >= 18) {
        echo "Tu es majeur";
    } else {
        ($age < 18);
        echo "tu es mineur";
    }

    ?>

</body>

</html>