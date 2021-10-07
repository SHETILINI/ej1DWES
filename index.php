<?php
$salario = 2000; 
$salario_formateado = number_format($salario, 2, ',', '.');
$travel = 400;
$travel_formateado = number_format($travel, 2, ',', '.');
$ret = 200;
$rentencion_formateado = number_format($ret, 2, ',', '.');
$taxbase;
//echo date("Y-m-d\TH-i");

print ("<p>The monthly payment corresponding to the month of: ");
echo strtoupper(date("F"));
print(" the worker John Smith, is, in gross: $salario_formateado €</p>");
printf ("<p>Plus Scroll: + $travel_formateado € </p>");
printf ("<p>Discount for Social Security: -$rentencion_formateado € </p>");


function tax() {
    global $salario, $travel, $ret;
    $taxbase = ($salario + $travel)-$ret;
    $taxbase_formateada = number_format($taxbase, 2, ',', '.');
    print ("<p>Tax base: $taxbase_formateada €</p>");
    return $GLOBALS['taxbase'] = $taxbase;

}
tax();

$irpf = $taxbase * 0.2;
$irpf_formateado = number_format($irpf, 2, ',', '.');
$total = $taxbase - $irpf;
$total_formateado = number_format($total,2, ',', '.');
print ("<p>Discount for Irpf: $irpf_formateado €</p>");  
print ("<p>Total: $total_formateado €</p>");
?>
