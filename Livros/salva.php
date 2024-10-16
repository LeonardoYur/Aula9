<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['titulo'];
echo "<br>";
echo $_POST['idioma'];
echo "<br>";
echo $_POST['quant'];
echo "<br>";
echo $_POST['editora'];
echo "<br>";
echo $_POST['data'];
echo "<br>";
echo $_POST['isbn'];
echo "<br>";

$codigoSQL = "INSERT INTO tblLivros (id, titulo, idioma, quantidade, editora, data, isbn) VALUES (NULL, :ti, :idi, :quan, :edi, :dat, :isbn)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('ti' => $_POST['titulo'], 'idi' => $_POST['idioma'], 'quan' => $_POST['quant'], 'edi' => $_POST['editora'], 'dat' => $_POST['data'], 'isbn' => $_POST['isbn']));

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