<!DOCTYPE html>
<!-- Oscar Iván Zepeda Flores -->
<!-- Fecha de entrega 22/04/2021 -->
<!-- Proyecto página web de una organización dedicada a la venta de ropa online -->
<!-- Actividad 9-->
<!-- Los estilos se encuentran en el formulario (INICIAR SESIÓN), servicio al cliente y en total look 2021 se encuentra focus-->
<!-- Inicio -->
<?php
   if($_POST)
    {
     setcookie("usuario", $_POST['nombreForm'], time()+3600, "/", $_POST['dominioForm']);
    }
 ?>
<html lang="en" dir="ltr"><!-- Inicio -->
  <head>
    <meta name="author" content="Oscar Iván Zepeda Flores"/> <!--El autor de la pagina-->
    <meta charset="utf-8"> <!--Visualizar caracterres que no esten en el teclado de otro pais-->
    <title>Tienda de ropa TOTAL LOOK</title> <!--Titulo de la pagina-->
    <meta name="description" content="La descripción de la pagina web"utf-8> <!--descripción-->
    <link rel="stylesheet" href="CSS/estilo1.css" type="text/css">
    <style type="text/css">
       body{ text-align: center;   /*Estilo de la pagina*/
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
      background :#21618C;/*Estilo de las columnas*/
      border: 4px solid #black;
      text-align: center;
       }
       body {
         background-color: #87ccc1;
         margin: 0;
         padding: 0;
       }
       h1 {
         text-align: center;
         width: 50%;
         margin: auto;
         margin-top: 30px;
       }
       table {
         border: 3px solid #cca633;
         padding: 20px 50px;
         margin-top: 20px;
         border-radius: 5px;
         background-color: #edf797;
       }
    </style>
  </head>
  <body background="img/fond0.jpg">
    <?php
  if($_COOKIE)
   {
    echo "Hay Cookies!: <br>";
     print_r($_COOKIE);
   }
  else
   {
    echo "No hay Cookies :( <br>";

   }
?>
    <!--Marquee: el texto del banner-->
    <marquee bgcolor="#3498DB" behavior="slide"><font face="Candara" color="#FEF9E7"><h3>HOY 20 % DE DTO. EXTRA en pedidos de +MXN1599 CODIGO:2021 </h3></marquee>
    <link rel="stylesheet" href="CSS/estilo1.css" type="text/css">
    <ul class ="menu"><!--Lista de anclas-->
        <li><a href="mujer.html">MUJER</a></li>
        <li><a href="hombres.html">HOMBRE</a></li>
        <li><a href="niños.html">NIÑOS</a></li>
        <li><a href="belleza.html">BELLEZA</a></li>
        <li><a href="tallas.html">GUIA DE TALLAS</a></li>
        <li><a href="formulario.html">INICIAR SESIÓN</a></li>
        <li><a href="galeria.html">GALERIA DE IMAGENES</a></li>
    </ul>
    <footer>
    <center><!--Centrar los elementos-->
    <font face="Candara" size="5"><h1>TOTAL LOOK &reg;</h1><!--Encabezado y nombre de la pagina--></font><!--Cambiar fuente-->
    <h3>Ropa para toda la familia.</h3>
    <center><!--Centrar elementos-->
    <font face="Arial">
    <font face="Candara" size="6"><h2>Conoce nuestas nuevas prendas 2021</h2></font>
    <center>
    <link rel="stylesheet" href="CSS/estilo1.css" type="text/css">
    <ul class ="menu">
            <li><a href="descripcion.html"><font size="3">DESCRIPCIÓN</a></li>
            <li><a href="mision.html">MISIÓN</a></li>
            <li><a href="vision.html">VISIÓN</a></li>
            <li><a href="objetivos.html">OBJETIVOS</a></li>
            <li><a href="php/tabla.php">DATOS DE PEDIDOS</a></li>
            <li><a href="php/fdregistro.html">FORMULARIO DE REGISTRO</a></li>
    </ul>
    <hr>
    <input class="red-input" value="Total Look X 2021"><br><!--Esta pseudo-clase se aplica solo al elemento enfocado en sí mismo-->
    <img height="250p" width="500p" src="img/publi.jpg" alt="Imagen de la Publicidad"/>
    <font face="Candara" size="3"><h2>Conoce total look X</h2></font>
    <pre><div class="video-responsive">
    <!--Codigo iframe del video -->
    <iframe src="https://www.youtube.com/embed/JQRk-9XOefI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </pre>
    <hr>
    <ul>
    <hr>
    <ul>
      <font face="Candara" size="5"><pre class="elemento"> SERVICIO AL CLIENTE</pre>	<!--lista con anclas y texto con pseudo elemento-->
      <li><a href="contacto.html">Contactanos</a>			<!--vinculos de tipo ancla-->
      <li><a href="formadepago.html">Forma de pago</a>		<!--vinculo de tipo ancla-->
      <li><a href="devoluciones.html">Devoluciones</a>		<!--vinculo de tuipo ancla-->
        </font>
    </ul>
</script>
<script src="js/script2.js" ></script>

  </body>
</html>
