<?php
    session_start();
    include __DIR__ . '/functions.php';
    $lunghezzaPw = $_GET['lunghezzaPw'];
    $numeri = $_GET['numeri'];
    $simboli = $_GET['simboli'];
    $lettere = $_GET['lettere'];
    if(isset($numeri)){
        $_SESSION["numeri"] = $numeri;
    }
    if(isset($simboli)){
        $_SESSION["simboli"] = $simboli;
    }
    if(isset($lettere)){
        $_SESSION["lettere"] = $lettere;
    }
    if(isset($lunghezzaPw)){
        $_SESSION["lunghezzaPw"] = $lunghezzaPw;
    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>
</head>
<body>
    <h2>La password è:</h2>
    <?php
        echo passwordGen($_SESSION["lunghezzaPw"]);
    ?>
</body>
</html>