<?php 
// definindo timezone para America/Sao_Paulo
date_default_timezone_set('America/Sao_Paulo');
/*
Funções de data (date, time, strtotime).
Classe DateTime e métodos (format, modify, diff).
Cálculo de prazos (exemplo: vencimento de serviços).
Conversão e formatação (BR ↔ padrão SQL).
*/
$dataHoje = new DateTime();
echo "Hoje: ".$dataHoje->format('d/m/y h:i:s e').'<br>';

$prazo = new DateTime();
$diasEntrega = 12;
$prazo->modify("+{$diasEntrega} days");
echo "Entrega prevista para: ". $prazo->format('d/m/y')."<br>";

// diferença entre datas
$dataVencimento = new DateTime('2025-09-01');
$dataPagamento = new DateTime('2029-09-15');
$diasAtraso = $dataVencimento->diff($dataPagamento);

echo $diasAtraso->d. " anos de atraso" ;


?>