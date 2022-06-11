<?php
/**
 * Controlador Contacto
 */
class Contacto extends Controladorbase{
  private $modelo;

  function __construct(){}

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //
      $datos = [
        "titulo" => "Contacto",
        "activo" => "contacto",
        "menu" => true
      ];
      $this->vista("contactoVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }
}
?>