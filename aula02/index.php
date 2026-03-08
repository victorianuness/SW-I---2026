<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 02</title>
</head>
<body>
    <h1>Aula 02 - PHP + HTML </h1>
    <?php
        $nome = "Victoria";
        echo "<p style='color: blue;'>Bem- vindo... $nome</p>";
        /*
        intercale entre as áspas
        outra solução
        echo "<p style=\"color: blue;\">Bem- vindo... $nome</p>";
        */
        // LAÇO DE REPETIÇÃO- CONTAR DE 1 A 5

        echo "<ul>";
         for ($i=0; $i <=15 ; $i++) { 
            echo "<li>$i</li>";
         }
          echo "</ul>";
    ?>
  

</body>
</html>