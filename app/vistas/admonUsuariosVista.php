<?php include_once("encabezado.php"); ?>
<h1 class="text-center">Alta de un usuario administrativo</h1>
<div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>admonUsuarios/alta/" method="POST">
    <div class="form-group text-left">
      <input type="email" name="usuario" class="form-control" required
      placeholder="*Usuario (correo electronico):"
      value="<?php 
      print isset($datos['data']['usuario'])?$datos['data']['usuario']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <input type="password" name="clave1" class="form-control" required
      placeholder="*Contraseña:"
      value="<?php 
      print isset($datos['data']['clave1'])?$datos['data']['clave1']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-left">
      <input type="password" name="clave2" class="form-control" required
      placeholder="*Verifica la contraseña:"
      value="<?php 
      print isset($datos['data']['clave2'])?$datos['data']['clave2']:''; 
      ?>"
      >
    </div>

    <div class="form-group text-left">
      <input type="text" name="nombre" class="form-control"
      placeholder="*Escribe tu nombre:" required
      value="<?php 
      print isset($datos['data']['nombre'])?$datos['data']['nombre']:''; 
      ?>"
      >
    </div>
    <div class="form-group text-center">
      <input type="submit" value="Enviar" class="btn btn-success">
      <a href="<?php print RUTA; ?>admonUsuarios" class="btn btn-info">Regresar</a>
    </div>
  </form>
</div><!--card-->
<?php include_once("piepagina.php"); ?>