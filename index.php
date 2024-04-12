<?php
   
 //paragrafo 
   $lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum necessitatibus distinctio, 
   eveniet excepturi quas consequuntur assumenda voluptate tempore optio neque.'; 
//lunghezza stringa
   $lunghezza_stringa_lorem = strlen($lorem);

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
        <h1>ciao php!</h1>
        <p><?php echo $lorem ?></p>
        <p> il paragrafo è lungo <?php echo $lunghezza_stringa_lorem ?> </p>
    </div>
</body>
</html>
