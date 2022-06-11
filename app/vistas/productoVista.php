<?php include_once("encabezado.php"); 
print "<h2 class='text-center'>".$datos["subtitulo"]."</h2>";
//Curso 
if($datos["data"]["tipo"]==1){
    print "Descripción: ".$datos["data"]["descripcion"];
  } else if($datos["data"]["tipo"]==2){
    print "Talla: ".$datos["data"]["talla"];
  }


print "<a href='".RUTA."tienda' class='btn btn-success'/>Regresar</a>";
include_once("piepagina.php"); ?>