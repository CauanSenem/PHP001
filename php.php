<?php 
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$total = $valor1 + $valor2 + $valor3;
if ($valor1>10)
{
    $cor = "color:blue;";
}
elseif ($valor2<$valor3)
{     
    $cor = "color:green;";
        
}
elseif ($valor3 < $valor1 and $valor3 < $valor2)
{
    $cor = "color:red;";
}
?>