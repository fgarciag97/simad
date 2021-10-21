 <?php 


	
	$nombre_archivo = $concepto.".txt"; 

	$neto = 0;

	foreach ($data as $key) {

		if($key['status'] !=0) 
                $sueldo_base = ($key['sueldo_base'] / 2) ; 
            else $sueldo_base = 0;

           /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (37500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (37500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (37500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (37500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (37500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            if($key['hijos'] != 0 AND $key['status'] !=0) 
                $prima_hijos = ( 37500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 37500 / 2; 
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
                $prima_hijos = ( 37500 * $key['hijos']) / 2; 
            else $prima_hijos = 0;

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) 
                $prima_hogar = 37500 / 2; 
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
                $sindicato = 150000*0.01; else 
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

		echo $key['nombres'].' '.$key['apellidos'].$key['cedula'].' '. "\t\t".$key['numero_cuenta'].''. "\t\t". $neto. "\t\t\n";
		}

?>