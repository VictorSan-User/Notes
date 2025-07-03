<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - iDiario</title>
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
        .btn-secondary {
            background-color:rgb(132, 156, 160);
            border-color: rgb(132, 156, 160);
            color: #fff;
        }
        .btn-secondary:hover {
            background-color:rgb(97, 120, 123);
            border-color:rgb(97, 120, 123);
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
        <h2 class="mb-4">Criar Conta</h2>
        <form action="../../Controllers/NovoRegistroController.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <div class="mb-3">
                <label for="ConfirmSenha" class="form-label">Confirme sua senha</label>
                <input type="password" name="ConfirmSenha" id="ConfirmSenha" class="form-control">
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
            <button type="submit" class="btn btn-primary w-100">Criar Conta</button>
            </form>
            <a href="login.php" class="btn btn-outline-secondary w-100 mt-2">Voltar</a>

        </form>
    </div>

</body>
</html>
