<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando dados</title>
</head>

<body>
    <?php
    include("conexao.php");

    $id = $_GET['id'];
    $comandoSQL = "SELECT titulo, idioma, quantidade, editora, data, isbn FROM tblLivros WHERE id = $id";

    $comando = $conexao->prepare($comandoSQL);
    $resultado = $comando->execute();

    if ($resultado) {
        if ($linha = $comando->fetch()) {
            ?>
            <form action="atualizar.php" method="POST">
                <label for="titulo">Titulo:</label>
                <?php echo "<input type='text' name='titulo' value='{$linha['titulo']}'><br>"; ?>
                <label for="idioma">Idioma:</label>
                <?php
                echo "<input type='text' name='idioma' value='{$linha['idioma']}'><br>";
                echo "<input type='hidden' name='id' value=$id>";
                ?>
                <label for="quant">Quantidade de páginas:</label>
                <?php echo "<input type='number' name='quant' value='{$linha['quantidade']}'><br>"; ?>
                <label for="editora">Editora:</label>
                <?php echo "<input type='text' name='editora' value='{$linha['editora']}'><br>"; ?>
                <label for="data">Data da publicação:</label>
                <?php echo "<input type='date' name='data' value='{$linha['data']}'><br>"; ?>
                <label for="isbn">ISBN:</label>
                <?php echo "<input type='text' name='isbn' value='{$linha['isbn']}'><br>"; ?>
                <input type="submit">
            </form>
            <?php
        }
    } else {
        echo "Erro no comando SQL";
    }
    ?>
</body>

</html>