<?php

$gender = "homme";

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
    if ($gender != 'homme') {
        echo "C'est une développeuse";
    } else {
        ($gender === 'homme');
        echo "C'est un développeur";
    }

    ?>

</body>

</html>