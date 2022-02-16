<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio9</title>
</head>
<body>
    <?php
    class Ejer9{
        public function area($numero){
            if ($numero < 0){
                throw new InvalidArgumentException("El numero " . $numero . " es negativo");
            }
            echo "Area: " .$numero*$numero."<br>";
        }
    }
    $lados = [25, 23, 7, -24];
    foreach ($lados as $numero) {
        try {
            $a1 = new Ejer9();
            echo $a1->area($numero);

        } catch (InvalidArgumentException $error) {
            echo "<b>El error es el siguiente :</b> ".$error;
        }
    }

    ?>
</body>
</html>