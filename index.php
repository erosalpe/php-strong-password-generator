<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>php-strong-password-generator</title>
</head>
<body>
    <div class="bg-primary w-75 m-auto">
        <h1 class="text-center text-secondary-subtle">Strong password generator</h1>
        <h2 class="text-center text-light">Genera una password sicura </h2>
        <div class="d-flex justify-content-center flex-column p-5">
            <span class="py-3 px-2 bg-primary-subtle text-info-subtle rounded">Nessun parametro valido inserito</span>
            <form action="landing.php" method="get" class="bg-light rounded mt-3 p-3">
                <div class="d-flex justify-content-between w-75">
                    <div class="d-flex flex-column">
                        <label for="lunghezzaPw">Scegli la lunghezza della password:</label>
                        <span>Consenti ripetizione di uno o più caratteri</span>
                    </div>
                    <div class="d-flex flex-column">
                        <input type="number" name="lunghezzaPw" id="lunghezzaPw">
                        <div>
                            <label for="si">Si</label>
                            <input type="radio" name="choice" id="si">
                        </div>
                        <div>
                            <label for="no">No</label>
                            <input type="radio" name="choice" id="no">
                        </div>
                        <div class="d-flex flex-column mt-3">
                            <div>
                                <label for="lettere">Lettere</label>
                                <input type="checkbox" name="lettere" id="lettere">
                            </div>
                            <div>
                                <label for="numeri">Numeri</label>
                                <input type="checkbox" name="numeri" id="numeri">
                            </div>
                            <div>
                                <label for="simboli">Simboli</label>
                                <input type="checkbox" name="simboli" id="simboli">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Invia</button>
                <input type="reset" class="btn btn-secondary" value="Annulla">
            </form>
        </div>
    </div>
    
</body>
</html>