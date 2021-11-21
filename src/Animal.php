<?php

namespace App;

abstract class Animal
{
    public function eat(): void { }
    public function move(): void { }
    public function reproduce(): void { }
}

/*abstract class Animal
{
    public function run(): void { }
    public function walk(): void { }
    public function hunt(): void { }
}*/