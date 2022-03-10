<?php

function removeAccents($var, $branco = false)
{
    $var = str_replace(array("Á", "À", "Â", "Ã"), "A", $var);
    $var = str_replace(array("á", "à", "â", "ã"), "a", $var);
    $var = str_replace(array("É", "È", "Ê"), "E", $var);
    $var = str_replace(array("é", "è", "ê"), "e", $var);
    $var = str_replace(array("Í", "Ì", "Î"), "I", $var);
    $var = str_replace(array("í", "ì", "î"), "i", $var);
    $var = str_replace(array("Ó", "Ò", "Ô","Õ"), "O", $var);
    $var = str_replace(array("ó", "ò", "ô","õ"), "o", $var);
    $var = str_replace(array("Ú", "Ù", "Û"), "U", $var);
    $var = str_replace(array("ú", "ù", "û"), "u", $var);
    $var = str_replace("Ç", "C", $var);
    $var = str_replace("ç", "c", $var);
    if ($branco) {
        $var = str_replace(" ", "_", $var);
    }

    return $var;
}

function removeSpecialCharacters($string)
{
    $caracteres = array(".", "/", "-", "(", ")", "'", '"');
    return str_replace($caracteres, '', $string);
}

function clearString($string)
{
    return trim(removeAccents(removeSpecialCharacters($string)));
}
