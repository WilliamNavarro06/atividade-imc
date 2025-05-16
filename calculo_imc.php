<?php
    // AQUI VAI RECEBER OS DADOS DO FORMULÁRIO
 
    $peso = $_POST ['peso'];
    $altura = $_POST ['altura'];
    $IMC = $peso / ($altura * $altura);
    $IMC = round($IMC , 2);
 
    echo $IMC;
 
?>
 