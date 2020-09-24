<?php
$operando1=$_GET['operando1'];
$operador=$_GET['operador'];
$hora = 60;
$seg = 3600;

if($operador=="value1"){
    $solucion=$operando1*$hora;
}else if($operador=="value2"){
    $solucion=$operando1*$seg;
}else if($operador=="value3"){
    $solucion=$operando1*$hora;
}else if($operador=="value4"){
    $solucion=$operando1/$seg;
}else if($operador=="value5"){
    $solucion=$operando1/$hora;
}     
echo "<!DOCTYPE html>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Convertidor de tiempo</title>
</head>
<body>";
echo"<h1>El resultado es: ".$solucion."</h1>";
"</body>";
?>