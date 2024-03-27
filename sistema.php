<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário de Vendedor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 
<h2>Calculadora de Salário de Vendedor</h2>
<form method="post">
    <label>Nome do Vendedor: <input type="text" name="nome_vendedor" required></label><br>
    <label>Meta Semanal (em R$): <input type="number" name="meta_semanal" required></label><br>
    <label>Meta Mensal (em R$): <input type="number" name="meta_mensal" required></label><br>
    <button type="submit">Calcular Salário</button>
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $meta_semanal = $_POST['meta_semanal'];
    $meta_mensal = $_POST['meta_mensal'];
    $salario_minimo = 1500;
    $valor_sobre_meta_semanal = $meta_semanal >= $meta_semanal ? $meta_semanal * 0.01 : 0;
    $valor_excedente_semanal = $meta_semanal > $meta_semanal ? ($meta_semanal - $meta_semanal) * 0.05 : 0;
    $valor_excedente_mensal = $meta_semanal == $meta_mensal ? ($meta_semanal - $meta_mensal) * 0.1 : 0;
    $salario_final = $salario_minimo + $valor_sobre_meta_semanal + $valor_excedente_semanal + $valor_excedente_mensal;
    
    echo "<h3>Resultado para {$_POST['nome_vendedor']}:</h3>";
    echo "<p>Salário final do vendedor: R$ " . number_format($salario_final, 2, ',', '.') . "</p>";
}
?>
 
</body>
</html>
