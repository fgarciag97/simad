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
	        ->setCategory("CESTA TICKET");


	$i = 0;
	$neto = 0;

	foreach ($data as $key) {        

           if ($key['dias_trabajados'] == 0) $sueldo_base = 0  ; else $sueldo_base = (200000.00 / $key['dias_trabajados'] );
           if ($key['dias_trabajados'] == 0) $total_dias = 0; else $total_dias =  $key['dias_trabajados'] - $key['dias_faltados']; 
           if ($key['dias_trabajados'] == 0)$neto = 0; else $neto = (200000.00/30) * $total_dias; 
		

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