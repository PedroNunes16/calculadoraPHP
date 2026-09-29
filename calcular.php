<?php

include "Calculadora.php";

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacao = $_POST["operacao"];

$calculadora = new Calculadora($numero1, $numero2);

switch ($operacao) {

    case "+":
        $resultado = $calculadora->somar();
        break;

    case "-":
        $resultado = $calculadora->subtrair();
        break;

    case "*":
        $resultado = $calculadora->multiplicar();
        break;

    case "/":
        $resultado = $calculadora->dividir();
        break;

    default:
        $resultado = "Operação inválida.";
}

?>
<body>

<h1>Resultado</h1>

<p>Primeiro número: <?php echo $numero1; ?></p>
<p>Segundo número: <?php echo $numero2; ?></p>
<p>Operação: <?php echo $operacao; ?></p>

<h2>Resultado: <?php echo $resultado; ?></h2>

<a href="index.php">Voltar</a>

</body>
</html>