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
    
    $codigoSQL = "UPDATE tblTimes SET nome = :nm, pontos = :pt WHERE tblTimes.id = :id";
    
    try {
        $comando = $conexao->prepare($codigoSQL);
    
        $resultado = $comando->execute(array('nm' => $_GET['nome'], 'pt' => $_GET['pontos'], 'id' => $_GET['id']));
    
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