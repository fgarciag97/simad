<?php
namespace App\Controller;

use App\Controller\AppController;

/*============================ ENCABEZADOS ===============================*/
class PDF_ResumenNominaPersonalizada extends \FPDF {
    function Header()
    {
      $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',10,3,25,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',185,5,25,20,"JPG","");

        $this -> SetX(70);
        $this -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this -> SetX(70);
        $this -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        /*$this->SetX(70);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/
    }

    function Footer()
    {
        $this->SetY(-35);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}
/*============================ REPORTES PDF ===============================*/

class MRRHHNominaPersonalizadaController extends AppController
{

    /*----------------------------- CONTRATADOS -----------------------------=*/
     public function ResumenNomina($tp = '', $mes = '', $quincena = '', $requisicion = '', $omitida = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp, 'omitida' => $omitida];
        $data = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('MrrhhPersonalizadaPartidas');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        $partidas = $this->MrrhhPersonalizadaPartidas->find('all')->where($condicion)->toArray();

        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp, 'omitida' => $omitida];

        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoPersonalizadax');
            $data2 = $this->ViewMrrhhHistoricoPersonalizadax->find('all')->where($condicion)->where(['procesado' => 1]);
        }else{
            $this->loadModel('ViewMrrhhHistoricoPersonalizada');
            $data2 = $this->ViewMrrhhHistoricoPersonalizada->find('all')->where($condicion);
        }

        $this->loadModel('ViewMrrhhHistoricoPersonalizada');
        $data3 = $this->ViewMrrhhHistoricoPersonalizada->find('all')->where($condicion);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();


            if($tp == 1){
                $this->loadModel('ViewMrrhhEmpleadosFijosAux');
                $query = $this->ViewMrrhhEmpleadosFijosAux->find('all');
            }else if($tp == 2){
                $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
                $query = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
            }else if($tp == 3){
                $this->loadModel('ViewMrrhhDirectivosAux');
                $query = $this->ViewMrrhhDirectivosAux->find('all');
            }if($tp == 4){
                $this->loadModel('ViewMrrhhObrerosFijosAux');
                $query = $this->ViewMrrhhObrerosFijosAux->find('all');
            }else if($tp == 5){
                $this->loadModel('ViewMrrhhObrerosContratadosAux');
                $query = $this->ViewMrrhhObrerosContratadosAux->find('all');
            }else if($tp == 6){
                $this->loadModel('ViewMrrhhObrerosNoPermanentesAux');
                $query = $this->ViewMrrhhObrerosNoPermanentesAux->find('all');
            }if($tp == 7){
                $this->loadModel('ViewMrrhhJubiladosEmpleadosAux');
                $query = $this->ViewMrrhhJubiladosEmpleadosAux->find('all');
            }else if($tp == 8){
                $this->loadModel('ViewMrrhhJubiladosObrerosAux');
                $query = $this->ViewMrrhhJubiladosObrerosAux->find('all');
            }else if($tp == 9){
                $this->loadModel('ViewMrrhhPensionadosEmpleadosAux');
                $query = $this->ViewMrrhhPensionadosEmpleadosAux->find('all');
            }else if($tp == 10){
                $this->loadModel('ViewMrrhhPenSobreEmpleadosAux');
                $query = $this->ViewMrrhhPenSobreEmpleadosAux->find('all');
            }else if($tp == 11){
                $this->loadModel('ViewMrrhhPenEspEmpleadosAux');
                $query = $this->ViewMrrhhPenEspEmpleadosAux->find('all');
            }else if($tp == 12){
                $this->loadModel('ViewMrrhhPenSobreObrerosAux');
                $query = $this->ViewMrrhhPenSobreObrerosAux->find('all');
            }else if($tp == 13){
                $this->loadModel('ViewMrrhhPenEspObrerosAux');
                $query = $this->ViewMrrhhPenEspObrerosAux->find('all');
            }else if($tp == 14){
                $this->loadModel('ViewMrrhhProteccionCivilAux');
                $query = $this->ViewMrrhhProteccionCivilAux->find('all');
            }else if($tp == 15){
                $this->loadModel('ViewMrrhhCementerioAux');
                $query = $this->ViewMrrhhCementerioAux->find('all');
            }else if($tp == 16){
                $this->loadModel('ViewMrrhhComisionServicioAux');
                $query = $this->ViewMrrhhComisionServicioAux->find('all');
            }else if($tp == 17){
                $this->loadModel('ViewMrrhhHonorarioPAux');
                $query = $this->ViewMrrhhHonorarioPAux->find('all');
            }





        $pdf = new PDF_ResumenNominaPersonalizada();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        if($requisicion != 0){

    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',12);
    $pdf -> SetX(70);

    if($data[0]['id'] == 1027){
        $pdf -> Cell(80,5,'REQUISICION DE SERVICIO:  1027' ,0,1,'C');
    }else{
        $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . $this->requisicion(@$concepto['id']),0,1,'C');
    }


    

    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    /*$pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    /*$pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . $this->fecha(@$data[0]['fecha_rrhh']) . '
UNIDAD SOLICITANTE:  OFIC. DE ADMINISTRACION Y TALENTO HUMANO

',1,'L',0);*/

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . date('d/m/y') . '
UNIDAD SOLICITANTE:  OFIC. DE ADMINISTRACION Y TALENTO HUMANO

',1,'L',0);



    $pdf -> SetFont('Arial','B',12);

    $pdf -> ln();
    $pdf -> SetX(13);
    $pdf -> Cell(20,2,'DESCRIPCION',0,1,'C');
    $pdf -> SetFont('Arial','',8);
    $pdf -> SetX(90);
    $pdf -> Cell(10,1,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


     /* Aqui se toman los parametros *TIPO DE NOMINA*, *QUINCENA*, *MES*, *AÑO DEL SERVIDOR**/
    $pdf -> ln();$pdf -> ln();
    $pdf -> ln();$pdf -> ln();
    $pdf -> SetX(10);
    $pdf -> MultiCell(180,5, $concepto['concepto'], 0, 'L', 0);


    $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________

FIRMA Y SELLO.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






___________________________

FIRMA Y SELLO.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO:




___________________________

FIRMA Y SELLO.

',1,'L',0);

        $pdf -> AddPage();
}

    


        $pdf -> SetFont('Arial','B',10);

         $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $asignaciones = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_caja = 0;

        $neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        $pdf -> SetFont('Arial','',8);


        $pdf -> SetFont('Arial','B',10);

         $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $asignaciones = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_caja = 0;

        $neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        $pdf -> SetFont('Arial','',8);

            $pdf->SetY(20);
            $pdf->SetX(40);
            $pdf->MultiCell(140,5,'Nomina:'.' '.@$data[0]['tipo_personal_denominacion'].'  '.@$this->mayus($concepto['concepto']),0,'C',0);


        $pdf -> SetFont('Arial','B',8);

        foreach ($data2 as $key) {

                $sueldo = $key->sueldo_base;

                foreach ($partidas as $key2) {
                }


                        $t_asignacion += $key2['monto'];
                        $t_deduccion = 0;
                        


                        $t_neto = $t_asignacion - $t_deduccion;

       

            $y = $pdf-> GetY();
            $pdf -> SetY($y+12);

            foreach ($query as $ef) {
                if($key['cedula'] == $ef['cedula']){
                    $cargo = $ef['cargo'];
                }
            }
            
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','B',9);
            $pdf -> SetX(15);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(60,4,'Monto: '. $this->moneda($sueldo),1,1,'L');


            
            $pdf -> SetX(15);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($cargo,0,60),0,40)),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(60,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,1,'L');
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'Concepto',1,0,'L');
            $pdf -> Cell(60,4,'Asignacion'.'        '. '',1,1,'L');
            $pdf -> SetX(15);
            $pdf -> SetFont('Arial','',9);

                if($requisicion != 0){

                    foreach ($partidas as $key2) {
                        $pdf -> SetX(15);
                        $pdf -> Cell(15,4,'1001 ',0,0,'L');
                        $pdf -> SetFont('Arial','B',8);
                        $pdf -> Cell(105,4, $this->mayus(substr($key2['denominacion'],0,44)),0,0,'L');
                        $pdf -> SetFont('Arial','B',9);
                        $pdf -> Cell(30,4, $this->moneda($key2['monto']),0,0,'L');
                        $pdf -> Cell(30,4,' ',0,1,'L');  
                    }
                }


            $pdf -> SetFont('Arial','B',9);
            $pdf -> ln();
            $pdf -> SetX(15); /*Totales*/
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($key2['monto']),1,1,'L');
            $pdf -> SetX(15); /*Totales*/
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($key2['monto']),1,1,'L');

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','',9);
                $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf->MultiCell(140,5,'Nomina:'.' '.@$data[0]['tipo_personal_denominacion'].'  '.$this->mayus($concepto['concepto']),0,'C',0);
            }

        }


                $y = $pdf -> GetY();
                if($y > 245){
                $pdf -> AddPage();

                if($y > 210){
                    $pdf -> SetFont('Arial','',9);
                    $pdf->SetY(20);
                    $pdf->SetX(40);
                    $pdf->MultiCell(140,5,'Nomina:'.' '.@$this->mayus($data[0]['tipo_personal_denominacion']).'  '. $this->mayus($concepto['concepto']),0,'C',0);
                
                }
            }

                $pdf -> SetFont('Arial','B',9);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_asignacion).'    ',0,0,'R');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'R');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(26,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_neto),0,0,'R');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                 $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');


        $pdf -> Output();
    }

    public function Acumulado($tp = '', $mes = '', $quincena = '', $requisicion = '', $omitida = ''){
//===================================================================================================
        //ESO FUE LO QUE AÑADI

        $this->loadModel('MrrhhPersonalizadaPartidas');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
        $partidas = $this->MrrhhPersonalizadaPartidas->find('all')->where($condicion)->toArray();

        //===================================================================================================
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp, 'omitida' => $omitida];
        
        if($requisicion == 0){
            $this->loadModel('ViewMrrhhHistoricoPersonalizadax');
            $data = $this->ViewMrrhhHistoricoPersonalizadax->find('all', ['conditions' => $condicion])->where(['procesado' => 1])->toArray();
        }else{
            $this->loadModel('ViewMrrhhHistoricoPersonalizada');
            $data = $this->ViewMrrhhHistoricoPersonalizada->find('all', ['conditions' => $condicion])->toArray();
        }

        $this->loadModel('ViewMrrhhRequisicion');
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();
        

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

            $pdf -> SetX(90);
            $pdf -> SetFont('Arial','',8);
                

        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(130);
        $pdf -> SetFont('Arial','',8);


            $pdf -> SetX(70);
            $pdf->MultiCell(160,5,'CONCEPTO: '.$this->mayus($concepto['concepto']),0,'C',0);
       
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'SECTOR',0,0);
        $pdf -> Cell(10,5,'14',0,0);
        $pdf -> Cell(120,5,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'PROGRAMA',0,0);
        $pdf -> Cell(10,5,'01',0,0);
        $pdf -> Cell(120,5,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        if ($tp == 1 OR $tp== 2 OR $tp ==3 OR $tp ==7 OR $tp ==9 OR $tp== 10 OR $tp ==11 OR $tp ==16 OR $tp ==17) {
            $personal = 'EMPLEADOS';
        }else{
            $personal = 'OBREROS';
        }

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'ACTIVIDAD',0,0);

        if ($tp == 1 OR $tp ==2 OR $tp ==3 OR $tp ==7 OR $tp ==9 OR $tp== 10 OR $tp ==11 OR $tp ==16 OR $tp== 17) {
            $pdf -> Cell(10,5,'51',0,0);
        }else{
            $pdf -> Cell(10,5,'52',0,0);
        }

        $pdf -> Cell(120,5,'SEGURIDAD SOCIAL A'.' '.$personal,0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(40,5,'Cod. Presup',0,0);
        $pdf -> Cell(40,5,'Asignaciones',0,0);
        $pdf -> Cell(40,5,'Deducciones',0,0);
        $pdf -> Cell(40,5,'Patronales',0,0);

        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

       
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(10);
        $monto = 0;
        $i = -1;


         foreach ($data as $key) {
                ++$i;
        }

       

        

        foreach ($partidas as $key) {

            ++$i;
            $pdf -> Cell(40,5, $key['partida'],0,0);
            $pdf -> Cell(110,5, $this->mayus($key['denominacion']),0,0);
            $pdf -> Cell(25,5,'',0,0);
            $pdf -> Cell(30,5,@$this->moneda($key['monto'] * $i),0,1);
            $monto = $key['monto'] * $i;

        }
        

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);

        $pdf -> Cell(70,5,'Neto',0,0);

        $pdf -> SetFont('Arial','B',8);
        //$pdf -> Cell(40,5,$this->moneda($t_asignacion),0,0);

        $pdf -> Cell(30,4,$this->moneda($monto),1,1,'L');

        $pdf -> ln();

        $pdf -> SetX(114);

        if ($tp == 1 OR $tp = 2 OR $tp = 3 OR $tp = 7 OR $tp = 9 OR $tp = 10 OR $tp = 11 OR $tp = 16 OR $tp = 17) {
            $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);
        }else{
            $pdf -> Cell(60,3,'Cantidad de Obreros',0,0);
        }

        $pdf -> Cell(15,3,$i,0,'L',0);
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'',0,0);
        $pdf -> Cell(80,5,'',0,0);


         $pdf -> SetX(150);
        $pdf -> Cell(10,5,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 


        $pdf -> Output();
    }

}