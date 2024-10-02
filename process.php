<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $paragrafo = $_POST['paragrafo'];

    $parola = $_POST['parola'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISULTATO</title>
    <link rel="stylesheet" href="./css/mine.css">
</head>

<body>

    <div class="container">

        <h2>risultato:</h2>

        <?php
        //1.paragrafo originale e lunghezza

        echo "<h3>Paragrafo originale:</h3>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza: " . strlen($paragrafo) . " caratteri</p>";

        //2. censura
        $paragrafo_censurato = str_ireplace($parola, '***', $paragrafo);

        //2. stampo paragrafo  e lunghezza censurato
        echo "<h3>Paragrafo censurato:</h3>";
        echo "<p>$paragrafo_censurato</p>";
        echo "<p>Lunghezza: " . strlen($paragrafo_censurato) . " caratteri</p>";

        ?>

    </div>

</body>

</html>

