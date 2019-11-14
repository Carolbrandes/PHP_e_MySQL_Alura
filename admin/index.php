<?php
require '../src/conexaoBD.php';
require_once  '../src/classes/Artigos.php';
require_once '../src/consultarTodosArtigos.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>

            <?php foreach ($artigos as  $artigo) { ?>
                <div class="artigo-admin">
                    <p><?php echo $artigo['titulo']; ?></p>
                    <nav>
                        <a class="botao" href="editar-artigo.php?id=<?php echo $artigo['id']; ?>">Editar</a>
                        <a class="botao" href="excluir-artigo.php?id=<?php echo $artigo['id']; ?>&titulo=<?php echo $artigo['titulo'];?>">Excluir</a>
                    </nav>
                </div>
            <?php } // fim do foreach 
            ?>

        </div>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>