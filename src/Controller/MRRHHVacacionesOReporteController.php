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
        $this->MultiCell(16,5,'
SSO

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(154);
        $this->MultiCell(15,5,'
RPE

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(169);
        $this->MultiCell(15,5,'
FAOV


        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(184);
        $this->MultiCell(25,5,'
CAJA DE AHORRO

        ',1,'C',0);
        $this->SetY(40);
        $this->SetX(209);
        $this->MultiCell(17,5,' 
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
class MRRHHVacacionesOReporteController extends AppController
{
    /*------------------------------ FIJOS ------------------------------------*/
    public function AsignacionesObrerosFijos($tp = null, $mes = null, $quincena = null, $x = false){


        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivos = $this->ViewMrrhhDirectivosAux->find('all');


        $this->loadModel('Quincena');
        $q = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $m = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        if($m['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($m['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($m['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($m['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($m['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($m['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($m['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($m['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($m['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($m['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($m['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($m['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($m['denominacion'] == 'FEBRERO' AND $q['fecha_hasta'] == 30) $dia = 29; else $dia = $q['fecha_hasta']; 

        $pdf = new PDF_AsignacionesObrerosFijos('L','mm',array(320,380));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$q['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  


        $pdf-> ln();
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
        $t_bono_estabilidad = 0;
        $t_horas_extras = 0;

        $t_vacaciones  = 0;
        $t_asignaciones  = 0;
        $i  = 0;

        $t_becas = 0;
        $horasd = 0;
        $horasn = 0;
        $horash = 0;
       $dias = 0;

       $horas = 0;
       $bono_estabilidad = 0;
       $t_asignacion = 0;

        foreach ($data as $key) {

    if($key['dias'] != 0){

        $sueldo_base = $key['sueldo_base'];

        if($key['requisicion'] >1122){

           if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;

            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;
        } else {
            if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;

            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;
        } 

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //$sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                //$prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                //$prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }




         /*======================================================================================================*/
        /*=============================================== PRIMAS ===============================================*/

        if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']); else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

        $prima_profesion = ($key['prima_profesion'] * 2);
        $prima_antiguedad = ($key['prima_antiguedad'] * 2);

        //EN ESTE CASO YA QUE EL SISTEMA NO TIENE REGISTROS DE HORAS EXTRAS DEL MES PASADO
        $horas = $key['horas_extras'];

        if($key['mes'] == 2 and $key['quincena'] == 1){
            $bono_estabilidad = 0;
        }else{
            $bono_estabilidad = $sueldo_base  * 0.40;
        }
        
        //$horas = $horasd + $horasn + $horash;

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

                if($mes == 2 and $quincena == 1 and $key['cedula'] == 9524559){
                    $vacaciones = 1849041.83;
                }

                if($mes == 2 and $quincena == 1 and $key['cedula'] == 11801533){
                    $vacaciones = 3448494.35;
                }

                if($mes == 2 and $quincena == 1 and $key['cedula'] == 14793913){
                    $vacaciones = 1353725.33;
                }

                $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                $total_asignaciones = ($asignacion / 30) * $key['dias'];
                

                 /*if($key['cedula'] == 11801533){
                        $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $vacaciones + 62499.98;
                 } else{
                    $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad +
                            $vacaciones;
                     }*/

                     $asignaciones = $total_asignaciones + $vacaciones;

                     if($mes == 2 and $quincena == 1 and $key['cedula'] == 11801533){
                        $asignaciones =  3679599.35;
                    }

                    if($mes == 2 and $quincena == 1 and $key['cedula'] == 14793913){
                        $asignaciones = 1459830.333;
                    }
                 

                            @$t_sueldo_base += $sueldo_base;
                            @$t_becas += $becas;
                            @$t_prima_hijos  += $prima_hijos;
                            @$t_prima_antiguedad  += $prima_antiguedad;
                            @$t_prima_profesion  += $prima_profesion;
                            @$t_prima_hogar  += $prima_hogar;
                            @$t_bono_estabilidad  += $bono_estabilidad;
                            @$t_horas_extras  += $horas;

                            @$t_vacaciones  += $vacaciones;
                            @$t_asignaciones  += $asignaciones;
                            @$t_asignacion  += $total_asignaciones;

               } 



       

        /*======================================================================================================*/

                if($key['dias'] != 0){
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
                    $pdf -> Cell(17,5, $this->moneda($horas),1,0,'R');
                    $pdf -> Cell(16,5, $this->moneda(@$prima_profesion),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$prima_hijos),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
                    $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$becas),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$bono_estabilidad),1,0,'R');
                    $pdf -> Cell(40,5, $this->moneda(@$total_asignaciones),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$vacaciones),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$asignaciones),1,1,'R');

                }

                //$this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $asignaciones);

                    /*======================================================================================================*/
                    /*====================================== TOTAL EN COLUMNAS ============================================*/
                   
                


            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$q['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$q['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
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
            $pdf -> Cell(17,5, $this->moneda($t_horas_extras),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda($t_prima_profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda($t_prima_hijos ),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_prima_antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda($t_prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda($t_becas),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_bono_estabilidad),1,0,'R');
            $pdf -> Cell(40,5, $this->moneda($t_asignacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_vacaciones),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda($t_asignaciones),1,1,'R');

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

    public function DeduccionesObrerosFijos($tp = null, $mes = null, $quincena = null, $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivos = $this->ViewMrrhhDirectivosAux->find('all');


        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_DeduccionesObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

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

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {

            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            $sueldo_base = $key['sueldo_base']; 

             if($key['requisicion'] >1122){

           if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;

            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;
        } else {
            if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

            if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

            if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

            if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;

            if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;
        } 

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //$sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                //$prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                //$prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }


             /*======================================================================================================*/
            /*=============================================== PRIMAS ===============================================*/

            if($key['requisicion'] >1122){
                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 ) $prima_hijos = ( 62500 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 62500 ; else $prima_hogar = 0;
            }

            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if($key['cedula'] == 11137031 ){
                $deduccion_caja = 18729.17;
            }else{
                if ($key['caja_ahorro'] != 0 ) 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;
            }

            if($key['funeraria'] != 0 ) 
                $funeraria = (40000/30) * $key['dias']; 
            else $funeraria = 0;

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;


           $total = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
            if($key['dias'] != 0){

                    $pdf -> SetFont('Arial','',6);
                    $pdf -> SetX(5);
                    $pdf -> Cell(6,5, ++$i ,1,0,'C');
                    $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
                    $pdf -> Cell(30,5, $key['apellidos'],1,0,'R');
                    $pdf -> Cell(30,5, $key['nombres'],1,0,'R');
                    $pdf -> SetFont('Arial','',6);
                    $pdf -> Cell(15,5, $this->moneda(@$deduccion_sso),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$deduccion_rpe),1,0,'R');
                    $pdf -> Cell(15,5, $this->moneda(@$faov),1,0,'R');
                    $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$asociacion),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
                    $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

                    @$t_sso += $deduccion_sso;
                    @$t_rpe += $deduccion_rpe;
                    @$t_faov += $faov;
                    @$t_caja += $deduccion_caja;
                    @$t_funeraria += $funeraria;
                    @$t_asociacion += $asociacion;
                    @$t_sindicato += $sindicato;
                    @$t_total += $total;
            }


            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

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
            $pdf -> Cell(20,5, $this->moneda(@$t_funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_asociacion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_sindicato),1,0,'R');
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

    public function AportePatronalObrerosFijos($tp = null, $mes = null, $quincena = null, $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivos = $this->ViewMrrhhDirectivosAux->find('all');

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AportePatronalObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();
        

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
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

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {

              $sueldo_base = $key['sueldo_base']; 
              $dias = $key['dias'];

                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']) ; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']) ; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']) ; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']) ; else $inicial = 0;

                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //$sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                //$prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                //$prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }


                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;

                $prima_profesion = $key['prima_profesion'] * 2;
                $prima_antiguedad = $key['prima_antiguedad'] * 2;

                $horas = $key['horas_extras']; 

              $aporte_patronal_asso = (($sueldo_base / 30) * 0.09) * $dias;
              $aporte_patronal_arpe = (($sueldo_base / 30) * 0.017) * $dias;

              $afaov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.02) / 30) * $key['dias']; 

              // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $afaov = 20937.28;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $afaov = 8219.05;

              if ($key['caja_ahorro'] != 0 ) 
                    $aporte_deduccion_caja = (($sueldo_base / 30) * 0.15) * $dias; 
                else $aporte_deduccion_caja = 0;

                

              $total =
                    $aporte_patronal_asso +
                    $aporte_patronal_arpe +
                    $aporte_deduccion_caja +
                    $afaov;




              if($key['dias'] != 0){

                $pdf -> SetX(5);
                $pdf -> Cell(6,5, ++$i,1,0,'C');
                $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
                $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(30,5, $this->mayus(substr($key['cargo'],1,45)),1,0,'R');
                $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
                $pdf -> Cell(16,5, $this->moneda(@$aporte_patronal_asso),1,0,'R');
                $pdf -> Cell(15,5, $this->moneda(@$aporte_patronal_arpe),1,0,'R');
                $pdf -> Cell(15,5, $this->moneda(@$afaov),1,0,'R');
                $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
                $pdf -> Cell(17,5, $this->moneda(@$total),1,0,'R');
                $pdf -> ln();

                    $t_asso += $aporte_patronal_asso; 
                    $t_arpe += $aporte_patronal_arpe;
                    $t_afaov += $afaov;
                    $t_caja += $aporte_deduccion_caja;
                    $t_total += $total;

                    $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $t_total);
               
              }

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones  Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(133,5,'TOTAL:',1,0,'C');
        $pdf -> Cell(16,5, $this->moneda(@$t_asso),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_arpe),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda(@$t_total),1,1,'R');


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

    public function NetoCobrarObrerosFijos($tp = null, $mes = null, $quincena = null, $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivos = $this->ViewMrrhhDirectivosAux->find('all');

        $m = $mes;
        $q = $quincena;

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_NetoCobrarObrerosFijos('L','mm',array(300,250));
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        foreach ($data as $key) {


                if($key['requisicion'] == 531){
                    $sueldo_base = $key['sueldo_base'];
                }else{
                    $sueldo_base = ($key['sueldo_base'] / 30) *  $key['dias'];

                }

               if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias'] ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias'] ; else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias'] ; else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias'] ; else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias'] ; else $inicial = 0;


                 $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;

                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //$sueldo_base = ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                //if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                //$prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                //$prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }

                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/

               // if($key['hijos'] != 0 ) $prima_hijos = (( 100000 * $key['hijos']) / 30) * $key['dias'] ; else $prima_hijos = 0;
               // if($key['prima_hogar'] != 0 ) $prima_hogar = (100000 / 30) * $key['dias'] ; else $prima_hogar = 0;

                //$prima_profesion = (($key['prima_profesion'] * 2) / 30) * $key['dias'];
               // $prima_antiguedad = (($key['prima_antiguedad'] * 2) / 30) * $key['dias'];

                //EN ESTE CASO YA QUE EL SISTEMA NO TIENE REGISTROS DE HORAS EXTRAS DEL MES PASADO
                $horas = $key['horas_extras'];

                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }

        
        //$horas = $horasd + $horasn + $horash;

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

              

                $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                $total_asignaciones = ($asignacion / 30) * $key['dias'];

                $valor = $total_asignaciones + $vacaciones;
                

                 /*if($key['cedula'] == 11801533){
                        $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $vacaciones + 62499.98;
                 } else{
                    $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad +
                            $vacaciones;
                     }*/

                    $total_asignaciones = ($asignacion / 30) * $key['dias'];

                     if($m == 2 and $q == 1 and $key['cedula'] == 11801533){
                        $asignacion =  3679599.35;
                    }

                    if($m == 2 and $q == 1 and $key['cedula'] == 14793913){
                    $asignacion = 1459830.333;
                }
       

        /*======================================================================================================*/

            $sueldo_base = $key['sueldo_base']; 

             if($key['requisicion'] >1122){

               if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;

                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;
            } else {
                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;

                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;

                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;

                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;

                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;
            } 

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;


             /*======================================================================================================*/
            /*=============================================== PRIMAS ===============================================*/

            if($key['requisicion'] >1122){
                if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;
            } else {
                if($key['hijos'] != 0 ) $prima_hijos = ( 62500 * $key['hijos']) ; else $prima_hijos = 0;
                if($key['prima_hogar'] != 0 ) $prima_hogar = 62500 ; else $prima_hogar = 0;
            }

            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = (((($sueldo_base ) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if($key['cedula'] == 11137031 ){
                $deduccion_caja = 18729.17;
            }else{
                if ($key['caja_ahorro'] != 0 ) 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;
            }

            if($key['funeraria'] != 0 ) 
                $funeraria = (40000/30) * $key['dias']; 
            else $funeraria = 0;

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;


           $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

            /*=====================================================================================================================================*/

            $neto = $asignacion - $deduccion;

            /*======================================================================================================================================*/
            if($key['dias'] != 0){

                $pdf -> SetFont('Arial','',8);
                $pdf -> SetX(10);
                $pdf -> Cell(10,5, ++$i,1,0,'C');
                $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
                $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'J');
                $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
                $pdf -> Cell(30,5, $this->moneda(@$valor),1,0,'R');
                $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
                $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

                $t_incremento += $sueldo_base;
                $t_asignacion += $asignacion;
                $t_deduccion += $deduccion;
                $t_neto += $neto;

                $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $t_neto);
            }

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(135);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');

                $pdf->ln();
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

    public function AcumuladoObrerosFijos($tp = null, $mes = '', $quincena = '', $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
        $directivos = $this->ViewMrrhhDirectivosAux->find('all');

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
        $pdf -> Cell(80,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'Correspondiente al lapso Desde:' . '  ' .'0'.$quincena['fecha_desde'].'/'.date('m').'/'.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'.ANO_FISCAL,0,1,'C');

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,''.'Asignaciones',0,0);
        $pdf -> Cell(30,5,''.'Deducciones',0,0);
        $pdf -> Cell(30,5,''.'Patronales',0,0);

        $pdf -> ln();

        $i = 0;
        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_hijos2  = 0;

        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_prima_hogar2  = 0;
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
        $t_prueba  = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        $t_becas = 0;
        $t_becas1 = 0;

        $t_horas = 0;

        $t_bono_estabilidad = 0;
         $var1 = 0;
         $var1 = 0;
         $var1 = 0;


        foreach ($data as $key) {
                if($key['dias']){
                    ++$i;
                }
            
                $horas = $key['horas_extras'];
                
                $sueldo_base = $key['sueldo_base'];
                $sueldo = ($key['sueldo_base'] / 30) * $key['dias'];


            

            if($key['requisicion'] >1122){

                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;

                 if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad1 = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias']; else $discapacidad1 = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria1 = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias']; else $universitaria1 = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria1 = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias']; else $secundaria1 = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria1 = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias']; else $primaria1 = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial1 = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias']; else $inicial1 = 0;

            } else {
                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;

                 if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad1 = ((62500 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias']; else $discapacidad1 = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria1 = ((62500 * $key['cantidad_beca_universitaria']) / 30) * $key['dias']; else $universitaria1 = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria1 = ((62500 * $key['cantidad_beca_secundaria']) / 30) * $key['dias']; else $secundaria1 = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria1 = ((62500 * $key['cantidad_beca_primaria']) / 30) * $key['dias']; else $primaria1 = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial1 = ((62500 * $key['cantidad_beca_inicial']) / 30) * $key['dias']; else $inicial1 = 0;
            }

            $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
          
            $becas1 = $inicial1 + $primaria1 + $secundaria1 + $universitaria1 + $discapacidad1;



                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }




                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/
                if($key['requisicion'] >1122){ 
                    if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']); else $prima_hijos = 0;
                    if($key['hijos'] != 0 ) $prima_hijos2 = (( 100000 * $key['hijos']) / 30) * $key['dias']; else $prima_hijos2 = 0;
                } else {
                    if($key['hijos'] != 0 ) $prima_hijos = ( 62500 * $key['hijos']); else $prima_hijos = 0;
                    if($key['hijos'] != 0 ) $prima_hijos2 = (( 62500 * $key['hijos']) / 30) * $key['dias']; else $prima_hijos2 = 0;
                }

                if($key['requisicion'] >1122){ 
                    if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;
                    if($key['prima_hogar'] != 0 ) $prima_hogar2 = (100000 / 30) * $key['dias'] ; else $prima_hogar2 = 0;
                } else {
                    if($key['prima_hogar'] != 0 ) $prima_hogar = 62500 ; else $prima_hogar = 0;
                    if($key['prima_hogar'] != 0 ) $prima_hogar2 = (62500 / 30) * $key['dias'] ; else $prima_hogar2 = 0;
                }


                

                $prima_profesion = ($key['prima_profesion'] * 2);
                $prima_profesion2 = (($key['prima_profesion'] * 2) / 30) * $key['dias'];


                $prima_antiguedad = ($key['prima_antiguedad'] * 2);
                $prima_antiguedad2 = (($key['prima_antiguedad'] * 2) / 30) * $key['dias'];
             

                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }


                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad2 = (($sueldo_base  * 0.40) / 30) * $key['dias'];
                }


        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            if($key['dias'] != 0){

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);

                
                 $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                    //$total_asignaciones = $asignacion;
                    $total_asignaciones = ($asignacion / 30) * $key['dias'];
                

                     $asignaciones = $total_asignaciones + $vacaciones;

                            @$t_sueldo_base += $sueldo_base;
                            @$t_sueldo += $sueldo;

                            @$t_becas += $becas;
                            @$t_becas1 += $becas1;

                            @$t_prima_hijos  += $prima_hijos;
                            @$t_prima_hijos2  += $prima_hijos2;

                            @$t_prima_hogar  += $prima_hogar;
                            @$t_prima_hogar2  += $prima_hogar2;
                            
                            @$t_prima_profesion  += $prima_profesion;
                            @$t_prima_profesion2  += $prima_profesion2;

                            @$t_prima_antiguedad  += $prima_antiguedad;
                            @$t_prima_antiguedad2  += $prima_antiguedad2;


                            @$t_bono_estabilidad  += $bono_estabilidad;
                            @$t_bono_estabilidad2  += $bono_estabilidad2;

                            @$t_horas += $horas;         

                            @$t_vacaciones  += $vacaciones;
                            @$t_asignacion  += $total_asignaciones;
                            @$t_asignaciones  += $asignaciones;

               } 
          


            //===============================================================================================


            $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if ($key['caja_ahorro'] != 0  and $key['dias'] != 0) 
                    //$deduccion_caja = (($key['deduccion_caja_ahorro']) / 30) * $key['dias']; 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;

            if($key['requisicion'] >1122){ 
                if($key['funeraria'] != 0 ) 
                    $funeraria = (40000/30) * $key['dias']; 
                else $funeraria = 0;
            } else {
                if($key['funeraria'] != 0 ) 
                    $funeraria = (20000/30) * $key['dias']; 
                else $funeraria = 0;
            }

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;



           $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

                    @$t_sso += $deduccion_sso;
                    @$t_rpe += $deduccion_rpe;
                    @$t_faov += $faov;
                    @$t_caja += $deduccion_caja;
                    @$t_funeraria += $funeraria;
                    @$t_sindicato += $sindicato;
                    @$t_asociacion += $asociacion;


            if($key['requisicion'] == 898){
                $t_faov = 25324.73;
                $t_funeraria = 102666.67;
            }

                
            //=======================================================================================================

              $aporte_patronal_asso = (($sueldo_base / 30) * 0.09) * $key['dias'];
              $aporte_patronal_arpe = (($sueldo_base / 30) * 0.017) * $key['dias'];

              if($key['cedula'] == 14610356){
                        $faov = 8518.23;
                    } else if($key['cedula'] == 16348608){
                        $faov = 8644.06;
                    } else {
                       $afaov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.02) / 30) * $key['dias']; 
                    }

              

              $aporte_deduccion_caja = (($sueldo_base / 30) * 0.10) * $key['dias'];

               // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $afaov = 20937.28;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $afaov = 29403.01;

              if ($key['caja_ahorro'] != 0 ) 
                    $aporte_deduccion_caja = (($sueldo_base / 30) * 0.15) * $key['dias']; 
                else $aporte_deduccion_caja = 0;



            if($key['dias'] != 0){
              $total =
                    $aporte_patronal_asso +
                    $aporte_patronal_arpe +
                    $aporte_deduccion_caja +
                    $afaov;
            }

                $t_asso += $aporte_patronal_asso; 
                $t_arpe += $aporte_patronal_arpe;
                $t_afaov += $afaov;
                $t_acaja += $aporte_deduccion_caja;

        }


            $var1 = $t_vacaciones + $t_asignacion;
            $var2 =  @$t_sso +  @$t_rpe + @$t_faov  + @$t_caja + @$t_funeraria + $t_sindicato + $t_asociacion;
            $var3 =  $t_asso  + $t_arpe + $t_afaov + $t_acaja;

          
        //if($key['requisicion'] == )

        $pdf -> SetFont('Arial','',9);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Vacaciones (Clausula N° 36)',0,0);
        $pdf -> Cell(30,4,'4.01.05.06.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_vacaciones),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Sueldo Base',0,0);
        $pdf -> Cell(30,4,'4.01.05.06.00',0,0);

        /* Calculo de totales por accion especifica*/
        //$pdf -> Cell(30,4, $this->moneda(6713200),0,0);
        //if($key['requisicion'] == 898) $t_sueldo_base = 1697833.33; 
        $pdf -> Cell(30,4, $this->moneda($t_sueldo),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1002',0,0);
        $pdf -> Cell(110,4,'Prima Por Hijo',0,0);
        $pdf -> Cell(30,4,'4.01.03.19.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_hijos2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1003',0,0);
        $pdf -> Cell(110,4,'Prima por Hogar',0,0);
        $pdf -> Cell(30,4,'4.01.03.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_hogar2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1004',0,0);
        $pdf -> Cell(110,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(30,4,'4.01.03.21.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_antiguedad2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1005',0,0);
        $pdf -> Cell(110,4,'Prima de Profesion',0,0);
        $pdf -> Cell(30,4,'4.01.03.22.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_prima_profesion2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);


        $pdf -> Cell(25,4,'1006',0,0);
        $pdf -> Cell(110,4,'Beca Escolares',0,0);
        $pdf -> Cell(30,4,'4.01.07.18.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_becas1),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'1006',0,0);
        $pdf -> Cell(110,4,'Bono Estabilidad Economica',0,0);
        $pdf -> Cell(30,4,'4.01.04.97.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono_estabilidad2),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'2001',0,0);
        $pdf -> Cell(110,4,'Seguro Social Obligatorio',0,0);
        $pdf -> Cell(30,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_sso),0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'2002',0,0);
        $pdf -> Cell(110,4,'Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(30,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_rpe),0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> Cell(25,4,'2003',0,0);
        $pdf -> Cell(110,4,'Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(30,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_faov),0,0);
        $pdf -> Cell(30,4,'',0,1);

        if($t_fpj != 0){
            $pdf -> Cell(25,4,'2004',0,0);
            $pdf -> Cell(110,4,'Fondo de Pension y Jubilacion',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_fpj),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_caja != 0){
            $pdf -> Cell(25,4,'2005',0,0);
            $pdf -> Cell(110,4,'Caja de Ahorros',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_caja),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_funeraria != 0){
            $pdf -> Cell(25,4,'2007',0,0);
            $pdf -> Cell(110,4,'Servicios Funerarios',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_funeraria),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_sindicato != 0){
            $pdf -> Cell(25,4,'2008',0,0);
            $pdf -> Cell(110,4,'SINDICATO',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_sindicato),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        if($t_asociacion != 0){
            $pdf -> Cell(25,4,'2009',0,0);
            $pdf -> Cell(110,4,'ACOFJAM',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_asociacion),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

         if($t_x_depositario != 0){
            $pdf -> Cell(25,4,'2010',0,0);
            $pdf -> Cell(110,4,'Depositario Judicial',0,0);
            $pdf -> Cell(30,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4,$this->moneda($t_x_depositario),0,0);
            $pdf -> Cell(30,4,'',0,1);
        }

        $pdf -> Cell(25,4,'3001',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal del SSO',0,0);
        $pdf -> Cell(30,4,'4.01.06.10.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_asso),0,1);

        $pdf -> Cell(25,4,'3002',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(30,4,'4.01.06.12.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_arpe),0,1);

        $pdf -> Cell(25,4,'3003',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(30,4,'4.01.06.13.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_afaov),0,1);

        if($t_afpj != 0){
            $pdf -> Cell(25,4,'3004',0,0);
            $pdf -> Cell(110,4,'Aporte Patronal del F.P.J',0,0);
            $pdf -> Cell(30,4,'4.01.06.03.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4,'',0,0);
            $pdf -> Cell(30,4, $this->moneda($t_afpj),0,1);
        }

        $pdf -> Cell(25,4,'3005',0,0);
        $pdf -> Cell(110,4,'Aporte Patronal de la Caja de Ahorros',0,0);
        $pdf -> Cell(30,4,'4.01.07.23.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4, $this->moneda($t_acaja),0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',9);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);


            if($key['requisicion'] == 898){
                $var2 =251751.02;
            }


            // ACOMODAR ESTO

             if($key['requisicion'] == 1040){
                $pdf -> Cell(30,4,$this->moneda(111772230.82),1,0);
                $pdf -> Cell(30,4,$this->moneda(301248.83),1,0);
                $pdf -> Cell(30,4,$this->moneda(302177.05),1,1);

                $pdf -> SetX(10);
                $pdf -> Cell(25,3,'',0,0);
                $pdf -> Cell(80,3,'',0,0);

                /* Se corre segun los datos insertados dentro de la base de Datos*/
                $pdf -> Cell(60,3,'Neto',0,0);

                $pdf -> Cell(30,4,$this->moneda(11470981.99),1,1);     
            } else{
                $pdf -> Cell(30,4,$this->moneda($var1),1,0);
                $pdf -> Cell(30,4,$this->moneda($var2),1,0);
                $pdf -> Cell(30,4,$this->moneda($var3),1,1);

                $pdf -> SetX(10);
                $pdf -> Cell(25,3,'',0,0);
                $pdf -> Cell(80,3,'',0,0);

                /* Se corre segun los datos insertados dentro de la base de Datos*/
                $pdf -> Cell(60,3,'Neto',0,0);

                $pdf -> Cell(30,4,$this->moneda(($var1) - $var2),1,1);
            }


            


           
        

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


            $pdf-> ln();
            $pdf-> ln();
            $pdf-> ln();
            $pdf-> ln();

            $pdf -> SetX(20);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(100);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(230);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(20);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(100);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(230);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');



        $pdf -> Output();
    }

    public function RequisionObrerosFijos($mes = '', $quincena = '', $requisicion = ''){

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

    public function ResumenNominaObrerosFijos($tp = null, $mes = '', $quincena = '', $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');

            $this->loadModel('ViewMrrhhDirectivosAux');
            $directivos = $this->ViewMrrhhDirectivosAux->find('all');


        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_ResumenNominaObrerosFijos();
  
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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
        $sueldo = 0;

        $i = 0;

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

        $diferencia_prima_profesion = 0;

         $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha.ANO_FISCAL.'  '.'Hasta:'.' '.$quincena['fecha_hasta'].$fecha.ANO_FISCAL,0,1,'C');
        

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $horasd = 0;
        $horasn = 0;
        $horash = 0;

        $asignacion = 0;
        $deduccion = 0;
        $neto = 0;

        $prima_hijos2 = 0;
        $prima_hogar2 = 0;

        $t_asignacion = 0; 

        foreach ($data as $key) {


            if($key['dias']){
                    ++$i;
                }
            
                $horas = $key['horas_extras'];
                
                $sueldo = ($key['sueldo_base'] / 30) * $key['dias'];

                $sueldo_base = $key['sueldo_base'];

            

            if($key['requisicion'] >1122){

                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (100000 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (100000 * $key['cantidad_beca_universitaria']); else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (100000 * $key['cantidad_beca_secundaria']); else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (100000 * $key['cantidad_beca_primaria']); else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (100000 * $key['cantidad_beca_inicial']); else $inicial = 0;

                 if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad1 = ((100000 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias']; else $discapacidad1 = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria1 = ((100000 * $key['cantidad_beca_universitaria']) / 30) * $key['dias']; else $universitaria1 = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria1 = ((100000 * $key['cantidad_beca_secundaria']) / 30) * $key['dias']; else $secundaria1 = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria1 = ((100000 * $key['cantidad_beca_primaria']) / 30) * $key['dias']; else $primaria1 = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial1 = ((100000 * $key['cantidad_beca_inicial']) / 30) * $key['dias']; else $inicial1 = 0;

            } else {
                if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad = (62500 * $key['cantidad_beca_discapacidad']) ; else $discapacidad = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria = (62500 * $key['cantidad_beca_universitaria']); else $universitaria = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria = (62500 * $key['cantidad_beca_secundaria']); else $secundaria = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria = (62500 * $key['cantidad_beca_primaria']); else $primaria = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial = (62500 * $key['cantidad_beca_inicial']); else $inicial = 0;

                 if($key['cantidad_beca_discapacidad'] !=0 ) $discapacidad1 = ((62500 * $key['cantidad_beca_discapacidad']) / 30) * $key['dias']; else $discapacidad1 = 0;
                if($key['cantidad_beca_universitaria'] !=0 ) $universitaria1 = ((62500 * $key['cantidad_beca_universitaria']) / 30) * $key['dias']; else $universitaria1 = 0;
                if($key['cantidad_beca_secundaria'] !=0 ) $secundaria1 = ((62500 * $key['cantidad_beca_secundaria']) / 30) * $key['dias']; else $secundaria1 = 0;
                if($key['cantidad_beca_primaria'] !=0 ) $primaria1 = ((62500 * $key['cantidad_beca_primaria']) / 30) * $key['dias']; else $primaria1 = 0;
                if($key['cantidad_beca_inicial'] !=0 ) $inicial1 = ((62500 * $key['cantidad_beca_inicial']) / 30) * $key['dias']; else $inicial1 = 0;
            }

            $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
          
            $becas1 = $inicial1 + $primaria1 + $secundaria1 + $universitaria1 + $discapacidad1;



                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                $prima_antiguedad += ($d['x_prima_antiguedad'] != 0) ? $d['prima_antiguedad'] : $d['x_prima_antiguedad'];
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }




                 /*======================================================================================================*/
                /*=============================================== PRIMAS ===============================================*/
                if($key['requisicion'] >1122){ 
                    if($key['hijos'] != 0 ) $prima_hijos = ( 100000 * $key['hijos']); else $prima_hijos = 0;
                    if($key['hijos'] != 0 ) $prima_hijos2 = (( 100000 * $key['hijos']) / 30) * $key['dias']; else $prima_hijos2 = 0;
                } else {
                    if($key['hijos'] != 0 ) $prima_hijos = ( 62500 * $key['hijos']); else $prima_hijos = 0;
                    if($key['hijos'] != 0 ) $prima_hijos2 = (( 62500 * $key['hijos']) / 30) * $key['dias']; else $prima_hijos2 = 0;
                }

                if($key['requisicion'] >1122){ 
                    if($key['prima_hogar'] != 0 ) $prima_hogar = 100000 ; else $prima_hogar = 0;
                    if($key['prima_hogar'] != 0 ) $prima_hogar2 = (100000 / 30) * $key['dias'] ; else $prima_hogar2 = 0;
                } else {
                    if($key['prima_hogar'] != 0 ) $prima_hogar = 62500 ; else $prima_hogar = 0;
                    if($key['prima_hogar'] != 0 ) $prima_hogar2 = (62500 / 30) * $key['dias'] ; else $prima_hogar2 = 0;
                }




                    $bono_estabilidad2 = (($sueldo_base  * 0.40) / 30) * $key['dias'];


                $prima_profesion = ($key['prima_profesion'] * 2);
                $prima_profesion2 = (($key['prima_profesion'] * 2) / 30) * $key['dias'];


                $prima_antiguedad = ($key['prima_antiguedad'] * 2);
                $prima_antiguedad2 = (($key['prima_antiguedad'] * 2) / 30) * $key['dias'];
             

                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                    $bono_estabilidad = $sueldo_base  * 0.40;
                }


                if($key['mes'] == 2 and $key['quincena'] == 1){
                    $bono_estabilidad = 0;
                }else{
                }


                $vacaciones2 = (($sueldo_base + ($key['prima_profesion'] * 2) + ($key['prima_antiguedad'] * 2) + $horas + $prima_hijos  + $prima_hogar) / 30) * $key['cantidad_dias'];

        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/

            if($key['dias'] != 0){

               $vacaciones = 
                    ((($sueldo_base + 
                    $prima_profesion + 
                    $prima_hijos + 
                    $prima_antiguedad + 
                    $prima_hogar +
                    $horas) / 30) * $key['cantidad_dias']);


                   /* if($key['cedula'] == 9524559){
                        $vacaciones = 1849041.83;
                    }

                    if($key['cedula'] == 11801533){
                        $vacaciones = 3448494.35;
                    }

                    if($key['cedula'] == 14793913){
                        $vacaciones = 1353725.33;
                    }*/


                
                 $asignacion = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad;

                    //$total_asignaciones = $asignacion;
                    $total_asignaciones = ($asignacion / 30) * $key['dias'];
                

                 /*if($key['cedula'] == 11801533){
                        $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $vacaciones + 62499.98;
                 } else{
                    $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $prima_hogar +
                            $becas +
                            $bono_estabilidad +
                            $vacaciones;
                     }*/

                     $asignaciones = $total_asignaciones + $vacaciones;

                            @$t_sueldo_base += $sueldo_base;
                            @$t_sueldo += $sueldo;

                            @$t_becas += $becas;
                            @$t_becas1 += $becas1;

                            @$t_prima_hijos  += $prima_hijos;
                            @$t_prima_hijos2  += $prima_hijos2;

                            @$t_prima_hogar  += $prima_hogar;
                            @$t_prima_hogar2  += $prima_hogar2;
                            
                            @$t_prima_profesion  += $prima_profesion;
                            @$t_prima_profesion2  += $prima_profesion2;

                            @$t_prima_antiguedad  += $prima_antiguedad;
                            @$t_prima_antiguedad2  += $prima_antiguedad2;


                            @$t_bono_estabilidad  += $bono_estabilidad;
                            @$t_bono_estabilidad2  += $bono_estabilidad2;

                            @$t_horas += $horas;         

                            @$t_vacaciones  += $vacaciones2;
                            @$t_asignacion  += $total_asignaciones;
                            @$t_asignaciones  += $asignaciones;


                            $var1 = $t_vacaciones + $t_prima_antiguedad + $t_prima_hijos2 + $t_prima_profesion + $t_bono_estabilidad;
                        }
               
          


            //===============================================================================================



                     $prima_profesion = $key['prima_profesion'] * 2;
            $prima_antiguedad = $key['prima_antiguedad'] * 2;

            $horas = $key['horas_extras']; 

            $deduccion_sso = (($sueldo_base / 30) * 0.04) *  $key['dias']; 
            $deduccion_rpe = (($sueldo_base / 30) * 0.005)  * $key['dias']; 

            $faov = ((($sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar + $horas) * 0.01) / 30) * $key['dias']; 

            // QUITAR
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  11801533) $faov = 10468.64;
            if($key['mes'] == 2 AND $key['quincena']  == 1 AND $key['cedula'] ==  14793913) $faov = 4109.53;

            if ($key['caja_ahorro'] != 0  and $key['dias'] != 0) 
                    //$deduccion_caja = (($key['deduccion_caja_ahorro']) / 30) * $key['dias']; 
                    $deduccion_caja = (($key['deduccion_caja_ahorro'] * 2) / 30) * $key['dias']; 
                else $deduccion_caja = 0;

            if($key['funeraria'] != 0 ) 
                $funeraria = (40000/30) * $key['dias']; 
            else $funeraria = 0;

            if($key['asociacion_funeraria'] != 0 ) 
                $asociacion = (0.2/30) * $key['dias']; 
            else $asociacion = 0;

            if($key['sindicato'] != 0 ) 
                $sindicato = ((400000/30) * 0.01) * $key['dias']; 
            else $sindicato = 0;



           $deduccion = 
                $deduccion_sso + 
                $deduccion_rpe + 
                $deduccion_caja + 
                $faov + 
                $funeraria + 
                $asociacion + 
                $sindicato;

                    @$t_sso += $deduccion_sso;
                    @$t_rpe += $deduccion_rpe;
                    @$t_faov += $faov;
                    @$t_caja += $deduccion_caja;
                    @$t_funeraria += $funeraria;
                    @$t_sindicato += $sindicato;
                    @$t_asociacion += $asociacion;


            if($key['requisicion'] == 898){
                $t_faov = 25324.73;
                $t_funeraria = 102666.67;
            }
                    @$t_deduccion += $deduccion;
            



            /*======================================================================================================*/
            /*====================================== NETO  =========================================

            
            /*================================================= REPEAT =================================================*/

                        foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                            }
                        }

            $sueldo_base = ($sueldo_base / 30) *  $key['dias'];

             if($key['requisicion'] == 898){
                $t_deduccion = 251751.02;
            }

        if($key['dias'] != 0){

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */



            $pdf -> SetX(5);
            $pdf -> Cell(130,3,$this->mayus('1001 Vacaciones (Clausula N° 36'),0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($vacaciones2),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'R');

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1002 Sueldo Base',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'R');


            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda(($prima_hogar / 30) * $key['dias']),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda(($prima_hijos / 30) * $key['dias']),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad2),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1007'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($bono_estabilidad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1008'.' Bono Estabilidad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($bono_estabilidad2),0,0,'R');
                $pdf -> Cell(30,3,' ',0,1,'R');
            }if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'R');
            }if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'R');
            }if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov),0,1,'R');
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
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($deduccion),1,1,'R');

            $neto = $asignaciones - $deduccion;

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');

             $y = $pdf -> GetY();
                if($y > 215){
                    $pdf -> AddPage();
                }

                if($y >215){
                    $pdf -> SetX(90);
                    $pdf -> SetFont('Arial','',8);
                    $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Vacaciones Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].''.$fecha.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].''.$fecha.ANO_FISCAL,0,1,'C');
                }
            }    
        }

        
        $pdf -> ln();
            $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetFont('Arial','B',8);
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL            ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_asignaciones).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'R');

                 $t_neto = $t_asignaciones - $t_deduccion;

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(30,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_neto),0,0,'R');


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

    


   

   
    
   







    //==================================================================================================================


    public function AsignacionesObrerosContratados($tp = null, $mes = null, $quincena = null, $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $data2 = $this->ViewMrrhhObrerosContratadosAux->find('all');
        

        $this->loadModel('Quincena');
        $q = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $m = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        if($m['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($m['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($m['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($m['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($m['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($m['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($m['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($m['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($m['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($m['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($m['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($m['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($m['denominacion'] == 'FEBRERO' AND $q['fecha_hasta'] == 30) $dia = 29; else $dia = $q['fecha_hasta']; 
            

        $pdf = new PDF_AsignacionesObrerosContratados('L','mm',array(420,250));
        $pdf -> AddPage();

        $pdf -> SetY(15);
        $pdf -> SetX(190);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(190);
         $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$q['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln(); 
        $pdf-> ln(); 
        
        $pdf -> SetFont('Arial','',6);  

        $i = 0;
        $alicuota_vacacional = 0;
        $alicuota_fin_ano = 0;
        $alicuota_dias = 0;
        $dia_bono = 0;

        $cargo = 0;

        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;
        $t_total = 0;
        $dias = 0;

        foreach ($data as $key) {

             
            
                foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){
                            $cargo = $key2['cargo'];
                            $anos = $key2['anos_servicio'];
                            $fecha_ingreso = $key2['fecha_ingreso_institucion'];
                            

                           if($key2['anos_servicio'] >= 0 AND $key2['anos_servicio'] <= 5){
                                $dia_bono = 45;
                            }else if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 11){
                                $dia_bono = 50;
                            }else if($key2['anos_servicio'] >= 12){
                                $dia_bono = 50;
                                $dia_bono = ($key2['anos_servicio'] - 10) + $dia_bono;
                            }


                            //$becas = $this->horasextras($key['cedula'], $tp, $mes);

                            $horasextras = $key['horas_extras'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        /*foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                $prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }*/

                        if($tp == 1 and $mes == 2 and $quincena == 1){
                            $prima_hogar = 0;
                        }

                        if($tp == 1 and $mes == 2 and $quincena == 1 and $key['cedula'] == 16102933) {
                            $prima_hijos = 100000.00;
                        }

                        if($tp == 1 and $mes == 2 and $quincena == 1 and $key['cedula'] == 11477544) {
                            $prima_antiguedad = 296400.00;
                        }

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $horasextras + 
                            $prima_hogar;
                        else $asignaciones = 0;

                        
                        //corregida PENDIENTE VALEEEE
                        if($dia_bono != 0 AND  $tp != 2){
                            $alicuota_vacacional = ((($asignaciones) / 30) * $dia_bono) / 12;
                        }else{
                            $alicuota_vacacional = 0;
                        }



                        if(!$key['alicuota_v']){
                            $alicuota_vacacional = 0;
                        }

                        
                        //corregida PENDIENTE VALEEEE
                        if($tp != 2){
                            $alicuota_fin_ano = ((( ($asignaciones)/ 30) * 120) / 12);
                        }else{
                            $alicuota_fin_ano = 0;
                        }



                        if(!$key['alicuota_f']){
                            $alicuota_fin_ano = 0;
                        }

                        if($tp != 3 and $key['alicuota'] == true){
                            $alicuota_dias = (($asignaciones / 30) * 5) / 12;
                        }else{$alicuota_dias =0;}

                         if(!$key['alicuota']){
                            $alicuota_dias = 0;
                        }

                        //============================================================

                        if($key2['anos_servicio'] >= 0 and $key2['anos_servicio'] <= 5){
                            $dias_disfrute = 20;
                        }if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 10){
                            $dias_disfrute = 25;
                        } if($key2['anos_servicio'] >= 11 AND $key2['anos_servicio'] <= 15){
                            $dias_disfrute = 30;
                        } if($key2['anos_servicio'] >= 16){
                            $dias_disfrute = 35;
                        }

                        //============================================================




                        $sueldo_integral = $asignaciones;

                        $sueldo_integral_diario = $sueldo_integral / 30;

                        if($tp == 2 and $key['dias_bono'] != 0){
                            $dias_disfrute = $key['dias_bono'];
                        }

                        if($key['disfrute_v'] == true){
                            $bono_disfrute = ($sueldo_integral / 30) * $dias_disfrute;
                        }else{
                            $bono_disfrute = 0;
                        }

                        if($tp == 2 and $key['dias_d'] != 0){
                            $dia_bono = $key['dias_d'];
                        }

                        if($key['bono_v'] != 0){
                            $bono_vacacional = ($sueldo_integral / 30) * $key['dias_d'];
                        }else{
                            $bono_vacacional = 0;
                        }


                        


                        $total = $bono_vacacional + $bono_disfrute;
                     }
                 }

                    if($key['dias_d'] != 0){
                        $pdf -> SetFont('Arial','',6);
                        $pdf -> SetX(5);
                        $pdf -> Cell(6,5, ++$i ,1,0,'C');
                        $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
                        $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
                        $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
                        $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
                        $pdf -> Cell(50,5, $this->mayus(substr($cargo,0,40)),1,0,'L');
                        $pdf -> Cell(17,5, $this->moneda(@$sueldo_base),1,0,'R');
                        $pdf -> Cell(16,5, $this->moneda(@$prima_profesion),1,0,'R');
                        $pdf -> Cell(15,5, $this->moneda(@$prima_hijos),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
                        $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$horasextras),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$alicuota_vacacional),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$alicuota_fin_ano),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$alicuota_dias),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$sueldo_integral),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$bono_vacacional),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$bono_disfrute),1,0,'R');
                        $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');


                        @$t_bono_vacacional += $bono_vacacional;
                        @$t_bono_disfrute += $bono_disfrute;
                        @$t_total += $total;

                        $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $total);
                    }
                    

        }

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(330,5, 'TOTAL',1,0,'C');
            $pdf -> Cell(20,5, $this->moneda(@$t_bono_vacacional),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_bono_disfrute),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');


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



    public function AcumuladoObrerosContratados($tp = null, $mes = null, $quincena = null, $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


         if($tp == 1){
            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $data2 = $this->ViewMrrhhEmpleadosFijosAux->find('all');
        }if($tp == 2){
            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $data2 = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
        }if($tp == 3){
            $this->loadModel('ViewMrrhhDirectivosAux');
            $data2 = $this->ViewMrrhhDirectivosAux->find('all');
        }if($tp == 4){
            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');
        }if($tp == 5){
            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $data2 = $this->ViewMrrhhObrerosContratadosAux->find('all');
        }


        $this->loadModel('Quincena');
        $q = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $m = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        if($m['denominacion'] == 'ENERO'){$fecha = '/01/';}
        if($m['denominacion'] == 'FEBRERO'){$fecha = '/02/';}
        if($m['denominacion'] == 'MARZO'){$fecha = '/03/';}
        if($m['denominacion'] == 'ABRIL'){$fecha = '/04/';}
        if($m['denominacion'] == 'MAYO'){$fecha = '/05/';}
        if($m['denominacion'] == 'JUNIO'){$fecha = '/06/';}
        if($m['denominacion'] == 'JULIO'){$fecha = '/07/';}
        if($m['denominacion'] == 'AGOSTO'){$fecha = '/08/';}
        if($m['denominacion'] == 'SEPTIEMBRE'){$fecha = '/09/';}
        if($m['denominacion'] == 'OCTUBRE'){$fecha = '/10/';}
        if($m['denominacion'] == 'NOVIEMBRE'){$fecha = '/11/';}
        if($m['denominacion'] == 'DICIEMBRE'){$fecha = '/12/';}

        if($m['denominacion'] == 'FEBRERO' AND $q['fecha_hasta'] == 30) $dia = 29; else $dia = $q['fecha_hasta']; 
            

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetY(20);
        $pdf -> SetX(135);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Pago de Vacaciones Correspondiente a la'.' '.$q['denominacion'].' '.'del mes de'.' '.$m['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(135);
         $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$q['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(110);
        //$pdf -> Cell(80,5,'Correspondiente al lapso Desde:' . '  ' .'0'.$quincena['fecha_desde'].'/'.date('m').'/'.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'.ANO_FISCAL,0,1,'C');

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,''.'Asignaciones',0,0);
        $pdf -> Cell(30,5,''.'Deducciones',0,0);
        $pdf -> Cell(30,5,''.'Patronales',0,0);

        $pdf -> ln();

        $i = 0;
        $t_total = 0;

        $t_sueldo_base = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;



        $i = 0;
        $alicuota_vacacional = 0;
        $alicuota_fin_ano = 0;
        $alicuota_dias = 0;
        $dia_bono = 0;

        $cargo = 0;

        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;
        $t_total = 0;
        $total = 0;
        $dias = 0;

        $asignacion = 0;
        $deduccion = 0;
        $deducciones = 0;
        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;


        foreach ($data as $key) {

             
            
                foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){
                            $cargo = $key2['cargo'];
                            $anos = $key2['anos_servicio'];
                            $fecha_ingreso = $key2['fecha_ingreso_institucion'];
                            

                           if($key2['anos_servicio'] >= 0 AND $key2['anos_servicio'] <= 5){
                                $dia_bono = 45;
                            }else if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 11){
                                $dia_bono = 50;
                            }else if($key2['anos_servicio'] >= 12){
                                $dia_bono = 50;
                                $dia_bono = ($key2['anos_servicio'] - 10) + $dia_bono;
                            }


                            //$becas = $this->horasextras($key['cedula'], $tp, $mes);

                            $horasextras = $key['horas_extras'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        /*foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                $prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }*/

                        if($tp == 1 and $mes == 2 and $quincena == 1){
                            $prima_hogar = 0;
                        }

                        if($tp == 1 and $mes == 2 and $quincena == 1 and $key['cedula'] == 16102933) {
                            $prima_hijos = 100000.00;
                        }

                        if($tp == 1 and $mes == 2 and $quincena == 1 and $key['cedula'] == 11477544) {
                            $prima_antiguedad = 296400.00;
                        }

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $horasextras + 
                            $prima_hogar;
                        else $asignaciones = 0;

                        
                        //corregida PENDIENTE VALEEEE
                        if($dia_bono != 0 AND  $tp != 2){
                            $alicuota_vacacional = ((($asignaciones) / 30) * $dia_bono) / 12;
                        }else{
                            $alicuota_vacacional = 0;
                        }



                        if(!$key['alicuota_v']){
                            $alicuota_vacacional = 0;
                        }

                        
                        //corregida PENDIENTE VALEEEE
                        if($tp != 2){
                            $alicuota_fin_ano = ((( ($asignaciones)/ 30) * 120) / 12);
                        }else{
                            $alicuota_fin_ano = 0;
                        }



                        if(!$key['alicuota_f']){
                            $alicuota_fin_ano = 0;
                        }

                        if($tp != 3 and $key['alicuota'] == true){
                            $alicuota_dias = (($asignaciones / 30) * 5) / 12;
                        }else{$alicuota_dias =0;}

                         if(!$key['alicuota']){
                            $alicuota_dias = 0;
                        }

                        //============================================================

                        if($key2['anos_servicio'] >= 0 and $key2['anos_servicio'] <= 5){
                            $dias_disfrute = 20;
                        }if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 10){
                            $dias_disfrute = 25;
                        } if($key2['anos_servicio'] >= 11 AND $key2['anos_servicio'] <= 15){
                            $dias_disfrute = 30;
                        } if($key2['anos_servicio'] >= 16){
                            $dias_disfrute = 35;
                        }

                        //============================================================




                        $sueldo_integral = $asignaciones;

                        $sueldo_integral_diario = $sueldo_integral / 30;

                        if($tp == 2 and $key['dias_bono'] != 0){
                            $dias_disfrute = $key['dias_bono'];
                        }

                        if($key['disfrute_v'] == true){
                            $bono_disfrute = ($sueldo_integral / 30) * $dias_disfrute;
                        }else{
                            $bono_disfrute = 0;
                        }

                        if($tp == 2 and $key['dias_d'] != 0){
                            $dia_bono = $key['dias_d'];
                        }

                        if($key['bono_v'] != 0){
                            $bono_vacacional = ($sueldo_integral / 30) * $key['dias_d'];
                        }else{
                            $bono_vacacional = 0;
                        }


                        


                        $total = $bono_vacacional + $bono_disfrute;
                     }

                }

                $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $total);

                if($key['dias_d'] != 0){
                    $i++;
                    $t_bono_vacacional += $bono_vacacional;
                    $t_bono_disfrute += $bono_disfrute;
                    @$neto += $total;
                }
        }

        $pdf -> SetFont('Arial','',9);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Bono Vacacional',0,0);
        $pdf -> Cell(30,4,'4.01.05.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono_vacacional),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);


        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1002',0,0);
        $pdf -> Cell(110,4,'Bono Especial para el Disfrute de Vacaciones',0,0);
        $pdf -> Cell(30,4,'4.01.05.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono_disfrute),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);
       

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',9);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);


        $pdf -> Cell(30,4,$this->moneda($neto),1,0);
        $pdf -> Cell(30,4,$this->moneda(0),1,0);
        $pdf -> Cell(30,4,$this->moneda(0),1,1);
       

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Neto',0,0);

        
        $pdf -> Cell(30,4,$this->moneda($neto),1,1);
        
        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


            $pdf-> ln();
            $pdf-> ln();
            $pdf-> ln();
            $pdf-> ln();

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(20);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(100);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(230);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetX(20);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(100);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(230);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');



        $pdf -> Output();
    }

    public function RequisionObrerosContratados($mes = '', $quincena = '', $requisicion = ''){

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
    $pdf -> MultiCell(200,5,'NOMINA DE OBREROS CONTRATADOS PAGO DE VACACIONES CORRESPONDIENTE A LA ' . $quincena['denominacion'].' '.'DEL MES DE '.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);



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

    public function ResumenNominaObrerosContratados($tp = null, $mes = null, $quincena = null, $x = false){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        if($x == true){
            $this->loadModel('ViewMrrhhVacacionesObrerosx');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObrerosx->find('all', ['conditions' => $condicion])->toArray();
        }else{
            $this->loadModel('ViewMrrhhVacacionesObreros');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'id_tipo_personal' => $tp];
            $data = $this->ViewMrrhhVacacionesObreros->find('all', ['conditions' => $condicion])->toArray();
        }


         if($tp == 1){
            $this->loadModel('ViewMrrhhEmpleadosFijosAux');
            $data2 = $this->ViewMrrhhEmpleadosFijosAux->find('all');
        }if($tp == 2){
            $this->loadModel('ViewMrrhhEmpleadosContratadosAux');
            $data2 = $this->ViewMrrhhEmpleadosContratadosAux->find('all');
        }if($tp == 3){
            $this->loadModel('ViewMrrhhDirectivosAux');
            $data2 = $this->ViewMrrhhDirectivosAux->find('all');
        }if($tp == 4){
            $this->loadModel('ViewMrrhhObrerosFijosAux');
            $data2 = $this->ViewMrrhhObrerosFijosAux->find('all');
        }if($tp == 5){
            $this->loadModel('ViewMrrhhObrerosContratadosAux');
            $data2 = $this->ViewMrrhhObrerosContratadosAux->find('all');
        }


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
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetY(15);
        $pdf -> SetX(85);
        $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de '.$mes['denominacion'].'  '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  


        $pdf -> SetY(20);
        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);

        /* if($quincena == 1){
            $q = 'PRIMERA QUINCENA';
        }else if($quincena == 2){
            $q = 'SEGUNDA QUINCENA';
        }

        if($mes == 1){
            $m = 'ENERO';
        }else if($mes == 2){
            $m = 'FEBRERO';
        }else if($mes == 3){
            $m = 'MARZO';
        }else if($mes == 4){
            $m = 'ABRIL';
        }
*/
        
        $t_sueldo_base = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;



        $i = 0;
        $alicuota_vacacional = 0;
        $alicuota_fin_ano = 0;
        $alicuota_dias = 0;
        $dia_bono = 0;

        $cargo = 0;

        $t_bono_vacacional = 0;
        $t_bono_disfrute = 0;
        $t_total = 0;
        $total = 0;
        $dias = 0;

        $asignacion = 0;
        $deduccion = 0;
        $deducciones = 0;

        foreach ($data as $key) {

             
            
                foreach ($data2 as $key2) {

                        if($key['cedula'] == $key2['cedula']){
                            $cargo = $key2['cargo'];
                            $anos = $key2['anos_servicio'];
                            $fecha_ingreso = $key2['fecha_ingreso_institucion'];
                            

                           if($key2['anos_servicio'] >= 0 AND $key2['anos_servicio'] <= 5){
                                $dia_bono = 45;
                            }else if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 11){
                                $dia_bono = 50;
                            }else if($key2['anos_servicio'] >= 12){
                                $dia_bono = 50;
                                $dia_bono = ($key2['anos_servicio'] - 10) + $dia_bono;
                            }


                            //$becas = $this->horasextras($key['cedula'], $tp, $mes);

                            $horasextras = $key['horas_extras'];

                         /*======================================================================================================*/
                        /*=============================================== PRIMAS ===============================================*/

                        if($key2['hijos'] != 0 AND $key2['status'] !=0) $prima_hijos = ( 100000 * $key2['hijos']); else $prima_hijos = 0;
                        if($key2['prima_hogar'] != 0 AND $key2['status'] !=0) $prima_hogar = 100000 ; else $prima_hogar = 0;
                        if($key2['status'] !=0) $prima_profesion = $key2['prima_profesion']*2; else $prima_profesion = 0;
                        if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad'] * 2; else $prima_antiguedad = 0;
                        if($key2['status'] !=0) $sueldo_base = $key2['sueldo_base'] ; else $sueldo_base = 0;

                        /*foreach ($directivos as $d) {
                            if($key['cedula'] == $d['cedula']){
                                $sueldo_base += ($d['sueldo'] != 0) ? $d['sueldo'] : $d['sueldo_base'];
                                if($key2['status'] !=0) $prima_antiguedad = $key2['prima_antiguedad']; else $prima_antiguedad = 0;
                                $prima_antiguedad += $d['x_prima_antiguedad'];
                                $prima_antiguedad = $prima_antiguedad * 2;
                                $prima_profesion = $d['prima_profesion'] * 2;
                            }
                        }*/

                        if($tp == 1 and $mes == 2 and $quincena == 1){
                            $prima_hogar = 0;
                        }

                        if($tp == 1 and $mes == 2 and $quincena == 1 and $key['cedula'] == 16102933) {
                            $prima_hijos = 100000.00;
                        }

                        if($tp == 1 and $mes == 2 and $quincena == 1 and $key['cedula'] == 11477544) {
                            $prima_antiguedad = 296400.00;
                        }

                        /*======================================================================================================*/
                        /*====================================== TOTAL ASIGNACIONES ============================================*/

                        if($key2['status'] !=0) $asignaciones = 
                            $sueldo_base + 
                            $prima_profesion + 
                            $prima_hijos + 
                            $prima_antiguedad + 
                            $horasextras + 
                            $prima_hogar;
                        else $asignaciones = 0;

                        
                        //corregida PENDIENTE VALEEEE
                        if($dia_bono != 0 AND  $tp != 2){
                            $alicuota_vacacional = ((($asignaciones) / 30) * $dia_bono) / 12;
                        }else{
                            $alicuota_vacacional = 0;
                        }



                        if(!$key['alicuota_v']){
                            $alicuota_vacacional = 0;
                        }

                        
                        //corregida PENDIENTE VALEEEE
                        if($tp != 2){
                            $alicuota_fin_ano = ((( ($asignaciones)/ 30) * 120) / 12);
                        }else{
                            $alicuota_fin_ano = 0;
                        }



                        if(!$key['alicuota_f']){
                            $alicuota_fin_ano = 0;
                        }

                        if($tp != 3 and $key['alicuota'] == true){
                            $alicuota_dias = (($asignaciones / 30) * 5) / 12;
                        }else{$alicuota_dias =0;}

                         if(!$key['alicuota']){
                            $alicuota_dias = 0;
                        }

                        //============================================================

                        if($key2['anos_servicio'] >= 0 and $key2['anos_servicio'] <= 5){
                            $dias_disfrute = 20;
                        }if($key2['anos_servicio'] >= 6 AND $key2['anos_servicio'] <= 10){
                            $dias_disfrute = 25;
                        } if($key2['anos_servicio'] >= 11 AND $key2['anos_servicio'] <= 15){
                            $dias_disfrute = 30;
                        } if($key2['anos_servicio'] >= 16){
                            $dias_disfrute = 35;
                        }

                        //============================================================




                        $sueldo_integral = $asignaciones;

                        $sueldo_integral_diario = $sueldo_integral / 30;

                        if($tp == 2 and $key['dias_bono'] != 0){
                            $dias_disfrute = $key['dias_bono'];
                        }

                        if($key['disfrute_v'] == true){
                            $bono_disfrute = ($sueldo_integral / 30) * $dias_disfrute;
                        }else{
                            $bono_disfrute = 0;
                        }

                        if($tp == 2 and $key['dias_d'] != 0){
                            $dia_bono = $key['dias_d'];
                        }

                        if($key['bono_v'] != 0){
                            $bono_vacacional = ($sueldo_integral / 30) * $key['dias_d'];
                        }else{
                            $bono_vacacional = 0;
                        }


                        


                        $total = $bono_vacacional + $bono_disfrute;
                     }
                
                
                 }

            if($key['dias_d'] != 0){
                $y = $pdf-> GetY();
                $pdf -> SetY($y+6.8);
                /*================================================= REPEAT =================================================*/
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetX(5);
                $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
                $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
                if ($key['sueldo'] != 0) {
                    $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo']),1,1,'L');
                }else{
                    $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
                }
           
                $pdf -> SetX(5);
                $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($cargo,0,35),0,40)),1,0,'L');
                
                $pdf -> Cell(50,4,'Fecha de Ingreso: '. $key['fecha_ingreso_institucion'],1,0,'L');
                $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

                $pdf -> SetFont('Arial','B',8);
                /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001'.'Bono Vacacional',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($bono_vacacional),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');

                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.'Bono Especial para el Disfrute de Vacaciones',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($bono_disfrute),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');

                $pdf-> ln();


                $pdf -> SetFont('Arial','B',8);
                $pdf -> SetX(15); 
                $pdf -> Cell(90,4,'',0,0,'L');
                $pdf -> Cell(30,4,'Totales',1,0,'C');
                $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');
                $pdf -> Cell(30,4, $this->moneda(0),1,1,'C');

                $pdf -> SetX(15); 
                $pdf -> Cell(90,4,'',0,0,'L');
                $pdf -> Cell(30,4,'Neto',1,0,'C');
                $pdf -> Cell(30,4, $this->moneda($total),1,0,'L');

                $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $total);

                $y = $pdf -> GetY();
                if($y > 215){
                    $pdf -> AddPage();
                }

                if($y > 215){
                    $pdf -> SetX(90);
                    $pdf -> SetFont('Arial','',8);
                    $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de  '.$mes['denominacion'].' '.' '.'del'.' '. ANO_FISCAL,0,1,'C');
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');   
                }

                @$neto += $total;
            }
        }


                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($neto).'    ',0,0,'R');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda(0),0,1,'R');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(26,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($neto),0,0,'R');


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


    //============================================ OBREROS NO PERMANETES  ======================================================================

    public function asignacionesNoPermanentes($mes = null, $quincena = null){

        $tps = $tp;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

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

        $pdf -> SetY(20);
        $pdf -> SetX(35);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(150,5,'Nomina: OBREROS NO PERMANETES (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(35);
        $pdf -> Cell(150,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].$fecha. ANO_FISCAL,0,1,'C');

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
                if($key['status'] != 0)$sueldo_base = (($key['dias_dejados_c'] * 400000) / 30); else $sueldo_base = 0;
            }else{
                $sueldo_base = $key['sueldo_base']/2;
            }

            if($key['status'] != 0) $total = $sueldo_base;

            $pdf -> SetX(5);
            $pdf -> Cell(6,5,++$i,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(25,5, '',1,1,'R');

            $t_sueldo_base += $sueldo_base;
            $t_total += $total;

            $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $total);

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(35);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(150,5,'Nomina: OBREROS NO PERMANETES (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(35);
                $pdf -> Cell(150,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].$fecha. ANO_FISCAL,0,1,'C');

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

    public function RequisionNoPermanentes($mes = '', $quincena = '', $requisicion = ''){

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
    $pdf -> MultiCell(180,5,'PAGO DE NOMINA A OBREROS NO PERMANENTES CORRESPONDIENTE A LA ' . $quincena['denominacion'].' '.'DEL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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

    public function AcumuladoObrerosNoPermanentes($mes = '', $quincena = '', $requisicion = ''){

        $tps = 6;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        $pdf ->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");


        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
        $pdf -> SetX(110);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(80,5,'Nomina: OBREROS NO PERMANENTES (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(110);
        $pdf -> Cell(80,5,'Correspondiente al lapso Desde:' . '  ' .'0'.$quincena['fecha_desde'].'/'.date('m').'/'.ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'.ANO_FISCAL,0,1,'C');

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(150);
        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(10);
        $pdf -> Cell(25,5,'Codigo',0,0);
        $pdf -> Cell(110,5,'concepto',0,0);
        $pdf -> Cell(30,5,'Cod. Presup',0,0);
        $pdf -> Cell(30,5,''.'Asignaciones',0,0);
        $pdf -> Cell(30,5,''.'Deducciones',0,0);
        $pdf -> Cell(30,5,''.'Patronales',0,0);

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

            $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $t_sueldo_base);

            $var1 = $t_sueldo_base;
         }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Sueldo Basico Tiempo Completo',0,0);
        $pdf -> Cell(30,4,'4.01.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_sueldo_base),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($var1),1,1);

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Neto',0,0);

        $pdf -> Cell(30,4,$this->moneda($var1),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(30,3,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


        $pdf -> ln();$pdf -> ln();$pdf -> ln();
        $pdf -> ln();$pdf -> ln();$pdf -> ln();
            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(40);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(130);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(210);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(40);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(130);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(210);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');


        $pdf -> Output();
    }




    public function ResumenNominaObrerosNoPermanentes($mes = '', $quincena = ''){

        $tps = 6;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoObrerosNoP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_ResumenNominaObrerosFijos();

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

     

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS NO PERMANENTES (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.'  Hasta:'.' '.$quincena['fecha_hasta'].$fecha. ANO_FISCAL,0,1,'C');


        $t_asignacion = 0;

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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($sueldo_base * 2),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');

            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'R');
            $pdf -> Cell(30,3,' ',0,1,'R');

            $pdf-> ln();
                

            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Totales',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($deducciones),1,1,'C');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'R');
            $pdf -> SetFont('Arial','',8);

            $this->monto_persona('VACACIONES', $key['cedula'], $tps, $ms, $qs, $neto);

            /* Linea de Corte*/
            $y = $pdf-> GetY();
            $pdf -> SetY($y+8);

             $y = $pdf -> GetY();
            if($y > 200){
                $pdf -> AddPage();
            }

            if($y > 200){
                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS NO PERMANENTES (Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].'/'.date('m').'/'. ANO_FISCAL.' '.'Hasta:'.' '.$quincena['fecha_hasta'].'/'.date('m').'/'. ANO_FISCAL,0,1,'C');
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
                 $pdf -> Cell(40,7,$this->moneda($t_asignacion).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'R');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(26,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_neto),0,0,'R');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');

            $pdf-> ln();
            $pdf-> ln();
           /*Igual que en todos los reporte en lugar de *ELABORADO POR* El nombre y apellido del usuario que Inicio sesion*/
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













    /* ==============================================================================================================*/
    /* ==============================================================================================================*/
    /* =================================== FIN DE REPORTES DE NOMINA ================================================*/
    /* ==============================================================================================================*/
    /* ==============================================================================================================*/



















     /*================================= OBREROS FIJOS =======================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadObrerosFijos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_BonoEstabilidadObrerosFijos();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'  del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL.')',0,1,'C');
        $pdf -> SetX(90);
        $pdf -> Cell(40,5,'',0,1,'C');
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',8);   

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
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,38)),1,0,'R');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($key['sueldo_base']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$bono),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $bono;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'  del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL.')',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();
            }

        }

        
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(161,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);

        $y = $pdf-> GetY();
        $pdf -> SetY($y+1);
        $pdf-> ln();
                $pdf-> ln();

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

    public function AcumuladoBonoEstabilidadObrerosFijos($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'Nomina: OBREROS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].' del mes de'.' '.$mes['denominacion'].' '.' del  '.' '. ANO_FISCAL.')',0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',0,0);
        $pdf -> Cell(110,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(30,4,'4.01.01.10.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_bono),0,0);
        $pdf -> Cell(30,4,'',0,0);
        $pdf -> Cell(30,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(60,4,'Cantidad de OBREROS',0,0);

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

    public function RequisionBonoObrerosFijos($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A OBREROS FIJOS CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEObrerosFijos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaObrerosFijos();
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
        $pdf-> ln();
        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: OBREROS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'del mes de'.' '.$mes['denominacion'].' '.' del '.' '. ANO_FISCAL.')',0,1,'C');
        
         
        $t_bono = 0;
        $total = 0;


        $t_asignacion = 0;
        $t_deduccion = 0;
        
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'R');

            

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'R');
    

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){

                $pdf-> ln();
                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'del mes de'.' '.$mes['denominacion'].' '.'del '.' '. ANO_FISCAL.')',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
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
                 $pdf -> Cell(40,7,$this->moneda($t_asignacion).'    ',0,0,'L');
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

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');


        $pdf -> Output();
    }


    /*================================= OBREROS CONTRATADOS =======================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadObrerosContratados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_BonoEstabilidadObrerosContratados();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

                $pdf -> SetY(20);
                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: EMPLEADOS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'del mes de'.' '.$mes['denominacion'].' '.'del '.' '. ANO_FISCAL.')',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();

        $pdf -> SetFont('Arial','B',8);   

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
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,38)),1,0,'R');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($key['sueldo_base']),1,0,'L');
            $pdf -> Cell(17,5, $this->moneda(@$bono),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $bono;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: EMPLEADOS FIJOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'del mes de'.' '.$mes['denominacion'].' '.'del '.' '. ANO_FISCAL.')',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();
            }
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

        $pdf-> ln();
        $pdf-> ln();
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

    public function AcumuladoBonoEstabilidadObrerosContratados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'Nomina: OBREROS CONTRATADOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].'del mes de'.' '.$mes['denominacion'].' '.'del '.' '. ANO_FISCAL.')',0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(60,4,'Cantidad de OBREROS',0,0);

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

    public function RequisionBonoObrerosContratad($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A OBREROS CONTRATADOS CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEObrerosContratados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaObrerosFijos();
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

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: OBREROS CONTRATADOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].' del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'R');
    

             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(20);
                $pdf -> SetX(85);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS CONTRATADOS (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].' del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
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
                 $pdf -> Cell(40,7,$this->moneda($t_asignacion).'    ',0,0,'L');
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

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(5);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');


        $pdf -> Output();
    }


    /*================================= OBREROS NO PERMANENTES ================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadObrerosNP($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoEstabilidadObrerosNP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

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
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,38)),1,0,'R');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($key['sueldo_base']),1,0,'L');
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

    public function AcumuladoBonoEstabilidadObrerosNP($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'Nomina: OBREROS NO PERMANENTES (Pago de Bono de Estabilidad Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(60,4,'Cantidad de OBREROS',0,0);

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

    public function RequisionBonoObrerosNP($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ESTABILIDAD ECONOMICA A OBREROS NO PERMANENTES CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenBEObrerosNP($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaObrerosFijos();
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
        $pdf -> Cell(30,5,'Nomina: OBREROS NO PERMANENTES (Pago de Bono de Estabilidad Economica Correspondiente a la '.$quincena['denominacion'].' del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'R');

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'R');
    

             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetY(15);
                $pdf -> SetX(90);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,'Nomina: OBREROS NO PERMANENTES (Pago de Bono de Estabilidad Economica Correspondiente a la  '.$quincena['denominacion'].  ' mes de ' .''.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL.')',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
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
                 $pdf -> Cell(40,7,$this->moneda($t_asignacion).'    ',0,0,'L');
                 $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
                 $pdf -> Cell(20,7,$this->moneda($t_deduccion),0,1,'R');

                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'',0,0,'L');
                 $pdf -> Cell(26,7,'Neto a Pagar',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_neto),0,0,'R');


                 $pdf -> ln();
                 $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


        $pdf -> ln();
            $pdf -> ln();
            $pdf -> ln();
            $pdf -> ln();

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


        /*==================================== OBREROS FIJOS ====================================*/
        /*============================== BONO DE ASISTENCIA MEDICA ================================*/
        /*=========================================================================================*/
    public function BonoAMObrerosFijos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoAMObrerosFijos();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,36)),1,0,'R');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
        }

        
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(166,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(17,5, $this->moneda($t_asistencia),1,0,'R');
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


    public function AcumuladoBonoAMObrerosFijos($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'Nomina: OBREROS FIJOS (Pago de Bono de Asistencia Medica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        
        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            ++$i;

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',1,0);
        $pdf -> Cell(110,4,'Bono de Asistencia Medica',1,0);
        $pdf -> Cell(30,4,'4.01.04.96.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_asistencia),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asistencia),1,0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(115);
        $pdf -> Cell(60,4,'Neto',0,0);
        $pdf -> Cell(30,4,$this->moneda($t_total),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(30,4,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> Output();
    }

    public function RequisionBonoAMObrerosFijos($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ASISTENCIA MEDICA A OBREROS FIJOS CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenAMObrerosFijos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: OBREROS FIJOS (Pago de Bono de Asistencia Medica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
         
         
             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'R');


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'R');

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


        /*==================================== OBREROS CONTRATADOS ====================================*/
        /*============================== BONO DE ASISTENCIA MEDICA ================================*/
        /*=========================================================================================*/
    public function BonoAMObrerosContratados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoAMObrerosContratados();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,36)),1,0,'R');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
        }

        
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(166,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(17,5, $this->moneda($t_asistencia),1,0,'R');
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


    public function AcumuladoBonoAMObrerosContratados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'Nomina: OBREROS CONTRATADOS (Pago de Bono de Asistencia Medica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        
        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            ++$i;

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',1,0);
        $pdf -> Cell(110,4,'Bono de Asistencia Medica',1,0);
        $pdf -> Cell(30,4,'4.01.04.96.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_asistencia),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asistencia),1,0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(115);
        $pdf -> Cell(60,4,'Neto',0,0);
        $pdf -> Cell(30,4,$this->moneda($t_total),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(30,4,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> Output();
    }

    public function RequisionBonoAMObrerosContratados($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ASISTENCIA MEDICA A OBREROS CONTRATADOS CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenAMObrerosContratados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: OBREROS CONTRATADOS (Pago de Bono de Asistencia Medica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
         
         
             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'R');


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'R');

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


       /*==================================== OBREROS NO PERMANENTES ==============================*/
        /*============================== BONO DE ASISTENCIA MEDICA ================================*/
        /*=========================================================================================*/
    public function BonoAMObrerosNP($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

        $pdf = new PDF_BonoAMObrerosNP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;


            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,36)),1,0,'R');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
        }

        
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(166,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(17,5, $this->moneda($t_asistencia),1,0,'R');
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


    public function AcumuladoBonoAMObrerosNP($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

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
        $pdf -> Cell(80,5,'Nomina: OBREROS NO PERMANENTES (Pago de Bono de Asistencia Medica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');

        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
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
        $pdf -> Cell(10,4,'52',0,0);
        $pdf -> Cell(120,4,'SEGURIDAD SOCIAL A OBREROS',0,0);

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
        
        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            ++$i;

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',6);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'1001',1,0);
        $pdf -> Cell(110,4,'Bono de Asistencia Medica',1,0);
        $pdf -> Cell(30,4,'4.01.04.96.00',1,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(30,4, $this->moneda($t_asistencia),1,0);
        $pdf -> Cell(30,4,'',1,0);
        $pdf -> Cell(30,4,'',1,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(60,3,'Totales',0,0);

        $pdf -> Cell(30,4,$this->moneda($t_asistencia),1,0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(115);
        $pdf -> Cell(60,4,'Neto',0,0);
        $pdf -> Cell(30,4,$this->moneda($t_total),1,1);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(60,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(30,4,$i,1,0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
        $pdf -> Output();
    }

    public function RequisionBonoAMObrerosNP($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(180,5,'PAGO DE BONO DE ASISTENCIA MEDICA A OBREROS NO PERMANENTES CORRESPONDIENTE AL MES DE'.' '. $mes['denominacion'].' '. 'DEL'. ' '. ANO_FISCAL,0,'L',0);


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


    public function ResumenAMObrerosNP($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(90);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(30,5,'Nomina: OBREROS NO PERMANENTES (Pago de Bono de Asistencia Medica Correspondiente al mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,1,'C');
        
         
        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_asistencia  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;

            @$t_sueldo_base += $sueldo_base;
            @$t_asistencia += $asistencia;
            @$t_total  += $total;
         
         
             $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);

            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(50,4,'Tipo Personal: '. $this->mayus($key['grupo'].' - '.$key['denominacion_grado_nivel']),1,0,'L');
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'R');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'R');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(30,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'R');


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($total),1,0,'R');

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
