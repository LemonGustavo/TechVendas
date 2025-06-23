<?php
session_start();
function conecta() {
    $pdo = new PDO('mysql:dbname=tecnovendas;port=3307', 'root', ''); //Tá usando Xampp (sem senha)
    $pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function busca($descricao) {
    $pdo = conecta();
    $query = $pdo->prepare('SELECT * FROM produto WHERE nomepro LIKE :x');
    $query->bindvalue(':x', $descricao.'%');
    $query->execute();
    $produtos = $query->fetchAll(PDO::FETCH_ASSOC);
    return $produtos;
}  

function logar($login, $senha) {
    $pdo = conecta();
    $query = $pdo->prepare('SELECT * FROM usuario WHERE login = :x AND senha = :y');
    $query->bindvalue(':x', $login);
    $query->bindvalue(':y', $senha);
    $query->execute();
    if ($query->rowcount()<=0) {
        return '! | Falha ao logar!';
    } else {
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['us']=$usuario['nomeus'];
        $_SESSION['id']=$usuario['idus'];
        header('Location: main.php'); 
    }
    exit();
}

function cadastrar_usuario($nome, $tipo, $login, $senha) {
    $pdo = conecta();
    $query = $pdo->prepare('INSERT INTO usuario(nomeus, tipo, login, senha) VALUES (:n, :t, :l, :s)'); //em PHP, verifica a sintexe do SQL está correta
    $query->bindvalue(':n', $nome);
    $query->bindvalue(':t', $tipo);
    $query->bindvalue(':l', $login);
    $query->bindvalue(':s', $senha);
    $query->execute();
    return 'Cadastrado com sucesso';
}

?>