<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Dados</title>
</head>

<body>
    <?php
    include("conexao.php");

    $comandoSQL = 'SELECT  id, nome, url, descricao, preco FROM tblProdutos';
    $comando = $conexao->prepare($comandoSQL);
    $resultado = $comando->execute();
    if ($resultado) {
        echo 'Mostrando Resultado: <br>';
        while ($linha = $comando->fetch()) {
            echo $linha['nome'] . " ";
            echo $linha['url'] . " ";
            echo $linha['descricao'] . " ";
            echo $linha['preco'] . " ";
            $id = $linha['id'];
            echo "<a href='excluir.php?id=$id' class='btn btn-primary'>Apagar</a>";
            echo "<a href='formulario_update_novo.php?id=$id' class='btn btn-primary'>Editar</a><br>";
            echo "<br>";
        }
    }
    ?>
</body>

</html>