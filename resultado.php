<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 003</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<main> 
<h1>Conversor de Moedas v1.0</h1>
<p>Seus R$ <?php $valorMonetario = $_GET["valorMonetario"];echo number_format($valorMonetario,2,",")?> equivalem a <strong> US$ <?php   $cotacao = 5.05;
    $valorMonetarioConvertido = $valorMonetario / $cotacao; echo  number_format($valorMonetarioConvertido,2,","); ?>   </p></strong>
     <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
<?php 
// Cotação dólar 5,05 no dia 4/4/24
    

?>


</main>
    
</body>

</html>

