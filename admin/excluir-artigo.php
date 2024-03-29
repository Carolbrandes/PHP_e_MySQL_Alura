<?php
require_once '../src/conexaoBD.php';
require_once '../src/classes/Artigos.php';
require_once '../src/redirecionar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigos($mysql);
    $artigo->removerArtigo($_POST['id']);
    redirecionar('index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Você realmente deseja excluir o artigo <?php echo $_GET['titulo'];?>?</h1>
        <form method="post" action="excluir-artigo.php">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
               
                <button class="botao">Excluir</button>
            </p>
        </form>
    </div>
</body>

</html>