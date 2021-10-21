<?php
namespace App\Controller;

use App\Controller\AppController;

class PDF_AsignacionesObrerosFijos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(88);
        $this->MultiCell(18,5,'
FECHA DE INGRESO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(106);
        $this->MultiCell(30,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(136);
        $this->MultiCell(17,20,'GRUPO',1,'C',0);

        $this->SetY(40);
        $this->SetX(153);
        $this->MultiCell(17,20,'SUELDO',1,'C',0);

        $this->SetY(40);
        $this->SetX(170);
        $this->MultiCell(17,5,'
HORAS EXTRAS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(187);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(203);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(218);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(238);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(255);
        $this->MultiCell(15,5,'
 BECAS QUINCENAL
            ',1,'C',0);


        $this->SetY(40);
        $this->SetX(270);
        $this->MultiCell(20,5,'
BONO ESTABILIDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(290);
        $this->MultiCell(40,5,'
 SALARIO, BECAS, PRIMAS 
 BONO DE ESTABILIDAD
            ',1,'C',0);

        $this->SetY(40);
        $this->SetX(330);
        $this->MultiCell(20,5,'
PAGO VACACIONES

',1,'C',0);

        $this->SetY(40);
        $this->SetX(350);
        $this->MultiCell(20,5,'
TOTAL

',1,'C',0); 
    }
}

class PDF_DeduccionesObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',8);
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
        $this->MultiCell(20,5,'
FUNERARIA

',1,'C',0);
        $this->SetY(30);
        $this->SetX(186);
        $this->MultiCell(20,5,'
ACOFJAM

',1,'C',0);

        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(20,5,'
SINDICATO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(226);
        $this->MultiCell(20,5,'
TOTAL DEDUC
',1,'C',0);
    }
}

class PDF_AportePatronalObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

        $this->SetFont('Arial','B',8);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(88);
        $this->MultiCell(30,20,'CARGO',1,'C',0);
        $this->SetY(40);
        $this->SetX(118);
        $this->MultiCell(20,5,'
SUELDO MENSUAL

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(138);
        $this->MultiCell(20,5,'
SSO

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(158);
        $this->MultiCell(20,5,'
RPE

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(178);
        $this->MultiCell(20,5,'
FAOV


        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(198);
        $this->MultiCell(25,5,'
CAJA DE AHORRO

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(223);
        $this->MultiCell(20,5,' 
TOTAL

        ',1,'C',0);
    }
}


class PDF_NetoCobrarObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        
        $this->SetX(110);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');
        /*$this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',8);

        $this->SetY(30);
        $this->SetX(10);
        $this->MultiCell(10,15,'Nro',1,'J',0);
        $this->SetY(30);
        $this->SetX(20);
        $this->MultiCell(20,15,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(40);
        $this->MultiCell(40,15,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(80);
        $this->MultiCell(40,15,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(120);
        $this->MultiCell(50,15,'CARGO',1,'C',0);
        $this->SetY(30);
        $this->SetX(170);
        $this->MultiCell(30,5,'
SALARIO BASICO

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


/*------------------------------ CONTRATADOS ------------------------------------*/
class PDF_AsignacionesObrerosContratados extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',380,8,35,25,"JPG","");

        $this->SetX(170);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(17,20,'CEDULA',1,'C',0);
        $this->SetY(40);
        $this->SetX(28);
        $this->MultiCell(30,20,'APELLIDO',1,'C',0);
        $this->SetY(40);
        $this->SetX(58);
        $this->MultiCell(30,20,'NOMBRES',1,'C',0);
        $this->SetY(40);
        $this->SetX(88);
        $this->MultiCell(18,5,'
FECHA DE INGRESO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(106);
        $this->MultiCell(50,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(156);
        $this->MultiCell(17,20,'SUELDO',1,'C',0);

        $this->SetY(40);
        $this->SetX(173);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(189);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(204);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(224);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(241);
        $this->MultiCell(20,5,'HORAS EXTRAS Y DIAS NO LABORABLES',1,'C',0);
        $this->SetY(40);
        $this->SetX(261);
        $this->MultiCell(20,5,'
 ALICUOTA B. VACACIONAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(281);
        $this->MultiCell(20,5,'
 ALICUOTA B. FIN DE ANO',1,'C',0);
        $this->SetY(40);
        $this->SetX(301);
        $this->MultiCell(20,5,'
 ALICUOTA 5 DIAS',1,'C',0);
        $this->SetY(40);
        $this->SetX(321);
        $this->MultiCell(20,5,'SUELDO INTEGRAL MENSUAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(341);
        $this->MultiCell(20,5,'
 PAGO BONO VACACIONAL',1,'C',0);
        $this->SetY(40);
        $this->SetX(361);
        $this->MultiCell(20,5,'
 PAGO ESPEC DE DISFRUTE',1,'C',0);



        $this->SetY(40);
        $this->SetX(381);
        $this->MultiCell(20,5,'
PAGO VACACIONES
',1,'C',0); 
    }
}

class PDF_DeduccionesObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');
       /* $this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

        $this->SetFont('Arial','B',8);
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

class PDF_AportePatronalObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');
        
        /*$this->SetX(110);
        $this->Cell(80,5,'Correspondiente al lapso desde: ___/___/______ Hasta ___/___/______',0,1,'C');*/

        $this->SetFont('Arial','B',8);

        $this->ln();
        $this->SetY(30);
        $this->SetX(30);
        $this->MultiCell(6,20,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(25,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(61);
        $this->MultiCell(40,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(101);
        $this->MultiCell(40,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(25,5,'
APORTE PATRONAL SSO
    ',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(25,5,'
APORTE PATRONAL RPE

',1,'C',0);
        $this->SetY(30);
        $this->SetX(191);
        $this->MultiCell(25,5,'APORTE PATRONAL FAOV
',1,'C',0);
        $this->SetY(30);
        $this->SetX(216);
        $this->MultiCell(25,5,'    
TOTAL DEDUCCIONES
    ',1,'C',0); 
    }
}

class PDF_NetoCobrarObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");
        
        $this->SetX(110);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

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
SALARIO BASICO

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

class PDF_ResumenNominaObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',5,4,20,15,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',185,5,20,15,"JPG","");

    $this->SetX(70);
    $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda ',0,1,'C');
    }

    function Footer()
    {
        
        $this->SetY(-15);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}



/*============================ REPORTES ===============================*/
class MRRHHFinOReporteController extends AppController
{
    /*------------------------------ FIJOS ------------------------------------*/
    public function AsignacionesObrerosFijos($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new PDF_AsignacionesObrerosFijos('L','mm',array(320,380));
        $pdf -> AddPage();

        //estructura

        $pdf -> Output();
    }

    public function DeduccionesObrerosFijos($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new PDF_DeduccionesObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();

        //estructura

        $pdf -> Output();
    }

    public function AportePatronalObrerosFijos($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new PDF_AportePatronalObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();
        
        //estructura
       
        $pdf -> Output();
    }

    public function NetoCobrarObrerosFijos($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new PDF_NetoCobrarObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();
    //estructura

        $pdf -> Output();
    }

    public function AcumuladoObrerosFijos($tp = null, $desde = '', $hasta = '', $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

        //estructura

        $pdf -> Output();
    }

    public function RequisionObrerosFijos($desde = '', $hasta = '', $requisicion = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $hasta = $this->Quincena->find('all', ['conditions' => ['id' => @$hasta]])->last();

        $this->loadModel('desde');
        $desde = $this->mes->find('all', ['conditions' => ['id' => @$desde]])->last();

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
    $pdf -> MultiCell(180,5, $this->mayus($data['concepto']). ' DEL ' . ANO_FISCAL, 0, 'L', 0);


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

    public function ResumenNominaObrerosFijos($tp = null, $desde = '', $hasta = '', $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new PDF_ResumenNominaObrerosFijos();
  
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        //estructura

        $pdf -> Output();
    }

    


   

   
    
   







    //==================================================================================================================


    public function AsignacionesObrerosContratados($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }
            
        $pdf = new PDF_AsignacionesObrerosContratados('L','mm',array(420,250));
        $pdf -> AddPage();
        //estructura

        $pdf -> Output();
    }



    public function AcumuladoObrerosContratados($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        //estructura


        $pdf -> Output();
        exit();
    }

    public function RequisionObrerosContratados($desde = '', $hasta = '', $requisicion = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:        ' . $this->fecha($data['fecha_rrhh']) . '
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
    //$pdf -> MultiCell(200,5,'NOMINA DE OBREROS CONTRATADOS PAGO DE VACACIONES CORRESPONDIENTE A LA ' . $hasta['denominacion'].' '.'DEL MES DE '.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);



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

    public function ResumenNominaObrerosContratados($tp = null, $desde = null, $hasta = null, $x = false){

        if($x == true){
            $this->loadModel('ViewMrrhhFinObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhFinObreros');
            $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhFinObreros->find('all', ['conditions' => $condicion])->toArray();
        }


        $pdf = new PDF_ResumenNominaObrerosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','',8);
        //estructura

        $pdf -> Output();
    }


    //============================================ OBREROS NO PERMANETES  ======================================================================

    public function asignacionesNoPermanentes($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_AsignacionesObrerosNoPermanentes();
        $pdf -> AddPage();
        //estructura

        $pdf -> Output();
    }

    public function RequisionNoPermanentes($desde = '', $hasta = '', $requisicion = ''){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:        ' . $this->fecha($data['fecha_rrhh']) . '
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
    //$pdf -> MultiCell(180,5,'PAGO DE NOMINA A OBREROS NO PERMANENTES CORRESPONDIENTE A LA ' . $hasta['denominacion'].' '.'DEL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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

    public function AcumuladoObrerosNoPermanentes($desde = '', $hasta = '', $requisicion = ''){

        $tps = 6;
        
        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        //estructura
        
        $pdf -> Output();
    }




    public function ResumenNominaObrerosNoPermanentes($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_ResumenNominaObrerosFijos();

        $pdf -> AddPage();
        
        //estructura
        
        $pdf -> Output();
    }













    /* ==============================================================================================================*/
    /* ==============================================================================================================*/
    /* =================================== FIN DE REPORTES DE NOMINA ================================================*/
    /* ==============================================================================================================*/
    /* ==============================================================================================================*/



















     /*================================= OBREROS FIJOS =======================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadObrerosFijos($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoEstabilidadObrerosFijos();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        //estructura

        $pdf -> Output();
    }

    public function AcumuladoBonoEstabilidadObrerosFijos($desde = null, $hasta = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        //estructura
        
        $pdf -> Output();
    }

    public function RequisionBonoObrerosFijos($desde = null, $hasta = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    //$pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A OBREROS FIJOS CORRESPONDIENTE A LA '.$hasta['denominacion'].' DEL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEObrerosFijos($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_ResumenNominaObrerosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        //estructura
        
        $pdf -> Output();
    }


    /*================================= OBREROS CONTRATADOS =======================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadObrerosContratados($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoEstabilidadObrerosContratados();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

         //estructura

        $pdf -> Output();
    }

    public function AcumuladoBonoEstabilidadObrerosContratados($desde = null, $hasta = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);


        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        //estructura
        

        $pdf -> Output();
    }

    public function RequisionBonoObrerosContratad($desde = null, $hasta = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    //$pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A OBREROS CONTRATADOS CORRESPONDIENTE AL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEObrerosContratados($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_ResumenNominaObrerosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        //estructura
        
        $pdf -> Output();
    }


    /*================================= OBREROS NO PERMANENTES ================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadObrerosNP($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoEstabilidadObrerosNP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        //estructura

        $pdf -> Output();
    }

    public function AcumuladoBonoEstabilidadObrerosNP($desde = null, $hasta = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

        
        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        //estructura

        $pdf -> Output();
    }

    public function RequisionBonoObrerosNP($desde = null, $hasta = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    //$pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A OBREROS NO PERMANENTES CORRESPONDIENTE AL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEObrerosNP($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_ResumenNominaObrerosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        //estructura

        $pdf -> Output();
    }


        /*==================================== OBREROS FIJOS ====================================*/
        /*============================== BONO DE ASISTENCIA MEDICA ================================*/
        /*=========================================================================================*/
    public function BonoAMObrerosFijos($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoAMObrerosFijos();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        //estructura

        $pdf -> Output();
    }


    public function AcumuladoBonoAMObrerosFijos($desde = null, $hasta = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        //estructura

        $pdf -> Output();
    }

    public function RequisionBonoAMObrerosFijos($desde = null, $hasta = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    //$pdf -> MultiCell(180,5,'PAGO DE BONO DE ASISTENCIA MEDICA A OBREROS FIJOS CORRESPONDIENTE AL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenAMObrerosFijos($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        //estructura

        $pdf -> Output();
    }


        /*==================================== OBREROS CONTRATADOS ====================================*/
        /*============================== BONO DE ASISTENCIA MEDICA ================================*/
        /*=========================================================================================*/
    public function BonoAMObrerosContratados($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoAMObrerosContratados();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        //estructura

        $pdf -> Output();
    }


    public function AcumuladoBonoAMObrerosContratados($desde = null, $hasta = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);


        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        //estructura
        $pdf -> Output();
    }

    public function RequisionBonoAMObrerosContratados($desde = null, $hasta = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    //$pdf -> MultiCell(180,5,'PAGO DE BONO DE ASISTENCIA MEDICA A OBREROS CONTRATADOS CORRESPONDIENTE AL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenAMObrerosContratados($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $hasta = $this->Quincena->find('all', ['conditions' => ['id' => @$hasta]])->last();

        $this->loadModel('desde');
        $desde = $this->mes->find('all', ['conditions' => ['id' => @$desde]])->last();


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        //estructura

        $pdf -> Output();
    }


       /*==================================== OBREROS NO PERMANENTES ==============================*/
        /*============================== BONO DE ASISTENCIA MEDICA ================================*/
        /*=========================================================================================*/
    public function BonoAMObrerosNP($desde = null, $hasta = null){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoAMObrerosNP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        //estructura

        $pdf -> Output();
    }


    public function AcumuladoBonoAMObrerosNP($desde = null, $hasta = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        //estructura

        $pdf -> Output();
    }

    public function RequisionBonoAMObrerosNP($desde = null, $hasta = null, $requisicion = null){

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $data = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

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
    //$pdf -> MultiCell(180,5,'PAGO DE BONO DE ASISTENCIA MEDICA A OBREROS NO PERMANENTES CORRESPONDIENTE AL MES DE'.' '. $desde['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenAMObrerosNP($desde = '', $hasta = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'desde' => $desde, 'hasta' => $hasta];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        //estructura

        $pdf -> Output();
    }

}
