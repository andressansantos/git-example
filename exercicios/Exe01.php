<?php

//Dado um número, encontre a soma de todos os múltiplos exclusivos de números 
//específicos até, mas não incluindo, esse número.
//Se listarmos todos os números naturais abaixo de 20 que são múltiplos de 3 ou 5, 
//obteremos 3, 5, 6, 9, 10, 12, 15 e 18. A soma desses múltiplos é 78.


$soma = 0;
$n = [3, 5, 6, 9, 10, 12, 15, 18];


for ($i = 0; $i < 8; $i++){

    if($n[$i]%5 == 0 || $n[$i]%3 == 0 ){

        if( $n[$i]!=3 AND $n[$i]!=5)
        {
        $soma += $n[$i];
        }
    }
      
}
echo $soma;

?>