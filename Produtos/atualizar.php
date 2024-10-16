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

    echo "Conectado!<br>";
    
    $codigoSQL = "UPDATE tblProdutos SET nome = :nm, url = :url, descricao = :desc, preco = :pre WHERE tblProdutos.id = :id";
    
    try {
        $comando = $conexao->prepare($codigoSQL);
    
        $resultado = $comando->execute(array('nm' => $_GET['nome'], 'url' => $_GET['url'], 'desc' => $_GET['desc'], 'pre' => $_GET['preco'], 'id' => $_GET['id']));
    
        if($resultado) {
        echo "Comando executado!";
        } else {
        echo "Erro ao executar o comando!";
        }
    } catch (Exception $e) {
        echo "Erro $e";
    }
    $conexao = null;
    
    ?>  
</body>

</html>