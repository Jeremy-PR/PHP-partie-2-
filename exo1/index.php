<?php

$age = 32;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if ($age > 18) {
        echo "<p>Vous êtes majeur</p>";
    } else {
        echo "<p>Vous êtes mineur</p>";
    }
    ?>

</body>

</html>
