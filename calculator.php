<?php
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$resultado;
$opcion=$_POST['opcion'];


if($opcion=='suma'){
	$resultado=($numero1+$numero2);
	echo "El resultado de la Suma es: ".$resultado;
	echo "<br>";
}
else
if ($opcion=='resta') {
	$resultado=($numero1-$numero2);
	echo "El resultado de la Resta es: ".$resultado;
	echo "<br>";
}
else
if ($opcion=='multiplicacion') {
	$resultado=($numero1*$numero2);
	echo "El resultado de la Multiplicación es: ".$resultado;
	echo "<br>";
}
else
if ($opcion=='division') {
	$resultado=($numero1/$numero2);
	echo "El resultado de la División es: ".$resultado;
	echo "<br>";
}

if($numero1>$numero2){
	echo "El número: $numero1 es Mayor que el número: $numero2";
	echo "<br>";
}
else
if($numero2>$numero1){
	echo "El número: $numero2 es Mayor que el número: $numero1";
	echo "<br>";
}
else
if($numero1==$numero2){
	echo "El número: $numero1 es Igual número: $numero2";
	echo "<br>";
}

echo "<br>";
echo "El número del Grupo es:15";
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 15; $i++) {
    echo $i;
    echo "<br>";
}
?>