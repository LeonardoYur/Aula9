<?php 
$servidor = 'localhost';
$banco = 'bdLivros';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);