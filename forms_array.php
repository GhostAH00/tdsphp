
<form method="get">
Nome: <input type="text" name="nome">
<br>
Senha: <input type="password" name="senha">
<input type="submit" value="Enviar">
</form>

<?php 

// print_r($_GET);

if(isset($_GET['nome'])){
    echo "Olá, ". $_GET['nome'];
    echo "<br>A senha digitada foi: ". $_GET['senha'];

}
?>

<br>
---------------------------
<br>

<form method="post">
    Email: <input type="email" name="email" >
    <br>
    Token: <input type="password" name="token" >
    <input type="submit" value="Enviar">
</form>
<?php 
if(isset($_POST['email'])){
    echo "Seu email é: " . $_POST['email'];
    echo "<br> O token é: ". $_POST['token'];
}
?>
<br>
---------------------------
<br>
<form method="post">
    Idade: <input type="number" name="idade">
    <input type="submit" value="Enviar">
</form>
<?php 
if(isset($_REQUEST['idade'])){
    echo "Idade recebida: ". $_REQUEST['idade'];
}
?>
<br>
----------Validação-----------------
<br>
<form action="dados.php" method="post">
    Usuário: <input type="text" name="usuario">
    <input type="submit" value="Login">
</form>

<br>
---------------------------
<br>

<?php 
 $endereco = "http://republicavirtual.com.br/web_cep.php?cep=08225380&formato=json";
print_r($endereco);
?>

<br>
---------------------------
<br>
<form action="" method="post">
    Selecione seus Cursos:<br>
    <br>
    <input type="checkbox" name="cursos[]" value="PHP" checked>PHP <br>
    <input type="checkbox" name="cursos[]" value="C#">C# <br>
    <input type="checkbox" name="cursos[]" value="HTML">HTML <br>
    <input type="checkbox" name="cursos[]" value="JS">JS <br>
    <input type="submit" value="Enviar">
</form>

<?php 
//print_r($_POST['cursos']);

if (isset($_POST['cursos'])){
    foreach ($_POST['cursos'] as $curso){
        echo "Curso escolhido: " . $curso . "<br>";
    }
}
?>