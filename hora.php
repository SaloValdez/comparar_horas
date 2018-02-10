<?php

    $hora_sal_tabla = $_POST['hora_salida_tabla'];
    $hora_salida = $_POST['hora_salida'];

    echo "hora sal TABLA : ".  $hora_sal_tabla .'<BR>';
    echo "hora actual ACTUAL : ".  $hora_salida .'<BR><BR><BR>';

    $hora_tabla = strtotime( $hora_sal_tabla );
    $hora_actual = strtotime( $hora_salida );

      if ($hora_tabla > $hora_actual) {


          echo "hora TABLA  es mayor que HORA REGISTRO ...<BR>";
          echo "USTED NO PUEDE SALIR ANTES";

      }else if ($hora_tabla == $hora_actual){
          echo "hora TABLA  es IGUAL que HORA REGISTRO ...<BR>";
          echo "AUN................<BR>";
      }else{
        echo "hora TABLA  es MENOR que HORA REGISTRO ...<BR>";
        echo "QUE TENGA BUENOS DIAS...<BR>";
      }
 ?>
