
<?php
if (isset($_POST['calcular'])){ //esse comando serve para chamar o botão, eu to definindo que toda vez que eu clicko no botão roda essa parte, funciona como o action
$nome = $_POST['inserirNome'];
$altura = $_POST['inserirAltura'];
$peso = $_POST['inserirPeso'];
//$radioFeminino = $_POST['radioFeminino'];
//$radioMasculino = $_POST['radioMasculino'];

$altura = $altura * $altura;
$imc = $peso / $altura;
if ($imc < 18.5){
    $resultado;
    if( $imc >= 17) {
        $resultado = 'tá magro demais, o IMC é'.$imc; 
    }else if ( $imc < 17 && $imc >= 16){
        $resultado = " e ta muito magro com o IMC de" .number_format($imc, 2);;
    } else if( $imc < 16){
        $resultado=" e ta esqueleto com o IMC de ".number_format($imc, 2);;
    }
}
if($imc >= 18.5 && $imc < 25){
        $resultado = "parabéns, peso normal  ".number_format($imc, 2);;
}
if($imc >= 25 && $imc < 30){
        $resultado = "Sobrepeso com o IMC de ".number_format($imc, 2);;
}
if($imc >= 30){
    $resultado; 
    if ($imc <35){
        $resultado="Obesidade classe I com o IMC de  " .number_format($imc, 2);
}else if ($imc >= 35 && $imc < 40){
        $resultado = " Obesidade classe II com o IMC de  " .number_format($imc, 2);
}else if ($imc >= 40){
        $resultado= " Obesidade classe III com o IMC de  " .number_format($imc, 2);;
}
}
}
