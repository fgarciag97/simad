<?php
namespace App\Controller;

use App\Controller\AppController;


/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ASISTENCIA MEDICA =================*/
/*=========================================================================================*/

class PDF_BonoAMEmpleadosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS FIJOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoAMEmpleadosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS CONTRATADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoAMEmpleadosDirectivos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'PERSONAL DIRECTIVO',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}





/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ASISTENCIA MEDICA =================*/
/*=========================================================================================*/

class PDF_BonoAMObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoAMObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoAMObrerosNP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS NO PERMANENTES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class PDF_ResumenAMFijos extends \FPDF {
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




/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ASISTENCIA MEDICA =================*/
/*=========================================================================================*/


class PDF_BonoAMEmpleadosPensionados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoAMEmpleadosPensionadosEspeciales extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS ESPECIALES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoAMEmpleadosPensionadosSObrevivientes extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS SOBREVIVIENTES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoAMObrerosPensionadosEspeciales extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS PENSIONADOS ESPECIALES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoAMObrerosPensionadosSobrevivientes extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS PENSIONADOS SOBREVIVIENTES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}




/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ASISTENCIA MEDICA =================*/
/*=========================================================================================*/

class PDF_BonoAMJubiladosEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS JUBILADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoAMJubiladosObreros extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS JUBILADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO ASISTENCIA MEDICA',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
        $this->SetY(35);
        $this->SetX(106);
        $this->MultiCell(50,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(156);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(17,10,'BONO A.M',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class MRRHHAsistenciaMedicaReporteController extends AppController
{

        public function BonoAMEmpleadosFijos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMEmpleadosFijos($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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





    public function RequisionBonoAMEMpleadosFijos($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS FIJOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMEmpleadosFijos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosFijos->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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

    public function BonoAMEmpleadosContratados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMEmpleadosContratados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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





    public function RequisionBonoAMEMpleadosContratados($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS CONTRATADOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMEmpleadosContratados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosC->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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


    public function BonoAMDirectivos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmDirectivos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMDirectivos($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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





    public function RequisionBonoAMDirectivos($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA PERSONAL DIRECTIVO POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMDirectivos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmDirectivos->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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


    public function BonoAMObrerosFijos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS FIJOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMObrerosFijos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosFijos->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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



     public function BonoAMObrerosContratados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS CONTRATADOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMObrerosContratados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosC->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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




    public function BonoAMObrerosNP($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS NO PERMANENTES POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMObrerosNP($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmObrerosNoP->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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




    public function BonoAMJubiladosEmpleados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistoricoEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoEJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMJubiladosEmpleados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEJubilados->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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





    public function RequisionBonoAMJubiladosEmpleados($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS JUBILADOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMJubiladosEmpleados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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



    public function BonoAMJubiladosObreros($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistoricoOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoOJubilados->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMJubiladosObreros($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOJubilados->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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





    public function RequisionBonoAMJubiladosObreros($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS JUBILADOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMJubiladosObreros($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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



    public function BonoAMEmpleadosPensionados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMEmpleadosPensionados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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





    public function RequisionBonoAMEmpleadosP($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS PENSIONADOS POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMEmpleadosPensionados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEmpleadosP->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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


    public function BonoAMEmpleadosPensionadosE($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMEmpleadosPensionadosE($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEPEsp->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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



    public function RequisionBonoAMEmpleadosPE($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS PENSIONADOS ESPECIALES POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMEmpleadosPensionadosE($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEPEsp->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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


    public function BonoAMEmpleadosPensionadosS($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEPSobre->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMEmpleadosPensionadosS($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEPSobre->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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



    public function RequisionBonoAMEmpleadosPS($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS PENSIONADOS SOBREVIVIENTES POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMEmpleadosPensionadosS($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmEPSobre->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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


    public function BonoAMObrerosPensionadosSobrevivientes($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOPSobre->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMObrerosPensionadosSobrevivientes($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOPSobre->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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



    public function RequisionBonoAMObrerosPE($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS PENSIONADOS SOBREVIVIENTES POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMObrerosPensionadosObrerosSobrevivientes($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOPSobre->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
             $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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



    public function BonoAMObrerosPensionadosEspeciales($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistAmOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoAMEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
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
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(50,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$asistencia),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

        $pdf -> ln();
        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
        $pdf -> SetX(15);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(85);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(155);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');

        $pdf -> Output();
    }

    public function AcumuladoBonoAMObrerosPensionadosEspeciales($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistAmOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOPEsp->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Asistencia Medica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(10,3,'',0,0);
        $pdf -> Cell(95,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(110);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(22,4,$i,1,'R',0);

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



    public function RequisionBonoAMObrerosPS($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS PENSIONADOS ESPECIALES POR CONCEPTO DE BONO DE ASISTENCIA MEDICA CORRESPONDIENTE AL mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenAMObrerosPensionadosObreros($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistAmOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistAmOPEsp->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenAMFijos();
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

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

         
        $t_bono = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $asistencia = 100000; else $asistencia = 0;
            if ($key['status'] != 0) $total = $asistencia; else $total = 0;
            
            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $asistencia;
            @$t_total  += $total;

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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Asistencia Medica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($asistencia),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($asistencia),1,0,'R');
            $pdf -> Cell(30,4, '',1,1,'L');

            /*$pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');*/
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Asistencia Medica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_bono - $t_deduccion;

                $pdf -> SetFont('Arial','B',8);
                $pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetX(20);
                 $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
                 $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
                 $pdf -> Cell(40,7,$this->moneda($t_bono).'    ',0,0,'R');
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
}


// FALTA  PROTECCION CIVIL, CEMENTERIO, COMISION DE SERVICIO Y HONORARIOS PROFESIONALES 

// LA OFICINA DE TALENTO HUMANO NO ESPECIFICO QUE ERA REQUERIDO POR LO TANTO, NO SE DESARROLLO.