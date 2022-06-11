<?php
/**
 * Controlador Login
 */
class AdmonInicio extends Controladorbase{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("AdmonInicioModelo");
  }

  function caratula(){
    //Creamos sesion
    $sesion = new Sesion();

    if($sesion->getLogin()){
      $datos = [
        "titulo" => "Administrativo | inicio",
        "menu" => false,
        "admon" => true,
        "data" => []
      ];
      $this->vista("AdmonInicioVista",$datos);
    } else {
      header("location:".RUTA."admon");
    }
  }

}
?>