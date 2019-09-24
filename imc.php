<?php

$altura = 1.80;
$peso = 130.00;
$altura = $altura * $altura;
$pesoIMC = $peso / $alturaIMC;

if($pesoIMC < 18.5){
    echo "Pesp abaixo do ideal";
}
else if($pesoIMC < 24.9){
    echo "Peso ideal";
}
else if($pesoIMC < 29.9){
    echo "SobrePeso";
}
else if($pesoIMC < 34.9){
    echo "Obesidade grau 1°";
}
else if($pesoIMC < 39.9){
    echo "Obesidade grau 2°";
}
else {
    echo "Obesidade grau 3°";
}