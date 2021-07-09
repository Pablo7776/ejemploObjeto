<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body style="justify-content: center;">

<h1 class="bg-primary" style="text-align: center;">Orientación a objetos:</h1>    
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

 $electronicos1=new Electronicos("camara reflex", "Nikon d40", 20000, 350, "Medio");
 $celulares1=new Celulares("", "Motorola g5", 15000, "120", "Medio", 6.4, "4 nucleos", "4");


?>

<div style="justify-content: center;  display: flex;">
<div style="width: 300px;">

<ul class="list-group">
  <li class="list-group-item active" aria-current="true"><?php echo "".$electronicos1->getNombre();?></li>
  <li class="list-group-item">Detalle: <?php echo $electronicos1->getDetalle();?></li>
  <li class="list-group-item">Precio: $<?php echo $electronicos1->getPrecio();?></li>
  <li class="list-group-item">Peso: <?php echo $electronicos1->getPeso();?> gramos</li>
  <li class="list-group-item">Tamaño: <?php echo $electronicos1->getTamaño();?></li>
</ul>

<ul class="list-group">
  <li class="list-group-item active" aria-current="true"><?php echo $celulares1->getNombre();?></li>
  <li class="list-group-item">Detalle: <?php echo $celulares1->getDetalle();?></li>
  <li class="list-group-item">Precio: <?php echo $celulares1->getPrecio();?></li>
  <li class="list-group-item">Peso: <?php echo $celulares1->getPeso();?> g.</li>
  <li class="list-group-item">Tamaño: <?php echo $celulares1->getTamaño();?></li>
  <li class="list-group-item">Tamaño de pantalla: <?php echo $celulares1->gettamañoPantalla();?> pulgadas</li>
  <li class="list-group-item">Procesador: <?php echo $celulares1->getProcesador();?></li>
  <li class="list-group-item">Memoria: <?php echo $celulares1->getMemoria();?> Gigabytes</li>
</ul>

</div>
</div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>