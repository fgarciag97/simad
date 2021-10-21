<?php
namespace App\Controller;

use App\Controller\AppController;


/*======================EMPLEADOS PENSIONADOS ===================================*/
class PDF_AsignacionesPensionadosEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

	    $this->SetX(110);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
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
	    $this->MultiCell(70,10,'CARGO',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(176);
	    $this->MultiCell(20,5,'TIPO DE PERSONAL',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(196);
	    $this->MultiCell(17,5,'PENSION MENSUAL',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(213);
	    $this->MultiCell(20,5,'SUELDO QUINCENAL',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(233);
	    $this->MultiCell(20,5,'PRIMA PROFESION',1,'C',0);
	    $this->SetY(30);
	    $this->SetX(253);
	    $this->MultiCell(25,5,'TOTAL ASIGNACIONES',1,'C',0);
    }
}

class PDF_DeduccionesPensionadosEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(35);
	    $this->SetX(20);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(35);
	    $this->SetX(26);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(43);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(73);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'CAJA DE AHORRO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(123);
	    $this->MultiCell(20,5,'SERVICIO FUNERARIO',1,'C',0);
	    $this->SetY(35);
        $this->SetX(143);
        $this->MultiCell(25,5,'PRESTAMO CAJA DE AHORRO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(168);
	    $this->MultiCell(25,5,'TOTAL DEDUCCIONES',1,'C',0);
    }
}

class PDF_AportePatronalPensionadosEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	   	$this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(35);
	    $this->SetX(40);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(35);
	    $this->SetX(46);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(63);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(93);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(123);
	    $this->MultiCell(20,5,'APORTE CAJA DE AHORRO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(143);
	    $this->MultiCell(20,10,'TOTAL IMPORTE',1,'C',0);
    }
}

class PDF_AportePatronalPensionadosEspeciales extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE APORTE PATRONAL',0,1,'C');

	    $this->SetFont('Arial','B',8);

	    $this->SetY(50);
	    $this->SetX(20);
	    $this->MultiCell(6,20,'N',1,'J',0);
	    $this->SetY(50);
	    $this->SetX(26);
	    $this->MultiCell(17,20,'CEDULA',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(43);
	    $this->MultiCell(30,20,'APELLIDO',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(73);
	    $this->MultiCell(30,20,'NOMBRES',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'
APORTE CAJA DE AHORRO

',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(123);
	    $this->MultiCell(20,5,'
TOTAL IMPORTE

',1,'C',0);
    }
}

class PDF_NetoCobrarPensionadosEmpleados extends \FPDF {
    function Header()
    {
     $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

        $this->SetX(65);
        $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
        $this->SetX(65);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

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
        $this->MultiCell(15,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(121);
        $this->MultiCell(15,10,'TIPO',1,'C',0);
        $this->SetY(35);
        $this->SetX(136);
        $this->MultiCell(17,5,'SALARIO MENSUAL',1,'C',0);
        $this->SetY(35);
        $this->SetX(153);
        $this->MultiCell(17,5,'TOTAL ASIGNA.',1,'C',0);
        $this->SetY(35);
        $this->SetX(170);
        $this->MultiCell(17,5,'TOTAL DEDUC.',1,'C',0);
        $this->SetY(35);
        $this->SetX(187);
        $this->MultiCell(17,5,'NETO A PAGAR',1,'C',0);
    }
}


class PDF_NetoCobrarPensionadosEspecialesEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(45);
	    $this->SetX(5);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(45);
	    $this->SetX(11);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(28);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(58);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(88);
	    $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(106);
	    $this->MultiCell(20,10,'CARGO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(126);
	    $this->MultiCell(25,5,'TOTAL ASIGNACIONES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(151);
	    $this->MultiCell(25,5,'TOTAL DEDUCCIONES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(176);
	    $this->MultiCell(25,10,'NETO A COBRAR',1,'C',0);
    }
}

class PDF_ResumenNominaEmpleadosPensionados extends \FPDF {
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

/*====================== PENSIONADOS SOBREVIVIENTES EMPLEADOS ===================================*/

class PDF_AsignacionesPensionadosSobrevivientesEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS SOBREVIVIENTES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(50);
	    $this->SetX(20);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(50);
	    $this->SetX(26);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(43);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(73);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(123);
	    $this->MultiCell(20,10,'ESTATUS',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(143);
	    $this->MultiCell(20,5,'SUELDO MENSUAL',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(163);
	    $this->MultiCell(25,10,'TOTAL A PAGAR',1,'C',0);
    }
}

/*====================== PENSIONADOS SOBREVIVIENTES EMPLEADOS ===================================*/

class PDF_DeduccionesPensionadosSobrevivientesEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,' EMPLEADOS PENSIONADOS SOBREVIVIENTES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

	    $this->SetFont('Arial','B',8);

	    $this->SetY(50);
	    $this->SetX(20);
	    $this->MultiCell(6,20,'N',1,'J',0);
	    $this->SetY(50);
	    $this->SetX(26);
	    $this->MultiCell(17,20,'CEDULA',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(43);
	    $this->MultiCell(30,20,'APELLIDO',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(73);
	    $this->MultiCell(30,20,'NOMBRES',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'
FECHA DE INGRESO

',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(123);
	    $this->MultiCell(20,5,'
ESTATUS


',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(143);
	    $this->MultiCell(20,5,'
SUELDO MENSUAL

',1,'C',0);
	    $this->SetY(50);
	    $this->SetX(163);
	    $this->MultiCell(25,5,'
TOTAL A PAGAR

',1,'C',0);
    }
}

/*====================== PENSIONADOS SOBREVIVIENTES OBREROS ===================================*/

class PDF_AsignacionesPensionadosSobrevivientesObreros extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'OBREROS PENSIONADOS SOBREVIVIENTES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(45);
	    $this->SetX(20);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(45);
	    $this->SetX(26);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(43);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(73);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(123);
	    $this->MultiCell(20,10,'ESTATUS',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(143);
	    $this->MultiCell(20,5,'SUELDO MENSUAL',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(163);
	    $this->MultiCell(25,10,'TOTAL A PAGAR',1,'C',0);
    }
}

/*====================== PENSIONADOS ESPECIALES EMPLEADOS  ====================================*/

class PDF_AsignacionesEmpleadosPensionadosEspeciales extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS ESPECIALES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(45);
	    $this->SetX(20);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(45);
	    $this->SetX(26);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(43);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(73);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(123);
	    $this->MultiCell(20,10,'ESTATUS',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(143);
	    $this->MultiCell(20,5,'SUELDO MENSUAL',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(163);
	    $this->MultiCell(25,10,'TOTAL A PAGAR',1,'C',0);
    }
}

class PDF_DeduccionesPensionadosEspecialesEmpleados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS ESPECIALES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE DUCCIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(45);
	    $this->SetX(15);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(45);
	    $this->SetX(21);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(38);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(68);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(98);
	    $this->MultiCell(20,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(118);
	    $this->MultiCell(20,10,'ESTATUS',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(138);
	    $this->MultiCell(20,10,'FUNERARIA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(158);
	    $this->MultiCell(25,10,'TOTAL DEDUCCION',1,'C',0);
    }
}



/*====================== PENSIONADOS ESPECIALES OBREROS  ====================================*/

class PDF_AsignacionesObrerosPensionadosEspeciales extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'OBREROS PENSIONADOS ESPECIALES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(45);
	    $this->SetX(20);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(45);
	    $this->SetX(26);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(43);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(73);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(103);
	    $this->MultiCell(20,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(123);
	    $this->MultiCell(20,10,'ESTATUS',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(143);
	    $this->MultiCell(20,5,'SUELDO MENSUAL',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(163);
	    $this->MultiCell(25,10,'TOTAL A PAGAR',1,'C',0);
    }
}


class PDF_DeduccionesPensionadosEspecialesObreros extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");

	    $this->SetX(70);
	    $this->Cell(80,5,'OBREROS PENSIONADOS ESPECIALES',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE DE DUCCIONES',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(35);
	    $this->SetX(15);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(35);
	    $this->SetX(21);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(38);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(68);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(98);
	    $this->MultiCell(20,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(118);
	    $this->MultiCell(20,10,'ESTATUS',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(138);
	    $this->MultiCell(20,10,'FUNERARIA',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(158);
	    $this->MultiCell(20,10,'SINDICATO',1,'C',0);
	    $this->SetY(35);
	    $this->SetX(178);
	    $this->MultiCell(25,10,'TOTAL DEDUCCION',1,'C',0);
    }
}

class PDF_NetoCobrarPensionadosEspecialesObreros extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

	    $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


	    $this->SetX(70);
	    $this->Cell(80,5,'EMPLEADOS PENSIONADOS',0,1,'C');
	    $this->SetX(70);
	    $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

	    $this->SetFont('Arial','B',6);

	    $this->SetY(45);
	    $this->SetX(5);
	    $this->MultiCell(6,10,'N',1,'J',0);
	    $this->SetY(45);
	    $this->SetX(11);
	    $this->MultiCell(17,10,'CEDULA',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(28);
	    $this->MultiCell(30,10,'APELLIDO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(58);
	    $this->MultiCell(30,10,'NOMBRES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(88);
	    $this->MultiCell(18,5,'FECHA DE INGRESO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(106);
	    $this->MultiCell(20,10,'CARGO',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(126);
	    $this->MultiCell(25,5,'TOTAL ASIGNACIONES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(151);
	    $this->MultiCell(25,5,'TOTAL DEDUCCIONES',1,'C',0);
	    $this->SetY(45);
	    $this->SetX(176);
	    $this->MultiCell(25,10,'NETO A COBRAR',1,'C',0);
    }
}







class MRRHHNominaPensionadosReporteController extends AppController
{
	/*======================EMPLEADOS PENSIONADOS ===================================*/

	public function AsignacionesPensionadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesPensionadosEmpleados('L','mm',array(300,250));
	    $pdf -> AddPage();


	    $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
            if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(70);
                $pdf -> MultiCell(170,5,$concepto['concepto'],0,'C',0);
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
        $t_total = 0;

        foreach ($data as $key) {

            /*======================================================================================================*/

            if ($key ['sueldo'] != 0) $sueldo = $key['sueldo']; else $sueldo = $key['sueldo_base'];
     
         	if($key['status'] !=0) $sueldo_mensual = $sueldo ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $sueldo / 2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            // if ($key['cedula'] = '16943262') $prima_profesion = $key['prima_profesion'] ;

            if($key['status'] !=0) $total = $sueldo_base + $prima_profesion; else $total = 0;
  

		    $pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(5);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
		    $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'L');
 			$pdf -> Cell(20,5, $this->mayus($key['grupo'] . " - " . $key['denominacion_grado_nivel']),1,0,'C');		    
 			$pdf -> Cell(17,5, $this->moneda(@$sueldo_mensual),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$prima_profesion),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_sueldo_mensual += $sueldo_mensual;
		    $t_sueldo_base += $sueldo_base;
		    $t_prima_profesion += $prima_profesion;
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
	                $pdf -> SetX(90);
	                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
	                $pdf -> SetX(135);
	                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
	            }

		        $pdf-> ln();
		        $pdf-> ln();
		        $pdf-> ln();
		        $pdf-> ln();
		        $pdf-> ln();
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(5);
	    $pdf -> Cell(208,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(20,5, $this->moneda($t_sueldo_base),1,0,'R');
	    $pdf -> Cell(20,5, $this->moneda($t_prima_profesion),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

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

	public function DeduccionesPensionadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_DeduccionesPensionadosEmpleados();
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
        $t_prestamo_caja = 0;
        $t_total = 0;

        foreach ($data as $key) {

       	if ($key['sueldo'] !=0) {

         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria + $prestamo_caja; else $total = 0;


         }else{

         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria +$prestamo_caja; else $total = 0;
         }

   
		    $pdf -> SetFont('Arial','',6);

		    $pdf -> SetX(20);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(20,5, $this->moneda(@$deduccion_caja),1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_deduccion_caja += $deduccion_caja;
		    $t_funeraria += $funeraria;
		    $t_prestamo_caja += $prestamo_caja;
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
    	$pdf -> SetX(20);
	    $pdf -> Cell(83,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(20,5, $this->moneda($t_deduccion_caja),1,0,'R');
	    $pdf -> Cell(20,5, $this->moneda($t_funeraria),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_prestamo_caja),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	
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

	public function AportePatronalPensionadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AportePatronalPensionadosEmpleados();
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
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
            else $aporte_deduccion_caja = 0;

	    	if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;

         }else{
         	
         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
         	
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
            else $aporte_deduccion_caja = 0;

	    	if($key['status'] !=0) $total = $aporte_deduccion_caja; else $total = 0;
         }

            
		    $pdf -> SetX(40);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    
         if ($key['cedula'] = '16943262' AND $key['sueldo'] != 0) {
         		$aporte_deduccion_caja = ($key['sueldo'] * 0.10) / 2;
         		$total = $aporte_deduccion_caja;
         }

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
		        $pdf -> SetX(90);
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
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(40);
	    $pdf -> Cell(83,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(20,5, $this->moneda($t_deduccion_caja),1,0,'R');
	    $pdf -> Cell(20,5, $this->moneda($t_total),1,1,'R');


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

	public function NetoCobrarPensionadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarPensionadosEmpleados();
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

        foreach ($data as $key) {


        	if ($key['sueldo'] !=0) {

         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/

         }else{
         	
         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/
         }


            

		    $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,15)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus(substr($key['nombres'],0,15)),1,0,'L');
            $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(15,5, $this->mayus(substr($key['cargo'],0,45)),1,0,'L');
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
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(5);
        $pdf -> Cell(131,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(17,5, $this->moneda($t_sueldo_base),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_asignacion),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_deduccion),1,0,'R');
        $pdf -> Cell(17,5, $this->moneda($t_neto),1,1,'R');

	
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

	public function AcumuladoPensionadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

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

        $t_x_depositario = 0;


        foreach ($data as $key) {

            ++$i;

        if ($key['sueldo'] != 0) {

            if($key['status'] !=0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            @$t_sueldo_base += $sueldo_base;
            @$t_prima_profesion  += $prima_profesion;


            $var1 = $t_sueldo_base + $t_prima_profesion ;


            //===============================================================================================
           
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria +$prestamo_caja; else $total = 0;
           
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;

            $var2 =  @$t_caja + @$t_funeraria + @$t_sindicato + @$t_asociacion + @$t_x_depositario + $t_prestamo_caja;

            //=======================================================================================================

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
            else $aporte_deduccion_caja = 0;

            $t_aportecaja += $aporte_deduccion_caja;

            $var3 =  $aporte_deduccion_caja;

         }else{

            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            @$t_sueldo_base += $sueldo_base;
            @$t_prima_profesion  += $prima_profesion;


            $var1 = $t_sueldo_base + $t_prima_profesion ;


            //===============================================================================================
           
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria +$prestamo_caja; else $total = 0;
           
            @$t_caja += $deduccion_caja;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_x_depositario += $x_depositario;

            $var2 =  @$t_caja + @$t_funeraria + @$t_sindicato + @$t_asociacion + @$t_x_depositario + $t_prestamo_caja;


            //=======================================================================================================

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                $aporte_deduccion_caja = ($key['sueldo_base'] * 0.10) / 2; 
            else $aporte_deduccion_caja = 0;

            $t_acaja += $aporte_deduccion_caja;

            $var3 =  $t_acaja;
        }
            


            
         }

       $pdf -> SetFont('Arial','',9);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Pension Quincenal',0,0);
        $pdf -> Cell(22,4,'4.07.01.01.01',0,0);

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

        if($t_prima_antiguedad != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'1004',0,0);
	        $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
	        $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4,'',0,1);
	    }

       
        if($t_sso != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'2001',0,0);
	        $pdf -> Cell(95,4,'Seguro Social Obligatorio',0,0);
	        $pdf -> Cell(22,4,'',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_sso),0,0,'R');
	        $pdf -> Cell(22,4,'',0,1);
	    }

        if($t_rpe != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'2002',0,0);
	        $pdf -> Cell(95,4,'Regimen Prestacional de Empleo',0,0);
	        $pdf -> Cell(22,4,'',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_rpe),0,0,'R');
	        $pdf -> Cell(22,4,'',0,1);
	    }

        if($t_faov != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'2003',0,0);
	        $pdf -> Cell(95,4,'Fondo de Ahorro Obligatorio para la Vivienda',0,0);
	        $pdf -> Cell(22,4,'',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_faov),0,0,'R');
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

        if($t_asso != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'3001',0,0);
	        $pdf -> Cell(95,4,'Aporte Patronal del SSO',0,0);
	        $pdf -> Cell(22,4,'4.01.04.01.00',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_asso),0,1,'R');
	    }

        if($t_arpe != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'3002',0,0);
	        $pdf -> Cell(95,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
	        $pdf -> Cell(22,4,'4.01.06.04.00',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_arpe),0,1,'R');
	    }

        if($t_afaov != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'3003',0,0);
	        $pdf -> Cell(95,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
	        $pdf -> Cell(22,4,'4.01.06.05.00',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_afaov),0,1,'R');
	    }

        if($t_acaja != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'3005',0,0);
	        $pdf -> Cell(95,4,'Aporte Patronal de la Caja de Ahorros',0,0);
	        $pdf -> Cell(22,4,'4.01.07.07.00',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4, $this->moneda($t_acaja),0,1,'R');
	    }

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',9);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);


        if ($key['requisicion'] == 14) {

	        $var01 = $var1 - 3105;
	        $var02 = $var2 + 477.09;

	        $pdf -> Cell(22,4,$this->moneda($var01),1,0,'R');
	        $pdf -> Cell(22,4,$this->moneda($var02),1,0,'R');
	        $pdf -> Cell(22,4,$this->moneda($var3),1,1,'R');
	    }else{

	        $pdf -> Cell(22,4,$this->moneda($var1),1,0,'R');
	        $pdf -> Cell(22,4,$this->moneda($var2),1,0,'R');
	        $pdf -> Cell(22,4,$this->moneda($var3),1,1,'R');
	    }

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

        $pdf -> Cell(15,3,$i,1,0,'R');

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

	public function RequisionPensionadosFijos($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 10;
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


     public function ResumenNominaEmpleadosPensionados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 9;
        $ms = $mes;
        $qs = $quincena;

     	$this->loadModel('ViewMrrhhHistoricoEmpleadosP');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosP->find('all', ['conditions' => $condicion]);

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
        


        $pdf = new PDF_ResumenNominaEmpleadosPensionados();
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
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                } 

        $t_asignacion = 0;
        $t_adecuccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

        if ($key['sueldo'] != 0) {

             if($key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;

          
            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
             if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;

            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;
            
            if($key['status'] !=0) $decucciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $prestamo_caja + $x_depositario; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $decucciones;

            /*==================================================================================================*/

        }else{

             if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;

          
            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = (400000*0.01) / 2; else $sindicato = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

             if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
            else $depositario_porcentaje = 0;

             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
            else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;
            
            if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $sindicato + $asociacion + $prestamo_caja + $x_depositario; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
        }

        $t_asignacion += $asignaciones;
        $t_adecuccion += $deducciones;
        $t_neto = $t_asignacion - $t_adecuccion;

        	$y = $pdf-> GetY();
            $pdf -> SetY($y+5.8);

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
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
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

            $neto = $asignaciones - $deducciones;

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

        	$pdf -> ln();
        	$pdf -> ln();
        	 	$pdf -> SetX(150);
		        $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
		       	 $pdf -> SetX(20);
		         $pdf -> Cell(50,7,'TOTAL GENERAL',0,0,'L');
		         $pdf -> Cell(30,7,'Total Asignaciones',0,0,'L');
		         $pdf -> Cell(20,7,$this->moneda($t_asignacion).'    ',0,0,'R');
		         $pdf -> Cell(30,7,'Total Deducciones',0,0,'L');
		         $pdf -> Cell(20,7,$this->moneda($t_adecuccion),0,1,'R');

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








    /*====================== PENSIONADOS SOBREVIVIENTES =================================*/

    public function AsignacionesPensionadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 10;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPSobre->find('all', ['conditions' => $condicion]);

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


        $pdf = new PDF_AsignacionesPensionadosSobrevivientesEmpleados();
	    $pdf -> AddPage();

	    $pdf -> SetY(30);
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
	    $pdf -> ln();
	    $pdf -> ln();
	    $pdf -> ln();
	    $pdf -> ln();
        

	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
	    $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }


		    $pdf -> SetX(20);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
		    $pdf -> Cell(20,5, $status,1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total/2),1,1,'R');

		    $t_sueldo_base += $sueldo_base;
		    $t_prima_profesion += $prima_profesion;
		    $t_total += $total;
	    }

	    $pdf -> SetFont('Arial','B',8); 
    	$pdf -> SetX(20);
	    $pdf -> Cell(123,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(20,5, $this->moneda($t_sueldo_base),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_total/2),1,1,'R');

	    /*Seccion de Jefes Firmantes*/
	    /* Separacion entre Lineas de 10 puntos*/
	    $pdf -> SetFont('Arial','',8);
	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+10);
	    $pdf -> ln();
	    	$pdf -> SetX(10);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'__________________________ ',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'___________________________',0,1,'C');

            $pdf -> SetFont('Arial','B',7);
            $pdf -> SetX(13);
            $pdf -> Cell(60,5,'JEF. OFIC. ADMIN. DE TALENTO HUMANO: ',0,0,'C');

            $pdf -> SetX(70);
            $pdf -> Cell(60,5,'ANALISTA DE PERSONAL:',0,0,'C');

            $pdf -> SetX(140);
            $pdf -> Cell(40,5,'COORD. RELACIONES LABORALES ',0,1,'C');
	   
	    $pdf -> Output();
	}

	public function AcumuladoPensionadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 10;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPSobre->find('all', ['conditions' => $condicion]);

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

            if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

            @$t_total += $total;
         }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Pension Quincenal',0,0);
        $pdf -> Cell(22,4,'4.07.01.01.01',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_total),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(15,3,$i,0,0,'R');

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

    public function RequisionPensionadosEmpleadosSobrevivientes($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 10;
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

    public function ResumenPensionadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 10;
        $ms = $mes;
        $qs = $quincena;

     	$this->loadModel('ViewMrrhhHistoricoEPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPSobre->find('all', ['conditions' => $condicion]);

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
        

        $pdf = new PDF_ResumenNominaEmpleadosPensionados('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_funeraria = 0;
        $t_caja = 0;

        $t_neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $t_asignacion = 0;
        $t_deduccion = 0;

        foreach ($data as $key) {


        	//======================================== ASIGNACIONES ================================================
        	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            }


        	//======================================== DEDUCCIONES  ================================================

            if($key['status'] !=0) $deducciones = 0;
            else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

            $t_asignacion += $asignaciones;
            $t_deduccion += $deducciones;
                        
            $t_neto = $t_asignacion - $t_deduccion;
        


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/

            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            if ($key['sueldo'] != 0) {
                $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($key['sueldo']),1,1,'L');
            }else{
                $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
            }
            
            $pdf -> SetX(5);
            $pdf -> Cell(70,4,'Cargo: '. $this->mayus(substr(substr($key['cargo'],0,20),0,40)),1,0,'L');
            
            $pdf -> Cell(50,4,'Fecha de Ingreso: '. $this->fecha($key['fecha_ingreso_institucion']),1,0,'L');
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');
            //===============================================================================================

            $pdf -> SetFont('Arial','B',9);
            $pdf -> ln();
            $pdf -> SetX(15); /*Totales*/
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($asignaciones),1,0,'L');
            $pdf -> Cell(40,4, $this->moneda($deducciones),1,1,'L');


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







    /*====================== PENSIONADOS ESPECIALES EMPLEADOS  ====================================*/

    public function AsignacionesPensionadosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 11;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesEmpleadosPensionadosEspeciales();
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

	    $i = 0;
	    $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

            $pdf -> SetFont('Arial','',6);

		    $pdf -> SetX(20);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
		    $pdf -> Cell(20,5, $status,1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$sueldo_base*2),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_sueldo_base += $sueldo_base;
		    $t_prima_profesion += $prima_profesion;
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
		        $pdf-> ln();
		        $pdf-> ln();
		        $pdf-> ln(); 
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(20);
	    $pdf -> Cell(143,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	    /*Seccion de Jefes Firmantes*/
	    /* Separacion entre Lineas de 10 puntos*/
	    $pdf -> SetFont('Arial','',8);
	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+10);
	    $pdf -> ln();
	    $pdf -> ln();
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

	public function DeduccionesPensionadosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 11;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_DeduccionesPensionadosEspecialesEmpleados();
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

	   	$i = 0;
        $t_deduccion_caja = 0;
        $t_funeraria = 0;
        $t_prestamo_caja = 0;
        $t_sindicato = 0;
        $t_total = 0;

        foreach ($data as $key) {

       	if ($key['sueldo'] !=0) {

         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria + $prestamo_caja; else $total = 0;


         }else{

         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria +$prestamo_caja; else $total = 0;
         }

   
         	if($key['status'] == 1){
                $status = 'ACTIVO';
            }else{
                $status = 'SUSPENDIDO';
            }


		    $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(15);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(20,5, $status,1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_funeraria += $funeraria;
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
		        $pdf-> ln();
		        $pdf-> ln(); 
		        $pdf-> ln(); 
            }
	    }

	     $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(15);
        $pdf -> Cell(123,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(20,5, $this->moneda($t_funeraria),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	
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

	public function NetoPensionadosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 11;
        $ms = $mes;
        $qs = $quincena;

		
		$this->loadModel('ViewMrrhhHistoricoEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarPensionadosEspecialesEmpleados();
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

        foreach ($data as $key) {


        	if ($key['sueldo'] !=0) {

         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/

         }else{
         	
         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/
         }

   
         	if($key['status'] == 1){
         		$status = 'ACTIVO';
         	}else{
         		$status = 'SUSPENDIDO';
         	}


		    $pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(5);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
		    $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,50)),1,0,'L');
		    $pdf -> Cell(25,5, $this->moneda(@$asignaciones),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$deducciones),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$neto),1,1,'R');

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
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(5);
	    $pdf -> Cell(121,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(25,5, $this->moneda($t_asignacion),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_deduccion),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_neto),1,1,'R');

	
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);
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


	public function AcumuladoPensionadosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 11;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]);

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

        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_aoprte = 0;
        $t_neto = 0;

        foreach ($data as $key) {

        	++$i;


        	/*========================================= Asignaciones =====================================*/

            if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            }

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad += $prima_antiguedad;
            @$t_prima_profesion += $prima_profesion;

            @$t_asignacion += $asignaciones;


            /*========================================= Deducciones =======================================*/

            if ($key['sueldo'] !=0) {

		         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
		         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
		            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
		            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

		            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
		                $prestamo_caja = $key['prestamo_caja_ahorro']; 
		            else $prestamo_caja = 0;

			    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria + $prestamo_caja; else $deducciones = 0;


		         }else{

		         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
		         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
		            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
		            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

		            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
		                $prestamo_caja = $key['prestamo_caja_ahorro']; 
		            else $prestamo_caja = 0;

			    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja; else $deducciones = 0;
		         }

		       
			        $t_fpj += $prestamo_caja;
			        $t_caja += $deduccion_caja;
			        $t_funeraria += $funeraria;

		         @$t_deduccion += $deducciones;
         }

         $t_neto = $t_asignacion - $t_deduccion;


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Pension Quincenal',0,0);
        $pdf -> Cell(22,4,'4.07.01.01.01',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_asignacion),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2001',0,0);
        $pdf -> Cell(95,4,'Funeraria',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($t_deduccion),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_neto),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(15,3,$i,0,0,'R');

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

    public function RequisionPensionadosEspeciales($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 11;
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

    public function ResumenPensionadosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 11;
        $ms = $mes;
        $qs = $quincena;

     	$this->loadModel('ViewMrrhhHistoricoEPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEPEsp->find('all', ['conditions' => $condicion]);

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
        


        $pdf = new PDF_ResumenNominaEmpleadosPensionados();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_funeraria = 0;
        $t_caja = 0;

        $t_neto = 0;
        $t_asignaciones = 0;
        $t_deducciones = 0;

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $t_asignacion = 0;
        $t_deduccion = 0;
        $neto = 0;

        foreach ($data as $key) {





        if ($key['sueldo'] != 0) {

        	 if($key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($key['status'] !=0) $deducciones =  $funeraria; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

        }else{

        	 if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;

          
            if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($key['status'] !=0) $deducciones =  $funeraria; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
            $t_asignaciones += $asignaciones;
            $t_deducciones += $deducciones ;
        }


        $neto = $asignaciones - $deducciones;
        $t_neto = $t_asignaciones - $t_deducciones;


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
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

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }if ($funeraria != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'L');
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
            if($y > 240){
                $pdf -> AddPage();
            }

            if($y > 240){
                $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
            }
        }

        		$pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetFont('Arial','B',8);
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













/*==============================================================================================================================*/
/*==============================================================================================================================*/
/*================================================ PENSIONADOS OBREROS ==========================================================*/



	public function AsignacionesPensionadosObreros($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 12;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena];
        $data = $this->ViewMrrhhHistoricoOPSobre->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesPensionadosSobrevivientesObreros();
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

	    $i = 0;
	    $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }


		    $pdf -> SetX(20);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
		    $pdf -> Cell(20,5, $status,1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$key['sueldo_base']),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_sueldo_base += $sueldo_base;
		    $t_prima_profesion += $prima_profesion;
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
		        $pdf-> ln(); 
		        $pdf-> ln(); 
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(20);
	    $pdf -> Cell(143,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	    /*Seccion de Jefes Firmantes*/
	    /* Separacion entre Lineas de 10 puntos*/
	    $pdf -> SetFont('Arial','',8);
	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+10);
	    $pdf -> ln();
	    $pdf -> ln();
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

	public function RequisionPensionadosObrerosSobrevivientes($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 12;
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

	public function AcumuladoPensionadosObrerosSobrevivientes($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 12;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPSobre->find('all', ['conditions' => $condicion]);

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

            if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }

            @$t_total += $total;
         }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Pension Quincenal',0,0);
        $pdf -> Cell(22,4,'4.07.01.01.01',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_total),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($t_total),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Obreros',0,0);

        $pdf -> Cell(15,3,$i,1,0,'R');

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

    public function ResumenPensionadosObrerosSobrevivientes($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 12;
        $ms = $mes;
        $qs = $quincena;

     	$this->loadModel('ViewMrrhhHistoricoOPSobre');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPSobre->find('all', ['conditions' => $condicion]);

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
        


        $pdf = new PDF_ResumenNominaEmpleadosPensionados();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_funeraria = 0;
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
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $t_asignaciones = 0;
        $t_deducciones = 0;

        foreach ($data as $key) {





        if ($key['sueldo'] != 0) {

        	 if($key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($key['status'] !=0) $deducciones =  0; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/

        }else{

        	 if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;

          
            if($key['status'] !=0) $asignaciones = $sueldo_base; else $asignaciones = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            
            if($key['status'] !=0) $deducciones =  0; else $deducciones = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignaciones - $deducciones;

            /*==================================================================================================*/
            $t_asignaciones += $asignaciones;
            $t_deducciones += $deducciones ;
        }


        	$neto = $asignaciones - $deducciones;
        	$t_neto = $t_asignaciones - $t_deducciones;


            $y = $pdf-> GetY();
            $pdf -> SetY($y+6.8);
            /*================================================= REPEAT =================================================*/
            $pdf -> SetFont('Arial','I',8);
            $pdf -> SetX(5);
            $pdf -> Cell(30,4,'Cedula: '. $key['cedula'],1,0,'L');
            $pdf -> Cell(90,4,'Empleado: '. $this->mayus($key['apellidos']) . " " . $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(80,4,'Sueldo: '.  $this->moneda($key['sueldo_base']),1,1,'L');
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

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
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
            if($y > 240){
                $pdf -> AddPage();
            }

            if($y > 240){
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

        		$pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetFont('Arial','B',8);
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



	/*=================================================================================================================*/

	public function AsignacionesEspecialesObreros($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesPensionadosEspecialesObreros();
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
        $pdf-> ln(); 
        $pdf-> ln(); 
	    
	    $pdf -> SetFont('Arial','',6);  

	    $i = 0;
	    $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['status'] !=0) $total = $sueldo_base; else $total = 0;
            }


            $pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(20);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
		    $pdf -> Cell(20,5, $status,1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$sueldo_base),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_sueldo_base += $sueldo_base;
		    $t_prima_profesion += $prima_profesion;
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
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(20);
	    $pdf -> Cell(123,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(20,5, $this->moneda($t_sueldo_base*2),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	    /*Seccion de Jefes Firmantes*/
	    /* Separacion entre Lineas de 10 puntos*/
	    $pdf -> SetFont('Arial','',8);
	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+10);
	    $pdf -> ln();
	    $pdf -> ln();
	    $pdf -> ln();
	    $pdf -> SetX(20);
	    $pdf -> Cell(40,5,'____________________________ ',0,0,'C');
	    $pdf -> SetX(130);
	    $pdf -> Cell(40,5,'__________________________________________________________ ',0,1,'C');
	    $pdf -> SetX(20);
	    $pdf -> Cell(40,5,'ELABORADO POR:',0,0,'C');
	    $pdf -> SetX(130);
	    $pdf -> Cell(40,5,'JEFE DE OFICINA DE ADMINISTRACION DE TALENTO HUMANO ',0,1,'C');
	   
	    $pdf -> Output();
	}




    /*====================== PENSIONADOS ESPECIALES OBREROS  ====================================*/

    public function AsignacionesPensionadosEspecialesObreros($mes = null, $quincena = null, $omitida = null, $requisicion = mull){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_AsignacionesObrerosPensionadosEspeciales();
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

	    $i = 0;
	    $t_sueldo_base = 0;
	    $t_prima_profesion = 0;
	    $t_total = 0;

	    foreach ($data as $key) {

	    	if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['dias_dejados_c'] != 0) $sueldo_dc = (($sueldo_base / 30 ) * $key['dias_dejados_c']); else $sueldo_dc = 0;

                 $sueldo = $sueldo_base + $sueldo_dc;

                 if($key['status'] !=0) $total = $sueldo; else $total = 0;
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $key['dias_dejados_c']); else $sueldo_dc = 0;

                 $sueldo = $sueldo_base + $sueldo_dc;


                if($key['status'] !=0) $total = $sueldo; else $total = 0;
            }


		    $pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(20);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'R');
		    $pdf -> Cell(20,5, $status,1,0,'R');
		    $pdf -> Cell(20,5, $this->moneda(@$sueldo_base*2),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_sueldo_base += $sueldo;
		    $t_prima_profesion += $prima_profesion;
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
		        $pdf-> ln();
		        $pdf-> ln(); 
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(20);
	    $pdf -> Cell(143,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	    /*Seccion de Jefes Firmantes*/
	    /* Separacion entre Lineas de 10 puntos*/
	    $pdf -> SetFont('Arial','',8);
	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+10);
	    $pdf -> ln();
	    $pdf -> ln();
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

	public function DeduccionesPensionadosEspecialesObreros($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

		$this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_DeduccionesPensionadosEspecialesObreros();
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
        $t_prestamo_caja = 0;
        $t_sindicato = 0;
        $t_total = 0;

        foreach ($data as $key) {

       	if ($key['sueldo'] !=0) {

         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria + $prestamo_caja + $sindicato; else $total = 0;


         }else{

         	if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

	    	if($key['status'] !=0) $total = $deduccion_caja + $funeraria +$prestamo_caja + $sindicato; else $total = 0;
         }

   
         	if($key['status'] == 1){
                $status = 'ACTIVO';
            }else{
                $status = 'SUSPENDIDO';
            }


		    $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(15);
            $pdf -> Cell(6,5, ++$i,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(20,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
            $pdf -> Cell(20,5, $status,1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$sindicato),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

		    $t_funeraria += $funeraria;
		    $t_sindicato += $sindicato;
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
		        $pdf-> ln();
            }
	    }

	     $pdf -> SetFont('Arial','B',6); 
        $pdf -> SetX(15);
        $pdf -> Cell(123,5, 'TOTAL: ',1,0,'C');
        $pdf -> Cell(20,5, $this->moneda($t_funeraria),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda($t_sindicato),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda($t_total),1,1,'R');

	
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

	public function NetoPensionadosEspecialesObreros($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

		
		$this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_NetoCobrarPensionadosEspecialesObreros();
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

        foreach ($data as $key) {


        	if ($key['sueldo'] !=0) {

         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja + $sindicato; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/

         }else{
         	
         	/*======================================================================================================*/

            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base'] ; else $sueldo_mensual = 0;
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2 ; else $sueldo_base = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['status'] !=0) $asignaciones = $sueldo_base + $prima_profesion; else $asignaciones = 0;

            /*======================================================================================================*/
     
            if($key['status'] !=0) $sueldo_mensual = $key['sueldo_base']/2 ; else $sueldo_mensual = 0;
         	if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            if($key['status'] !=0 AND $key['caja_ahorro'] !=0) $porcentaje_caja = $key['porcentaje_caja']; else $porcentaje_caja = 0;

            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                $prestamo_caja = $key['prestamo_caja_ahorro']; 
            else $prestamo_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (400000*0.01) / 2; else 
            $sindicato = 0;

	    	if($key['status'] !=0) $deducciones = $deduccion_caja + $funeraria +$prestamo_caja + $sindicato; else $deducciones = 0;

	    	/*======================================================================================================*/

	    	if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;

	    	/*======================================================================================================*/
         }

   
         	if($key['status'] == 1){
         		$status = 'ACTIVO';
         	}else{
         		$status = 'SUSPENDIDO';
         	}


		    $pdf -> SetFont('Arial','',6);
		    $pdf -> SetX(5);
		    $pdf -> Cell(6,5, ++$i,1,0,'C');
		    $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
		    $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
		    $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
		    $pdf -> Cell(18,5, $this->fecha($key['fecha_ingreso_institucion']),1,0,'C');
		    $pdf -> Cell(20,5, $this->mayus(substr($key['cargo'],0,50)),1,0,'L');
		    $pdf -> Cell(25,5, $this->moneda(@$asignaciones),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$deducciones),1,0,'R');
		    $pdf -> Cell(25,5, $this->moneda(@$neto),1,1,'R');

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
            }
	    }

	    $pdf -> SetFont('Arial','B',6); 
    	$pdf -> SetX(5);
	    $pdf -> Cell(121,5, 'TOTAL: ',1,0,'C');
	    $pdf -> Cell(25,5, $this->moneda($t_asignacion),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_deduccion),1,0,'R');
	    $pdf -> Cell(25,5, $this->moneda($t_neto),1,1,'R');

	
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+6);
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

	public function AcumuladoPensionadosObrerosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

    	$this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

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
      
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_sindicato = 0;
        $t_funeraria = 0;

        $t_sueldo_dc = 0;

        $neto = 0;

        foreach ($data as $key) {

        	++$i;

            if ($key['sueldo'] !=0) {
                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                 if($key['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $key['dias_dejados_c']); else $sueldo_dc = 0;

                 if($key['status'] !=0) $var1 = $sueldo_base + $sueldo_dc; else $total = 0;

                   	if($key['sindicato'] != 0 AND $key['status'] !=0) 
		                $sindicato = (400000*0.01) / 2; else 
		            $sindicato = 0;

		            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

		            if($key['status'] !=0) $var2 = $funeraria + $sindicato; else $total = 0;

		            
                
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                if($key['status'] != 0) $status = 'ACTIVO'; else $status = 'SUSPENDIDO';

                if($key['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $key['dias_dejados_c']); else $sueldo_dc = 0;


                if($key['status'] !=0) $var1 = $sueldo_base + $sueldo_dc; else $total = 0;

                   	if($key['sindicato'] != 0 AND $key['status'] !=0) 
		                $sindicato = (400000*0.01) / 2; else 
		            $sindicato = 0;

		            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

		            if($key['status'] !=0) $var2 = $funeraria + $sindicato; else $total = 0;
            }

            @$t_asignacion += $var1;
            @$t_deduccion += $var2;
            @$t_sindicato += $sindicato;
            @$t_funeraria += $funeraria;

            $t_sueldo_dc += $sueldo_dc;
         }

        $t_total = $t_asignacion - $t_sueldo_dc;

        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(95,4,'Pension Quincenal',0,0);
        $pdf -> Cell(22,4,'4.07.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_total),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_sueldo_dc != 0){
        	$pdf -> SetX(5);
	        $pdf -> Cell(10,4,'1002',0,0);
	        $pdf -> Cell(95,4,'Sueldo dejado de cancelar ',0,0);
	        $pdf -> Cell(22,4,'4.07.01.01.00',0,0);

	        /* Calculo de totales por accion especifica*/
	        $pdf -> Cell(22,4, $this->moneda($t_sueldo_dc),0,0,'R');
	        $pdf -> Cell(22,4,'',0,0);
	        $pdf -> Cell(22,4,'',0,1);
        }
        

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2001',0,0);
        $pdf -> Cell(95,4,'Servicio de Funeraria',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_funeraria),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2002',0,0);
        $pdf -> Cell(95,4,'Sindicato',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_sindicato),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

         $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Totales',0,0);


        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($t_deduccion),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $neto = $t_asignacion - $t_deduccion;

        $pdf -> Cell(22,4,$this->moneda($neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

        $pdf -> ln();

        $pdf -> SetX(114);
        $pdf -> Cell(40,3,'Cantidad de Obreros',0,0);

        $pdf -> Cell(15,3,$i,1,0,'R');

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

    public function RequisionPensionadosEspecialesObreros($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 13;
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

    public function ResumenPensionadosObrerosEspeciales($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 13;
        $ms = $mes;
        $qs = $quincena;

     	$this->loadModel('ViewMrrhhHistoricoOPEsp');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoOPEsp->find('all', ['conditions' => $condicion]);

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
        

        $pdf = new PDF_ResumenNominaEmpleadosPensionados();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);

        $t_sueldo_base = 0;
        $t_prima_profesion  = 0;
        $t_total  = 0;

        $t_funeraria = 0;
        $t_caja = 0;

        $asignaciones = 0;
        $deducciones = 0;

        $t_neto = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(40);
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $asignacion = 0;
        $deduccion = 0;
        $neto = $asignacion - $deduccion;

    foreach ($data as $key) {

        if ($key['sueldo'] != 0) {

        	 if($key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;

            if($key['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $key['dias_dejados_c']); else $sueldo_dc = 0;

          
            if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $sueldo_dc; else $asignacion = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['x_deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                 $sindicato = (400000*0.01) / 2;
            else $sindicato = 0;
            
            if($key['status'] !=0) $deduccion = $funeraria + $sindicato; else $deduccion = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignacion - $deduccion;

            /*==================================================================================================*/

        }else{

        	 if($key['status'] !=0) $sueldo_base = $key['sueldo_base']/2; else $sueldo_base = 0;
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;

            if($key['dias_dejados_c'] != 0) $sueldo_dc = ((($sueldo_base * 2) / 30 ) * $key['dias_dejados_c']); else $sueldo_dc = 0;

          
            if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $sueldo_dc; else $asignacion = 0;
            
            /*==================================================================================================*/

            if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
             if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            if($key['sindicato'] != 0 AND $key['status'] !=0) 
                $sindicato = (400000*0.01) / 2;
            else $sindicato = 0;
            
            if($key['status'] !=0) $deduccion = $funeraria + $sindicato; else $deduccion = 0;

            /*==================================================================================================*/

            if($key['status'] !=0)@$neto = $asignacion - $deduccion;

            /*==================================================================================================*/

           
        }

        	

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
            $pdf -> Cell(80,4,'              Asignaciones'.'        '. '                Deducciones',1,1,'L');

            $pdf -> SetFont('Arial','B',8);

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');
            if($sueldo_dc != 0){
	            $pdf -> SetX(5);
	            $pdf -> Cell(130,3,'1002'.' Sueldo dejado de Cancelar',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'L');
	            $pdf -> Cell(30,3,' ',0,1,'L');
	            	        }
            if($funeraria != 0){
	            $pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2001'.' Servicio Funeraria',0,0,'L');
	            $pdf -> Cell(30,3,' ',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'L');
	        }if($sindicato != 0){
	            $pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2002'.' Sindicato',0,0,'L');
	            $pdf -> Cell(30,3,' ',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'L');
	        }
            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> ln();
            $pdf -> SetX(15); /*Totales*/
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,' Total Empleado',1,0,'R');
            $pdf -> Cell(30,4, $this->moneda($asignacion),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deduccion),1,1,'L');

            $neto = $asignacion - $deduccion;

            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'Neto',1,0,'C');
            $pdf -> Cell(30,4, $this->moneda($neto),1,0,'L');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);
            $pdf -> SetFont('Arial','',8);

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
                    $pdf -> MultiCell(140,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }
            }

            $t_asignacion += $asignacion;
            $t_deduccion += $deduccion;

            $t_neto = $t_asignacion - $t_deduccion;
        }


        		$pdf -> ln();
                $pdf -> ln();
                $pdf -> SetX(150);
                $pdf -> Cell(10,7,'_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________',0,1,'C');
                 $pdf -> SetFont('Arial','B',8);
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
