<?php 
$servidor = 'localhost';
$banco = 'bdProdutos';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);