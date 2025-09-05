<?php 

// Estruturas condicionais (if, if...else, if, elseif...else, switch, ?:(ternário), null - ?? (coalecência))

#Ex 1
$idade = 18; // if simples

if  ($idade >= 18) {
    echo"Você é maior de idade.";
}
echo"<br>";

#Ex 2
$numero = 5;
if ($numero % 2 == 0) {
    echo "Número par";
} else {
    echo "Número impar";
}
echo"<br>";

#Ex 3
$nota = 9.5;
if($nota >=9){
   echo "Execelente!";
} elseif($nota >= 5){
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}
echo"<br>";

#Ex 4
$dia = 3;
switch ($dia) {
    case 1: echo "Domingo"; break;
    case 2: echo "Segunda"; break;
    case 3: echo "Terça"; break;
    default: echo "Outro dia da semana"; break;
}
echo"<br>";

#Ex 5
$login = false;
echo $login ? "Bem-vindo!":"Acesso negado!";
echo "<br>";

#Ex 6
// if (isset($login)){
//     echo "A variável login tem um valor atribuído";
// }
$nome = $_GET["nome"] ?? "Visitante"; // coalecência
echo "Olá $nome";
echo "<br>";

// Laços de reptição - while, do... while, for, foreach, controle  de laços (break e continue )
echo "<br> Laços de reptição - while, do... while, for, foreach <br>"; 
#Ex 1
$i =1;
while ($i <= 5) {
    echo "Contando: $i <br>";
    $i++;
}
echo "<br>";

#Ex 2 
$j = 1;
do{
    echo "Número $j ";
    $j++;
}while($j <= 3);
echo "<br>";

#Ex 3
for ($k = 1; $k <= 5; $k++) {
    echo "Valor: $k <br>";
}
echo "<br>";

#Ex 4

$frutas = ["Nome" =>"Maca","Tipo"=>"Gala","Validade"=>"out/2025"];
foreach($frutas as $chave => $valor) {
    echo "$chave: $valor <br>" ;
}
echo "<br>";
$carros = ["Fusca", "Gol", "Corsa", "Kombi"];
foreach($carros as $carro) {
    echo"Carro: $carro <br>";
}
echo "<br>";

#Ex 5
for ($k = 1; $k <= 5; $k++) {
    if ($k == 2) continue; // pula no 2
    if ($k == 4) break; // para no 4
    echo"Valor :  $k <br>";
}
echo "<br>";

// Marizes no PHP
/*Arrays indexados / Arrays associativos / Arrays multidimensionais
Funções úteis para arrays (count, array_push, in_array, array_keys, sort, rsort)
*/

echo "<br> Matrizes <br>";
echo "<br>";
#Ex 1 
$numeros = [10, 20, 30];
echo $numeros[0];
echo "<br>";

#Ex 2 - Associativa
$veiculos = ['Tipo'=>"Carro", 'Marca'=>"Toyota", 'Modelo'=> "Corolla", 'Ano'=>2022];
echo $veiculos['Modelo'];
echo "<br>";

#Ex 3 - Mulidimensional 
$alunos=[
    ['Nome'=> 'Rafael', 'Idade'=> 26],
    ['Nome'=> 'Crystal', 'Idade'=> 16],
    ['Nome'=> 'Paola', 'Idade'=> 28]
];
echo $alunos[0]['Nome']." ". $alunos[0]['Idade'];
echo "<br>";
$alunosjson = json_encode($alunos);
print_r($alunosjson);
echo "<br>";

#Ex 4 - Usando count
$cores = ["Azul", "Verde", "Amarelo"];
echo "Quantidade: ".count($cores);

#Ex 5 - Inserindo
$animais = ['Cachorro', 'Gato'];
array_push($animais, "Pássaro"); // Inserido no final da matriz via push
print_r($animais);
echo "<br>";

#Ex 6 - Ordenando array
$valores = [5, 3, 9, 1, 7, 4];
sort($valores);
print_r($valores);


?>

<!-- <form action="estruturas.php" method="get">
    <input type="text" name="nome" id="" placeholder="Digite seu nome">
    <button type="submit">Entrar</button>
</form> -->