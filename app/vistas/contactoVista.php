<?php include_once("encabezado.php"); 
print "<h2 class='text-center'>Contacto</h2>";
?>
<div class="card p-4 bg-light">
<form action="<?php print RUTA.'contacto/enviar/'; ?>" method="POST">
  <div class="form-group text-left">
    <input type="text" name="nombre" id="name" class="form-control" required placeholder="*Escriba su nombre:"/>
  </div>

  <div class="form-group text-left">
    <input type="email" name="correo" id="correo" class="form-control" required placeholder="*Escriba su correo electrónico:"/>
  </div>

  <div class="form-group text-left">
    <textarea class="form-control" name="observacion" id="observacion" placeholder="*Observacion::"></textarea>
  </div>

  <div class="form-group text-center">
    <input type='submit' value='Enviar' class='btn btn-outline-info'/>
    <a href='<?php print RUTA; ?>tienda' class='btn btn-outline-info'>Regresar</a>
  </div>
</form>
</div>
<?php
include_once("piepagina.php"); 
?>