<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Esto es una prueba</h1>
    <h2>Lista de numeros</h2>
    <ul>

    
    <?php
        for($i=0;$i<10;$i++){
            echo "<li>Numero $i</li>";
        }
    ?>
    </ul>
    <p> La ruta del servidor es:
    <?php
    echo  "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    ?>
    </p>
</body>
</html>