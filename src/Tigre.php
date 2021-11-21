<?php

namespace App;
use App\Animal;
use App\ICarnivorous;
use App\IRun;
use App\IHunt;

class Tigre extends Animal implements ICarnivorous, IRun, IHunt{
    function isCarnivorous(): void{
        echo ('soy carnivoro');
    }
    function run(): void{
        echo ('soy veloz');
    }
    function hunt(): void{
        echo ('soy un cazador') ;       
    }
}

/*class Tigre extends Animal{

}*/
