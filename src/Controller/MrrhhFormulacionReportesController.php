<?php
namespace App\Controller;

use App\Controller\AppController;

class MrrhhFormulacionReportesController extends AppController
{

      public function reportejubpen($id = null){

            if($id != null){

                  $this->loadModel('MrrhhFormulacion');
                  $data = $this->MrrhhFormulacion->find('all')->where(['ano' => ANO_FISCAL])->order(['tipo' => 'ASC', 'subtipo' => 'ASC']);

                  $ano_real_femenino = 0;
                  $ano_real_maculino = 0;
                  $ano_real_monto = 0;
                  $ano_real_incidencias = 0;
                  $ultimo_ano_femenino = 0;
                  $ultimo_ano_maculino = 0;
                  $ultimo_ano_monto = 0;
                  $ultimo_ano_incidencias = 0;
                  $ano_presupuestado_femenino = 0;
                  $ano_presupuestado_maculino = 0;
                  $ano_presupuestado_monto = 0;
                  $ano_presupuestado_incidencias = 0;
                        
                  //=============================================================

                  $pdf = new \FPDF('L','mm',array(570,250));
                  $pdf -> AddPage();
                  $pdf -> SetFont('Arial','I',8);
          
                  $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,3,40,25,"JPG","");
                  $pdf ->Image(WWW_ROOT.'img/escudo.jpg',490,5,40,25,"JPG","");

            $pdf -> SetX(250);
            $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
            $pdf -> SetX(250);
            $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCÓN',0,1,'C');

            $pdf -> SetX(250);
            $pdf -> Cell(80,3,'PERSONAL JUBILADO Y PENSIONADO POR GENERO',0,1,'C');
            $pdf -> SetX(250);
            $pdf -> Cell(80,3,'(En Bolivares)',0,1,'C');
            


            /*=============================================== Año Real del sistema =======================================================================*/ 
            $pdf -> SetFont('Arial','B',7);

            $pdf -> SetY(30);
            $pdf -> SetX(10);
            $pdf -> Cell(60,30,'

DENOMINACION

',1,0,'C');
            $pdf -> SetY(30);
            $pdf -> SetX(70);
            $pdf -> Cell(155,5,$this->mayus('

AÑO REAL 

'),1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(70);
            $pdf -> Cell(35,5,'

Genero

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(70);
            $pdf -> Cell(10,20,'

F

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(80);
            $pdf -> Cell(10,20,'

M

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(90);
            $pdf -> Cell(15,20,'

TOTAL

',1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(105);
            $pdf->MultiCell(40,5,'

 Monto de Jubilacion y Pension

            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(145);
            $pdf->MultiCell(40,8.3,'
 INCIDENCIAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(185);
            $pdf->MultiCell(40,5,'

 Total

            ',1,'C',0);

            /*=============================================== Ultimo Año Año =======================================================================*/

            $pdf -> SetY(30);
            $pdf -> SetX(225);
            $pdf -> Cell(155,5,$this->mayus('

ÚLTIMO AÑO ESTIMADO  

'),1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(225);
            $pdf -> Cell(35,5,'

Genero

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(225);
            $pdf -> Cell(10,20,'

F

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(235);
            $pdf -> Cell(10,20,'

M

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(245);
            $pdf -> Cell(15,20,'

TOTAL

',1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(260);
            $pdf->MultiCell(40,5,'

 Monto de Jubilacion y Pension

            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(300);
            $pdf->MultiCell(40,8.3,'
 INCIDENCIAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(340);
            $pdf->MultiCell(40,5,'

 Total

            ',1,'C',0);

            /*=============================================== AÑO PRESUPUESTADO =======================================================================*/

            $pdf -> SetY(30);
            $pdf -> SetX(380);
            $pdf -> Cell(155,5,$this->mayus('

AÑO PRESUPUESTADO

'),1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(380);
            $pdf -> Cell(35,5,'

Genero

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(380);
            $pdf -> Cell(10,20,'

F

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(390);
            $pdf -> Cell(10,20,'

M

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(400);
            $pdf -> Cell(15,20,'

TOTAL

',1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(415);
            $pdf->MultiCell(40,5,'

 Monto de Jubilacion y Pension

            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(455);
            $pdf->MultiCell(40,8.3,'
 INCIDENCIAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(495);
            $pdf->MultiCell(40,5,'

 Total

            ',1,'C',0);




            $pdf -> SetY(60);
            $pdf -> SetX(10);
            $pdf->MultiCell(60,2,'

 JUBILADOS


ALTOS FUNCIONARIOS Y FUNCIONARIAS 

DE ELECCION POPULAR 


ALTO NIVEL Y DE DIRECCION


DOCENTE


MEDICO


POLICIAL


BOMBERIL


EMPLEADO


OBRERO




PENSIONADO:


ALTOS FUNCIONARIOS Y FUNCIONARIAS 

DE ELECCION POPULAR 


ALTO NIVEL Y DE DIRECCION


DOCENTE


MEDICO


POLICIAL


BOMBERIL


EMPLEADO


OBRERO

            ',1,'L',0);

            $pdf -> SetFont('Arial','I',8);

            /*================================================  IMPRESION DE LOS DATOS ======================================================*/


            /*========================================================= JUBILADOS ===========================================================*/


            /*================================================  FILA 1 ======================================================*/


            $pdf -> SetY(69);
            $pdf -> SetX(70);
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,1,'L');

            /*================================================  FILA 2 ======================================================*/


            $pdf -> SetY(77);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

            /*================================================  FILA 3 ======================================================*/


            $pdf -> SetY(83);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

            /*================================================  FILA 4 ======================================================*/


            $pdf -> SetY(89);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

             /*================================================  FILA 5 ======================================================*/


            $pdf -> SetY(95);
            $pdf -> SetX(70);
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,1,'L');

              /*================================================  FILA 6 ======================================================*/


            $pdf -> SetY(102);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

              /*================================================  FILA 7 ======================================================*/

            $pdf -> SetY(108);
            $pdf -> SetX(70);

            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'JUBILADOS' and $key['subtipo'] == 'EMPLEADOS'){
                        $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_monto'] + $key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(10,6,$key['ultimo_ano_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_monto'] + $key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_monto'] + $key['ano_presupuestado_incidencias']),1,1,'L');

                        $ano_real_femenino += $key['ano_real_femenino'];
                        $ano_real_maculino += $key['ano_real_maculino'];
                        $ano_real_monto += $key['ano_real_monto'];
                        $ano_real_incidencias += $key['ano_real_incidencias'];
                        $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                        $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                        $ultimo_ano_monto += $key['ultimo_ano_monto'];
                        $ultimo_ano_incidencias += $key['ultimo_ano_incidencias'];
                        $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                        $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                        $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                        $ano_presupuestado_incidencias += $key['ano_presupuestado_incidencias'];
                  }
            }

              /*================================================  FILA 8 ======================================================*/


            $pdf -> SetY(114);
            $pdf -> SetX(70);

            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'JUBILADOS' and $key['subtipo'] == 'OBREROS'){
                        $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_monto'] + $key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(10,6,$key['ultimo_ano_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_monto'] + $key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_monto'] + $key['ano_presupuestado_incidencias']),1,1,'L');

                        $ano_real_femenino += $key['ano_real_femenino'];
                        $ano_real_maculino += $key['ano_real_maculino'];
                        $ano_real_monto += $key['ano_real_monto'];
                        $ano_real_incidencias += $key['ano_real_incidencias'];
                        $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                        $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                        $ultimo_ano_monto += $key['ultimo_ano_monto'];
                        $ultimo_ano_incidencias += $key['ultimo_ano_incidencias'];
                        $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                        $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                        $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                        $ano_presupuestado_incidencias += $key['ano_presupuestado_incidencias'];
                  }
            }

            /*============================================== PENSIONADOS =====================================================*/


            /*================================================  FILA 1 ======================================================*/


            $pdf -> SetY(130);
            $pdf -> SetX(70);
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,0,'L');
            $pdf -> Cell(40,8,'0,00',1,1,'L');

            /*================================================  FILA 2 ======================================================*/


            $pdf -> SetY(138);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

            /*================================================  FILA 3 ======================================================*/


            $pdf -> SetY(144);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

            /*================================================  FILA 4 ======================================================*/


            $pdf -> SetY(150);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

             /*================================================  FILA 5 ======================================================*/


            $pdf -> SetY(156);
            $pdf -> SetX(70);
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,0,'L');
            $pdf -> Cell(40,7,'0,00',1,1,'L');

              /*================================================  FILA 6 ======================================================*/


            $pdf -> SetY(163);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,0,'L');
            $pdf -> Cell(40,6,'0,00',1,1,'L');

              /*================================================  FILA 7 ======================================================*/


            $pdf -> SetY(169);
            $pdf -> SetX(70);
            
            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'PENSIONADOS' and $key['subtipo'] == 'EMPLEADOS'){
                        $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_real_monto'] + $key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(10,6,$key['ultimo_ano_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ultimo_ano_monto'] + $key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_monto']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_incidencias']),1,0,'L');
                        $pdf -> Cell(40,6,$this->moneda($key['ano_presupuestado_monto'] + $key['ano_presupuestado_incidencias']),1,1,'L');

                        $ano_real_femenino += $key['ano_real_femenino'];
                        $ano_real_maculino += $key['ano_real_maculino'];
                        $ano_real_monto += $key['ano_real_monto'];
                        $ano_real_incidencias += $key['ano_real_incidencias'];
                        $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                        $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                        $ultimo_ano_monto += $key['ultimo_ano_monto'];
                        $ultimo_ano_incidencias += $key['ultimo_ano_incidencias'];
                        $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                        $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                        $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                        $ano_presupuestado_incidencias += $key['ano_presupuestado_incidencias'];
                  }
            }

              /*================================================  FILA 8 ======================================================*/


            $pdf -> SetY(175);
            $pdf -> SetX(70);

            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'PENSIONADOS' and $key['subtipo'] == 'OBREROS'){
                        $pdf -> Cell(10,9,$key['ano_real_femenino'],1,0,'L');
                        $pdf -> Cell(10,9,$key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(15,9,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ano_real_monto']),1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ano_real_monto'] + $key['ano_real_incidencias']),1,0,'L');
                        $pdf -> Cell(10,9,$key['ultimo_ano_femenino'],1,0,'L');
                        $pdf -> Cell(10,9,$key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(15,9,$key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ultimo_ano_monto']),1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ultimo_ano_monto'] + $key['ultimo_ano_incidencias']),1,0,'L');
                        $pdf -> Cell(10,9,$key['ano_presupuestado_femenino'],1,0,'L');
                        $pdf -> Cell(10,9,$key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(15,9,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ano_presupuestado_monto']),1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ano_presupuestado_incidencias']),1,0,'L');
                        $pdf -> Cell(40,9,$this->moneda($key['ano_presupuestado_monto'] + $key['ano_presupuestado_incidencias']),1,1,'L');

                        $ano_real_femenino += $key['ano_real_femenino'];
                        $ano_real_maculino += $key['ano_real_maculino'];
                        $ano_real_monto += $key['ano_real_monto'];
                        $ano_real_incidencias += $key['ano_real_incidencias'];
                        $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                        $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                        $ultimo_ano_monto += $key['ultimo_ano_monto'];
                        $ultimo_ano_incidencias += $key['ultimo_ano_incidencias'];
                        $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                        $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                        $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                        $ano_presupuestado_incidencias += $key['ano_presupuestado_incidencias'];
                  }
            }

            /*================================================= acumuladores ======================================================*/


            $pdf -> SetFont('Arial','B',8);

            $pdf -> Cell(60,9,'TOTALES',1,0,'C');
            $pdf -> Cell(10,9,$ano_real_femenino,1,0,'L');
            $pdf -> Cell(10,9,$ano_real_maculino,1,0,'L');
            $pdf -> Cell(15,9,$ano_real_femenino + $ano_real_maculino,1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ano_real_monto),1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ano_real_incidencias),1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ano_real_monto + $ano_real_incidencias),1,0,'L');
            $pdf -> Cell(10,9,$ultimo_ano_femenino,1,0,'L');
            $pdf -> Cell(10,9,$ultimo_ano_maculino,1,0,'L');
            $pdf -> Cell(15,9,$ultimo_ano_femenino + $ultimo_ano_maculino,1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ultimo_ano_monto),1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ultimo_ano_incidencias),1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ultimo_ano_monto + $ultimo_ano_incidencias),1,0,'L');
            $pdf -> Cell(10,9,$ano_presupuestado_femenino,1,0,'L');
            $pdf -> Cell(10,9,$ano_presupuestado_maculino,1,0,'L');
            $pdf -> Cell(15,9,$ano_presupuestado_femenino + $ano_presupuestado_maculino,1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ano_presupuestado_monto),1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ano_presupuestado_incidencias),1,0,'L');
            $pdf -> Cell(40,9,$this->moneda($ano_presupuestado_monto + $ano_presupuestado_incidencias),1,1,'L');

                $pdf -> Output();
            }
      }









































      public function reporteempleados(){

      		$this->loadModel('MrrhhFormulacion');
            $data = $this->MrrhhFormulacion->find('all')->where(['ano' => ANO_FISCAL])->order(['tipo' => 'ASC', 'subtipo' => 'ASC']);

            $ano_real_femenino = 0;
	          $ano_real_maculino = 0;
	          $ano_real_monto = 0;
	          $ano_real_compensaciones = 0;
	          $ano_real_primas = 0;
	          $ultimo_ano_femenino = 0;
	          $ultimo_ano_maculino = 0;
	          $ultimo_ano_monto = 0;
	          $ultimo_ano_compensaciones = 0;
	          $ultimo_ano_primas = 0;
	          $ano_presupuestado_femenino = 0;
	          $ano_presupuestado_maculino = 0;
	          $ano_presupuestado_monto = 0;
	          $ano_presupuestado_compensaciones = 0;
	          $ano_presupuestado_primas = 0;

                $pdf = new \FPDF('L','mm',array(550,300));
                $pdf -> AddPage();
                $pdf -> SetFont('Arial','I',8);
                
                $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,3,40,25,"JPG","");
                $pdf ->Image(WWW_ROOT.'img/escudo.jpg',475,5,40,25,"JPG","");

            $pdf -> SetX(245);
            $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
            $pdf -> SetX(245);
            $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');

            $pdf -> SetX(245);
            $pdf -> Cell(80,3,'RECURSOS HUMANOS / TALENTO HUMANO POR TIPO DE CARGO Y GENERO A NIVEL DE PROGRAMAS',0,1,'C');
            $pdf -> SetX(245);
            $pdf -> Cell(80,3,'(En Bolivares)',0,1,'C');
            


            /*=============================================== Año Real del sistema =======================================================================*/ 
            $pdf -> SetFont('Arial','B',7);

            $pdf -> SetY(30);
            $pdf -> SetX(10);
            $pdf -> Cell(60,30,'

DENOMINACION

',1,0,'C');
            $pdf -> SetY(30);
            $pdf -> SetX(70);
            $pdf -> Cell(155,5,$this->mayus('

AÑO REAL 

'),1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(70);
            $pdf -> Cell(35,5,'

Genero

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(70);
            $pdf -> Cell(10,20,'

F

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(80);
            $pdf -> Cell(10,20,'

M

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(90);
            $pdf -> Cell(15,20,'

TOTAL

',1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(105);
            $pdf->MultiCell(30,5,'

 Monto de Jubilacion y Pension
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(135);
            $pdf->MultiCell(30,6.2,'

 COMPENSACIONES
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(165);
            $pdf->MultiCell(30,6.2,'

 PRIMAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(195);
            $pdf->MultiCell(20,6.2,'

 DIETAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(215);
            $pdf->MultiCell(10,5,'

 Total
            ',1,'C',0);

            /*=============================================== Ultimo Año Año =======================================================================*/

            $pdf -> SetY(30);
            $pdf -> SetX(225);
            $pdf -> Cell(155,5, $this->mayus('

Ultimo AÑO PRESUPUESTADO 

'),1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(225);
            $pdf -> Cell(35,5,'

Genero

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(225);
            $pdf -> Cell(10,20,'

F

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(235);
            $pdf -> Cell(10,20,'

M

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(245);
            $pdf -> Cell(15,20,'

TOTAL

',1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(260);
            $pdf->MultiCell(30,5,'

 Monto de Jubilacion y Pension
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(290);
            $pdf->MultiCell(30,6.2,'

 COMPENSACIONES
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(320);
            $pdf->MultiCell(30,6.2,'

 PRIMAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(350);
            $pdf->MultiCell(20,6.2,'

 DIETAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(370);
            $pdf->MultiCell(10,5,'

 Total
            ',1,'C',0);

            /*=============================================== AÑO PRESUPUESTADO =======================================================================*/

            $pdf -> SetY(30);
            $pdf -> SetX(380);
            $pdf -> Cell(145,5,$this->mayus('

Ultimo AÑO PRESUPUESTADO 

'),1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(380);
            $pdf -> Cell(35,5,'

Genero

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(380);
            $pdf -> Cell(10,20,'

F

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(390);
            $pdf -> Cell(10,20,'

M

',1,0,'C');
            $pdf -> SetY(40);
            $pdf -> SetX(400);
            $pdf -> Cell(15,20,'

TOTAL

',1,0,'C');
            $pdf -> SetY(35);
            $pdf -> SetX(415);
            $pdf->MultiCell(30,5,'

 Monto de Jubilacion y Pension
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(445);
            $pdf->MultiCell(30,6.2,'

 COMPENSACIONES
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(475);
            $pdf->MultiCell(30,6.2,'

 PRIMAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(505);
            $pdf->MultiCell(10,3.58,'

 DIETAS
            ',1,'C',0);

            $pdf -> SetY(35);
            $pdf -> SetX(515);
            $pdf->MultiCell(10,5,'

 Total
            ',1,'C',0);








            $pdf -> SetY(60);
            $pdf -> SetX(10);
            $pdf->MultiCell(60,2,'

PERSONAL FIJO A TIEMPO COMPLETO


ALTOS FUNCIONARIOS Y FUNCIONARIAS 

DE ELECCION POPULAR 


ALTO NIVEL Y DE DIRECCION


PROFESIONAL Y TECNICO


DOCENTE


MEDICO


POLICIAL


BOMBERIL


ADMINISTRATIVO


OBRERO




PERSONAL FIJO A TIEMPO PARCIAL:


DIRECTIVO


PROFESIONAL Y TECNICO


DOCENTE


MEDICO


POLICIAL


BOMBERIL


EMPLEADO


OBRERO





PERSONAL CONTRATADO:



DIRECTIVO


PROFESIONAL Y TECNICO

DOCENTE

MEDICO

ADMINISTRATIVO


OBRERO

            ',1,'L',0);

            $pdf -> SetFont('Arial','I',8);

            /*================================================  IMPRESION DE LOS DATOS ======================================================*/


            /*================================ PERSONAL FIJO TIEMPO COMPLETO ===========================================================*/


            /*================================================  FILA 1 ======================================================*/


            $pdf -> SetY(69);
            $pdf -> SetX(70);
            
            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'EMPLEADOS' and $key['subtipo'] == 'ELECCION POPULAR'){
                        $pdf -> Cell(10,8,$key['ano_real_femenino'],1,0,'L');
                        $pdf -> Cell(10,8,$key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(15,8,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda($key['ano_real_monto']),1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda(@$key['ano_real_compensaciones']),1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda($key['ano_real_primas']),1,0,'L');
                        $pdf -> Cell(20,8, '0',1,0,'L');
                        $pdf -> Cell(10,8, '0',1,0,'L');
                        $pdf -> Cell(10,8, $key['ultimo_ano_femenino'],1,0,'L');
                        $pdf -> Cell(10,8, $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(15,8, $key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda($key['ultimo_ano_monto']),1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda(@$key['ultimo_ano_compensaciones']),1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda($key['ultimo_ano_primas']),1,0,'L');
                        $pdf -> Cell(20,8, '0',1,0,'L');
                        $pdf -> Cell(10,8, '0',1,0,'L');
                        $pdf -> Cell(10,8,$key['ano_presupuestado_femenino'],1,0,'L');
                        $pdf -> Cell(10,8,$key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(15,8,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda($key['ano_presupuestado_monto']),1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda(@$key['ano_presupuestado_compensaciones']),1,0,'L');
                        $pdf -> Cell(30,8, $this->moneda($key['ano_presupuestado_primas']),1,0,'L');
                        $pdf -> Cell(10,8,'0',1,0,'L');
                        $pdf -> Cell(10,8,'0',1,1,'L');

                        $ano_real_femenino += $key['ano_real_femenino'];
                          $ano_real_maculino += $key['ano_real_maculino'];
                          $ano_real_monto += $key['ano_real_monto'];
                          $ano_real_compensaciones += $key['ano_real_compensaciones'];
                          $ano_real_primas += $key['ano_real_primas'];
                          $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                          $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                          $ultimo_ano_monto += $key['ultimo_ano_monto'];
                          $ultimo_ano_compensaciones += $key['ultimo_ano_compensaciones'];
                          $ultimo_ano_primas += $key['ultimo_ano_primas'];
                          $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                          $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                          $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                          $ano_presupuestado_compensaciones += $key['ano_presupuestado_compensaciones'];
                          $ano_presupuestado_primas += $key['ano_presupuestado_primas'];
                    }
                }

            /*================================================  FILA 2 ======================================================*/


            $pdf -> SetY(77);
            $pdf -> SetX(70);
            
            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'EMPLEADOS' and $key['subtipo'] == 'ALTO NIVEL'){
                        $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda($key['ano_real_monto']),1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda(@$key['ano_real_compensaciones']),1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda($key['ano_real_primas']),1,0,'L');
                        $pdf -> Cell(20,6, '0',1,0,'L');
                        $pdf -> Cell(10,6, '0',1,0,'L');
                        $pdf -> Cell(10,6, $key['ultimo_ano_femenino'],1,0,'L');
                        $pdf -> Cell(10,6, $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(15,6, $key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_monto']),1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda(@$key['ultimo_ano_compensaciones']),1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_primas']),1,0,'L');
                        $pdf -> Cell(20,6, '0',1,0,'L');
                        $pdf -> Cell(10,6, '0',1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
                        $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_monto']),1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda(@$key['ano_presupuestado_compensaciones']),1,0,'L');
                        $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_primas']),1,0,'L');
                        $pdf -> Cell(10,6,'0',1,0,'L');
                        $pdf -> Cell(10,6,'0',1,1,'L');

                        $ano_real_femenino += $key['ano_real_femenino'];
                          $ano_real_maculino += $key['ano_real_maculino'];
                          $ano_real_monto += $key['ano_real_monto'];
                          $ano_real_compensaciones += $key['ano_real_compensaciones'];
                          $ano_real_primas += $key['ano_real_primas'];
                          $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                          $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                          $ultimo_ano_monto += $key['ultimo_ano_monto'];
                          $ultimo_ano_compensaciones += $key['ultimo_ano_compensaciones'];
                          $ultimo_ano_primas += $key['ultimo_ano_primas'];
                          $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                          $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                          $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                          $ano_presupuestado_compensaciones += $key['ano_presupuestado_compensaciones'];
                          $ano_presupuestado_primas += $key['ano_presupuestado_primas'];
                    }
                }

            /*================================================  FILA 3 ======================================================*/


            $pdf -> SetY(83);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

            /*================================================  FILA 4 ======================================================*/


            $pdf -> SetY(89);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

             /*================================================  FILA 5 ======================================================*/


            $pdf -> SetY(95);
            $pdf -> SetX(70);
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(20,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(20,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,1,'L');

              /*================================================  FILA 6 ======================================================*/


            $pdf -> SetY(102);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

              /*================================================  FILA 7 ======================================================*/


            $pdf -> SetY(108);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

              /*================================================  FILA 8 ======================================================*/


            $pdf -> SetY(114);
            $pdf -> SetX(70);

            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'EMPLEADOS' and $key['subtipo'] == 'FIJOS'){
		            $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_real_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ano_real_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_real_primas']),1,0,'L');
		            $pdf -> Cell(20,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, $key['ultimo_ano_femenino'],1,0,'L');
		            $pdf -> Cell(10,6, $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(15,6, $key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ultimo_ano_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_primas']),1,0,'L');
		            $pdf -> Cell(20,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, '0',1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ano_presupuestado_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_primas']),1,0,'L');
		            $pdf -> Cell(10,6,'0',1,0,'L');
		            $pdf -> Cell(10,6,'0',1,1,'L');

		            $ano_real_femenino += $key['ano_real_femenino'];
                    $ano_real_maculino += $key['ano_real_maculino'];
                    $ano_real_monto += $key['ano_real_monto'];
                    $ano_real_compensaciones += $key['ano_real_compensaciones'];
                    $ano_real_primas += $key['ano_real_primas'];
                    $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                    $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                    $ultimo_ano_monto += $key['ultimo_ano_monto'];
                    $ultimo_ano_compensaciones += $key['ultimo_ano_compensaciones'];
                    $ultimo_ano_primas += $key['ultimo_ano_primas'];
                    $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                    $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                    $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                    $ano_presupuestado_compensaciones += $key['ano_presupuestado_compensaciones'];
                    $ano_presupuestado_primas += $key['ano_presupuestado_primas'];
		        }
		    }

              /*================================================  FILA 9 ======================================================*/


            $pdf -> SetY(120);
            $pdf -> SetX(70);
            
            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'OBREROS' and $key['subtipo'] == 'FIJOS'){
		            $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_real_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ano_real_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_real_primas']),1,0,'L');
		            $pdf -> Cell(20,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, $key['ultimo_ano_femenino'],1,0,'L');
		            $pdf -> Cell(10,6, $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(15,6, $key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ultimo_ano_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_primas']),1,0,'L');
		            $pdf -> Cell(20,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, '0',1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ano_presupuestado_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_primas']),1,0,'L');
		            $pdf -> Cell(10,6,'0',1,0,'L');
		            $pdf -> Cell(10,6,'0',1,1,'L');

		            $ano_real_femenino += $key['ano_real_femenino'];
                    $ano_real_maculino += $key['ano_real_maculino'];
                    $ano_real_monto += $key['ano_real_monto'];
                    $ano_real_compensaciones += $key['ano_real_compensaciones'];
                    $ano_real_primas += $key['ano_real_primas'];
                    $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                    $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                    $ultimo_ano_monto += $key['ultimo_ano_monto'];
                    $ultimo_ano_compensaciones += $key['ultimo_ano_compensaciones'];
                    $ultimo_ano_primas += $key['ultimo_ano_primas'];
                    $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                    $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                    $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                    $ano_presupuestado_compensaciones += $key['ano_presupuestado_compensaciones'];
                    $ano_presupuestado_primas += $key['ano_presupuestado_primas'];
		        }
		    }

            /*===================================== PERSONAL FIJO TIEMPO PARCIAL =====================================================*/


            /*================================================  FILA 1 ======================================================*/


            $pdf -> SetY(133);
            $pdf -> SetX(70);
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(20,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(20,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,1,'L');

            /*================================================  FILA 2 ======================================================*/


            $pdf -> SetY(141);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

            /*================================================  FILA 3 ======================================================*/


            $pdf -> SetY(147);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

            /*================================================  FILA 4 ======================================================*/


            $pdf -> SetY(153);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

             /*================================================  FILA 5 ======================================================*/


            $pdf -> SetY(159);
            $pdf -> SetX(70);
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(20,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(20,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(15,7,'0',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(30,7,'0,00',1,0,'L');
            $pdf -> Cell(10,7,'0',1,0,'L');
            $pdf -> Cell(10,7,'0',1,1,'L');

              /*================================================  FILA 6 ======================================================*/


            $pdf -> SetY(166);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

              /*================================================  FILA 7 ======================================================*/


            $pdf -> SetY(172);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

              /*================================================  FILA 8 ======================================================*/


            $pdf -> SetY(178);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

               /*================================================  FILA 9 ======================================================*/


            $pdf -> SetY(184);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

            
            /*===================================== PERSONAL CONTRATADO =====================================================*/


            /*================================================  FILA 1 ======================================================*/


            $pdf -> SetY(196);
            $pdf -> SetX(70);
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(20,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(20,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(15,8,'0',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(30,8,'0,00',1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,1,'L');

            /*================================================  FILA 2 ======================================================*/


            $pdf -> SetY(204);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

            /*================================================  FILA 3 ======================================================*/


            $pdf -> SetY(210);
            $pdf -> SetX(70);
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(20,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(15,6,'0',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(30,6,'0,00',1,0,'L');
            $pdf -> Cell(10,6,'0',1,0,'L');
            $pdf -> Cell(10,6,'0',1,1,'L');

            /*================================================  FILA 4 ======================================================*/


            $pdf -> SetY(216);
            $pdf -> SetX(70);
            
            foreach ($data as $key) {
                  
                  if($key['tipo'] == 'EMPLEADOS' and $key['subtipo'] == 'CONTRATADOS'){
		            $pdf -> Cell(10,6,$key['ano_real_femenino'],1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(15,6,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_real_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ano_real_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_real_primas']),1,0,'L');
		            $pdf -> Cell(20,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, $key['ultimo_ano_femenino'],1,0,'L');
		            $pdf -> Cell(10,6, $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(15,6, $key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ultimo_ano_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ultimo_ano_primas']),1,0,'L');
		            $pdf -> Cell(20,6, '0',1,0,'L');
		            $pdf -> Cell(10,6, '0',1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_presupuestado_femenino'],1,0,'L');
		            $pdf -> Cell(10,6,$key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(15,6,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_monto']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda(@$key['ano_presupuestado_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,6, $this->moneda($key['ano_presupuestado_primas']),1,0,'L');
		            $pdf -> Cell(10,6,'0',1,0,'L');
		            $pdf -> Cell(10,6,'0',1,1,'L');

		            $ano_real_femenino += $key['ano_real_femenino'];
                    $ano_real_maculino += $key['ano_real_maculino'];
                    $ano_real_monto += $key['ano_real_monto'];
                    $ano_real_compensaciones += $key['ano_real_compensaciones'];
                    $ano_real_primas += $key['ano_real_primas'];
                    $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                    $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                    $ultimo_ano_monto += $key['ultimo_ano_monto'];
                    $ultimo_ano_compensaciones += $key['ultimo_ano_compensaciones'];
                    $ultimo_ano_primas += $key['ultimo_ano_primas'];
                    $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                    $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                    $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                    $ano_presupuestado_compensaciones += $key['ano_presupuestado_compensaciones'];
                    $ano_presupuestado_primas += $key['ano_presupuestado_primas'];
		        }
		    }

             /*================================================  FILA 5 ======================================================*/

            $pdf -> SetY(222);
            $pdf -> SetX(70);

             foreach ($data as $key) {
                  
                  if($key['tipo'] == 'OBREROS' and $key['subtipo'] == 'CONTRATADOS'){
		            $pdf -> Cell(10,8,$key['ano_real_femenino'],1,0,'L');
		            $pdf -> Cell(10,8,$key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(15,8,$key['ano_real_femenino'] + $key['ano_real_maculino'],1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda($key['ano_real_monto']),1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda(@$key['ano_real_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda($key['ano_real_primas']),1,0,'L');
		            $pdf -> Cell(20,8, '0',1,0,'L');
		            $pdf -> Cell(10,8, '0',1,0,'L');
		            $pdf -> Cell(10,8, $key['ultimo_ano_femenino'],1,0,'L');
		            $pdf -> Cell(10,8, $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(15,8, $key['ultimo_ano_femenino'] + $key['ultimo_ano_maculino'],1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda($key['ultimo_ano_monto']),1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda(@$key['ultimo_ano_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda($key['ultimo_ano_primas']),1,0,'L');
		            $pdf -> Cell(20,8, '0',1,0,'L');
		            $pdf -> Cell(10,8, '0',1,0,'L');
		            $pdf -> Cell(10,8,$key['ano_presupuestado_femenino'],1,0,'L');
		            $pdf -> Cell(10,8,$key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(15,8,$key['ano_presupuestado_femenino'] + $key['ano_presupuestado_maculino'],1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda($key['ano_presupuestado_monto']),1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda(@$key['ano_presupuestado_compensaciones']),1,0,'L');
		            $pdf -> Cell(30,8, $this->moneda($key['ano_presupuestado_primas']),1,0,'L');
		            $pdf -> Cell(10,8,'0',1,0,'L');
		            $pdf -> Cell(10,8,'0',1,1,'L');

		            $ano_real_femenino += $key['ano_real_femenino'];
                    $ano_real_maculino += $key['ano_real_maculino'];
                    $ano_real_monto += $key['ano_real_monto'];
                    $ano_real_compensaciones += $key['ano_real_compensaciones'];
                    $ano_real_primas += $key['ano_real_primas'];
                    $ultimo_ano_femenino += $key['ultimo_ano_femenino'];
                    $ultimo_ano_maculino += $key['ultimo_ano_maculino'];
                    $ultimo_ano_monto += $key['ultimo_ano_monto'];
                    $ultimo_ano_compensaciones += $key['ultimo_ano_compensaciones'];
                    $ultimo_ano_primas += $key['ultimo_ano_primas'];
                    $ano_presupuestado_femenino += $key['ano_presupuestado_femenino'];
                    $ano_presupuestado_maculino += $key['ano_presupuestado_maculino'];
                    $ano_presupuestado_monto += $key['ano_presupuestado_monto'];
                    $ano_presupuestado_compensaciones += $key['ano_presupuestado_compensaciones'];
                    $ano_presupuestado_primas += $key['ano_presupuestado_primas'];
		        }
		    }


            /*================================================= acumuladores ======================================================*/

            $pdf -> SetFont('Arial','B',8);

            $pdf -> Cell(60,8,'TOTALES',1,0,'C');
            $pdf -> Cell(10,8, $ano_real_femenino,1,0,'L');
            $pdf -> Cell(10,8, $ano_real_maculino,1,0,'L');
            $pdf -> Cell(15,8, $ano_real_femenino + $ano_real_maculino,1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ano_real_monto),1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ano_real_compensaciones),1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ano_real_primas),1,0,'L');
            $pdf -> Cell(20,8, '0',1,0,'L');
            $pdf -> Cell(10,8, '0',1,0,'L');
            $pdf -> Cell(10,8, $ultimo_ano_femenino,1,0,'L');
            $pdf -> Cell(10,8, $ultimo_ano_maculino,1,0,'L');
            $pdf -> Cell(15,8, $ultimo_ano_femenino + $ultimo_ano_maculino,1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ultimo_ano_monto),1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ultimo_ano_compensaciones),1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ultimo_ano_primas),1,0,'L');
            $pdf -> Cell(20,8, '0',1,0,'L');
            $pdf -> Cell(10,8, '0',1,0,'L');
            $pdf -> Cell(10,8, $ano_presupuestado_femenino,1,0,'L');
            $pdf -> Cell(10,8, $ano_presupuestado_maculino,1,0,'L');
            $pdf -> Cell(15,8, $ano_presupuestado_femenino + $ano_presupuestado_maculino,1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ano_presupuestado_monto),1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ano_presupuestado_compensaciones),1,0,'L');
            $pdf -> Cell(30,8, $this->moneda($ano_presupuestado_primas),1,0,'L');
            $pdf -> Cell(10,8,'0',1,0,'L');
            $pdf -> Cell(10,8,'0',1,1,'L');



                        
                $pdf -> Output();
            }
}
