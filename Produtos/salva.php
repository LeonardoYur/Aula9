<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['nome'];
echo "<br>";
echo $_POST['url'];
echo "<br>";
echo $_POST['desc'];
echo "<br>";
echo $_POST['pre'];

$codigoSQL = "INSERT INTO tblProdutos (id, nome, url,descricao, preco) VALUES (NULL, :nm, :url, :desc, :pre)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_POST['nome'], 'url' => $_POST['url'], 'desc' => $_POST['desc'], 'pre' => $_POST['pre']));

    if($resultado) {
	echo "Comando executado!<br>";
    } else {
	echo "Erro ao executar o comando!<br>";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
header("location: mostrar.php");