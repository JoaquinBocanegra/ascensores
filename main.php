<?php
include_once("ascensor.php");

$nuevoAscensor = new Ascensor();

$nuevoAscensor->setPesoMaximoPermitido(500);
$nuevoAscensor->setCantidadMaximaPersonas(5);
$nuevoAscensor->addPersona(100);
$nuevoAscensor->addPersona(120);
$nuevoAscensor->addPersona(80);
$nuevoAscensor->addPersona(80);
$nuevoAscensor->addPersona(80);
// var_dump($nuevoAscensor);
$valorVerificacion=$nuevoAscensor->encenderAlarma();
if($valorVerificacion){
    echo "normal";
    }else
    echo "encender alarma";


?>