<?php
    class CPersona{
        private $nombre;
        private $horas;
        private $sueldo;
        function __construct($n, $h, $s){
            $this->nombre=$n;
            $this->horas=$h;
            $this->sueldo=$s;
        }
        public function getnombre(){
            return $this->nombre;
        }
        public function gethoras(){
            return  $this->horas;
        }
        public function getsueldo(){
            return  $this->sueldo;
        }
        public function CalcularSueldo(){
            return  $this->horas * $this->sueldo;
        }

    }
    $persona= new CPersona ($_POST['nombre'], $_POST ['horas'], $_POST['sueldo'] );
    echo $persona->getnombre()."<br>";
    echo $persona->gethoras()."<br>";
    echo $persona->getsueldo()."<br>";
    echo $persona->CalcularSueldo()."<br>";
    ?>