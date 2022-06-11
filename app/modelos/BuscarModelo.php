<?php
/**
 * Buscar Modelo
 */
class BuscarModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  function getProductosBuscar($buscar){
    $sql = "SELECT * FROM productos WHERE ";
    $sql.= "talla LIKE '%".$buscar."%' OR ";
    $sql.= "nombre LIKE '%".$buscar."%' OR ";
    $sql.= "descripcion LIKE '%".$buscar."%'";
    //
    $data = $this->db->querySelect($sql);
    return $data; 
  }
}
?>