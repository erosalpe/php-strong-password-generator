<?php
function passwordGen($passwordLength){
        $numbersArray = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $lettereMinuscole = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $lettereMaiuscole = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $specialChar = ['!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|', '}', '~'];
        $passwordGenerata = '';
        for( $i = 0; $i < $passwordLength; $i++ ){
            $scelta = rand(1, 4);
            switch ($scelta){
                case 1:
                    $passwordGenerata .= $numbersArray[rand(0, 9)];
                    break;
                case 2:
                    $passwordGenerata .= $lettereMinuscole[rand(0, 25)];
                    break;
                case 3:
                    $passwordGenerata .= $lettereMaiuscole[rand(0, 25)];
                    break;
                case 4:
                    $passwordGenerata .= $specialChar[rand(0, 31)];
                    break;
            }
        }
        return $passwordGenerata;
    };
?>