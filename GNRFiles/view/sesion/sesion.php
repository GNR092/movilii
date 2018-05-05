<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Sesion</title>
  <link rel="stylesheet" href="css/estilo2.css">
</head>
<body>
            <ul class="clearfix">
                <li><a class="active" href="#">Jonatán Xool</a>
                  <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="http://xooljonatanitsp.000webhostapp.com/anuncios_progreso/view/login/login.php">Cerrar Sesión</a></li>
                  </ul>
                </li>
                <li><img src="img/img_avatar.png" width="40" height="40"></li>
            </ul>
  <header>
    <!--
    <div id="logo" class="logo">
      <img src="img/ap.jpeg" width="100" height="100">
    </div>
    -->
    <!-- USUARIO-->
    <div class="top">
        <a class="active" href="">Inicio</a>
        <a href="">Servicio</a>
        <a href="">Promociones</a>
        <a href="">Contacto</a>
    </div>
  </header>

    <fieldset class="contenido">
      <h2>Servicios Activos</h2>
      <?php //encabezado3("VERIFICAR PRECIO");  ?>

        <table id="tablaJson" class="table table-bordered" width="80%">
            <thead>
                <tr>
                    <td>Cliente</td>
                    <td>Servicio</td>
                    <td>Descripcion</td>
                    <td>Actividad</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>f_cliente</td>
                    <td>f_servicio</td>
                    <td>f_descripcion</td>
                    <td>f_actividad</td>
                </tr>
            </tfoot>
            <tbody>

            </tbody>
        </table>
    </fieldset>

    <!-- INFORMACION DE LA EMPRESA-->
    <footer>
      <div class="nosotros">
              <h3>Sobre Nosotros</h2>
              <p>Dueño: L.I. Patricio Francisco Campos Canul</p>
              <p>Teléfono: 99-92-24-95-65</p>
              <p>Correo: duckscorpion@hotmail.com</p>
              <p>Dirección: Calle 80 x 25 Mercado Municipal, Progreso, Yucatán.</p>
      </div>
    </footer>
</body>
</html>