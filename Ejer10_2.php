<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
</head>
<body>
    <?php
    require("ejer10.php");
        class User extends Persona{
            private $punto;

            public function __construct($dni, $nombre, $apellido, $punto){
                parent::__construct($dni, $nombre, $apellido);
                $this->punto = $punto;
            }

            public function setPunto($punto){
                $this->punto = $punto;
            }
            public function getPunto(){
                return $this->punto;
            }
            public function puntos(){
                if ($this->punto >= 100) {
                    echo " <br> Tienes mas de 100 puntos: Exactamente : " . $this->punto;
                } else {
                    echo " <br> Tienes menos de 100 puntos: Exactamente : " . $this->punto;
                }
            }
            public function __toString(){
                return "Usuario: " . parent::getNombre(). " " . parent::getApellido() . " con dni: " . parent::getDni()." tiene ".$this->punto." puntos";
            }
    }
    $user = new User("73232496J","Julen","Goñi", 120);    
    echo $user->__toString();
    $user->puntos();
    ?>
</body>
</html>