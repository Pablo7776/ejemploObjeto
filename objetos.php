<?php
class Electronicos{
    private $Nombre;
    private $Detalle;
    private $Precio;
    private $Peso;
    private $Tamaño;


public function __construct($Nombre, $Detalle, $Precio, $Peso, $Tamaño)
{
    $this->Nombre=$Nombre;
    $this->Detalle=$Detalle;
    $this->Precio=$Precio;
    $this->Peso=$Peso;
    $this->Tamaño=$Tamaño;
    
}

    public function getNombre(){
        return $this->Nombre; 
    }
    public function setNombre($Nombre){
        $this->Nombre=$Nombre;
    }
    public function getDetalle(){
        return $this->Detalle;
    }
    public function setDetalle($Detalle){
        $this->Detalle=$Detalle;
    }
    public function getPrecio(){
        return $this->Precio;
    }
    public function setPrecio($Precio){
        $this->Precio=$Precio;
    }
    public function getPeso(){
        return $this->Peso;
    }
    public function setPeso($Peso){
        $this->Peso=$Peso;
    }
    public function getTamaño(){
        return $this->Tamaño;
    }
    public function setTamaño($Tamaño){
        $this->Tamaño=$Tamaño;
    }

}


class Celulares extends Electronicos{
    private $tamañoPantalla;
    private $Procesador;
    private $Memoria;

public function __construct($Nombre, $Detalle, $Precio, $Peso, $Tamaño, $tamañoPantalla, $Procesador, $Memoria){

    parent::__construct($Nombre="Celular",$Detalle,$Precio,$Peso,$Tamaño);

    $this->tamañoPantalla=$tamañoPantalla;
    $this->Procesador=$Procesador;
    $this->Memoria=$Memoria;
}




    public function gettamañoPantalla(){
        return $this->tamañoPantalla;
    }
    public function settamañoPantalla($tamañoPantalla){
        $this->tamañoPantalla=$tamañoPantalla;
    }
    public function getProcesador(){
        return $this->Procesador;
    }
    public function setProcesador($Procesador){
        $this ->Procesador=$Procesador;
    }
    public function getMemoria(){
        return $this->Memoria;
    }
    public function setMemoria($Memoria){
        $this->Memoria=$Memoria;
    }

}











$electronicos1=new Electronicos("camara reflex", "Sistema Reflex", 40000, "350 gramos", "Medio");
echo "<h3>".$electronicos1->getNombre()."</h3>";
echo "</br>";          
echo $electronicos1->getDetalle();
echo "</br>";
echo $electronicos1->getPrecio();
echo "</br>";
echo $electronicos1->getPeso();
echo "</br>";
echo $electronicos1->getTamaño();
echo "</br>";


$celulares1=new Celulares("", "bbb", 333, "345", "Medio", "nnn", "ddd", "sss");
echo "<h3>".$celulares1->getNombre()."</h3>";
echo "</br>";          
echo $celulares1->getDetalle();
echo "</br>";
echo $celulares1->getPrecio();
echo "</br>";
echo $celulares1->getPeso();
echo "</br>";
echo $celulares1->getTamaño();
echo "</br>";
echo $celulares1->gettamañoPantalla();
echo "</br>";
echo $celulares1->getProcesador();
echo "</br>";
echo $celulares1->getMemoria();
echo "</br>";
?>