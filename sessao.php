<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    <input type="submit" value="Cadastrar">
</form>
<br>

<form action="" method="post">
    <input type="submit" value="Apagar" name="apagar">
</form>
<?php 
session_start();
if (!isset($_SESSION['cadastros'])){
    $_SESSION['cadastros'] = [];
}

if($_POST){
    if(isset($_POST['nome'])){
        $_SESSION['cadastros'][]=[
            "nome" => $_POST['nome'],
            "idade" => $_POST['idade']
        ];
        
    }
}
if(isset($_POST['apagar'])){
    session_destroy();
        
}

echo "<h3>Cadastros</h3>";
if(isset($_SESSION['cadastros'])){
   foreach ($_SESSION['cadastros'] as $cad)
    echo "Nome: {$cad['nome']} - Idade: {$cad['idade']} <br>";

}

?>