<?php 
include_once "functions.php";
// funcões para string Funções nativas do PHP para strings (strlen, substr, strpos, str_replace, explode, implode, trim, strtolower, strtoupper, ucfirst, ucwords)

$nomeProduto = "  notebook dell Inspirion    ";
echo "Nome original: '$nomeProduto' <br>";

$nomeFormatadoTrim = trim($nomeProduto);// remove espaços do começo e do fim
echo "Nome formatado: '$nomeFormatadoTrim' <br>";

$nomeFormatado = ucfirst(trim($nomeProduto));
echo "Nome formatado: '$nomeFormatado' <br>";

$nomeFormatado = ucwords(trim($nomeProduto));
echo "Nome letras maiúsculas: $nomeFormatado <br>";

echo 'A string possui '.strlen(trim($nomeProduto)).' <br>';

$email = "WEllington.VSANTOS@GMAIL.coM";
echo "Email digitado: ".strtolower(trim($email))."<br>";

$frase = " O|Senac|Itaquera|é|bem|legal";
echo "Nós estamos no ". substr(trim($frase),2,5).'<br>' ;

$slug = strtolower(str_replace(" ","-",trim($nomeProduto)));
echo $slug.'<br>';

$explodido = explode("|",trim($frase));
print_r($explodido);



?>