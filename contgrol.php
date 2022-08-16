<center>
<?php
$a=$_POST["Name1"];
$b=$_POST["Name2"];
$c=$_POST["Cash"];


if($c >= 1000000){

    print " <h1>$a $b Se Gana Un Salario Minimo</h1>";

}elseif($c<=0){

    print "<h1>$a $b Inserto Un Numero No Valido</h1>";
}else{

    print " <h1>$a $b No Se Gana Un Salario Minimo</h1>";
}

?>
</center>