<?php 
$servidor = 'localhost';
$banco = 'bdTimes';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);