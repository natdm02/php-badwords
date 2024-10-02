<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $paragrafo = $_POST['paragrafo'];

    $parola = $_POST['parola'];


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
}

