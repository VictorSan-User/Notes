<?php
$host = 'localhost';
$dbname = 'notas';
$usuario = 'root';
$senha = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, pdo::ATTR_ERRMODE);
}catch(PDOException $e){
    die("Erro: Falha ao se conectar com o bando de dados:". $e->getMessage());
}