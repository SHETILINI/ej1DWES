<?php
$salario = 2000; 
$salario_formateado = number_format($salario, 2, ',', '.');
$travel = 400;
$travel_formateado = number_format($travel, 2, ',', '.');
$ret = 200;
$rentencion_formateado = number_format($ret, 2, ',', '.');
$taxbase;

print ("<pre>The monthly payment corresponding to the month of: \n ");
echo strtoupper(date("F"));
print(" the worker John Smith, is, in gross: \t \t \t $salario_formateado €</pre>");
printf ("<pre>Plus Scroll: \t \t \t \t \t \t \t +$travel_formateado € </pre>");
printf ("<pre>Discount for Social Security: \t \t \t \t \t -$rentencion_formateado € </pre>");


function tax() {
    global $salario, $travel, $ret;
    $taxbase = ($salario + $travel)-$ret;
    $taxbase_formateada = number_format($taxbase, 2, ',', '.');
    print ("<pre>Tax base: \t \t \t \t \t \t \t $taxbase_formateada €</pre>");
    return $GLOBALS['taxbase'] = $taxbase;

}
tax();

$irpf = $taxbase * 0.2;
$irpf_formateado = number_format($irpf, 2, ',', '.');
$total = $taxbase - $irpf;
$total_formateado = number_format($total,2, ',', '.');
print ("<pre>Discount for Irpf: \t \t \t \t \t \t -$irpf_formateado €</pre>");  
print ("<pre>Total: \t \t \t \t \t \t \t \t $total_formateado €</pre>");
?>
