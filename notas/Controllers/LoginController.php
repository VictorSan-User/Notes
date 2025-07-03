<?php
session_start();
require '../config/conexaoDatabase.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senhaInput = $_POST['senha'];

    if(empty($email)|| empty($senhaInput)){
        $_SESSION['erro'] = "Os campos são obrigatorios";
        header("Location: login.php");
        exit;
    }

    $busca = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
    $busca->execute([
        ':email' => $email
    ]);
    $response = $busca->fetch(PDO::FETCH_ASSOC);

    if($response){
        if(password_verify($senhaInput, $response['senha'])){
            $_SESSION['usuario_id'] = $response['id'];
            $_SESSION['usuario_nome'] = $response['nome'];
            $_SESSION['usuario_email'] = $response['email'];

            header("Location: ../view/home.php");
            exit;
        }else{
            $_SESSION['erro'] = "Senha incorreta.";
            header("Location: ../view/auth/login.php");
            exit;
        }
    }else {
        $_SESSION['erro'] = "E-mail não encontrado.";
        header("Location: ../view/auth/login.php");
        exit;
    }
}