<?php
/**
 * Controlador Ropa
 */
class Ropa extends Controladorbase{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("RopaModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas vendidos
      //
      $data = $this->getRopa();
      //
      $datos = [
        "titulo" => "Ropa",
        "activo" => "ropa",
        "data" => $data,
        "menu" => true
      ];
      $this->vista("ropaVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }

  public function getRopa()
  {
    return $this->modelo->getRopa();
  }
}
?>