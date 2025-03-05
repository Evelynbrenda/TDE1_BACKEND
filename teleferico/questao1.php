<?php

$cpd_cabine = 10;
$n_alunos = 20;

$cpd_final = $cpd_cabine - 1;

$n_viagem = intval(($n_alunos + $cpd_final - 1) / $cpd_final);

echo $n_viagem;