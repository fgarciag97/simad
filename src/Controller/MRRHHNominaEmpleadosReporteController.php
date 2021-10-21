<?php
namespace App\Controller;

use App\Controller\AppController;

/*============================ ENCABEZADOS ===============================*/

/*------------------------------ FIJOS ------------------------------------*/
class PDF_AsignacionesEmpleadosFijos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS FIJOS',0,1,'C');
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
        $this->MultiCell(50,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(156);
        $this->MultiCell(17,20,'GRUPO',1,'C',0);

        $this->SetY(40);
        $this->SetX(173);
        $this->MultiCell(17,5,'
SUELDO BASICO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(190);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(206);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(221);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(241);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(258);
        $this->MultiCell(15,5,'
 BECAS QUINCENAL
            ',1,'C',0);
        $this->SetY(40);
        $this->SetX(273);
        $this->MultiCell(20,5,'
TOTAL ASIGNACION

',1,'C',0); 
    }
}



/*==========================================================================================*/

class PDF_DeduccionesEmpleadosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');

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
        $this->MultiCell(15,5,'
FPJ

',1,'C',0);
        $this->SetY(30);
        $this->SetX(156);
        $this->MultiCell(25,5,'   
CAJA DE
AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(181);
        $this->MultiCell(25,5,'
PRESTAMO CAJA DE AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(20,5,' 
SERVICIOS FUNERARIOS
',1,'C',0);

        $this->SetY(30);
        $this->SetX(226);
        $this->MultiCell(20,5,'  
SINDICATO

',1,'C',0);

        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(10,5,'  
ASOC.

',1,'C',0);
        $this->SetY(30);
        $this->SetX(256);
        $this->MultiCell(20,5,'  
DEPOSITARIO
JUDICIAL
',1,'C',0);
        $this->SetY(30);
        $this->SetX(276);
        $this->MultiCell(20,5,'  
TOTAL DEDUCCIONES
',1,'C',0);
    }
}

class PDF_AportePatronalEmpleadosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE APORTE PATRONALES',0,1,'C');

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
APORTA PATRONAL FPJ

',1,'C',0);
        $this->SetY(30);
        $this->SetX(221);
        $this->MultiCell(25,5,'
APORTE PATRONAL CAJA DE AHORRO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(25,5,'   
TOTAL APORTE

',1,'C',0); 
    }
}

class PDF_NetoCobrarEmpleadosFijos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        
        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS FIJOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',6);

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

class PDF_ResumenNominaEmpleadosContratados extends \FPDF {
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

class PDF_ResumenNominaDirectivos extends \FPDF {
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

/*----------------------------- CONTRATADOS -----------------------------*/
class PDF_AsignacionesEmpleadosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS CONTRATADOS',0,1,'C');
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
        $this->MultiCell(50,20,'CARGO',1,'C',0);

        $this->SetY(40);
        $this->SetX(156);
        $this->MultiCell(17,20,'GRUPO',1,'C',0);

        $this->SetY(40);
        $this->SetX(173);
        $this->MultiCell(17,5,'
SUELDO BASICO

',1,'C',0);
        $this->SetY(40);
        $this->SetX(190);
        $this->MultiCell(16,5,'
PRIMA PROFESION

',1,'C',0);
        $this->SetY(40);
        $this->SetX(206);
        $this->MultiCell(15,5,'
PRIMA HIJOS

',1,'C',0);
        $this->SetY(40);
        $this->SetX(221);
        $this->MultiCell(20,5,'
PRIMA ANTIGUEDAD

',1,'C',0);
        $this->SetY(40);
        $this->SetX(241);
        $this->MultiCell(17,5,'
PRIMA HOGAR

',1,'C',0);
        $this->SetY(40);
        $this->SetX(258);
        $this->MultiCell(15,5,'
 BECAS QUINCENAL
            ',1,'C',0);
        $this->SetY(40);
        $this->SetX(273);
        $this->MultiCell(20,5,'
TOTAL ASIGNACION

',1,'C',0); 
    }
}

class PDF_DeduccionesEmpleadosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');

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
        $this->MultiCell(15,5,'
FPJ

',1,'C',0);
        $this->SetY(30);
        $this->SetX(156);
        $this->MultiCell(25,5,'
CAJA DE
AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(181);
        $this->MultiCell(25,5,'
PRESTAMO CAJA DE AHORRO
',1,'C',0);
        $this->SetY(30);
        $this->SetX(206);
        $this->MultiCell(20,5,'
SERVICIOS FUNERARIOS
',1,'C',0);

        $this->SetY(30);
        $this->SetX(226);
        $this->MultiCell(20,5,'
SINDICATO

',1,'C',0);

        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(10,5,'
ASOC.

',1,'C',0);
        $this->SetY(30);
        $this->SetX(256);
        $this->MultiCell(20,5,'
DEPOSITARIO
JUDICIAL
',1,'C',0);
        $this->SetY(30);
        $this->SetX(276);
        $this->MultiCell(20,5,'
TOTAL DEDUCCIONES
',1,'C',0);
    }
}

class PDF_AportePatronalEmpleadosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE APORTE PATRONALES',0,1,'C');
        /*$this->SetX(110);
        $this->Cell(80,5,'CORRESPONDIENTE A LA FECHA:'. ' '. date('d/m/Y'),0,1,'C');*/

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
APORTE PATRONAL CAJA DE AHORRO

',1,'C',0);
        $this->SetY(30);
        $this->SetX(221);
        $this->MultiCell(25,5,'   
TOTAL APORTE

',1,'C',0); 
    }
}

class PDF_NetoCobrarEmpleadosContratados extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        
        $this->SetX(110);
        $this->Cell(80,5,'EMPLEADOS CONTRATADOS',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(10);
        $this->MultiCell(10,20,'Nro',1,'J',0);
        $this->SetY(30);
        $this->SetX(20);
        $this->MultiCell(20,20,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(40);
        $this->MultiCell(40,20,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(80);
        $this->MultiCell(40,20,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(120);
        $this->MultiCell(50,20,'CARGO',1,'C',0);
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

/*----------------------------- DIRECTIVOS -----------------------------*/
class PDF_AsignacionesDirectivos extends \FPDF {
    function Header()
    {
         $this->SetFont('Arial','B',6);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'PERSONAL DIRECTIVO',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE ASIGNACIONES',0,1,'C');

        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(17,5,'CEDULA
            ',1,'C',0);
        $this->SetY(35);
        $this->SetX(28);
        $this->MultiCell(30,5,'APELLIDO
            ',1,'C',0);
        $this->SetY(35);
        $this->SetX(58);
        $this->MultiCell(30,5,'NOMBRES
            ',1,'C',0);
        $this->SetY(35);
        $this->SetX(88);
        $this->MultiCell(60,5,'CARGO
            ',1,'C',0);
        $this->SetY(35);
        $this->SetX(148);
        $this->MultiCell(17,5,'SUELDO MENSUAL',1,'C',0);
        $this->SetY(35);
        $this->SetX(165);
        $this->MultiCell(17,5,'SUELDO QUINCENAL',1,'C',0);
        $this->SetY(35);
        $this->SetX(182);
        $this->MultiCell(20,5,'ALTOS FUN. ELEC. POPULAR.',1,'C',0);
        $this->SetY(35);
        $this->SetX(202);
        $this->MultiCell(20,5,'PRIMA ANTIGUEDAD',1,'C',0);
        $this->SetY(35);
        $this->SetX(222);
        $this->MultiCell(22,10,'PRIMA HIJOS',1,'C',0);
        $this->SetY(35);
        $this->SetX(244);
        $this->MultiCell(30,5,'PRIMA PROFESIONALIZACION',1,'C',0);
        $this->SetY(35);
        $this->SetX(274);
        $this->MultiCell(20,10,'TOTAL',1,'C',0); 
    }
}

/*==================================================================================================================*/

class PDF_DeduccionesDirectivos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'PERSONAL DIRECTIVO',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE DE DEDUCCIONES',0,1,'C');

        $this->SetFont('Arial','B',6);
        $this->SetY(35);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(35);
        $this->SetX(11);
        $this->MultiCell(25,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(36);
        $this->MultiCell(40,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(76);
        $this->MultiCell(40,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(116);
        $this->MultiCell(20,10,'SSO',1,'C',0);
        $this->SetY(35);
        $this->SetX(136);
        $this->MultiCell(15,10,'RPE',1,'C',0);
        $this->SetY(35);
        $this->SetX(151);
        $this->MultiCell(20,10,'FAOV',1,'C',0);
        $this->SetY(35);
        $this->SetX(171);
        $this->MultiCell(15,10,'FPJ',1,'C',0);
        $this->SetY(35);
        $this->SetX(186);
        $this->MultiCell(25,10,'CAJA DE AHORRO',1,'C',0);
        $this->SetY(35);
        $this->SetX(211);
        $this->MultiCell(25,5,'PRESTAMO CAJA DE AHORRO',1,'C',0);
        $this->SetY(35);
        $this->SetX(236);
        $this->MultiCell(20,5,'SERVICIOS FUNERARIOS',1,'C',0);
        $this->SetY(35);
        $this->SetX(256);
        $this->MultiCell(20,5,'TOTAL DEDUCCIONES',1,'C',0);
    }
}

/*==================================================================================================================*/


class PDF_AportePatronalDirectivos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'PERSONAL DIRECTIVO',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE APORTE PATRONALES',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(30);
        $this->SetX(5);
        $this->MultiCell(6,10,'N',1,'J',0);
        $this->SetY(30);
        $this->SetX(11);
        $this->MultiCell(25,10,'CEDULA',1,'C',0);
        $this->SetY(30);
        $this->SetX(36);
        $this->MultiCell(40,10,'APELLIDO',1,'C',0);
        $this->SetY(30);
        $this->SetX(76);
        $this->MultiCell(40,10,'NOMBRES',1,'C',0);
        $this->SetY(30);
        $this->SetX(116);
        $this->MultiCell(25,5,'APORTE PATRONAL SSO',1,'C',0);
        $this->SetY(30);
        $this->SetX(141);
        $this->MultiCell(25,5,'APORTE PATRONAL RPE',1,'C',0);
        $this->SetY(30);
        $this->SetX(166);
        $this->MultiCell(30,10,'APORTE PATRONAL FAOV',1,'C',0);
        $this->SetY(30);
        $this->SetX(196);
        $this->MultiCell(25,5,'APORTE PATRONAL FPJ',1,'C',0);
        $this->SetY(30);
        $this->SetX(221);
        $this->MultiCell(25,5,'APORTE PATRONAL CAJA DE AHORRO',1,'C',0);
        $this->SetY(30);
        $this->SetX(246);
        $this->MultiCell(25,10,'TOTAL APORTE',1,'C',0); 
    }
}

/*==================================================================================================================*/

class PDF_NetoCobrarDirectivos extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/Alcaldia_logo.png',15,5,40,25,"PNG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,5,35,25,"JPG","");

        $this->SetX(110);
        $this->Cell(80,5,'PERSONAL DIRECTIVO',0,1,'C');
        $this->SetX(110);
        $this->Cell(80,5,'REPORTE NETO A COBRAR',0,1,'C');

        $this->SetFont('Arial','B',8);

        $this->SetY(35);
        $this->SetX(10);
        $this->MultiCell(10,10,'Nro',1,'J',0);
        $this->SetY(35);
        $this->SetX(20);
        $this->MultiCell(20,10,'CEDULA',1,'C',0);
        $this->SetY(35);
        $this->SetX(40);
        $this->MultiCell(30,10,'APELLIDO',1,'C',0);
        $this->SetY(35);
        $this->SetX(70);
        $this->MultiCell(30,10,'NOMBRES',1,'C',0);
        $this->SetY(35);
        $this->SetX(100);
        $this->MultiCell(70,10,'CARGO',1,'C',0);
        $this->SetY(35);
        $this->SetX(170);
        $this->MultiCell(30,10,'SUELDO BASICO',1,'C',0);
        $this->SetY(35);
        $this->SetX(200);
        $this->MultiCell(30,5,'TOTAL ASIGNACIONES',1,'C',0);
        $this->SetY(35);
        $this->SetX(230);
        $this->MultiCell(30,5,'TOTAL DEDUCCIONES',1,'C',0);
        $this->SetY(35);
        $this->SetX(260);
        $this->MultiCell(30,10,'NETO A PAGAR',1,'C',0);
    }
}


/*===========================================================================
/*============================ REPORTES PDF ===============================*/

class MRRHHNominaEmpleadosReporteController extends AppController
{
    /*------------------------------ FIJOS ---------------------------------*/

	public function AsignacionesEmpleadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;


        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AsignacionesEmpleadosFijos('L','mm',array(300,250));
        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

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
        $pdf -> SetX(135);
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

        $pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln(); 

        $sueldo_dc = 0;
        $sueldo = 0;
        $profesion = 0;
        $hijos = 0;
        $antiguedad = 0;

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $i  = 0;

        $inicial = 0;
        $primaria = 0;
        $secundaria = 0;
        $universitaria = 0;
        $discapacidad = 0;

        foreach ($data as $key) {

         
        // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        /*if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;*/


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
        //==========================================================================================================

         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

        // ============================================= PRIMAS 
        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
        //==========================================================================================================


         if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

         
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/
            if($key['status'] !=0) $total = 
                $sueldo + 
                $profesion + 
                $antiguedad + 
                $prima_hogar + 
                $hijos + 
                $becas;
            else $total = 0;
        
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
            $pdf -> Cell(17,5, $this->moneda(@$sueldo),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda(@$profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$hijos),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$becas),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            /*======================================================================================================*/
            /*====================================== TOTAL EN COLUMNAS ============================================*/
            @$t_sueldo_base += $sueldo;
            @$t_prima_profesion  += $profesion;
            @$t_prima_hijos  += $hijos;
            @$t_prima_antiguedad  += $antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
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
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
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

	public function DeduccionesEmpleadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_DeduccionesEmpleadosFijos('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','B',6);


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
        $pdf -> SetX(135);

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

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 
            

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



        // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
       /* if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

        $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;*/

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
        //==========================================================================================================



             //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;



            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================




             //cuando existan ajustes de primas o Sueldo 
             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;


             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
             

             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
             

             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;



            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso'] / 2; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe'] / 2; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj'] / 2; else $deduccion_fpj = 0;

            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;


            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;

            //if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = $key['prestamo_caja_ahorro'];else $prestamo_caja = 0;

            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================

            if($key['ajuste_a_caja'] != 0) $funeraria = $funeraria + $key['ajuste_a_caja'];

            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;



            if($key['status'] !=0) $total = 
                $sso + 
                $rpe + 
                $fpj + 
                $faov_dc + 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $total = 0;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
            @$t_sso += $sso;
            @$t_rpe += $rpe;
            @$t_faov += $faov *2;
            @$t_fpj += $fpj;
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
            $pdf -> Cell(15,5, $this->moneda(@$sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$rpe),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$faov_dc),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$fpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja, 2, ',', '.'),1,0,'R');
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
        $pdf -> SetFont('Arial','',6);
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

	public function AportePatronalEmpleadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;
        $qs = $quincena;
        
        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AportePatronalEmpleadosFijos('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
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
                    $pdf -> SetX(110);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 
        
        $pdf -> SetFont('Arial','B',8);   

        $i = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_caja = 0;
        $t_total = 0;

        foreach ($data as $key) {

            // ============================================= SUELDO BASE 
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            //==========================================================================================================

            // ============================================ BECAS ESCOLARES 
           /* if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;*/

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
            //==========================================================================================================

             //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================


            // ============================================= APORTES DE LEY 
            if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso'] /2; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe'] /2; else $aporte_patronal_arpe = 0;
            if($key['status'] !=0) $aporte_patronal_afpj = $key['aporte_patronal_afpj'] / 2; else $aporte_patronal_afpj = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2;else $aporte_deduccion_caja = 0;
            if($key['status'] !=0) $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02) / 2;else$afaov = 0;
            //==========================================================================================================

 
            // ============================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $asso_dc = (($aporte_patronal_asso / 30) * $key['dias_dejados_c']); else $asso_dc = $aporte_patronal_asso;
            if($key['dias_dejados_c'] !=0) $arpe_dc = (($aporte_patronal_arpe / 30) * $key['dias_dejados_c']); else $arpe_dc = $aporte_patronal_arpe;
            if($key['dias_dejados_c'] !=0) $afaov_dc = (($afaov / 30) * $key['dias_dejados_c']); else $afaov_dc = $afaov;
            if($key['dias_dejados_c'] !=0) $afpj_dc = (($aporte_patronal_afpj / 30) * $key['dias_dejados_c']); else $afpj_dc = $aporte_patronal_afpj;
            //==========================================================================================================


            if($asso_dc != 0) $asso =  $aporte_patronal_asso + $asso_dc; else $asso = $aporte_patronal_asso;
            if($asso_dc != 0) $arpe =  $aporte_patronal_arpe + $arpe_dc; else $arpe = $aporte_patronal_arpe;
            if($asso_dc != 0) $afaov_dc =  $afaov + $afaov_dc; else $sso = $afaov;
            if($asso_dc != 0) $afpj =  $aporte_patronal_afpj + $afpj_dc; else $afpj = $aporte_patronal_afpj;



            if($key['status'] !=0) $total = 
                $asso + 
                $arpe + 
                $afaov_dc + 
                $afpj + 
                $aporte_deduccion_caja;
            else $total = 0;


            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus(@$key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus(@$key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$asso),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$arpe),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$afaov_dc),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$afpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');


            $t_asso += $asso; 
            $t_arpe += $arpe;
            $t_afaov += $afaov;
            $t_afpj += $afpj;
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
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                } 

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);
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

	public function NetoCobrarEmpleadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_NetoCobrarEmpleadosFijos('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
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
                    $pdf -> SetX(110);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln();
        
        $pdf -> SetFont('Arial','B',8);

        $i = 0;
        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

        // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
       /* if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;*/

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
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

                 
                /*======================================================================================================*/
                /*====================================== TOTAL ASIGNACIONES ============================================*/
                    if($key['status'] !=0) $asignacion = 
                        $sueldo + 
                        $profesion + 
                        $antiguedad + 
                        $prima_hogar + 
                        $hijos + 
                        $becas;
                    else $asignacion = 0;

                
            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso'] / 2; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe'] / 2; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj'] / 2; else $deduccion_fpj = 0;

            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            //if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = $key['prestamo_caja_ahorro'];else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;


                    if($key['status'] !=0) $deduccion = 
                        $sso + 
                        $rpe + 
                        $fpj + 
                        $faov_dc + 
                        $deduccion_caja + 
                        $funeraria + 
                        $sindicato + 
                        $asociacion +
                        $prestamo_caja;
                     else $deduccion = 0;

            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/

            $pdf -> SetFont('Arial','',8);
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
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

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
        $pdf -> SetY($y+3);
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

	public function AcumuladoEmpleadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


    	$pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

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

        $deducciones = 0;
        $t_prestamo_caja = 0;

        $t_ajuste_sueldo = 0;

        foreach ($data as $key) {

            ++$i;
            
            // ============================================= SUELDO BASE 
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            //==========================================================================================================

            // ============================================ BECAS ESCOLARES 
            /*if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;*/


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
            //==========================================================================================================

             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================


             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
             

             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

             
            /*======================================================================================================*/
            /*====================================== TOTAL ASIGNACIONES ============================================*/
                if($key['status'] !=0) $total = 
                    $sueldo + 
                    $ajuste_sueldo + 
                    $profesion + 
                    $antiguedad + 
                    $prima_hogar + 
                    $hijos + 
                    $becas;
                else $total = 0;


            @$t_sueldo_base += $sueldo;
            @$t_prima_profesion  += $profesion;
            @$t_prima_antiguedad  += $antiguedad;
            @$t_prima_hijos += $hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_ajuste_sueldo  += $ajuste_sueldo;
            @$t_becas += $becas;


            $var1 = $t_sueldo_base + @$t_prima_hijos + @$t_prima_antiguedad + @$t_prima_hogar + @$t_becas + @$t_prima_profesion +$t_ajuste_sueldo ;


            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj']; else $deduccion_fpj = 0;
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01); else $faov = 0;

            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
           //if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = $key['prestamo_caja_ahorro'];else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================

            if($key['ajuste_a_caja'] != 0) $funeraria = $funeraria + $key['ajuste_a_caja'];

            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;

                    $t_sso += $deduccion_sso;
                    $t_rpe += $deduccion_rpe;
                    $t_fpj += $deduccion_fpj;
                    $t_caja += $deduccion_caja;
                    $t_prestamo_caja += $prestamo_caja;
                    $t_funeraria += $funeraria;
                    $t_faov += $faov;
                    


            $var2 =  @$t_sso +  @$t_rpe + @$t_fpj + @$t_caja + @$t_prestamo_caja + @$t_faov + @$t_funeraria;

            /*======================================================================================================*/
            /*====================================== CALCULOS APORTES ==========================================*/

            // ============================================= APORTES DE LEY 
            if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso'] /2; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe'] /2; else $aporte_patronal_arpe = 0;
            if($key['status'] !=0) $aporte_patronal_afpj = $key['aporte_patronal_afpj'] / 2; else $aporte_patronal_afpj = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2;else $aporte_deduccion_caja = 0;
            if($key['status'] !=0) $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02) / 2;else$afaov = 0;
            //==========================================================================================================

 
            // ============================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $asso_dc = (($aporte_patronal_asso / 30) * $key['dias_dejados_c']); else $asso_dc = $aporte_patronal_asso;
            if($key['dias_dejados_c'] !=0) $arpe_dc = (($aporte_patronal_arpe / 30) * $key['dias_dejados_c']); else $arpe_dc = $aporte_patronal_arpe;
            if($key['dias_dejados_c'] !=0) $afaov_dc = (($afaov / 30) * $key['dias_dejados_c']); else $afaov_dc = $afaov;
            if($key['dias_dejados_c'] !=0) $afpj_dc = (($aporte_patronal_afpj / 30) * $key['dias_dejados_c']); else $afpj_dc = $aporte_patronal_afpj;
            //==========================================================================================================


            if($asso_dc != 0) $asso =  $aporte_patronal_asso + $asso_dc; else $asso = $aporte_patronal_asso;
            if($asso_dc != 0) $arpe =  $aporte_patronal_arpe + $arpe_dc; else $arpe = $aporte_patronal_arpe;
            if($asso_dc != 0) $afaov_dc =  $afaov + $afaov_dc; else $sso = $afaov;
            if($asso_dc != 0) $afpj =  $aporte_patronal_afpj + $afpj_dc; else $afpj = $aporte_patronal_afpj;

            if($key['status'] !=0) $total = 
                $asso + 
                $arpe + 
                $afaov_dc + 
                $afpj + 
                $aporte_deduccion_caja;
            else $total = 0;

            $t_asso += $asso; 
            $t_arpe += $arpe;
            $t_afaov += $afaov_dc;
            $t_afpj += $afpj;
            $t_acaja += $aporte_deduccion_caja;

            $var3 =  $t_asso  + $t_arpe + $t_afpj + $t_afaov + $t_acaja;
        }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Sueldo Basico Tiempo Completo',0,0,'L');
        $pdf -> Cell(22,4,'4.01.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_ajuste_sueldo != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1002',0,0);
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Ajuste de sueldo ',0,0);
            $pdf -> Cell(10,4,'4.01.01.01.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(15,4, $this->moneda($t_ajuste_sueldo),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }


        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1003',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Prima de Profesion',0,0);
        $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1004',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Prima Por Hijo',0,0);
        $pdf -> Cell(22,4,'4.01.03.04.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_hijos),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1005',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);


        if($t_prima_hogar != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1006',0,0);
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Prima por Hogar',0,0);
            $pdf -> Cell(22,4,'4.01.03.03.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_hogar),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1007',0,0);
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Beca Escolares',0,0);
            $pdf -> Cell(22,4,'4.01.07.02.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_becas),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2001',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Seguro Social Obligatorio',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_sso),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2002',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_rpe),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2003',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_faov),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2004',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Fondo de Pension y Jubilacion',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_fpj),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2005',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Caja de Ahorro a Empleados',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_caja),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        if($t_prestamo_caja != 0){
        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2006',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Depositario Judicial',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,$this->moneda($t_x_depositario),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3001',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del SSO',0,0);
        $pdf -> Cell(22,4,'4.01.04.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_asso),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3002',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'4.01.06.04.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_arpe),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3003',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'4.01.06.05.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_afaov),0,1,'R');


        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3004',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del Fondo de Pension y Jubilacion',0,0);
        $pdf -> Cell(22,4,'4.01.06.03.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_afpj),0,1,'R');


        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3005',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal Caja de Ahorro a Empleados',0,0);
        $pdf -> Cell(22,4,'4.01.07.07.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_acaja),0,1,'R');


        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(110);
        $pdf -> Cell(25,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($var1),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($var2),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($var3),1,1,'R');

        $pdf -> SetX(110);
        $pdf -> Cell(25,3,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($var1 - $var2),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(10,3,$i,1,0,'R');

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

    public function RequisionEmpleadosFijos($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 1;
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


    public function ResumenNominaEmpleadosFijos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 1;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosFijos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosFijos->find('all', ['conditions' => $condicion]);

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
        
        /* Membrete Faltan Imagenes a los lados */
        

        $pdf = new PDF_ResumenNominaEmpleadosFijos();
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

         $pdf -> SetFont('Arial','B',8);

         $pdf -> SetFont('Arial','',8);
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(50);
                    $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
                    $pdf -> SetX(90);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

        $sueldo_base = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;

        foreach ($data as $key) {

        // ============================================= SUELDO BASE 
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            //==========================================================================================================

            // ============================================ BECAS ESCOLARES 
            /*if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;*/

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
            //==========================================================================================================

             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================


             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
             

             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

                 
                /*======================================================================================================*/
                /*====================================== TOTAL ASIGNACIONES ============================================*/
                    if($key['status'] !=0) $asignaciones = 
                        $sueldo + 
                        $profesion + 
                        $antiguedad + 
                        $prima_hogar + 
                        $hijos + 
                        $becas;
                    else $asignaciones = 0;

                



            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;



            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================




             //cuando existan ajustes de primas o Sueldo 
             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;


             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
             

             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
             

             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;



            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso'] / 2; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe'] / 2; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = $key['deduccion_fpj'] / 2; else $deduccion_fpj = 0;

            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;


            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $deduccion_caja = $key['deduccion_caja_ahorro']; else $deduccion_caja = 0;
            //if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = $key['prestamo_caja_ahorro'];else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================

            if($key['ajuste_a_caja'] != 0) $funeraria = $funeraria + $key['ajuste_a_caja'];

            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;



            if($key['status'] !=0) $deducciones = 
                $sso + 
                $rpe + 
                $fpj + 
                $faov_dc + 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $deducciones = 0;


                        $t_asignacion += $asignaciones;
                        $t_deduccion += $deducciones;
                        


                        $t_neto = $t_asignacion - $t_deduccion;

            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignaciones - $deducciones; else $neto = 0;



            if($key['status'] !=0) $sueldo_base = $key['sueldo_base']; else $sueldo_base = 0;

            $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
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

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base/2),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Ajuste de Sueldo ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($key['dias_dejados_c'] != 0 AND $sueldo_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Sueldo dejado de Cancelar ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
	            $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_antiguedad),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Hijos',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_hijos),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hogar != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'L');
	            $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hijos != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'L');
	            $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_antiguedad != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'L');
	            $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($becas != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($becas),0,0,'L');
	            $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($deduccion_sso != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'L');
            }

            if ($deduccion_rpe != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'L');
            }

            if ($faov != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($faov * 2),0,1,'L');
            }

            if ($deduccion_fpj != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2004'.' Fondo de Jubilacion y Pension',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($deduccion_fpj),0,1,'L');
            }

            if ($key['dias_dejados_c'] != 0 AND $sso_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sso_dc),0,1,'L');
            }

            if ($key['dias_dejados_c'] != 0 AND $rpe_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Regimen Prestacional dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($rpe_dc),0,1,'L');
            }

            if ( $key['dias_dejados_c'] != 0 AND $faov_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' LPH dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'L');
            }

            if ( $key['dias_dejados_c'] != 0 AND $fpj_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.'Fondo de Pension dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'L');
            }

            if ($deduccion_caja != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2007'.' Caja de Ahorro',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'L');
            }

            if ($prestamo_caja != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2008'.' Prestamo Caja de Ahorro',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'L');
            }

            if ($funeraria != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2009'.' Servicio Funeraria',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($funeraria),0,1,'L');
            }if ($sindicato != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2011'.' Desc.Sindicato',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'L');
            }if ($asociacion != 0) {
            	$pdf -> SetX(5);
	            $pdf -> Cell(130,3,'2012'.' Desc. Asociacion Funeraria',0,0,'L');
	            $pdf -> Cell(40,3,'',0,0,'L');
	            $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'L');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
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
                if($concepto['status'] == 0){
                    $pdf -> SetX(70);
                    $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
                } else {
                    $pdf -> SetX(50);
                    $pdf -> MultiCell(120,5,$concepto['concepto'],0,'C',0);
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

            $pdf -> ln();$pdf -> ln();$pdf -> ln();
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



    /*----------------------------- CONTRATADOS -----------------------------=*/

    public function AsignacionesEmpleadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;
        
        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AsignacionesEmpleadosContratados('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

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
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 

        $sueldo_dc = 0;
        $sueldo = 0;
        $profesion = 0;
        $hijos = 0;
        $antiguedad = 0;

        $t_sueldo_base = 0;
        $t_prima_hijos  = 0;
        $t_prima_antiguedad  = 0;
        $t_prima_profesion  = 0;
        $t_prima_hogar  = 0;
        $t_total  = 0;
        $i  = 0;


        foreach ($data as $key) {

         
        // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================

         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

        // ============================================= PRIMAS 
        if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
        if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

        if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
        if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
        //==========================================================================================================


         if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

         
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/
            if($key['status'] !=0) $total = 
                $sueldo + 
                $profesion + 
                $antiguedad + 
                $prima_hogar + 
                $hijos + 
                $becas;
            else $total = 0;
        
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
            $pdf -> Cell(17,5, $this->moneda(@$sueldo),1,0,'R');
            $pdf -> Cell(16,5, $this->moneda(@$profesion),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$hijos),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$antiguedad),1,0,'R');
            $pdf -> Cell(17,5, $this->moneda(@$prima_hogar),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$becas),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            /*======================================================================================================*/
            /*====================================== TOTAL EN COLUMNAS ============================================*/
            @$t_sueldo_base += $sueldo;
            @$t_prima_profesion  += $profesion;
            @$t_prima_hijos  += $hijos;
            @$t_prima_antiguedad  += $antiguedad;
            @$t_prima_hogar  += $prima_hogar;
            @$t_becas += $becas;
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
                        $pdf -> SetX(90);
                        $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
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
        $pdf->ln();
        $pdf->ln();
        $pdf->ln();

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

    public function DeduccionesEmpleadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_DeduccionesEmpleadosContratados('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();
        
        $pdf -> SetFont('Arial','B',6);


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
        $pdf -> SetX(135);

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

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 
            

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



        // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

        $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================



             //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;



            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;

            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================




             //cuando existan ajustes de primas o Sueldo 
             if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;

             if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
             if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
             if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;


             if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
             

             if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
             

             if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
             if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
             if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;



            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;
            if($key['status'] !=0) $deduccion_fpj = 0; else $deduccion_fpj = 0;

            //no funciona
            //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

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
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            if($key['dias_dejados_c'] !=0) $fpj_dc = (($deduccion_fpj / 30) * $key['dias_dejados_c']); else $fpj_dc = $deduccion_fpj;
            //==========================================================================================================

            if($key['ajuste_a_caja'] != 0) $funeraria = $funeraria + $key['ajuste_a_caja'];

            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;
            if($sso_dc != 0) $fpj =  $deduccion_fpj + $fpj_dc; else $fpj = $deduccion_fpj;



            if($key['status'] !=0) $total = 
                $sso + 
                $rpe + 
                $fpj + 
                $faov + 
                $deduccion_caja + 
                $funeraria + 
                $sindicato + 
                $asociacion +
                $prestamo_caja +
                $x_depositario;
             else $total = 0;

            /*======================================================================================================*/
            /*====================================== TOTAL COLUMNAS ================================================*/
            @$t_sso += $sso;
            @$t_rpe += $rpe;
            @$t_faov += $faov;
            @$t_fpj += $fpj;
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
            $pdf -> Cell(15,5, $this->moneda(@$sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$rpe),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$faov_dc),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$fpj),1,0,'R');
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
        $pdf -> SetFont('Arial','',6);
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

    public function AportePatronalEmpleadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AportePatronalEmpleadosContratados('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
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
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln(); 
        
        $pdf -> SetFont('Arial','B',8);   

        $i = 0;
        $t_asso = 0;
        $t_arpe = 0;
        $t_afaov = 0;
        $t_afpj = 0;
        $t_caja = 0;
        $t_total = 0;

        foreach ($data as $key) {

            // ============================================= SUELDO BASE 
            if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
            //==========================================================================================================

            // ============================================ BECAS ESCOLARES 
            if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
            if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
            if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
            if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
            if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

             $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
            //==========================================================================================================

             //CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
             if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

            // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
            //==========================================================================================================


            // ============================================= APORTES DE LEY 
            if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso']; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30);else $aporte_deduccion_caja = 0;
            if($key['status'] !=0) $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02) / 2;else$afaov = 0;
            //==========================================================================================================

 
            // ============================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $asso_dc = (($aporte_patronal_asso / 30) * $key['dias_dejados_c']); else $asso_dc = $aporte_patronal_asso;
            if($key['dias_dejados_c'] !=0) $arpe_dc = (($aporte_patronal_arpe / 30) * $key['dias_dejados_c']); else $arpe_dc = $aporte_patronal_arpe;
            if($key['dias_dejados_c'] !=0) $afaov_dc = (($afaov / 30) * $key['dias_dejados_c']); else $afaov_dc = $afaov;
            //==========================================================================================================


            if($asso_dc != 0) $asso =  $aporte_patronal_asso + $asso_dc; else $asso = $aporte_patronal_asso;
            if($asso_dc != 0) $arpe =  $aporte_patronal_arpe + $arpe_dc; else $arpe = $aporte_patronal_arpe;
            if($asso_dc != 0) $afaov_dc =  $afaov + $afaov_dc; else $sso = $afaov;



            if($key['status'] !=0) $total = 
                $asso + 
                $arpe + 
                $afaov_dc + 
                $aporte_deduccion_caja;
            else $total = 0;


            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus(@$key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus(@$key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$asso),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$arpe),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$afaov_dc),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');


            $t_asso += $asso; 
            $t_arpe += $arpe;
            $t_afaov += $afaov_dc;
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
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                } 

                $pdf->ln();
                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(111,5, 'TOTAL' ,1,0,'C');

        $pdf -> Cell(25,5, $this->moneda(@$t_asso),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_arpe),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_afaov),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_caja),1,0,'R');
        $pdf -> Cell(25,5, $this->moneda(@$t_total),1,1,'R');

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

    public function NetoCobrarEmpleadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();


        $pdf = new PDF_NetoCobrarEmpleadosContratados('L','mm',array(300,250));

        $pdf -> SetMargins(3,8,3,3);
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
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

        $pdf->ln(); 
        $pdf->ln(); 
        $pdf->ln();
        
        $pdf -> SetFont('Arial','B',8);

        $i = 0;
        $t_incremento = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

        // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

                 
                /*======================================================================================================*/
                /*====================================== TOTAL ASIGNACIONES ============================================*/
                    if($key['status'] !=0) $asignacion = 
                        $sueldo + 
                        $profesion + 
                        $antiguedad + 
                        $prima_hogar + 
                        $hijos + 
                        $becas;
                    else $asignacion = 0;

                
            /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;

            //no funciona
            //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

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
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;


                    if($key['status'] !=0) $deduccion = 
                        $sso + 
                        $rpe + 
                        $faov_dc + 
                        $funeraria + 
                        $prestamo_caja;
                     else $deduccion = 0;

            /*=====================================================================================================================================*/

            if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;

            /*======================================================================================================================================*/

            $pdf -> SetFont('Arial','',8);
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
                    $pdf -> SetX(90);
                    $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                    $pdf -> SetX(135);
                    $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                }

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
        $pdf -> SetY($y+3);
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

    public function AcumuladoEmpleadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

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

        //$pdf = new \FPDF('L','mm','A4');
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
        $funeraria_dc = 0;
        $t_x_depositario = 0;

        $deducciones = 0;
        $t_prestamo_caja = 0;

        $t_ajuste_sueldo = 0;

        foreach ($data as $key) {

            ++$i;
            
            // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

         
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/
            if($key['status'] !=0) $total = 
                $sueldo + 
                $profesion + 
                $antiguedad + 
                $prima_hogar + 
                $hijos + 
                $becas;
            else $total = 0;
        
        /*======================================================================================================*/


            @$t_sueldo_base += $sueldo;
            @$t_prima_profesion  += $profesion;
            @$t_prima_antiguedad  += $antiguedad;
            @$t_prima_hijos += $hijos;
            @$t_prima_hogar  += $prima_hogar;
            @$t_ajuste_sueldo  += $ajuste_sueldo;
            @$t_becas += $becas;


            $var1 = $t_sueldo_base + @$t_prima_hijos + @$t_prima_antiguedad + @$t_prima_hogar + @$t_becas + @$t_prima_profesion +$t_ajuste_sueldo ;


          /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso'] * 2; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe'] * 2; else $deduccion_rpe = 0;

            //no funciona
            //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

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
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;


                    if($key['status'] !=0) $total = 
                        $sso + 
                        $rpe + 
                        $faov_dc + 
                        $funeraria + 
                        $prestamo_caja;
                     else $total = 0;

                    $t_sso += $deduccion_sso;
                    $t_rpe += $deduccion_rpe;
                    $t_faov += $faov;
                    $t_funeraria += $funeraria;
                    


            $var2 =  @$t_sso +  @$t_rpe + @$t_faov + @$t_funeraria;

            // ============================================= APORTES DE LEY 
            if($key['status'] !=0) $aporte_patronal_asso = $key['aporte_patronal_asso']; else $aporte_patronal_asso = 0;
            if($key['status'] !=0) $aporte_patronal_arpe = $key['aporte_patronal_arpe']; else $aporte_patronal_arpe = 0;
            if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30);else $aporte_deduccion_caja = 0;
            if($key['status'] !=0) $afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.02) / 2;else$afaov = 0;
            //==========================================================================================================

 
            // ============================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $asso_dc = (($aporte_patronal_asso / 30) * $key['dias_dejados_c']); else $asso_dc = $aporte_patronal_asso;
            if($key['dias_dejados_c'] !=0) $arpe_dc = (($aporte_patronal_arpe / 30) * $key['dias_dejados_c']); else $arpe_dc = $aporte_patronal_arpe;
            if($key['dias_dejados_c'] !=0) $afaov_dc = (($afaov / 30) * $key['dias_dejados_c']); else $afaov_dc = $afaov;
            //==========================================================================================================


            if($asso_dc != 0) $asso =  $aporte_patronal_asso + $asso_dc; else $asso = $aporte_patronal_asso;
            if($asso_dc != 0) $arpe =  $aporte_patronal_arpe + $arpe_dc; else $arpe = $aporte_patronal_arpe;
            if($asso_dc != 0) $afaov_dc =  $afaov + $afaov_dc; else $sso = $afaov;

            if($key['status'] !=0) $total = 
                $asso + 
                $arpe + 
                $afaov_dc + 
                $aporte_deduccion_caja;
            else $total = 0;

            $t_asso += $asso; 
            $t_arpe += $arpe;
            $t_afaov += $afaov_dc;
            $t_acaja += $aporte_deduccion_caja;

            $var3 =  $t_asso  + $t_arpe + $t_afaov;
        }


        $pdf -> SetFont('Arial','',8);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1001',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Sueldo Basico Tiempo Completo',0,0,'L');
        $pdf -> Cell(22,4,'4.01.01.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_sueldo_base),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        if($t_ajuste_sueldo != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1002',0,0);
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Ajuste de sueldo ',0,0);
            $pdf -> Cell(10,4,'4.01.01.01.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(15,4, $this->moneda($t_ajuste_sueldo),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }


        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1003',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Prima de Profesion',0,0);
        $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1004',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Prima Por Hijo',0,0);
        $pdf -> Cell(22,4,'4.01.03.04.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_hijos),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'1005',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
        $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);


        if($t_prima_hogar != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1006',0,0);
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Prima por Hogar',0,0);
            $pdf -> Cell(22,4,'4.01.03.03.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_hogar),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_becas != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1007',0,0);
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Beca Escolares',0,0);
            $pdf -> Cell(22,4,'4.01.07.02.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_becas),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2001',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Seguro Social Obligatorio',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_sso),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2002',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_rpe),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2003',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_faov),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);

        if($t_prestamo_caja != 0){
        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'2006',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
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
            $pdf -> Cell(2,4,'   ',0,0);
            $pdf -> Cell(95,4,'Depositario Judicial',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,$this->moneda($t_x_depositario),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3001',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del SSO',0,0);
        $pdf -> Cell(22,4,'4.01.04.01.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_asso),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3002',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal Regimen Prestacional de Empleo',0,0);
        $pdf -> Cell(22,4,'4.01.06.04.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_arpe),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3003',0,0);
        $pdf -> Cell(2,4,'   ',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del Fondo de Ahorro Obligatorio para la Vivienda',0,0);
        $pdf -> Cell(22,4,'4.01.06.05.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_afaov),0,1,'R');

      

        $pdf -> ln();
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(110);
        $pdf -> Cell(25,3,'Totales',0,0);

        $pdf -> Cell(22,4,$this->moneda($var1),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($var2),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($var3),1,1,'R');

        $pdf -> SetX(110);
        $pdf -> Cell(25,3,'Neto',0,0);
        $pdf -> Cell(22,4,$this->moneda($var1 - $var2),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(10,3,$i,1,0,'R');

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

    public function RequisionEmpleadosContratados($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 2;
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

    public function ResumenNominaEmpleadosContratados($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 2;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoEmpleadosC');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoEmpleadosC->find('all', ['conditions' => $condicion]);

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

        $pdf = new PDF_ResumenNominaEmpleadosContratados();
        
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

         $pdf -> SetFont('Arial','B',8);

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

        $sueldo_base = 0;

        $t_asignacion = 0;
        $t_deduccion = 0;

        $funeraria_dc = 0;

        foreach ($data as $key) {

            $sso = 0;
            $rpe = 0;
            $faov_dc = 0;
            $funeraria_dc = 0;
            $deducciones = 0;

            // ============================================= SUELDO BASE 
        if($key['status'] !=0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;
        //==========================================================================================================

        // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================


        // ============================================ CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
         if($key['dias_dejados_c'] !=0) $sueldo_dc = (($sueldo_base * 2) / 30) * $key['dias_dejados_c']; else $dias_dejados_c = 0;

         // ============================================= PRIMAS 
            if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
            if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
            if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] ; else $prima_hijos = 0;
            if($key['prima_hogar'] != 0 AND $key['status'] !=0) $prima_hogar = $key['monto_hogar']; else $prima_hogar = 0;
          //==========================================================================================================

        // ============================================ AJUSTES 
         if($key['ajuste_sueldo'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
         if($key['ajuste_p_profesion'] != 0) $ajuste_p_profesion = $key['ajuste_p_profesion']; else $ajuste_p_profesion = 0;
         if($key['ajuste_p_antiguedad'] != 0) $ajuste_p_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_p_antiguedad = 0;
         if($key['ajuste_p_hijos'] != 0) $ajuste_p_hijos = $key['ajuste_p_hijos']; else $ajuste_p_hijos = 0;
        //==========================================================================================================


         if($ajuste_sueldo != 0)$sueldo = $sueldo_base + $ajuste_sueldo; else $suelo = $sueldo_base;
         if($key['dias_dejados_c'] !=0)$sueldo = $sueldo_base + $sueldo_dc; else $sueldo = $sueldo_base;
         

         if($ajuste_p_antiguedad != 0) $antiguedad =  $ajuste_p_antiguedad; else $antiguedad = $prima_antiguedad;
         if($ajuste_p_profesion != 0) $profesion = $prima_profesion + $ajuste_p_profesion; else $profesion = $prima_profesion;
         if($ajuste_p_hijos != 0) $hijos = $prima_hijos + $ajuste_p_hijos; else $hijos = $prima_hijos;

         
        /*======================================================================================================*/
        /*====================================== TOTAL ASIGNACIONES ============================================*/
            if($key['status'] !=0) $asignaciones = 
                $sueldo + 
                $profesion + 
                $antiguedad + 
                $prima_hogar + 
                $hijos + 
                $becas;
            else $asignaciones = 0;


        /*======================================================================================================*/
            /*====================================== CALCULOS DEDUCCIONES ==========================================*/

            //================================================= DEDUCCIONES DE LEY
            if($key['status']!=0)$faov =((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad + $prima_hogar) * 0.01) / 2; else $faov = 0;
            if($key['status'] !=0) $deduccion_sso = $key['deduccion_sso']; else $deduccion_sso = 0;
            if($key['status'] !=0) $deduccion_rpe = $key['deduccion_rpe']; else $deduccion_rpe = 0;

            //no funciona
            //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

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
            if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0)$prestamo_caja = (intval($key['prestamo_caja_ahorro']));else $prestamo_caja = 0;
            if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) $asociacion = 0.10; else $asociacion = 0;
            if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']*0.01; else $sindicato = 0;
            if($key['status'] !=0 AND $key['depositario_judicial'] !=0) $depositario_porcentaje = ($key['depositario_judicial'] / 2); else $depositario_porcentaje = 0;
             if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ;else $depositario = 0;

            if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;
            //==========================================================================================================


            //================================================= CUANDO EXISTAN DIAS DEJADOS DE CANCELAR 
            if($key['dias_dejados_c'] !=0) $sso_dc = (($deduccion_sso / 30) * $key['dias_dejados_c']); else $sso_dc = $deduccion_sso;
            if($key['dias_dejados_c'] !=0) $rpe_dc = (($deduccion_rpe / 30) * $key['dias_dejados_c']); else $rpe_dc = $deduccion_rpe;
            if($key['dias_dejados_c'] !=0) $faov_dc = (($faov / 30) * $key['dias_dejados_c']); else $faov_dc = $faov;
            //==========================================================================================================


            if($sso_dc != 0) $sso =  $deduccion_sso + $sso_dc; else $sso = $deduccion_sso;
            if($sso_dc != 0) $rpe =  $deduccion_rpe + $rpe_dc; else $rpe = $deduccion_rpe;
            if($sso_dc != 0) $faov_dc =  $faov + $faov_dc; else $faov_dc = $faov;


                    if($key['status'] !=0) $deducciones = 
                        $sso + 
                        $rpe + 
                        $faov + 
                        $funeraria + 
                        $prestamo_caja;
                     else $deducciones = 0;

            if($key['status'] !=0) $neto = 
                $asignaciones - 
                $deducciones; 
            else $neto = 0;

                        $t_deduccion += $deducciones ;
                        $t_asignacion += $asignaciones;
                        


                        $t_neto = $t_asignacion - $t_deduccion;




            $y = $pdf-> GetY();
            $pdf -> SetY($y+6);
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
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if ($ajuste_sueldo != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Ajuste de Sueldo ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_sueldo),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($key['dias_dejados_c'] != 0 AND $sueldo_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Sueldo dejado de Cancelar ',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sueldo_dc),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_antiguedad),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($ajuste_p_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.'Ajuste de Prima por Hijos',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($ajuste_p_hijos),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hogar != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1003'.' Prima por Hogar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hogar),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_hijos != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1004'.' Prima por Hijo',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_hijos),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_antiguedad != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005'.' Prima por Antiguedad',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_antiguedad),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($becas != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1006'.' Becas Escolares',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($becas),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($deduccion_sso != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001'.' Seguro Social Obligatorio',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_sso),0,1,'L');
            }

            if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empelo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'L');
            }

            if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov),0,1,'L');
            }

            if ($key['dias_dejados_c'] != 0 AND $sso_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sso_dc),0,1,'L');
            }

            if ($key['dias_dejados_c'] != 0 AND $rpe_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Regimen Prestacional dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($rpe_dc),0,1,'L');
            }

            if ( $key['dias_dejados_c'] != 0 AND $faov_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' LPH dejado de Cancelar',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov_dc),0,1,'L');
            }

            if ($deduccion_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2007'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja),0,1,'L');
            }

            if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2008'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'L');
            }

            if ($funeraria_dc != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2009'.' Servicio Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($funeraria_dc),0,1,'L');
            }if (@$x_depositario != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2010'.' Desc. Depositario Judicial',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($x_depositario),0,1,'L');
            }if ($sindicato != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2011'.' Desc.Sindicato',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($sindicato),0,1,'L');
            }if ($asociacion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2012'.' Desc. Asociacion Funeraria',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($asociacion),0,1,'L');
            }

            $pdf-> ln();


            //===============================================================================================

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15); 
            $pdf -> Cell(90,4,'',0,0,'L');
            $pdf -> Cell(30,4,'totales',1,0,'C');
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











    /*----------------------------- DIRECTIVOS -----------------------------*/






    public function AsignacionesDirectivos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AsignacionesDirectivos('L','mm','A4');

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

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
           /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            

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

            $t_ajuste_antiguedad = 0;
            $t_ajuste_sueldo = 0;
            $t_dias_dejados_c = 0;

        foreach ($data as $key) { 

            /*======================================================================================================*/


            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos']; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }
                if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
                if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
                if($key['status'] != 0) $dias_dejados_c = $key['dias_dejados_c']; else $dias_dejados_c = 0;
                

                 if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $ajuste_antiguedad + $ajuste_sueldo +$dias_dejados_c; else $total = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos']; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }

                     }
                if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
                if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
                if($key['status'] != 0) $dias_dejados_c = $key['dias_dejados_c']; else $dias_dejados_c = 0;


                if($key['status'] !=0) $total = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $ajuste_antiguedad + $ajuste_sueldo + $dias_dejados_c; else $total = 0;
            }

            /**
                revisar este codigo para separar sueldos del Alcalde y Sindico

                if($key['cedula'] == 12736419 or $key['cedula'] == 16519394){
                   if ($key['status'] != 0) $bono_pito = ( $sueldo_base * 0.40 ); else $bono_pito = 0;
                    @$t_bono_pito += $bono_pito;
                }else{
                    if ($key['status'] != 0) $bono = ( $sueldo_base * 0.40 ); else $bono = 0;
                    @$t_bono += $bono;
                }
            */

            $eleccion = $sueldo_base;

            //========================================================================

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(17,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(60,5, $this->mayus(substr($key['cargo'],0,35).'...'),1,0,'L');
            $pdf -> SetFont('Arial','',6);
            $pdf -> Cell(17,5, $this->moneda(@$sueldo_base*2),1,0,'R');

            if($key['cedula'] == 12736419 or $key['cedula'] == 16519394){
            $pdf -> Cell(17,5, '',1,0,'R');

            }else{
                $pdf -> Cell(17,5,$this->moneda(@$sueldo_base),1,0,'R');
            }
            
            if($key['cedula'] == 12736419){
            $pdf -> Cell(20,5, $this->moneda(@$eleccion),1,0,'R');
            }else if($key['cedula'] == 16519394){
            $pdf -> Cell(20,5, $this->moneda(@$eleccion),1,0,'R');
            }else{
                $pdf -> Cell(20,5,'',1,0,'R');
            }

            $pdf -> Cell(20,5, $this->moneda(@$prima_antiguedad),1,0,'R');
            $pdf -> Cell(22,5, $this->moneda(@$prima_hijos),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$prima_profesion),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

            $t_sueldo_mensual += $key['sueldo'];
            $t_sueldo_base += $sueldo_base;
            $t_sueldo_eleccion = 1667200;
            $t_prima_profesion += $prima_profesion;
            $t_prima_hijos += $prima_hijos;
            $t_prima_antiguedad += $prima_antiguedad;
            $t_ajuste_antiguedad += $ajuste_antiguedad;
            $t_ajuste_sueldo += $ajuste_sueldo;
            $t_dias_dejados_c += $dias_dejados_c;

            $t_total += $total;


            // Repetir funcion en siguiente pagina ( Colocar dentro del Foreach)

            $y = $pdf -> GetY();
            if($y > 150){
                $pdf -> AddPage();
            }

            if($y > 150){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                     /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

                $pdf->ln();
                $pdf->ln();
            }
        }

        $pdf -> SetFont('Arial','B',6);
        $pdf -> SetX(5);
        $pdf -> Cell(160,5,'TOTAL',1,0,'C');

        $pdf -> Cell(17,5, $this->moneda(@$t_sueldo_base - $t_sueldo_eleccion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_sueldo_eleccion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_prima_antiguedad),1,0,'R');
        $pdf -> Cell(22,5, $this->moneda(@$t_prima_hijos),1,0,'R');
        $pdf -> Cell(30,5, $this->moneda(@$t_prima_profesion),1,0,'R');
        $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

       /*Seccion de Jefes Firmantes*/
        /* Separacion entre Lineas de 10 puntos*/
        $pdf -> SetFont('Arial','',8);
        $y = $pdf-> GetY();
        $pdf -> SetY($y+3);
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

    public function DeduccionesDirectivos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;

            $this->loadModel('ViewMrrhhHistoricoDirectivos');
            $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
            $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

            $this->loadModel('ViewMrrhhEmpleadosFijos');
            $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

            $this->loadModel('ViewMrrhhRequisicion');
            $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
            $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

            $this->loadModel('Quincena');
            $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

            $this->loadModel('mes');
            $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();


            $pdf = new PDF_DeduccionesDirectivos('L','mm',array(290,200));
            $pdf -> SetMargins(3,8,3,3);
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


             /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  


            $pdf-> ln();
            $pdf-> ln();
            
            $pdf -> SetFont('Arial','B',8);

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

                $dif_sso = 0;
                $dif_rpe = 0;
                $dif_faov = 0;
                $dif_fpj = 0;

                $t_dif_sso = 0;
                $t_dif_rpe = 0;
                $t_dif_faov = 0;
                $t_dif_fpj = 0;

            foreach ($data as $key) {

                
                //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
                 $deduccion_sso = 0;
                $deduccion_rpe= 0;
                $faov= 0;
                $deduccion_fpj= 0;
                $deduccion_caja_ahorro= 0;
                $prestamo_caja= 0;
                $funeraria= 0;
                $asociacion_funeraria= 0;
                $x_depositario= 0;
                $total= 0;

                       

                if($key['sueldo'] != 0) {

                        if($key['status'] != 0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = 0;
                        
                            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;


                        foreach ($dataef as $ef) {
                          if ($key['cedula'] == $ef['cedula']){
                                $prima_hijos = $key['prima_hijos'];
                            }else {
                                $prima_hijos = 0;

                                if($key['cedula'] ==11751843){
                                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                                }

                                $funeraria = 0;
                            }
                         }

                         $prima_profesion = $key['x_prima_profesion'];
                         $prima_antiguedad = $key['x_prima_antiguedad'];
                    

                        $deduccion_sso = $key['x_deduccion_sso'];
                        $deduccion_rpe = $key['x_deduccion_rpe'];
                        $deduccion_fpj = $key['x_deduccion_fpj'];

                        //$faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);
                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad) * 0.01);


                        if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                                $prestamo_caja = $key['prestamo_caja_ahorro']; 
                        else $prestamo_caja = 0;

                        if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']; else $sindicato = 0;

                        if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                $asociacion = 0.10; 
                        else $asociacion = 0;

                        if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                        else $depositario_porcentaje = 0;

                        if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                        else $depositario = 0;

                        if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                        if($key['status'] !=0) $total = 
                            $deduccion_sso + 
                            $deduccion_rpe + 
                            $deduccion_fpj + 
                            $deduccion_caja_ahorro + 
                            $faov + 
                            $funeraria + 
                            $asociacion +
                            $prestamo_caja +
                            $x_depositario + 
                            $dif_sso +
                            $dif_rpe +
                            $dif_faov +
                            $dif_fpj; 
                         else $total = 0;
                        

                }else{

                        if($key['status'] != 0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

                        foreach ($dataef as $ef) {
                        if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {$prima_hijos =$key['prima_hijos'];}
                     }


                         $prima_profesion = $key['prima_profesion'];
                         $prima_antiguedad = $key['prima_antiguedad'];                    

                        $deduccion_sso = $key['deduccion_sso'];
                        $deduccion_rpe = $key['deduccion_rpe'];
                        $deduccion_fpj = $key['deduccion_fpj'];

                        if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;

                        $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad) * 0.01);

                            if($key['requisicion'] > 910){

                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 40000/2; 
                                else $funeraria = 0;
                            } else {
                                if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                    $funeraria = 20000/2; 
                                else $funeraria = 0;
                            }

                           //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;
                        
                        if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                        else $prestamo_caja = 0;

                        if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']; else $sindicato = 0;

                        if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                        $asociacion = 0.10; 
                                    else $asociacion = 0;

                        if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                                $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                        else $depositario_porcentaje = 0;

                        if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                                $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                        else $depositario = 0;
                        
                        if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                        if($key['status'] !=0) $total = 
                            $deduccion_sso + 
                            $deduccion_rpe + 
                            $deduccion_fpj + 
                            $deduccion_caja_ahorro + 
                            $faov + 
                            $funeraria + 
                            $asociacion +
                            $prestamo_caja +
                            $x_depositario + 
                            $dif_sso +
                            $dif_rpe +
                            $dif_faov +
                            $dif_fpj; 
                         else $total = 0;

                }


                $pdf -> SetFont('Arial','',6);
                $pdf -> SetX(5);
                $pdf -> Cell(6,5, ++$i ,1,0,'C');
                $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
                $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
                $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
                $pdf -> Cell(20,5, $this->moneda(@$deduccion_sso),1,0,'R');
                $pdf -> Cell(15,5, $this->moneda(@$deduccion_rpe),1,0,'R');
                $pdf -> Cell(20,5, $this->moneda(@$faov),1,0,'R');
                $pdf -> Cell(15,5, $this->moneda(@$deduccion_fpj),1,0,'R');
                $pdf -> Cell(25,5, $this->moneda(@$deduccion_caja_ahorro),1,0,'R');
                $pdf -> Cell(25,5, $this->moneda(@$prestamo_caja),1,0,'R');
                $pdf -> Cell(20,5, $this->moneda(@$funeraria),1,0,'R');
                $pdf -> Cell(20,5, $this->moneda(@$total),1,1,'R');

                $t_deduccion_sso += $deduccion_sso;
                $t_deduccion_rpe += $deduccion_rpe;
                $t_faov += $faov;
                $t_deduccion_fpj += $deduccion_fpj;
                $t_deduccion_caja_ahorro += $deduccion_caja_ahorro;
                $t_prestamo_caja += $prestamo_caja;
                $t_funeraria += $funeraria;
                $t_total += $total;

        

                $y = $pdf -> GetY();
                    if($y > 150){
                        $pdf -> AddPage();
                    }

                    if($y > 150){
                        $pdf -> SetY(20);
                        $pdf -> SetFont('Arial','',8);
                             /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

                        $pdf->ln();
                        $pdf->ln();
                    }
            }

            $pdf -> SetFont('Arial','B',6);
            $pdf -> SetX(5);
            $pdf -> Cell(111,5, 'TOTAL' ,1,0,'C');

            $pdf -> Cell(20,5, $this->moneda(@$t_deduccion_sso),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$t_deduccion_rpe),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_faov),1,0,'R');
            $pdf -> Cell(15,5, $this->moneda(@$t_deduccion_fpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$t_deduccion_caja_ahorro),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$t_prestamo_caja),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_funeraria),1,0,'R');
            $pdf -> Cell(20,5, $this->moneda(@$t_total),1,1,'R');

           /*Seccion de Jefes Firmantes*/
            /* Separacion entre Lineas de 10 puntos*/
            $pdf -> SetFont('Arial','',8);
            $y = $pdf-> GetY();
            $pdf -> SetY($y+3);
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

    public function AportePatronalDirectivos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;


        $this->loadModel('ViewMrrhhHistoricoDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_AportePatronalDirectivos('L','mm', array(300,200));

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

        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();

        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
             /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','B',8);   

        $i = 0;
        $t_aporte_patronal_asso = 0;
        $t_aporte_patronal_arpe = 0;
        $t_afaov = 0;
        $t_aporte_patronal_afpj = 0;
        $t_aporte_patronal_caja_ahorro = 0;

              $t_ajuste_asso = 0;
              $t_ajuste_arpe = 0;
              $t_ajuste_afaov = 0;
              $t_ajuste_afpj = 0;
        $t_total = 0;

        foreach ($data as $key) {

            if($key['sueldo'] != 0) {

                    if($key['status'] != 0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = 0;

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

                        //if($key['funeraria'] != 0 AND $key['status'] !=0)  $funeraria = $key['monto_funeraria']; else $funeraria = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] == 11751843){
                                if($key['caja_ahorro'] != 0 )$aporte_deduccion_caja = ($key['sueldo'] * 0.30) / 2; else $deduccion_caja_ahorro = 0;
                            }else if($key['cedula'] == 11802625){
                                $aporte_deduccion_caja = 0;
                            }else if($key['cedula'] == 11803194){
                                $aporte_deduccion_caja = 0;
                            }

                            $funeraria = 0;
                            $deduccion_caja_ahorro = 0;
                        }
                     }

                         $prima_profesion = $key['x_prima_profesion'];
                         $prima_antiguedad = $key['x_prima_antiguedad'];  
                
                    $aporte_patronal_asso = $key['x_aporte_patronal_asso'];
                    $aporte_patronal_arpe = $key['x_aporte_patronal_arpe'];
                    $aporte_patronal_afpj = ($key['sueldo'] * 0.03 ) / 2;

                    if($key['status'] != 0 ) $dif_patronal_sso = $key['ajuste_a_sso']; else $dif_patronal_sso = 0;
                    if($key['status'] != 0 ) $dif_patronal_rpe = $key['ajuste_a_rpe']; else $dif_patronal_rpe = 0;
                    if($key['status'] != 0 ) $dif_patronal_faov = $key['ajuste_a_faov']; else $dif_patronal_faov = 0;
                    if($key['status'] != 0 ) $dif_patronal_fpj = $key['ajuste_a_fpj']; else $dif_patronal_fpj = 0;


                    if($key['status'] !=0) $aporte_patronal_afaov = ((($sueldo_base) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.02); else $aporte_patronal_afaov = 0;

                
                    
                    if($key['status'] !=0) 
                        $total = 
                        $aporte_patronal_asso + 
                        $aporte_patronal_arpe + 
                        $aporte_patronal_afpj + 
                        $aporte_deduccion_caja +
                        $aporte_patronal_afaov +
                        $dif_patronal_sso +
                        $dif_patronal_rpe +
                        $dif_patronal_faov+
                        $dif_patronal_fpj;
                    else $total = 0;
                    

            }else{

                    if($key['status'] != 0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

                    foreach ($dataef as $ef) {
                        if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {$prima_hijos =$key['prima_hijos'];}
                     }                    

                    $aporte_patronal_asso = $key['aporte_patronal_asso'];
                    $aporte_patronal_arpe = $key['aporte_patronal_arpe'];
                    $aporte_patronal_afpj = ($key['sueldo_base'] * 0.03 ) / 2;


                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                        $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2; 
                    else $aporte_deduccion_caja = 0;

                         $prima_profesion = $key['prima_profesion'];
                         $prima_antiguedad = $key['prima_antiguedad'];  

                    if($key['status'] != 0 ) $dif_patronal_sso = $key['ajuste_a_sso']; else $dif_patronal_sso = 0;
                    if($key['status'] != 0 ) $dif_patronal_rpe = $key['ajuste_a_rpe']; else $dif_patronal_rpe = 0;
                    if($key['status'] != 0 ) $dif_patronal_faov = $key['ajuste_a_faov']; else $dif_patronal_faov = 0;
                    if($key['status'] != 0 ) $dif_patronal_fpj = $key['ajuste_a_fpj']; else $dif_patronal_fpj = 0;

                    if($key['status'] !=0) $aporte_patronal_afaov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad) * 0.02); else $aporte_patronal_afaov = 0;


                    if($key['status'] !=0) 
                        $total = 
                        $aporte_patronal_asso + 
                        $aporte_patronal_arpe + 
                        $aporte_patronal_afpj + 
                        $aporte_deduccion_caja +
                        $aporte_patronal_afaov +
                        $dif_patronal_sso +
                        $dif_patronal_rpe +
                        $dif_patronal_faov+
                        $dif_patronal_fpj;
                    else $total = 0;

            }

  
            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(5);
            $pdf -> Cell(6,5, ++$i ,1,0,'C');
            $pdf -> Cell(25,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(40,5, $this->mayus($key['apellidos']),1,0,'L');
            $pdf -> Cell(40,5, $this->mayus($key['nombres']),1,0,'L');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_asso),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_arpe ),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$aporte_patronal_afaov),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_patronal_afpj),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$aporte_deduccion_caja),1,0,'R');
            $pdf -> Cell(25,5, $this->moneda(@$total),1,1,'R');

              $t_aporte_patronal_asso += $aporte_patronal_asso;
              $t_aporte_patronal_arpe += $aporte_patronal_arpe;
              $t_afaov += $aporte_patronal_afaov;
              $t_aporte_patronal_afpj += $aporte_patronal_afpj;
              $t_aporte_patronal_caja_ahorro += $aporte_deduccion_caja;
              $t_ajuste_asso += $dif_patronal_sso;
              $t_ajuste_arpe += $dif_patronal_rpe;
              $t_ajuste_afaov += $dif_patronal_faov;
              $t_ajuste_afpj += $dif_patronal_fpj;
              $t_total += $total;

              $y = $pdf -> GetY();
            if($y > 150){
                $pdf -> AddPage();
            }

            if($y > 150){
                $pdf -> SetY(20);
                $pdf -> SetFont('Arial','',8);
                 /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

                $pdf->ln();
                $pdf->ln();
            }
            
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
        $pdf -> SetY($y+3);
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

    public function NetoCobrarDirectivos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();
        
        $this->loadModel('Mes');
        $mes = $this->Mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();


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



        $pdf = new PDF_NetoCobrarDirectivos('L','mm',array(300,250));
        $pdf -> SetMargins(3,8,3,3);
        $pdf -> AddPage();



        $pdf -> SetY(20);
        $pdf -> SetFont('Arial','',8);
             /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(80);
                $pdf -> MultiCell(180,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

        $pdf-> ln();
        $pdf-> ln();
        
        $pdf -> SetFont('Arial','B',8);  

        $i = 0;
        $t_sueldo = 0;
        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        foreach ($data as $key) {

          
            /*============================================================ ASIGANCION ========================================*/

            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] / 2 ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }

                        if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
                        if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
                        if($key['status'] != 0) $dias_dejados_c = $key['dias_dejados_c']; else $dias_dejados_c = 0;

                    if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $ajuste_antiguedad + $ajuste_sueldo + $dias_dejados_c; else $asignacion = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos']; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                    if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
                    if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
                    if($key['status'] != 0) $dias_dejados_c = $key['dias_dejados_c']; else $dias_dejados_c = 0;

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $ajuste_antiguedad + $ajuste_sueldo + $dias_dejados_c; else $asignacion = 0;
            }


            /*===================================================== DEDUCCION ======================================================*/



            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
             $deduccion_sso = 0;
            $deduccion_rpe= 0;
            $faov= 0;
            $deduccion_fpj= 0;
            $deduccion_caja_ahorro= 0;
            $prestamo_caja= 0;
            $funeraria= 0;
            $asociacion_funeraria= 0;
            $x_depositario= 0;
            $total= 0;

                   

            if($key['sueldo'] != 0) {

                    if($key['status'] != 0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = 0;

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

                    //if($key['funeraria'] != 0 AND $key['status'] != 0) $funeraria = ['monto_funeraria']; else $funeraria = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] ==11751843){
                                if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                            }

                            $funeraria = 0;
                        }
                     }
                

                    $prima_profesion = $key['x_prima_profesion'];
                    $prima_antiguedad = $key['x_prima_antiguedad']; 

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];

                    $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad) * 0.01);


                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] != 0) $sindicato = $key['monto_sindicato']; else $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                        if($key['status'] !=0) $deduccion = 
                            $deduccion_sso + 
                            $deduccion_rpe + 
                            $deduccion_fpj + 
                            $deduccion_caja_ahorro + 
                            $faov + 
                            $funeraria + 
                            $asociacion +
                            $prestamo_caja +
                            $x_depositario + 
                            $dif_sso +
                            $dif_rpe +
                            $dif_faov +
                            $dif_fpj; 
                         else $deduccion = 0;
                    
            }else{

                    if($key['status'] != 0) $sueldo_base = $key['sueldo_base'] / 2; else $sueldo_base = 0;

                    foreach ($dataef as $ef) {
                    if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }else {$prima_hijos =$key['prima_hijos'];}
                 }  

                         $prima_profesion = $key['prima_profesion'];
                         $prima_antiguedad = $key['prima_antiguedad'];                  

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];

                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;

                    $faov = ((($sueldo_base) + $prima_profesion + $prima_hijos + $prima_antiguedad) * 0.01);


                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
                    //if($key['funeraria'] != 0 AND $key['status'] != 0) $funeraria = $key['funeraria']; else $funeraria = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']; else $sindicato = 0; 

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;
                    
                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                        if($key['status'] !=0) $deduccion = 
                            $deduccion_sso + 
                            $deduccion_rpe + 
                            $deduccion_fpj + 
                            $deduccion_caja_ahorro + 
                            $faov + 
                            $funeraria + 
                            $asociacion +
                            $prestamo_caja +
                            $x_depositario + 
                            $dif_sso +
                            $dif_rpe +
                            $dif_faov +
                            $dif_fpj; 
                         else $deduccion = 0;

            }


             /*================================================================================================*/
                if($key['status'] !=0) $neto = $asignacion - $deduccion; else $neto = 0;
             /*================================================================================================*/

            $pdf -> SetFont('Arial','',6);
            $pdf -> SetX(10);
            $pdf -> Cell(10,5, ++$i,1,0,'C');
            $pdf -> Cell(20,5, $key['cedula'],1,0,'C');
            $pdf -> Cell(30,5, $this->mayus(substr($key['apellidos'],0,14)),1,0,'L');
            $pdf -> Cell(30,5, $this->mayus(substr($key['nombres'],0,15)),1,0,'L');
            $pdf -> Cell(70,5, $this->mayus(substr($key['cargo'],0,38)),1,0,'L');
            $pdf -> Cell(30,5, $this->moneda(@$sueldo_base),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$asignacion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$deduccion),1,0,'R');
            $pdf -> Cell(30,5, $this->moneda(@$neto),1,1,'R');

            $this->monto_persona('NOMINA', $key['cedula'], $tps, $ms, $qs, $neto);

            $t_sueldo += $sueldo_base;
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
                        $pdf -> SetX(50);
                        $pdf -> MultiCell(220,5,$concepto['concepto'],0,'C',0);
                        $pdf -> SetX(135);
                        $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
                    }

                $pdf->ln();
                $pdf->ln();
            }
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
        $pdf -> SetY($y+3);
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

    public function AcumuladoDirectivos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

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

        //$pdf = new \FPDF('L','mm','A4');
        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);
        
        $pdf->Image(WWW_ROOT.'img/Alcaldia_logo.png',5,5,40,25,"PNG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',175,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'RESUMEN DE CONCEPTOS',0,1,'C');
 
        $pdf -> SetFont('Arial','',8);
             /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(40);
                $pdf -> MultiCell(140,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  

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

        @$t_ajuste_sueldo = 0;
        @$t_ajuste_antiguedad = 0;
        @$t_ajuste_dias  = 0;

        $t_dif_sso = 0;
        $t_dif_rpe = 0;
        $t_dif_faov = 0;
        $t_dif_fpj = 0;

        $t_dif_patronal_sso = 0;
        $t_dif_patronal_rpe = 0;
        $t_dif_patronal_faov = 0;
        $t_dif_patronal_fpj = 0;

        $var1 = 0;
        $var2 = 0;
        $var3 = 0;

        foreach ($data as $key) {

            ++$i;


             /*============================================================ ASIGANCION ========================================*/

            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] / 2 ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                        }
                     }

                    if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
                    if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
                    if($key['status'] != 0) $dias_dejados_c = $key['dias_dejados_c']; else $dias_dejados_c = 0;

                

                 if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $ajuste_antiguedad + $ajuste_sueldo + $dias_dejados_c; else $var1 = 0;
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] / 2 ; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                    if($key['status'] != 0) $ajuste_antiguedad = $key['ajuste_p_antiguedad']; else $ajuste_antiguedad = 0;
                    if($key['status'] != 0) $ajuste_sueldo = $key['ajuste_sueldo']; else $ajuste_sueldo = 0;
                    if($key['status'] != 0) $dias_dejados_c = $key['dias_dejados_c']; else $dias_dejados_c = 0;

                if($key['status'] !=0) $var1 = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad + $ajuste_antiguedad + $ajuste_sueldo + $dias_dejados_c; else $var1 = 0;
            }

            @$t_sueldo_base += $sueldo_base;
            @$t_prima_hijos += $prima_hijos;
            @$t_prima_antiguedad  += $prima_antiguedad;
            @$t_prima_profesion  += $prima_profesion;

            @$t_ajuste_sueldo += $ajuste_sueldo;
            @$t_ajuste_antiguedad += $ajuste_antiguedad;
            @$t_ajuste_dias  += $dias_dejados_c;



            /*===================================================== DEDUCCION ======================================================*/

            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
            $deduccion_sso = 0;
            $deduccion_rpe= 0;
            $faov= 0;
            $deduccion_fpj= 0;
            $deduccion_caja_ahorro= 0;
            $prestamo_caja= 0;
            $funeraria= 0;
            $asociacion_funeraria= 0;
            $x_depositario= 0;
            $total= 0;

                   

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] ==11751843){
                                if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                            }

                            $funeraria = 0;
                        }
                     }
                

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];

                    $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);


                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (400000*0.01) / 2;
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

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                    if($key['status'] !=0) $var2 = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $dif_sso +
                        $dif_rpe + 
                        $dif_faov + 
                        $dif_fpj +
                        $x_depositario;
                     else $var2 = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    foreach ($dataef as $ef) {
                    if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }else {$prima_hijos =$key['prima_hijos'];}
                 }                    

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];

                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;

                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01);


                    if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) 
                            $sindicato = (400000*0.01) / 2;
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
                    
                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                    if($key['status'] !=0) $var2 = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $prestamo_caja +
                        $dif_sso +
                        $dif_rpe + 
                        $dif_faov + 
                        $dif_fpj +
                        $x_depositario;
                     else $var2 = 0;

            }

            @$t_sso += $deduccion_sso;
            @$t_rpe += $deduccion_rpe ;
            @$t_faov += $faov;
            @$t_fpj += $deduccion_fpj;
            @$t_caja += $deduccion_caja_ahorro;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;
            @$t_dif_sso += $dif_sso;
            @$t_dif_rpe += $dif_rpe;
            @$t_dif_faov += $dif_faov;
            @$t_dif_fpj += $dif_fpj;
            @$t_x_depositario += $x_depositario;



            /*==================================================== APORTE PATRONAL =================================================*/

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = $key['sueldo_base'] / 2;


                        if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] == 11751843){
                                if($key['caja_ahorro'] != 0 )$aporte_deduccion_caja = ($key['sueldo'] * 0.30) / 2; else $deduccion_caja_ahorro = 0;
                            }else if($key['cedula'] == 11802625){
                                $aporte_deduccion_caja = 0;
                            }else if($key['cedula'] == 11803194){
                                $aporte_deduccion_caja = 0;
                            }

                            $funeraria = 0;
                            $deduccion_caja_ahorro = 0;
                        }
                     }
                
                    $aporte_patronal_asso = $key['x_aporte_patronal_asso'];
                    $aporte_patronal_arpe = $key['x_aporte_patronal_arpe'];
                    $aporte_patronal_afpj = ($key['sueldo'] * 0.03 ) / 2;

                    if($key['status'] != 0 ) $dif_patronal_sso = $key['ajuste_a_sso']; else $dif_patronal_sso = 0;
                    if($key['status'] != 0 ) $dif_patronal_rpe = $key['ajuste_a_rpe']; else $dif_patronal_rpe = 0;
                    if($key['status'] != 0 ) $dif_patronal_faov = $key['ajuste_a_faov']; else $dif_patronal_faov = 0;
                    if($key['status'] != 0 ) $dif_patronal_fpj = $key['ajuste_a_fpj']; else $dif_patronal_fpj = 0;


                    if($key['status'] !=0) $aporte_patronal_afaov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.02); else $aporte_patronal_afaov = 0;

                
                    
                    if($key['status'] !=0) 
                        $var3 = 
                        $aporte_patronal_asso + 
                        $aporte_patronal_arpe + 
                        $aporte_patronal_afpj + 
                        $aporte_deduccion_caja +
                        $dif_patronal_sso +
                        $dif_patronal_rpe +
                        $dif_patronal_faov +
                        $dif_patronal_fpj +
                        $aporte_patronal_afaov;
                    else $var3 = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo'] / 2; else $sueldo_base = $key['sueldo_base'] / 2;

                    foreach ($dataef as $ef) {
                        if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {$prima_hijos =$key['prima_hijos'];}
                     }                    

                    $aporte_patronal_asso = $key['aporte_patronal_asso'];
                    $aporte_patronal_arpe = $key['aporte_patronal_arpe'];
                    $aporte_patronal_afpj = ($key['sueldo_base'] * 0.03 ) / 2;


                    if ($key['caja_ahorro'] != 0 AND $key['status'] !=0) 
                        $aporte_deduccion_caja = ($key['sueldo_base'] * 0.30) / 2; 
                    else $aporte_deduccion_caja = 0;

                    if($key['status'] != 0 ) $dif_patronal_sso = $key['ajuste_a_sso']; else $dif_patronal_sso = 0;
                    if($key['status'] != 0 ) $dif_patronal_rpe = $key['ajuste_a_rpe']; else $dif_patronal_rpe = 0;
                    if($key['status'] != 0 ) $dif_patronal_faov = $key['ajuste_a_faov']; else $dif_patronal_faov = 0;
                    if($key['status'] != 0 ) $dif_patronal_fpj = $key['ajuste_a_fpj']; else $dif_patronal_fpj = 0;

                    if($key['status'] !=0) $aporte_patronal_afaov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.02); else $aporte_patronal_afaov = 0;
                    
                    if($key['status'] !=0) 
                        $var3 = 
                        $aporte_patronal_asso + 
                        $aporte_patronal_arpe + 
                        $aporte_patronal_afpj + 
                        $aporte_deduccion_caja +
                        $dif_patronal_sso +
                        $dif_patronal_rpe +
                        $dif_patronal_faov +
                        $dif_patronal_fpj +
                        $aporte_patronal_afaov;
                    else $var3 = 0;

            }



            $t_sueldo_eleccion = 1667200.00;
            
            $t_asso += $aporte_patronal_asso; 
            $t_arpe += $aporte_patronal_arpe;
            $t_afaov += $aporte_patronal_afaov;
            $t_afpj += $aporte_patronal_afpj;
            $t_acaja += $aporte_deduccion_caja;

            $t_dif_patronal_sso += $dif_patronal_sso;
            $t_dif_patronal_rpe += $dif_patronal_rpe;
            $t_dif_patronal_faov += $dif_patronal_faov;
            $t_dif_patronal_fpj += $dif_patronal_fpj;

            $t_asignacion += $var1;
            $t_deduccion += $var2 ;
            $t_aporte += $var3 ;

            //=======================================================================================================
         }


        $pdf -> SetFont('Arial','',8);

        ////////////////////////////////////////////////////////////////////////////////


        if($key['omitida'] == 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1001',0,0);
            $pdf -> Cell(95,4,'Sueldo de altos funcionarios y de eleccion popular',0,0);
            $pdf -> Cell(22,4,'4.01.01.35.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_sueldo_eleccion),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }

            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1002',0,0);
            $pdf -> Cell(95,4,'Sueldo Basico Personal de Alto Nivel y Direccion',0,0);
            $pdf -> Cell(22,4,'4.01.01.36.00',0,0);

        /* Calculo de totales por accion especifica*/

        if($key['omitida'] != 0){
            $pdf -> Cell(22,4, $this->moneda(712000),0,0);
        } else {
            $pdf -> Cell(22,4, $this->moneda($t_sueldo_base - $t_sueldo_eleccion),0,0,'R');
        }

        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,1);


        if($t_prima_profesion != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1003',0,0);
            $pdf -> Cell(95,4,'Prima de Profesion',0,0);
            $pdf -> Cell(22,4,'4.01.03.08.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_profesion),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }


        if($t_prima_hijos != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1004',0,0);
            $pdf -> Cell(95,4,'Prima Por Hijo',0,0);
            $pdf -> Cell(22,4,'4.01.03.04.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_hijos),0,0,'R');
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4,'',0,1);
        }


        if($t_prima_antiguedad != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'1005',0,0);
            $pdf -> Cell(95,4,'Prima Por Antiguedad ',0,0);
            $pdf -> Cell(22,4,'4.01.03.09.00',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4, $this->moneda($t_prima_antiguedad),0,0,'R');
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
        $pdf -> Cell(10,4,'2004',0,0);
        $pdf -> Cell(95,4,'Fondo de Pension y Jubilacion',0,0);
        $pdf -> Cell(22,4,'',0,0);

        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_fpj),0,0,'R');
        $pdf -> Cell(22,4,'',0,1);
           

        if($t_caja != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2005',0,0);
            $pdf -> Cell(95,4,'Caja de Ahorro',0,0);
            $pdf -> Cell(22,4,'',0,0);

            /* Calculo de totales por accion especifica*/
            $pdf -> Cell(22,4,'',0,0);
            $pdf -> Cell(22,4, $this->moneda($t_caja),0,0,'R');
            $pdf -> Cell(22,4,'',0,1);
        }

        if($t_prestamo_caja != 0){
            $pdf -> SetX(5);
            $pdf -> Cell(10,4,'2006',0,0);
            $pdf -> Cell(95,4,'Prestamo Caja de Ahorro',1
                ,0);
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

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3004',0,0);
        $pdf -> Cell(95,4,'Aporte Patronal del F.P.J',0,0);
        $pdf -> Cell(22,4,'4.01.06.03.00',0,0);

        /* Calculo de totales por accion especifica*/
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4,'',0,0);
        $pdf -> Cell(22,4, $this->moneda($t_afpj),0,1,'R');

        $pdf -> SetX(5);
        $pdf -> Cell(10,4,'3005',0,0);
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

        $pdf -> Cell(22,4,$this->moneda($t_asignacion),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($t_deduccion),1,0,'R');
        $pdf -> Cell(22,4,$this->moneda($t_aporte),1,1,'R');

        $pdf -> SetX(10);
        $pdf -> Cell(25,3,'',0,0);
        $pdf -> Cell(80,3,'',0,0);

        $neto = $t_asignacion - $t_deduccion;

        /* Se corre segun los datos insertados dentro de la base de Datos*/
        $pdf -> Cell(18,3,'Neto',0,0);

        $pdf -> Cell(22,4,$this->moneda($neto),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(130);
        $pdf -> Cell(38,3,'Cantidad de Empleados',0,0);

        $pdf -> Cell(10,3,$i,1,0,'R');

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


    public function RequisionDirectivos($tps= null, $mes = null, $quincena = null, $requisicion = null){

        $tps = 3;
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

    $pdf -> ln();$pdf -> ln();
    $pdf -> ln();$pdf -> ln();
    $pdf -> SetX(10);
    //$pdf -> MultiCell(200,5,$data['concepto'],0,'L',0);
    $pdf -> MultiCell(200,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);



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

    public function ResumenNominaDirectivos($mes = null, $quincena = null, $omitida = null, $requisicion = null){

        $tps = 3;
        $ms = $mes;
        $qs = $quincena;

        $this->loadModel('ViewMrrhhHistoricoDirectivos');
        $condicion = ['ano' => ANO_FISCAL, 'mes' => $mes, 'quincena' => $quincena, 'omitida' => $omitida];
        $data = $this->ViewMrrhhHistoricoDirectivos->find('all', ['conditions' => $condicion]);

        $this->loadModel('ViewMrrhhEmpleadosFijos');
        $dataef = $this->ViewMrrhhEmpleadosFijos->find('all');

        $this->loadModel('ViewMrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id_tipo_personal' => $tps, 'mes' => $mes, 'quincena' => $quincena];
        $concepto = $this->ViewMrrhhRequisicion->find('all', ['conditions' => $condicion])->last();

        $this->loadModel('Quincena');
        $quincena = $this->Quincena->find('all', ['conditions' => ['id' => @$quincena]])->last();

        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new PDF_ResumenNominaDirectivos();
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

        $neto = 0;


        $t_asignacion = 0;
        $t_deduccion = 0;
        $t_neto = 0;

        $pdf -> SetFont('Arial','B',8);

        $pdf->ln();

        $pdf -> SetFont('Arial','',8);
                     /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(40);
                $pdf -> MultiCell(140,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  


        $t_asignacion = 0;
        $t_deduccion = 0;

        foreach ($data as $key) {

         // ============================================ BECAS ESCOLARES 
        if($key['cantidad_beca_inicial'] !=0 AND $key['status'] !=0) $inicial = $key['monto_becas'] * $key['cantidad_beca_inicial']; else $inicial = 0;
        if($key['cantidad_beca_primaria'] !=0 AND $key['status'] !=0) $primaria = $key['monto_becas'] * $key['cantidad_beca_primaria']; else $primaria = 0;
        if($key['cantidad_beca_secundaria'] !=0 AND $key['status'] !=0) $secundaria = $key['monto_becas'] * $key['cantidad_beca_secundaria']; else $secundaria = 0;
        if($key['cantidad_beca_universitaria'] !=0 AND $key['status'] !=0) $universitaria = $key['monto_becas'] * $key['cantidad_beca_universitaria']; else $universitaria = 0;
        if($key['cantidad_beca_discapacidad'] !=0 AND $key['status'] !=0) $discapacidad = $key['monto_becas'] * $key['cantidad_beca_discapacidad']; else $discapacidad = 0;

         $becas = $inicial + $primaria + $secundaria + $universitaria + $discapacidad;
        //==========================================================================================================



             /*============================================================ ASIGANCION ========================================*/

            if ($key['sueldo'] !=0) {

                 if($key['sueldo'] !=0 AND $key['status'] !=0) $sueldo_base = $key['sueldo']/2; else $sueldo_base =0;
                 if($key['status'] !=0) $prima_profesion = $key['x_prima_profesion']; else $prima_profesion = 0;
                 if($key['status'] !=0) $prima_antiguedad = $key['x_prima_antiguedad']; else $prima_antiguedad = 0;
                 if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos'] / 2 ; else $prima_hijos = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;
                            $becas = 0;
                        }
                     }

                

                 if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;

                 if($key['dias_dejados_cancelar'] != 0){

                         $sueldo_base2 = (($sueldo_base / 2) / 30) * $key['dias_dejados_cancelar'];
                         $prima_profesion2 = ($prima_profesion/30) * $key['dias_dejados_cancelar'];
                         $prima_antiguedad2 = ($prima_antiguedad/30) * $key['dias_dejados_cancelar'];

                            foreach ($dataef as $ef) {
                              if ($key['cedula'] == $ef['cedula']){
                                    $prima_hijos = $key['prima_hijos'];
                                }else {
                                    $prima_hijos = 0;
                                }
                             }

                         if($key['status'] !=0) $total2 = $sueldo_base2 + $prima_profesion2  + $prima_antiguedad2; else $total2 = 0;
                    }
    
            }else{
                if($key['status'] !=0 AND $key['sueldo_base'] != 0) $sueldo_base = $key['sueldo_base'] / 2 ; else $sueldo_base = 0;
                if($key['status'] !=0) $prima_profesion = $key['prima_profesion']; else $prima_profesion = 0;
                if($key['status'] !=0) $prima_antiguedad = $key['prima_antiguedad']; else $prima_antiguedad = 0;
                if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = $key['prima_hijos']; else $prima_hijos = 0;


                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = 0;
                        }else {
                            $prima_hijos = $key['prima_hijos'];
                        }
                     }

                if($key['status'] !=0) $asignacion = $sueldo_base + $prima_profesion + $prima_hijos + $prima_antiguedad; else $asignacion = 0;

                            if($key['dias_dejados_cancelar'] != 0){

                                 $sueldo_base2 = (($sueldo_base / 2) / 30) * $key['dias_dejados_cancelar'];

                                 $prima_profesion2 = ($prima_profesion/30) * $key['dias_dejados_cancelar'];

                                 $prima_antiguedad2 = ($prima_antiguedad/30) * $key['dias_dejados_cancelar'];

                                    foreach ($dataef as $ef) {
                                      if ($key['cedula'] == $ef['cedula']){
                                            $prima_hijos = $key['prima_hijos'];
                                        }else {
                                            $prima_hijos = 0;
                                        }
                                     }

                                 if($key['status'] !=0) $total2 = $sueldo_base2 + $prima_profesion2  + $prima_antiguedad2;
                            }
            }


            /*===================================================== DEDUCCION ======================================================*/



            //if($key['hijos'] != 0 AND $key['status'] !=0) $prima_hijos = ( 62500 * $key['hijos']) / 2; else $prima_hijos = 0;
             $deduccion_sso = 0;
            $deduccion_rpe= 0;
            $faov= 0;
            $deduccion_fpj= 0;
            $deduccion_caja_ahorro= 0;
            $prestamo_caja= 0;
            $funeraria= 0;
            $asociacion_funeraria= 0;
            $x_depositario= 0;
            $total= 0;

            $total_asignacion = 0;
            $total_deduccion = 0;

            $asignaciones = 0;
            $deducciones = 0;

                   

            

            if($key['sueldo'] != 0) {

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                        if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }

                        //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

                    foreach ($dataef as $ef) {
                      if ($key['cedula'] == $ef['cedula']){
                            $prima_hijos = $key['prima_hijos'];
                        }else {
                            $prima_hijos = 0;

                            if($key['cedula'] ==11751843){
                                if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['x_deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;
                            }

                            $funeraria = 0;
                        }
                     }
                

                    $deduccion_sso = $key['x_deduccion_sso'];
                    $deduccion_rpe = $key['x_deduccion_rpe'];
                    $deduccion_fpj = $key['x_deduccion_fpj'];

                    $faov = ((($key['sueldo'] / 2) + $key['x_prima_profesion'] + $prima_hijos + $key['x_prima_antiguedad']) * 0.01);


                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                            $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']; else $sindicato = 0;

                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;

                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                        if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                    if($key['status'] !=0) $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $deduccion = 0;
                    

            }else{

                    if($key['sueldo'] != 0) $sueldo_base = $key['sueldo']; else $sueldo_base = $key['sueldo_base'];

                    foreach ($dataef as $ef) {
                    if ($key['cedula'] == $ef['cedula']){
                        $prima_hijos = 0;
                    }else {$prima_hijos =$key['prima_hijos'];}
                 }                    

                    $deduccion_sso = $key['deduccion_sso'];
                    $deduccion_rpe = $key['deduccion_rpe'];
                    $deduccion_fpj = $key['deduccion_fpj'];

                    if($key['caja_ahorro'] != 0 )$deduccion_caja_ahorro = $key['deduccion_caja_ahorro']; else $deduccion_caja_ahorro = 0;

                    $faov = ((($key['sueldo_base'] / 2) + $key['prima_profesion'] + $prima_hijos + $key['prima_antiguedad']) * 0.01);


                        if($key['requisicion'] > 910){

                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 40000/2; 
                            else $funeraria = 0;
                        } else {
                            if($key['funeraria'] != 0 AND $key['status'] !=0) 
                                $funeraria = 20000/2; 
                            else $funeraria = 0;
                        }
                    
                    //if($key['funeraria'] != 0 AND $key['status'] !=0) $funeraria = $key['monto_funeraria']; else $funeraria = 0;

                    if($key['status'] !=0 AND $key['prestamo_caja_ahorro'] != 0) 
                        $prestamo_caja = $key['prestamo_caja_ahorro']; 
                    else $prestamo_caja = 0;

                    if($key['sindicato'] != 0 AND $key['status'] !=0) $sindicato = $key['monto_sindicato']; else $sindicato = 0;


                    if($key['asociacion_funeraria'] != 0 AND $key['status'] !=0) 
                                    $asociacion = 0.10; 
                                else $asociacion = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial'] !=0) 
                            $depositario_porcentaje = ($key['depositario_judicial'] / 2) ; 
                    else $depositario_porcentaje = 0;

                    if($key['status'] !=0 AND $key['depositario_judicial_monto'] !=0) 
                            $depositario = ($key['sueldo_base'] * $key['depositario_judicial_monto'] ) / 2 ; 
                    else $depositario = 0;
                    
                    if($depositario_porcentaje !=0) $x_depositario = $depositario_porcentaje; else $x_depositario = $depositario;

                    if($key['status'] != 0 ) $dif_sso = $key['ajuste_sso']; else $dif_sso = 0;
                        if($key['status'] != 0 ) $dif_rpe = $key['ajuste_rpe']; else $dif_rpe = 0;
                        if($key['status'] != 0 ) $dif_faov = $key['ajuste_faov']; else $dif_faov = 0;
                        if($key['status'] != 0 ) $dif_fpj = $key['ajuste_fpj']; else $dif_fpj = 0;

                    if($key['status'] !=0) $deduccion = 
                        $deduccion_sso + 
                        $deduccion_rpe + 
                        $deduccion_fpj + 
                        $deduccion_caja_ahorro + 
                        $faov + 
                        $funeraria + 
                        $asociacion +
                        $prestamo_caja +
                        $x_depositario;
                     else $deduccion = 0;

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
            @$t_caja += $deduccion_caja_ahorro;
            @$t_prestamo_caja += $prestamo_caja;
            @$t_funeraria += $funeraria;
            @$t_sindicato += $sindicato;
            @$t_asociacion += $asociacion;

            /*=============================================================================================================*/


            @$t_asignacion += $asignacion;
            @$t_deduccion += $deduccion;
            @$t_neto = $t_asignacion - $t_deduccion;

           

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
            /*  Aqui se rellena los datos generados por la nomina de cada empleado similar a *Acumulado* */

            $pdf -> SetX(5);
            $pdf -> Cell(130,3,'1001'.' Sueldo Quincenal',0,0,'L');
            $pdf -> Cell(30,3, $this->moneda($sueldo_base/2),0,0,'L');
            $pdf -> Cell(30,3,' ',0,1,'L');

            if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1001-1'.' Sueldo Quincenal dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda(($sueldo_base / 30) * $key['dias_dejados_cancelar']),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');
            }

            if ($prima_profesion != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002'.' Prima por Profesionalizacion',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prima_profesion),0,0,'L');
                $pdf -> Cell(30,3,' ',0,1,'L');

            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1002-1'.' Prima por Profesionalizacion dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda(($prima_profesion / 30) * $key['dias_dejados_cancelar']),0,0,'L');
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
            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'1005-1'.' Prima por Antiguedad dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda(($prima_antiguedad / 30) * $key['dias_dejados_cancelar']),0,0,'L');
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
            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2001-1'.' Seguro Social Obligatorio dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(30,3,'             '. $this->moneda(($deduccion_sso / 30) * $key['dias_dejados_cancelar']),0,1,'L');
            }if ($deduccion_rpe != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002'.' Regimen Prestacional de Empleo',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_rpe),0,1,'L');
            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2002-1'.' Regimen Prestacional de Empleo dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(30,3,'             '. $this->moneda(($deduccion_rpe / 30) * $key['dias_dejados_cancelar']),0,1,'L');
            }if ($faov != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($faov),0,1,'L');
            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2003-1'.' Fondo de Ahorro Oblig. Para la Vivienda',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(30,3,'             '. $this->moneda(($faov / 30) * $key['dias_dejados_cancelar']),0,1,'L');
            }if ($deduccion_fpj != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004'.' Fondo de Jubilacion y Pension',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_fpj),0,1,'L');
            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2004-1'.' Fondo de Jubilacion y Pension',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(30,3,'             '. $this->moneda(($deduccion_fpj / 30) * $key['dias_dejados_cancelar']),0,1,'L');
            }if ($deduccion_caja_ahorro != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005'.' Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($deduccion_caja_ahorro),0,1,'L');
            }if($key['dias_dejados_cancelar'] != 0){
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2005-1'.' Caja de Ahorro dejado de Cancelar',0,0,'L');
                $pdf -> Cell(30,3,' ',0,0,'L');
                $pdf -> Cell(30,3,'             '. $this->moneda(($deduccion_caja_ahorro / 30) * $key['dias_dejados_cancelar']),0,1,'L');
            }if ($prestamo_caja != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda($prestamo_caja),0,1,'L');
            }if ($key['dias_dejados_cancelar'] != 0) {
                $pdf -> SetX(5);
                $pdf -> Cell(130,3,'2006 - 1'.' Prestamo Caja de Ahorro',0,0,'L');
                $pdf -> Cell(40,3,'',0,0,'L');
                $pdf -> Cell(30,3, $this->moneda(($prestamo_caja_ahorro / 30) * $key['dias_dejados_cancelar']),0,1,'L');
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
            $pdf -> Cell(30,4, $this->moneda($asignacion),1,0,'L');
            $pdf -> Cell(30,4, $this->moneda($deduccion),1,1,'C');

            $neto = $asignacion - $deduccion;

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
                     /* if($concepto['status'] == 0){
                $pdf -> SetX(110);
                $pdf -> MultiCell(180,5,'**La descripcion se muestra cuando se procese la nomina**',0,'L',0); $pdf->ln();
            } else {
                $pdf -> SetX(90);
                $pdf -> MultiCell(180,5,$concepto['concepto'],0,'L',0);
                $pdf -> MultiCell(180,5,'PAGO NOMINA COMISION DE SERVICIO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'L',0);
                $pdf -> SetX(135);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            } */


                $pdf -> SetX(40);
                $pdf -> MultiCell(140,5,'PAGO NOMINA PERSONAL DIRECTIVO CORRESPONDIENTE A LA '.$quincena['denominacion'].' DEL MES DE '. $mes['denominacion'].'  '. ANO_FISCAL,0,'C',0);
                $pdf -> SetX(90);
                $pdf -> Cell(40,5,'Correspondiente al lapso Desde:' . '  ' .$quincena['fecha_desde'].$fecha. ANO_FISCAL.' '.'Hasta:'.' '.$dia.$fecha. ANO_FISCAL,0,1,'C');  
            }

            $t_asignacion += $asignaciones;
            $t_deduccion += $deducciones;
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
 
}

