<?php

//Função fatorial

function calcFactorial($number) {
    $result = $number;

    for ($index = 1; $index < $number; $index++) {
        $result *= $index;
    }

    echo 'O fatorial de ' .$number . ' é: '.$result;
}

calcFactorial(5)

?>