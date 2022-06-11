<?php
/**
 * Login Carrito
 */
class CarritoModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }
}
?>