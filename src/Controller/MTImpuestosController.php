<?php
namespace App\Controller;

use App\Controller\AppController;

class MTImpuestosController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->loadModel('viewTesoreriaLiquidar');
        $condicion = ['status >=' => 7];
        $data = $this->paginate($this->viewTesoreriaLiquidar->find('all')->where($condicion));
        $this->set(compact('data'));
	}

	public function liquidar(){

       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);
	}

    public function comprobante($requisicion = null){

        $this->loadModel('ViewTesoreriaLiquidarReporte');
        $condicion = ['requisicion' => $requisicion];
        $data = $this->ViewTesoreriaLiquidarReporte->find('all', ['conditions' => $condicion])->toArray();

        $this->loadModel('ViewTesoreriaLiquidarReporteCalculo');
        $condicion = ['id_requisicion' => $requisicion];
        $calculo = $this->ViewTesoreriaLiquidarReporteCalculo->find('all', ['conditions' => $condicion])->toArray();

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,5,30,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,10,25,15,"JPG","");

    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',8);

    /* DATOS DEL ORDEN DE PAGO*/
    $pdf -> SetX(60);
    $pdf -> Cell(120,4,'',0,0,'C');
    $pdf -> Cell(40,4,'Nro. COMPROBANTE',1,0,'C');
    $pdf -> Cell(5,4,'',0,0,'C');
    $pdf -> Cell(40,4,'Fecha de Pago',1,1,'C');
    $pdf -> SetX(60);
    $pdf -> Cell(120,4,'',0,0,'C');
    $pdf -> Cell(40,4, $data[0]['n_comprobante'],1,0,'C');
    $pdf -> Cell(5,4,'',0,0,'C');
    $pdf -> Cell(40,4,$data[0]['fecha_pago'],1,1,'C');


    /* DATOS DE LA EMPRESA QUE SE LE HACE LA RETENCIONES*/

    $pdf -> ln();
    $pdf -> SetX(30);
    $pdf -> Cell(90,4,'2. NOMBRE o RAZON SOCIAL del AGENTE DE RETENCION',1,0,'J');
    $pdf -> Cell(40,4,'',0,0,'C');
    $pdf -> Cell(110,4,'3. REGISTRO DE INFORMACION FISCAL DEL AGENTE DE RETENCION',1,1,'J');
    $pdf -> SetX(30);
    $pdf -> Cell(90,6,'ALCALDIA DEL MUNICIPIO MIRANDA',1,0,'J');
    $pdf -> Cell(40,4,'',0,0,'C');
    $pdf -> Cell(110,4,'G-20000169-0',1,1,'J');

    $pdf -> ln();
    $pdf -> ln();
    $pdf -> SetX(30);
    $pdf -> Cell(240,4,'5. DIRECCION FISCAL DEL AGENTE DE RETENCION',1,1,'J');
    $pdf -> SetX(30);
    $pdf -> Cell(240,6,'AVENIDA MIRANDA CON COMERCIO CALLE COMERCEDIF. AYUNTAMIENTO ',1,0,'J');

    $pdf -> ln();
    $pdf -> ln();
    $pdf -> SetX(30);
    $pdf -> Cell(90,4,'6. NOMBRE o RAZON SOCIAL del SUJETO RETENIDO',1,0,'J');
    $pdf -> Cell(40,4,'',0,0,'C');
    $pdf -> Cell(110,4,'RETENIDO (RIF)',1,1,'J');
    $pdf -> SetX(30);
    $pdf -> Cell(90,4,$data[0]['razon_social'],1,0,'J');
    $pdf -> Cell(40,4,'',0,0,'C');
    $pdf -> Cell(110,4,$data[0]['letra'].' - '.$data[0]['rif'],1,1,'J');

    $pdf -> ln();

    $pdf -> SetY(110);
    $pdf -> SetX(15);
    $pdf -> MultiCell(15,4,'
Nro. OP
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(30);
    $pdf -> MultiCell(20,4,'Fecha de
la Factura
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(50);
    $pdf -> MultiCell(20,4,'Nro de
Factura
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(70);
    $pdf -> MultiCell(25,4,'Nro de
Cont. Factura
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(95);
    $pdf -> MultiCell(35,4,'
Nota
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(130);
    $pdf -> MultiCell(20,4,'
O/P
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(150);
    $pdf -> MultiCell(20,4,'Tipo de
Transacc
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(170);
    $pdf -> MultiCell(20,4,'Factura
Afectada
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(190);
    $pdf -> MultiCell(20,4,'Total
Compra
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(210);
    $pdf -> MultiCell(20,4,'Derecho a
Credito IVA
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(230);
    $pdf -> MultiCell(20,4,'Base
Imposible
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(250);
    $pdf -> MultiCell(20,4,'Tipo de
Retencion
',1,'C',0);
    $pdf -> SetY(110);
    $pdf -> SetX(270);
    $pdf -> MultiCell(20,4,'Calculo de
Retencion
',1,'C',0);

    $i = 0;

    foreach ($calculo as $key) {

                if ($key['tipo_calculo'] != 'BASE IMPONIBLE') {

                              
                    $pdf -> SetX(15);
                    $pdf -> Cell(15,4,++$i,1,0,'C');
                    $pdf -> Cell(20,4,@$key['fecha'],1,0,'C');
                    $pdf -> Cell(20,4,@$key['n_factura'],1,0,'C');
                    $pdf -> Cell(25,4,@$key['n_control'],1,0,'C');
                    $pdf -> Cell(35,4,@substr($key['tipo_calculo'],0,18),1,0,'C');
                    $pdf -> Cell(20,4,@$key['id_requisicion'],1,0,'C');
                    $pdf -> Cell(20,4,'1 - REG',1,0,'C');
                    $pdf -> Cell(20,4,@$key['fecha'],1,0,'C');
                    $pdf -> Cell(20,4,@$key['base_imponible'],1,0,'C');
                    $pdf -> Cell(20,4,'',1,0,'C');
                    $pdf -> Cell(20,4,@$key['total'],1,0,'C');
                    $pdf -> Cell(20,4,@$key['porcentaje'],1,0,'C');
                    $pdf -> Cell(20,4,number_format(@$key['impuesto']),1,1,'C');
                }
        }



        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'POR: ALCALDIA DEL MUNICIPIO MIRANDA:',0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,$data[0]['razon_social'],0,1,'C');
        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'____________________________ ',0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'__________________________________________________________ ',0,1,'C');
        

        $pdf -> Output();
    }

    public function ipc($requisicion = null){

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,5,30,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,10,25,15,"JPG","");

    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',8);


    $pdf -> ln();

    $pdf -> SetY(40);
    $pdf -> SetX(10);
    $pdf -> MultiCell(10,4,'
Nro.
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(20);
    $pdf -> MultiCell(20,4,'
Fecha
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(40);
    $pdf -> MultiCell(50,4,'
DESCRIPCION
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(90);
    $pdf -> MultiCell(20,4,'
RIF
',1,'C',0);
    
    $pdf -> SetY(40);
    $pdf -> SetX(110);
    $pdf -> MultiCell(30,4,'Nro de
comprobante R.
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(140);
    $pdf -> MultiCell(20,4,'Nro de
Factura
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(160);
    $pdf -> MultiCell(20,4,'Nro de
Control
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(180);
    $pdf -> MultiCell(15,4,'
OP
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(195);
    $pdf -> MultiCell(20,4,'
Monto Total
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(215);
    $pdf -> MultiCell(20,4,'
Sub Total
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(235);
    $pdf -> MultiCell(20,4,'
IVA
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(255);
    $pdf -> MultiCell(20,4,'
EXENTO
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(275);
    $pdf -> MultiCell(20,4,'IVA
RETENIDO
',1,'C',0);

    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();

        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'ELABORADO POR: '.$this->request->getSession()->read('Auth.User.responsable'),0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'REVISADO POR: ',0,1,'C');
        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'________________________________________ ',0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'_________________________________________',0,1,'C');
        

        $pdf -> Output();
    }

    public function iva($requisicion = null){

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,5,30,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,10,25,15,"JPG","");

    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',8);


    $pdf -> ln();

    $pdf -> SetY(40);
    $pdf -> SetX(10);
    $pdf -> MultiCell(10,4,'
Nro.
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(20);
    $pdf -> MultiCell(20,4,'
Fecha
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(40);
    $pdf -> MultiCell(50,4,'
DESCRIPCION
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(90);
    $pdf -> MultiCell(20,4,'
RIF
',1,'C',0);
    
    $pdf -> SetY(40);
    $pdf -> SetX(110);
    $pdf -> MultiCell(30,4,'Nro de
comprobante R.
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(140);
    $pdf -> MultiCell(20,4,'Nro de
Factura
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(160);
    $pdf -> MultiCell(20,4,'Nro de
Control
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(180);
    $pdf -> MultiCell(15,4,'
OP
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(195);
    $pdf -> MultiCell(20,4,'
Monto Total
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(215);
    $pdf -> MultiCell(20,4,'
Sub Total
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(235);
    $pdf -> MultiCell(20,4,'
IVA
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(255);
    $pdf -> MultiCell(20,4,'
EXENTO
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(275);
    $pdf -> MultiCell(20,4,'IVA
RETENIDO
',1,'C',0);

    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();

        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'ELABORADO POR: '.$this->request->getSession()->read('Auth.User.responsable'),0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'REVISADO POR: ',0,1,'C');
        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'________________________________________ ',0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'_________________________________________',0,1,'C');
        

        $pdf -> Output();
    }

    public function responsabilidad($requisicion = null){

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,5,30,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',250,10,25,15,"JPG","");

    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',8);


    $pdf -> ln();

    $pdf -> SetY(40);
    $pdf -> SetX(10);
    $pdf -> MultiCell(10,4,'
Nro.
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(20);
    $pdf -> MultiCell(20,4,'
Fecha
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(40);
    $pdf -> MultiCell(50,4,'
DESCRIPCION
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(90);
    $pdf -> MultiCell(20,4,'
RIF
',1,'C',0);
    
    $pdf -> SetY(40);
    $pdf -> SetX(110);
    $pdf -> MultiCell(30,4,'Nro de
comprobante R.
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(140);
    $pdf -> MultiCell(20,4,'Nro de
Factura
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(160);
    $pdf -> MultiCell(20,4,'Nro de
Control
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(180);
    $pdf -> MultiCell(15,4,'
OP
',1,'C',0);

    $pdf -> SetY(40);
    $pdf -> SetX(195);
    $pdf -> MultiCell(20,4,'
Monto Total
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(215);
    $pdf -> MultiCell(20,4,'
Sub Total
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(235);
    $pdf -> MultiCell(20,4,'
IVA
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(255);
    $pdf -> MultiCell(20,4,'
EXENTO
',1,'C',0);
    $pdf -> SetY(40);
    $pdf -> SetX(275);
    $pdf -> MultiCell(20,4,'IVA
RETENIDO
',1,'C',0);

    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();
    $pdf -> ln();

        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'ELABORADO POR:',0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'REVISADO POR: ',0,1,'C');
        $pdf -> ln();
        $pdf -> SetX(40);
        $pdf -> Cell(40,5,'________________________________________ ',0,0,'C');
        $pdf -> SetX(190);
        $pdf -> Cell(40,5,'_________________________________________',0,1,'C');
        

        $pdf -> Output();
    }
}
