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
    $comandoSQL = "SELECT nome, url, descricao, preco FROM tblProdutos WHERE id = $id";

    $comando = $conexao->prepare($comandoSQL);
    $resultado = $comando->execute();

    if ($resultado) {
        if ($linha = $comando->fetch()) {
            ?>
            <form action="atualizar.php">
                <label for="nome">Nome:</label>
                <?php echo "<input type='text' name='nome' value='{$linha['nome']}'><br>"; ?>
                <label for="url">URL:</label>
                <?php
                echo "<input type='text' name='url' value='{$linha['url']}'><br>";
                echo "<input type='hidden' name='id' value=$id>";
                ?>
                <label for="descricao">Descrição:</label>
                <?php echo "<input type='text' name='desc' value='{$linha['descricao']}'><br>"; ?>
                <label for="preco">Preço:</label>
                <?php echo "<input type='text' name='preco' value='{$linha['preco']}'><br>"; ?>
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