<?php

class Elevador{
    private $id;
    private $pesoMaximoPermitido;
    private $ubicacion;
    private $apertura;
    private $estado; //activo o no.
    private $currentFloor; //ubicacion actual.
    private $direccion;
    
    protected function getEstado(){
        return $this->estado;
    }
    protected function setEstado($nuevoEstado){
        $this->estado=$nuevoEstado;
    }
    protected function getPesoMaximoPermitido(){
        return $this->pesoMaximoPermitido;
    }
    protected function setPesoMaximoPermitido($nuevoPesoMaximo){
        $this->pesoMaximoPermitido=$nuevoPesoMaximo;
    }
    protected function getUbicacion(){
        return $this->ubicacion; 
    }
    protected function setUbicacion($nuevaUbicacion){
        $this->ubicacion=$nuevaUbicacion;
    }
    protected function getEstadoApertura(){
        return $this->estadoApertura;
    }
    protected function setEstadoApertura($nuevoEstadoApertura){
        $this->estadoApertura=$nuevoEstadoApertura;
    }
    protected function getDireccion(){
        return $this->estadoDireccion;
    }
    protected function setDireccion($nuevaDireccion){
        $this->direccion=$nuevaDireccion;
    }
    protected function getCurrentFloor(){
        return $this->currentFloor;
    }
    protected function setCurrentFloor($nuevoCurrentFloor){
        $this->currentFloor=$nuevoCurrentFloor;
    }
}//fin de clase
?>