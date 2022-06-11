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
      //Recuperamos el id del usuario
      //
      $idUsuario = $_SESSION["usuario"]["id"];
      //
      //Leer los productos del carrito
      //
      $data = $this->modelo->getCarrito($idUsuario);
      //var_dump($data);
      //
      $datos = [
        "titulo" => "Bienvenid@ a nuestra tienda",
        "data" => $data,
        "idUsuario" => $idUsuario,
        "menu" => true
      ];
      $this->vista("carritoVista",$datos);
    } else {
      header("location:".RUTA);
    }
  }

  public function agregaProducto($idProducto, $idUsuario)
  {
    $errores = array();
    if ($this->modelo->verificaProducto($idProducto, $idUsuario)==false) {
      //Añadir el registro
      if ($this->modelo->agregaProducto($idProducto, $idUsuario)==false) {
        array_push($errores,"Error al insertar el producto al carrito");
      }
    }
    //Caratula
    $this->caratula();
  }
  
}
?>