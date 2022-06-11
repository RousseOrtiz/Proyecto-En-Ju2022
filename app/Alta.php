<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
      //Recibimos la información PHP7 isset()?valor1:valor2 => valor1 ?? valor2
      $tipo = $_POST['tipo'] ?? "";
      print $tipo;
}

?>