<?php 
require_once "db.php";

function formatarPreco(float $valor):string{
    return "R$ ". number_format($valor, 2, ",", ".");
}
// insere produtos na tabela
function inserirProduto(string $nome, float $preco):bool{
    $pdo = getConnection();
    $cmd = $pdo->prepare("insert into produtos (nome, preco, datacad) values(:nome, :preco, default)"); 
    return $cmd->execute([":nome"=>$nome,":preco"=>$preco]) ;
}

// listando produtos...
function listarProdutos():array{
    $pdo = getConnection();
    $cmd = $pdo->query("Select * from produtos order by id desc");
    return $cmd->fetchAll();
}

// listando produtos por id
function buscarProdutoPorId(int $id):?array{
    $pdo = getConnection();
    $cmd = $pdo->prepare("select * from produtos where id = :id");
    $cmd->execute([":id"=>$id]);
    $produto = $cmd->fetch();
    return $produto?:null ;
}

// Editando o produto
function editarProduto(int $id, string $nome, float $preco ):bool{
    $pdo = getConnection();
    $cmd = $pdo->prepare("update produtos set nome = :nome, preco = :preco where id = :id");
    return $cmd->execute([":nome"=>$nome,":preco"=>$preco,":id"=>$id]);
}

// Excluindo o produto
function excluirProduto(int $id):bool{
    $pdo = getConnection();
    $cmd = $pdo->prepare("Delete from produtos where id = :id");
    return $cmd->execute([":id"=>$id]);
}





?>