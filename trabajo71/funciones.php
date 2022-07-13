<?php
class CRectangulo{
private $largo;
private $ancho;

function __construct($l, $a){
    $this->largo=$l;
    $this->ancho=$a;
   
}
public function getlargo(){
    return $this->largo;
}
public function getancho(){
    return  $this->ancho;
}

public function CalcularPerimetro(){
    return  $this->largo*2 + $this->ancho*2;
}
public function CalcularArea(){
    return $this->largo*$this->ancho;
}
}
$rectangulo= new CRectangulo ($_POST['ancho'], $_POST ['ancho'] );
echo $rectangulo->getlargo()."<br>";
echo $rectangulo->getancho()."<br>";
echo $rectangulo->CalcularPerimetro()."<br>";
echo $rectangulo->CalcularArea()."<br>";
?>