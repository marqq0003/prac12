<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>marqq0003|marq0003.github.io</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">Inicio </a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Calcular el valor de la magnitud</h2>
  <p>Descripción:</p>
  <p>La velocidad de escape de la Tierra (v); <br>
  sus unidades son distancia (m) por unidad de tiepo (s). <br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    v = sqrt (2G M/r)<br>
    
</section>
<section class="datos">
<h2>Datos:</h2>
  H= 6.67 x 1011 Nm2/kg2 <br>
  M= 5.98 x 10^8 cm
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)El valor de la magnitud es:<br>
   <br>
    r = 6.37 x 10^8 cm = 6.37 x 10^6 <br>
    v = sqrt(2G M/r) <br>
    v = sqrt(2*6.67 x 10^-11 Nm^2/Kg^2*5.98 x 10^27 kg/ 6.37 x 10^6 m)<br>
    v = sqrt(2*6.67 x 10^-11*5.98/6.37) m/s <br>
    v = sqrt (0.000011022) m/s</p>
</section>

<?php


function calcula()
{
$resultado = 0.1054;
return $resultado;
}

/*
     function calcula_magnitud(){
     
        $r= 6.37*10^6;
        $v=Math.pow(2*6.67*10^-11/2*5.98*10^27/$r)
        $v1=Math.pow(2*6.67*10^-11*5.98/6.37);
        $v2=Math.pow(0.000011022);
        $magnitud= $r/$v2;
        return $magnitud;

     }
     **/
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> Resultado: Magnitud = " .calcula(). " m/s</h1>";
?>
</section>
</section>
    <footer class="pie">
     Maricela Ramos Quirino 21091082 <br> 
     3.0 SciSoft 2023
    </footer>
   </section>
</body>
</html>
