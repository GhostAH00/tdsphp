<?php 
include_once "usuario.php";
$user = new Usuario();

// echo "Inserindo usuario";

// $user-> setNome("Mirtes da Couves");
// $user ->setEmail("mirtes@gmail.com");

// if($user-> inserir()){
//     echo "Usuário $user->getNome() inserindo com sucesso! ";
// } 
// else{
//     echo "Falha ao inserir o usuário $user->getNome()!";
    
// }
// exit();

if($user->buscarPorId($_GET['id'])){
    echo "Id: {$user->getId()} <br>";
    echo "Usuário {$user->getNome()} <br>";
    echo "Email: {$user->getEmail()} <br>";
    echo "Cadastradi em: {$user->getDataCad()}";
}

?>