<?php
$n_brinquedos = 1; 
$altura_carlitos = 100;
$altura_brinquedos = [100];
$pode_ir = 0;
for($i = 0; $i < $n_brinquedos; $i++){
   if($altura_carlitos >= $altura_brinquedos[$i]){
      $pode_ir++;
   }
}
echo $pode_ir;