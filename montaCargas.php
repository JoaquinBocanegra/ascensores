<?php

include_once("carga.php");
include_once("elevador.php");

class MontaCargas extends Elevador{
    private $id;
    private $pesoMaximoPermitido;
    
    private $carga=[];
    

    public function getId(){
        return $this->id;

    }
    public function setId($nuevoId){
        $this->id=$nuevoId;
      }
    public function getUbicacion(){
        return $this->ubicacion; 
    }
    public function setUbicacion($nuevaUbicacion){
        $this->ubicacion=$nuevaUbicacion;
    }

    public function getPesoMaximoPermitido(){
        return $this->pesoMaximoPermitido;
    }
    public function setPesoMaximoPermitido($nuevoPesoMaximo){
        $this->pesoMaximoPermitido=$nuevoPesoMaximo;
    }
    public function getEstadoApertura(){
        return $this->estadoApertura;
    }
    public function setEstadoApertura($nuevoEstadoApertura){
        $this->estadoApertura=$nuevoEstadoApertura;
    }
    public function addCarga($pesoCarga){
        $nuevaCarga=new Carga();
        $nuevaCarga->setPeso($pesoCarga);
        array_push($this->carga,$nuevaCarga);
    }
    public function pesoTotal(){
        $sum=0;
        foreach($this->carga as $cargas){
            $sum=$sum+$cargas->getPeso();
        }
    }
    public function countBultos(){
        return count($this->cargas);
      }


    private function verificarPersoMaximo(){
        //por ahora vacio.
    }
    private function verificarCantidadBultos(){
        //por ahora vacio.
    }

    public function encenderAlarmas(){
        //por ahora vacio
    }
}//fin de la clase

?>