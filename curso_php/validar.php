<?php
// Comprobar si hemos pulsado el botón de enviar
if(isset($_POST["enviando"])){
  // $_POST es una variable super global (es un array)
  // almacenamos lo introducido en el texto de id nombre_usuario
  $usuario=$_POST["nombre_usuario"];
  $edad=$_POST["edad_usuario"];

  if( strlen($usuario) > 10 || strlen($usuario) < 3 ){
    // Combinamos código html en un string php
    echo "<p class='no_validado'>Nombre de usuario debe estar entre 3 y 10</p><br>";
    return;
  }

  if(empty($edad)){
    echo "<p class='no_validado'>Debes introducir una edad.</p><br>";
    return;
  }
  else if($edad < 18){
    echo "<p class='no_validado'>Debes ser mayor de edad.</p><br>";
    return;
  }

  // Inicio de sesión correcto
  // Iniciar conexión con la BBDD
  $conn = new mysqli('localhost', 'root','','registro_usuarios');
  // Comprobamos la conexión
  if($conn->connect_error)
    die('Conexión fallida:' . $conn->connect_error);
  else
  {
    // Si todo va correcto, perparar una inserción a la bbdd
    $stmt = $conn->prepare("insert into usuarios_registrados(nombre, edad)
        values(?, ?)");
        // Asociar los valores ? con los datos leidos del form
        $stmt->bind_param("si", $usuario, $edad);
        // Ejecutamos la sentencia, la cerramos y finalizamos conexión.
        $stmt->execute();
        $stmt->close();
        $conn->close();
  }
  echo '<meta http-equiv="refresh" content="5; url=validado.html" />';
}
?>