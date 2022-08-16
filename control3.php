<center>
<?php
$misca = $_POST["Misca"];
$pisos = $_POST["Pisos"];
$panty = $_POST["Panty"];

$Cantidad = $misca + $pisos + $panty;
$total = ($misca*50000) + ($pisos*300000) + ($panty*40000);

if($Cantidad>10){

    print "<h1>La cantidad total a comprar es $Cantidad </h1>";
    
    print "<h1>El total de la compra es de $total </h1>";
} else{
    print "<h1>La cantidad total a comprar es $Cantidad </h1>";
   
    print "<h1>El total de la compra es de $total COP </h1>";
}

?>
</center>