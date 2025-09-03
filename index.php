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

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Olá TDS01, seus lindos!"; ?> </h1>
    
    <?php
        $nome = "Ghost"; // toda e qualquer variável no php é declarada iniciando com "$"
        $idade = 100;
        $email = "ghost@gmail.com"
    ?>
    <h2>
        <?php 
        // demonstra a concatenação de strings (.)
            echo "Meu nome é ".$nome.",\n tenho ".$idade." anos de idade,\n e meu email é ".$email
        ?>
    </h2>
    

</body>
</html>