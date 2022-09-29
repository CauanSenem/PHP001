<?php 
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$total = $valor1 + $valor2 + $valor3;
if ($valor1>10)
{
    echo "<h3 style='color:blue;'>A primeira variável é maior que 10 e o resultado é $total</h3>";
}
if ($valor2<$valor3)
{     
    echo "<h3 style='color:green;'>A segunda variável é menor que a terceira e o resultado é $total</h3>";
        
}
if ($valor3 < $valor1 and $valor3 < $valor2)
{
    echo "<h3 style='color:red;'>A terceira variável é menor que a primeira e a segunda e o resultdo é $total</h3>";
}
?>