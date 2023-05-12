<html>
    <head>
        <title>Formulario</title>
        <link rel="StyleSheet" href="ESTILOS.css" type="text/css">
    </head>
    <body>
        <?php
        echo "Su nombre es:";
        echo $_REQUEST['nombre'];
        echo"<br>";
        if ($_REQUEST['radio1'] == "Casa y Jardín") {
            echo "Prefiere plantas de casa y jardín.";
          }
          if ($_REQUEST['radio1'] == "Cactus") {
            echo "Prefiere los cactus.";
          }
          echo"<br>";
          $cant = 0;
        if (isset($_REQUEST['check1'])) {
          $cant++;
        }
        if (isset($_REQUEST['check2'])) {
          $cant++;
        }
        if (isset($_REQUEST['check3'])) {
          $cant++;
        }
        if (isset($_REQUEST['check4'])) {
          $cant++;
        }
        echo $_REQUEST['nombre'];
        echo " Tiene $cant plantas favoritas.";
        echo"<br>";
        echo "Lo que mas busca en una planta es:" . $_REQUEST['Características'];
        echo"<br>";
        ?>
         </body>
         </html>