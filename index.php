<!DOCTYPE html>
<html lang="pt-br">

<?php

require 'src/conexaoBD.php';
include_once 'src/classes/Artigos.php';

$listaArtigos = new Artigos($mysql);
$artigos = $listaArtigos->exibirTodosArtigos();

?>

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">


        <h1>Meu Blog</h1>

        <?php foreach ($artigos as $artigo) {?>

        <h2>
            <a href="artigos.php?id=<?php echo $artigo['id']; ?>">
                <?php echo $artigo['titulo'];?>
            </a>
        </h2>
        <p>
          <?php echo $artigo['conteudo'];?>
        </p>

<?php } // fim foreach ?>
      
    </div>
</body>

</html>