
<?php
    header('Content-Type: text/plain; charset=ISO-8859-1');
//    header('Content-Type: application/octet-stream');
    header('Content-Disposition: form-data; name="campo2"; filename="' . $concepto . " - " . date('d/m/Y H:m') . '".txt"');
    //header("Content-type: ".$_SESSION["MIME"]);
   /* header("Cache-control: private");
        header("Content-length: ".$_SESSION["SIZE"]);
        header("Expires: ".gmdate("D, d M Y H:i:s", mktime(date("H")+2, date("i"), date("s"), date("m"), date("d"), date("Y")))." GMT");
        header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");*/


	/*
	 * 1.- Creamos la variable que contiene el archivo que tenemos que crear.
	 * 2.- preguntamos si existe el archivo, si el archivo existe "se ha modificado"
	   en caso contrario el archivo se ha creado.
	 * 3.- Con fopen abrimos un archivo o url, en este caso vamos a abrir un archivo
	   pasando como parámetro la variable $nombre_archivo que es la que contiene 
	   nuestro archivo y como segundo parámetro como lo vamos a abrir, en este caso "a"
	   que nos abre el fichero en solo lectura y sitúa el puntero al final del fichero
	   y en el caso de que no exista lo crea.

	   ******Para terminar*******

	   4.-Con el fwrite escribimos dentro del archivo la fecha con la hora de Creación 
	   o modificación, según el caso, con la variable $mensaje, 

	*/
	
	$nombre_archivo = $concepto.".txt"; 

	$neto = 0;

	foreach ($data as $key) {

        if($key['id_tipo_personal'] == 1){

            if($key['status'] !=0) 
                $sueldo_base = ($key['sueldo_base'] / 2) ; 
            else $sueldo_base = 0;

           /*======================================================================================================*/
            /*====================================== BECAS ESCOLARES ===============================================*/
            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
            if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                if($key['hijos'] != 0 AND $key['status'] !=0) 
                    $prima_hijos = ( 62500 * $key['hijos']) / 2; 
                else $prima_hijos = 0;

                if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                    $prima_hogar = 62500 / 2; 
                else $prima_hogar = 0;

                 if($key['status'] !=0) 
                    $prima_profesion = $key['prima_profesion']; 
                else $prima_profesion = 0;

                 if($key['status'] !=0) 
                    $prima_antiguedad = $key['prima_antiguedad']; 
                else $prima_antiguedad = 0;

                
                @$asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $becas;

            /*======================================================================================================*/

               if($key['funeraria'] != 0 AND $key['status'] !=0) 
                    $funeraria = 20000/2; 
                else $funeraria = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['hijos'] != 0 AND $key['status'] !=0) 
                    $prima_hijos = ( 62500 * $key['hijos']) / 2; 
                else $prima_hijos = 0;

                if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                    $prima_hogar = 62500 / 2; 
                else $prima_hogar = 0;

                if($key['status'] !=0) 
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
                else $faov = 0;

                if($key['status'] !=0) 
                    $deduccion_sso = $key['deduccion_sso']; 
                else $deduccion_sso = 0;

                if($key['status'] !=0) 
                    $deduccion_rpe = $key['deduccion_rpe']; 
                else $deduccion_rpe = 0;

                if($key['status'] !=0) 
                    $deduccion_fpj = $key['deduccion_fpj']; 
                else $deduccion_fpj = 0;

                if($key['sindicato'] != 0 AND $key['status'] !=0) 
                    $sindicato = (150000*0.01) / 2; else 
                $sindicato = 0;

                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                    $asociacion = 0.10; 
                else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;


                if($key['status'] !=0) 
                    $sueldo_base = $key['sueldo_base']; 
                else $sueldo_base = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deduccion = 
                    $deduccion_sso + 
                    $deduccion_rpe + 
                    $deduccion_fpj + 
                    $deduccion_caja + 
                    $faov + 
                    $funeraria + 
                    $sindicato + 
                    $asociacion +
                    $prestamo_caja +
                    $x_depositario;
                 else $deduccion = 0;

                /*=====================================================================================================================================*/

                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

        }else if($key['id_tipo_personal'] == 2){

            if($key['status'] !=0) 
                $sueldo_base = ($key['sueldo_base'] / 2) ; 
            else $sueldo_base = 0;

           /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

             if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

             if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            
            @$asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $becas;

        /*======================================================================================================*/

           if($key['funeraria'] != 0 AND $key['status'] !=0) 
                $funeraria = 20000/2; 
            else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
            else $faov = 0;

            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;

            /*if($key['status'] !=0) 
                $deduccion_fpj = $key['deduccion_fpj']; 
            else $deduccion_fpj = 0;*/

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (250000*0.01) / 2; else 
            $sindicato = 0;

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;


            if($key['status'] !=0) 
                $sueldo_base = $key['sueldo_base']; 
            else $sueldo_base = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($key['status'] !=0) $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deduccion = 0;

              /* Restrincciones de Conceptos segun tipo de Nomina*/
            if($key['id_tipo_personal'] == 2){
                $deduccion_fpj = 0;

                $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
            } 

            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/

        }if($key['id_tipo_personal'] == 3){

            if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 /*foreach ($dataef as $ef) {
                  if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }
                 }*/

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;

                if($key['status'] !=0) $deduccion_sso = $key['x_deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['x_deduccion_rpe']; else $deduccion_rpe = 0;
                if($key['status'] !=0) $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01); else $faov = 0;
                if($key['status'] !=0) $deduccion_fpj = $key['x_deduccion_fpj']; else $deduccion_fpj = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
                
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                /*foreach ($dataef as $ef) {
                  if ($key['cedula'] == $ef['cedula']){
                        $funeraria = 0;
                        $prestamo_caja = 0;
                    }
                 }*/

                if($key['status'] !=0) $deduccion = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $x_depositario + $prestamo_caja; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
                /*================================================================================================*/
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                /*foreach ($dataef as $ef) {
                  if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }
                 }*/

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;

                if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;
                if($key['status'] !=0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01); else $faov = 0;
                if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj']; else $deduccion_fpj = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                /*foreach ($dataef as $ef) {
                  if ($key['cedula'] == $ef['cedula']){
                        $funeraria = 0;
                        $prestamo_caja = 0;
                    }
                 }*/

                if($key['status'] !=0) $deduccion = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $x_depositario + $prestamo_caja; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
                /*================================================================================================*/
            }
        }else if($key['id_tipo_personal'] == 4){

             if($key['status'] !=0) 
                $sueldo_base = ($key['sueldo_base'] / 2) ; 
            else $sueldo_base = 0;

           /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

             if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

             if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            
            @$asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $becas;

        /*======================================================================================================*/

            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;

            if($key['status'] !=0) 
                $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
            else $faov = 0;

            if($key['cedula'] == '11141183') $faov = $faov * 2;

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                $funeraria = 20000/2; 
            else $funeraria = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (250000*0.01) / 2; else 
            $sindicato = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0 ) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

 

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;



            if($key['status'] !=0) $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deduccion = 0;

            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/
        }else if($key['id_tipo_personal'] == 5){

             if($key['status'] !=0) 
                $sueldo_base = ($key['sueldo_base'] / 2) ; 
            else $sueldo_base = 0;

           /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

             if($key['status'] !=0) 
                $prima_profesion = $key['prima_profesion']; 
            else $prima_profesion = 0;

             if($key['status'] !=0) 
                $prima_antiguedad = $key['prima_antiguedad']; 
            else $prima_antiguedad = 0;

            
            @$asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $becas;

        /*======================================================================================================*/

           if($key['funeraria'] != 0 AND $key['status'] !=0) 
                $funeraria = 20000/2; 
            else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] !=0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 62500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 62500 / 2; 
            else $prima_hogar = 0;

            if($key['status'] !=0) 
                $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); 
            else $faov = 0;

            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;

            if($key['status'] !=0) 
                $deduccion_fpj = $key['deduccion_fpj']; 
            else $deduccion_fpj = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (250000*0.01) / 2; else 
            $sindicato = 0;

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;


            if($key['status'] !=0) 
                $sueldo_base = $key['sueldo_base']; 
            else $sueldo_base = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($key['status'] !=0) $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_fpj + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deduccion = 0;

            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/
        }else if($key['id_tipo_personal'] == 6){

            if($key['status'] != 0)$sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;

            if($key['status'] != 0) $neto = $sueldo_base;

        }else if($key['id_tipo_personal'] == 7){

            if ($key['sueldo'] !=0) {

                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
                 if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $x_depositario; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/

             }else{
                
                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
                 if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $x_depositario; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/
             }
        }else if($key['id_tipo_personal'] == 8){

            if ($key['sueldo'] !=0) {

                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/

             }else{
                
                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/
             }
        }else if($key['id_tipo_personal'] == 9){

            if ($key['sueldo'] !=0) {

                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/

             }else{
                
                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/
             }
        }else if($key['id_tipo_personal'] == 10){

            if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
            }

        }else if($key['id_tipo_personal'] == 11){

           if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
            }
        }else if($key['id_tipo_personal'] == 12){

           if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
            }
        }else if($key['id_tipo_personal'] == 13){

           if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['status'] !=0) $neto = $sueldo_base; else $neto = 0;
            }

        }else if($key['id_tipo_personal'] == 14){

           /*======================================================================================================*/
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 37500 * $key['hijos']) / 2; else $prima_hijos = 0;


             if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;

            

            @$asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad;

        /*======================================================================================================*/

            if($key['status'] !=0) $deduccion_sso =$key['deduccion_sso']; else $deduccion_sso = 0;

            if($key['status'] !=0) $deduccion_rpe =$key['deduccion_rpe']; else $deduccion_rpe = 0;

            if($key['status'] !=0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01); else $faov = 0;

            if($key['status'] !=0) 
                $deduccion_fpj = $key['deduccion_fpj']; 
            else $deduccion_fpj = 0;

            if($key['funeraria'] !=0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;


            if($key['status'] !=0) $deduccion = $deduccion_sso + $deduccion_rpe  + $faov + $funeraria + $deduccion_fpj; else $total = 0;


            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
        }
            $n = strlen($key['nombres']) + strlen($key['apellidos']);
            $n = 50 - $n;

            $espacios = '';

            for ($i=0; $i < $n; $i++) { 
                $espacios .= ' ';
            }

            $valor = $key['nombres']. " ".$key['apellidos']. $espacios .$key['cedula']."\t".$key['numero_cuenta']."\t". $neto;

			echo $valor. "\n";
		}
?>

