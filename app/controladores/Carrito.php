<?php
/**
 * Controlador Carrito
 */
class Carrito extends Controladorbase{
  private $modelo;

  function __construct()
  {
    $this->modelo = $this->modelo("CarritoModelo");
  }

  function caratula(){
    $sesion = new Sesion();
    if ($sesion->getLogin()) {
      //
      //Leer los productos mas vendidos
      //
      //$data = $this->getMasVendidos();
      //
      //Leer los productos nuevos
      //
      //$nuevos = $this->getNuevos();
      //
      $datos = [
        "titulo" => "Bienvenid@ a nuestra tienda",
        "data" => $data,
        "nuevos" => $nuevos,
        "menu" => true
      ];
      $this->vista("tiendaVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }

  public function agregaProducto($idProducto, $idUsuario)
  {
    print $idProducto.", ".$idUsuario;
  }

}
?>