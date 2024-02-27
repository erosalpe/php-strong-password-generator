<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>
    <form action="landing.php" method="get">
        <label for="lunghezzaPw">Scegli la lunghezza della password:</label>
        <input type="number" name="lunghezzaPw" id="lunghezzaPw">
        <button>Genera</button>
    </form>
    
</body>
</html>