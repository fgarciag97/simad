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

           if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $neto = $bono; else $neto = 0;


/*================================================================================================================================================================================================================================================================================================================================================================================================*/





        }else if($key['id_tipo_personal'] == 2){

            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $neto = $bono; else $neto = 0;

            /*======================================================================================================================================*/

/*================================================================================================================================================================================================================================================================================================================================================================================================*/



        }if($key['id_tipo_personal'] == 3){

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;

                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;

                
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $neto = $bono + $bono_dejado_c; else $neto = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;

                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $neto = $bono + $bono_dejado_c; else $neto = 0;
            } 



/*================================================================================================================================================================================================================================================================================================================================================================================================*/





            
        }else if($key['id_tipo_personal'] == 4){


            if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = $key['sueldo_base']/2;


            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $neto = $bono; else $neto = 0;

            if($key['bono_dias_cancelar'] != 0) $bono = (( $sueldo_base  * 0.40 ) / 15) * $key['bono_dias_cancelar'] ;
            if($key['bono_dias_cancelar'] != 0) $neto = $bono;


/*================================================================================================================================================================================================================================================================================================================================================================================================*/





        }else if($key['id_tipo_personal'] == 5){


            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $neto = $bono; else $neto = 0;

            /*======================================================================================================================================*/


/*================================================================================================================================================================================================================================================================================================================================================================================================*/






        }else if($key['id_tipo_personal'] == 6){

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $neto = $bono; else $neto = 0;





/*================================================================================================================================================================================================================================================================================================================================================================================================*/


        }else if($key['id_tipo_personal'] == 7){

            /* EMPLEADOS JUBILADOS - NETO A PAGAR */

            if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c']; else $dias_a_pagar = 0;

            if($key['dias_dejados_c']) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']); else $prima_profesion_dc = 0;

            if($key['ajuste_p_profesion']) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $asignaciones = 0;

            /*if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
            if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; $ajuste_p_antiguedad = 0;
            if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; $ajuste_p_hijos = 0;
            if($key['ajuste_p_hogar'] != 0) $ajuste_p_hogar = $key['ajuste_p_hogar']; $ajuste_p_hogar = 0;*/


            /*if($key['ajuste_sso'] != 0) $ajuste_sso = ($key['ajuste_sso'];
            if($key['ajuste_faov'] != 0) $ajuste_faov = ($key['ajuste_faov'];
            if($key['ajuste_rpe'] != 0) $ajuste_rpe = ($key['ajuste_rpe'];
            if($key['ajuste_fpj'] != 0) $ajuste_fpj = ($key['ajuste_fpj'];
            if($key['ajuste_caja'] != 0) $ajuste_caja = ($key['ajuste_caja'];
            if($key['ajuste_asso'] != 0) $ajuste_asso = ($key['ajuste_asso'];
            if($key['ajuste_afaov'] != 0) $ajuste_afaov = ($key['ajuste_afaov'];
            if($key['ajuste_arpe'] != 0) $ajuste_arpe = ($key['ajuste_arpe'];
            if($key['ajuste_afpj'] != 0) $ajuste_afpj = ($key['ajuste_afpj'];


            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_sueldo + $ajuste_p_antiguedad + $ajuste_p_hijos + $ajuste_p_hogar; else $asignaciones = 0;*/

         }else{
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c']; else $dias_a_pagar = 0;

            if($key['dias_dejados_c']) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']); else $prima_profesion_dc = 0;

            if($key['ajuste_p_profesion']) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $asignaciones = 0;


            /*if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
            if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; $ajuste_p_antiguedad = 0;
            if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; $ajuste_p_hijos = 0;
            if($key['ajuste_p_hogar'] != 0) $ajuste_p_hogar = $key['ajuste_p_hogar']; $ajuste_p_hogar = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_sueldo + $ajuste_p_antiguedad + $ajuste_p_hijos + $ajuste_p_hogar; else $asignaciones = 0;*/
         }



         //DEDUCCIONES 


       if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            if($key['sueldo'] != 0){
                 if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['x_deduccion_caja_ahorro']; 
                 else $deduccion_caja = 0;
            }else{
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;
            }

            $prestamo = (double)$key['prestamo_caja_ahorro'];

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != '') 
                $prestamo_caja = $prestamo; 
            else $prestamo_caja = 0;

            if($key['mes'] == 2 AND $key['quincena'] == 1){
                if($key['cedula'] == 11804964) $deduccion_caja = 98992.50;
                if($key['cedula'] == 14396765) $deduccion_caja = 72846.00;
            }

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

            if($key['status'] !=0) $deducciones = 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;

             if($key['status'] != 0) $neto = $asignaciones - $deducciones; else $neto = 0;
             
















/*================================================================================================================================================================================================================================================================================================================================================================================================*/














        }else if($key['id_tipo_personal'] == 8){

            /* OBREROS JUBILADOS*/

            if ($key['sueldo'] !=0) {

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;

                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;

             }else{
                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;
             }


            if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) /2 ; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $deducciones = 0;


         }else{

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $deducciones = 0;
         }

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;




















/*================================================================================================================================================================================================================================================================================================================================================================================================*/














        }else if($key['id_tipo_personal'] == 9){

            /* EMPLEADOS PENSIONADOS -NETO A PAGAR*/

            if ($key['sueldo'] !=0) {

                /*======================================================================================================*/

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

                /*======================================================================================================*/
         
                if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
                if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

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
         
                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
                if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
                if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

                if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

                /*======================================================================================================*/

                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

                /*======================================================================================================*/
            }

















/*================================================================================================================================================================================================================================================================================================================================================================================================*/












        }else if($key['id_tipo_personal'] == 10){


            /* EMPLEADOS PENSIONADOS SOBREVIVIENTES - NETO A PAGAR*/

            $t_asignacion = 0;
            $t_deduccion = 0;
    //======================================== ASIGNACIONES ================================================
                if ($key['sueldo'] !=0) {
                     if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                     if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                     if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                     if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                     if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                     if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
                    
        
                }else{
                    if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                    if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                    if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                    if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
                }


                //======================================== DEDUCCIONES  ================================================

                if($key['status'] !=0) $deducciones = 0;
                else $deducciones = 0;

                /*==================================================================================================*/

                if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

                /*==================================================================================================*/

 


















/*================================================================================================================================================================================================================================================================================================================================================================================================*/















        }else if($key['id_tipo_personal'] == 11){

            /* EMPLEADOS PENSIONADOS ESPECIALES - NETO A PAGAR*/

           if ($key['sueldo'] !=0) {

            /*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

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
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================*/
         }













/*================================================================================================================================================================================================================================================================================================================================================================================================*/



















        }else if($key['id_tipo_personal'] == 12){

            /* OBREROS PENSIONADOS SOBREVIVIENTES - NETO A PAGAR*/

           if ($key['sueldo'] != 0) {

             if($key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($key['status'] !=0) $deducciones =  0; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

        }else{

             if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;

          
            if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($key['status'] !=0) $deducciones =  0; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
        }











/*================================================================================================================================================================================================================================================================================================================================================================================================*/













        }else if($key['id_tipo_personal'] == 13){

            /* OBREROS PENSIONADOS ESPECIALES - NETO A PAGAR */

           if ($key['sueldo'] !=0) {

            /*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (250000*0.01) / 2; else 
            $sindicato = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja + $sindicato; else $deducciones = 0;

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
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (250000*0.01) / 2; else 
            $sindicato = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja + $sindicato; else $deducciones = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

            /*======================================================================================================*/
         }













/*================================================================================================================================================================================================================================================================================================================================================================================================*/














        }else if($key['id_tipo_personal'] == 14){

            /* PROTECCION CIVIL - NETO A PAGAR */

           if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;

            if($key['anos_institucion'] == 1) $porcentaje = 0.02;
            if($key['anos_institucion'] == 2) $porcentaje = 0.04;
            if($key['anos_institucion'] == 3) $porcentaje = 0.06;
            if($key['anos_institucion'] == 4) $porcentaje = 0.08;
            if($key['anos_institucion'] == 5) $porcentaje = 0.10;
            if($key['anos_institucion'] == 6) $porcentaje = 0.12;
            if($key['anos_institucion'] == 7) $porcentaje = 0.15;
            if($key['anos_institucion'] == 8) $porcentaje = 0.17;
            if($key['anos_institucion'] == 9) $porcentaje = 0.20;
            if($key['anos_institucion'] == 10) $porcentaje = 0.22;
            if($key['anos_institucion'] == 11) $porcentaje = 0.25;
            if($key['anos_institucion'] == 12) $porcentaje = 0.28;
            if($key['anos_institucion'] == 13) $porcentaje = 0.30;
            if($key['anos_institucion'] == 14) $porcentaje = 0.33;
            if($key['anos_institucion'] == 15) $porcentaje = 0.36;
            if($key['anos_institucion'] == 16) $porcentaje = 0.39;
            if($key['anos_institucion'] == 17) $porcentaje = 0.42;
            if($key['anos_institucion'] == 18) $porcentaje = 0.46;
            if($key['anos_institucion'] == 19) $porcentaje = 0.49;
            if($key['anos_institucion'] == 20) $porcentaje = 0.52;
            if($key['anos_institucion'] == 21) $porcentaje = 0.56;
            if($key['anos_institucion'] == 22) $porcentaje = 0.59;
            if($key['anos_institucion'] == 23) $porcentaje = 0.60;


        /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/

        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;


            if($key['status'] !=0) $prima_antiguedad = $sueldo_base * $porcentaje; else $prima_antiguedad = 0;

            if($key['status'] !=0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;

             $antiguedad = $prima_antiguedad + $ajuste_p_antiguedad;

  
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

             if($key['status'] !=0) $prima_profesion = $sueldo_base * $key['grado_porcentaje']; else $prima_profesion = 0;



             if($key['bono_estabilidad'] != 0)$bono_estabilidad = $sueldo_mensual * 0.50; else $bono_estabilidad =  0;            
        
             //Falta boton en Nomina (Check).
             if($key['vacaciones'] != 0){
                $vacaiones =  (($sueldo_base + $prima_antiguedad + $prima_profesion + $prima_hijos) / 15) * 50;
             }else{
                $vacaiones = 0;
             }

            if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $bono_estabilidad + $vacaiones; else $asignacion = 0;


        /*======================================================================================================*/

          
             if($key['status'] !=0) $deduccion_sso = $sueldo_base * 12/52*4*0.04; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $sueldo_base * 12/52*4*0.005; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = $sueldo_base * 0.03; else $deduccion_fpj = 0;


            if($key['status'] !=0) 
                $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); 
            else $faov = 0;

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
           
            if($key['status'] !=0) $deduccion = $deduccion_sso + $deduccion_rpe + $faov + $funeraria + $deduccion_fpj; else $deduccion = 0;
           
            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/











/*================================================================================================================================================================================================================================================================================================================================================================================================*/














        }else if($key['id_tipo_personal'] == 15){

            /* PERSONAL DE CEMENTERIO */
            $neto = 0;








/*================================================================================================================================================================================================================================================================================================================================================================================================*/







        }else if($key['id_tipo_personal'] == 16){


            /* COMISION DE SERVICIO */

            if ($key['sueldo'] !=0) {

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                //----------------------------------------Asignaciones ---------------------------------------------/

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;


                 //---------------------------------------- Deducciones  ---------------------------------------------/

                if($key['status'] !=0) $deduccion_sso = $key['x_deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['x_deduccion_rpe']; else $deduccion_rpe = 0;
                if($key['status'] !=0) $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01); else $faov = 0;
                if($key['status'] !=0) $deduccion_fpj = $key['x_deduccion_fpj']; else $deduccion_fpj = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
         

                if($key['status'] !=0) $deduccion =  $deduccion_caja + $funeraria + $x_depositario + $prestamo_caja; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
                /*================================================================================================*/
    
            }else{

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                //----------------------------------------Asignaciones ---------------------------------------------/

                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;


                //---------------------------------------- Deducciones  ---------------------------------------------/

                if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;
                if($key['status'] !=0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01); else $faov = 0;
                if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj']; else $deduccion_fpj = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deduccion =  $deduccion_caja + $funeraria + $x_depositario + $prestamo_caja; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
                /*================================================================================================*/
            }










/*================================================================================================================================================================================================================================================================================================================================================================================================*/









        }else if($key['id_tipo_personal'] == 17){

            /* HONORARIOS PROFESIONALES */

            if ($key['sueldo'] !=0) {

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                //----------------------------------------Asignaciones ---------------------------------------------/

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;


                 //---------------------------------------- Deducciones  ---------------------------------------------/

                if($key['status'] !=0) $deduccion_sso = $key['x_deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['x_deduccion_rpe']; else $deduccion_rpe = 0;
                if($key['status'] !=0) $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01); else $faov = 0;
                if($key['status'] !=0) $deduccion_fpj = $key['x_deduccion_fpj']; else $deduccion_fpj = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
         

                if($key['status'] !=0) $deduccion = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $x_depositario + $prestamo_caja; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
                /*================================================================================================*/
    
            }else{

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                //----------------------------------------Asignaciones ---------------------------------------------/

                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;


                //---------------------------------------- Deducciones  ---------------------------------------------/

                if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
                if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;
                if($key['status'] !=0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01); else $faov = 0;
                if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj']; else $deduccion_fpj = 0;
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

                if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;


                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;
                if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

                if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deduccion = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $x_depositario + $prestamo_caja; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
                /*================================================================================================*/
            }

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

            
            $english_format_number = number_format($neto, 2, '.', '');

            
        $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(50);
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);


        $objPHPExcel->getActiveSheet()->setCellValue('A1','NOMBRES');
        //$objPHPExcel->getActiveSheet()->setCellValue('B1', 'APELLIDOS');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'CEDULA');
        $objPHPExcel->getActiveSheet()->setCellValue('C1', ' NRO DE CUENTA');
        $objPHPExcel->getActiveSheet()->setCellValue('D1', 'TOTAL A PAGAR');

        if((strlen($key['cedula'])) <= 7) $concatenacion = 'V00';
        if((strlen($key['cedula'])) > 7) $concatenacion = 'V0';

        ++$i;
        $objPHPExcel->getActiveSheet()->setCellValue('A'.($i + 1), $key['apellidos'].'  '.$key['nombres']);
        //$objPHPExcel->getActiveSheet()->setCellValue('B'.($i + 1), $key['apellidos']);
        $objPHPExcel->getActiveSheet()->setCellValue('B'.($i + 1), $concatenacion.$key['cedula']);
        $objPHPExcel->getActiveSheet()->setCellValue('C'.($i + 1), $key['numero_cuenta']);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.($i + 1), $english_format_number);

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
	}

	  
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="'.$concepto.'.xls"');
	header('Cache-Control: max-age=0');
	  
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');

?>