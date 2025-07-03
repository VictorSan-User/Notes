<?php
session_start();
include '../config/conexaoDatabase.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if(empty($nome)||empty($email)||empty($senha)){
        $_SESSION['erro'] = "Os campos sao obrigatorios";
        header("Location: ../view/auth/Novoregistro.php");
        exit;
    }

    if($senha != $_POST['ConfirmSenha']){
        $_SESSION['erro'] = "As senhas são diferentes";
        header("Location: ../view/auth/Novoregistro.php");
        exit;
    }

    $senhaEncriptada = password_hash($senha, PASSWORD_DEFAULT);

    $busca = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
    $busca->execute([
        ':email' => $email
    ]);
    $resultado = $busca->fetch(PDO::FETCH_ASSOC);

    if($resultado){
        $_SESSION['erro'] = "Email já cadastrado";
        header("Location: ../view/auth/Novoregistro.php");
        exit;
    }

    $novoRegistro = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $novoRegistro->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senhaEncriptada
    ]);
    $_SESSION['success'] = "Novo usuario cadastrado. Faça o login";
    header("Location: ../view/auth/login.php");
}