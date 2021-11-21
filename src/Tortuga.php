<?php

namespace App;
use App\Animal;
use App\IReptil;

class Tortuga extends Animal implements IReptil{
    function isReptil(): void{
        echo('soy un reptil');
    }
}




/*class Tortuga extends Animal{

    public function run(): void
    {
        throw new Exception('cannot be implemented');
    }

    public function hunt(): void
    {
        throw new Exception('cannot be implemented');
    }
}*/
