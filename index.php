<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
  </head>
  <body>
    <h1>
      <?= 'Metodo inline'?> <!-- Struttura inline (dove non si cambia "php" con "=") -->
    </h1> 

    <p>
      <?php
        echo 'Metodo multilinea';
      ?>
    </p>

    <!-- Gli apici '' permettono di contenere stringhe semplici.
    Per contenere caratteri speciali o variabili, bisogna usare le virgolette "" -->
    <?php
      echo "\t<ul>\n";
      echo "\t\t\t<li>Elemento 1</li>\n";
      echo "\t\t\t<li>Elemento 2</li>\n";
      echo "\t\t\t<li>Elemento 3</li>\n";
      echo "\t\t</ul>\n";
    ?>

    <!-- Per concatenare più stringhe si può usare il carattere . o ,
    Per convenzione si usa il . -->
    <?php
      echo "ciao1",
        "ciao2",
        "ciao3\n";

      echo "ciao4".
        "ciao5".
        "ciao6\n";

      // Si può anche usare <<< per creare codice multilinea.
      // Questo metodo si chiama heredoc
      echo <<<END
        <ul>
          <li>Nuovo Elemento 1</li>
          <li>Nuovo Elemento 2</li>
          <li>Nuovo Elemento 3</li>
        </ul>
      END;
    ?>

    <!-- Al posto di echo si può anche usare la funzione print(). 
    Quest'ultima ritorna un valore true se la sua operazione di scrittura ha avuto successo oppure false in caso contrario. -->
    <?php
      print("Questa è una print");
    ?>

    <!-- I commenti in PHP si creano con i caratteri #, //, /**/ -->
    <?php
      # Commento 1 
      // Commento 2
      /* Commento multilinea 1
      Commento multilinea 2 */
    ?>
  </body>
</html>