 <?php

// comentário
/* comentário de bloco */
# comentário de linha

/* 
Compreender o que é o PHP e para que serve.
Configurar o ambiente básico para execução de scripts PHP.
Escrever os primeiros programas utilizando PHP. 

PHP é uma linguagem de programação voltada principalmente para dev WEB
Server-side  - roda(é executada) do lado do servidor
Funciona em conjunto com HTML, CSS, JS, e integra (PDO) com Banco de dados Mysql, postgreSql, Oracle, SQL Server, etc.
Nasceu e 1994; 
Estrutura pra funcionar (Server Linux, WAMPP, XAMPP, Laragon) - Ambiente de desenvolvimento 

*/

// echo "Olá TDS01, seus lindos!"; // Console.WriteLine() no C#


// declaração de variáveis no PHP
// $ 

$A123;
$x = 1.6; // = (atribuição) /  == (comparação) / === (comparação absoluta tipo e valor)
$X = 2; // php é case sensitive (faz distinção entre maiúculo e minúsculo)

echo $x.$X; // . serve para concatenar string


$escola = "Senac";
$numero = 8266;
$valorOnibus = 2.50;
$portaoAberto = true;

echo "Estudo no $escola 
no número $numero da Av Itaquera, 
e pago R$ $valorOnibus na passagem. Aberto: $portaoAberto ";

// variáveis globais no PHP
//print_r($_SESSION);

//constantes no PHP

// define("TESTE", "Conteúdo de uma contante");
// define("DB_NAME", "ComercialDB01");
// define("DB_USER", "root");
// define("DB_PASSWD", "202720");
// define("DB_SERVER", "10.91.47.129");

// echo DB_NAME." - ".DB_USER;


// operadores no PHP
echo "<br>";

 $a = 2;
 $b = 11;
 echo -$a."<br>"; // multiplica por -1
 echo $b."<br>";
 echo "$a + $b = ".$a+$b."<br>"; // adição
 echo "$a - $b = ".$a-$b."<br>"; // subtração
 echo "$a x $b = ".$a*$b."<br>"; // multiplicação
 echo "$a / $b = ".$a/$b."<br>"; // divisão
 echo "$b % $a = ".$b%$a."<br>"; // resto da divisão (mod)
 echo "$a ** $b = ".$a**$b."<br>"; // exponenciação

 echo "$a com incremento de 1 = ".++$a."<br>"; // incremento de A
 echo "$b com decremento de 1= ".--$b."<br>"; // decremento de B
 echo "b - $b / a - $a  <br>";

 



 


?>