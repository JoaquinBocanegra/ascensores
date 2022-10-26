<?php
  
  include_once('personas.php');

  class Ascensor{
    
    private $id;
    private $pesoMaximoPermitido;
    private $cantidadMaxPersonas;
    private $ubicacion;
    private $apertura;
    private $personas=[];
    
    public function getId(){
      return $this->id;
    }
    
    public function getPesoMaximoPermitido(){
      return $this->pesoMaximoPermitido;
    }
    
    public function setPesoMaximoPermitido($nuevoPesoMaximo){
      $this->pesoMaximoPermitido=$nuevoPesoMaximo;
    }
    
    public function getCantidadMaximaPersonas(){
      return $this->cantidadMaxPersonas;
    }
    
    public function setCantidadMaximaPersonas($nuevoCantidadMaxPersonas){
      $this->cantidadMaxPersonas=$nuevoCantidadMaxPersonas;
    }
    
    public function addPersona($pesoPersona){
      $nuevaPersona=new Persona();
      $nuevaPersona->setPeso($pesoPersona);
      array_push($this->personas,$nuevaPersona);
    }
    
    public function pesoTotal(){
      $sum=0;
      foreach($this->personas as $persona){
        $sum=$sum+$persona->getPeso();
      }
      return $sum;
    }
    public function countPersonas(){
    return count($this->personas);
  }
  private function verificarPesoMaximo(){
    $pesoTotalPersonas= $this-> pesoTotal();
    if($pesoTotalPersonas>$this->pesoMaximoPermitido){
      return false;
    } else
     return true; 
    }
    private function verificarCantidadPersonas(){
      $totalPersonas= $this->countPersonas();
      if($totalPersonas>$this->cantidadMaxPersonas){
        return false;
      }
      return true;

    }
    public function encenderAlarma(){
      if($this->verificarPesoMaximo() && $this->verificarCantidadPersonas()){
       return true; 
      }
      return false;
      
    }

  } //cierre de clase.
  
  
  
  
  
  
  ?>