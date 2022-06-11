<?php
/**
 * Controlador SobreNosotros
 */
class SobreMi extends Controladorbase{
  private $modelo;

  function __construct(){}

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //
      $datos = [
        "titulo" => "Bienvenid@ a nuestra tienda",
        "activo" => "sobrenosotros",
        "menu" => true
      ];
      $this->vista("sobrenosotrosVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }
}
?>