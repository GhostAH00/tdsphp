<?php 
 
// estruturas condicionais (if, if..else, if...elseif...else, switch, ?:(ternário), null - ?? (coalecência) )  

#Ex 1
$idade = 18; // if simples
if ($idade >= 18) {
    echo "Você é maior de idade.";
} 
 echo "<br>";

#Ex 2
 $num = 5;
if ($num % 2 == 0) { 
   echo "Número par";
} else {
    echo "Número ímpar"; // 5 é ímpar
}
echo "<br>";

#Ex 3
$nota = 7;
if ($nota >= 9) {
    echo "Excelente!!";
} elseif ($nota >=6 ) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
echo "<br>";

#Ex 4  
$dia = 1;
switch ($dia) {
    case 1: echo "Domingo";  break;
    case 2: echo "Segunda";  break;
    case 3: echo "Terça";  break;
    default: echo "Outro dia da semana."; break;
}
echo "<br>";

#Ex 5 
$login = true;
echo $login ? "Bem-vindo!" : "Acesso negado!";
echo "<br>";

#Ex 6
$nome = $_GET['nome'] ?? "Visitante"; // coalecência
echo "Olá $nome";
echo "<br>";

// Laços de repetição  - while, do...while, for, foreach, controle de laço (break e continue)
echo "<br> Laços de repetição  - while, do...while, for, foreach <br> ";
#Ex 1
$i = 1;
while ($i <= 5){
    echo "Contando: $i <br>";
    $i++;
}
echo "<br>";

#Ex 2 
$j = 1;
do {
    echo "Número $j  ";
    $j++;
}while($j <= 3);
echo "<br>";

#Ex 3
for ($k = 1; $k <= 5; $k++){
    echo "Valor: $k <br>";
}

#Ex 4
$frutas = ["nome"=>"Maça","Tipo"=>"Gala","Validade"=>"out/2025"];
foreach ($frutas as $chave => $valor) {
   echo "$chave: $valor <br>" ;
}
echo "<br>";
#Ex 4.1
$carros = ["Fusca", "Gol", "Corsa", "Kombi"];
foreach($carros as $carro){
    echo "Carro: $carro <br>";
}

echo "<br>";
#Ex 5
for ($k = 1; $k <= 5; $k++){
    if ($k == 2) continue; // pula o 2
    if ($k == 4) break; // para no 4
    echo "Valor: $k <br>";
}
 
// Matrizes no PHP
/*Arrays indexados / Arrays associativos /Arrays multidimensionais
Funções úteis para arrays (count, array_push, in_array, array_keys, sort, rsort)
*/
echo "<br> Matrizes <br>";
echo "<br>";
#Ex 1 - simples
$numeros = [10,20,30];
echo $numeros[0]; 
echo "<br>";
#Ex 2 - Associativa
$veiculos = ['Tipo'=>"Carro",'Marca'=>"Toyota",'Modelo'=>"Corolla",'Ano'=>2022];
echo $veiculos['Marca'];
echo "<br>";
#Ex 3 - multidimensional
$alunos=[
    ['nome'=>'Ana','idade'=>'19'],
    ['nome'=>'Maria','idade'=>'18'],
    ['nome'=>'José','idade'=>'21']
];
echo $alunos[0]['nome']." ". $alunos[2]['idade'] ;
echo "<br>";
$alunosjson = json_encode($alunos);
print_r($alunosjson);
echo "<br>";
#Ex 4 - Usando count
$cores = ["Azul", "Verde", "Amarelo"];
echo "Quantidade: ". count($cores);
echo "<br>";
#Ex 5 - Inserindo com array_push
$animais = ['Cachorro', 'Gato'];
array_push($animais, "Pássaro"); // inserido no final da matriz via push
print_r($animais);
echo "<br>";
#Ex 6  - Ordenando array
$valores = [5,3,9,1,7,4];
sort($valores);
print_r($valores);
?>
<form action="estruturas.php" method="get">
    <input type="text" name="nome" id="" placeholder="Digite o nome" >
    <button type="submit">Entrar</button>
</form>