<?php 
require_once('calculoIMC.php'); //esse require once ta chamando a função do calculo de IMC, ao inve's de utilizar o action, eu utilizo o require once
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>formulário</title>
</head>

<body>
    <div class="container">
        <h4>Formulário de IMC</h4>
        <form class="formularioAlterarNome" action="#" method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" id="inserirNome"name="inserirNome">

            </div>
            <div class="mb-3">
                <label  class="form-label">Altura(m)</label>
                <input type="number"step=".01" class="form-control" id="inserirAltura" name="inserirAltura"required="required" >

            </div>
            <div class="mb-3">
                <label  class="form-label">Peso(kg)</label>
                <input type="text" class="form-control" id="inserirPeso" name="inserirPeso" required="required">

            </div>
            <div class="radios-botoes">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioFeminino"  value="option1">
                <label class="form-check-label">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radioMasculino" value="option2">
                <label class="form-check-label">Masculino</label>
            </div>
</div>
<br>
            <button type="submit" name="calcular" class="btn btn-primary btn-sm">Calcular!</button>
            <br>
            <h6>RESULTADO</h6>
            <p>
            <!--(isset ($resultado)) ? $resultado:'' -->
                <?php if(isset($resultado)){
                    echo $resultado;
                }?> 
            </p>
        </form>
    </div>

    <script src="./js/bootstrap.js"></script>
</body>

</html>