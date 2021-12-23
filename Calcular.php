<?php

require __DIR__.'/vendor/autoload.php';

use \App\WebService\Correios;

$obCorreios = new Correios();

$codigoServico = "04014";
$cepOrigem = "09010100";
$cepDestino = "24310430";
$peso = 1;
$formato = 1;
$comprimento = 15; 
$altura = 15;
$largura = 15;
$diametro = 0;
$maoPropria = false;
$valorDeclarado = 0;
$avisoRecebimento = false;



$frete = $obCorreios->calcularfrete(    $codigoServico, 
                                        $cepOrigem, 
                                        $cepDestino, 
                                        $peso, 
                                        $formato, 
                                        $comprimento, 
                                        $altura, 
                                        $largura,
                                        $diametro,
                                        $maoPropria,
                                        $valorDeclarado,
                                        $avisoRecebimento);

echo "<pre>";
print_r($frete);
echo "</pre>"; 
exit;
