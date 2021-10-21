<?php
namespace App\Controller;

use App\Controller\AppController;

/*============================ ENCABEZADOS ===============================*/
class PDF_AsignacionesProteccionCivil extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS DE PROTECCION CIVIL',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(88);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(40);
        $this->SetX(138);
        $this->MultiCell(17,5,'SUELDO MENSUAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(155);
        $this->MultiCell(16,10,'SUELDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(171);
        $this->MultiCell(20,5,'PRIMA PROFESION',1,'C',0);
        $this->SetY(40);
        $this->SetX(191);
        $this->MultiCell(20,10,'PRIMA HIJOS',1,'C',0);
        $this->SetY(40);
        $this->SetX(211);
        $this->MultiCell(22,5,'PRIMA ANTIGUEDAD',1,'C',0);
        $this->SetY(40);
        $this->SetX(233);
        $this->MultiCell(22,5,'BONO E. ECONOMICA',1,'C',0);
        $this->SetY(40);
        $this->SetX(255);
        $this->MultiCell(22,5,'BONO DE VACACIONES',1,'C',0);
        $this->SetY(40);
        $this->SetX(277);
        $this->MultiCell(22,5,'BONO DE EVALUACION',1,'C',0);
        $this->SetY(40);
        $this->SetX(299);
        $this->MultiCell(20,10,'TOTAL',1,'C',0); 
    }
}

class PDF_DeduccionesProteccionCivil extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS DE PROTECCION CIVIL',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');

        $this->SetFont('Arial','B',6);
        $this->SetY(40);
        $this->SetX(30);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(36);
        $this->MultiCell(25,10,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(61);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(91);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(121);
        $this->MultiCell(25,10,'SSO',1,'C',0);
        $this->SetY(40);
        $this->SetX(146);
        $this->MultiCell(25,10,'RPE',1,'C',0);
        $this->SetY(40);
        $this->SetX(171);
        $this->MultiCell(25,10,'FAOV',1,'C',0);
        $this->SetY(40);
        $this->SetX(196);
        $this->MultiCell(25,10,'FPJ',1,'C',0);
        $this->SetY(40);
        $this->SetX(221);
        $this->MultiCell(25,10,'FUNERARIA',1,'C',0);
        $this->SetY(40);
        $this->SetX(246);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}

class PDF_AportePatronalProteccionCivil extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS DE PROTECCION CIVIL',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE APORTE PATRONALES',0,1,'C');

        $this->SetFont('Arial','B',6);

       $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(25,10,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(36);
        $this->MultiCell(40,10,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(76);
        $this->MultiCell(40,10,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(116);
        $this->MultiCell(25,5,'APORTE PATRONAL SSO',1,'C',0);
        $this->SetY(40);
        $this->SetX(141);
        $this->MultiCell(25,5,'APORTE PATRONAL RPE',1,'C',0);
        $this->SetY(40);
        $this->SetX(166);
        $this->MultiCell(30,10,'APORTE PATRONAL FAOV',1,'C',0);
        $this->SetY(40);
        $this->SetX(196);
        $this->MultiCell(25,5,'APORTA PATRONAL FPJ',1,'C',0);
        $this->SetY(40);
        $this->SetX(221);
        $this->MultiCell(25,5,'APORTE PATRONAL CAJA DE AHORRO',1,'C',0);
        $this->SetY(40);
        $this->SetX(246);
        $this->MultiCell(25,10,'TOTAL APORTE',1,'C',0); 
    }
}

class PDF_NetoCobrarProteccionCivil extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        
        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS DE PROTECCION CIVIL',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(10);
        $this->MultiCell(10,10,'Nro',1,'J',0);
        $this->SetY(40);
        $this->SetX(20);
        $this->MultiCell(20,10,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(40);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(70);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(100);
        $this->MultiCell(70,10,'CARGO',1,'C',0);
        $this->SetY(40);
        $this->SetX(170);
        $this->MultiCell(30,10,'SALARIO MENSUAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(200);
        $this->MultiCell(30,10,'TOTAL ASIGNACIONES',1,'C',0);
        $this->SetY(40);
        $this->SetX(230);
        $this->MultiCell(30,10,'TOTAL DEDUCCIONES',1,'C',0);
        $this->SetY(40);
        $this->SetX(260);
        $this->MultiCell(30,10,'NETO A PAGAR',1,'C',0);
    }
}

class PDF_ResumenNominaProteccionCivil extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');

            $this->ln();
    }

    function Footer()
    {
        
        $this->SetY(-35);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}


/*============================ REPORTES PDF ===============================*/

class MRRHHNominaProteccionCivilReporteController extends AppController
{

    /*----------------------------- CONTRATADOS -----------------------------=*/

    public function AsignacionesProteccionCivil ($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoPc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();


        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 

        
        $pdf = new PDF_AsignacionesProteccionCivil('L','mm',array(320,250));

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();


        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } 

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 
        $pdf-> ln(); 

        $pdf -> SetFont('Arial','B',6);   

        $i  = 0;

        $prima_antiguedad = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_prima_hogar = 0;
        $t_bono_estabilidad = 0;
        $t_bono_vacacional = 0;

        $t_evaluacion = 0;
        $t_total = 0;

        $evaluacion = 0;

        foreach ($data as $key) {


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

        if($key['hijos'] != 0 AND $key['status'] !=0) {
            if($key['requisicion'] > 1122) {
                $prima_hijos = ( 100000 * $key['hijos']) / 2;
            }else{
                $prima_hijos = ( 62500 * $key['hijos']) / 2;
            }
        } else {
            $prima_hijos = 0;
        }


        if($key['prima_hogar'] != 0 AND $key['status'] !=0) {
            if($key['requisicion'] > 1122) {
                $prima_hogar = 100000 / 2;
            }else{
                $prima_hogar = 62500 / 2;
            }
        } else {
            $prima_hogar = 0;
        }



        if($key['status'] !=0){
            if($key['ajuste_p_profesion'] != 0){
                $prima_profesion = $key['ajuste_p_profesion'];
            }else {
                $prima_profesion = $sueldo_base * $key['grado_porcentaje'];
            }
        } else {
            $prima_profesion = 0;
        }


        if($key['status'] !=0){
            if($key['ajuste_p_antiguedad'] != 0){
                $prima_antiguedad = $key['ajuste_p_antiguedad'];
            }else {
                $prima_antiguedad = $sueldo_base * $porcentaje;; 
            }
        } else {
            $prima_antiguedad = 0;
        }



            //if($key['status'] !=0) $prima_antiguedad = $sueldo_base * $porcentaje; else $prima_antiguedad = 0;

           // if($key['status'] !=0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;

          //   $antiguedad = $prima_antiguedad + $ajuste_p_antiguedad;





             if($key['bono_estabilidad'] != 0)$bono_estabilidad = $sueldo_mensual * 0.50; else $bono_estabilidad =  0;            
        
             //Falta boton en Nomina (Check).
             if($key['vacaciones'] != 0){
                $vacaiones =  (($sueldo_base + $prima_antiguedad + $prima_profesion + $prima_hijos) / 15) * 50;
             }else{
                $vacaiones = 0;
             }

             if($key['status'] != 0 AND $key['evaluacion'] == 1)$evaluacion = $sueldo_mensual * 0.50; else $evaluacion =  0;            


            if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $bono_estabilidad + $vacaiones; else $total = 0;

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus($key['cargo']),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_mensual),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$bono_estabilidad),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$vacaiones),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$evaluacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_mensual += $sueldo_mensual;
            $t_sueldo_base += $sueldo_base;
            $t_prima_profesion += $prima_profesion;
            $t_prima_antiguedad += $prima_antiguedad;
            $t_prima_hijos += $prima_hijos;
            $t_bono_estabilidad += $bono_estabilidad;
            $t_bono_vacacional += $vacaiones;
            $t_evaluacion += $evaluacion;
            $t_total += $total;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(133,5,'TOTAL',1,0,'C');

        $pdf -> Cell(17,5, $this->moneda(@$t_sueldo_mensual),1,0,'R');
        $pdf -> Cell(16,5, $this->moneda(@$t_sueldo_base),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_prima_profesion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_prima_hijos),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_prima_antiguedad),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_bono_estabilidad),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_bono_vacacional),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_evaluacion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
        $pdf -> ln();
        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE LA OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

     public function DeduccionesProteccionCivil ($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoPc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

         $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 


        $pdf = new PDF_DeduccionesProteccionCivil('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();


        $pdf -> SetFont('Arial','B',6);

        $i = 0;
        $prima_hijos = 0;
        $prima_hogar = 0;
        $t_deduccion_sso = 0;
        $t_deduccion_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_rpe = 0;
        $t_funeraria = 0;
        $t_total = 0;
        $prima_antiguedad = 0;

        foreach ($data as $key) {

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

                if($key['hijos'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hijos = ( 100000 * $key['hijos']) / 2;
                    }else{
                        $prima_hijos = ( 62500 * $key['hijos']) / 2;
                    }
                } else {
                    $prima_hijos = 0;
                }


                if($key['prima_hogar'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hogar = 100000 / 2;
                    }else{
                        $prima_hogar = 62500 / 2;
                    }
                } else {
                    $prima_hogar = 0;
                }



                if($key['status'] !=0){
                    if($key['ajuste_p_profesion'] != 0){
                        $prima_profesion = $key['ajuste_p_profesion'];
                    }else {
                        $prima_profesion = $sueldo_base * $key['grado_porcentaje'];
                    }
                } else {
                    $prima_profesion = 0;
                }


                if($key['status'] !=0){
                    if($key['ajuste_p_antiguedad'] != 0){
                        $prima_antiguedad = $key['ajuste_p_antiguedad'];
                    }else {
                        $prima_antiguedad = $sueldo_base * $porcentaje;; 
                    }
                } else {
                    $prima_antiguedad = 0;
                }
        
            
            //if($key['status'] !=0) $prima_antiguedad = $sueldo_base * $porcentaje; else $prima_antiguedad = 0;


             //===================================================================================================

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
           
            if($key['status'] !=0) $total = $deduccion_sso + $deduccion_rpe + $faov + $funeraria + $deduccion_fpj; else $total = 0;
             
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(30);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_sso),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_rpe),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$faov),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_fpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

            @$t_deduccion_sso += $deduccion_sso;
            @$t_deduccion_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_fpj += $deduccion_fpj;
            @$t_funeraria += $funeraria;
            @$t_total += $total;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(30);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_deduccion_sso),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_deduccion_rpe),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_faov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_fpj),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_funeraria),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
        $pdf -> ln();
        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE LA OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }


    public function AportePatronalProteccionCivil($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoPc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 


        $pdf = new PDF_AportePatronalProteccionCivil('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 
        $pdf-> ln(); 
        
        $pdf -> SetFont('Arial','B',6);   

        $i = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_caja = 0;
        $t_total = 0;

        foreach ($data as $key) {

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

            if($key['hijos'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hijos = ( 100000 * $key['hijos']) / 2;
                    }else{
                        $prima_hijos = ( 62500 * $key['hijos']) / 2;
                    }
                } else {
                    $prima_hijos = 0;
                }


                if($key['prima_hogar'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hogar = 100000 / 2;
                    }else{
                        $prima_hogar = 62500 / 2;
                    }
                } else {
                    $prima_hogar = 0;
                }



                if($key['status'] !=0){
                    if($key['ajuste_p_profesion'] != 0){
                        $prima_profesion = $key['ajuste_p_profesion'];
                    }else {
                        $prima_profesion = $sueldo_base * $key['grado_porcentaje'];
                    }
                } else {
                    $prima_profesion = 0;
                }


                if($key['status'] !=0){
                    if($key['ajuste_p_antiguedad'] != 0){
                        $prima_antiguedad = $key['ajuste_p_antiguedad'];
                    }else {
                        $prima_antiguedad = $sueldo_base * $porcentaje;; 
                    }
                } else {
                    $prima_antiguedad = 0;
                }
            
            
            //if($key['status'] !=0) $prima_antiguedad = $sueldo_base * $porcentaje; else $prima_antiguedad = 0;
           
             //===================================================================================================


            if($key['status'] !=0) $aporte_patronal_asso = $sueldo_base * 12/52*4*0.11; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = $sueldo_base * 12/52*4*0.02; else $aporte_patronal_arpe = 0;
            if($key['status'] !=0) $aporte_patronal_afpj = $sueldo_base * 0.03; else $aporte_patronal_afpj = 0;


            if($key['status'] !=0) 
                $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad ) * 0.02); 
            else $afaov = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = $key['deduccion_caja_ahorro']; else $aporte_deduccion_caja = 0;


            if($key['status'] !=0) $total = $aporte_patronal_asso + $aporte_patronal_arpe + $afaov + $aporte_deduccion_caja + $aporte_patronal_afpj; else $total = 0;


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus(@$key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus(@$key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_asso),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_arpe),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$afaov),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_afpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_afpj += $aporte_patronal_afpj;
            $t_caja += $aporte_deduccion_caja;
            $t_total += $total;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(111,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_asso),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_arpe),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_afpj),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
        $pdf -> ln();
        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE LA OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function NetoCobrarProteccionCivil($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoPc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 


        $pdf = new PDF_NetoCobrarProteccionCivil('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 
        $pdf-> ln(); 
        
        $pdf -> SetFont('Arial','B',6);

        $i = 0;
        $asignacion = 0;
        $deduccion = 0;
        $neto = 0;

        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {



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

            if($key['hijos'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hijos = ( 100000 * $key['hijos']) / 2;
                    }else{
                        $prima_hijos = ( 62500 * $key['hijos']) / 2;
                    }
                } else {
                    $prima_hijos = 0;
                }


                if($key['prima_hogar'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hogar = 100000 / 2;
                    }else{
                        $prima_hogar = 62500 / 2;
                    }
                } else {
                    $prima_hogar = 0;
                }



                if($key['status'] !=0){
                    if($key['ajuste_p_profesion'] != 0){
                        $prima_profesion = $key['ajuste_p_profesion'];
                    }else {
                        $prima_profesion = $sueldo_base * $key['grado_porcentaje'];
                    }
                } else {
                    $prima_profesion = 0;
                }


                if($key['status'] !=0){
                    if($key['ajuste_p_antiguedad'] != 0){
                        $prima_antiguedad = $key['ajuste_p_antiguedad'];
                    }else {
                        $prima_antiguedad = $sueldo_base * $porcentaje;; 
                    }
                } else {
                    $prima_antiguedad = 0;
                }

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

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(10,5, ++$i,1,0,'C');
            $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],1,45)),1,0,'L');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_incremento += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(160,5, 'TOTAL',1,0,'C');
        $pdf -> Cell(30,5, $this->moneda(@$t_incremento),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_asignacion),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_deduccion),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_neto),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
        $pdf -> ln();
        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE LA OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoProteccionCivil($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoPc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 


        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf -> SetFont('Arial','',8);
            if($concepto['requisicion'] == 9999){
                $pdf -> SetX(70);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(45);
                $pdf -> MultiCell(130,5,$concepto['concepto'],0,'C',0);
                $pdf -> SetX(85);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'51',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A EMPLEADOS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,5,'Codigo',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,5,'concepto',0,0,'L');
        $pdf -> Cell(22,5,'Cod. Presup',0,0);
        $pdf -> Cell(22,5,'Asignaciones',0,0,'R');
        $pdf -> Cell(22,5,'Deducciones',0,0,'R');
        $pdf -> Cell(22,5,'Patronales',0,0,'R');

        $pdf -> ln();
        
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;

        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_funeraria = 0;

        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;

        $asignaciones = 0;
        $deducciones = 0;
        $aporte_patronal = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_aporte = 0;
        $aporte_patronal_afpj = 0;
        $t_aporte_patronal_afpj = 0;

        $t_vacaciones = 0;

        $i = 0;

        foreach ($data as $key) {

            ++$i;

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

        if($key['hijos'] != 0 AND $key['status'] !=0) {
            if($key['requisicion'] > 1122) {
                $prima_hijos = ( 100000 * $key['hijos']) / 2;
            }else{
                $prima_hijos = ( 62500 * $key['hijos']) / 2;
            }
        } else {
            $prima_hijos = 0;
        }


        if($key['prima_hogar'] != 0 AND $key['status'] !=0) {
            if($key['requisicion'] > 1122) {
                $prima_hogar = 100000 / 2;
            }else{
                $prima_hogar = 62500 / 2;
            }
        } else {
            $prima_hogar = 0;
        }



        if($key['status'] !=0){
            if($key['ajuste_p_profesion'] != 0){
                $prima_profesion = $key['ajuste_p_profesion'];
            }else {
                $prima_profesion = $sueldo_base * $key['grado_porcentaje'];
            }
        } else {
            $prima_profesion = 0;
        }


        if($key['status'] !=0){
            if($key['ajuste_p_antiguedad'] != 0){
                $prima_antiguedad = $key['ajuste_p_antiguedad'];
            }else {
                $prima_antiguedad = $sueldo_base * $porcentaje;; 
            }
        } else {
            $prima_antiguedad = 0;
        }



             if($key['bono_estabilidad'] != 0)$bono_estabilidad = $sueldo_mensual * 0.50; else $bono_estabilidad =  0;            
        
             //Falta boton en Nomina (Check).
             if($key['vacaciones'] != 0){
                $vacaiones =  (($sueldo_base + $prima_antiguedad + $prima_profesion + $prima_hijos) / 15) * 50;
             }else{
                $vacaiones = 0;
             }

            if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $bono_estabilidad + $vacaiones; else $asignacion = 0;


        /*======================================================================================================*/

            if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $bono_estabilidad + $vacaiones; else $asignacion = 0;


             @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;
            @$t_bono_estabilidad  += $bono_estabilidad;
            @$t_vacaciones  += $vacaiones;
            @$t_asignacion  += $asignacion;




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
           

            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_fpj += $deduccion_fpj;
            @$t_faov += $faov;
            @$t_funeraria += $funeraria;
            @$t_deduccion  += $deduccion;


       
            //=======================================================================================================


            //===================================================================================================


            if($key['status'] !=0) $aporte_patronal_asso = $sueldo_base * 12/52*4*0.11; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = $sueldo_base * 12/52*4*0.02; else $aporte_patronal_arpe = 0;
            if($key['status'] !=0) $aporte_patronal_afpj = $sueldo_base * 0.03; else $aporte_patronal_afpj = 0;


            if($key['status'] !=0) 
                $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad ) * 0.02); 
            else $afaov = 0;

            //if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso']; else $aporte_patronal_asso = 0;
            //if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
            //if($key['status'] !=0) $aporte_patronal_afpj = $key['aporte_patronal_afpj']; else $aporte_patronal_afpj = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = $key['deduccion_caja_ahorro']; else $aporte_deduccion_caja = 0;


            if($key['status'] !=0) $aporte_patronal = $aporte_patronal_asso + $aporte_patronal_arpe + $afaov + $aporte_deduccion_caja + $aporte_patronal_afpj; else $aporte_patronal = 0;


            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_aporte_patronal_afpj += $deduccion_fpj;
            $t_aporte += $aporte_patronal;

         }




        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Sueldo Basico Tiempo Completo',0,0);
        $pdf -> Cell(22,4,'4.01.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Prima de Profesion',0,0);
        $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1003',0,0);
        $pdf -> Cell(95,4,'Prima Por Hijo',0,0);
        $pdf -> Cell(22,4,'4.01.03.04.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_hijos),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1004',0,0);
        $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);


        if($t_vacaciones != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1005',0,0);
            $pdf -> Cell(95,4,'Bono Vacacional ',0,0);
            $pdf -> Cell(22,4,'4.01.05.03.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_vacaciones),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_bono_estabilidad != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1006',0,0);
            $pdf -> Cell(95,4,'Bono de Estabilidad',0,0);
            $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_bono_estabilidad),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2001',0,0);
        $pdf -> Cell(95,4,'Seguro Social Obligatorio',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_sso),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2002',0,0);
        $pdf -> Cell(95,4,'Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_rpe),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2003',0,0);
        $pdf -> Cell(95,4,'Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_faov),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2007',0,0);
        $pdf -> Cell(95,4,'Servicios Funerarios (ACOFJAM)',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2008',0,0);
        $pdf -> Cell(95,4,'Fondo de Pension y jubilacion',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_fpj),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3001',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del SSO',0,0);
        $pdf -> Cell(22,4,'4.01.04.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_asso),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3002',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'4.01.06.04.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_arpe),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3003',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'4.01.06.05.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_afaov),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3004',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal de Fondo de Pension y jubilacion',0,0);
        $pdf -> Cell(22,4,'4.01.06.05.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_aporte_patronal_afpj),0,1,'R');

        $pdf -> SetX(150);
        $pdf -> Cell(10,3,'___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(22,3,$this->moneda($t_asignacion),0,0,'R');
        $pdf -> Cell(22,3,$this->moneda($t_deduccion),0,0,'R');
        $pdf -> Cell(22,3,$this->moneda($t_aporte),0,1,'R');

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(22,3,$this->moneda($t_asignacion - $t_deduccion),0,0,'R');

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(15,3,$i,1,0);

         $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);
             $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');
        $pdf -> Output();
    }

    public function RequisionProteccionCivil($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',160,5,35,25,"JPG","");

    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',16);
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . $requisicion,0,1,'C');
    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' .$this->fecha($data['fecha_rrhh']) . '
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
    $pdf -> MultiCell(200,5,$data['concepto'],0,'L',0);

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

        $pdf -> Output();
    }


    public function ResumenNominaProteccionCivil($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 14;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoPc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoPc->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        if($mes['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($mes['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($mes['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($mes['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($mes['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($mes['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($mes['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($mes['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($mes['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($mes['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($mes['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($mes['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($mes['denominacion'] == 'FEBRERO' AND $quincena['fecha_hasta'] == 30) $dia = 29; else $dia = $quincena['fecha_hasta']; 



        $pdf = new PDF_ResumenNominaProteccionCivil();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;

        $t_funeraria = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

            $t_asignaciones = 0;
            $t_deducciones = 0;
            $vacaciones=0;
            $faov =0;

        foreach ($data as $key) {

            
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
            if($key['hijos'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hijos = ( 100000 * $key['hijos']) / 2;
                    }else{
                        $prima_hijos = ( 62500 * $key['hijos']) / 2;
                    }
                } else {
                    $prima_hijos = 0;
                }


                if($key['prima_hogar'] != 0 AND $key['status'] !=0) {
                    if($key['requisicion'] > 1122) {
                        $prima_hogar = 100000 / 2;
                    }else{
                        $prima_hogar = 62500 / 2;
                    }
                } else {
                    $prima_hogar = 0;
                }



                if($key['status'] !=0){
                    if($key['ajuste_p_profesion'] != 0){
                        $prima_profesion = $key['ajuste_p_profesion'];
                    }else {
                        $prima_profesion = $sueldo_base * $key['grado_porcentaje'];
                    }
                } else {
                    $prima_profesion = 0;
                }


                if($key['status'] !=0){
                    if($key['ajuste_p_antiguedad'] != 0){
                        $prima_antiguedad = $key['ajuste_p_antiguedad'];
                    }else {
                        $prima_antiguedad = $sueldo_base * $porcentaje;; 
                    }
                } else {
                    $prima_antiguedad = 0;
                }

             if($key['bono_estabilidad'] != 0)$bono_estabilidad = $sueldo_mensual * 0.50; else $bono_estabilidad =  0;            
        
             //Falta boton en Nomina (Check).
             if($key['vacaciones'] != 0){
                $vacaiones =  (($sueldo_base + $prima_antiguedad + $prima_profesion + $prima_hijos) / 15) * 50;
             }else{
                $vacaiones = 0;
             }

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $bono_estabilidad + $vacaiones; else $asignaciones = 0;


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
           
            if($key['status'] !=0) $deducciones = $deduccion_sso + $deduccion_rpe + $faov + $funeraria + $deduccion_fpj; else $deducciones = 0;
           
            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;



            @$t_asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad;
            @$t_deduccion = $deduccion_sso + $deduccion_rpe + $faov  + $funeraria;

           

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','B',9);
            $pdf -> SetX(15);
            $pdf -> Cell(40,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(80,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus(substr($key['nombres'],0,7)),1,0,'L');
            $pdf -> Cell(60,4,'Sueldo/Salario: '. $this->moneda($sueldo_base),1,1,'L');
            $pdf -> SetX(15);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(60,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,1,'L');
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'Concepto',1,0,'L');
            $pdf -> Cell(60,4,'Asignaciones'.'               '. 'Deducciones',1,1,'L');
            $pdf -> SetX(15);
            $pdf -> SetFont('Arial','',9);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            if($sueldo_base != 0){
                $pdf -> Cell(120,4,'1001'.' Sueldo Quincenal',0,0,'L');
                $pdf -> Cell(30,4, $this->moneda($sueldo_base),0,0,'L');
                $pdf -> Cell(30,4,' ',0,1,'L');
            }
            if($prima_profesion != 0){
                $pdf -> SetX(15);
                $pdf -> Cell(120,4,'1004'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,4, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,4,' ',0,1,'L');
            }
            if($prima_hijos != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'1006'.' Prima por Hijo',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($prima_hijos),0,0,'L');
            $pdf -> Cell(30,4,' ',0,1,'L');
            }
            if($prima_antiguedad != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'1007'.' Prima por Antiguedad',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($prima_antiguedad),0,0,'L');
            $pdf -> Cell(30,4,' ',0,1,'L');
            }
            if($vacaiones != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'1008'.' Bono Vacaciones',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($vacaiones),0,0,'L');
            $pdf -> Cell(30,4,' ',0,1,'L');
            }
            if($bono_estabilidad != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'1009'.' Bono Estabilidad Economica',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($bono_estabilidad),0,0,'L');
            $pdf -> Cell(30,4,' ',0,1,'L');
            }
            if($deduccion_sso != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'2001'.' Seguro Social Obligatorio',0,0,'L');
            $pdf -> Cell(30,4,' ',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deduccion_sso),0,1,'L');
            }
            if($deduccion_rpe != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
            $pdf -> Cell(30,4,' ',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deduccion_rpe),0,1,'L');
            }
            if($faov != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
            $pdf -> Cell(30,4,' ',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($faov),0,1,'L');
            }
            if($deduccion_fpj != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'2004'.' Fondo de Pension y jubilacion',0,0,'L');
            $pdf -> Cell(30,4,' ',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deduccion_fpj),0,1,'L');
            }
            if($funeraria != 0){
            $pdf -> SetX(15);
            $pdf -> Cell(120,4,'2005'.' ACOFJAM',0,0,'L'); /* Esto es Funeraria*/
            $pdf -> Cell(30,4,' ',0,0,'L');
            $pdf -> Cell(30,4, $this->moneda($funeraria),0,1,'L');
            }
            
            $t_asignaciones += $asignaciones;
            $t_deducciones += $deducciones;            

            $t_neto = $t_asignaciones - $t_deducciones;

            //===============================================================================================
            @$t_sso += $deduccion_sso;

            $pdf -> SetFont('Arial','B',9);
            $pdf -> ln();
            $pdf -> SetX(15); /*Totales*/
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'L');
            $pdf -> SetX(15); /*Totales*/
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
            }
        }

                $t_neto = $t_asignaciones - $t_deducciones;
                
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_asignaciones).'    ',0,0,'R');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deducciones),0,1,'R');

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

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');



        $pdf -> Output();
    }
}