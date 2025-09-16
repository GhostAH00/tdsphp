<?php 
include_once "usuario.php";
$user = new Usuario();

if($user->buscarPorId($_GET['id'])){
    echo "Usuario localizado! <br>";
    echo "Id: {$user->getId()} <br>";
    echo "Nome: {$user->getNome()} <br>";
    echo "Email: {$user->getEmail()} <br>";
    echo "Cadastrado em: {$user->getDataCad()}";

}

$user->setNome('Mia'); 
$user->setEmail('mia@gmail.com');

if($user->atualizar($_GET["id"])){
    echo "Usuário Atualizado com sucesso! <br>" ;
}

if($user->buscarPorId($_GET['id'])){
    echo "Usuario localizado! <br>";
    echo "Id: {$user->getId()} <br>";
    echo "Nome: {$user->getNome()} <br>";
    echo "Email: {$user->getEmail()} <br>";
    echo "Cadastrado em: {$user->getDataCad()}";

}

?>