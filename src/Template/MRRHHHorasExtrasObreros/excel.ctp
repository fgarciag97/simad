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
            ->setCategory("HORAS EXTRAS");


    $i = 0;
    $neto = 0;

    foreach ($data as $key) {   

        if($key['id_tipo_personal'] == 4){

                foreach ($data4 as $key2) {

                        if($key['cedula'] == $key2['cedula']){

                            $cargo = $key2['cargo'];

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        if($key2['cedula'] == 20682540) $prima_profesion = 60970.00;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      @$dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                

                  

                  /*============================ Total ==========================*/

                  $neto = $diurnas + $nocturnas + $dias_no_laborables;

            } else if($key['id_tipo_personal'] == 5){ 

                foreach ($data5 as $key2) {
                        if($key['cedula'] == $key2['cedula']){

                            $cargo = $key2['cargo'];

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        if($key2['cedula'] == 20682540) $prima_profesion = 60970.00;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }


                 }

                  /*====================== Horas Diurnas ===================*/

                if($key['cedula'] == 5295914 or $key['cedula'] == 9503364){
                    
                        if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.50 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.30) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;

                }else{
                    if($key['cantidad_horas_extra_diurnas'] != 0){
                      $diurnas = ((((($asignaciones) / 30) / 8) * 0.60 * $key['cantidad_horas_extra_diurnas']) + (((($asignaciones) / 30) / 8) * $key['cantidad_horas_extra_diurnas']));}
                      else $diurnas = 0;

                      /*====================== Horas Nocturnas ===================*/

                      if($key['cantidad_horas_extra_nocturnas'] != 0){
                      $nocturnas = ((((($asignaciones) / 30) / 8) * 0.50 ) + (((($asignaciones) / 30) / 8) * 0.25) + (((($asignaciones) / 30) / 8))) * $key['cantidad_horas_extra_nocturnas'];}
                      else $nocturnas = 0;

                      /*====================== Dias no Laborables ===================*/

                      if($key['dias_no_laborables'] != 0){
                      $dias_no_laborables = (((($asignaciones) / 30) * 0.50) + (($asignaciones) / 30)) * $key['dias_no_laborables'];}
                      else $dias_no_laborables = 0;
                }

                  

                  /*============================ Total ==========================*/

                  $neto = $diurnas + $nocturnas + $dias_no_laborables;

            }else if($key['id_tipo_personal'] == 6){ 

                 foreach ($data6 as $key2) {
                        if($key['cedula'] == $key2['cedula']){
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 62500 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 62500 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion'] * 2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar;
                        else $asignaciones = 0;
                     }
                 }


                  $asignacion = $sueldo_base + $prima_hijos + $prima_hogar + $prima_antiguedad + $prima_profesion;
                  /*====================== Horas Diurnas ===================*/

                  if($key['cantidad_horas_extra_diurnas'] != 0)
                  $diurnas = (((($asignaciones) / 30) / 8) * 1.70) * $key['cantidad_horas_extra_diurnas'];
                  else $diurnas = 0;

                  /*====================== Horas Nocturnas ===================*/

                  if($key['cantidad_horas_extra_nocturnas'] != 0)
                  $nocturnas = ((((($asignaciones) / 30) / 8) * 1.70) + (((($asignaciones) / 30) / 8) * 1.30)) * $key['cantidad_horas_extra_nocturnas'];
                  else $nocturnas = 0;

                  /*====================== Dias no Laborables ===================*/

                  if($key['dias_no_laborables'] != 0)
                  $dias_no_laborables = ((($asignaciones) / 30) * 1.50) * $key['dias_no_laborables'];
                  else $dias_no_laborables = 0;

                  /*============================ Total ==========================*/

                  $neto = $diurnas + $nocturnas + $dias_no_laborables;

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