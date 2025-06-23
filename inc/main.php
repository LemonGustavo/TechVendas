<?php
    include 'funcoes.php';
    if (!empty($_GET)){
        if ($_GET['acao']=='Adicionar Item') {
            header('Location: addCart.php');
        } else if ($_GET['acao']=='Cancelar') {
            session_destroy();
            header('Location: index.php');
        }
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
                    <div class="col-md-6">
                        <label>Cliente</label>
                        <input name="cpCli" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>CPF</label>
                        <input type="number" name="cpCpf" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="mt-4 btn btn-dark w-100 mb-4 w-100" value="Adicionar Item" name="acao">
                    </div>
                    <div class="col-md-12">
                        <table class="table mx-auto table-striped table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>ID</th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">Nenhum Produto.</td>
                                </tr>
                                <tr>
                                    <td>136</td>
                                    <td>Placa Mãe super turbo de Cyber Chase</td>
                                    <td>R$ 500,00</td>
                                    <td>5</td>
                                    <td>R$ 2500,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 text-end text-sucess">
                        <label class="fs-3">Total: R$ 0,00</label>
                    </div>
                    <div class="col-md-8 mt-5">
                    </div>
                    <div class="col-md-2">
                    <input type="submit" class="mt-4 btn btn-dark w-100 w-100" value="Cancelar" name="acao">
                    </div>
                    <div class="col-md-2">
                    <input type="submit" class="mt-4 btn btn-dark w-100 w-100" value="Concluir" name="acao">
                    </div>
                    <div class="col-md-2 mt-2">
                        <a href="index.php">Sair</a> 
                    </div>
                    <div class="col-md-10 text-end mt-2">
                        <label class="fw-bold">Vendedor: <?php echo $_SESSION['us'];?></label>
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