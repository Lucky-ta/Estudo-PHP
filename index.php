<?php

    //Variáveis
    // $name = 'Lucas';
    // echo 'Boa noite, me chamo' .$name;
    // echo '<hr>';
    //Variáveis de variáveis
    // $Lucas = 'Maieski';
    // echo 'Boa noite, me chamo' .$$name;


    //Condições
    // if($name === 'Lucas'){
    //     echo 'True';
    // }else{
    //     echo 'False';
    // }


    //Loop

    // for($index = 0; $index <= 10; $index++){
    //     echo $index;
    //     echo '<hr>';
    // } 

    // $i = 0;
    // while($i < 10) {
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }


    //Funções

    // function printNumbers($number) {
    //     echo 'Função iniciada';
    //     echo '<br>';

    //     echo $number;
    //     echo '<br>';

    //     echo 'Função encerrada';
    // }

    // printNumbers(60)


    //Objetos

    class Person{
        public $name;
        public $age;

        public function __construct($personName,$personAge){
            $this->name = $personName;
            $this->age = $personAge;
        }
        
        public function printNameAndAge(){
            echo $this->name;
            echo '<br>';
            echo $this->age;
        }
    }


    $person = new Person('Lucas', 21);

    $person->printNameAndAge();

?>