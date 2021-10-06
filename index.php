<?php
$salario = 2000; 
$travel = 400;
$ret = 200;
$taxbase;
printf ("<p>The monthly payment corresponding to the month of: the worker John Smith, is, in gross: %.2f €</p>",$salario);
printf ("<p>Plus Scroll: %+.2f €</p>",$travel);
printf ("<p>Discount for Social Security: -%.2f €</p>",$ret);


function tax() {
    global $salario, $travel, $ret;
    $taxbase = ($salario + $travel)-$ret;
    $taxbase_formateada = number_format($taxbase, 2, ',', '.');
    printf ("<p>Tax base: %.2f €</p>",$taxbase);
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
