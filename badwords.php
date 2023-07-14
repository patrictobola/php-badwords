<?php
$censured_word = $_GET["word"];
$paragraph = $_GET[trim("paragraph")];
$finalPhrase = str_replace(strtolower($censured_word), '***', strtolower($paragraph))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo con parola censurata</title>
</head>

<body>
    <h1>La parola che stavi censurando è: <?= $censured_word ?> </h1>
    <h2>Testo Originale:</h2>
    <h3><?= $paragraph ?></h3>
    <h4>Lungo esattamente <?= strlen($paragraph) ?> caratteri</h4>
    <h2>Testo Originale:</h2>
    <h3><?= $finalPhrase ?></h3>
    <h4>Lungo invece <?= strlen($finalPhrase) ?> caratteri</h4>
</body>

</html>