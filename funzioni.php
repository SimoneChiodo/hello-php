<?php

  function test() {
    global $x;
    $x = 100;
    $y = 100;

    $x++; // Questa non aumenta a ogni chiamata, perché il suo valore viene sovrascritto a inizio funzione

    return $var = 20;
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <!-- Usare una funzione -->
    <h1>
      <?php
        echo test();
        echo test();
      ?>
    </h1>
    <!-- Usare variabili globali -->
    <h2>
      <?php
        echo $x;
      ?>
    </h1>
    <!-- Usare variabili con scope -->
    <h2>
      <?php
        echo $y;
      ?>
    </h1>
  </body>
</html>