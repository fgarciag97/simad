<?php
namespace App\Controller;

use App\Controller\AppController;

class PDF_AsignacionesJubiladosEmpleados extends \FPDF {
    function Header()
    {
       $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS JUBILADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',8);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(30);
        $this->SetX(106);
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(126);
        $this->MultiCell(20,5,'TIPO DE PERSONAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(146);
        $this->MultiCell(20,5,'JUBILACION MENSUAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(20,5,'SUELDO QUINCENAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(186);
        $this->MultiCell(20,5,'PRIMA PROFESION',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(25,5,'TOTAL ASIGNACIONES',1,'C',0);
    }
}


class PDF_DeduccionesJubiladosEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS JUBILADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',6);
        $this->SetY(30);
        $this->SetX(30);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(25,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(61);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(91);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        
        $this->SetY(30);
        $this->SetX(121);
        $this->MultiCell(25,10,'CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(146);
        $this->MultiCell(25,5,'PRESTAMO CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(171);
        $this->MultiCell(20,5,'SERVICIOS FUNERARIOS',1,'C',0);

        $this->SetY(30);
        $this->SetX(191);
        $this->MultiCell(20,10,'SINDICATO',1,'C',0);

        $this->SetY(30);
        $this->SetX(211);
        $this->MultiCell(10,10,'ASOC.',1,'C',0);
        $this->SetY(30);
        $this->SetX(221);
        $this->MultiCell(20,5,'DEPOSITARIO JUDICIAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(241);
        $this->MultiCell(20,5,'TOTAL DEDUCCIONES',1,'C',0);
    }
}

class PDF_AportePatronalJubiladosEmpleados extends \FPDF {
    function Header()
    {
     $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(70);
        $this->Cell(80,5,'EMPLEADOS JUBILADOS',0,1,'C');
        $this->SetX(70);
        $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(30);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(53);
        $this->MultiCell(40,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(93);
        $this->MultiCell(40,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(133);
        $this->MultiCell(10,10,'%',1,'C',0);
        $this->SetY(30);
        $this->SetX(143);
        $this->MultiCell(20,5,'APORTE CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(163);
        $this->MultiCell(20,10,'TOTAL IMPORTE',1,'C',0); 
    }
}

class PDF_NetoCobrarJubiladosEmpleados extends \FPDF {
    function Header()
    {
     $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS JUBILADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

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
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(40);
        $this->SetX(106);
        $this->MultiCell(15,10,'CARGO',1,'C',0);
        $this->SetY(40);
        $this->SetX(121);
        $this->MultiCell(15,10,'TIPO',1,'C',0);
        $this->SetY(40);
        $this->SetX(136);
        $this->MultiCell(17,5,'SALARIO MENSUAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(153);
        $this->MultiCell(17,5,'TOTAL ASIGNA.',1,'C',0);
        $this->SetY(40);
        $this->SetX(170);
        $this->MultiCell(17,5,'TOTAL DEDUC.',1,'C',0);
        $this->SetY(40);
        $this->SetX(187);
        $this->MultiCell(17,5,'NETO A PAGAR',1,'C',0);
    }
}

class PDF_ResumenNominaJubiladosEmpleados extends \FPDF {
    function Header()
    {
      $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    /*$this->SetX(70);
    $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/
    }

    function Footer()
    {
        
        $this->SetY(-15);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}


/*============================================= OBREROS JUBILADOS ==========================================*/

class PDF_AsignacionesJubiladosObreros extends \FPDF {
    function Header()
    {
       $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS JUBILADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(30);
        $this->SetX(106);
        $this->MultiCell(20,5,'TIPO DE PERSONAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(126);
        $this->MultiCell(20,5,'JUBILACION MENSUAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(146);
        $this->MultiCell(20,5,'SUELDO QUINCENAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(20,5,'PRIMA PROFESION',1,'C',0);
        $this->SetY(30);
        $this->SetX(186);
        $this->MultiCell(20,5,'BECAS QUINCENAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(25,5,'TOTAL ASIGNACIONES',1,'C',0);
    }
}


class PDF_DeduccionesJubiladosObreros extends \FPDF {
    function Header()
    {
    $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS JUBILADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(30);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(53);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(83);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(113);
        $this->MultiCell(30,10,'SUELDO QUINCENAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(143);
        $this->MultiCell(20,5,'CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(163);
        $this->MultiCell(30,5,'PRESTAMO CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(193);
        $this->MultiCell(20,5,'SERVICIO FUNERARIO',1,'C',0);
        $this->SetY(30);
        $this->SetX(213);
        $this->MultiCell(20,10,'SINDICATO',1,'C',0);
        $this->SetY(30);
        $this->SetX(233);
        $this->MultiCell(12,10,'ASOC.',1,'C',0);
        $this->SetY(30);
        $this->SetX(245);
        $this->MultiCell(25,5,'TOTAL DEDUCCIONES',1,'C',0);  
    }
}

class PDF_AportePatronalJubiladosObreros extends \FPDF {
    function Header()
    {
     $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(70);
        $this->Cell(80,5,'OBREROS JUBILADOS',0,1,'C');
        $this->SetX(70);
        $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(30);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(53);
        $this->MultiCell(40,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(93);
        $this->MultiCell(40,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(133);
        $this->MultiCell(20,5,'APORTE CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(153);
        $this->MultiCell(20,10,'TOTAL IMPORTE',1,'C',0); 
    }
}

class PDF_NetoCobrarJubiladosObreros extends \FPDF {
    function Header()
    {
     $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS JUBILADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(30);
        $this->SetX(106);
        $this->MultiCell(15,10,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(121);
        $this->MultiCell(15,10,'TIPO',1,'C',0);
        $this->SetY(30);
        $this->SetX(136);
        $this->MultiCell(17,5,'SALARIO MENSUAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(153);
        $this->MultiCell(17,5,'TOTAL ASIGNA.',1,'C',0);
        $this->SetY(30);
        $this->SetX(170);
        $this->MultiCell(17,5,'TOTAL DEDUC.',1,'C',0);
        $this->SetY(30);
        $this->SetX(187);
        $this->MultiCell(17,5,'NETO A PAGAR',1,'C',0);
    }
}


class PDF_ResumenNominaJubiladosObreros extends \FPDF {
    function Header()
    {
      $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    
    }

    function Footer()
    {
        $this->SetY(-35);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}



class PDF_ResumenNominaObrerosJubilados extends \FPDF {
     function Header()
    {
      $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    /*$this->SetX(70);
    $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/
    }

    function Footer()
    {
        
        $this->SetY(-25);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}


class PDF_ResumenNominaEmpleadosJubilados extends \FPDF {
     function Header()
    {
      $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    /*$this->SetX(70);
    $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/
    }

    function Footer()
    {
        
        $this->SetY(-25);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}




class MRRHHNominaJubiladosReporteController extends AppController
{
    public function AsignacionesJubiladosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_AsignacionesJubiladosEmpleados('L','mm','A4');
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
        
        $pdf -> SetFont('Arial','',6);  

        $i  = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_ajuste_p_profesion = 0;
        $t_total = 0;

        $dias_a_pagar = 0;
        $t_dias_a_pagar = 0;

        $prima_profesion_dc = 0;
        $t_prima_profesion_dc = 0;
        $t_ajuste_p_profesion = 0;

        foreach ($data as $key) {

         /*======================================================================================================*/

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

            if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $total = 0;

         }else{
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['dias_dejados_c']) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']);else $prima_profesion_dc = 0;

            if($key['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c'];else $dias_a_pagar = 0;

            if($key['ajuste_p_profesion']) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $ajuste_p_profesion  + $dias_a_pagar + $prima_profesion_dc; else $total = 0;
         }
            
            $pdf -> SetFont('Arial','',6);

            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'R');
            $pdf -> Cell(30,5, $this->mayus(substr($key['nombres'],0,15)),1,0,'R');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'R');
            $pdf -> Cell(20,5, $this->mayus($key['grupo'] . " - " . $key['denominacion_grado_nivel']),1,0,'C');         
            $pdf -> Cell(20,5, $this->moneda(@$sueldo_mensual),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_mensual += $sueldo_mensual;
            $t_sueldo_base += $sueldo_base;
            $t_prima_profesion += $prima_profesion;
            $t_ajuste_p_profesion += $ajuste_p_profesion;
            $t_dias_a_pagar += $dias_a_pagar;
            $t_prima_profesion_dc += $prima_profesion_dc;
            $t_ajuste_p_profesion += $ajuste_p_profesion;
            $t_total += $total;

            $y = $pdf -> GetY();
            if($y > 180){
                $pdf -> AddPage();
            }

            if($y > 180){
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
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(5);
        $pdf -> Cell(161,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(20,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_prima_profesion),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

               /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(15);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

       
        $pdf -> Output();
    }

    public function DeduccionesJubiladosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_DeduccionesJubiladosEmpleados('L','mm',array(300,250));

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

        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_prestamo_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_x_depositario = 0;
        $x_depositario = 0;
        $t_total = 0;

        foreach ($data as $key) {

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            

            $prestamo = (double)$key['prestamo_caja_ahorro'];


            if($key['sueldo'] != 0){
                 if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['x_deduccion_caja_ahorro']; 
                 else $deduccion_caja = 0;
            }else{
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $deduccion_caja = $key['deduccion_caja_ahorro']; 
                else $deduccion_caja = 0;
            }


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
                $sindicato = (400000*0.01) / 2; else 
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

            if($key['status'] !=0) $total = 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $total = 0;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_fpj += $deduccion_fpj;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;
            @$t_total += $total;

            

           
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(30);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $key['apellidos'],1,0,'L');
            $pdf -> Cell(30,5, $key['nombres'],1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
            $pdf -> Cell(10,5, $this->moneda(@$asociacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$x_depositario),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $funeraria = 0;
            $faov = 0;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
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
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(30);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_prestamo_caja),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_funeraria),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_sindicato),1,0,'R');
        $pdf -> Cell(10,5, $this->moneda(@$t_asociacion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_x_depositario),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+8);
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

    public function AportePatronalJubiladosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all')->where($condicion);

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

        $pdf = new PDF_AportePatronalJubiladosEmpleados();
        $pdf -> AddPage();


        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_deduccion_caja = 0;
        $t_funeraria = 0;
        $t_total = 0;

        foreach ($data as $key) {

        if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if($key['sueldo'] != 0){
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo'] * 0.10) / 2; 
                else $aporte_deduccion_caja = 0;
            }else{
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
                else $aporte_deduccion_caja = 0;
            }

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

         }else{
            
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
            else $aporte_deduccion_caja = 0;

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;
         }


            
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(30);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'R');
            $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'R');
            $pdf -> Cell(10,5, '10%',1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_deduccion_caja += $aporte_deduccion_caja;
            $t_total += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(30);
        $pdf -> Cell(113,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(20,5, $this->moneda($t_deduccion_caja),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> ln();
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

    public function NetoCobrarJubiladosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarJubiladosEmpleados();
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i  = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;

        $ajuste_sueldo = 0;
        $ajuste_p_antiguedad = 0;
        $ajuste_p_hijos = 0;
        $ajuste_p_hogar = 0;
        $ajuste_p_profesion = 0;

        foreach ($data as $key) {


            //ASIGANCIONES

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
                $sindicato = (400000*0.01) / 2; else 
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

            

            $pdf -> SetFont('Arial','',6);

            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'R');
            $pdf -> Cell(30,5, $this->mayus(substr($key['nombres'],0,15)),1,0,'R');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(15,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'R');
            $pdf -> Cell(15,5, $this->mayus(substr($key['grupo'] . " - " . $key['denominacion_grado_nivel'],0,8)),1,0,'C');
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_mensual),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asignaciones),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$deducciones),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_sueldo_base += $sueldo_mensual;
            $t_asignacion += $asignaciones;
            $t_deduccion += $deducciones;
            $t_neto += $neto;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(5);
        $pdf -> Cell(148,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(17,5, $this->moneda($t_asignacion),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_deduccion),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_neto),1,1,'R');

               /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

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

   public function acumuladoJubiladosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

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

        $i = 0;
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;

        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_caja = 0;

        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_acaja = 0;

        $t_aportecaja = 0;
        $t_prestamo_caja = 0;

        $t_ajuste_p_profesion = 0;
        $t_profesion_dc=0;

        $t_x_depositario = 0;

        $ajuste_p_profesion = 0;
        $t_dias_a_pagar = 0;

        $prima_profesion_dc = 0;

        $dias_dejados_c = 0;
        $t_prima_profesion_dc = 0;


        foreach ($data as $key) {

            ++$i;

        if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c']; else $dias_a_pagar = 0;

            if($key['dias_dejados_c'] != 0) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']); else $prima_profesion_dc = 0;

            if($key['ajuste_p_profesion']) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $asignaciones = 0;

         }else{
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0 AND $key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['dias_dejados_c'] != 0) $dias_a_pagar = (($sueldo_base * 2) /30) * $key['dias_dejados_c']; else $dias_a_pagar = 0;

            if($key['dias_dejados_c'] != 0) $prima_profesion_dc = ((($prima_profesion * 2) / 30) *  $key['dias_dejados_c']); else $prima_profesion_dc = 0;

            if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $ajuste_p_profesion + $dias_a_pagar + $prima_profesion_dc; else $asignaciones = 0;

         }

                $t_sueldo_base += $sueldo_base;
                $t_prima_profesion += $prima_profesion;
                $t_ajuste_p_profesion += $ajuste_p_profesion;
                $t_prima_profesion_dc += $prima_profesion_dc;
                $t_dias_a_pagar += $dias_a_pagar;

                $var1 = $t_sueldo_base + $t_prima_profesion + $t_ajuste_p_profesion + $t_prima_profesion_dc + $t_dias_a_pagar;



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
                $sindicato = (400000*0.01) / 2; else 
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


                $t_caja += $deduccion_caja;
                $t_prestamo_caja += $prestamo_caja;
                $t_funeraria += $funeraria;
                $t_sindicato += $sindicato;
                $t_asociacion += $asociacion;
                $t_x_depositario += $x_depositario;


                $var2 = $t_caja + $t_prestamo_caja + $t_funeraria + $t_sindicato + $t_asociacion + $t_x_depositario;





                // APORTES PATRONALES 

                if ($key['sueldo'] !=0) {

                    if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
                    if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

                    if($key['sueldo'] != 0){
                        if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                            $aporte_deduccion_caja = ($key['sueldo'] * 0.10) / 2; 
                        else $aporte_deduccion_caja = 0;
                    }else{
                        if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                            $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
                        else $aporte_deduccion_caja = 0;
                    }

                    if($key['mes'] == 2 AND $key['quincena'] == 1){
                        if($key['cedula'] == 11804964) $aporte_deduccion_caja = 65995.00;
                        if($key['cedula'] == 14396765) $aporte_deduccion_caja = 48564.00;
                    }

                    if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

                 }else{
                    
                    if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
                    if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                        $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
                    else $aporte_deduccion_caja = 0;

                    if($key['mes'] == 2 AND $key['quincena'] == 1){
                        if($key['cedula'] == 11804964) $aporte_deduccion_caja = 65995.00;
                        if($key['cedula'] == 14396765) $aporte_deduccion_caja = 48564.00;
                    }

                    if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

                    if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;
                 }

                    $t_acaja += $aporte_deduccion_caja;

                    $var3 = $t_acaja;

            }










         $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Sueldo Basico Jubilados',0,0);
        $pdf -> Cell(22,4,'4.01.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);


        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1002',0,0);
        $pdf -> Cell(95,4,'Prima de Profesion',0,0);
        $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_ajuste_p_profesion != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1003',0,0);
            $pdf -> Cell(95,4,'Ajuste Prima de Profesion',0,0);
            $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_ajuste_p_profesion),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_prima_profesion_dc != 0){

            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1004',0,0);
            $pdf -> Cell(95,4,'Ajuste Prima de de profesionalizacion por cancelar',0,0);
            $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_profesion_dc),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);

        }


        if($t_dias_a_pagar != 0){

            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1005',0,0);
            $pdf -> Cell(95,4,'Dias dejados de cancelar',0,0);
            $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_dias_a_pagar),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2001',0,0);
        $pdf -> Cell(95,4,'Caja de Ahorros',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_caja),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);


        if($t_prestamo_caja != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2002',0,0);
            $pdf -> Cell(95,4,'Prestamo Caja de Ahorro',0
                ,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_prestamo_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2003',0,0);
        $pdf -> Cell(95,4,'Servicios Funerarios (ACOFJAM)',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        if ($key['sindicato'] != 0) {
            
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2004',0,0);
            $pdf -> Cell(95,4,'SINDICATO',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_sindicato),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);

        }else if ($key['asociacion_funeraria'] != 0) {
            
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2005',0,0);
            $pdf -> Cell(95,4,'Asociacion Funeraria',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_asociacion),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
            
        }else if ($t_x_depositario != 0) {
            
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2005',0,0);
            $pdf -> Cell(95,4,'Depositario Judicial',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,$this->moneda($t_x_depositario),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);     
        }          

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3001',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal de la Caja de Ahorros',0,0);
        $pdf -> Cell(22,4,'4.01.07.07.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_acaja),0,1,'R'); //4019159.00

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($var1),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($var2),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($var3),1,1,'R');


        $neto = $var1 - $var2; 

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(15,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);
        $pdf -> Output();


         /*================================================================================================================================*/
    }

    public function requisionJubiladosFijos($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 7;
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
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

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


     /* Aqui se toman los parametros *TIPO DE NOMINA*, *QUINCENA*, *MES*, *AÑO DEL SERVIDOR**/
    $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }



    public function ResumenNominaJubiladosEmpleados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 7;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenNominaJubiladosEmpleados();
        $pdf -> AddPage();

        $pdf -> SetFont('Arial','B',10);

         $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_caja = 0;

        $neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $prestamo = 0;

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $t_asignaciones = 0;
        $t_deducciones = 0;
        $t_deducciones = 0;

        $dias_dejados_c = 0;
        $profesion_dc = 0;


            foreach ($data as $key){

                //ASIGNACIONES 

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
             }

                $t_asignacion += $asignaciones;

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
                $sindicato = (400000*0.01) / 2; else 
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


             $t_deduccion += $deducciones;

             if($key['status'] != 0) $neto = $asignaciones - $deducciones; else $neto = 0;

            $y = $pdf-> GetY();
            $pdf -> SetY($y+5.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'R');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'R');
            if ($key['sueldo'] != 0) {
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            }
            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'R');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            if($key['sueldo'] != 0){
                $sueldo = $key['sueldo'] / 2;
            }else{
                $sueldo = $key['sueldo_base'] / 2;
            }

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($dias_dejados_c != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Dias dejados de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($dias_dejados_c),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($profesion_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Profesionalizacion dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($profesion_dc),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.'Ajuste Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
                
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }

           
                



            //===============================================================================================

            

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $neto = $asignaciones - $deducciones;

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');

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
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                } 
            }
        }


        $pdf-> ln();

                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones   ',0,0,'L');
                 $pdf -> Cell(30,7,''.$this->moneda($t_asignacion).'    ',0,0,'L'); 
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'R');

                 $t_neto = $t_asignacion - $t_deduccion;

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(30,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_neto),0,0,'R');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);


        $pdf -> Output();
    }





    /*====================================================== JUBILADOS OBREROS ============================================*/


    public function AsignacionesJubiladosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_AsignacionesJubiladosObreros('L','mm','A4');
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
        
        $pdf -> SetFont('Arial','',6);  

        $i  = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_becas = 0;
        $t_total = 0;

        foreach ($data as $key) {

            /*======================================================================================================*/



             if ($key['sueldo'] !=0) {

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;

                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;

                if($key['requisicion'] > 1122){

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                } else {

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                }

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                 if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;


                /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['requisicion'] > 1122){
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                } else {
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                }



                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $becas; else $total = 0;

             }else{
                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;

                    if($key['requisicion'] > 1122){

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                    } else {

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                    }

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                     //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                     if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

                    /*======================================================================================================*/
                    /*=============================================== PRIMAS ===============================================*/

                    if($key['requisicion'] > 1122){
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                    } else {
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                    }


                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $becas; else $total = 0;
             }
            

            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'J');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'J');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            //$pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'R');
            $pdf -> Cell(20,5, $this->mayus($key['grupo'] . " - " . $key['denominacion_grado_nivel']),1,0,'C');         
            $pdf -> Cell(20,5, $this->moneda(@$sueldo_mensual),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$becas),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_mensual += $sueldo_mensual;
            $t_sueldo_base += $sueldo_base;
            $t_prima_profesion += $prima_profesion;
            $t_becas += $becas;
            $t_total += $total;


            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
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
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(5);
        $pdf -> Cell(141,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(20,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_prima_profesion),1,0,'R');
        //$pdf -> Cell(20,5, $this->moneda($t_prima_profesion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_becas),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

               /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

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

    public function DeduccionesJubiladosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_DeduccionesJubiladosObreros('L','mm',array(300,250));
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
        
         $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_sueldo_base = 0;
        $t_deduccion_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_total = 0;
        $t_prestamo_caja = 0;

        foreach ($data as $key) {

        if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) /2 ; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $total = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $total = 0;


         }else{

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $total = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $total = 0;
         }
            $pdf -> SetFont('Arial','',6);

            $pdf -> SetX(30);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,20)),1,0,'R');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_basico),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$deduccion_caja),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$prestamo_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
            $pdf -> Cell(12,5, $this->moneda(@$asociacion),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_base += $sueldo_basico;
            $t_deduccion_caja += $deduccion_caja;
            $t_prestamo_caja+= $prestamo_caja;
            $t_funeraria += $funeraria;
            $t_sindicato += $sindicato;
            $t_asociacion += $asociacion;
            $t_total += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
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
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(30);
        $pdf -> Cell(83,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(30,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_deduccion_caja),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda($t_prestamo_caja),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_funeraria),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_sindicato),1,0,'R');
        $pdf -> Cell(12,5, $this->moneda($t_asociacion),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',6);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);
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

    public function AportePatronalJubiladosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AportePatronalJubiladosObreros();
        $pdf -> AddPage();


        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_deduccion_caja = 0;
        $t_funeraria = 0;
        $t_total = 0;

        foreach ($data as $key) {

            if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.15) / 2; 
            else $aporte_deduccion_caja = 0;


            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo'] * 0.15) / 2; 
            else $aporte_deduccion_caja = 0;

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

         }else{
            
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.15) / 2;  
            else $aporte_deduccion_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;
         }


            
            $pdf -> SetX(30);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'J');
            $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'J');
            //$pdf -> Cell(10,5, $this->moneda(@$key['x_porcentaje_caja']),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_deduccion_caja += $aporte_deduccion_caja;
            $t_total += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(30);
        $pdf -> Cell(103,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(20,5, $this->moneda($t_deduccion_caja),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> ln();
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

    public function NetoCobrarJubiladosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarJubiladosObreros();
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i  = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;
        $t_sueldo_mensual = 0;
        $t_sueldo_base = 0;
        $t_sueldo = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;
        $asignaciones = 0;

        foreach ($data as $key) {

            if ($key['sueldo'] !=0) {

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;

                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['requisicion'] > 1122){

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                } else {

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                }

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                 if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

                /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['requisicion'] > 1122){
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                } else {
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                }


                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;

             }else{
                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;

                    if($key['requisicion'] > 1122){

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                    } else {

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                    }

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                     //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                     if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

                    /*======================================================================================================*/
                    /*=============================================== PRIMAS ===============================================*/

                    if($key['requisicion'] > 1122){
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                    } else {
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                    }

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
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) /2 ; else $sindicato = 0;
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
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $deducciones = 0;
         }

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;
            

            $pdf -> SetFont('Arial','',6);

            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'R');
            $pdf -> Cell(30,5, $this->mayus(substr($key['nombres'],0,15)),1,0,'R');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(15,5, $this->mayus(substr($key['cargo'],0,7)),1,0,'R');
            $pdf -> Cell(15,5, $this->mayus(substr($key['grupo'] . " - " . $key['denominacion_grado_nivel'],0,8)),1,0,'C');
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_mensual),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asignaciones),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$deducciones),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_sueldo_base += $sueldo_mensual;
            $t_asignacion += $asignaciones;
            $t_deduccion += $deducciones;
            $t_neto += $neto;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(5);
        $pdf -> Cell(131,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(17,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_asignacion),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_deduccion),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_neto),1,1,'R');

               /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

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

    public function acumuladoJubiladosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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

        $i = 0;
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;

        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_caja = 0;

        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_acaja = 0;

        $t_aportecaja = 0;
        $t_prestamo_caja = 0;

        $t_x_depositario = 0;
        $t_becas = 0;

        $t_var1 = 0;
        $t_var2 = 0;
        $t_var3 = 0;

        $t_asosiacion = 0;

        $var3 = 0;

        foreach ($data as $key) {

            ++$i;

            /*======================================================================================================*/

            if ($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            /*======================================================================================================*/

            /*====================================== BECAS ESCOLARES ===============================================*/
            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
            if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


            /*======================================================================================================*/
                                                        //ASIGNACIONES //
            /*======================================================================================================*/

             if ($key['sueldo'] !=0) {

                    if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
                    if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                    
                    if($key['requisicion'] > 1122){

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                    } else {

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                    }

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                     //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                     if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

                     //Si existen dias a pagar se sustituye el sueldo base 
                                                        //tomo esta como dias a pagar
                     /*if($key['ajuste_p_hogar'] != 0) $sueldo_base = (($sueldo_base / 30) * $key['ajuste_p_hogar']); else $sueldo_base = $key['sueldo_base'] / 2;*/

                    /*======================================================================================================*/
                    /*=============================================== PRIMAS ===============================================*/

                    if($key['requisicion'] > 1122){
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                    } else {
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                    }


                    if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                    if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                    if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $becas; else $var1 = 0;

                 }else{
                    if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                    if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;

                        if($key['requisicion'] > 1122){

                            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                            if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                        } else {

                            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                            if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                        }

                         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                         //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

                         //Si existen dias a pagar se sustituye el sueldo base 
                                                            //tomo esta como dias a pagar
                         /*if($key['ajuste_p_hogar'] != 0) $sueldo_base = (($sueldo_base / 30) * $key['ajuste_p_hogar']); else $sueldo_base = $key['sueldo_base'] / 2;*/

                        /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key['requisicion'] > 1122){
                            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                        } else {
                            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                        }


                    if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                    if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                    if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $becas; else $var1 = 0;
                 }

            if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $becas; else $var1 = 0;


                $t_sueldo_base += $sueldo_base;
                $t_becas += $becas;

                $t_var1 += $var1;


                    // DEDUCIONES 

             if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['requisicion'] > 1122){
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
            } else {
                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;

            }

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['requisicion'] > 1122){
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            } else {
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;

            }

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $var2 = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $var2 = 0;


         }else{

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['requisicion'] > 1122){
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;
            } else {
                if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 20000/2; else $funeraria = 0;

            }


            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['requisicion'] > 1122){
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            } else {
                if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (250000*0.01) / 2; else $sindicato = 0;

            }

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $var2 = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $var2 = 0;
         }

            $t_funeraria += $funeraria;
            $t_caja += $deduccion_caja;
            $t_prestamo_caja += $prestamo_caja;
            $t_sindicato += $sindicato;
            $t_asociacion += $asociacion;

            $t_var2 += $var2; 




            /*======================================================================================================*/
                                                    //APORTE PATRONAL//
            /*======================================================================================================*/


            if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.15) / 2; 
            else $aporte_deduccion_caja = 0;


            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0; 

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo'] * 0.15) / 2; 
            else $aporte_deduccion_caja = 0;

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

         }else{
            
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.15) / 2;  
            else $aporte_deduccion_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;
         }



            $t_acaja += $aporte_deduccion_caja;


            /*======================================================================================================*/ 
         }

         $pdf -> SetFont('Arial','',8);

        $pdf-> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Jubilacion Quincenal ',0,0);
        $pdf -> Cell(22,4,'4.07.01.01.02.01',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

     
        $pdf-> SetX(5);
        $pdf -> Cell(10,4,'1002',0,0);
        $pdf -> Cell(95,4,'Beca Escolares',0,0);
        $pdf -> Cell(22,4,'4.01.07.18.00.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_becas),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);


        if($t_caja != 0){
            $pdf-> SetX(5);
            $pdf -> Cell(10,4,'2001',0,0);
            $pdf -> Cell(95,4,'Caja de Ahorros',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_prestamo_caja != 0){
            $pdf-> SetX(5);
            $pdf -> Cell(10,4,'2002',0,0);
            $pdf -> Cell(95,4,'Prestamo Caja de Ahorro',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_prestamo_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_funeraria != 0){
            $pdf-> SetX(5);
            $pdf -> Cell(10,4,'2003',0,0);
            $pdf -> Cell(95,4,'Servicios Funerarios (ACOFJAM)',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_sindicato != 0){
            $pdf-> SetX(5);
            $pdf -> Cell(10,4,'2004',0,0);
            $pdf -> Cell(95,4,'SINDICATO',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_sindicato),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

            $pdf-> SetX(5);
            $pdf -> Cell(10,4,'2005',0,0);
            $pdf -> Cell(95,4,'Asociacion Funeraria',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_asociacion),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        

         if($t_x_depositario != 0){
            $pdf-> SetX(5);
            $pdf -> Cell(10,4,'2006',0,0);
            $pdf -> Cell(95,4,'Depositario Judicial',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,$this->moneda($t_x_depositario),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf-> SetX(5);
        $pdf -> Cell(10,4,'3001',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal de la Caja de Ahorros',0,0);
        $pdf -> Cell(22,4,'4.01.07.07.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_acaja),0,1,'R');

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_var1),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($t_var2),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($t_acaja),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_var1 - $t_var2),1,1,'R');       
        
        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(15,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }

    public function requisionJubiladosContratados($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 8;
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
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

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


    $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);

        $pdf -> Output();
    }



    public function ResumenNominaJubiladosEmpleadosContratados($tps = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 8;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_ResumenNominaJubiladosObreros();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_caja = 0;

        $t_neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $t_asignacion = 0;
        $t_adecuccion = 0;
        $t_neto = 0;

        $t_becas = 0;
        $t_prestamo_caja = 0;

        foreach ($data as $key) {

            if ($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

            if ($key['sueldo'] !=0) {

                if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;

                if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
                if($key['requisicion'] > 1122){

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                } else {

                    if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                    if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                    if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                    if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                    if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                }

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                 //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                 if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;


                /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['requisicion'] > 1122){
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                } else {
                    if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                    if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                }


                if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;

             }else{
                if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
                if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;

                    if($key['requisicion'] > 1122){

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (100000 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (100000 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (100000 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (100000 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0; 

                    } else {

                        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;
                    }

                     $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                     //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
                     if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;
                    /*======================================================================================================*/
                    /*=============================================== PRIMAS ===============================================*/

                    if($key['requisicion'] > 1122){
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
                    } else {
                        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
                    }


                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $becas; else $asignaciones = 0;
             }

           $t_asignacion += $asignaciones;

            /*======================================================================================================*/
                                                        //DEDUCCIONES //
            /*======================================================================================================*/     
             // DEDUCIONES 

             if ($key['sueldo'] !=0) {

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = 40000/2; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($key['status'] !=0) $sueldo_basico = $sueldo_mensual / 2; else $sueldo_basico = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                    $prestamo_caja = $key['prestamo_caja_ahorro']; 
                else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) /2 ; else $sindicato = 0;
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
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato +  $asociacion + $prestamo_caja; else $deducciones = 0;
         }

           $t_deduccion += $deducciones;

            /*======================================================================================================*/
                                                        //NETO //
            /*======================================================================================================*/

            $neto = $asignaciones - $deducciones;
            $t_neto += $neto;



             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

           $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'R');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'R');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'R');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'R');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'R');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'R');
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2010'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'R');
            }

           
           $pdf-> ln();


            //===============================================================================================

            

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $y = $pdf -> GetY();
            if($y > 225){
                $pdf -> AddPage();
            }

            if($y > 225){
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(30);
                    $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
            }
        }

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


            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetY(230);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(140);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO


____________________________________



____________________________________



FIRMA Y SELLO

',1,'L',0);


        $pdf -> Output();
    }

    /* ==============================================================================================================*/
    /* ==============================================================================================================*/
    /* =================================== FIN DE REPORTES DE NOMINA ================================================*/
    /* ==============================================================================================================*/
    /* ==============================================================================================================*/

}