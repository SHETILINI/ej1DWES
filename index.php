<?php
$salario = 2000; 
$travel = 400;
$ret = 200;
$taxbase;
string date (string $formato [, int $fechahora]);
printf ("<p>The monthly payment corresponding to the month of:" (date(“l, d M Y”); ), "of the worker John Smith, is, in gross: %.2f €</p>",$salario);
printf ("<p>Plus Scroll: %+.2f €</p>",$travel);
printf ("<p>Discount for Social Security: -%.2f €</p>",$ret);


function tax() {
    global $salario, $travel, $ret;
    $taxbase = ($salario + $travel)-$ret;
    printf ("<p>Tax base: %.2f €</p>",$taxbase);
    return $GLOBALS['taxbase'] = $taxbase;

}
tax();

$irpf = $taxbase * 0.2;
$total = $taxbase - $irpf; 
printf ("<p>Discount for Irpf: : -%.2f €</p>",$irpf);  
printf ("<p>Total: %.2f €</p>",$total);
?>
