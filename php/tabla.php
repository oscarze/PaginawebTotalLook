<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla php</title> <!--Nombre de la pagina-->
  <meta name="tabla" content="Tabla en php">
  <style type="text/css">

     body{ text-align: center; /*Estilo de la pagina*/
      }
     table { border: 1px solid #000;/*Estilo de la tabla*/
    border-collapse: separate;
    text-align: center;
    table-layout: center;
    width: 100px;
    margin: 0 auto;

      }
      td {
     border: 4px solid #black;/*Estilo de las celdas*/
     text-align: center;
     }
      th {
    background :#E1C17D;/*Estilo de las columnas*/
    border: 4px solid #black;
    text-align: center;
     }
  </style>
  </head>
  <body style="background-color:#F5B7B1 ;">
  </body>
  <body>
    <h1>Total Look registro de datos de envios</h1><!--Nombre de la tabla-->
    <h2>Ropa para toda la familia.</h2>
    <hr>
  </body>
</html>
<?php
//Tabla
echo "<table>"; //Datos de la tabla
echo "<tr>";
echo "<th><h4>Nombre</th></h4>";
echo "<th><h4>Primer apellido</th></h4>";
echo "<th><h4>Correo electronico</th></h4>";
echo "<th><h4>Telefono</th></h4>";
echo "<th><h4>Estado de residencia</th></h4>";
echo "<th><h4>Codigo postal</th></h4>";
echo "</tr>";
echo "<tr>";
echo "<th><h3>Lorena</th></h3>";
echo "<th><h3>Sanchez</th></h3>";
echo "<th><h3>lore_san@gmail.com</th></h3>";//Registros
echo "<th><h3>1880122</th></h3>";
echo "<th><h3>Monterrey</th></h3>";
echo "<th><h3>2432534</th></h3>";
echo "</tr>";
echo "<tr>";
echo "<th><h3>Carlos</th></h3>";
echo "<th><h3>Bernal</th></h3>";
echo "<th><h3>carlos@gmail.com</th></h3>";
echo "<th><h3>1750100</th></h3>";
echo "<th><h3>Puebla</th></h3>";
echo "<th><h3>23478</th></h3>";
echo "</tr>";
echo "<tr>";
echo "<th><h3>Karla</th></h3>";
echo "<th><h3>Gonzales</th></h3>";
echo "<th><h3>karla_xd@gmail.com</th></h3>";
echo "<th><h3>72264689</th></h3>";
echo "<th><h3>Estado de Mexico</th></h3>";
echo "<th><h3>113546</th></h3>";
echo "</tr>";

echo "</table>";//Cerramos la tabla


?>
