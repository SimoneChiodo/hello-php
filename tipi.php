<?php

// declare(strict_types=1); // Questa riga fa restituire errore nel caso il tipo del parametro passato a una funzione non sia lo stesso specificato (al posto di provare ad effettuare una conversione). 

/*
  Tipi scalari
    boolean
    integer
    float
    string

  Tipi composti
    array
    objects
    callable
    iterable

  Tipi speciali
    resource
    null
*/

// Tipi scalari
$boolean = true;
$integer = 1;
$float = 2.7;
$string = 'Ciao';

echo $boolean . PHP_EOL;
echo $integer . PHP_EOL;
echo $float . PHP_EOL;
echo $string . PHP_EOL;

echo PHP_EOL;

echo gettype($boolean) . PHP_EOL;
var_dump($integer);

echo PHP_EOL;

// Tipi Composti
$array = [1,2,3];

echo $array[0] . PHP_EOL;
var_dump($array);

// Tipi Speciali
$null = NuLl; // (Null non è case-sensitive)

echo $null . PHP_EOL;


// Funzioni tipizzate
echo PHP_EOL;
function somma($x, $y) : int { // Questa funzione accetta solo parametri int (se viene passato un float, restituisce un Warning dove informa che il valore viene convertito ad int)
  var_dump($x);
  var_dump($y);
  return $x + $y;
}
function somma2(int $x, int $y) : int { // Questa funzione accetta solo parametri int (se viene passato un float, restituisce un Warning dove informa che il valore viene convertito, se possibile, ad intero)
  var_dump($x);
  var_dump($y);
  return $x + $y;
}
echo 'somma(): ' . somma(1,2) . PHP_EOL;
echo 'somma(): ' . somma(1.1,2) . PHP_EOL.PHP_EOL;
echo 'somma2(): ' . somma2(1,2) . PHP_EOL;
echo 'somma2(): ' . somma2(1.1,2) . PHP_EOL;

