<?php
    require 'funcoes.php';
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
                    <div class="col-md-10">
                        <label>Produto</label>
                        <input type="text" name="cpPro" class="form-control" placeholder="Exemplo: Placa Mãe Ryzen...">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="mt-4 btn btn-dark w-100 mb-4 w-100" value="Buscar">
                    </div>
                    <div class="col-md-12">
                        <table class="table mx-auto table-striped table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>ID</th>
                                    <th>Produto</th>
                                    <th>Fabricante</th>
                                    <th>Preço</th>
                                    <th>Estoque</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(empty($_GET)) {
                                echo '<tr>';
                                    echo '<td colspan="6">Nenhum Produto.</td>';
                                echo '</tr>';
                                } else {
                                    $produtos = busca($_GET['cpPro']);
                                    if(!empty($produtos)) {
                                        foreach ($produtos as $produto) {
                                            echo '<tr>';
                                            echo '<td>'.$produto['idproduto'].'</td>';
                                            echo '<td>'.$produto['nomepro'].'</td>';
                                            echo '<td>'.$produto['fab'].'</td>';
                                            echo '<td>'.$produto['preco'].'</td>';
                                            echo '<td>'.$produto['estoq'].'</td>';
                                            echo '<td><a href="#">Selecionar</a></td>';
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr>';
                                        echo '<td colspan="6">Nenhum Produto.</td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2 mt-2">
                        <a href="main.php">Voltar</a> 
                    </div>
                    <div class="col-md-10 text-end mt-2">
                        <label class="fw-bold">Vendedor: <?php echo $_SESSION['us']; ?></label>
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