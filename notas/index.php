<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iDiario - Gerencie suas Anotações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #4b0082;
            font-weight: bold;
        }
        p {
            font-size: 1.1rem;
        }
        .btn-primary {
            background-color: #4b0082;
            border-color: #4b0082;
        }
        .btn-primary:hover {
            background-color: #5e2ca5;
            border-color: #5e2ca5;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>iDiario</h1>
        <p>Organize suas tarefas, ideias e lembretes de forma simples, rápida e inteligente.</p>

        <div class="d-grid gap-2 col-8 mx-auto mt-4">
            <a href="view/auth/login.php" class="btn btn-primary btn-lg">Entrar</a>
            <a href="view/auth/Novoregistro.php" class="btn btn-secondary btn-lg">Criar Conta</a>
        </div>
    </div>

</body>
</html>
