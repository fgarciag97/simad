<?php
namespace App\Controller;

use App\Controller\AppController;


/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ESTABILIDAD =======================*/
/*=========================================================================================*/

class PDF_BonoEstabilidadEmpleadosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(17,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadEmpleadosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda',0,1,'C');
        $this->SetFont('Arial','B',6);

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(17,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadEmpleadosDirectivos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'Alcaldia Bolivariana del Municipio Miranda',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(17,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(188);
        $this->MultiCell(15,10,'TOTAL',1,'C',0);
    }
}

class PDF_ResumenBonoEstabilidadFijos extends \FPDF {
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

//======================= encabezado sencillo ================================

class PDF_ResumenNominaEmpleadosFijos extends \FPDF {
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
/*========================== ENCABEZADO DE LOS BONOS DE ESTABILIDAD =======================*/
/*=========================================================================================*/

class PDF_BonoEstabilidadObrerosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS FIJOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadObrerosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS CONTRATADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadObrerosNP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS NO PERMANENTES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}




/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ESTABILIDAD =======================*/
/*=========================================================================================*/

class PDF_BonoEstabilidadEmpleadosP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadEmpleadosPS extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS SOBREVIVIENTES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoEstabilidadEmpleadosPE extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS ESPECIALES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadObrerosPS extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS PENSIONADOS SOBREVIVIENTES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoEstabilidadObrerosPE extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS PENSIONADOS ESPECIALES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}



/*=========================================================================================*/
/*========================== ENCABEZADO DE LOS BONOS DE ESTABILIDAD =======================*/
/*=========================================================================================*/

class PDF_BonoEstabilidadJubiladosEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS JUBILADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}


class PDF_BonoEstabilidadJubiladosObreros extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'OBREROS JUBILADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoEstabilidadProteccionCivil extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'PROTECCION CIVIL',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(40,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(146);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(161);
        $this->MultiCell(20,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(181);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoEstabilidadCementerio extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'CEMENTERIO',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(20,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(126);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(141);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(166);
        $this->MultiCell(25,10,'TOTAL',1,'C',0);
    }
}


class PDF_ResumenBonoJubiladosEmpleados extends \FPDF {
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


class PDF_ResumenBonoEmpleadosPensionados extends \FPDF {
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
/*========================== ENCABEZADO DE LOS BONOS DE ESTABILIDAD =======================*/
/*=========================================================================================*/

class PDF_BonoEstabilidadComisionS extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'COMISION DE SERVICIO',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(40,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(146);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(161);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(186);
        $this->MultiCell(20,10,'TOTAL',1,'C',0);
    }
}

class PDF_BonoEstabilidadHonorarioP extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'HONORARIOS PROFESIONALES',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES BONO DE ESTABILIDAD',0,1,'C');

        $this->SetFont('Arial','B',6);

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
        $this->MultiCell(40,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(146);
        $this->MultiCell(15,5,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(161);
        $this->MultiCell(25,10,'BONO 40%',1,'C',0);
        $this->SetY(35);
        $this->SetX(186);
        $this->MultiCell(20,10,'TOTAL',1,'C',0);
    }
}


class MRRHHBonoEstabilidadReporteController extends AppController
{
      
    /*================================= EMPLEADOS FIJOS =======================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/
    public function BonoEstabilidadEmpleadosFijos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoEstabilidadEmpleadosFijos();

        $pdf -> AddPage();
        $pdf -> SetY(20);
        $pdf -> SetX(40);
        $pdf -> SetFont('Arial','',8);
        $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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

            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;



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
            $pdf -> Cell(15,5, $this->moneda($key['sueldo_base']),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);  
                $pdf->SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

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

    public function AcumuladoBonoEstabilidadEmpleadosFijos($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $pdf -> ln();
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(25,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(75,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(10,4,$i,1,'R',0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


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

    public function RequisionBonoEmpleadosFijos($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS FIJOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEEmpleadoFijos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosFijos->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

                        @$t_bono += $bono;
                        @$t_total += $bono;
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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($bono),1,0,'R');
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
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
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

        /*================================= EMPLEADOS CONTRATADOS =================================*/
        /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
        /*=========================================================================================*/
    public function BonoEstabilidadEmpleadosContratados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosC->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadEmpleadosContratados();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','B',8);   
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');


        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $i  = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

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

            @$t_bono += $bono;

                        $t_asignacion += $bono;
                        $t_deduccion += 0;


            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','B',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $pdf -> Cell(17,5, $this->moneda($t_bono/2),1,0,'R');
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


    public function AcumuladoBonoEstabilidadEmpleadosContratados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosC->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $pdf -> ln();
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(75,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_bono),1,'R',0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(10,4,$i,1,'R',0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


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

    public function RequisionBonoEmpleadosContratados($mes = null, $quincena = null, $requisicion = null){

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' .$this->fecha($data['fecha_rrhh'])  . '
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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS CONTRATADOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEEmpleadoContratados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosC->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo'] / 2; else $sueldo = $key['sueldo_base'] / 2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

                        @$t_bono += $bono;
                        @$t_total += $bono;
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
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($bono),1,0,'R');
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
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C'); 
            }
        }

                $t_neto = $t_asignacion - $t_deduccion;

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

        /*==================================== PERSONAL DIRECTIVO =================================*/
        /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
        /*=========================================================================================*/
    public function BonoEstabilidadDirectivos($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeDirectivos->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadEmpleadosDirectivos();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();


        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;

                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;

                
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;

                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



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
            $pdf -> Cell(15,5, $this->moneda($key['sueldo_base']),1,0,'R');
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
                $pdf -> SetFont('Arial','B',8);  
                $pdf->SetY(20);
                $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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


    public function AcumuladoBonoEstabilidadDirectos($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeDirectivos->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $pdf -> ln();
        
        $t_bono = 0;
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0){
                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
            }else{
                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            }
                
            if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;

            if($key['cedula'] == 12736419 or $key['cedula'] == 16519394){
               if ($key['status'] != 0) $bono_pito = ( $sueldo_base * 0.40 ); else $bono_pito = 0;
                @$t_bono_pito += $bono_pito;
            }else{
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                @$t_bono += $bono;
            }
         }

         $t_total = $t_bono_pito + $t_bono;

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica Personal de Eleccion Popular',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono_pito),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1002',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica Alto Nivel y Direccion',0,0);
        $pdf -> Cell(22,4,'4.01.04.95.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(75,3,'',0,0);

         /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

        $pdf -> SetX(10);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,4,'Cantidad de Empleados',0,0);

        $pdf -> Cell(10,4,$i,1,'R',0);

        $pdf -> ln();

        $pdf -> SetX(150);
        $pdf -> Cell(10,4,'______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');


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

    public function RequisionBonoDirectivos($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA PERSONAL DIRECTIVO POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEDirectivos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetY(15);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PERSONAL DIRECTIVO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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








    //====================================================================================================================================================================================== PERSONAL OBRERO =============================================================





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

        $pdf = new PDF_BonoEstabilidadObrerosFijos();

        $pdf -> AddPage();
        $pdf -> SetY(20);
        $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',8);   

        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = $key['sueldo_base']/2;


            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

            if($key['bono_dias_cancelar'] != 0) $bono = (( $sueldo_base  * 0.40 ) / 15) * $key['bono_dias_cancelar'] ;
            if($key['bono_dias_cancelar'] != 0) $total = $bono;

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,10)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
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
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();
                $pdf-> ln();
                $pdf-> ln();
            }

        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(161,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);

        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
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
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $pdf -> ln();
        
        $t_bono = 0;

        $t_sueldo_base = 0;
        $bono = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = $key['sueldo_base']/2;


            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;

            if($key['bono_dias_cancelar'] != 0) $bono = (( $sueldo_base  * 0.40 ) / 15) * $key['bono_dias_cancelar'] ;
            if($key['bono_dias_cancelar'] != 0) $total = $bono;

            @$t_bono += $bono;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.04.97.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(25,4,'',0,0);
        $pdf -> Cell(80,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(10,4,$i,1,0,'R');

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS FIJOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEObrerosFijos($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosFijos->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);

        $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $total = 0;


        $t_asignacion = 0;
        $t_deduccion = 0;
        
        $t_sueldo_base = 0;
        $bono = 0;

        foreach ($data as $key) {
            
            if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = $key['sueldo_base']/2;

            if($key['bono_dias_cancelar'] != 0) $bono = (( $sueldo_base  * 0.40 ) / 15) * $key['bono_dias_cancelar'] ;
            if($key['bono_dias_cancelar'] != 0) $total = $bono;

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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
    

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS FIJOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_asignacion - $t_deduccion;

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

        $pdf = new PDF_BonoEstabilidadObrerosContratados();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);   
        $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C'); 

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
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,10)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);   
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();
                $pdf-> ln();
            }

        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(161,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);

        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
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
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $pdf -> ln();
        
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(10,4,$i,1,0,'R');

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS CONTRATADOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEObrerosContratados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosC->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        
         
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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
    

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_asignacion - $t_deduccion;

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


    /*================================= OBREROS NO PERMANENTES ================================*/
    /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
    /*=========================================================================================*/

    public function BonoEstabilidadObrerosNP($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_BonoEstabilidadObrerosNP();

        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C'); 

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
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,10)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda(@$sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();
                $pdf-> ln();
            }

        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(161,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);

        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);
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

    public function AcumuladoBonoEstabilidadObrerosNP($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: OBREROS CONTRATADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
            
            if($key['sueldo'] != 0) $sueldo = $key['sueldo']/2; else $sueldo = $key['sueldo_base']/2;

            if ($key['status'] != 0) $sueldo_base = $sueldo; else $sueldo_base = 0;
            if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
            if ($key['status'] != 0) $total = $bono; else $total = 0;


            @$t_bono += $bono;
            @$t_total  += $total;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'',0,0);
        $pdf -> Cell(95,4,'',0,1);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,4,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,4,'Cantidad de Obreros',0,0);

        $pdf -> Cell(10,4,$i,1,0,'R');

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS NO PERMANENTES POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEObrerosNP($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeObrerosNoP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeObrerosNoP->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        
         
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
            $pdf -> Cell(30,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                          Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
    

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS NO PERMANENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

                $t_neto = $t_asignacion - $t_deduccion;

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









        //*=========================================================================================================================================================================== EMPLEADOS PENSIONADOS =======================================================*/




         /*==================================== PERSONAL PENSIONADO =================================*/
        /*========================== BONO DE ESTABILIDAD ECONOMICA ================================*/
        /*=========================================================================================*/
    public function BonoEstabilidadEmpleadosPensionados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosP->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadEmpleadosP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadEmpleadosPensionados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosP->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoEmpleadosPensionados($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS PENSIONADOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEEmpleadosPensionados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEmpleadosP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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


    
            $pdf -> SetFont('Arial','B',8);
    $pdf -> SetY(240);
    $pdf -> SetX(20);
    $pdf -> MultiCell(60,2,'
REALIZADO POR:






___________________________________

'.$this->mayus($this->request->getSession()->read('Auth.User.responsable')).'

ANALISTA DE PERSONAL

FIRMA.

',1,'L',0);
    $pdf -> SetY(240);
    $pdf -> SetX(80);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






____________________________________

MsC. YOEL SANCHEZ

JEFE DE OFIC. DE ADMINISTRACION

DE TALENTO HUMANO

',1,'L',0);
    $pdf -> SetY(240);
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





    public function BonoEstabilidadEmpleadosPS($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEPSobre->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadEmpleadosPS();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadEmpleadosPS($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEPSobre->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoEmpleadosPS($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS PENSIONADOS SOBREVIVIENTES POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEEmpleadosPS($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEPSobre->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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


    public function BonoEstabilidadEmpleadosPE($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEPEsp->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadEmpleadosPE();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadEmpleadosPE($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEPEsp->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoEmpleadosPE($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS PENSIONADOS ESPECIALES POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEEmpleadosPE($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEPEsp->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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



    public function BonoEstabilidadObrerosPS($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOPSobre->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadObrerosPS();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'',0,1,'C');

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadObrerosPS($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOPSobre->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoObrerosPS($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS PENSIONADOS SOBREVIVIENTES POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEObrerosPS($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOPSobre->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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




    public function BonoEstabilidadObrerosPE($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOPEsp->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadObrerosPE();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadObrerosPE($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOPEsp->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS SOBREVIVIENTES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoObrerosPE($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS PENSIONADOS ESPECIALES POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEObrerosPE($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOPEsp->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS PENSIONADOS ESPECIALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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




    public function BonoEstabilidadJubiladosEmpleados($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadJubiladosEmpleados();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
                $pdf->ln();
                $pdf->ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadJubiladosEmpleados($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEJubilados->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoJubiladosEmpleados($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA EMPLEADOS JUBILADOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEJubiladosEmpleados($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeEJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeEJubilados->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: EMPLEADOS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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


    public function BonoEstabilidadJubiladosObreros($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOJubilados->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadJubiladosObreros();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();
                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadJubiladosObreros($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOJubilados->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(22,4,$i,1,0,'R');

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

    public function RequisionBonoJubiladosObreros($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA OBREROS JUBILADOS POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEJubiladosObreros($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeOJubilados');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeOJubilados->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: OBREROS JUBILADOS (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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



    public function BonoEstabilidadProteccionCivil($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBePc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBePc->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadProteccionCivil();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PROTECCION CIVIL (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(40,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$bono),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PROTECCION CIVIL (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(156,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(20,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadProteccionCivil($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBePc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBePc->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: PROTECCION CIVIL (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(22,4,$i,1,0,'R');

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

    public function RequisionBonoProteccionCivil($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA PROTECCION CIVIL POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEProteccionCivil($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBePc');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBePc->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PROTECCION CIVIL (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: PROTECCION CIVIL (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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




    public function BonoEstabilidadCementerio($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeCementerio');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeCementerio->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadCementerio();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: CEMENTERIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,30)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
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
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: CEMENTERIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(136,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadCementerio($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeCementerio');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeCementerio->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: CEMENTERIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoCementerio($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA CEMENTERIO POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBECementerio($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeCementerio');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeCementerio->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: CEMENTERIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: CEMENTERIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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




    public function BonoEstabilidadComisionS($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadComisionS();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: COMISION DE SERVICIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;


                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['bono_dejado_c'] != 0) $bono_dejado_c = ((($sueldo_base / 15)  * $key['bono_dejado_c']) * 0.40) ; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $total_bono = $bono + $bono_dejado_c; else $total_bono = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;


                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['bono_dejado_c'] != 0) $bono_dejado_c = ((($sueldo_base / 15)  * $key['bono_dejado_c']) * 0.40) ; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $total_bono = $bono + $bono_dejado_c; else $total_bono = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(40,5, $this->mayus(substr($key['cargo'],0,28)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total_bono),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total_bono),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $total_bono;
            @$t_total  += $total_bono;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: COMISION DE SERVICIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(156,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadComisionS($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: COMISION DE SERVICIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
        $i = 0;

        foreach ($data as $key) {

            ++$i;
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;


                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['bono_dejado_c'] != 0) $bono_dejado_c = ((($sueldo_base / 15)  * $key['bono_dejado_c']) * 0.40) ; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $total_bono = $bono + $bono_dejado_c; else $total_bono = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;


                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['bono_dejado_c'] != 0) $bono_dejado_c = ((($sueldo_base / 15)  * $key['bono_dejado_c']) * 0.40) ; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $total_bono = $bono + $bono_dejado_c; else $total_bono = 0;
            } 


            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;
            @$t_total  += $total_bono;
         }

        $pdf -> Cell(40,6,'',0,1);
        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_bono),0,'R',0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_bono_dejado_c != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1001',0,0);
            $pdf -> Cell(95,4,'Bono de Estabilidad Economica dejados de cancelar',0,0);
            $pdf -> Cell(22,4,'4.01.04.96.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_bono_dejado_c),0,'R',0);
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf->ln();

        $pdf -> SetFont('Arial','B',8);
        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> SetX(110);
        $pdf -> Cell(22,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA COMISION DE SERVICIO POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEComisionS($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeComS');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeComS->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: COMISION DE SERVICIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;

        $t_bono_dejado_c = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;


                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['bono_dejado_c'] != 0) $bono_dejado_c = ((($sueldo_base / 15)  * $key['bono_dejado_c']) * 0.40) ; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $total_bono = $bono + $bono_dejado_c; else $total_bono = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;


                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['bono_dejado_c'] != 0) $bono_dejado_c = ((($sueldo_base / 15)  * $key['bono_dejado_c']) * 0.40) ; else $bono_dejado_c = 0;

                if ($key['status'] != 0) $total_bono = $bono + $bono_dejado_c; else $total_bono = 0;
            } 



            @$t_bono += $total_bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $total_bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'L');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'R');
                $pdf -> Cell(30,5,' ',0,1,'R');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total_bono),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: COMISION DE SERVICIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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



    public function BonoEstabilidadHonorarioP($mes = null, $quincena = null){

        $this->loadModel('ViewMrrhhHistBeHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_BonoEstabilidadHonorarioP();

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: HONORARIOS PROFESIONALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
        $pdf-> ln();
        $pdf-> ln();
        $pdf-> ln();

        $pdf -> SetFont('Arial','B',6);   


        $t_sueldo_base = 0;
        $t_total  = 0;
        $t_bono  = 0;
        $dias  = 0;
        $t_bono_dejado_c = 0;
        $i  = 0;
        

        foreach ($data as $key) {

            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            } 

            



            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');

            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(40,5, $this->mayus(substr($key['cargo'],0,28)),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(15,5, $this->moneda($sueldo_base),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$bono),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            @$t_sueldo_base += $key['sueldo_base'];
            @$t_sueldo_base += $sueldo_base;
            @$t_bono += $bono;
            @$t_total  += $total;

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: HONORARIOS PROFESIONALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

                $pdf-> ln();

            }
        }

        
        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(156,5,'TOTAL',1,0,'C');

        /*$pdf -> Cell(16,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(15,5, $this->moneda($t_sueldo_base),1,0,'R');*/
        $pdf -> Cell(25,5, $this->moneda($t_bono),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');
        

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


    public function AcumuladoBonoEstabilidadHonorarioP($mes = null, $quincena = null, $requisicion = null, $var = ''){

        $this->loadModel('ViewMrrhhHistBeHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);

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
                $pdf -> MultiCell(140,5,'Nomina: COMISION DE SERVICIO (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
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
        $t_bono_pito = 0;
        $t_total = 0;
        $t_bono_dejado_c = 0;

        $bono = 0;
        $bono_pito = 0;
        $t_sueldo_base = 0;
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Bono de Estabilidad Economica',0,0);
        $pdf -> Cell(22,4,'4.01.01.10.00',0,0);

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

        $pdf -> Cell(22,4,$this->moneda($t_total),1,'R',0);

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

        $pdf -> Cell(10,4,$i,1,0,'R');

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

    public function RequisionBonoHonorarioP($mes = null, $quincena = null, $requisicion = null){

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
    $pdf->MultiCell(180,5,'PAGO DE LA NOMINA HONORARIOS PROFESIONALES POR CONCEPTO DE BONO DE ESTABILIDAD ECONOMICA CORRESPONDIENTE A LA'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'J',0);


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


    public function ResumenBEHonorarioP($mes = '', $quincena = ''){

        $this->loadModel('ViewMrrhhHistBeHonorarioP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistBeHonorarioP->find('all', ['conditions' => $condicion]);

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_ResumenNominaEmpleadosFijos();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

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

        $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: HONORARIOS PROFESIONALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');

        $t_bono = 0;
        $t_bono_dejado_c = 0;
        $total = 0;
        $t_sueldo_base = 0;
        $bono = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;


        foreach ($data as $key) {
            
            if($key['sueldo'] != 0){

                if ($key['status'] != 0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;

            }else{

                if ($key['status'] != 0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
                if ($key['status'] != 0) $bono_dejado_c = $key['bono_dejado_c']; else $bono_dejado_c = 0;
                if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                if ($key['status'] != 0) $total = $bono + $bono_dejado_c; else $total = 0;
            }

            @$t_bono += $bono;
            @$t_bono_dejado_c += $bono_dejado_c;

            $t_asignacion += $bono;

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
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'                         Asignaciones'.'        '. '                Deducciones',1,1,'L');


            
            $pdf -> SetFont('Arial','B',8);
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */
            $pdf -> SetX(5);
            $pdf -> Cell(130,5,'1001'.' Bono de Estabilidad Economica ',0,0,'L');
            $pdf -> Cell(40,5, $this->moneda($bono),0,0,'R');
            $pdf -> Cell(30,5,' ',0,1,'L');

            if($bono_dejado_c != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,5,'1001-1'.' Diferencia de Bono de Estabilidad Economica ',0,0,'R');
                $pdf -> Cell(40,5, $this->moneda($bono_dejado_c),0,0,'L');
                $pdf -> Cell(30,5,' ',0,1,'L');
            }


            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto a Cobrar',1,0,'R');
            $pdf -> Cell(40,4, $this->moneda($total),1,0,'R');
        
            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetY(20);
                $pdf->SetX(40);
                $pdf -> MultiCell(140,5,'Nomina: HONORARIOS PROFESIONALES (Bono de Estabilidad Economica Correspondiente a la'.' '.$quincena['denominacion'].' '.'del mes de'.' '.$mes['denominacion'].' '.'del'.' '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');
            }
        }


                $t_neto = $t_asignacion - $t_deduccion;

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
