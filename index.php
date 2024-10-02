<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./css/mine.css">
</head>

<body>

    <div class="container mt-5">

        <h2>
            INSERISCI:
        </h2>

        <form action="process.php" method="POST">

            <div class="form-group">
                <textarea class="form-control" name="paragrafo" rows="5" placeholder="UN PARAGRAFO:" required></textarea>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="parola" placeholder="UNA PAROLA DA CENSURARE: " required>
            </div>

            <button type="submit" class="btn btn-primary">INVIA</button>

        </form>

    </div>

</body>
</html>
