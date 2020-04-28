<?php

//Declaración de variables
$a="Hola Mundo";
$b=3;
$c=2.5;

//Funciones
function miFuncion() {
    global $a, $b;

    $a="Cambiar texto";
}

miFuncion();
//echo $a;

//echo $a." ".$b." ".$c;

//Arreglos
$array_1=array();
$array_2=array();

$array_1[]=1;
$array_1[]=2;
$array_1[]=3;

//var_dump($array_1);

$array_2['Valor1']=1;
$array_2['Valor2']=2;
$array_2['Valor3']=3;

//var_dump($array_2);
//echo $array_2['Valor2'];

$alumno['cve_unica']="282816";
$alumno['nombre']="Alvaro";
$alumno['apellidos']="De la Rosa";

//$json=json_encode($alumno)

$json='{"cve_unica":"282816","nombre":"Alvaro","apellidos":"De la Rosa"}';

$alumno_aux=json_decode($json);

//var_dump($alumno_aux);

//echo $alumno_aux->cve_unica;

class Aux {
    public $x;
    public $y;
}

$aux=new Aux();

$aux->x="Valor X";

var_dump($aux);
?>