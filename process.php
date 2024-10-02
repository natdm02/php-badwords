<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $paragrafo = $_POST['paragrafo'];

    $parola = $_POST['parola'];


    //1.paragrafo originale e lunghezza

    echo "<h3>Paragrafo originale:</h3>";
    echo "<p>$paragrafo</p>";
    echo "<p>Lunghezza: " . strlen($paragrafo) . " caratteri</p>";

}

