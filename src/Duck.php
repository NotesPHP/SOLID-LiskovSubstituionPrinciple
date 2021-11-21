<?php

namespace App;
use App\Animal;
use App\IFly;

class Duck extends Animal implements IFly{

    function isFly(): void{
        echo ('puedo volar');
    }
}
