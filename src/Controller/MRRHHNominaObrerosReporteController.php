<?php
namespace App\Controller;

use App\Controller\AppController;

/*============================ ENCABEZADOS ===============================*/

/*------------------------------ FIJOS ------------------------------------*/
class PDF_AsignacionesObrerosFijos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
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
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(40);
        $this->SetX(106);
        $this->MultiCell(30,10,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(136);
        $this->MultiCell(17,10,'GRUPO',1,'C',0);

        $this->SetY(40);
        $this->SetX(153);
        $this->MultiCell(17,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(40);
        $this->SetX(170);
        $this->MultiCell(16,5,'PRIMA PROFESION',1,'C',0);
        $this->SetY(40);
        $this->SetX(186);
        $this->MultiCell(15,5,'PRIMA HIJOS',1,'C',0);
        $this->SetY(40);
        $this->SetX(201);
        $this->MultiCell(20,5,'PRIMA ANTIGUEDAD',1,'C',0);
        $this->SetY(40);
        $this->SetX(221);
        $this->MultiCell(17,5,'PRIMA HOGAR',1,'C',0);
        $this->SetY(40);
        $this->SetX(238);
        $this->MultiCell(15,5,'BECAS QUINCENAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(253);
        $this->MultiCell(20,5,'TOTAL ASIGNACION',1,'C',0); 
    }
}

class PDF_DeduccionesObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',6);
        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,5,'
N

',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(25,5,'
CEDULA

',1,'C',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(30,5,'
APELLIDO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(66);
        $this->MultiCell(30,5,'
NOMBRES

',1,'C',0);
        $this->SetY(30);
        $this->SetX(96);
        $this->MultiCell(15,5,'
SSO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(111);
        $this->MultiCell(15,5,'
RPE

',1,'C',0);
        $this->SetY(30);
        $this->SetX(126);
        $this->MultiCell(15,5,'
FAOV

',1,'C',0);
        
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(25,5,'
CAJA DE
AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(25,5,'
PRESTAMO CAJA DE AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(191);
        $this->MultiCell(20,5,'
SERVICIOS FUNERARIOS
',1,'C',0);

        $this->SetY(30);
        $this->SetX(211);
        $this->MultiCell(20,5,'
SINDICATO

',1,'C',0);

        $this->SetY(30);
        $this->SetX(231);
        $this->MultiCell(10,5,'
ASOC.

',1,'C',0);
        $this->SetY(30);
        $this->SetX(241);
        $this->MultiCell(20,5,'
DEPOSITARIO JUDICIAL
',1,'C',0);
        $this->SetY(30);
        $this->SetX(261);
        $this->MultiCell(20,5,'
TOTAL DEDUCCIONES
',1,'C',0);
    }
}

class PDF_AportePatronalObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

	    $this->SetX(110);
	    $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
	    $this->SetX(110);
	    $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');
	    
	    /*$this->SetX(110);
	    $this->Cell(80,5,'Correspondiente al lapso desde: ___/___/______ Hasta ___/___/______',0,1,'C');*/

	    $this->SetFont('Arial','B',8);

	    $this->SetY(40);
	    $this->SetX(5);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(40);
	    $this->SetX(11);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(28);
	    $this->MultiCell(40,10,'APELLIDO',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(68);
	    $this->MultiCell(40,10,'NOMBRES',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(108);
	    $this->MultiCell(30,10,'CARGO',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(138);
	    $this->MultiCell(20,5,'SALARIO QUINCENAL',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(158);
	    $this->MultiCell(20,10,'SSO',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(178);
	    $this->MultiCell(20,10,'RPE',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(198);
	    $this->MultiCell(20,10,'FAOV',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(218);
	    $this->MultiCell(25,5,'CAJA DE AHORRO',1,'C',0);
	    $this->SetY(40);
	    $this->SetX(243);
	    $this->MultiCell(20,10,'TOTAL',1,'C',0);
    }
}


class PDF_NetoCobrarObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        
        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');
        /*$this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',8);

        $this->SetY(30);
        $this->SetX(10);
        $this->MultiCell(10,15,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(20);
        $this->MultiCell(20,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(40);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(70);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(100);
        $this->MultiCell(70,10,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(170);
        $this->MultiCell(30,10,'SALARIO BASICO',1,'C',0);
        $this->SetY(30);
        $this->SetX(200);
        $this->MultiCell(30,5,'TOTAL ASIGNACIONES',1,'C',0);
        $this->SetY(30);
        $this->SetX(230);
        $this->MultiCell(30,5,'TOTAL DEDUCCIONES',1,'C',0);
        $this->SetY(30);
        $this->SetX(260);
        $this->MultiCell(30,10,'NETO A PAGAR',1,'C',0);
    }
}


/*------------------------------ CONTRATADOS ------------------------------------*/
class PDF_AsignacionesObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',8);

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
        $this->MultiCell(17,20,'GRUPO',1,'C',0);

        $this->SetY(30);
        $this->SetX(173);
        $this->MultiCell(17,5,'
SUELDO BASICO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(190);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(30);
        $this->SetX(221);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(30);
        $this->SetX(241);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(30);
        $this->SetX(258);
        $this->MultiCell(15,5,'
 BECAS QUINCENAL
            ',1,'C',0);
        $this->SetY(30);
        $this->SetX(273);
        $this->MultiCell(20,5,'
TOTAL ASIGNACION

',1,'C',0); 
    }
}

class PDF_DeduccionesObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',6);
        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(25,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(66);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(96);
        $this->MultiCell(15,10,'SSO',1,'C',0);
        $this->SetY(30);
        $this->SetX(111);
        $this->MultiCell(15,10,'RPE',1,'C',0);
        $this->SetY(30);
        $this->SetX(126);
        $this->MultiCell(15,10,'FAOV',1,'C',0);
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(15,10,'FPJ',1,'C',0);
        $this->SetY(30);
        $this->SetX(156);
        $this->MultiCell(25,10,'CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(181);
        $this->MultiCell(25,5,'PRESTAMO CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(20,5,'SERVICIOS FUNERARIOS',1,'C',0);

        $this->SetY(30);
        $this->SetX(226);
        $this->MultiCell(20,10,'SINDICATO',1,'C',0);

        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(10,10,'ASOC.',1,'C',0);
        $this->SetY(30);
        $this->SetX(256);
        $this->MultiCell(20,5,'DEPOSITARIO JUDICIAL',1,'C',0);
        $this->SetY(30);
        $this->SetX(276);
        $this->MultiCell(20,5,'TOTAL DEDUCCIONES',1,'C',0);
    }
}

class PDF_AportePatronalObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

	    $this->SetX(110);
	    $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
	    $this->SetX(110);
	    $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->ln();
	    $this->SetY(30);
	    $this->SetX(30);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(30);
	    $this->SetX(36);
	    $this->MultiCell(25,10,'CEDULA',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(61);
	    $this->MultiCell(40,10,'APELLIDO',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(101);
	    $this->MultiCell(40,10,'NOMBRES',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(141);
	    $this->MultiCell(25,5,'APORTE PATRONAL SSO',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(166);
	    $this->MultiCell(25,5,'APORTE PATRONAL RPE',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(191);
	    $this->MultiCell(25,5,'APORTE PATRONAL FAOV
',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(216);
	    $this->MultiCell(25,5,'TOTAL DEDUCCIONES',1,'C',0); 
    }
}

class PDF_NetoCobrarObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");
        
        $this->SetX(110);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',8);

        $this->SetY(30);
        $this->SetX(10);
        $this->MultiCell(10,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(20);
        $this->MultiCell(20,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(40);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(70);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(100);
        $this->MultiCell(70,10,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(170);
        $this->MultiCell(30,10,'SALARIO BASICO',1,'C',0);
        $this->SetY(30);
        $this->SetX(200);
        $this->MultiCell(30,5,'TOTAL ASIGNACIONES',1,'C',0);
        $this->SetY(30);
        $this->SetX(230);
        $this->MultiCell(30,5,'TOTAL DEDUCCIONES',1,'C',0);
        $this->SetY(30);
        $this->SetX(260);
        $this->MultiCell(30,10,'NETO A PAGAR',1,'C',0);
    }
}


	/*------------------------------ OBREROS NO PERMANENTES ------------------------------------*/

class PDF_AsignacionesObrerosNoPermanentes extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

	    $this-> SetX(70);
	    $this-> Cell(80,5,'OBREROS NO PERMANENTES',0,1,'C');
	    $this-> SetX(70);
	    $this-> Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

	    $this-> SetFont('Arial','B',8);

	    $this-> ln();
	    $this-> SetY(40);
	    $this-> SetX(5);
	    $this-> MultiCell(6,5,'N',1,'J',0);
	    $this-> SetY(40);
	    $this-> SetX(11);
	    $this-> MultiCell(25,5,'CEDULA',1,'C',0);
	    $this-> SetY(40);
	    $this-> SetX(36);
	    $this-> MultiCell(40,5,'APELLIDO',1,'C',0);
	    $this-> SetY(40);
	    $this-> SetX(76);
	    $this-> MultiCell(40,5,'NOMBRES',1,'C',0);
	    $this-> SetY(40);
	    $this-> SetX(116);
	    $this-> MultiCell(25,5,'CARGO',1,'C',0);
	    $this-> SetY(40);
	    $this-> SetX(141);
	    $this-> MultiCell(25,5,'MONTO',1,'C',0);
	    $this-> SetY(40);
	    $this-> SetX(166);
	    $this-> MultiCell(25,5,'FIRMA',1,'C',0);
    }
}

class PDF_ResumenNominaObrerosFijos extends \FPDF {
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

class PDF_ResumenNominaObrerosContratados extends \FPDF {
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

class PDF_ResumenNominaObrerosNoPermanentes extends \FPDF {
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




/*============================ REPORTES ===============================*/
class MRRHHNominaObrerosReporteController extends AppController
{
	/*------------------------------ FIJOS ------------------------------------*/
	public function AsignacionesObrerosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_AsignacionesObrerosFijos('L','mm','A4');
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',6);  

	    $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $i  = 0;

        $t_ajuste_antiguedad = 0;
            $t_ajuste_sueldo = 0;
            $t_dias_dejados_c = 0;

            $t_ajuste_p_profesion  = 0;
            $t_ajuste_sueldo  = 0;
        

	    foreach ($data as $key) {

        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        //En caso que existan "DIAS A CANCELAR"
        if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 15) * $key['ajuste_caja']) /2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        if($key['requisicion'] > 1122){
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        } else {
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        }
                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/


        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

        if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
        if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 

        if($key['ajuste_caja'] !=0 AND $becas != 0) $becas = ((($becas) / 15) * $key['ajuste_caja']); 

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


         // Ajuste Monto sumados al total asignaciones =======================================================
         if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
         if($key['status'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['status'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($key['status'] != 0) $ajuste_p_hogar = $key['ajuste_p_hogar']; else $ajuste_p_hogar = 0;
         if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

         //Ajuste de sueldo se suma a sueldo base 
         if($key['status'] != 0) $sueldo_base =  $sueldo_base + $ajuste_sueldo; else $ajuste_sueldo = 0;
         if($key['status'] != 0) $prima_profesion =  $prima_profesion + $ajuste_p_profesion; else $prima_profesion = 0;
         if($key['status'] != 0) $prima_antiguedad =  $prima_antiguedad + $ajuste_antiguedad; else $prima_antiguedad = 0;
         if($key['status'] != 0) $prima_hogar =  $prima_hogar + $ajuste_p_hogar; else $prima_hogar = 0;
         if($key['status'] != 0) $prima_hijos =  $prima_hijos + $ajuste_p_hijos; else $prima_hijos = 0;


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($key['status'] !=0) $total = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar +
            $becas;
        else $total = 0;

        /*======================================================================================================*/


	   		$pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(5);
		    $pdf -> Cell(6,5, ++$i ,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus(@$key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['cargo'],0,40)),1,0,'L');
            $pdf -> Cell(17,5, $this->mayus($key['grupo'] . " - " . $key['denominacion_grado_nivel']),1,0,'C');
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$becas),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            /*======================================================================================================*/
            /*====================================== TOTAL EN COLUMNAS ============================================*/
            @$t_sueldo_base += $sueldo_base;
            @$t_becas += $becas;
            @$t_prima_hijos  += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_hogar  += $prima_hogar;


            @$t_ajuste_p_profesion  += $prueba;
            @$t_ajuste_sueldo  += $ajuste_sueldo;
            
            @$t_total  += $total;


            $y = $pdf -> GetY();
            if($y > 170){
                $pdf -> AddPage();
            }

            if($y > 170){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                    if($concepto['status'] == 0){
                        $pdf -> SetX(110);
                        $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                    } else {
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
	    }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(1);
        $pdf -> Cell(152,5,'TOTAL',1,0,'C');

        /*======================================================================================================*/
        /*====================================== FILA DE TOTALES ============================================*/

            $pdf -> Cell(17,5, $this->moneda($t_sueldo_base),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda($t_prima_profesion),1,0,'R');
	        $pdf -> Cell(15,5, $this->moneda($t_prima_hijos ),1,0,'R');
	        $pdf -> Cell(20,5, $this->moneda($t_prima_antiguedad),1,0,'R');
	        $pdf -> Cell(17,5, $this->moneda($t_prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda($t_becas),1,0,'R');
	        $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');
        $pdf -> ln();

	   /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+4);
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

	public function DeduccionesObrerosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_DeduccionesObrerosFijos('L','mm',array(300,250));
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
             if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
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

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);

            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);

            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

            if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
            if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 

            if($key['status'] !=0) 
                $sueldo_base = $key['sueldo_base']; 
            else $sueldo_base = 0;

           if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 30) * $key['ajuste_caja']) /2;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }


            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;
            

            if($key['ajuste_caja'] != 0){
                    if($key['status'] !=0) 
                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); 
                    else $faov = 0;
            }else{
            if($key['status'] != 0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); else $faov = 0;

            }


            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


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
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;


            if($key['caja_ahorro'] != 0 AND $key['ajuste_caja'] != 0){
                $deduccion_caja = (($key['deduccion_caja_ahorro']) /15 ) * $key['ajuste_caja']; 
            }

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0 ) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


             //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_sso = ($deduccion_sso + ((($deduccion_sso * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_sso
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_rpe = ($deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_rpe
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $faov = ($faov + ((($faov * 2) / 30) * $key['dias_dejados_c'])); // + faov
             //if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_caja


            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_sso = ((($deduccion_sso) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_rpe = ((($deduccion_rpe) / 15) * $key['ajuste_caja']);

            //if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $faov = ($faov * $key['ajuste_caja']) / 15;

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_caja = ((($deduccion_caja) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $funeraria = ((($funeraria) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $sindicato = ((($sindicato) / 15) * $key['ajuste_caja']);

            if($key['status'] !=0) $total = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $total = 0;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
 
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $key['apellidos'],1,0,'L');
            $pdf -> Cell(30,5, $key['nombres'],1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_rpe),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$faov),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
            $pdf -> Cell(10,5, $this->moneda(@$asociacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$x_depositario),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');


            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;
            @$t_total += $total;

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
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

	    	$pdf -> Cell(15,5, $this->moneda(@$t_sso),1,0,'R');
	        $pdf -> Cell(15,5, $this->moneda(@$t_rpe),1,0,'R');
	        $pdf -> Cell(15,5, $this->moneda(@$t_faov),1,0,'R');
	        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
	        $pdf -> Cell(25,5, $this->moneda(@$t_prestamo_caja),1,0,'R');
	        $pdf -> Cell(20,5, $this->moneda(@$t_funeraria),1,0,'R');
	        $pdf -> Cell(20,5, $this->moneda(@$t_sindicato),1,0,'R');
	        $pdf -> Cell(10,5, $this->moneda(@$t_asociacion),1,0,'R');
	        $pdf -> Cell(20,5, $this->moneda(@$t_x_depositario),1,0,'R');
	        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');
	    

        /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');


        $pdf -> Output();
	}

	public function AportePatronalObrerosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AportePatronalObrerosFijos('L','mm',array(300,250));
	    $pdf -> AddPage();
	    

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
             if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();


	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_caja = 0;
        $t_total = 0;

        foreach ($data as $key) {



            if($key['sueldo'] !=0) 
                $sueldo_base = $key['sueldo'] / 2; 
            else $sueldo_base = $key['sueldo_base'] / 2;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

            if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
            if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 


            if($key['status'] !=0) 
                $aporte_patronal_asso = $sueldo_base * 0.09; 
            else $aporte_patronal_asso = 0;

            if($key['status'] !=0) 
                $aporte_patronal_arpe = $sueldo_base * 0.017; 
            else $aporte_patronal_arpe = 0;

           /*if($key['status'] !=0) 
                $afaov = $key['aporte_patronal_afaov']; 
            else $afaov = 0;*/

            if($key['ajuste_caja'] != 0){
                    if($key['status'] !=0) 
                        $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02); 
                    else $afaov = 0;
            }else{
            if($key['status'] != 0) $afaov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.02); else $afaov = 0;

            }

            /*if($key['status'] != 0){$afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar )) * 0.02; 
            }else{ $afaov = 0;}*/

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = $sueldo_base * 0.15 ; 
            else $aporte_deduccion_caja = 0;

            //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $aporte_patronal_asso = ($aporte_patronal_asso + ((($aporte_patronal_asso * 2) / 30) * $key['dias_dejados_c'])); // + aporte_patronal_asso
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $aporte_patronal_arpe = ($aporte_patronal_arpe + ((($aporte_patronal_arpe * 2) / 30) * $key['dias_dejados_c'])); // + aporte_patronal_arpe
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $afaov = ($afaov + ((($afaov * 2) / 30) * $key['dias_dejados_c'])); // + afaov
             //if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_caja

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $aporte_patronal_asso = ((($aporte_patronal_asso) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $aporte_patronal_arpe = ((($aporte_patronal_arpe) / 15) * $key['ajuste_caja']);

            //if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $faov = ($faov * $key['ajuste_caja']) / 15;

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $afaov = ((($afaov) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $aporte_deduccion_caja = ((($aporte_deduccion_caja) / 15) * $key['ajuste_caja']);

            if($key['status'] !=0) 
            	$total = 
            		$aporte_patronal_asso + 
            		$aporte_patronal_arpe + 
            		$afaov  + 
            		$aporte_deduccion_caja; 
            else $total = 0;

	        $pdf -> SetX(5);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(40,5, $this->mayus(substr($key['apellidos'],0,45)),1,0,'L');
		    $pdf -> Cell(40,5, $this->mayus(substr($key['nombres'],0,45)),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus(substr($key['cargo'],0,15)),1,0,'L');
		    $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$aporte_patronal_asso),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$aporte_patronal_arpe),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$afaov),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$total),1,0,'R');
		    $pdf -> ln();

		    $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_caja += $aporte_deduccion_caja;
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
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    } 

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
	    }

	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> SetX(5);
	    $pdf -> Cell(153,5,'TOTAL:',1,0,'C');
	    $pdf -> Cell(20,5, $this->moneda(@$t_asso),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_arpe),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');


	    /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
        $pdf -> ln();
        $pdf -> ln();
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

	public function NetoCobrarObrerosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;

       	$this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarObrerosFijos('L','mm',array(300,250));
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
             if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        //En caso que existan "DIAS A CANCELAR"
        if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 15) * $key['ajuste_caja']) /2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        if($key['requisicion'] > 1122){
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        } else {
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        }
                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/


        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

        if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
        if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 

        if($key['ajuste_caja'] !=0 AND $becas != 0) $becas = ((($becas) / 15) * $key['ajuste_caja']); 

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


         // Ajuste Monto sumados al total asignaciones =======================================================
         if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
         if($key['status'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['status'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($key['status'] != 0) $ajuste_p_hogar = $key['ajuste_p_hogar']; else $ajuste_p_hogar = 0;
         if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

         //Ajuste de sueldo se suma a sueldo base 
         if($key['status'] != 0) $sueldo_base =  $sueldo_base + $ajuste_sueldo; else $ajuste_sueldo = 0;
         if($key['status'] != 0) $prima_profesion =  $prima_profesion + $ajuste_p_profesion; else $prima_profesion = 0;
         if($key['status'] != 0) $prima_antiguedad =  $prima_antiguedad + $ajuste_antiguedad; else $prima_antiguedad = 0;
         if($key['status'] != 0) $prima_hogar =  $prima_hogar + $ajuste_p_hogar; else $prima_hogar = 0;
         if($key['status'] != 0) $prima_hijos =  $prima_hijos + $ajuste_p_hijos; else $prima_hijos = 0;

    
       
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_becas  += $becas;

            /*@$t_ajuste_antiguedad  += $ajuste_antiguedad;
            @$t_ajuste_p_profesion  += $ajuste_p_profesion;
            @$t_ajuste_p_hijos  += $ajuste_p_hijos;
            @$t_ajuste_p_hogar  += $ajuste_p_hogar;
            @$t_ajuste_sueldo  += $ajuste_sueldo;*/
            

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($key['status'] !=0) $asignacion = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas; 
        else $asignacion = 0;

        /*======================================================================================================*/

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

           if($key['status'] !=0) 
                $sueldo_base = $key['sueldo_base']; 
            else $sueldo_base = 0;

            if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 30) * $key['ajuste_caja']) /2;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;
    
            if($key['ajuste_caja'] != 0){
                    if($key['status'] !=0) 
                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); 
                    else $faov = 0;
            }else{
            if($key['status'] != 0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); else $faov = 0;

            }

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


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
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;


            if($key['caja_ahorro'] != 0 AND $key['ajuste_caja'] != 0){
                $deduccion_caja = (($key['deduccion_caja_ahorro']) /15 ) * $key['ajuste_caja']; 
            }

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0 ) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


             //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_sso = ($deduccion_sso + ((($deduccion_sso * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_sso
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_rpe = ($deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_rpe
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $faov = ($faov + ((($faov * 2) / 30) * $key['dias_dejados_c'])); // + faov
             //if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_caja

            
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_sso = ((($deduccion_sso) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_rpe = ((($deduccion_rpe) / 15) * $key['ajuste_caja']);

            //if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $faov = ($faov * $key['ajuste_caja']) / 15;

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_caja = ((($deduccion_caja) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $funeraria = ((($funeraria) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $sindicato = ((($sindicato) / 15) * $key['ajuste_caja']);

       
            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;



            if($key['status'] !=0) $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deduccion = 0;

            /*======================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(10,5, ++$i,1,0,'C');
            $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'L');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_incremento += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;

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
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }

                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);

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

	public function AcumuladoObrerosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(130,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
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
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;
        $t_x_depositario = 0;

        $t_ajuste_sueldo  = 0;
        $t_becas  = 0;

        $t_ajuste_antiguedad = 0;
        $t_ajuste_p_profesion= 0;
        $t_ajuste_p_hijos= 0;
        $t_ajuste_p_hogar= 0;
        $t_ajuste_sueldo= 0;



        foreach ($data as $key) {

        ++$i;

        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        //En caso que existan "DIAS A CANCELAR"
        if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 15) * $key['ajuste_caja']) /2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        if($key['requisicion'] > 1122){
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        } else {
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        }
                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/


        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

        if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
        if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 

        if($key['ajuste_caja'] !=0 AND $becas != 0) $becas = ((($becas) / 15) * $key['ajuste_caja']); 

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


         // Ajuste Monto sumados al total asignaciones =======================================================
         if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
         if($key['status'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['status'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($key['status'] != 0) $ajuste_p_hogar = $key['ajuste_p_hogar']; else $ajuste_p_hogar = 0;
         if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

         //Ajuste de sueldo se suma a sueldo base 
         if($key['status'] != 0) $sueldo_base =  $sueldo_base + $ajuste_sueldo; else $ajuste_sueldo = 0;
         if($key['status'] != 0) $prima_profesion =  $prima_profesion + $ajuste_p_profesion; else $prima_profesion = 0;
         if($key['status'] != 0) $prima_antiguedad =  $prima_antiguedad + $ajuste_antiguedad; else $prima_antiguedad = 0;
         if($key['status'] != 0) $prima_hogar =  $prima_hogar + $ajuste_p_hogar; else $prima_hogar = 0;
         if($key['status'] != 0) $prima_hijos =  $prima_hijos + $ajuste_p_hijos; else $prima_hijos = 0;

    
       
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_becas  += $becas;

            /*@$t_ajuste_antiguedad  += $ajuste_antiguedad;
            @$t_ajuste_p_profesion  += $ajuste_p_profesion;
            @$t_ajuste_p_hijos  += $ajuste_p_hijos;
            @$t_ajuste_p_hogar  += $ajuste_p_hogar;
            @$t_ajuste_sueldo  += $ajuste_sueldo;*/



            $var1 = $t_sueldo_base + @$t_prima_hijos + @$t_prima_antiguedad + @$t_prima_hogar + @$t_becas + @$t_prima_profesion;


            //===============================================================================================
           
            if($key['status'] !=0) 
                $sueldo_base = $key['sueldo_base']; 
            else $sueldo_base = 0;

            if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 30) * $key['ajuste_caja']) /2;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;
    
            if($key['ajuste_caja'] != 0){
                    if($key['status'] !=0) 
                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); 
                    else $faov = 0;
            }else{
            if($key['status'] != 0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); else $faov = 0;

            }

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


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
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;


            if($key['caja_ahorro'] != 0 AND $key['ajuste_caja'] != 0){
                $deduccion_caja = (($key['deduccion_caja_ahorro']) /15 ) * $key['ajuste_caja']; 
            }

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0 ) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


             //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_sso = ($deduccion_sso + ((($deduccion_sso * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_sso
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_rpe = ($deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_rpe
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $faov = ($faov + ((($faov * 2) / 30) * $key['dias_dejados_c'])); // + faov
             //if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_caja

            
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_sso = ((($deduccion_sso) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_rpe = ((($deduccion_rpe) / 15) * $key['ajuste_caja']);

            //if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $faov = ($faov * $key['ajuste_caja']) / 15;

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_caja = ((($deduccion_caja) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $funeraria = ((($funeraria) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $sindicato = ((($sindicato) / 15) * $key['ajuste_caja']);

       
            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;

            $var2 =  @$t_sso +  @$t_rpe + @$t_faov  + @$t_caja+ @$t_prestamo_caja + @$t_funeraria + $t_sindicato + $t_asociacion + $t_x_depositario;

            //=======================================================================================================

           if($key['sueldo'] !=0) 
                $sueldo_base = $key['sueldo'] / 2; 
            else $sueldo_base = $key['sueldo_base'] / 2;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

            if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
            if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 


            if($key['status'] !=0) 
                $aporte_patronal_asso = $sueldo_base * 0.09; 
            else $aporte_patronal_asso = 0;

            if($key['status'] !=0) 
                $aporte_patronal_arpe = $sueldo_base * 0.017; 
            else $aporte_patronal_arpe = 0;

           /*if($key['status'] !=0) 
                $afaov = $key['aporte_patronal_afaov']; 
            else $afaov = 0;*/

            if($key['ajuste_caja'] != 0){
                    if($key['status'] !=0) 
                        $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02); 
                    else $afaov = 0;
            }else{
            if($key['status'] != 0) $afaov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.02); else $afaov = 0;

            }

            /*if($key['status'] != 0){$afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar )) * 0.02; 
            }else{ $afaov = 0;}*/

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = $sueldo_base * 0.15 ; 
            else $aporte_deduccion_caja = 0;

            //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $aporte_patronal_asso = ($aporte_patronal_asso + ((($aporte_patronal_asso * 2) / 30) * $key['dias_dejados_c'])); // + aporte_patronal_asso
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $aporte_patronal_arpe = ($aporte_patronal_arpe + ((($aporte_patronal_arpe * 2) / 30) * $key['dias_dejados_c'])); // + aporte_patronal_arpe
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $afaov = ($afaov + ((($afaov * 2) / 30) * $key['dias_dejados_c'])); // + afaov
             //if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_caja

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $aporte_patronal_asso = ((($aporte_patronal_asso) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $aporte_patronal_arpe = ((($aporte_patronal_arpe) / 15) * $key['ajuste_caja']);

            //if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $faov = ($faov * $key['ajuste_caja']) / 15;

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $afaov = ((($afaov) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $aporte_deduccion_caja = ((($aporte_deduccion_caja) / 15) * $key['ajuste_caja']);



            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_acaja += $aporte_deduccion_caja;

            $var3 =  $t_asso  + $t_arpe + $t_afaov + $t_acaja;
         }


        $pdf -> SetFont('Arial','',9);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Salario Quincenal',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_ajuste_sueldo != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1001-1',0,0);
            $pdf -> Cell(95,4,'Diferencia de Sueldo DC',0,0);
            $pdf -> Cell(22,4,'4.01.01.01.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_ajuste_sueldo),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1002',0,0);
        $pdf -> Cell(95,4,'Prima de Profesion',0,0);
        $pdf -> Cell(22,4,'4.01.03.22.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1003',0,0);
        $pdf -> Cell(95,4,'Prima Por Hijo',0,0);
        $pdf -> Cell(22,4,'4.01.03.19.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_hijos),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1004',0,0);
        $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(22,4,'4.01.03.21.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1005',0,0);
        $pdf -> Cell(95,4,'Prima por Hogar',0,0);
        $pdf -> Cell(22,4,'4.01.03.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_hogar),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1006',0,0);
        $pdf -> Cell(95,4,'Beca Escolares',0,0);
        $pdf -> Cell(22,4,'4.01.07.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_becas),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

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

        if($t_fpj != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2004',0,0);
            $pdf -> Cell(95,4,'Fondo de Pension y Jubilacion',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_fpj),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_caja != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2005',0,0);
            $pdf -> Cell(95,4,'Caja de Ahorros',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_prestamo_caja != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2006',0,0);
            $pdf -> Cell(95,4,'Prestamo Caja de Ahorro',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_prestamo_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_funeraria != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2007',0,0);
            $pdf -> Cell(95,4,'Servicios Funerarios (ACOFJAM)',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_sindicato != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2008',0,0);
            $pdf -> Cell(95,4,'SINDICATO',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_sindicato),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_asociacion != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2009',0,0);
            $pdf -> Cell(95,4,'Asociacion Funeraria',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_asociacion),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

         if($t_x_depositario != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2010',0,0);
            $pdf -> Cell(95,4,'Depositario Judicial',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,$this->moneda($t_x_depositario),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3001',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del SSO',0,0);
        $pdf -> Cell(22,4,'4.01.06.10.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_asso),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3002',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'4.01.06.12.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_arpe),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3003',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'4.01.06.13.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_afaov),0,1,'R');

        if($t_afpj != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'3004',0,0);
            $pdf -> Cell(95,4,'Aporte Patronal del F.P.J',0,0);
            $pdf -> Cell(22,4,'4.01.06.03.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_afpj),0,1,'R');
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3005',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal de la Caja de Ahorros',0,0);
        $pdf -> Cell(22,4,'4.01.07.23.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_acaja),0,1,'R');

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',9);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

	        $pdf -> Cell(22,4,$this->moneda($var1),1,0,'R');
	        $pdf -> Cell(22,4,$this->moneda($var2),1,0,'R');
	        $pdf -> Cell(22,4,$this->moneda($var3),1,1,'R');
	    

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        if ($key['requisicion'] == 14) {
        	$pdf -> Cell(22,4,$this->moneda($var01 - $var02),1,1,'R');
        }else{
         	$pdf -> Cell(22,4,$this->moneda($var1 - $var2),1,1,'R');       	
        }

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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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

    public function RequisionObrerosFijos($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 4;
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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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

    public function ResumenNominaObrerosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 4;
        $ms = $mes;
        $qs = $quincena;


    	$this->loadModel('ViewMrrhhHistoricoObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_ResumenNominaObrerosFijos();
  
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

         $pdf -> SetFont('Arial','B',8);

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
        

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

        	if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        //En caso que existan "DIAS A CANCELAR"
        if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 15) * $key['ajuste_caja']) /2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        if($key['requisicion'] > 1122){
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        } else {
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            if($key['hijos'] != 0 AND $key['ajuste_caja'] != 0) $prima_hijos = ((($prima_hijos) / 15) * $key['ajuste_caja']);
            if($key['prima_hogar'] != 0 AND $key['ajuste_caja'] !=0) $prima_hogar = ((($prima_hogar) / 15) * $key['ajuste_caja']);
        }
                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/


        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['ajuste_caja'] !=0) $prima_profesion = ((($prima_profesion) / 15) * $key['ajuste_caja']);

        if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0; 
        if($key['ajuste_caja'] != 0) $prima_antiguedad = ((($prima_antiguedad) / 15) * $key['ajuste_caja']); 

        if($key['ajuste_caja'] !=0 AND $becas != 0) $becas = ((($becas) / 15) * $key['ajuste_caja']); 

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


         // Ajuste Monto sumados al total asignaciones =======================================================
         if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
         if($key['status'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['status'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($key['status'] != 0) $ajuste_p_hogar = $key['ajuste_p_hogar']; else $ajuste_p_hogar = 0;
         if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

         //Ajuste de sueldo se suma a sueldo base 
         if($key['status'] != 0) $sueldo_base =  $sueldo_base + $ajuste_sueldo; else $ajuste_sueldo = 0;
         if($key['status'] != 0) $prima_profesion =  $prima_profesion + $ajuste_p_profesion; else $prima_profesion = 0;
         if($key['status'] != 0) $prima_antiguedad =  $prima_antiguedad + $ajuste_antiguedad; else $prima_antiguedad = 0;
         if($key['status'] != 0) $prima_hogar =  $prima_hogar + $ajuste_p_hogar; else $prima_hogar = 0;
         if($key['status'] != 0) $prima_hijos =  $prima_hijos + $ajuste_p_hijos; else $prima_hijos = 0;

    
       
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_becas  += $becas;

            /*@$t_ajuste_antiguedad  += $ajuste_antiguedad;
            @$t_ajuste_p_profesion  += $ajuste_p_profesion;
            @$t_ajuste_p_hijos  += $ajuste_p_hijos;
            @$t_ajuste_p_hogar  += $ajuste_p_hogar;
            @$t_ajuste_sueldo  += $ajuste_sueldo;*/
            

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($key['status'] !=0) $asignaciones = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas; 
        else $asignaciones  = 0;

        /*======================================================================================================*/

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

           if($key['status'] !=0) 
                $sueldo_base = $key['sueldo_base']; 
            else $sueldo_base = 0;

            if($key['ajuste_caja'] != 0) $sueldo_base = (($key['sueldo_base'] / 30) * $key['ajuste_caja']) /2;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) 
                $deduccion_sso = $key['deduccion_sso']; 
            else $deduccion_sso = 0;

            if($key['status'] !=0) 
                $deduccion_rpe = $key['deduccion_rpe']; 
            else $deduccion_rpe = 0;
    
            if($key['ajuste_caja'] != 0){
                    if($key['status'] !=0) 
                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); 
                    else $faov = 0;
            }else{
            if($key['status'] != 0) $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad'] + $prima_hogar) * 0.01); else $faov = 0;

            }

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                $asociacion = 0.10; 
            else $asociacion = 0;


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
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;


            if($key['caja_ahorro'] != 0 AND $key['ajuste_caja'] != 0){
                $deduccion_caja = (($key['deduccion_caja_ahorro']) /15 ) * $key['ajuste_caja']; 
            }

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0 ) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;


             //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_sso = ($deduccion_sso + ((($deduccion_sso * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_sso
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_rpe = ($deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_rpe
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $faov = ($faov + ((($faov * 2) / 30) * $key['dias_dejados_c'])); // + faov
             //if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_caja = ($deduccion_caja + ((($deduccion_caja * 2) / 30) * $key['dias_dejados_c'])); // + deduccion_caja

            
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_sso = ((($deduccion_sso) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_rpe = ((($deduccion_rpe) / 15) * $key['ajuste_caja']);

            //if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $faov = ($faov * $key['ajuste_caja']) / 15;

            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $deduccion_caja = ((($deduccion_caja) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $funeraria = ((($funeraria) / 15) * $key['ajuste_caja']);
            if($key['status'] != 0 AND $key['ajuste_caja'] != 0) $sindicato = ((($sindicato) / 15) * $key['ajuste_caja']);

       
            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe;
            @$t_faov += $faov;
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;



            if($key['status'] !=0) $deducciones = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;

            /*======================================================================================================*/
            /*====================================== NETO  ===============================================*/

            if($key['status'] !=0) $neto = 
                $asignaciones - 
                $deducciones; 
            else $neto = 0;



            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            if($key['sueldo'] != 0){
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            }
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base / 2),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001-1'.'Diferencia de Sueldo DC',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_profesion != 0) {
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
	            $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empleo',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'L');
            }if ($faov != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($faov),0,1,'L');
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

            if($y >215){
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,'PAGO NOMINA OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
            }

            $t_asignacion += $asignaciones;
            $t_deduccion += $deducciones;
        }

        

        $t_neto = $t_asignacion - $t_deduccion;


        $pdf -> ln();
            $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL            ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_asignacion).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'L');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(30,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_neto),0,0,'L');


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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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

    


   

   
    
   







    //==================================================================================================================


    public function AsignacionesObrerosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesObrerosContratados('L','mm',array(300,250));
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',6);  

	    $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $i  = 0;
        

	    foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        if($key['ajuste_sueldo'] != 0) $sueldo_base = $key['ajuste_sueldo']; else $sueldo_base = $key['sueldo_base'] / 2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        /*======================================================================================================*/
        /*=============================================== dias dejados de Cancelar ===============================================*/

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($key['status'] !=0) $total = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas;
        else $total = 0;


        /*======================================================================================================*/
        
        if ($key['status'] != 0 AND $key['dias_dejados_cancelar'] != 0) {

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        }

        /*======================================================================================================*/


	   		$pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(5);
		    $pdf -> Cell(6,5, ++$i ,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,40)),1,0,'L');
            $pdf -> Cell(17,5, $this->mayus($key['grupo'] . " - " . $key['denominacion_grado_nivel']),1,0,'C');
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$becas),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            /*======================================================================================================*/
            /*====================================== TOTAL EN COLUMNAS ============================================*/
            @$t_sueldo_base += $sueldo_base;
            @$t_becas += $becas;
            @$t_prima_hijos  += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_hogar  += $prima_hogar;
            @$t_total  += $total;

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
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
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
        $pdf -> SetX(1);
        $pdf -> Cell(172,5,'TOTAL',1,0,'C');

        /*======================================================================================================*/
        /*====================================== FILA DE TOTALES ============================================*/
        $pdf -> Cell(17,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(16,5, $this->moneda($t_prima_profesion),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_prima_hijos ),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_prima_antiguedad),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_prima_hogar),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_becas),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');
        

        $pdf -> ln();

	   /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+4);
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

	public function DeduccionesObrerosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_DeduccionesObrerosContratados('L','mm',array(300,250));
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
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

            if($key['status'] != 0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            if($key['status'] != 0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] != 0 and $key['prima_hogar'] != 0){
                if($key['requisicion'] > 1122){
                    $prima_hogar = (100000.00 ) / 2;
                } else if ($key['requisicion'] < 1122){
                    $prima_hogar = (62500.00 ) / 2;
                }
            } else {
                    $prima_hogar = 0.00;
            }

            if($key['status'] != 0 and $key['hijos'] != 0){
                if($key['requisicion'] > 1122){
                    $prima_hijos = ($key['hijos'] * 100000 ) / 2;
                } else if ($key['requisicion'] < 1122){
                    $prima_hijos = ($key['hijos'] * 62500) / 2;
                }
            } else {
                    $prima_hijos = 0.00;
            }

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            /*======================================================================================================*/
        /*=============================================== dias dejados de Cancelar ===============================================*/

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            if($key['ajuste_p_hogar'] != 0) $funeraria = $funeraria + $key['ajuste_p_hogar'];

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] !=0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

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
                $deduccion_fpj = 0; 
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
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $key['apellidos'],1,0,'L');
            $pdf -> Cell(30,5, $key['nombres'],1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_rpe),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$faov),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$deduccion_fpj),1,0,'R');
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
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }   


                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(91,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(15,5, $this->moneda(@$t_sso),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_rpe),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_faov),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_fpj),1,0,'R');
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

	public function AportePatronalObrerosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AportePatronalObrerosContratados('L','mm',array(300,250));
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }
        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
        $t_aporte_patronal_asso = 0;
        $t_aporte_patronal_arpe = 0;
        $t_afaov = 0;
        $t_total = 0;

	    foreach ($data as $key) {

	    	if($key['status'] != 0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            if($key['status'] != 0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] != 0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] != 0 and $key['prima_hogar'] != 0){
                if($key['requisicion'] > 1122){
                    $prima_hogar = (100000.00 ) / 2;
                } else if ($key['requisicion'] < 1122){
                    $prima_hogar = (62500.00 ) / 2;
                }
            } else {
                    $prima_hogar = 0.00;
            }

            if($key['status'] != 0 and $key['hijos'] != 0){
                if($key['requisicion'] > 1122){
                    $prima_hijos = ($key['hijos'] * 100000 ) / 2;
                } else if ($key['requisicion'] < 1122){
                    $prima_hijos = ($key['hijos'] * 62500) / 2;
                }
            } else {
                    $prima_hijos = 0.00;
            }


            /*======================================================================================================*/
            /*=============================================== dias dejados de Cancelar ===============================================*/

            //Cuando existen dias dejados de Cancelar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
             if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


            if($key['status'] !=0) $aporte_patronal_asso = (($key['sueldo_base'] + $key['prima_profesion'] + $key['prima_antiguedad'] + $key['prima_hijos']) / 2) *12/52*4*0.09 ; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = (($key['sueldo_base'] + $key['prima_profesion'] + $key['prima_antiguedad'] + $key['prima_hijos']) / 2) *12/52*4*0.017 ; else $aporte_patronal_arpe = 0;
            if($key['status'] !=0) $afaov = (($key['sueldo_base'] + $key['prima_profesion'] + $key['prima_antiguedad'] + $key['prima_hijos']) / 2) *0.03 ; else $afaov = 0;


            if($key['status'] !=0) $total = $aporte_patronal_asso + $aporte_patronal_arpe + $afaov ; else $total = 0;


	        $pdf -> SetX(30);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(25,5, $this->moneda($aporte_patronal_asso),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda($aporte_patronal_arpe),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda($afaov),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda($total),1,0,'R');
		    $pdf -> ln();


		    $t_aporte_patronal_asso += $aporte_patronal_asso;
            $t_aporte_patronal_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;
            $t_total += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','',8);
                $pdf -> SetY(20);
                    if($concepto['status'] == 0){
                        $pdf -> SetX(110);
                        $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                    } else {
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }
                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(30);
        $pdf -> Cell(111,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_asso),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_aporte_patronal_arpe),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_total),1,1,'R');


	    /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);

        $pdf -> SetX(25);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(25);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');  
	   
	    $pdf -> Output();
	}

	public function NetoCobrarObrerosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarObrerosContratados('L','mm',array(300,250));
	    $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(60);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } 
        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        if($key['ajuste_sueldo'] != 0) $sueldo_base = $key['ajuste_sueldo']; else $sueldo_base = $key['sueldo_base'] / 2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        /*======================================================================================================*/
        /*=============================================== dias dejados de Cancelar ===============================================*/

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($key['status'] !=0) $asignacion = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas;
        else $asignacion = 0;

        
        /*======================================================================================================*/

           if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            if($key['ajuste_p_hogar'] != 0) $funeraria = $funeraria + $key['ajuste_p_hogar'];

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] !=0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

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
                $deduccion_fpj = 0; 
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

            /*======================================================================================================================================*/

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(10,5, ++$i,1,0,'C');
            $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'L');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);


            $t_incremento += $sueldo_base;
            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;
            $t_neto += $neto;

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
                        $pdf -> SetX(60);
                        $pdf -> MultiCell(180,5,$concepto['concepto'],0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }   

                $pdf-> ln();
                $pdf-> ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> SetY($y+6);

        $pdf -> SetX(25);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'___________________________',0,1,'C');

        $pdf -> SetX(25);
        $pdf -> Cell(60,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO: ',0,0,'C');

        $pdf -> SetX(125);
        $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

        $pdf -> SetX(235);
        $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
	}


	public function AcumuladoObrerosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;


		$this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

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
        $pdf -> SetFont('Arial','B',10);
        
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
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;
        $t_x_depositario = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        if($key['ajuste_sueldo'] != 0) $sueldo_base = $key['ajuste_sueldo']; else $sueldo_base = $key['sueldo_base'] / 2;

        /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        /*======================================================================================================*/
        /*=============================================== dias dejados de Cancelar ===============================================*/

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 1) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

        if($key['status'] !=0) $asignacion = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas;
        else $asignacion = 0;


            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_becas += $becas;
            @$t_prima_profesion  += $prima_profesion;


            $var1 = $t_sueldo_base + @$t_prima_hijos + @$t_prima_antiguedad  + @$t_becas + @$t_prima_profesion ;


            //===============================================================================================
           
            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

            if($key['ajuste_p_hogar'] != 0) $funeraria = $funeraria + $key['ajuste_p_hogar'];

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] !=0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;


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
                $deduccion_fpj = 0; 
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

            //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_sso = ( $deduccion_sso + ((($deduccion_sso * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_rpe = ( $deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_fpj = ( $deduccion_fpj + ((($deduccion_fpj * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

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

            $var2 =  @$t_sso +  @$t_rpe + @$t_faov  + @$t_funeraria;

            //=======================================================================================================

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;


            if($key['status'] !=0) $aporte_patronal_asso = (($key['sueldo_base'] + $key['prima_profesion'] + $key['prima_antiguedad'] + $key['prima_hijos']) / 2) *12/52*4*0.09 ; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = (($key['sueldo_base'] + $key['prima_profesion'] + $key['prima_antiguedad'] + $key['prima_hijos']) / 2) *12/52*4*0.017 ; else $aporte_patronal_arpe = 0;
            if($key['status'] !=0) $afaov = (($key['sueldo_base'] + $key['prima_profesion'] + $key['prima_antiguedad'] + $key['prima_hijos']) / 2) *0.03 ; else $afaov = 0;


            if($key['status'] !=0) $total = $aporte_patronal_asso + $aporte_patronal_arpe + $afaov ; else $total = 0;



            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $afaov;

            $var3 =  $t_asso  + $t_arpe + $t_afaov;
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

        if($t_prima_profesion != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1002',0,0);
            $pdf -> Cell(95,4,'Prima de Profesion',0,0);
            $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_prima_hijos != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1003',0,0);
            $pdf -> Cell(95,4,'Prima Por Hijo',0,0);
            $pdf -> Cell(22,4,'4.01.03.04.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_hijos),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1004',0,0);
        $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_becas != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1006',0,0);
            $pdf -> Cell(95,4,'Beca Escolares',0,0);
            $pdf -> Cell(22,4,'4.01.07.02.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_becas),0,0,'R');
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

        

        if($t_prestamo_caja != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2006',0,0);
            $pdf -> Cell(95,4,'Prestamo Caja de Ahorro',1,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_prestamo_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_funeraria != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2007',0,0);
            $pdf -> Cell(95,4,'Servicios Funerarios (ACOFJAM)',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_sindicato != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2008',0,0);
            $pdf -> Cell(95,4,'SINDICATO',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_sindicato),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_asociacion != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2009',0,0);
            $pdf -> Cell(95,4,'Asociacion Funeraria',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_asociacion),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

         if($t_x_depositario != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2010',0,0);
            $pdf -> Cell(95,4,'Depositario Judicial',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,$this->moneda($t_x_depositario),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

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

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($var1 - $var2),1,1,'R');

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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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

    public function RequisionObrerosContratados($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 5;
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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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



	public function ResumenNominaObrerosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 5;
        $ms = $mes;
        $qs = $quincena;


		$this->loadModel('ViewMrrhhHistoricoObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_ResumenNominaObrerosContratados();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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


        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $faov = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;
        $sueldo_base_d= 0;
        $prima_profesion_d= 0;
        $prima_hogar_d= 0;
        $prima_antiguedad_d= 0;

         $pdf -> SetFont('Arial','B',8);



        $t_asignacion = 0;
        $t_deduccion = 0;

        foreach ($data as $key) {

        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

        if($key['ajuste_sueldo'] != 0) $sueldo_base = $key['ajuste_sueldo']; else $sueldo_base = $key['sueldo_base'] / 2;
           /*======================================================================================================*/
        /*====================================== BECAS ESCOLARES ===============================================*/
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


        /*======================================================================================================*/
        /*=============================================== dias dejados de Cancelar ===============================================*/

        //Cuando existen dias dejados de Cancelar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $sueldo_base = ($sueldo_base + ((($sueldo_base * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_profesion = ($prima_profesion + ((($prima_profesion * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_antiguedad = ($prima_antiguedad + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hogar = ($prima_hogar + ((($prima_antiguedad * 2) / 30) * $key['dias_dejados_c'])); // + prima_hogar
         if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $prima_hijos = ($prima_hijos + ((($prima_hijos * 2) / 30) * $key['dias_dejados_c'])); // + prima_hijos


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/


        if($key['status'] !=0) $asignaciones = 
            $sueldo_base + 
            $prima_profesion + 
            $prima_hijos + 
            $prima_antiguedad + 
            $prima_hogar + 
            $becas;
        else $asignaciones = 0;

        /*======================================================================================================*/
        
        if ($key['status'] != 0 AND $key['dias_dejados_cancelar'] != 0) {

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }

            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        }


            /*======================================================================================================*/
            /*====================================== TOTAL EN COLUMNAS ============================================*/
            @$t_sueldo_base += $sueldo_base;
            @$t_becas += $becas;
            @$t_prima_hijos  += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;
            @$t_prima_hogar  += $prima_hogar;
            @$t_total  += $total;

            /*======================================================================================================*/
            /*====================================== DECUCCIONES  ===============================================*/
            
             if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }


            if($key['ajuste_p_hogar'] != 0) $funeraria = $funeraria + $key['ajuste_p_hogar'];

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $deduccion_caja = $key['deduccion_caja_ahorro']; 
            else $deduccion_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] !=0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['requisicion'] > 1122){
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 100000 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 100000 / 2; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = 62500 / 2; else $prima_hogar = 0;
            }


            if($key['status'] !=0) 
                $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01); 
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

                /*======================================================================================================*/
                /*=============================================== dias dejados de Cancelar ===============================================*/

                //Cuando existen dias dejados de Cancelar
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_sso = ( $deduccion_sso + ((($deduccion_sso * 2) / 30) * $key['dias_dejados_c'])); // + sueldo
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_rpe = ( $deduccion_rpe + ((($deduccion_rpe * 2) / 30) * $key['dias_dejados_c'])); // + prima_profesion
                 if($key['status'] != 0 AND $key['dias_dejados_c'] != 0) $deduccion_fpj = ( $deduccion_fpj + ((($deduccion_fpj * 2) / 30) * $key['dias_dejados_c'])); // + prima_antiguedad

            if($key['status'] !=0) $deducciones = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;

                        $t_asignacion += $asignaciones;
                        $t_deduccion += $deducciones;
                        


                        $t_neto = $t_asignacion - $t_deduccion;


            /*======================================================================================================*/
            /*====================================== NETO  ===============================================*/

            if($key['status'] !=0) $neto = 
                $asignaciones - 
                $deducciones; 
            else $neto = 0;


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            if ($key['ajuste_sueldo'] != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($key['ajuste_sueldo']),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }else {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_base /2),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }


            if ($sueldo_base_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal Dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_base_d),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($prima_profesion_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion dejados de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion_d),0,0,'L');
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
            }if ($prima_antiguedad_d != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad Dejada de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad_d),0,0,'L');
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
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empleo',0,0,'L');
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
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'C');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');
            $pdf -> SetFont('Arial','',8);

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            /* Linea de Corte*/
            $y = $pdf-> GetY();
            $pdf -> SetY($y+8);

             $y = $pdf -> GetY();
            if($y > 200){
                $pdf -> AddPage();
            }

            if($y > 200){
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

        $pdf -> SetFont('Arial','B',8);

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

           /*Igual que en todos los reporte en lugar de *ELABORADO POR* El nombre y apellido del usuario que Inicio sesion*/
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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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


    //============================================ OBREROS NO PERMANETES  ======================================================================

	public function asignacionesNoPermanentes($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 6;
        $ms = $mes;
        $qs = $quincena;


		$this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AsignacionesObrerosNoPermanentes();
	    $pdf -> AddPage();

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

        $pdf -> SetY(20);
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
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
	    
	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
	    $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_prima_hijos = 0;
	    $t_prima_antiguedad = 0;
	    $t_prima_hogar = 0;
	    $t_total = 0;
	    $total = 0;

	    foreach ($data as $key) {

	    	//if($key['status'] != 0)$sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            if($key['dias_dejados_c'] != 0){
                if($key['status'] != 0)$sueldo_base = (($key['dias_dejados_c'] *  $key['sueldo_base']) / 15) +  $key['sueldo_base']; else $sueldo_base = 0;
            }else if($key['ajuste_caja'] != 0){
                if($key['status'] != 0)$sueldo_base = (($key['ajuste_caja'] * $key['sueldo_base']) / 30); else $key['sueldo_base'] = 0;
            }else{
                $sueldo_base = $key['sueldo_base']/2;
            }

	    	if($key['status'] != 0) $total = $sueldo_base;

		    $pdf -> SetX(5);
		    $pdf -> Cell(6,5,++$i,1,0,'C');
		    $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(25,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'L');
		    $pdf -> Cell(25,5, $this->moneda($sueldo_base),1,0,'R');
		    $pdf -> Cell(25,5, '',1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $sueldo_base);


		    $t_sueldo_base += $sueldo_base;
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
                        $pdf -> SetX(50);
                        $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                        $pdf -> SetX(90);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    } 
                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();
            }
	    }

	    $pdf -> SetFont('Arial','B',8); 
    	$pdf -> SetX(5);
	    $pdf -> Cell(136,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(25,5, $this->moneda($t_sueldo_base),1,0,'R');
	    $pdf -> Cell(25,5, '',1,1,'R');

	    /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+5);
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

	public function RequisionNoPermanentes($tps = null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 6;
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
REALIZADO POR:






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

    public function AcumuladoObrerosNoPermanentes($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 6;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

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
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $t_sso = 0;
        $t_rpe = 0;
        $t_faov = 0;
        $t_fpj = 0;
        $t_caja = 0;
        $t_funeraria = 0;
        $t_sindicato = 0;
        $t_asociacion = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_acaja = 0;
        $t_x_depositario = 0;

        foreach ($data as $key) {

            ++$i;
            
             if($key['dias_dejados_c'] != 0){
                if($key['status'] != 0)$sueldo_base = (($key['dias_dejados_c'] * 400000) / 30); else $sueldo_base = 0;
            }else{
                $sueldo_base = $key['sueldo_base']/2;
            }

            @$t_sueldo_base += $sueldo_base;


            $var1 = $t_sueldo_base;
         }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(2,4,'',0,0);
        $pdf -> Cell(95,4,'Sueldo Basico Tiempo Completo',0,0);
        $pdf -> Cell(22,4,'4.01.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($var1),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($var1),1,1,'R');

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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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




  	public function ResumenNominaObrerosNoPermanentes($tps = null, $mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 6;
        $ms = $mes;
        $qs = $quincena;

  		$this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

  		$this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_ResumenNominaObrerosNoPermanentes();

        $pdf -> AddPage();
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


        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

            if($key['dias_dejados_c'] != 0){
                if($key['status'] != 0)$sueldo_base = (($key['dias_dejados_c'] * 400000) / 30); else $sueldo_base = 0;
            }else{
                $sueldo_base = $key['sueldo_base']/2;
            }

            $t_asignacion += $sueldo_base;
            $t_deduccion = 0;
           

            $asignaciones = $sueldo_base;
            $deducciones = 0;
            $neto = $asignaciones - $deducciones;

            $t_neto = $t_asignacion - $t_deduccion;
           

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

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
            $pdf -> SetFont('Arial','',8);

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            /* Linea de Corte*/
            $y = $pdf-> GetY();
            $pdf -> SetY($y+8);

             $y = $pdf -> GetY();
            if($y > 200){
                $pdf -> AddPage();
            }

            if($y > 200){
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
                $pdf -> SetFont('Arial','B',8);

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

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

MsC. YOEL SANCHEZ

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
