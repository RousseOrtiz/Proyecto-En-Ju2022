<?php include_once("encabezado.php");?>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

 <script>
  //
  google.charts.load('current', {'packages':['bar']});

  //Llamamos al objeto
  google.charts.setOnLoadCallback(grafica);

  function grafica() {
    // Poblamos la gráfica
    var data = google.visualization.arrayToDataTable([
      ["Fecha","Ventas"],
      <?php  
      $n = count($datos["data"]);
      for ($i=0; $i<$n; $i++) {
        print "['".substr($datos["data"][$i]["fecha"],0,10)."', ";
        print $datos["data"][$i]["venta"]."]";
        if($i<$n) print ",";
      }
      ?>
    ]);
    var opciones = {
      chart: {
        title: "Ventas por día",
        subtitle: "Tienda virtual"
      },
      colors: ["orange"]
    }

    var chart = new google.charts.Bar(document.getElementById("grafica"));
    chart.draw(data, google.charts.Bar.convertOptions(opciones));
  }
 </script>
<div id="grafica"></div>
<?php include_once("piepagina.php"); ?>