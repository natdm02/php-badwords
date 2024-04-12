<?php

 $test = 'php';
 $paragrafo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, commodi?';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-badwords</title>
</head>
<body>
    <div>

        <h1>ciao <?php echo $test ?>! </h1>
        
        <form action="prova.php" method="POST">

        <textarea name="paragraph" id="paragraph">scrivi una parola</textarea>

        <br>

        <label for="badword">scrivi una parola da censurare</label>

        <input type="text" name="badword" id="badword" value="Lorem">

        <input type="submit" value="Invia">

    </form>

    
    </div>
</body>
</html>
