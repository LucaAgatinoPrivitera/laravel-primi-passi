<?php
    $prova = "Ciao mondo, <- queste parole sono scritte in php puro";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
    <link rel="stylesheet" href="/style.css">
    <!-- A quanto pare public lo prende come indirizzo assoluto -->
</head>

<body>
    <div class="container">
        <h1>Hello world!</h1>
        <?= "<h2>" . $prova . "</h2>" ?>
        <h2>Qui ci troviamo nel BONUS</h2>
        <a href="/prova1">Torna al basic, OPS non funziona</a>
        <!-- Da chiedere -->
    </div>
</body>

</html>