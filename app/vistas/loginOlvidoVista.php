<?php include_once("encabezado.php"); ?>
        <h1 class="text-center"><?php print $datos["subtitulo"]; ?></h1>
  <div class="card p-4 bg-light">
  <form action="<?php print RUTA; ?>login/olvido/" method="POST">
    <div class="form-group text-left">
      <input type="email" name="email" class="form-control" placeholder="*Correo electronico:" required>
    </div>
    <div class="form-group text-center">
      <input type="submit" value="Enviar" class="btn btn-success">
      <a href="<?php print RUTA; ?>" class="btn btn-info">Regresar</a>
    </div>
  </form>
  <p>Se te enviará un correo, favor de verificar tu bandeja de spam.</p>
</div><!--card-->
<?php include_once("piepagina.php"); ?>