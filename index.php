<?php

// comentário
/* comentário de bloco */
# comentário de linha

/* 
Compreender o que é o PHP e para que serve
Configurar o ambiente básico para execução de scripts PHP.
Escrever os primeiros programas utilizando PHP.

PHP é uma linguagem de programação voltada principalmente para dev WEB
Server-side - roda(é executada) do lado do servidor 
Funciona em conjunto com HTML, CSS, JS e intregra com Banco com dados Mysql, postgreSql, Oracle, SQL Server, etc.
Nasceu em 1994; 
Estrutura para funcionar (Server Linux, WAMPP, XAMPP, Laragon) - Ambiente de desenvolvimento

*/

// echo "Olá TDS01, seus lindos!"; // Console.WriteLine() no C#

// declaração de variáveis no PHP 
$A123;

// $x = 1.6; // = (atribuição ) / == (comparação) / === (comparação absoluta tipo e valor)
// $X = 2; // php é case sensitive (faz distinção entre maisúculo e minúsculo)
//echo $x.$X; // . serve para concatenar string

$escola = "Senac";
$numero = "8266";
$valorOnibus = 2.50;
$portaoAberto = true;

echo "Estudo no $escola 
no $numero da Av Itaquera, 
e o pago R$ $valorOnibus na passagem. Aberto: $portaoAberto ";
echo "<br>";

// variavel globais no PHP
//print_r ($_SESSION);

// constantes no PHP
// define("TESTE", "Conteúdo de uma contante");
// define("DB_NAME", "ComercialDB01");
// define("DB_USER", "root");
// define("DB_PASSWD", "20270");
// define("DB_SERVER", "10.91.47.131");

// echo DB_NAME." - ".DB_USER;
echo "<br>";
// operadores no PHP
$a = 5;
$b = 2;

echo -$a. "<br>"; // multiplica por -1
echo $b."<br>";
echo "$a + $b = ".$a+$b. "<br>"; // adição
echo "$a - $b = ".$a-$b. "<br>"; //subtração
echo "$a x $b = ".$a*$b. "<br>"; // multiplicação
echo "$a / $b = ".$a/$b. "<br>"; // divisão
echo "$b % $a = ".$b%$a. "<br>"; // resto da divisão (mod)
echo "$a ** $b = ".$a**$b. "<br>"; // exponenciação

echo "$a com incremento de 1 = ".++$a. "<br>"; // incremento de A
echo "$b com decremento de 1 = ".--$b. "<br>"; // incremento de B

echo "b - $b / a - $a <br>";


?>