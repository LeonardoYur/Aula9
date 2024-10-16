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
    
    $codigoSQL = "UPDATE tblLivros SET titulo = :ti, idioma = :idi, quantidade = :quant, editora = :edi, data = :da, isbn = :isbn WHERE tblLivros.id = :id";
    
    try {
        $comando = $conexao->prepare($codigoSQL);
    
        $resultado = $comando->execute(array('ti' => $_POST['titulo'], 'idi' => $_POST['idioma'], 'quant' => $_POST['quant'], 'edi' => $_POST['editora'], 'da' => $_POST['data'], 'isbn' => $_POST['isbn'], 'id' => $_POST['id']));
    
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