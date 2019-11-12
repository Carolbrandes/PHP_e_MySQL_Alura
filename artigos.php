<!DOCTYPE html>
<html lang="pt-br">

<?php

require_once 'src/conexaoBD.php';
include_once 'src/classes/Artigos.php';

$ListaArtigos = new Artigos($mysql);
$artigo = $ListaArtigos->exibirArtigoEspecifico($_GET['id']);

?>

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">

        <h1>
           <?php echo $artigo['titulo'];?>
        </h1>
        <p>
        <?php echo $artigo['conteudo'];?>
        </p>
        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
</body>

</html>