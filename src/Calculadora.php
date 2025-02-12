<?php

namespace App;

class Calculadora
{

    public function suma($a, $b):mixed
    {
        return $a + $b;
    }

    public function resta($a, $b):mixed
    {
        return $a - $b;
    }

    public function multiplicacion($a, $b):mixed
    {
        return $a * $b;
    }
    public function division($a, $b):mixed
    {
        return $a / $b;
    }

    public function raizCuadrada($a):mixed
    {
        return sqrt($a) ;
    }

}



