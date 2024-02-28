<?php
    session_start();
    function passwordGen($passwordLength){
        var_dump($_SESSION['lettere'], $_SESSION['numeri'], $_SESSION['simboli']);
        $numbersArray = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $lettereMinuscole = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $lettereMaiuscole = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $specialChar = ['!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|', '}', '~'];
        $passwordGenerata = '';
        for( $i = 0; $i < $passwordLength - 1; $i++ ){
            var_dump($i, $passwordGenerata);
            $scelta = rand(1, 4);
            switch ($scelta){
                case 1:
                    if($_SESSION["numeri"] === 'si'){
                        $passwordGenerata .= $numbersArray[rand(0, 9)];
                    } else {
                        $i--;
                    }
                    break;
                case 2:
                    if($_SESSION["lettere"] === 'si'){
                        $passwordGenerata .= $lettereMinuscole[rand(0, 25)];
                    } else {
                        $i--;
                    }
                    break;
                case 3:
                    if($_SESSION["lettere"] === 'si'){
                        $passwordGenerata .= $lettereMaiuscole[rand(0, 25)];
                    } else {
                        $i--;
                    }
                    break;
                case 4:
                    if($_SESSION["simboli"] === 'si'){
                        $passwordGenerata .= $specialChar[rand(0, 31)];
                    } else {
                        $i--;
                    }
                    break;
            }
        }
        return $passwordGenerata;
    };
?>