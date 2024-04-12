<?php
$paragraph = $_POST['paragraph'];

var_dump('test ' . $paragraph);

$paragraph_length = strlen($paragraph);

$badword = $_POST['badword'];

var_dump($paragraph_length);

$censured_par = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <div>
        <div>

            <div>
                <h1>il tuo testo:</h1>
                <p><?php echo $paragraph ?></p>
                <h6><?php echo "Il testo censurato contiene $paragraph_length caratteri." ?></h6>

                <h1>il tuo testo censurato:</h1>
                <p><?php echo $censured_par ?></p>
                <h6><?php echo "Il testo censurato contiene $paragraph_length caratteri." ?></h6>

            </div>

        </div>
    </div>

</body>

</html>