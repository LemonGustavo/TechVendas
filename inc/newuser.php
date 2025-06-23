<?php
    include 'funcoes.php';
    if (!empty($_GET)) {
        $nome = $_GET['cpNome'];
        $tipo = $_GET['cpTipo'];
        $login = $_GET['cpLogin'];
        $senha = $_GET['cpSenha'];
        $msg = cadastrar_usuario($nome, $tipo, $login, $senha);
        echo '<div class="alert alert-success" role="alert" style="max-width: fit-content; margin-left: auto; 
            margin-right: auto; background: white;">';
            echo $msg;
        echo '</div>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tecno Venda</title>
</head>
<body class="bg-dark">
    <form>
    <div class="card w-75 mt-3 mx-auto">
            <img src="../img/Tecna.png" class="card-img-top m-auto" style="width:20%">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Nome</label>
                        <input maxlenght="80" name="cpNome" class="form-control">
                    </div>
                    <div class="col-3">
                        <label>Tipo</label>
                        <select class="form-select" name="cpTipo" required>
                            <option selected">Escolha o tipo de usuário...</option>
                            <option value="Vendedor">Vendedor</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Estagiário">Estagiário</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label>Login</label>
                        <input class="form-control" name="cpLogin">
                    </div>
                    <div class="col-2">
                        <label>Senha</label>
                        <input type="password" name="cpSenha" class="form-control">
                    </div>
                    <div class="col-2">
                        <input type="submit" class="mt-4 btn btn-dark w-100 mb-4 w-100" value="Cadastrar">
                    </div>
                    <div class="col-12">
                        <a href="index.php">Voltar</a> 
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer class="text-white w-100 text-center bg-black" style="position: fixed; bottom: 0; left: 0">
        <div class="container">
            Tecno Vendas 2024 - @vinici_gustavo
        </div>
    </footer>
</body>
</html>