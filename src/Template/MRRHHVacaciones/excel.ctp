<?php 
	//ajuntar la libreria excel
	require_once ROOT.DS.'vendor'.DS.'PHPExcel'.DS.'Classes'.DS.'PHPExcel.php';
	 
	$objPHPExcel = new PHPExcel();

	  
	$objPHPExcel->getProperties()
	        ->setCreator($concepto)
	        ->setLastModifiedBy("SISADMI")
	        ->setTitle($concepto)
	        ->setSubject("NOMINA")
	        ->setDescription($concepto)
	        ->setKeywords("nomina SISADMI")
	        ->setCategory("NOMINA");


	$i = 0;
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

             if($key['requisicion'] == 531){
                    $sueldo_base = $key['sueldo_base'];
                }else{
                    $sueldo_base = ($key['sueldo_base'] / 30) *  $key['dias'];

                }

               if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias'] ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias'] ; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias'] ; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias'] ; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias'] ; else $inicial = 0;


                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //$sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                //$prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                //$prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }

                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                $horas = $key['horas_extras'];

                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }

        
        //$horas = $horasd + $horasn + $horash;

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

              

                $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                $total_asignaciones = ($asignacion / 30) * $key['dias'];

                $valor = $total_asignaciones + $vacaciones;


                    $total_asignaciones = ($asignacion / 30) * $key['dias'];

                     if($m == 2 and $q == 1 and $key['cedula'] == 11801533){
                        $asignacion =  3679599.35;
                    }

                    if($m == 2 and $q == 1 and $key['cedula'] == 14793913){
                    $asignacion = 1459830.333;
                }
       

        /*======================================================================================================*/

            $sueldo_base = $key['sueldo_base']; 

             if($key['requisicion'] >1122){

               if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;

                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;
            } else {
                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;

                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;
            } 

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


             /*======================================================================================================*/
            /*=============================================== PRIMAS ===============================================*/

            if($key['requisicion'] >1122){
                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 ) $prima_hijos = ( 62500 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 62500 ; else $prima_hogar = 0;
            }

            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = (((($sueldo_base ) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if($key['cedula'] == 11137031 ){
                $deduccion_caja = 18729.17;
            }else{
                if ($key['caja_ahorro'] != 0 ) 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;
            }

            if($key['funeraria'] != 0 ) 
                $funeraria = (40000/30) * $key['dias']; 
            else $funeraria = 0;

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;


           $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

            /*=====================================================================================================================================*/

            $neto = $asignacion - $deduccion;

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
		

            $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                    ),
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
                        'rotation' => 90,
                        'startcolor' => array(
                            'argb' => 'FFA0A0A0',
                        ),
                        'endcolor' => array(
                            'argb' => 'FFFFFFFF',
                        ),
                    ),

                );

            
        $objPHPExcel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(50);
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);


        $objPHPExcel->getActiveSheet()->setCellValue('A1','NOMBRES');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'APELLIDOS');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', 'CEDULA');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', ' NRO DE CUENTA');
        $objPHPExcel->getActiveSheet()->setCellValue('E1', 'TOTAL A PAGAR');



		++$i;
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $key['nombres']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $key['apellidos']);
        $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, 'V'.$key['cedula']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $key['numero_cuenta']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, number_format(@$neto, 2, ',', '.'));

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
	}


	  
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="'.$concepto.'.xls"');
	header('Cache-Control: max-age=0');
	  
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');

?>