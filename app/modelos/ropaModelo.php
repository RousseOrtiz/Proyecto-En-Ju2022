<?php
/**
 * Ropa Modelo
 */
class RopaModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getRopa(){
    $sql = "SELECT * FROM productos WHERE baja=0 AND tipo=2";
    $data = $this->db->querySelect($sql);
    return $data;
  }
}
?>