<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haga click para ganar +1M de VBucks</title>
</head>
<!-- Comentario html -->
<p>Párrafo html</p>
<body>
    <?php
    // Comentario php
        echo "Hola mundo<br>";

        print "Adiós<br>";

        print "Hasta otra<br>";

        $var1="Ale"; // String
        $var2='Ale'; // Hay diferencia frente a las dobles, NO ES LO MISMO
        $miVariable2=15;

        print "Hola" . $var2 . ", estoy probando la concatenación de código<br>";

        print "Lo mismo, $var2<br>";
        /* 
        Escribe literalmente lo que hay entre las comillas, 
        no intepreta variables.
        */
        print 'Lo mismo, $var2<br>';
        // Más rápido que print
        echo $var1,$var2,"xsis $var2","<br>";

        function multiplicar(){
            echo "multiplicando<br>";
        }

        multiplicar();
        multiplicar();
        multiplicar();
        
    ?>
     <button type="button">Click Me!</button>

  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:<br></label>

    <!-- Múltiples bloques php repartidos sin problemas en la página -->
    <?php
// Aunque no exista, el programa sigue. Más flexible.
        include ("funcionalidad.php");
// Con esto, no. El fichero es requerido para el funcionamiento.
        //require ("julio_iglesias_best_hits.php");

        dame_datos(); // Funcion del fichero cargado en la instrucción de arriba.
    ?>

    <?php

        $nombre = "Alex";
        // LA VARIABLE DENTRO DE LA FUNCIÓN SOLO
        // ESTÁ DISPONIBLE DENTRO DE SU ÁMBITO, NO SE VE FUERA
        // "COMO SI FUERA UN FICHERO APARTE"
        // <global> permite que la función vea la variable externa,
        // pero al revés no funciona.
        function funcAux(){
            global $nombre;
            $nombre = "mi nombre es " . $nombre;
            echo $nombre . "<br>";
        }
        
        // El cambio hecho por la función es LOCAL.
        echo $nombre . "<br>";
        funcAux();

        // Devuelve 1 si no son iguales
        if(!$resultado=strcmp($nombre,$nombre)){
            echo "Son iguales<br>";
        } else
            echo "No son iguales<br>";
        echo $resultado;

    ?>
    <A href="formulario.html">Inicio de sesión</A>
</body>
</html>