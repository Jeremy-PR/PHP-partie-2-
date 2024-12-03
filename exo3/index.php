<?php

$age = 11; 
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
    if ($gender === 'homme') {
        if ($age >= 18) {
            echo "Vous êtes un homme et vous êtes majeur";
        } else {
            echo "Vous êtes un homme et vous êtes mineur";
        }
    } else if ($gender === 'femme') {
        if ($age >= 18) {
            echo "Vous êtes une femme et vous êtes majeure";
        } else {
            echo "Vous êtes une femme et vous êtes mineure";
        }
    }
    ?>

</body>

</html>
