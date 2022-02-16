

<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio6</title>
    <style>
        #div1{
            display: flex;
            flex-direction: row;
            background-color: lightblue;
            border: solid 2px;
        }
        #div2{
            display: flex;
            flex-direction: row;
            border: solid 2px;
            background-color: grey;
        }
        h4{
            color: blue;
            width: 10%;
            display: flex;
            flex-direction: column;
        }
        #nombres{
            width: 8%;
            border: solid 2px;
            background-color: lightblue;
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="POST">
        <p>Introduce un nombre:<input type="text" name="nombre"/></p>
        <p>Introduce un mes:<input type="text" name="mes" /></p>
        <input type="submit" />
    </form>
    <?php
    if (!isset($_COOKIE['cumples'])) {
        $cumples = array(
            "enero"      => array(),
            "febrero"    => array(),
            "marzo"      => array(),
            "abril"      => array(),
            "mayo"       => array(),
            "junio"      => array(),
            "julio"      => array(),
            "agosto"     => array(),
            "septiembre" => array(),
            "octubre"    => array(),
            "noviembre"  => array(),
            "diciembre"  => array(),
        );
        setcookie('cumples', json_encode($cumples), 0);
    } else {
        $cumples = json_decode($_COOKIE['cumples'], true);
        // echo $_COOKIE['cumples'];
    }

    function anadir($nombre, $mes) {
        global $cumples;
        array_push($cumples[$mes], $nombre);
        setcookie('cumples', json_encode($cumples), 0);
        $cont = 0;

        foreach($cumples as $mes => $nombres){
            $cont += count($nombres);
        }
        return $cont;
    }

    function mostrar() {
        global $cumples;
        echo '<div id="div1">';
        foreach($cumples as $mes => $nombres){
            echo '<h4>'.$mes.'</h4>';
        }
        echo '</div>';
        echo '<div id="div2">';
        foreach($cumples as $nombres){
            $texto="";
            foreach($nombres as $nombre) {
                $texto.=$nombre.'<br>';
            }
            echo '<p id="nombres">'.$texto.'</p>';
        }
        echo '</div>';
    }

    if(isset($_POST["nombre"]) && $_POST["nombre"] != null && isset($_POST["mes"])) {
            $mes = htmlentities(strtolower($_POST["mes"]));
            if(array_key_exists($mes, $cumples)) {
                $nombre = htmlentities($_POST["nombre"]);
                $contador = anadir($nombre, $mes);
                mostrar();
                echo '<h2>Numero de personas: '.$contador.'</h2>';
            } else {
                echo '<p style="color: red">No existe el mes introducido, vuelve a intentar</p>';
            }
    }else{
        echo '<p style="color: red">No has introducido nada, vuelve a intentar</p>';
    }
    ?>

</body>

</html>