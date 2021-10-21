<?php
namespace App\Controller;

use App\Controller\AppController;

//========================================================
//Headers y Footers de los PDFs
//========================================================

class PDF_2101 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','',10);
		/* ENCABEZADO */

		$this-> SetX(70);
	    $this-> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this-> SetX(70);
	    $this-> Cell(80,5,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this-> SetX(70);
	    $this-> Cell(80,5,ENTIDAD_FEDERAL,0,1,'C'); 
	    $this-> SetX(70);
	    $this-> Cell(80,5,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2101',0,1,'L');
	}
}

class PDF_2102 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(93);
	    $this->MultiCell(115,4,'PRESUPUESTO DE INGRESOS',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL ,0,1,'C');
	    $this->ln();

	    $y = $this->GetY();
	    $this->SetY($y);

	    $this->SetFont('Arial','',8);
	    $this->SetX(30);
	    $this->Cell(45,5,'CODIGO',1,0,'C');
	    $this->Cell(160,10,'   '.' DENOMINACION',1,0,'J');
	    $this->Cell(40,10,'   '.' MONTO',1,1,'C');
	    
	    $this->SetY(61);
	    $this->SetX(30);
	    $this->Cell(8,5,'Ramo',1,0,'C');
	    $this->Cell(7,5,'Gen',1,0,'C');
	    $this->Cell(9,5,'Esp',1,0,'C');
	    $this->Cell(10,5,'S. Esp',1,0,'C');
	    $this->Cell(11,5,'Ord',1,1,'C');
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2102',0,1,'L');
	}
}

class PDF_2103 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(93);
	    $this->MultiCell(115,4,'INDICE DE CATEGORIAS PROGRAMATICAS',0,'C',0);
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL,0,1,'C');
	    $this->ln();

	    $y = $this->GetY();
	    $this->SetY($y);

	    $this->SetFont('Arial','',8);

	    $this->SetX(10);
	    $this->Cell(8,6,'Sec.',1,0,'C');
	    $this->Cell(8,6,'Pro',1,0,'C');
	    $this->Cell(9,6,'S. Pro',1,0,'C');
	    $this->Cell(10,6,'Acy/Pry',1,0,'C');
	    $this->Cell(160,6,' Denominacion',1,0,'J');
	    $this->Cell(50,6,' Unidad Ejecutora',1,0,'C');
	    $this->Cell(40,6,' Funcionario Responsable',1,1,'C');
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2103',0,1,'L');
	}
}

class PDF_2104 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */

	    $this->SetY(44);

	    $this->SetX(35);
	    $this->MultiCell(240,4,'RESUMEN DE LOS CREDITOS PRESUPUESTARIOS A NIVEL DE LOS SECTORES Y PROGRAMAS Y FUENTES DE FINANCIAMIENTO',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y);

	    $this->SetFont('Arial','B',7);
	        $this->SetY(60);
	        $this->SetX(35);
	     $this->Cell(13,16,'SECTOR',1,0,'C');
	     $this->Cell(17,16,'PROGRAMA',1,0,'C');
	        $this->SetY(60);
	        $this->SetX(65);
	     $this->Cell(70,16,'DENOMINACION',1,0,'C');
	        $this->SetY(60);
	        $this->SetX(155);
	    $this->Cell(125,4,'ASIGNACION PRESUPUESTARIA',1,0,'C');
	        $this->SetY(60);
	        $this->SetX(135);
	    $this->MultiCell(20,8,'INGRESOS PROPIOS',1,'C',0);
	        $this->SetY(64);
	        $this->SetX(155);
	    $this->Cell(70,4,'APORTE LEGAL',1,0,'C');
	        $this->SetY(68);
	        $this->SetX(155);
	    $this->Cell(50,4,'SITUADO',1,0,'C');
	        $this->SetY(72);
	        $this->SetX(155);
	    $this->Cell(25,4,'MUNICIPAL',1,0,'C');
	    $this->Cell(25,4,'ESTADAL',1,0,'C');
	        $this->SetY(68);
	        $this->SetX(205);
	    $this->Cell(20,8,'FCI',1,0,'C');
	        $this->SetY(64);
	        $this->SetX(225);
	    $this->MultiCell(25,4,'OTRAS FUENTES DE FINANCIAMIENTO',1,'C',0);
	        $this->SetY(64);
	        $this->SetX(250);
	    $this->Cell(30,12,'TOTAL',1,1,'C');
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2104',0,1,'L');
	}
}

class PDF_2105 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */

	    $this->SetY(44);
	    $this->SetX(30);
	    $this->MultiCell(240,4,'RESUMEN DE LOS CREDITOS PRESUPUESTARIOS A NIVEL DE PARTIDAS Y FUENTES DE FINANCIAMIENTO',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL ,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y);

	    $this->SetFont('Arial','B',7);
	        $this->SetY(60);
	        $this->SetX(35);
	     $this->Cell(20,16,'Partida',1,0,'C');
	        $this->SetY(60);
	        $this->SetX(55);
	     $this->Cell(80,16,'DENOMINACION',1,0,'C');
	        $this->SetY(60);
	        $this->SetX(155);
	    $this->Cell(125,4,'ASIGNACION PRESUPUESTARIA',1,0,'C');
	        $this->SetY(60);
	        $this->SetX(135);
	    $this->MultiCell(20,8,'INGRESOS PROPIOS',1,'C',0);
	        $this->SetY(64);
	        $this->SetX(155);
	    $this->Cell(70,4,'APORTE LEGAL',1,0,'C');
	        $this->SetY(68);
	        $this->SetX(155);
	    $this->Cell(50,4,'SITUADO',1,0,'C');
	        $this->SetY(72);
	        $this->SetX(155);
	    $this->Cell(25,4,'MUNICIPAL',1,0,'C');
	    $this->Cell(25,4,'ESTADAL',1,0,'C');
	        $this->SetY(68);
	        $this->SetX(205);
	    $this->Cell(20,8,'FCI',1,0,'C');
	        $this->SetY(64);
	        $this->SetX(225);
	    $this->MultiCell(25,4,'OTRAS FUENTES DE FINANCIAMIENTO',1,'C',0);
	        $this->SetY(64);
	        $this->SetX(250);
	    $this->Cell(30,12,'TOTAL',1,1,'C');
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2105',0,1,'L');
	}
}

class PDF_2106 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',8);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(30);
	    $this->SetX(30);
	    $this->MultiCell(240,4,'RESUMEN DE LOS CREDITOS PRESUPUESTARIOS POR PARTIDAS A NIVEL DE SECTORES',0,'C',0);
	    $this->SetFont('Arial','',8);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y+3);

	    $this->SetFont('Arial','',8);

	    $this->SetX(30);
	    $this->Cell(25,10,'Partida ',1,0,'C');
	    $this->Cell(175,10,'   '.' Denominacion',1,1,'J');
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2106',0,1,'L');
	}
}

class PDF_2109 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(93);
	    $this->MultiCell(115,5,'GASTOS DE INVERSION ESTIMADOS POR EL MUNICIPIO',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL ,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y+3);

	    $this->SetFont('Arial','B',8);

	    $this->SetX(30);
	    $this->Cell(250,4,'SECRETARIA DE HACIENDA MUNICIPAL ',1,1,'J');
	    $this->SetX(30);
	    $this->Cell(20,4,'Programa ',1,0,'C');
	    $this->Cell(25,4,'Partida ',1,0,'C');
	    $this->Cell(115,4,'Denominacion ',1,0,'C');
	    $this->Cell(40,4,'Asignacion Presupuestaria ',1,0,'C');
	    $this->Cell(50,4,'Observaciones ',1,1,'C');

	    $this->SetFont('Arial','',8);
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2109',0,1,'L');
	}
}

class PDF_2110 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(10);
	    $this->MultiCell(280,4,'TRANSFERENCIAS Y DONACIONES OTORGADAS A ORGANISMOS DEL SECTOR PUBLICO Y PRIVADO',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetFont('Arial','B',8);
	    $this->ln();
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y+5);

	    $this->SetFont('Arial','',8);

	    $this->SetX(30);
	    $this->Cell(10,10,'Sector ',1,0,'C');
	    $this->Cell(10,10,'Partida ',1,0,'C');
	    $this->Cell(32,5,'Sub-Partida',1,0,'C');
	    $this->Cell(130,10,' DENOMINACION',1,0,'C');
	    $this->Cell(25,10,' CORRIENTES',1,0,'C');
	    $this->Cell(25,10,' CAPITAL',1,0,'C');
	    $this->Cell(25,10,' MONTO TOTAL',1,0,'C');
	    $this->SetY(62);
	    $this->SetX(50);
	    $this->Cell(10,5,'Gen',1,0,'C');
	    $this->Cell(10,5,'Esp',1,0,'C');
	    $this->Cell(12,5,'Sub-Esp',1,1,'C');
	    
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2110',0,1,'L');
	}
}

class PDF_2111 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2111',0,1,'L');
	}
}

class PDF_2112 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2112',0,1,'L');
	}
}

class PDF_2115 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(93);
	    $this->MultiCell(115,4,'CREDITOS PRESUPUESTARIOS DEL SECTOR POR PROGRAMA A NIVEL DE PARTIDAS Y FUENTES DE FINANCIAMIENTO',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y+5);
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2115',0,1,'L');
	}
}

class PDF_2119 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(93);
	    $this->MultiCell(115,4,'PRESUPUESTO DE GASTOS DEL MUNICIPIO POR SECTORES A NIVEL DE PARTIDAS Y SUB-PARTIDAS',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL ,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y+5);

	    $this->SetFont('Arial','',8);

	    $this->SetX(30);
	    $this->Cell(10,10,'Part ',1,0,'C');
	    $this->Cell(30,5,'Sub-Partida',1,0,'C');
	    $this->Cell(160,10,'   '.' DENOMINACION',1,1,'J');
	    $this->SetY(66);
	    $this->SetX(40);
	    $this->Cell(9,5,'Gen',1,0,'C');
	    $this->Cell(9,5,'Esp',1,0,'C');
	    $this->Cell(12,5,'Sub-Esp',1,1,'C');
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2119',0,1,'L');
	}
}

class PDF_2121 extends \FPDF {
	function Header()
	{
		$this->SetFont('Arial','B',10);
		/* ENCABEZADO */
	    $this->SetY(10);
	    $this->SetX(100);
	    $this->Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $this->SetX(100);
	    $this->Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

        $this->Image(WWW_ROOT.'img/logo.jpg',30,1,40,30,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,30,"JPG","");

	    /* TITULO */
	    $this->SetY(40);
	    $this->SetX(93);
	    $this->MultiCell(115,4,'CREDITOS PRESUPUESTARIOS DEL PROGRAMA Y ACTIVIDADES A NIVEL DE PARTIDAS Y SUB-PARTIDAS',0,'C',0);
	    $this->SetFont('Arial','',10);
	    $this->SetX(100);
	    $this->Cell(100,4,'(EN BOLIVARES)',0,1,'C');
	    $this->SetFont('Arial','B',8);
	    $this->Cell(100,4,'PRESUPUESTO ' . ANO_FISCAL,0,1,'C');

	    $y = $this->GetY();
	    $this->SetY($y+5);
	}

	function Footer()
	{
	    $this->SetFont('Arial','B',8);
	    $this->SetY(-20);
	    $this->SetX(30);
	    $this->Cell(240,6,'FORMA 2121',0,1,'L');
	}
}




class MpReportesController extends AppController
{
	public function index(){
		//========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Verifica los booleanos para marcar los check del sidebar
        //========================================================
		$this->loadModel('MpSeguimiento');
        $condicion = ['ano' => ANO_FISCAL];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        $this->set('menu', $status);
	}

    //Listo
    public function forma2100(){
      
      	$this->loadModel('MpForma2100');
        $query = $this->MpForma2100->find('all', ['conditions' => ['ano = ' . ANO_FISCAL], 'order' => ['forma' => 'DESC'], 'limit' => 1]);
        $registros = $query->toArray();

        //===========================================================

        @$ano = $registros[0]['ano'];
        $nombre_alcalde = strtoupper($registros[0]['nombre_alcalde']);
        $director_general = strtoupper(utf8_decode($registros[0]['director_general']));
        $correo_director_general = strtoupper(utf8_decode($registros[0]['correo_director_general']));
        $correo_consejal = strtoupper(utf8_decode($registros[0]['correo_consejal']));
        $telefono_director_general = $registros[0]['telefono_director_general'];
        $contralor_municipal = strtoupper(utf8_decode($registros[0]['contralor_municipal']));
        $domicilio_contralor = strtoupper(utf8_decode($registros[0]['domicilio_contralor']));
        $telefono_contralor = $registros[0]['telefono_contralor'];
        $pagina_web_contralor = strtoupper(utf8_decode($registros[0]['pagina_web_contralor']));
        $fax_contralor = strtoupper(utf8_decode($registros[0]['fax_contralor']));
        $presidente_concejo_municipal = strtoupper(utf8_decode($registros[0]['presidente_concejo_municipal']));
        $secretario_concejo_municipal = strtoupper(utf8_decode($registros[0]['secretario_concejo_municipal']));
        $domicilio_concejo_municipal = strtoupper(utf8_decode($registros[0]['domicilio_concejo_municipal']));
        $telefono_concejo_municipal = strtoupper(utf8_decode($registros[0]['telefono_concejo_municipal']));
        $pagina_web_concejo_municipal = strtoupper(utf8_decode($registros[0]['pagina_web_concejo_municipal']));
        $fax_concejo_municipal = strtoupper(utf8_decode($registros[0]['fax_concejo_municipal']));

        $concejo_local = strtoupper(utf8_decode($registros[0]['concejo_local']));
        $personal_directivo = strtoupper(utf8_decode($registros[0]['personal_directivo']));
        $nombres_directivo = strtoupper(utf8_decode($registros[0]['nombres_directivo']));
        $correo_directivo = strtoupper(utf8_decode($registros[0]['correo_directivo']));
        $telefono_directivo = strtoupper(utf8_decode($registros[0]['telefono_directivo']));

        $concejo = explode(", ", $concejo_local);
        $directivo = explode(", ", $personal_directivo);
        $nombre = explode(", ", $nombres_directivo);
        $correo = explode(", ", $correo_directivo);
        $telefono = explode(", ", $telefono_directivo);

        //===========================================================

		$pdf = new \FPDF('L','mm','A4');
	    $pdf -> SetMargins(3,1,3,3);
	    $pdf -> AddPage();

	    $pdf -> SetFont('Arial','B',7);	    

	    /* ENCABEZADO */
	    $pdf -> SetY(8);
	    $pdf -> SetX(100);
	    $pdf -> Cell(100,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
	    $pdf -> SetX(100);
	    $pdf -> Cell(100,4,'ENTIDAD FEDERAL ESTADO FALCON',0,1,'C');
	    $pdf -> SetX(100);
	    $pdf -> Cell(100,4,ENTIDAD_FEDERAL,0,1,'C');
	    $pdf -> SetX(100);
	    $pdf -> Cell(100,4,'OFICINA DE PLANIFICACION Y PRESUPUESTO',0,1,'C');

	    /* TITULO */
	    $pdf -> SetY(25);
	    $pdf -> SetX(93);
	    $pdf -> MultiCell(115,4,'INFORMACION GENERAL DEL MUNICIPIO',0,'C',0);
	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> Cell(100,4,'PRESUPUESTO 2020',0,1,'C');

	    $pdf ->Image(WWW_ROOT.'img/logo.jpg',30,5,40,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',230,6,40,15,"JPG","");

	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+2);

	    $pdf -> SetFont('Arial','',7);

	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,4,'BASE LEGAL. CONSTITUCION DE LA REPUBLICA BOLIVARIANA DE VENEZUELA, DECRETO CON RANGO Y VALOR DE LA LEY ORGANICA DE LA ADMINISTRACION FINANCIERA DEL SECTOR PUBLICO',1,'J',0);
	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,4,'IDENTIFICACION DE LOS ORGANOS DEL PODER PUBLICO MUNICIPAL',1,'J',0);
	    $pdf -> SetFont('Arial','',7);
	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,4,'DOMICILIO LEGAL DE LA ALCALDIA: AV. MIRANDA EDIF. AYUNTAMIENTO FRENTE AL COLEGIO PIO XII',1,'J',0);
	    $pdf -> SetX(30);
	    $pdf -> Cell(60,4,'TELEFONO(S)',1,0,'C');
	    $pdf -> Cell(60,4,'PAGINA WEB',1,0,'C');
	    $pdf -> Cell(60,4,'FAX(S)',1,0,'C');
	    $pdf -> Cell(60,4,'CODIGO POSTAL',1,1,'C');

	    $pdf -> SetX(30);
	    $pdf -> Cell(60,4,'',1,0,'C');
	    $pdf -> Cell(60,4,'',1,0,'C');
	    $pdf -> Cell(60,4,'',1,0,'C');
	    $pdf -> Cell(60,4,'4101',1,1,'C');

	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,4,'NOMBRES Y APELLIDOS DEL ALCALDE(SA)' . "\n" . $nombre_alcalde,1,'J',0);

	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> SetX(30);
	    $pdf -> Cell(240,4,'PERSONAL DIRECTIVO DE LA ALCALDIA Y ORGANOS AUXILIARES',1,1,'J');

	    $pdf -> SetFont('Arial','',6);
	    $pdf -> SetX(30);
	    $pdf -> Cell(60,4,'DIRECCION ADMINISTRATIVA',1,0,'C');
	    $pdf -> Cell(60,4,'NOMBRES Y APELLIDOS',1,0,'C');
	    $pdf -> Cell(60,4,'CORREO ELECTRONICO',1,0,'C');
	    $pdf -> Cell(60,4,'TELEFONO(S)',1,1,'C');

	    $pdf -> SetX(30);
	    $pdf -> MultiCell(60,3.2,  @$directivo[0] . "\n" . @$directivo[1] . "\n" . @$directivo[2] . "\n" . @$directivo[3],1,'J',0);

	    $pdf -> SetY(71);
	    $pdf -> SetX(90);
	    $pdf -> MultiCell(60,3.2,  @$nombre[0] . "\n" . @$nombre[1] . "\n" . @$nombre[2] . "\n" . @$nombre[3],1,'J',0);

	    $pdf -> SetY(71);
	    $pdf -> SetX(150);
	    $pdf -> MultiCell(60,3.2,  @$correo[0] . "\n" . @$correo[1] . "\n" . @$correo[2] . "\n" . @$correo[3],1,'J',0);

	    $pdf -> SetY(71);
	    $pdf -> SetX(210);
	    $pdf -> MultiCell(60,3.2,  @$telefono[0] . "\n" . $telefono[1] . "\n" . @$telefono[2] . "\n" . @$telefono[3],1,'J',0);
	    
	    $pdf -> SetFont('Arial','',7);

	    $pdf -> SetX(30);
	    $pdf -> Cell(60,4,'DIRRECION GENERAL',1,0,'J');
	    $pdf -> Cell(60,4, $director_general,1,0,'C');
	    $pdf -> Cell(60,4, $correo_director_general,1,0,'C');
	    $pdf -> Cell(60,4, $telefono_director_general,1,1,'C');

	    $pdf -> SetFont('Arial','B',7);

	    $pdf -> SetX(30);
	    $pdf -> Cell(240,4,'CONTRALORIA MUNICIPAL',1,1,'J');

	    $pdf -> SetFont('Arial','',7);
	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,4,'NOMBRES Y APELLIDOS DEL CONTRALOR(A)'. "\n" . $contralor_municipal,1,'J',0);
	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,5, 'DOMICILIO LEGAL ' . $domicilio_contralor,1,'J',0);

	    $pdf -> SetX(30);
	    $pdf -> Cell(80,4,'TELEFONO(S)',1,0,'C');
	    $pdf -> Cell(80,4,'PAGINA WEB',1,0,'C');
	    $pdf -> Cell(80,4,'FAX(S)',1,1,'C');

	    $pdf -> SetX(30);
	    $pdf -> Cell(80,4, $telefono_contralor ,1,0,'C');
	    $pdf -> Cell(80,4, $pagina_web_contralor,1,0,'C');
	    $pdf -> Cell(80,4, $fax_contralor,1,0,'C');

	    $pdf -> ln();
	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> SetX(30);
	    $pdf -> Cell(240,4,'CONCEJO MUNICIPAL O CABILDO',1,1,'J');
	    $pdf -> SetX(30);

	    $pdf -> SetFont('Arial','',7);
	    $pdf -> MultiCell(240,4,'NOMBRES Y APELLIDOS DEL PRESIDENTE(A)'. "\n" . $presidente_concejo_municipal,1,'J',0);
	    $pdf -> SetX(30);
	    $pdf -> MultiCell(240,4,'NOMBRES Y APELLIDOS DEL SECRETARIO(A)' . "\n"	. $secretario_concejo_municipal,1,'J',0);
	    $pdf -> SetX(30);
	    $pdf -> Cell(240,4,'DOMICILIO LEGAL: ' . $domicilio_concejo_municipal,1,1,'J');

	    $pdf -> SetX(30);
	    $pdf -> Cell(80,4,'TELEFONO(S)',1,0,'C');
	    $pdf -> Cell(80,4,'PAGINA WEB',1,0,'C');
	    $pdf -> Cell(80,4,'FAX(S)',1,1,'C');

	    $pdf -> SetX(30);
	    $pdf -> Cell(80,4, $telefono_concejo_municipal,1,0,'C');
	    $pdf -> Cell(80,4, $pagina_web_concejo_municipal,1,0,'C');
	    $pdf -> Cell(80,4, $fax_concejo_municipal,1,1,'C');

	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> SetX(30);
	    $pdf -> Cell(240,4,'CONCEJO LOCAL DE PLANIFICACION',1,1,'J');

	    $pdf -> SetFont('Arial','',7);
	    $y = $pdf-> GetY();
	    $pdf -> SetY($y);
	    $pdf -> SetX(30);

	    $pdf -> MultiCell(120,3.2,  @$concejo[0] . "\n" . @$concejo[1] . "\n" . @$concejo[2] . "\n" . @$concejo[3] . "\n" . @$concejo[4] . "\n" . @$concejo[5] . "\n" . @$concejo[6] . "\n" . @$concejo[7] . "\n" . @$concejo[8] . "\n" . @$concejo[9],1,'J',0);

	    $pdf -> SetY($y);
	    $pdf -> SetX(150);
	    $pdf -> MultiCell(120,3.2,  @$concejo[10] . "\n" . @$concejo[11] . "\n" . @$concejo[12] . "\n" . @$concejo[13] . "\n" . @$concejo[14] . "\n" . @$concejo[15] . "\n" . @$concejo[16] . "\n" . @$concejo[17] . "\n" . @$concejo[18] . "\n" . @$concejo[19],1,'J',0);

	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> SetY(183);
	    $pdf -> SetX(30);
	    $pdf -> Cell(240,6,'FORMA 2100',0,1,'J');

	    $pdf -> Output('Forma2100_Ano' . ANO_FISCAL . '.pdf', 'I');
        exit;
    }

    public function forma2101(){

    	$this->loadModel('MpForma2101');
        $query = $this->MpForma2101->find('all', ['conditions' => ['ano = ' . ANO_FISCAL], 'order' => ['forma' => 'DESC'], 'limit' => 1]);
        $registros = $query->toArray();

        //===========================================================

        $pdf = new PDF_2101();
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();

	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(80,10,'ENTIDAD FEDERAL - NOMBRE DEL MUNICIPIO:',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(100,10,'   '. $registros[0]['entidad_federal'],1,1,'L');
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(80,10,'PERIODO PRESUPUESTARIO:',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(100,10,'   '. $registros[0]['ano'],1,1,'L');

	    $pdf -> SetFont('Arial','',8);

	   	$pdf -> ln();
	    /* Descripcion ingresada por el usuario*/
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> SetX(15);
	    $pdf -> Cell(180,10,'    '.'Descripcion:',1,1,'L');

	    $pdf -> ln();
	    /* Descripcion ingresada por el usuario*/
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> SetX(15);
	    $pdf -> MultiCell(180,5,'POLITICA DE FINANCIAMIENTO: '.'
	  ' . $registros[0]['politica_presupuestaria'],1,'J',0);

	    $pdf -> ln();
	    /* Descripcion ingresada por el usuario*/
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> SetX(15);
	    $pdf -> MultiCell(180,5,'POLITICA DE GASTOS:'.'
	  ' . $registros[0]['politica_gastos'],1,'J',0);

	    $pdf -> ln();
	    /* Descripcion ingresada por el usuario*/
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> SetX(15);
	    $pdf -> MultiCell(180,5,'POLITICA DE COBERTURA DE LOS SERVICIOS A PRESTAR POR EL MUNICIPIO: '.'
	  ' . $registros[0]['politica_cobertura'],1,'J',0);

	    $pdf -> Output('Forma2101_Ano' . ANO_FISCAL . '.pdf', 'I');
    }


    //Listo
    public function forma2102(){

    	$this->loadModel('ViewPresupuestoForma2102');
    	$query = $this->ViewPresupuestoForma2102->find('all', ['conditions' => ['ano' => ANO_FISCAL], 'order' => ['ramo' => 'ASC', 'sub_ramo' => 'ASC', 'especifico' => 'ASC', 'sub_especifico' => 'ASC', 'ordinal' => 'ASC']])->toArray();

        //===========================================================

        $pdf = new PDF_2102('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();

	    $pdf -> SetFont('Arial','',8);

	    $total = 0;

	    $ramo1 = 4970000000;

	    $total1 = 4590030000;
	    $total2 = 130100000;
	    $total3 = 50000000;
	    $total4 = 500000;
		$total5 = 130000000;
		$total6 = 69370000;
		$total7 = 9071174368;

	    		
	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '00', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Ingresos Ordinarios')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$ramo1, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);


			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '02', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Impuestos Indirectos')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total1, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);

	    foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.01.02.05.00.00' OR $registro['concatenado'] == '3.01.02.07.00.00' OR $registro['concatenado'] == '3.01.02.08.00.00' OR $registro['concatenado'] == '3.01.02.09.00.00' OR $registro['concatenado'] == '3.01.02.10.00.00' OR $registro['concatenado'] == '3.01.02.11.00.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}


			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '03', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Ingresos por Tasas')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total2, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.01.03.03.00.00' OR $registro['concatenado'] == '3.01.03.48.00.00' OR $registro['concatenado'] == '3.01.03.49.00.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}

		/*===========================================================================================================================*/

			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '09', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Ingresos por la venta de bienes y servicios de la Administracion Publica')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total3, 2, ',', '.'), 0, 1,'R');
			    
			    $pdf -> SetFont('Arial','',8);

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.01.09.01.01.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}

		/*===========================================================================================================================*/

		

			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '10', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Ingresos de la Propiedad')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total4, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.01.10.08.02.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}

		/*===========================================================================================================================*/

		

			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '11', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Diversos Ingresos')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total5, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.01.11.02.00.00'  OR $registro['concatenado'] == '3.01.11.08.00.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}

		/*===========================================================================================================================*/

			

			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.01', 0, 0,'C');

			    $pdf -> Cell(7, 6, '99', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Otros Ingresos Ordinarios')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total6, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.01.99.01.00.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}

		/*===========================================================================================================================*/

		

				$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.05', 0, 0,'C');

			    $pdf -> Cell(7, 6, '00', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('TRANSFERENCIAS Y DONACIONES')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total7, 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);



			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.05', 0, 0,'C');

			    $pdf -> Cell(7, 6, '03', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Situado')), 0, 0,'J');
			    $pdf -> SetFont('Arial','',8);
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$total7, 2, ',', '.'), 0, 1,'R');

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.05.03.01.02.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}




		/*===========================================================================================================================*/

				$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.06', 0, 0,'C');

			    $pdf -> Cell(7, 6, '00', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('RECURSOS PROPIOS DE CAPITAL')), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 1,'R');
			    $pdf -> SetFont('Arial','',8);


			    $pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, '3.06', 0, 0,'C');

			    $pdf -> Cell(7, 6, '01', 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, '00', 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, '00', 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, '00', 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> SetFont('Arial','B',8);
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode('Venta y/o desincorporacion de activos fijos')), 0, 0,'J');
			    $pdf -> SetFont('Arial','',8);
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 1,'R');

		foreach ($query as $registro) {



	    	if ($registro['concatenado'] == '3.06.01.01.00.00') {



	    		$pdf -> SetX(30);
			    /* Numero de Ramo */
			    $pdf -> Cell(8, 6, $registro['ramo'], 0, 0,'C');
			    /* Numero de Gen*/
			    $pdf -> Cell(7, 6, $registro['sub_ramo'], 0, 0,'C');
			    /* Numero Especifico*/
			    $pdf -> Cell(9, 6, $registro['especifico'], 0, 0,'C');
			    /* Numero Sub-Especifico*/
			    $pdf -> Cell(10, 6, $registro['sub_especifico'], 0, 0,'C');
			    /* Numero Ord*/
			    $pdf -> Cell(11, 6, $registro['ordinald'], 0, 0,'C');
			    /* Denominacion de la Partida  segun numeros anteriores*/
			    $pdf -> Cell(160, 6, strtoupper(utf8_decode(@$registro['ordinald_denominacion'])), 0, 0,'J');
			    /* MONTO */
			    $pdf -> Cell(40, 6, number_format(@$registro['monto_ordinald'], 2, ',', '.'), 0, 0,'R');
			    $pdf -> ln();

			   	$total += $registro['monto_ordinald'];
	    	}
		    
		}


		$pdf -> ln();

		$pdf -> SetFont('Arial','B',8);

		$pdf ->SetX(40);
		$pdf -> Cell(180, 6, '', 0, 0,'C');
		$pdf -> Cell(15, 6, 'Total', 1, 0,'C');
		$pdf -> Cell(40, 6, number_format($total), 1, 0,'R');


	    $pdf -> Output('Forma2102_Ano' . ANO_FISCAL . '.pdf', 'I');
    }


    //Listo
    public function forma2103(){

    	$pdf = new PDF_2103('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	   
	    $pdf -> SetFont('Arial','',6);
		//===================================================================================================

	    $this->loadModel('ViewPresupuestoForma2103Fusion');
        $query = $this->ViewPresupuestoForma2103Fusion->find('all', ['conditions' => ['ano' => ANO_FISCAL]])->order(['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC'])->toArray();

	    foreach ($query as $registro) {

		    $pdf -> SetX(10);
		    /* Sector */
		    $pdf -> Cell(8,6, $registro['sector'],0,0,'C');
		    /* Programa */
		    $pdf -> Cell(8,6, $registro['programa'],0,0,'C');
		    /* Sub-programa */
		    $pdf -> Cell(9,6, $registro['sub_programa'],0,0,'C');
		    /* Acy/Pry */
		    $pdf -> Cell(10,6, $registro['proyecto'].$registro['actividad'],0,0,'C');
		    /* Denominacion segun numeros anteriores*/
		    $pdf -> Cell(160,6, strtoupper(utf8_decode( substr($registro['denominacion'],0,170))),0,0,'J');
		    /* Unidad Ejecutora*/
		    $pdf -> Cell(50,6, @$registro['unidad_ejecutora'],0,0,'L');
		    /* Funcionario Responsable*/
		    $pdf -> Cell(40,6, @$registro['funcionario_responsable'],0,1,'L');

		}

	    $pdf -> Output('Forma2103_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2104(){

    	$this->loadModel('ViewPresupuestoForma2121Partidas');
        $query = $this->ViewPresupuestoForma2121Partidas->find();
        $query->select([
        	'sector', 
        	'programa', 
        	'sub_programa', 
        	'denominacion_programa', 
        	't_ingreso_propio' => $query->func()->sum('ingreso_propio'),
        	't_situado' => $query->func()->sum('situado'), 
        	't_ingreso_estadal' => $query->func()->sum('ingreso_estadal'), 
        	't_ingreso_fci' => $query->func()->sum('ingreso_fci'), 
        	't_otra_fuente' => $query->func()->sum('otra_fuente'), 
        	't_monto' => $query->func()->sum('monto')
    			])
        		->group(['sector', 'programa', 'sub_programa', 'denominacion_programa'])
        		->where('ano = ' . ANO_FISCAL)
        		->toArray();

        //===========================================================

    	$pdf = new PDF_2104('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);
	    $sector = 0;
	    $monto = 0;

	    	$t_ingreso_propio = 0;
		    $t_situado = 0;
		    $t_ingreso_estadal = 0;
		    $t_ingreso_fci = 0;
		    $t_otra_fuente = 0;
		    $t_monto = 0;

	    foreach ($query as $registro) {

	    	$pdf -> SetX(35);
		    /*Numero de Sector */
		    $pdf -> Cell(13, 6, @$registro['sector'], 0, 0,'C');
		    /*Numero de Programa*/
		    $pdf -> Cell(17, 6, @$registro['programa'], 0, 0,'C');
		    /*Denominacion */
		    //$pdf -> Cell(70,6, strtoupper(utf8_decode(@$registro['denominacion_sector'])), 0, 0,'J');
		    $pdf -> Cell(70,6, strtoupper(utf8_decode(@$registro['denominacion_programa'])), 0, 0,'J');

			     /*Monto de Ingresos propios */
		    $pdf -> Cell(20,6, number_format(@$registro['t_ingreso_propio'], 2, ',', '.'), 0, 0,'R');
		    /*Monto de Situado Municipal */
		    $pdf -> Cell(25,6, number_format(@$registro['t_situado'], 2, ',', '.'), 0, 0,'R');
		    /*Monto de Situado Estadal */
		    $pdf -> Cell(25,6, number_format(@$registro['t_ingreso_estadal'], 2, ',', '.'), 0, 0,'R');
		    /* Monto de FCI*/
		    $pdf -> Cell(20,6, number_format(@$registro['t_ingreso_fci'], 2, ',', '.'), 0, 0,'R');
		    /* Monto de Otras Fuentes de Financiamiento */
		    $pdf -> Cell(25,6, number_format(@$registro['t_otra_fuente'], 2, ',', '.'), 0, 0,'R');
		    /* Monto Total */
		    $pdf -> Cell(30,6, number_format(@$registro['t_monto'], 2, ',', '.'),0, 1,'R');

		    
			$t_ingreso_propio += $registro['t_ingreso_propio'];
		    $t_situado += $registro['t_situado'];
		    $t_ingreso_estadal += $registro['t_ingreso_estadal'];
		    $t_ingreso_fci += $registro['t_ingreso_fci'];
		    $t_otra_fuente += $registro['t_otra_fuente'];
		    $t_monto += $registro['t_monto'];
		}

			$pdf -> SetX(35);
		    $pdf -> Cell(100, 6, 'Totales', 1, 0,'R');
		    $pdf -> Cell(20, 6, number_format(@$t_ingreso_propio, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(25, 6, number_format(@$t_situado, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(25, 6, number_format(@$t_ingreso_estadal, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(20, 6, number_format(@$t_ingreso_fci, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(25, 6, number_format(@$t_otra_fuente, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(30, 6, number_format(@$t_monto, 2, ',', '.'), 1, 1,'R');

	    $pdf -> Output('Forma2104_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2105(){


    	$this->loadModel('ViewPresupuestoForma2121Partidas');
        $query = $this->ViewPresupuestoForma2121Partidas->find();
        $query->select([
        	'ramo',
        	'ramo_denominacion',
        	't_ingreso_propio' => $query->func()->sum('ingreso_propio'), 
        	't_situado' => $query->func()->sum('situado'), 
        	't_ingreso_estadal' => $query->func()->sum('ingreso_estadal'), 
        	't_ingreso_fci' => $query->func()->sum('ingreso_fci'), 
        	't_otra_fuente' => $query->func()->sum('otra_fuente'),
        	't_monto' => $query->func()->sum('monto')
    			])
        		->group(['ramo', 'ramo_denominacion'])
        		->where('ano = ' . ANO_FISCAL)
        		->toArray();


        //===========================================================

    	$pdf = new PDF_2105('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);

	    	$t_ingreso_propio = 0;
		    $t_situado = 0;
		    $t_ingreso_estadal = 0;
		    $t_ingreso_fci = 0;
		    $t_otra_fuente = 0;
		    $t_monto = 0;
	    
	    foreach ($query as $registro) {

		    $pdf -> SetX(35);
		    /*Numero de PARTIDA */
		    $pdf -> Cell(20, 6, @$registro['ramo'], 0, 0,'C');
		    /*Denominacion */
		    $pdf -> Cell(80, 6, strtoupper(utf8_decode(substr(@$registro['ramo_denominacion'],0,50))), 0, 0,'J');
		    /*Monto de Ingresos propios */
		    $pdf -> Cell(20, 6, number_format(@$registro['t_ingreso_propio'], 2, ',', '.'), 0, 0,'R');
		    /*Monto de Situado Municipal */
		    $pdf -> Cell(25, 6, number_format(@$registro['t_situado'], 2, ',', '.'), 0, 0,'R');
		    /*Monto de Situado Estadal */
		    $pdf -> Cell(25, 6, number_format(@$registro['t_ingreso_estadal'], 2, ',', '.'), 0, 0,'R');
		    /* Monto de FCI*/
		    $pdf -> Cell(20, 6, number_format(@$registro['t_ingreso_fci'], 2, ',', '.'), 0, 0,'R');
		    /* Monto de Otras Fuentes de Financiamiento */
		    $pdf -> Cell(25, 6, number_format(@$registro['t_otra_fuente'], 2, ',', '.'), 0, 0,'R');
		    /* Monto Total */
		    $pdf -> Cell(30, 6, number_format(@$registro['t_monto'], 2, ',', '.'), 0, 1,'R');

		    $t_ingreso_propio += $registro['t_ingreso_propio'];
		    $t_situado += $registro['t_situado'];
		    $t_ingreso_estadal += $registro['t_ingreso_estadal'];
		    $t_ingreso_fci += $registro['t_ingreso_fci'];
		    $t_otra_fuente += $registro['t_otra_fuente'];
		    $t_monto += $registro['t_monto'];
		}

			$pdf -> SetX(35);
		    $pdf -> Cell(100, 6, 'Totales', 1, 0,'R');
		    $pdf -> Cell(20, 6, number_format(@$t_ingreso_propio, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(25, 6, number_format(@$t_situado, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(25, 6, number_format(@$t_ingreso_estadal, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(20, 6, number_format(@$t_ingreso_fci, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(25, 6, number_format(@$t_otra_fuente, 2, ',', '.'), 1, 0,'R');
		    $pdf -> Cell(30, 6, number_format(@$t_monto, 2, ',', '.'), 1, 1,'R');

	    $pdf -> Output('Forma2105_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2106(){

    	$this->loadModel('ViewPresupuestoForma2121Partidas');
        $query = $this->ViewPresupuestoForma2121Partidas->find();
        $query->select(['concatenado', 'ordinald_denominacion'])
        		->group(['concatenado', 'ordinald_denominacion'])
        		->where('ano = ' . ANO_FISCAL)
        		->toArray();

        $query2 = $this->ViewPresupuestoForma2121Partidas->find();
        $query2->select(['concatenado', 'sector', 'ordinald_denominacion',  't_monto' => $query2->func()->sum('monto')
    			])
        		->group(['concatenado', 'sector', 'ordinald_denominacion'])
        		->where('ano = ' . ANO_FISCAL)
        		->toArray();

        //===========================================================

    	$pdf = new PDF_2106('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);
	    $total = 0;

	    foreach ($query as $registro) {

	    	$sub_total = 0;

	    	$pdf -> SetFont('Arial','',8);
		    $pdf -> SetX(30);
		    /* Numero de Partida*/
		    $pdf -> Cell(25,7, $registro['concatenado'] ,1,0,'C');
		    /* Denominacion de la Partida  segun numeros anteriores*/
		    $pdf -> Cell(175,7, strtoupper(utf8_decode($registro['ordinald_denominacion'])) ,1,0,'J');
		    $pdf -> Cell(20,7,'SECTOR',1,0,'C');
		    $pdf -> Cell(30,7,'TOTAL',1,1,'C');
		    $pdf -> SetX(30);
		    $pdf -> Cell(195,7,' ',0,0,'C');

		    foreach ($query2 as $registro2) {
			    if($registro['concatenado'] == $registro2['concatenado']){
			    	$pdf -> SetX(30);
				    $pdf -> Cell(195,7,' ',0,0,'C');
				    $pdf -> Cell(20,7, $registro2['sector'],0,0,'R');
				    $pdf -> Cell(30,7, number_format(@$registro2['t_monto'], 2, ',', '.') ,0,1,'R');

				    $sub_total += $registro2['t_monto'];
			    }
			}
		    $pdf -> SetX(30);
		    $pdf -> Cell(195,7,' ',0,0,'C');

		    $pdf -> SetFont('Arial','B',8);
		    $pdf -> Cell(20,7,'SUB-TOTAL ',0,0,'R');
		    $pdf -> Cell(30,7, number_format(@$sub_total, 2, ',', '.') ,0,1,'R');

		    @$total += $sub_total;

		    $y = $pdf -> GetY();
		    if($y > 150){
		    	$pdf -> AddPage();
		    }
		}

		$pdf -> ln();
		$pdf -> SetX(30);
		$pdf -> Cell(195,7,' ',0,0,'C');
	    $pdf -> SetFont('Arial','B',10);
	    $pdf -> Cell(20,7,'TOTAL ',0,0,'R');
	    $pdf -> Cell(30,7, number_format(@$total, 2, ',', '.') ,0,1,'R');

	    $pdf -> SetFont('Arial','',8);

	    $pdf -> Output('Forma2106_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2109(){

    	$this->loadModel('MpForma2109');
        $query = $this->MpForma2109->find('all')->where('ano = ' . ANO_FISCAL);

        //===========================================================

    	$pdf = new PDF_2109('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',8);

	    foreach ($query as $registro) {
	    	$pdf -> SetX(30);
		    $pdf -> Cell(20, 6, $registro['programa'], 0, 0,'C');
		    $pdf -> Cell(25, 6, $registro['partida'], 0, 0,'C');
		    $pdf -> Cell(115, 6, strtoupper(utf8_decode($registro['denominacion'])), 0, 0,'L');
		    $pdf -> Cell(40, 6, number_format(@$registro['asignacion'], 2, ',', '.'), 0, 0,'R');
		    $pdf -> Cell(50, 6, $registro['observacion'], 0, 1,'C');
		}

	    $pdf -> Output('Forma2109_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2110(){

    	$this->loadModel('MpForma2110');
        $query = $this->MpForma2110->find('all')->where('ano = ' . ANO_FISCAL);

        //===========================================================

    	$pdf = new PDF_2110('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);

	    foreach ($query as $registro) {
	    	$partidas = strtoupper(utf8_decode(@$registro['partida']));
        	$partida = explode(".", @$partidas);

        	$pdf -> SetX(30);
		    /* Numero de Sector*/
		    $pdf -> Cell(10,7, @$registro['sector'], 0, 0,'C');
		    /* Numero Partida */
		    $pdf -> Cell(10,7, @$partida[0] . "." . @$partida[1], 0, 0,'C');
		    /* Numero Generico */
		    $pdf -> Cell(10,7, @$partida[2], 0, 0,'C');
		    /* Numero Especifico */
		    $pdf -> Cell(10,7, @$partida[3], 0, 0,'C');
		    /* Numero Sub-Especifico*/
		    $pdf -> Cell(12,7, @$partida[4], 0, 0,'C');
		    /* Denominacion de la Partida  segun numeros anteriores*/
		    $pdf -> Cell(130,7, strtoupper(utf8_decode($registro['denominacion'])),0,0,'L');
		    /* Corriente */
		    $pdf -> Cell(25,7, number_format(@$registro['corriente'], 2, ',', '.'), 0,0,'R');
		    /* Capital */
		    $pdf -> Cell(25,7, number_format(@$registro['capital'], 2, ',', '.'), 0, 0,'R');
		    /* Monto Total */
		    $pdf -> Cell(24,7, number_format(@$registro['total'], 2, ',', '.'), 0, 0,'R');

		    $pdf -> ln();
		}

	    $pdf -> Output('Forma2110_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2111(){

    	$this->loadModel('MpForma2111');
        $query = $this->MpForma2111->find('all')->where('ano = ' . ANO_FISCAL);

        //===========================================================

    	$pdf = new PDF_2111();
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);

	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(80,10,'ENTIDAD FEDERAL - NOMBRE DEL MUNICIPIO:',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(100,10,'   '.'ALCALDIA BOLIVARIANA DEL MUNICIPIO MIRANDA',1,1,'L');
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(80,10,'PERIODO PRESUPUESTARIO:',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(100,10,'   '.'2020',1,1,'L');
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> SetX(15);
	    $pdf -> Cell(180,10,'   '.'DESCRIPCION DEL PROGRAMA Y SUB-PROGRAMA',1,1,'C');

	    /*---------------------------------------------------------------------------------*/

	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'',1,0,'C');
	    $pdf -> Cell(20,5,'CODIGO',1,0,'C');
	    $pdf -> Cell(120,5,'DENOMINACION',1,1,'C');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'SECTOR',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'PROGRAMA',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'SUB-PROGRAMA',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'UNIDAD EJECUTORA',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    $pdf -> ln();$pdf -> ln();
	    /* Descripcion ingresada por el usuario*/
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> SetX(15);
	    $pdf -> MultiCell(180,5,'DESCRIPCION: '.'
	  ' .'',1,'J',0);

	    $pdf -> Output('Forma2111_Ano' . ANO_FISCAL . '.pdf', 'I');
    }


    //Listo
    public function forma2112(){

    	$this->loadModel('MpForma2112');
        $query = $this->MpForma2112->find('all')->where('ano = ' . ANO_FISCAL);

        //===========================================================

    	$pdf = new PDF_2112();
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);

	    $pdf -> ln();

	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(80,10,'ENTIDAD FEDERAL - NOMBRE DEL MUNICIPIO:',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(100,10,'   '.'ALCALDIA BOLIVARIANA DEL MUNICIPIO MIRANDA',1,1,'L');
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(80,10,'PERIODO PRESUPUESTARIO:',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(100,10,'   '.'2020',1,1,'L');
	    $pdf -> ln();

	    /*---------------------------------------------------------------------------------*/

	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'',1,0,'C');
	    $pdf -> Cell(20,5,'CODIGO',1,0,'C');
	    $pdf -> Cell(120,5,'DENOMINACION',1,1,'C');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'SECTOR',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'PROGRAMA',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'SUB-PROGRAMA',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    /* CODIGO Y DENOMINACION ALMACENADO EN BD*/
	    $pdf -> SetX(15);
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> Cell(40,5,'UNIDAD EJECUTORA',1,0,'L');
	    $pdf -> SetFont('Arial','',8);
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(120,5,'',1,1,'L');

	    $pdf -> ln();
	    
	    $pdf -> SetFont('Arial','B',8);
	    $pdf -> SetX(15);
	    $pdf -> Cell(70,5,'DENOMINACION',1,0,'C');
	    $pdf -> Cell(45,5,'UNIDAD DE MEDIDA',1,0,'C');
	    $pdf -> Cell(20,5,'CANTIDADES',1,0,'C');
	    $pdf -> Cell(45,5,'COSTO FINANCIERO',1,1,'C');

	    /* DATOS ALMACENADOS EN LA BD*/
	    $pdf -> SetFont('Arial','',6);
	    $pdf -> SetX(15);
	    $pdf -> Cell(70,5,'',1,0,'L');
	    $pdf -> Cell(45,5,'',1,0,'L');
	    $pdf -> Cell(20,5,'',1,0,'L');
	    $pdf -> Cell(45,5,'',1,1,'L');

	    $pdf -> Output('Forma2112_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2115(){

    	$this->loadModel('MpForma2115');
        $query = $this->MpForma2115->find('all', ['order' => 'sector'])->where('ano = ' . ANO_FISCAL);
        $query2 = $this->MpForma2115->find('all', ['order' => 'sector'])->where('ano = ' . ANO_FISCAL);

        //=================================================

    	$pdf = new PDF_2115('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    
	    @$aux1 = 0;
	    @$aux2 = 0;

	    foreach ($query as $registro) {

	    	if($aux1 != $registro['sector'] or $aux2 != $registro['programa']){
	    		$pdf -> AddPage();
	    		$aux1 = $registro['sector'];
	    		$aux2 = $registro['programa'];
	    	}
	    	
	    	$pdf -> SetFont('Arial','B',7);

	    	$pdf -> SetX(50);
		    $pdf -> Cell(15,8,'CODIGO ',1,0,'C');
		    $pdf -> Cell(215,8,'   '.' DENOMINACION',1,1,'C');
		    $pdf -> SetX(35);
		    $pdf -> Cell(15,4,'Sector ',1,0,'C');

		    $pdf -> SetFont('Arial','',7);
		    $pdf -> Cell(15,4, $registro['sector'],1,0,'C');
		    $pdf -> Cell(215,4, strtoupper(utf8_decode($registro['denominacion_sector'])) ,1,1,'C');
		    $pdf -> SetFont('Arial','B',7);
		    $pdf -> SetX(35);
		    $pdf -> Cell(15,4,'Programa ',1,0,'C');
		    $pdf -> SetFont('Arial','',7);
		    $pdf -> Cell(15,4, $registro['programa'] ,1,0,'C');
		    $pdf -> Cell(215,4, strtoupper(utf8_decode($registro['denominacion_programa'])) ,1,1,'C');

		    $pdf -> SetFont('Arial','B',7);

		    $y = $pdf -> GetY();
	    		$pdf -> SetY($y);
		     	$pdf -> SetX(35);
		     $pdf -> Cell(30,16,'PARTIDA',1,0,'C');
		        $pdf -> SetY($y);
		        $pdf -> SetX(65);
		     $pdf -> Cell(70,16,'DENOMINACION',1,0,'C');
		        $pdf -> SetY($y);
		        $pdf -> SetX(155);
		    $pdf -> Cell(125,4,'ASIGNACION PRESUPUESTARIA',1,0,'C');
		        $pdf -> SetY($y);
		        $pdf -> SetX(135);
		    $pdf -> MultiCell(20,8,'INGRESOS PROPIOS',1,'C',0);
		        $pdf -> SetY($y+4);
		        $pdf -> SetX(155);
		    $pdf -> Cell(70,4,'APORTE LEGAL',1,0,'C');
		        $pdf -> SetY($y+8);
		        $pdf -> SetX(155);
		    $pdf -> Cell(50,4,'SITUADO',1,0,'C');
		        $pdf -> SetY($y+12);
		        $pdf -> SetX(155);
		    $pdf -> Cell(25,4,'MUNICIPAL',1,0,'C');
		    $pdf -> Cell(25,4,'ESTADAL',1,0,'C');
		        $pdf -> SetY($y+8);
		        $pdf -> SetX(205);
		    $pdf -> Cell(20,8,'FCI',1,0,'C');
		        $pdf -> SetY($y+4);
		        $pdf -> SetX(225);
		    $pdf -> MultiCell(25,4,'OTRAS FUENTES DE FINANCIAMIENTO',1,'C',0);
		        $pdf -> SetY($y+4);
		        $pdf -> SetX(250);
		    $pdf -> Cell(30,12,'TOTAL',1,1,'C');

		    
		    foreach ($query2 as $reg) {

		    	if($aux1 == $reg['sector'] and $aux2 == $reg['programa']){

		    		$pdf -> SetX(35);
				    $pdf -> Cell(30,4, $reg['partida'] ,1,0,'C');
				    $pdf -> Cell(70,4, $reg['denominacion'],1,0,'L');
				    $pdf -> Cell(20,4, number_format(@$reg['ingreso_propio'], 2, ',', '.'),1,0,'R');
				    $pdf -> Cell(25,4, number_format(@$reg['situado'], 2, ',', '.') ,1,0,'R');
				    $pdf -> Cell(25,4, number_format(@$reg['ingreso_estadal'], 2, ',', '.'),1,0,'R');
				    $pdf -> Cell(20,4, number_format(@$reg['ingreso_fci'], 2, ',', '.'),1,0,'R');
				    $pdf -> Cell(25,4, number_format(@$reg['otra_fuente'], 2, ',', '.'),1,0,'R');
				    $pdf -> Cell(30,4, number_format(@$reg['total'], 2, ',', '.'),1,0,'R');

				    $pdf -> ln();
		    	}
			}
	    }
	    
	    //$pdf -> Output('Forma2115_Ano' . ANO_FISCAL . '.pdf', 'D');
	    $pdf -> Output();
    }

    //Listo
    public function forma2119(){

    	$this->loadModel('MpForma2119');
        $query = $this->MpForma2119->find('all')->where('ano = ' . ANO_FISCAL);

        //===========================================================

    	$pdf = new PDF_2119('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    $pdf -> AddPage();
	    
	    $pdf -> SetFont('Arial','',7);

	    foreach ($query as $registro) {
	    	$partidas = strtoupper(utf8_decode(@$registro['partida']));
        	$partida = explode(".", @$partidas);

	    	$pdf -> SetFont('Arial','',8);

			$pdf -> SetX(30);
		    $pdf -> Cell(10,7, @$partida[0] . "." . @$partida[1],1,0,'C');
		    $pdf -> Cell(9,7, @$partida[2] ,1,0,'C');
		    $pdf -> Cell(9,7, @$partida[3] ,1,0,'C');
		    $pdf -> Cell(12,7, @$partida[4] ,1,0,'C');
		    $pdf -> Cell(160,7, strtoupper(utf8_decode($registro['denominacion'])) ,1,0,'J');
		    $pdf -> Cell(20,7,'Sector',1,0,'C');
		    $pdf -> Cell(30,7,'Monto',1,1,'C');
		    $pdf -> SetX(50);
		    $pdf -> Cell(177,7,' ',0,0,'C');

		    if($registro['sector1'] != '' and $registro['monto1'] != ''){
		    	$pdf -> Cell(20,7, $registro['sector1'], 0, 0,'R');
		    	$pdf -> Cell(30,7, number_format(@$registro['monto1'], 2, ',', '.') ,0,1,'R');
		    }

		    if($registro['sector2'] != '' and $registro['monto2'] != ''){
		    	$pdf -> SetX(30);
			    $pdf -> Cell(195,7,' ',0,0,'C');
			    $pdf -> Cell(20,7, $registro['sector2'],0,0,'R');
			    $pdf -> Cell(30,7, number_format(@$registro['monto2'], 2, ',', '.') ,0,1,'R');
		    }

		    if($registro['sector3'] != '' and $registro['monto3'] != ''){
		    	$pdf -> SetX(30);
			    $pdf -> Cell(195,7,' ',0,0,'C');
			    $pdf -> Cell(20,7, $registro['sector3'],0,0,'R');
			    $pdf -> Cell(30,7, number_format(@$registro['monto3'], 2, ',', '.') ,0,1,'R');
		    }

		    if($registro['sector4'] != '' and $registro['monto4'] != ''){
		    	$pdf -> SetX(30);
			    $pdf -> Cell(195,7,' ',0,0,'C');
			    $pdf -> Cell(20,7, $registro['sector4'],0,0,'R');
			    $pdf -> Cell(30,7, number_format(@$registro['monto4'], 2, ',', '.') ,0,1,'R');
		    }

		    if($registro['sector5'] != '' and $registro['monto5'] != ''){
		    	$pdf -> SetX(30);
			    $pdf -> Cell(195,7,' ',0,0,'C');
			    $pdf -> Cell(20,7, $registro['sector5'],0,0,'R');
			    $pdf -> Cell(30,7, number_format(@$registro['monto5'], 2, ',', '.') ,0,1,'R');
		    }
		    $pdf -> SetX(35);
		    $pdf -> Cell(195,7,' ',0,0,'C');

		    $sub_total = $registro['monto1'] + $registro['monto2'] + $registro['monto3'] + $registro['monto4'] + $registro['monto5'];

		    $pdf -> SetFont('Arial','B',8);
		    $pdf -> Cell(17,7,'SUB-TOTAL ',0,0,'R');
		    $pdf -> Cell(30,7, number_format(@$sub_total, 2, ',', '.') ,0,1,'R');

		    @$total += $sub_total;

		    $y = $pdf -> GetY();
		    if($y > 150){
		    	$pdf -> AddPage();
		    }
		}

		$pdf -> ln();
		$pdf -> SetX(30);
		$pdf -> Cell(195,7,' ',0,0,'C');
	    $pdf -> SetFont('Arial','B',9);
	    $pdf -> Cell(20,7,'TOTAL ',0,0,'R');
	    $pdf -> Cell(33,7, number_format(@$total, 2, ',', '.'), 0, 1,'R');

	    $pdf -> SetFont('Arial','',8);

	    $pdf -> Output('Forma2119_Ano' . ANO_FISCAL . '.pdf', 'I');
    }

    //Listo
    public function forma2121(){

    	$this->loadModel('ViewPresupuestoForma2121Partidas');
        $query1 = $this->ViewPresupuestoForma2121Partidas->find('all', ['order' => 'sector'])->where('ano = ' . ANO_FISCAL);
        $query2 = $this->ViewPresupuestoForma2121Partidas->find('all', ['order' => 'programa'])->where('ano = ' . ANO_FISCAL);
        $query3 = $this->ViewPresupuestoForma2121Partidas->find('all', ['order' => 'proyecto'])->where('ano = ' . ANO_FISCAL);
        $query = $this->ViewPresupuestoForma2121Partidas->find('all')->where('ano = ' . ANO_FISCAL);

        //===========================================================

    	$pdf = new PDF_2121('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    
	    $pdf -> SetFont('Arial','',7);
		
	    @$aux1 = 0;
	    @$aux2 = 0;
	    @$aux3 = 0;
	    @$a = 0;
	    @$b = 0;
	    @$c = 0;
	    @$total = 0;

	    foreach ($query1 as $reg1) {

	    	if($aux1 != $reg1['sector']) {
	    		$aux1 = $reg1['sector'];
	    		
			    foreach ($query2 as $reg2) {

			    	if($reg2['sector'] == $reg1['sector']){
			    		if($aux2 != $reg2['programa']) {
	    					$aux2 = $reg2['programa'];

			    			foreach ($query3 as $reg3) {

						    	if(($reg3['sector'] == $reg2['sector'] and $reg2['programa'] == $reg3['programa'] and $reg2['proyecto'] == $reg3['proyecto']) or ($reg3['sector'] == $reg2['sector'] and $reg2['programa'] == $reg3['programa'] and $reg2['actividad'] == $reg3['actividad'])){

						    		if(($a == $reg3['sector'] and $b == $reg3['programa'] and $c == $reg3['proyecto']) or ($a == $reg3['sector'] and $b == $reg3['programa'] and $c == $reg3['actividad'])) {

				    				}else{	

				    					$pdf -> AddPage();
							    		$pdf -> SetX(50);
									    $pdf -> SetFont('Arial','B',7);
									    $pdf -> Cell(100,4,' SECTOR',0,0,'L');
									    
									    $pdf -> SetX(68);
									    $pdf -> SetFont('Arial','',7);
									    $pdf -> Cell(100,4, @$reg1['sector'],0,0,'L');
									    
									    $pdf -> SetX(75);
									    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg1['denominacion_sector'])),0,1,'L');

				    					$pdf -> SetX(47);
									    $pdf -> SetFont('Arial','B',7);
									    $pdf -> Cell(100,4,'PROGRAMA',0,0,'L');
									    
									    $pdf -> SetX(68);
									    $pdf -> SetFont('Arial','',7);
									    $pdf -> Cell(100,4, @$reg2['programa'],0,0,'L');
									    
									    $pdf -> SetX(75);
									    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg2['denominacion_programa'])),0,1,'L');

							    		$pdf -> SetX(48);
									    
									    $pdf -> SetFont('Arial','B',7);
									    if($reg3['proyecto'] != ''){
									    	$pdf -> Cell(100,4,'PROYECTO',0,0,'L');
									    }else{
									    	$pdf -> Cell(100,4,'ACTIVIDAD',0,0,'L');
									    }
									    
									    $pdf -> SetX(68);
									    $pdf -> SetFont('Arial','',7);
									    $pdf -> Cell(100,4, @$reg3['proyecto'].@$reg3['actividad'],0,0,'L');
									    
									    $pdf -> SetX(75);
									    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg3['denominacion_proyecto'])) . strtoupper(utf8_decode(@$reg3['denominacion_actividad'])),0,1,'L');

									    $y = $pdf-> GetY();
									    $pdf -> SetY($y+2);
									    $pdf -> SetFont('Arial','B',8);

									    $pdf -> SetX(30);
									    $pdf -> Cell(40,5,'PARTIDA ',1,0,'C');
									    $pdf -> Cell(150,5,'DENOMINACION',1,0,'J');
									    $pdf -> Cell(40,5,'MONTO',1,1,'C');

									    $pdf -> SetFont('Arial','',7);

									    foreach ($query as $reg) {
									    	
									    	if(($reg3['sector'] == $reg['sector'] and $reg['programa'] == $reg3['programa'] and $reg['proyecto'] == $reg3['proyecto']) or ($reg3['sector'] == $reg['sector'] and $reg['programa'] == $reg3['programa'] and $reg['actividad'] == $reg3['actividad'])){

										    	$pdf -> SetX(30);
											    $pdf -> Cell(40,5, @$reg['concatenado'] ,0,0,'C');
											    $pdf -> Cell(150,5, strtoupper(utf8_decode(@$reg['ordinald_denominacion'])),0,0,'L');
											    $pdf -> Cell(40,5, number_format(@$reg['monto'], 2, ',', '.'),0,1,'R');
									    	}

									    	$total += $reg['monto'];
									    }

										$pdf -> ln();

										$pdf -> SetFont('Arial','B',8);

										$pdf ->SetX(40);
										$pdf -> Cell(165, 4, '', 0, 0,'C');
										$pdf -> Cell(15, 4, 'Total', 1, 0,'C');
										$pdf -> Cell(40,4, number_format(@$total, 2, ',', '.'), 1, 1,'C');

									}

									$a = $reg3['sector'];
									$b = $reg3['programa'];
									$c = $reg3['proyecto'].$reg3['actividad'];
						    	}

						    	$aux3 = 0;
						    }
						}
			    	}
			    	$aux2 = 0;
			    }
			}	    		
		}

	    $pdf -> Output('Forma2121_Ano' . ANO_FISCAL . '.pdf', 'I');
    }


   public function forma2121individual($id_sector = null, $id_programa = null, $id_sub_programa = null, $proyecto = null, $actividad = null, $rel = null){

   		if($proyecto != 0){
    		$condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa, 'ano' => ANO_FISCAL, 'id_proyecto' => $proyecto];
   		}else{
   			$condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa, 'ano' => ANO_FISCAL, 'id_actividad' => $actividad];
   		}

    	$this->loadModel('ViewPresupuestoForma2121Partidas');
        $query = $this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion);

        if($rel != 'PDF' and  $rel != null){
        	$query = $query->where(['n_resolucion' => $rel]);
        }else{
        	$query = $query->where(['resolucion' => false]);
        }

        $query = $query->toArray();

        //===========================================================

    	$pdf = new PDF_2121('L','mm','A4');
	    $pdf -> SetMargins(3,8,3,3);
	    
	    $pdf -> SetFont('Arial','',7);

	    @$total = 0;

		$pdf -> AddPage();
		$pdf -> SetX(50);
	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> Cell(100,4,' SECTOR',0,0,'L');
	    
	    $pdf -> SetX(68);
	    $pdf -> SetFont('Arial','',7);
	    $pdf -> Cell(100,4, @$query[0]['sector'],0,0,'L');
	    
	    $pdf -> SetX(75);
	    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$query[0]['denominacion_sector'])),0,1,'L');

		$pdf -> SetX(47);
	    $pdf -> SetFont('Arial','B',7);
	    $pdf -> Cell(100,4,'PROGRAMA',0,0,'L');
	    
	    $pdf -> SetX(68);
	    $pdf -> SetFont('Arial','',7);
	    $pdf -> Cell(100,4, @$query[0]['programa'],0,0,'L');
	    
	    $pdf -> SetX(75);
	    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$query[0]['denominacion_programa'])),0,1,'L');

		$pdf -> SetX(48);
	    
	    $pdf -> SetFont('Arial','B',7);
	    if(@$query[0]['proyecto'] != ''){
	    	$pdf -> Cell(100,4,'PROYECTO',0,0,'L');
	    }else{
	    	$pdf -> Cell(100,4,'ACTIVIDAD',0,0,'L');
	    }
	    
	    $pdf -> SetX(68);
	    $pdf -> SetFont('Arial','',7);
	    $pdf -> Cell(100,4, @$query[0]['proyecto'].@$query[0]['actividad'],0,0,'L');
	    
	    $pdf -> SetX(75);
	    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$query[0]['denominacion_proyecto'])) . strtoupper(utf8_decode(@$query[0]['denominacion_actividad'])),0,1,'L');

	    $y = $pdf-> GetY();
	    $pdf -> SetY($y+2);
	    $pdf -> SetFont('Arial','B',8);

	    $pdf -> SetX(30);
	    $pdf -> Cell(40,5,'PARTIDA ',1,0,'C');
	    $pdf -> Cell(150,5,'DENOMINACION',1,0,'J');
	    $pdf -> Cell(40,5,'MONTO',1,1,'C');

	    $pdf -> SetFont('Arial','',7);

	    foreach ($query as $reg) {
	    	
	    	$pdf -> SetX(30);
		    $pdf -> Cell(40,5, @$reg['concatenado'] ,0,0,'C');
		    $pdf -> Cell(150,5, strtoupper(utf8_decode(@$reg['ordinald_denominacion'])),0,0,'L');
		    $pdf -> Cell(40,5, number_format(@$reg['monto'], 2, ',', '.'),0,1,'R');
	    	
	    	$total += $reg['monto'];
	    }

		$pdf -> ln();

		$pdf -> SetFont('Arial','B',8);

		$pdf ->SetX(40);
		$pdf -> Cell(165, 4, '', 0, 0,'C');
		$pdf -> Cell(15, 4, 'Total', 1, 0,'C');
		$pdf -> Cell(40,4, number_format(@$total, 2, ',', '.'), 1, 1,'C');

									

	    $pdf -> Output('Forma2121_Ano' . ANO_FISCAL . '.pdf', 'I');
    }
}