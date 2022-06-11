<?php include_once("encabezado.php"); ?>
<h1 class="text-center">Módulo administrativo</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admon/verifica/" method="POST">
    <div class="form-group text-left">
      <input type="text" name="usuario" class="form-control"
      placeholder="Usuario (correo electrónico):"
      value="<?php 
      print isset($datos['data']['usuario'])?$datos['data']['usuario']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <input type="password" name="clave" class="form-control"
      placeholder="Contraseña:"
      value="<?php 
      print isset($datos['data']['clave'])?$datos['data']['clave']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-center">
      <input type="submit" value="Enviar" class="btn btn-success">
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>