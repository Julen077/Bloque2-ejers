<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Persona</title>
</head>
<body>
    <?php
        class Persona{
            private $dni, $nombre, $apellido;

        public function __construct($dni, $nombre, $apellido){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        public function setDni($dni){
            $this->dni = $dni;
        }
        public function getDni(){
            return $this->dni;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function getApellido(){
            return $this->apellido;
        }
    }  
    ?>
</body>
</html>