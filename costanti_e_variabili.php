<?php

  define('NOME_UTENTE', 'utente1');
  $eta = 25;

  // Copia del valore
  $copiaEta = $eta;
  $copiaEta = 20;

  // Copia della variabile
  $puntatoreEta = &$eta; // Questo modifica il valore di $eta
  $puntatoreEta = 19;

  // Usare una variabile per scegliere una variabile
  $italiano = 'Ciao';
  $inglese = 'Hi';
  $lingua = 'italiano';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <!-- Usare una costante -->
    <h1>
      <?php
        // Il valore di $lingua viene letto e usato per scegliere la variabile $italiano o $inglese
        echo $$lingua . ' ' . NOME_UTENTE . '!';
      ?>
    </h1>

    <!-- Usare una variabile -->
    <h3>
      <?php
        echo "Il contenuto della variabile eta è: " . $eta;
      ?>
    </h3>
    <h3>
      <?php
        echo "Il contenuto della variabile copiaEta è: " . $copiaEta;
      ?>
    </h3>

    <!-- Usare costanti predefinite -->
    <p>
      <?php
        echo "Sto usando PHP v." . PHP_VERSION;
      ?>
    </p>
  </body>
</html>