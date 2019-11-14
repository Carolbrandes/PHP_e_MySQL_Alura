<?php
require_once '../src/conexaoBD.php';
require_once '../src/classes/Artigos.php';
require_once '../src/redirecionar.php';

// esse if deve vir antes de exibir os dados que já estão cadastrados.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigoAtualizado = new Artigos($mysql);
    $artigoAtualizado->atualizarArtigo($_POST['id'], $_POST['titulo'], $_POST['conteudo']);
    redirecionar('index.php');
}

// exibir os dados do artigo que estao cadastrados antes da atualizacao
$artigo = new Artigos($mysql);
$artigoEspecifico = $artigo->exibirArtigoEspecifico($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="post">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?php echo $artigoEspecifico['titulo']; ?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo">
                    <?php echo nl2br($artigoEspecifico['conteudo']); ?>
                </textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $artigoEspecifico['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>