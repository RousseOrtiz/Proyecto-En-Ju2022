<?php include_once("encabezado.php"); ?>
        <h1 class="text-center">INICIAR SESION</h1>
        <div class="card p-4 bg-light">
        <?php
          print "<img src='img/login.png' class='rounded mx-auto d-block' height'200' width='220'/>";
         ?>
  <form action="<?php print RUTA; ?>login/verifica/" method="POST">
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
    <input type="checkbox" name="recordar" 
    <?php
      if(isset($datos['data']['recordar'])){
        if($datos['data']['recordar']=="on") print "checked";
      }
    ?>
      <label for="recordar">Recordar</label>
  </form>
</div><!--card-->
  <a href="<?php print RUTA; ?>login/registro/" >Darse de alta en el sistema</a><br>
  <a href="<?php print RUTA; ?>login/olvido/">¿Olvidaste tu clave de acceso?</a>
<?php include_once("piepagina.php"); ?>