<?php 
    //ajuntar la libreria excel
    require_once ROOT.DS.'vendor'.DS.'PHPExcel'.DS.'Classes'.DS.'PHPExcel.php';
     
    $objPHPExcel = new PHPExcel();

      
    $objPHPExcel->getProperties()
            ->setCreator($concepto)
            ->setLastModifiedBy("SISADMI")
            ->setTitle($concepto)
            ->setSubject("HACIENDA")
            ->setDescription($concepto)
            ->setKeywords("Registros SISADMI")
            ->setCategory("HACIENDA");


    
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


            foreach ($data as $key) {
            
                $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(50);
                $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(100);


                $objPHPExcel->getActiveSheet()->setCellValue('A1','FECHA DE PAGO');
                $objPHPExcel->getActiveSheet()->setCellValue('B1', 'TIPO');
                $objPHPExcel->getActiveSheet()->setCellValue('C1', 'BANCO');
                $objPHPExcel->getActiveSheet()->setCellValue('D1', 'RECIBO');
                $objPHPExcel->getActiveSheet()->setCellValue('E1', 'REFERENCIA');
                $objPHPExcel->getActiveSheet()->setCellValue('F1', 'DEBE');
                $objPHPExcel->getActiveSheet()->setCellValue('G1', 'HABER');
                $objPHPExcel->getActiveSheet()->setCellValue('H1', 'SALDO');

             

                ++$i;
                $objPHPExcel->getActiveSheet()->setCellValue('A'.($i + 1), $key['fecha_pago']);
                $objPHPExcel->getActiveSheet()->setCellValue('B'.($i + 1), 'DEPOSITO');
                $objPHPExcel->getActiveSheet()->setCellValue('C'.($i + 1), $key['nombre_banco']);
                $objPHPExcel->getActiveSheet()->setCellValue('D'.($i + 1), $key['recibo']);
                $objPHPExcel->getActiveSheet()->setCellValue('E'.($i + 1), $key['referencia']);
                $objPHPExcel->getActiveSheet()->setCellValue('F'.($i + 1), $key['monto_debe']);
                $objPHPExcel->getActiveSheet()->setCellValue('G'.($i + 1), $key['monto_haber']);
                $objPHPExcel->getActiveSheet()->setCellValue('H'.($i + 1), $key['saldo']);

                

                $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
            
            }
    


      
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$concepto.'.xls"');
    header('Cache-Control: max-age=0');
      
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');

?>