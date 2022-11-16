<?php
    //Mostra o tamanho do array

    function showsArrayLenght($userArray) {
        echo count($userArray);
    }

    $userNewArray = array('blue', 'red', 'green', 'black', 'white');

    showsArrayLenght($userNewArray)
?>