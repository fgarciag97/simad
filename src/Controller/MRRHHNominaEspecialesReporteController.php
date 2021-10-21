<?php
namespace App\Controller;

use App\Controller\AppController;


/*----------------------------- Comision de Servicio  -----------------------------*/
class PDF_AsignacionesComisionServicio extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'PERSONAL DE COMISION DE SERVICIO',0,1,'C');
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
        $this->MultiCell(60,10,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(148);
        $this->MultiCell(17,5,'SUELDO MENSUAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(165);
        $this->MultiCell(17,5,'SUELDO QUINCENAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(182);
        $this->MultiCell(20,5,'PRIMA ANTIGUEDAD',1,'C',0);
        $this->SetY(30);
        $this->SetX(202);
        $this->MultiCell(22,5,'PRIMA HIJOS',1,'C',0);
        $this->SetY(30);
        $this->SetX(224);
        $this->MultiCell(30,5,'PRIMA PROFESIONALIZACION',1,'C',0);
        $this->SetY(30);
        $this->SetX(254);
        $this->MultiCell(20,5,'TOTAL',1,'C',0); 
    }
}

class PDF_DeduccionesComisionServicio extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',170,6,25,20,"JPG","");

        $this->SetX(70);
        $this->Cell(80,5,'PERSONAL DE COMISION DE SERVICIO',0,1,'C');
        $this->SetX(70);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',6);
        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,5,'
N

',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(25,5,'
CEDULA

',1,'C',0);
        $this->SetY(40);
        $this->SetX(36);
        $this->MultiCell(30,5,'
APELLIDO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(66);
        $this->MultiCell(30,5,'
NOMBRES

',1,'C',0);
        $this->SetY(40);
        $this->SetX(96);
        $this->MultiCell(25,5,'
CAJA DE
AHORRO
',1,'C',0);
        $this->SetY(40);
        $this->SetX(121);
        $this->MultiCell(25,5,'
PRESTAMO CAJA DE AHORRO
',1,'C',0);
        $this->SetY(40);
        $this->SetX(146);
        $this->MultiCell(20,5,'
SERVICIOS FUNERARIOS
',1,'C',0);
        $this->SetY(40);
        $this->SetX(166);
        $this->MultiCell(20,5,'
DEPOSITARIO
JUDICIAL
',1,'C',0);
        $this->SetY(40);
        $this->SetX(186);
        $this->MultiCell(20,5,' 
TOTAL DEDUCCIONES
',1,'C',0);
    }
}

class PDF_AportePatronalComisionServicio extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',170,6,25,20,"JPG","");

        $this->SetX(70);
        $this->Cell(80,5,'PERSONAL DE COMISION DE SERVICIO',0,1,'C');
        $this->SetX(70);
        $this->Cell(80,5,'REPORTE APORTE PATRONALES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->ln();

        $this->SetY(40);
        $this->SetX(10);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(16);
        $this->MultiCell(25,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(41);
        $this->MultiCell(40,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(81);
        $this->MultiCell(40,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(121);
        $this->MultiCell(25,5,'    
APORTE PATRONAL CAJA DE AHORRO',1,'C',0);
        $this->SetY(40);
        $this->SetX(146);
        $this->MultiCell(25,5,'   
TOTAL APORTE
        ',1,'C',0); 
    }
}

class PDF_NetoCobrarComisionServicio extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'PERSONAL DE COMISION DE SERVICIO',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',8);

        $this->SetY(40);
        $this->SetX(10);
        $this->MultiCell(10,20,'Nro',1,'J',0);
        $this->SetY(40);
        $this->SetX(20);
        $this->MultiCell(20,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(40);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(70);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(100);
        $this->MultiCell(70,20,'CARGO',1,'C',0);
        $this->SetY(40);
        $this->SetX(170);
        $this->MultiCell(30,5,'
SUELDO BASICO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(200);
        $this->MultiCell(30,5,'
TOTAL ASIGNACIONES

',1,'C',0);
        $this->SetY(40);
        $this->SetX(230);
        $this->MultiCell(30,5,'
TOTAL DEDUCCIONES

',1,'C',0);
        $this->SetY(40);
        $this->SetX(260);
        $this->MultiCell(30,5,'
NETO A PAGAR

',1,'C',0);
    }
}

class PDF_ResumenNominaComisionServicio extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,4,20,15,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,20,15,"JPG","");

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

/*----------------------------- Honorarios Profesionales -----------------------------*/
class PDF_AsignacionesHonorariosP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'HONORARIOS PROFESIONALES',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(88);
        $this->MultiCell(60,20,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(148);
        $this->MultiCell(17,5,'
SUELDO MENSUAL

        ',1,'C',0);
        $this->SetY(30);
        $this->SetX(165);
        $this->MultiCell(17,5,'
SUELDO QUINCENAL

        ',1,'C',0);
        $this->SetY(30);
        $this->SetX(182);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD
        ',1,'C',0);
        $this->SetY(30);
        $this->SetX(202);
        $this->MultiCell(22,5,'
PRIMA HIJOS

        ',1,'C',0);
        $this->SetY(30);
        $this->SetX(224);
        $this->MultiCell(30,5,'
PRIMA PROFESIONALIZACION
        ',1,'C',0);
        $this->SetY(30);
        $this->SetX(254);
        $this->MultiCell(20,5,'
TOTAL

        ',1,'C',0); 
    }
}

class PDF_DeduccionesHonorarioP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'HONORARIOS PROFESIONALES',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',6);
        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,5.408,'
N

',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(25,5.408,'
CEDULA

',1,'C',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(30,5.408,'
APELLIDO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(66);
        $this->MultiCell(30,5.408,'
NOMBRES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(96);
        $this->MultiCell(15,4,'

SSO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(111);
        $this->MultiCell(15,4,'

RPE

',1,'C',0);
        $this->SetY(30);
        $this->SetX(126);
        $this->MultiCell(15,4,'

FAOV

',1,'C',0);
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(15,4,'

FPJ

',1,'C',0);
        $this->SetY(30);
        $this->SetX(156);
        $this->MultiCell(25,4,'   

CAJA DE
AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(181);
        $this->MultiCell(25,4,'

PRESTAMO CAJA DE AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(20,4,' 

SERVICIOS FUNERARIOS
',1,'C',0);

        $this->SetY(30);
        $this->SetX(226);
        $this->MultiCell(20,4,'  

SINDICATO

',1,'C',0);

        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(10,4,'  

ASOC.

',1,'C',0);
        $this->SetY(30);
        $this->SetX(256);
        $this->MultiCell(20,4,'  

DEPOSITARIO
JUDICIAL
',1,'C',0);
        $this->SetY(30);
        $this->SetX(276);
        $this->MultiCell(20,4,'  

TOTAL DEDUCCIONES
',1,'C',0);
    }
}

class PDF_AportePatronalHonorarioP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'HONORARIOS PROFESIONALES',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE APORTE PATRONALES',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(25,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(40,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(76);
        $this->MultiCell(40,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(116);
        $this->MultiCell(25,5,'
APORTE PATRONAL SSO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(25,5,'
APORTE PATRONAL RPE
',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(30,5,'
APORTE PATRONAL FAOV

',1,'C',0);
        $this->SetY(30);
        $this->SetX(196);
        $this->MultiCell(25,5,'
APORTE PATRONAL FPJ
        ',1,'C',0);
        $this->SetY(30);
        $this->SetX(221);
        $this->MultiCell(25,5,'    
APORTE PATRONAL CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(25,5,'   
TOTAL APORTE
        ',1,'C',0); 
    }
}

class PDF_NetoCobrarHonorarioP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'HONORARIOS PROFESIONALES',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');

        $this->SetFont('Arial','B',8);

        $this->SetY(30);
        $this->SetX(10);
        $this->MultiCell(10,20,'Nro',1,'J',0);
        $this->SetY(30);
        $this->SetX(20);
        $this->MultiCell(20,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(40);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(70);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(100);
        $this->MultiCell(70,20,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(170);
        $this->MultiCell(30,5,'
SUELDO BASICO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(200);
        $this->MultiCell(30,5,'
TOTAL ASIGNACIONES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(230);
        $this->MultiCell(30,5,'
TOTAL DEDUCCIONES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(260);
        $this->MultiCell(30,5,'
NETO A PAGAR

',1,'C',0);
    }
}

class PDF_ResumenNominaHonorarioP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,4,20,15,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,20,15,"JPG","");

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

/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ESTABILIDAD =======================*/
/*=========================================================================================*/

class PDF_BonoEstabilidadComisionS extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,6,25,20,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'COMISION DE SERVICIO',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(88);
        $this->MultiCell(18,5,'
FECHA DE INGRESO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(106);
        $this->MultiCell(50,20,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO

            ',1,'C',0);
        $this->SetY(30);
        $this->SetX(171);
        $this->MultiCell(17,5,'BONO DE ESTABILIDAD 40%
',1,'C',0);
        $this->SetY(30);
        $this->SetX(188);
        $this->MultiCell(15,5,'TOTAL

            ',1,'C',0);
    }
}

class PDF_BonoEstabilidadHonorarioP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,6,25,20,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'HONORARIOS PROFESIONALES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(88);
        $this->MultiCell(18,5,'
FECHA DE INGRESO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(106);
        $this->MultiCell(50,20,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO

            ',1,'C',0);
        $this->SetY(30);
        $this->SetX(171);
        $this->MultiCell(17,5,'BONO DE ESTABILIDAD 40%
',1,'C',0);
        $this->SetY(30);
        $this->SetX(188);
        $this->MultiCell(15,5,'TOTAL

            ',1,'C',0);
    }
}

class PDF_ResumenBonoComisionS extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,4,20,15,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,20,15,"JPG","");

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

class MRRHHNominaEspecialesReporteController extends AppController
{
    /*----------------------------- COMISION DE SERVICIOS  -----------------------------*/

    public function AsignacionesComisionServicio($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesComisionServicio('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);

   

        /*if($concepto['status'] == 0){
            $pdf -> SetX(110);
            $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
        } else {
            $pdf -> SetX(90);
            $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
            $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        }*/


        $pdf -> SetX(70);
        $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
        $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 

        

        $i = 0;
        $t_sueldo_base = 0;
        $t_sueldo_altos = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;

        $eleccion = 0;

        $t_sueldo_mensual = 0;
        $t_sueldo_eleccion = 0;

        foreach ($data as $key) { 

            /*======================================================================================================*/

            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;


                 /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad

                

                 if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $total = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;

                /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad


                if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $total = 0;
            }


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(60,5, $this->mayus(substr($key['cargo'],0,45).'...'),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_base*2),1,0,'R');
            $pdf -> Cell(17,5,$this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_mensual += $key['sueldo'];
            $t_sueldo_base += $sueldo_base;
            $t_prima_profesion += $prima_profesion;
            $t_prima_hijos += $prima_hijos;
            $t_prima_antiguedad += $prima_antiguedad;

            $t_total += $total;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(160,5,'TOTAL',1,0,'C');

        $pdf -> Cell(17,5, $this->moneda(@$t_sueldo_base - $t_sueldo_eleccion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_prima_antiguedad),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_prima_hijos),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_prima_profesion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

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

    public function DeduccionesComisionServicio($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);

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



        $pdf = new PDF_DeduccionesComisionServicio();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);

       /*if($concepto['status'] == 0){
            $pdf -> SetX(110);
            $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
        } else {
            $pdf -> SetX(90);
            $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
            $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        }*/


        $pdf -> SetX(40);
        $pdf -> MultiCell(140,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
        $pdf -> SetX(80);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 
        $pdf-> ln(); 


        $pdf -> SetFont('Arial','B',6);

        $i = 0;
        $t_deduccion_sso = 0;
        $t_deduccion_rpe = 0;
        $t_faov = 0;
        $t_deduccion_sso = 0;
        $t_deduccion_fpj = 0;
        $t_deduccion_caja_ahorro = 0;
        $t_prestamo_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_x_depositario = 0;
        $t_total = 0;
        $faov = 0;

        foreach ($data as $key) {

            
            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            
                   

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    
                    $prima_hijos =  0;
                

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];
                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                    
                    $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);

                    
                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
                
                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                        $sindicato = (250000*0.01) / 2; 
                    else $sindicato = 0;

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
                        $deduccion_caja_ahorro + 
                        $funeraria + 
                        $prestamo_caja +
                        $x_depositario;
                     else $total = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    $prima_hijos = $key['prima_hijos'];
                    

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];
                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01);
                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
                
                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                        $sindicato = (250000*0.01) / 2; 
                    else $sindicato = 0;

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
                        $deduccion_caja_ahorro + 
                        $funeraria + 
                        $prestamo_caja +
                        $x_depositario;
                     else $total = 0;

            }


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja_ahorro),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$x_depositario),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_deduccion_caja_ahorro += $deduccion_caja_ahorro;
            $t_prestamo_caja += $prestamo_caja;
            $t_funeraria += $funeraria;
            $t_sindicato += $sindicato;
            $t_asociacion += $asociacion;
            $t_x_depositario += $x_depositario;
            $t_total += $total;

        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_deduccion_caja_ahorro),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_prestamo_caja),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_funeraria),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_x_depositario),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

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

    public function AportePatronalComisionServicio($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AportePatronalComisionServicio();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);

        /*if($concepto['status'] == 0){
            $pdf -> SetX(110);
            $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
        } else {
            $pdf -> SetX(90);
            $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
            $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        }*/


        $pdf -> SetX(40);
        $pdf -> MultiCell(140,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
        $pdf -> SetX(80);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();

        
        $pdf -> SetFont('Arial','B',6);   

        $i = 0;
        $t_aporte_patronal_caja_ahorro = 0;
        $t_total = 0;

        foreach ($data as $key) {

            if($key['status'] !=0 AND $key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

            if($key['status'] !=0 AND $key['sueldo'] != 0 ) $aporte_patronal_asso = $key['x_aporte_patronal_asso']; else $aporte_patronal_asso = $key['aporte_patronal_asso'];

            if($key['status'] !=0 ) $aporte_patronal_arpe = (($sueldo_base) * 12/52*4*0.04) ; else $aporte_patronal_arpe = 0;

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;

                 if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad


                if($key['status'] !=0) $afaov = ((($key['sueldo'] / 2) + $prima_antiguedad + $prima_profesion ) * 0.02) ; else $afaov = 0;

                if($key['status'] !=0) 
                    $aporte_patronal_afpj = $key['aporte_patronal_afpj']; 
                else $aporte_patronal_afpj = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo'] * 0.30) / 2; 
                else $aporte_deduccion_caja = 0;

                if($key['status'] !=0) 
                    $total = 
                        $aporte_deduccion_caja; 
                else $total = 0;

  
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

              $t_aporte_patronal_caja_ahorro += $aporte_deduccion_caja;
              $t_total += $total;

              
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(111,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_caja_ahorro),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }

    public function NetoCobrarComisionServicio($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_NetoCobrarComisionServicio('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        /*if($concepto['status'] == 0){
            $pdf -> SetX(110);
            $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
        } else {
            $pdf -> SetX(90);
            $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
            $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        }*/


        $pdf -> SetX(70);
        $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
        $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();
        
        $pdf -> SetFont('Arial','B',6);  

        $i = 0;
        $t_sueldo = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

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

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(10,5, ++$i,1,0,'C');
            $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],0,54)),1,0,'L');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_sueldo += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;

        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(160,5, 'TOTAL',1,0,'C');
        $pdf -> Cell(30,5, $this->moneda(@$t_sueldo),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_asignacion),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_deduccion),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_neto),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(140);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(240);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(20);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(140);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(240);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }

    public function AcumuladoComisionServicio($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);

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

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);

        /*if($concepto['status'] == 0){
            $pdf -> SetX(110);
            $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
        } else {
            $pdf -> SetX(90);
            $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
            $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        }*/


        $pdf -> SetX(70);
        $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
        $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        





        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'51',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A EMPLEADOS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,'         '.'Asignaciones',0,0);
        $pdf -> Cell(30,5,'         '.'Deducciones',0,0);
        $pdf -> Cell(30,5,'         '.'Patronales',0,0);

        $pdf -> ln();


        $i = 0;
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $t_sueldo_altos = 0;

        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_aporte = 0;
        $t_x_depositario = 0;

        $t_sueldo_base_d = 0;
        $t_prima_antiguedad_d = 0;
        $t_prima_profesion_d = 0;

        $var1 = 0;
        $var2 = 0;
        $var3 = 0;

        foreach ($data as $key) {

            ++$i;

            if ($key['sueldo'] !=0) {
                
                if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;


                 //--------------------------------------- Asiganciones ----------------------------------------------------------
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['dias_dejados_c'] != 1) $sueldo_base_d =  ((($sueldo_base * 2) / 30) * $key['dias_dejados_c']); // + sueldo
                 if($key['dias_dejados_c'] != 1) $prima_profesion_d = ((($prima_profesion * 2) / 30) * $key['dias_dejados_c']); // + prima_profesion
                 if($key['dias_dejados_c'] != 1) $prima_antiguedad_d = ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c']); // + prima_antiguedad

                 if($key['status'] !=0) $var1 = $sueldo_base + $sueldo_base_d + $prima_profesion + $prima_profesion_d + $prima_hijos + $prima_antiguedad + $prima_antiguedad_d; else $var1 = 0;

                 //if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $var1 = 0;

                 
                 //------------------------------------------- Deducciones ------------------------------------------------------

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

                 if($key['status'] !=0) $var2 = $deduccion_caja + $funeraria  + $x_depositario + $prestamo_caja; else $var2 = 0;

               
                //---------------------------------------------- Aporte Patronales -------------------------------------------

               
                if($key['status'] !=0) $aporte_patronal_asso = $key['x_aporte_patronal_asso']; else $aporte_patronal_asso = 0;
                if($key['status'] !=0) $aporte_patronal_arpe = $key['x_aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
                if($key['status'] !=0) $afaov = ((($key['sueldo_base'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad'] ) * 0.02); else $afaov = 0;

                if($key['status'] !=0) 
                    $aporte_patronal_afpj = $key['aporte_patronal_afpj']; 
                else $aporte_patronal_afpj = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2; 
                else $aporte_deduccion_caja = 0;

                if($key['status'] !=0) $var3 = $aporte_deduccion_caja; else $var3 = 0;

    
            }else{

                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;

                //---------------------------------------------- Asignaciones  -------------------------------------------

                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['dias_dejados_c'] != 1) $sueldo_base_d =  ((($sueldo_base * 2) / 30) * $key['dias_dejados_c']); // + sueldo
                 if($key['dias_dejados_c'] != 1) $prima_profesion_d = ((($prima_profesion * 2) / 30) * $key['dias_dejados_c']); // + prima_profesion
                 if($key['dias_dejados_c'] != 1) $prima_antiguedad_d = ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c']); // + prima_antiguedad

                 if($key['status'] !=0) $var1 = $sueldo_base + $sueldo_base_d + $prima_profesion + $prima_profesion_d + $prima_hijos + $prima_antiguedad + $prima_antiguedad_d; else $var1 = 0;



                //---------------------------------------------- Deducciones  -------------------------------------------;

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

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


                if($key['status'] !=0) $var2 = $deduccion_caja + $funeraria  + $x_depositario + $prestamo_caja; else $var2 = 0;

                //---------------------------------------------- Aportes Patronales  -----------------------------------------

                if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso']; else $aporte_patronal_asso = 0;
                if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
                if($key['status'] !=0) $afaov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] ) * 0.02); else $afaov = 0;

                   if($key['status'] !=0) 
                        $aporte_patronal_afpj = $key['aporte_patronal_afpj']; 
                    else $aporte_patronal_afpj = 0;
                
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2; 
                else $aporte_deduccion_caja = 0;

                if($key['status'] !=0) $var3 =  $aporte_deduccion_caja ; else $var3 = 0;

            }

            @$t_sueldo_base += $sueldo_base;
            @$t_sueldo_base_d += $sueldo_base_d;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_antiguedad_d  += $prima_antiguedad_d;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_profesion_d  += $prima_profesion_d;

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

            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_afpj += $aporte_patronal_afpj;
            $t_acaja += $aporte_deduccion_caja;

            $t_asignacion += $var1;
            $t_deduccion += $var2;
            $t_aporte += $var3;

            //=======================================================================================================
         }


        $pdf -> SetFont('Arial','',5);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',1,0);
        $pdf -> Cell(110,4,'Sueldo Basico Quincenal',1,0);
        $pdf -> Cell(30,4,'4.01.01.01.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_sueldo_base),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);


        if($t_sueldo_base_d != 0){
            $pdf -> SetX(10);
            $pdf -> Cell(25,4,'1002',1,0);
            $pdf -> Cell(110,4,'Sueldo Basico Quincenal Dejado de Cancelar',1,0);
            $pdf -> Cell(30,4,'4.01.01.01.00',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4, $this->moneda($t_sueldo_base_d),1,0);
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4,'',1,1);
        }



        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1002',1,0);
        $pdf -> Cell(110,4,'Prima de Profesion',1,0);
        $pdf -> Cell(30,4,'4.01.03.08.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_profesion),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        if($t_prima_profesion_d != 0){
            $pdf -> SetX(10);
            $pdf -> Cell(25,4,'1003',1,0);
            $pdf -> Cell(110,4,'Prima de Profesion Dejada de Cancelar',1,0);
            $pdf -> Cell(30,4,'4.01.01.01.00',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4, $this->moneda($t_prima_profesion_d),1,0);
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4,'',1,1);
        }


        if($t_prima_hijos != 0){
            $pdf -> Cell(25,4,'1003',1,0);
            $pdf -> Cell(110,4,'Prima Por Hijo',1,0);
            $pdf -> Cell(30,4,'4.01.03.04.00',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4, $this->moneda($t_prima_hijos),1,0);
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4,'',1,1);
        }

        $pdf -> Cell(25,4,'1004',1,0);
        $pdf -> Cell(110,4,'Prima Por Antiguedad ',1,0);
        $pdf -> Cell(30,4,'4.01.03.09.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_antiguedad),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        if($t_prima_antiguedad_d != 0){
            $pdf -> SetX(10);
            $pdf -> Cell(25,4,'1003',1,0);
            $pdf -> Cell(110,4,'Prima Por Antiguedad Dejada de Cancelar',1,0);
            $pdf -> Cell(30,4,'4.01.01.01.00',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4, $this->moneda($t_prima_antiguedad_d),1,0);
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4,'',1,1);
        }
           
        if($t_caja != 0){
            $pdf -> Cell(25,4,'2005',1,0);
            $pdf -> Cell(110,4,'Caja de Ahorro',1,0);
            $pdf -> Cell(30,4,'',1,0);
        

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4, $this->moneda($t_caja),1,0);
            $pdf -> Cell(30,4,'',1,1);
        }

        if($t_prestamo_caja != 0){
            $pdf -> Cell(25,4,'2006',1,0);
            $pdf -> Cell(110,4,'Prestamo Caja de Ahorro',1
                ,0);
            $pdf -> Cell(30,4,'',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4, $this->moneda($t_prestamo_caja),1,0);
            $pdf -> Cell(30,4,'',1,1);
        }

        $pdf -> Cell(25,4,'2007',1,0);
        $pdf -> Cell(110,4,'Servicios Funerarios (ACOFJAM)',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_funeraria),1,0);
        $pdf -> Cell(30,4,'',1,1);

        if($t_x_depositario != 0){

            $pdf -> Cell(25,4,'2010',1,0);
            $pdf -> Cell(110,4,'Depositario Judicial',1,0);
            $pdf -> Cell(30,4,'',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4,$this->moneda($t_x_depositario),1,0);
            $pdf -> Cell(30,4,'',1,1);
        }

        if($t_acaja != 0){
            $pdf -> Cell(25,4,'3005',1,0);
            $pdf -> Cell(110,4,'Aporte Patronal de la Caja de Ahorros',1,0);
            $pdf -> Cell(30,4,'4.01.07.07.00',1,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4,'',1,0);
            $pdf -> Cell(30,4, $this->moneda($t_acaja),1,1);
        }

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asignacion),1,0);
        $pdf -> Cell(30,4,$this->moneda($t_deduccion),1,0);
        $pdf -> Cell(30,4,$this->moneda($t_aporte),1,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Neto',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asignacion - $t_deduccion),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

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


    public function RequisionComisionServicio($mes = null, $quincena = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . date('d/m/Y') . '
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
    $pdf -> MultiCell(200,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
    //$pdf -> MultiCell(200,5,$data['concepto'],0,'L',0);


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

    public function ResumenNominaComisionServicio($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 16;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoComS->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenNominaComisionServicio();
        $pdf -> AddPage();

        /*if($concepto['status'] == 0){
            $pdf -> SetX(110);
            $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
        } else {
            $pdf -> SetX(90);
            $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
            $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
            $pdf -> SetX(135);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
        }*/


        $pdf -> SetX(40);
        $pdf -> MultiCell(140,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
        $pdf -> SetX(90);
            $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $t_sueldo_altos = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $sindicato = 0;

        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;


        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $t_general_asignaciones = 0;
         $t_general_deducciones = 0;
        $t_genreal_neto = 0;

        $sueldo_base_d = 0;
        $prima_profesion_d = 0;
        $prima_antiguedad_d = 0;

         $pdf -> SetFont('Arial','B',6);


        foreach ($data as $key) {

            if ($key['sueldo'] !=0) {


                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                /*================================================================================================*/
                //---------------------------------------- Asignaciones -------------------------------------------
                /*================================================================================================*/

                if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['dias_dejados_c'] != 1) $sueldo_base_d =  ((($sueldo_base * 2) / 30) * $key['dias_dejados_c']); // + sueldo
                 if($key['dias_dejados_c'] != 1) $prima_profesion_d = ((($prima_profesion * 2) / 30) * $key['dias_dejados_c']); // + prima_profesion
                 if($key['dias_dejados_c'] != 1) $prima_antiguedad_d = ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c']); // + prima_antiguedad

                 if($key['status'] !=0) $asignaciones = $sueldo_base + $sueldo_base_d + $prima_profesion + $prima_profesion_d + $prima_hijos + $prima_antiguedad + $prima_antiguedad_d; else $asignacion = 0;

                 /*================================================================================================*/
                //---------------------------------------- Deducciones -------------------------------------------
                /*================================================================================================*/

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
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;
                
                 if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deducciones = $funeraria + $prestamo_caja + $x_depositario; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;
                /*================================================================================================*/
    
            }else{

                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                /*================================================================================================*/
                //---------------------------------------- Asignaciones -------------------------------------------
                /*================================================================================================*/

                if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
                 

                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['dias_dejados_c'] != 1) $sueldo_base_d =  ((($sueldo_base * 2) / 30) * $key['dias_dejados_c']); // + sueldo
                 if($key['dias_dejados_c'] != 1) $prima_profesion_d = ((($prima_profesion * 2) / 30) * $key['dias_dejados_c']); // + prima_profesion
                 if($key['dias_dejados_c'] != 1) $prima_antiguedad_d = ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c']); // + prima_antiguedad

                 if($key['status'] !=0) $asignaciones = $sueldo_base + $sueldo_base_d + $prima_profesion + $prima_profesion_d + $prima_hijos + $prima_antiguedad + $prima_antiguedad_d; else $asignacion = 0;


                /*================================================================================================*/
                //---------------------------------------- Deducciones -------------------------------------------
                /*================================================================================================*/

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
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;
                
                 if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deducciones = $funeraria + $prestamo_caja + $x_depositario; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;
                /*================================================================================================*/
            }

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;

            /*=============================================================================================================*/

            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_fpj += $deduccion_fpj;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;

            /*=============================================================================================================*/


            @$t_asignacion += $asignacion;
            @$t_deduccion += $deduccion;
            @$t_neto += $neto;

           

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.5);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base * 2),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,33),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');
            
            if ($sueldo_base_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Sueldo Quincenal dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_base_d),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_profesion_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Profesionalizacion dejada de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion_d),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1007'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_antiguedad_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1008'.' Prima por Antiguedad Dejada de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad_d),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1009'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'L');
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'L');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'L');
            }if ($x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'L');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'L');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'L');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'C');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','',8);
                 /*if($concepto['status'] == 0){
                    $pdf -> SetX(110);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                    $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }*/


                $pdf -> SetX(40);
                $pdf -> MultiCell(140,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C'); 
            }

            $t_general_asignaciones += $asignaciones;
            $t_general_deducciones += $deducciones;
        }
            
        $pdf->ln();
        $pdf->ln();
            $pdf -> SetX(90);
    $pdf -> Cell(10,4,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $t_general_neto = $t_general_asignaciones - $t_general_deducciones;

            $pdf -> SetX(80);
            $pdf -> Cell(40,4,'Total General ',0,0,'C');
            $pdf -> Cell(40,4, $this->moneda($t_general_asignaciones),0,0,'C');
            $pdf -> Cell(40,4, $this->moneda($t_general_deducciones),0,1,'C');


            $pdf -> SetX(80);
            $pdf -> Cell(40,4,'Neto a Pagar ',0,0,'C');
            $pdf -> Cell(40,4, $this->moneda($t_general_asignaciones - $t_general_deducciones),0,1,'C');

            $pdf -> SetX(90);
    $pdf -> Cell(10,2,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
            $pdf -> SetFont('Arial','',6);

            $pdf->ln();
            $pdf->ln();
            $pdf -> SetX(10);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(130);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetX(10);
            $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(130);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }


    //===================================== HONORARIOS PROFESIONALES ========================================

    public function AsignacionesHonorariosP($mes = null, $quincena = null, $requisicion = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AsignacionesHonorariosP('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        

        $i = 0;
        $t_sueldo_base = 0;
        $t_sueldo_altos = 0;
        $t_prima_profesion = 0;
        $t_prima_hijos = 0;
        $t_prima_antiguedad = 0;
        $t_total = 0;

        $eleccion = 0;

        $t_sueldo_mensual = 0;
        $t_sueldo_eleccion = 0;

        foreach ($data as $key) { 

            /*======================================================================================================*/


            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
                

                 if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $total = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;

                if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $total = 0;
            }


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(60,5, $this->mayus(substr($key['cargo'],0,45).'...'),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_base*2),1,0,'R');
            $pdf -> Cell(17,5,$this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_mensual += $key['sueldo'];
            $t_sueldo_base += $sueldo_base;
            $t_prima_profesion += $prima_profesion;
            $t_prima_hijos += $prima_hijos;
            $t_prima_antiguedad += $prima_antiguedad;

            $t_total += $total;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(160,5,'TOTAL',1,0,'C');

        $pdf -> Cell(17,5, $this->moneda(@$t_sueldo_base - $t_sueldo_eleccion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_prima_antiguedad),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_prima_hijos),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_prima_profesion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }

    public function DeduccionesHonorarioP($mes = null, $quincena = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);


        $pdf = new PDF_DeduccionesHonorarioP('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','B',6);

        $i = 0;
        $t_deduccion_sso = 0;
        $t_deduccion_rpe = 0;
        $t_faov = 0;
        $t_deduccion_sso = 0;
        $t_deduccion_fpj = 0;
        $t_deduccion_caja_ahorro = 0;
        $t_prestamo_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_x_depositario = 0;
        $t_total = 0;
        $faov = 0;

        foreach ($data as $key) {

            
            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            
                   

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    
                    $prima_hijos =  0;
                

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];
                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                    $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);
                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
                
                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                        $sindicato = (250000*0.01) / 2; 
                    else $sindicato = 0;

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
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $sindicato + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $total = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    $prima_hijos = $key['prima_hijos'];
                    

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];
                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01);
                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
                
                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                        $sindicato = (250000*0.01) / 2; 
                    else $sindicato = 0;

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
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $sindicato + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $total = 0;

            }


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_rpe),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$faov),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_fpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja_ahorro),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
            $pdf -> Cell(10,5, $this->moneda(@$asociacion_funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$x_depositario),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_deduccion_sso += $deduccion_sso;
            $t_deduccion_rpe += $deduccion_rpe;
            $t_faov += $faov;
            $t_deduccion_fpj += $deduccion_fpj;
            $t_deduccion_caja_ahorro += $deduccion_caja_ahorro;
            $t_prestamo_caja += $prestamo_caja;
            $t_funeraria += $funeraria;
            $t_sindicato += $sindicato;
            $t_asociacion += $asociacion;
            $t_x_depositario += $x_depositario;
            $t_total += $total;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(15,5, $this->moneda(@$t_deduccion_sso),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_deduccion_rpe),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_faov),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_deduccion_fpj),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_deduccion_caja_ahorro),1,0,'R');
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
        $pdf -> SetY($y+6);

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }

    public function AportePatronalHonorarioP($mes = null, $quincena = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_AportePatronalHonorarioP('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','B',6);   

        $i = 0;
        $t_aporte_patronal_asso = 0;
        $t_aporte_patronal_arpe = 0;
        $t_afaov = 0;
        $t_aporte_patronal_afpj = 0;
        $t_aporte_patronal_caja_ahorro = 0;
        $t_total = 0;

        foreach ($data as $key) {

            if($key['status'] !=0 AND $key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

            if($key['status'] !=0 AND $key['sueldo'] != 0 ) $aporte_patronal_asso = $key['x_aporte_patronal_asso']; else $aporte_patronal_asso = $key['aporte_patronal_asso'];

            if($key['status'] !=0 ) $aporte_patronal_arpe = (($sueldo_base) * 12/52*4*0.04) ; else $aporte_patronal_arpe = 0;

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;

                 if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;


                if($key['status'] !=0) $afaov = ((($key['sueldo'] / 2) + $prima_antiguedad + $prima_profesion ) * 0.02) ; else $afaov = 0;

                if($key['status'] !=0) 
                    $aporte_patronal_afpj = $key['aporte_patronal_afpj']; 
                else $aporte_patronal_afpj = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo'] * 0.30) / 2; 
                else $aporte_deduccion_caja = 0;

                if($key['status'] !=0) 
                    $total = 
                        $aporte_patronal_asso + 
                        $aporte_patronal_arpe + 
                        $afaov + 
                        $aporte_patronal_afpj + 
                        $aporte_deduccion_caja; 
                else $total = 0;

  
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_asso),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_arpe),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$afaov),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_afpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

              $t_aporte_patronal_asso += $aporte_patronal_asso;
              $t_aporte_patronal_arpe += $aporte_patronal_arpe;
              $t_afaov += $afaov;
              $t_aporte_patronal_afpj += $aporte_patronal_afpj;
              $t_aporte_patronal_caja_ahorro += $aporte_deduccion_caja;
              $t_total += $total;
            
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(111,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_asso),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_arpe),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_afpj),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_caja_ahorro),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_total),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }

    public function NetoCobrarHonorarioP($mes = null, $quincena = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_NetoCobrarHonorarioP('L','mm','A4');

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','B',6);  

        $i = 0;
        $t_sueldo = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

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

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(10,5, ++$i,1,0,'C');
            $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],0,54)),1,0,'L');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_sueldo += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(160,5, 'TOTAL',1,0,'C');
        $pdf -> Cell(30,5, $this->moneda(@$t_sueldo),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_asignacion),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_deduccion),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_neto),1,1,'R');

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(30);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(160);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(260);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C'); 

        $pdf -> Output();
    }

    public function AcumuladoHonorarioP($mes = null, $quincena = null, $requisicion = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(110);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(80,5,'Nomina: PERSONAL DE COMISION DE SERVICIO (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'Correspondiente al lapso Desde:' . '  ' .'0'.$quincena['fecha_desde'].'/'.date('m').'/'.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'.ANO_FISCAL,0,1,'C');

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'51',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A EMPLEADOS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,'         '.'Asignaciones',0,0);
        $pdf -> Cell(30,5,'         '.'Deducciones',0,0);
        $pdf -> Cell(30,5,'         '.'Patronales',0,0);

        $pdf -> ln();


        $i = 0;
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $t_sueldo_altos = 0;

        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;

        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_aporte = 0;
        $t_x_depositario = 0;

        $var1 = 0;
        $var2 = 0;
        $var3 = 0;

        foreach ($data as $key) {

            ++$i;

            if ($key['sueldo'] !=0) {
                
                if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;


                 //--------------------------------------- Asiganciones ----------------------------------------------------------
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $var1 = 0;

                 
                 //------------------------------------------- Deducciones ------------------------------------------------------

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

                 if($key['status'] !=0) $var2 = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato +$asociacion + $x_depositario + $prestamo_caja; else $var2 = 0;

               
                //---------------------------------------------- Aporte Patronales -------------------------------------------

               
                if($key['status'] !=0) $aporte_patronal_asso = $key['x_aporte_patronal_asso']; else $aporte_patronal_asso = 0;
                if($key['status'] !=0) $aporte_patronal_arpe = $key['x_aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
                if($key['status'] !=0) $afaov = ((($key['sueldo_base'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad'] ) * 0.02); else $afaov = 0;

                if($key['status'] !=0) 
                    $aporte_patronal_afpj = $key['aporte_patronal_afpj']; 
                else $aporte_patronal_afpj = 0;

                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2; 
                else $aporte_deduccion_caja = 0;

                if($key['status'] !=0) $var3 = $aporte_patronal_asso + $aporte_patronal_arpe + $afaov + $aporte_patronal_afpj + $aporte_deduccion_caja; else $var3 = 0;

    
            }else{

                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;

                //---------------------------------------------- Asignaciones  -------------------------------------------

                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $var1 = 0;


                //---------------------------------------------- Deducciones  -------------------------------------------;

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

                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                    $depositario_porcentaje = ($key['depositario_judicial'] / 2) ;  
                 else $depositario_porcentaje = 0;

                 if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                    $depositario = ($sueldo_base * $key['depositario_judicial_monto'] ) / 2 ; 
                 else $depositario = 0;

                if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


                if($key['status'] !=0) $var2 = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $x_depositario; else $var2 = 0;

                //---------------------------------------------- Aportes Patronales  -----------------------------------------

                if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso']; else $aporte_patronal_asso = 0;
                if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
                if($key['status'] !=0) $afaov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] ) * 0.02); else $afaov = 0;

                   if($key['status'] !=0) 
                        $aporte_patronal_afpj = $key['aporte_patronal_afpj']; 
                    else $aporte_patronal_afpj = 0;
                
                if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                    $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2; 
                else $aporte_deduccion_caja = 0;

                if($key['status'] !=0) $var3 = $aporte_patronal_asso + $aporte_patronal_arpe + $afaov + $aporte_patronal_afpj + $aporte_deduccion_caja + $prestamo_caja; else $var3 = 0;

            }

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;

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

            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_afpj += $aporte_patronal_afpj;
            $t_acaja += $aporte_deduccion_caja;

            $t_asignacion += $var1;
            $t_deduccion += $var2;
            $t_aporte += $var3;

            //=======================================================================================================
         }


        $pdf -> SetFont('Arial','',5);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',1,0);
        $pdf -> Cell(110,4,'Sueldo Basico Quincenal',1,0);
        $pdf -> Cell(30,4,'4.01.01.01.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_sueldo_base),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1002',1,0);
        $pdf -> Cell(110,4,'Prima de Profesion',1,0);
        $pdf -> Cell(30,4,'4.01.03.08.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_profesion),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'1003',1,0);
        $pdf -> Cell(110,4,'Prima Por Hijo',1,0);
        $pdf -> Cell(30,4,'4.01.03.04.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_hijos),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'1004',1,0);
        $pdf -> Cell(110,4,'Prima Por Antiguedad ',1,0);
        $pdf -> Cell(30,4,'4.01.03.09.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_antiguedad),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2001',1,0);
        $pdf -> Cell(110,4,'Seguro Social Obligatorio',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_sso),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2002',1,0);
        $pdf -> Cell(110,4,'Regimen Prestacional de Empleo',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_rpe),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2003',1,0);
        $pdf -> Cell(110,4,'Fondo de Ahorro Obligatorio para la Vivienda',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_faov),1,0);
        $pdf -> Cell(30,4,'',1,1);

       

        $pdf -> Cell(25,4,'2004',1,0);
        $pdf -> Cell(110,4,'Fondo de Pension y Jubilacion',1,0);
        $pdf -> Cell(30,4,'',1,0);

        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_fpj),1,0);
        $pdf -> Cell(30,4,'',1,1);
           

        $pdf -> Cell(25,4,'2005',1,0);
        $pdf -> Cell(110,4,'Caja de Ahorro',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_caja),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2006',1,0);
        $pdf -> Cell(110,4,'Prestamo Caja de Ahorro',1
            ,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_prestamo_caja),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2007',1,0);
        $pdf -> Cell(110,4,'Servicios Funerarios (ACOFJAM)',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_funeraria),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2008',1,0);
        $pdf -> Cell(110,4,'SINDICATO',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_sindicato),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2009',1,0);
        $pdf -> Cell(110,4,'Asociacion Funeraria',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_asociacion),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'2010',1,0);
        $pdf -> Cell(110,4,'Depositario Judicial',1,0);
        $pdf -> Cell(30,4,'',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,$this->moneda($t_x_depositario),1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> Cell(25,4,'3001',1,0);
        $pdf -> Cell(110,4,'Aporte Patronal del SSO',1,0);
        $pdf -> Cell(30,4,'4.01.04.01.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_asso),1,1);

        $pdf -> Cell(25,4,'3002',1,0);
        $pdf -> Cell(110,4,'Aporte Patronal Regimen Prestacional de Empleo',1,0);
        $pdf -> Cell(30,4,'4.01.06.04.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_arpe),1,1);

        $pdf -> Cell(25,4,'3003',1,0);
        $pdf -> Cell(110,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',1,0);
        $pdf -> Cell(30,4,'4.01.06.05.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_afaov),1,1);

        $pdf -> Cell(25,4,'3004',1,0);
        $pdf -> Cell(110,4,'Aporte Patronal del F.P.J',1,0);
        $pdf -> Cell(30,4,'4.01.06.03.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_afpj),1,1);

        $pdf -> Cell(25,4,'3005',1,0);
        $pdf -> Cell(110,4,'Aporte Patronal de la Caja de Ahorros',1,0);
        $pdf -> Cell(30,4,'4.01.07.07.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4, $this->moneda($t_acaja),1,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asignacion),1,0);
        $pdf -> Cell(30,4,$this->moneda($t_deduccion),1,0);
        $pdf -> Cell(30,4,$this->moneda($t_aporte),1,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Neto',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asignacion - $t_deduccion),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

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


    public function RequisionHonorarioP($mes = null, $quincena = null, $requisicion = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . date('d/m/Y') . '
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
    $pdf -> MultiCell(200,5,'PAGO DE LA NOMINA DE HONORARIOS PROFESIONALES CORRESPONDIENTE A LA ' . $quincena['denominacion'].' '.'DEL MES DE '.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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

    public function ResumenNominaHonorarioP($mes = null, $quincena = null){

        $tps = 17;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoHonorarioP->find('all', ['conditions' => $condicion]);

         $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_ResumenNominaHonorarioP();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;
        $t_sueldo_altos = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $sindicato = 0;

        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;


        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

         $pdf -> SetFont('Arial','B',6);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: HONORARIOS PROFESIONALES (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].''.date('/m/y').' '.'Hasta:'.' '.$quincena['fecha_hasta'].''.date('/m/y'),0,1,'C');

        foreach ($data as $key) {

            if ($key['sueldo'] !=0) {


                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                /*================================================================================================*/
                //---------------------------------------- Asignaciones -------------------------------------------
                /*================================================================================================*/

                if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;

                 if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;

                 /*================================================================================================*/
                //---------------------------------------- Deducciones -------------------------------------------
                /*================================================================================================*/

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
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;
                
                 if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deducciones = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $prestamo_caja + $x_depositario; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;
                /*================================================================================================*/
    
            }else{

                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;

                /*================================================================================================*/
                //---------------------------------------- Asignaciones -------------------------------------------
                /*================================================================================================*/

                if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) / 2; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = (62500 * $key['cantidad_beca_universitaria']) / 2; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = (62500 * $key['cantidad_beca_secundaria']) / 2; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = (62500 * $key['cantidad_beca_primaria']) / 2; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = (62500 * $key['cantidad_beca_inicial']) / 2; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;


                /*================================================================================================*/
                //---------------------------------------- Deducciones -------------------------------------------
                /*================================================================================================*/

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
                    $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                else $depositario = 0;
                
                 if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                if($key['status'] !=0) $deducciones = $deduccion_sso + $deduccion_rpe + $deduccion_fpj + $deduccion_caja + $faov + $funeraria + $sindicato + $asociacion + $prestamo_caja + $x_depositario; else $deduccion = 0;

                /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;
                /*================================================================================================*/
            }

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;

            /*=============================================================================================================*/

            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_fpj += $deduccion_fpj;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;

            /*=============================================================================================================*/


            @$t_asignacion += $asignacion;
            @$t_deduccion += $deduccion;
            @$t_neto += $neto;

           

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base * 2),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,33),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'L');
            }if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'L');
            }if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov),0,1,'L');
            }if ($deduccion_fpj != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Fondo de Jubilacion y Pension',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_fpj),0,1,'L');
            }if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'L');
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'L');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'L');
            }if ($x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'L');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'L');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'L');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Toatles',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'C');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

             $y = $pdf -> GetY();
            if($y > 235){
                $pdf -> AddPage();
            }
        }

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(20);
            $pdf -> Cell(40,5,'____________________________ ',0,1,'C');
            $pdf -> SetX(10);
            $pdf -> Cell(40,5,'ELABORADO POR: '.$this->request->getSession()->read('Auth.User.responsable'),0,1,'C');

        $pdf -> Output();
    }





    /*================================= COMISION DE SERVICIOS ==================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadComisionS($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoEstabilidadComisionS();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono; else $total = 0;
            }


            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,38)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$bono),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $bono;
            @$t_total  += $total;
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(166,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(17,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_total),1,1,'R');
        

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);

        $y = $pdf-> GetY();
        $pdf -> SetY($y+1);

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



    public function AcumuladoBonoEstabilidadComisionS($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(110);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(80,5,'Nomina: COMISION DE SERVICIO (Pago de Bono de Estabilidad Correspondiente a la '.$quincena['denominacion'].' del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'51',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A EMPLEADOS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,'         '.'Asignaciones',0,0);
        $pdf -> Cell(30,5,'         '.'Deducciones',0,0);
        $pdf -> Cell(30,5,'         '.'Patronales',0,0);
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(30,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_bono),1,0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(115);
        $pdf -> Cell(60,4,'Neto',0,0);
        $pdf -> Cell(30,4,$this->moneda($t_total),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,4,'Cantidad de EMPLEADOS',0,0);

        $pdf -> Cell(30,4,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

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

    public function RequisionBonoComisionS($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . $this->fecha($data['fecha_rrhh']) . '
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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A LA NOMINA DE COMISION DE SERVICIO CORRESPONDIENTE A LA ' . $quincena['denominacion'].' '.'DEL MES DE '.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEComisionS($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaComisionServicio();
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
        $pdf -> ln();
        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: COMISION DE SERVICIO (Pago de Bono de Estabilidad Economica Correspondiente a la'.$quincena['denominacion'].'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $bono = 0;

        foreach ($data as $key) {

            if ($key['sueldo'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = $key['sueldo_base']/2;
                        
            if($key['status'] != 0) $sueldo_base = $sueldo_base; else $sueldo_base = 0;
            if($key['status'] != 0) $bono = $sueldo_base * 0.40; else $bono = 0;
            if($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;

                        $t_asignacion += $bono;
                        $t_deduccion += 0;
         



             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($bono),0,0,'L');
            $pdf -> Cell(30,5,' ',0,1,'L');

            

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');
    

             $y = $pdf -> GetY();
            if($y > 235){
                $pdf -> AddPage();
            }
        }
        
                        
                $t_neto = $t_asignacion - $t_deduccion;

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




    /*================================= HONORARIOS PROFESIONALES ==================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadHonorarioP($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoEstabilidadHonorarioP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,38)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($key['sueldo_base']),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$bono),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $bono;
            @$t_total  += $total;
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(166,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(17,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_total),1,1,'R');
        

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);

        $y = $pdf-> GetY();
        $pdf -> SetY($y+1);
        $pdf -> SetX(20);
        $pdf -> Cell(40,5,'____________________________ ',0,0,'C');
        $pdf -> SetX(130);
        $pdf -> Cell(40,5,'__________________________________________________________ ',0,1,'C');
        $pdf -> SetX(20);
        $pdf -> Cell(40,5,'ELABORADO POR: '.$this->request->getSession()->read('Auth.User.responsable'),0,0,'C');
        $pdf -> SetX(130);
        $pdf -> Cell(40,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO ',0,1,'C');

        $pdf -> Output();
    }



    public function AcumuladoBonoEstabilidadHonorarioP($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(110);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(80,5,'Nomina: HONORARIOS PROFESIONALES (Pago de Bono de Estabilidad Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'SECTOR',0,0);
        $pdf -> Cell(10,4,'14',0,0);
        $pdf -> Cell(120,4,'DIRECCION DE DESPACHO',0,0);

        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'PROGRAMA',0,0);
        $pdf -> Cell(10,4,'01',0,0);
        $pdf -> Cell(120,4,'DESPACHO DEL ALCALDE',0,0);
        
        $pdf -> ln();

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'ACTIVIDAD',0,0);
        $pdf -> Cell(10,4,'51',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A EMPLEADOS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,'         '.'Asignaciones',0,0);
        $pdf -> Cell(30,5,'         '.'Deducciones',0,0);
        $pdf -> Cell(30,5,'         '.'Patronales',0,0);
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',1,0);
        $pdf -> Cell(110,4,'Bono de Estabilidad Economica',1,0);
        $pdf -> Cell(30,4,'4.01.04.96.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_bono),1,0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(115);
        $pdf -> Cell(60,4,'Neto',0,0);
        $pdf -> Cell(30,4,$this->moneda($t_total),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,4,'Cantidad de EMPLEADOS',0,0);

        $pdf -> Cell(30,4,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> Output();
    }

    public function RequisionBonoHonorarioP($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . date('d/m/Y') . '
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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA AL PERSONAL DE HONORARIOS PROFESIONALES CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEHonorarioP($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaComisionServicio();
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

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: HONORARIOS PROFESIONALES (Pago de Bono de Estabilidad Economica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {

            if ($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];
                        
            if($key['status'] != 0) $sueldo_base = $sueldo_base; else $sueldo_base = 0;
            if($key['status'] != 0) $bono = $sueldo_base * 0.40; else $bono = 0;
            if($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;
         



             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($bono),0,0,'L');
            $pdf -> Cell(30,5,' ',0,1,'L');

            

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');
    

             $y = $pdf -> GetY();
            if($y > 235){
                $pdf -> AddPage();
            }
        }

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(20);
            $pdf -> Cell(40,5,'____________________________ ',0,1,'C');
            $pdf -> SetX(10);
            $pdf -> Cell(40,5,'ELABORADO POR: '.$this->request->getSession()->read('Auth.User.responsable'),0,1,'C');


        $pdf -> Output();
    }

}
