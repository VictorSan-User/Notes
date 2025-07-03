<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - iDiario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .btn-primary {
            background-color: #4b0082;
            border-color: #4b0082;
        }
        .btn-primary:hover {
            background-color: #5e2ca5;
            border-color: #5e2ca5;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2 class="mb-4">Login</h2>
        <?php
        if(isset($_SESSION['success'])){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                . $_SESSION['success'] .
                '
            </div>';
            unset($_SESSION['success']);
        }
        ?>
        <form action="../../Controllers/LoginController.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
                <?php
                if(isset($_SESSION['erro'])){
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
                        . $_SESSION['erro'] .
                        '
                    </div>';
                    unset($_SESSION['erro']);
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
</form>
            <a href="../../index.php" class="btn btn-outline-secondary w-100 mt-2">Voltar</a>

            <div class="mt-3">
                <small>Não tem uma conta? <a href="Novoregistro.php">Criar Conta</a></small>
            </div>
    </div>

</body>
</html>
