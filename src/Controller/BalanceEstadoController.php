<?php
namespace App\Controller;

use App\Controller\AppController;
/*------------------------------ EJECUCION ------------------------------------*/


// ESTA ES LA EJECUCION PRESUPUESTARIA GENERAL HAY QUE ORGANIZAR LOS REGISTROS ESE MISMO ORDEN QUE COLOQUE EN LA ESTRUCTURA

class PDF_EjecucionPresupuestaria extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(6,3,'
S
E
C
T
O
R








',1,'C',0);
        $this->SetY(40);
        $this->SetX(11);
        $this->MultiCell(6,3,'
P
R
O
G
R
A
M
A






',1,'C',0);

        $this->SetY(40);
        $this->SetX(17);
        $this->MultiCell(6,3,'
S
U
B
-
P
R
O
G
R
A
M
A


',1,'C',0);

        $this->SetY(40);
        $this->SetX(23);
        $this->MultiCell(6,3,'
A
C
T
I
V
I
D
A
D





',1,'C',0);


$this->SetY(40);
        $this->SetX(29);
        $this->MultiCell(6,3,'
P
R
O
Y
E
C
T
O






',1,'C',0);

        $this->SetY(40);
        $this->SetX(35);
        $this->MultiCell(6,3,'
R
A
M
O










',1,'C',0);

        $this->SetY(40);
        $this->SetX(41);
        $this->MultiCell(6,3,'
S
U
B
-
R
A
M
O






',1,'C',0);

        $this->SetY(40);
        $this->SetX(47);
        $this->MultiCell(6,3,'
E
S
P
E
C
I
F
I
C
O




',1,'C',0);

        $this->SetY(40);
        $this->SetX(53);
        $this->MultiCell(6,3,'
S
U
B
-
E
S
P
E
C
I
F
I
C
O
',1,'C',0);

        $this->SetY(40);
        $this->SetX(59);
        $this->MultiCell(6,3,'
O
R
D
I
N
A
L







',1,'C',0);


        $this->SetY(40);
        $this->SetX(65);
        $this->MultiCell(70,45,'DENOMINACION',1,'C',0);

        $this->SetY(40);
        $this->SetX(135);
        $this->MultiCell(30,45,'ASIG. PRESUPUESTARIA',1,'C',0);

        $this->SetY(70);
        $this->SetX(165);
        $this->MultiCell(90,5,'MODIFICACION',1,'C',0);

        $this->SetY(70);
        $this->SetX(165);
        $this->MultiCell(30,5,'
CREACION

',1,'C',0);

        $this->SetY(70);
        $this->SetX(195);
        $this->MultiCell(30,5,'
AUMENTO

',1,'C',0);

        $this->SetY(70);
        $this->SetX(225);
        $this->MultiCell(30,5,'
DISMINUCION

',1,'C',0);

      $this->SetY(70);
      $this->SetX(255);
      $this->MultiCell(30,5,'ASIGNACION PRESUPUESTARIO AJUSTADA',1,'C',0);

      $this->SetY(70);
      $this->SetX(285);
      $this->MultiCell(30,15,'COMPROMISOS',1,'C',0);

      $this->SetY(70);
      $this->SetX(315);
      $this->MultiCell(30,15,'CAUSADO',1,'C',0);

      $this->SetY(70);
      $this->SetX(345);
      $this->MultiCell(30,5,'DISPONIBILIDAD PRESUPUESTARIA

',1,'C',0);

      }
}



class PDF_EjecucionPresupuestariaPartidas extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(40,5,'

POR PARTIDAS

',1,'C',0);

        $this->SetY(40);
        $this->SetX(45);
        $this->MultiCell(80,5,'

DENOMINACION

',1,'C',0);

        $this->SetY(40);
        $this->SetX(125);
        $this->MultiCell(30,5,'
ASIGNACION PRESUPUESTARIA

',1,'C',0);
        $this->SetY(40);
        $this->SetX(155);
        $this->MultiCell(90,5,'MODIFICACION',1,'C',0);

        $this->SetY(45);
        $this->SetX(155);
        $this->MultiCell(30,5,'
EJECUCION

',1,'C',0);

        $this->SetY(45);
        $this->SetX(185);
        $this->MultiCell(30,5,'
AUMENTO

',1,'C',0);

        $this->SetY(45);
        $this->SetX(215);
        $this->MultiCell(30,5,'
DISMINUCION

',1,'C',0);

      $this->SetY(40);
      $this->SetX(245);
      $this->MultiCell(30,5,'ASIGNACION PRESUPUESTARIO AJUSTADA
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(275);
      $this->MultiCell(30,5,'

COMPROMISOS
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(305);
      $this->MultiCell(30,5,'

CAUSADO
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(335);
      $this->MultiCell(30,5,'
DISPONIBILIDAD PRESUPUESTARIA
            ',1,'C',0);

      }
}



class PDF_EjecucionPresupuestariaSectores extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(40,5,'

POR SECTORES

',1,'C',0);

        $this->SetY(40);
        $this->SetX(45);
        $this->MultiCell(80,5,'

DENOMINACION

',1,'C',0);

        $this->SetY(40);
        $this->SetX(125);
        $this->MultiCell(30,5,'
ASIGNACION PRESUPUESTARIA

',1,'C',0);
        $this->SetY(40);
        $this->SetX(155);
        $this->MultiCell(90,5,'MODIFICACION',1,'C',0);

        $this->SetY(45);
        $this->SetX(155);
        $this->MultiCell(30,5,'
EJECUCION

',1,'C',0);

        $this->SetY(45);
        $this->SetX(185);
        $this->MultiCell(30,5,'
AUMENTO

',1,'C',0);

        $this->SetY(45);
        $this->SetX(215);
        $this->MultiCell(30,5,'
DISMINUCION

',1,'C',0);

      $this->SetY(40);
      $this->SetX(245);
      $this->MultiCell(30,5,'ASIGNACION PRESUPUESTARIO AJUSTADA
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(275);
      $this->MultiCell(30,5,'

COMPROMISOS
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(305);
      $this->MultiCell(30,5,'

CAUSADO
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(335);
      $this->MultiCell(30,5,'
DISPONIBILIDAD PRESUPUESTARIA
            ',1,'C',0);

      }
}



class PDF_EjecucionPresupuestariaProgramas extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(40,5,'

POR PROGRAMAS

',1,'C',0);

        $this->SetY(40);
        $this->SetX(45);
        $this->MultiCell(80,5,'

DENOMINACION

',1,'C',0);

        $this->SetY(40);
        $this->SetX(125);
        $this->MultiCell(30,5,'
ASIGNACION PRESUPUESTARIA

',1,'C',0);
        $this->SetY(40);
        $this->SetX(155);
        $this->MultiCell(90,5,'MODIFICACION',1,'C',0);

        $this->SetY(45);
        $this->SetX(155);
        $this->MultiCell(30,5,'
EJECUCION

',1,'C',0);

        $this->SetY(45);
        $this->SetX(185);
        $this->MultiCell(30,5,'
AUMENTO

',1,'C',0);

        $this->SetY(45);
        $this->SetX(215);
        $this->MultiCell(30,5,'
DISMINUCION

',1,'C',0);

      $this->SetY(40);
      $this->SetX(245);
      $this->MultiCell(30,5,'ASIGNACION PRESUPUESTARIO AJUSTADA
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(275);
      $this->MultiCell(30,5,'

COMPROMISOS
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(305);
      $this->MultiCell(30,5,'

CAUSADO
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(335);
      $this->MultiCell(30,5,'
DISPONIBILIDAD PRESUPUESTARIA
            ',1,'C',0);

      }
}


class PDF_EjecucionPresupuestariaSubprogramas extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(40,5,'

POR SUB-PROGRAMAS

',1,'C',0);

        $this->SetY(40);
        $this->SetX(45);
        $this->MultiCell(80,5,'

DENOMINACION

',1,'C',0);

        $this->SetY(40);
        $this->SetX(125);
        $this->MultiCell(30,5,'
ASIGNACION PRESUPUESTARIA

',1,'C',0);
        $this->SetY(40);
        $this->SetX(155);
        $this->MultiCell(90,5,'MODIFICACION',1,'C',0);

        $this->SetY(45);
        $this->SetX(155);
        $this->MultiCell(30,5,'
EJECUCION

',1,'C',0);

        $this->SetY(45);
        $this->SetX(185);
        $this->MultiCell(30,5,'
AUMENTO

',1,'C',0);

        $this->SetY(45);
        $this->SetX(215);
        $this->MultiCell(30,5,'
DISMINUCION

',1,'C',0);

      $this->SetY(40);
      $this->SetX(245);
      $this->MultiCell(30,5,'ASIGNACION PRESUPUESTARIO AJUSTADA
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(275);
      $this->MultiCell(30,5,'

COMPROMISOS
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(305);
      $this->MultiCell(30,5,'

CAUSADO
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(335);
      $this->MultiCell(30,5,'
DISPONIBILIDAD PRESUPUESTARIA
            ',1,'C',0);

      }
}


class PDF_EjecucionPresupuestariaActividadProyecto extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6);

        $this->SetY(40);
        $this->SetX(5);
        $this->MultiCell(40,5,'

POR ACTIVIDAD/PROYECTO

',1,'C',0);

        $this->SetY(40);
        $this->SetX(45);
        $this->MultiCell(80,5,'

DENOMINACION

',1,'C',0);

        $this->SetY(40);
        $this->SetX(125);
        $this->MultiCell(30,5,'
ASIGNACION PRESUPUESTARIA

',1,'C',0);
        $this->SetY(40);
        $this->SetX(155);
        $this->MultiCell(90,5,'MODIFICACION',1,'C',0);

        $this->SetY(45);
        $this->SetX(155);
        $this->MultiCell(30,5,'
EJECUCION

',1,'C',0);

        $this->SetY(45);
        $this->SetX(185);
        $this->MultiCell(30,5,'
AUMENTO

',1,'C',0);

        $this->SetY(45);
        $this->SetX(215);
        $this->MultiCell(30,5,'
DISMINUCION

',1,'C',0);

      $this->SetY(40);
      $this->SetX(245);
      $this->MultiCell(30,5,'ASIGNACION PRESUPUESTARIO AJUSTADA
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(275);
      $this->MultiCell(30,5,'

COMPROMISOS
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(305);
      $this->MultiCell(30,5,'

CAUSADO
            ',1,'C',0);

      $this->SetY(40);
      $this->SetX(335);
      $this->MultiCell(30,5,'
DISPONIBILIDAD PRESUPUESTARIA
            ',1,'C',0);

      }
}

class BalanceEstadoController extends AppController
{
    public function index($libro = null, $inicio = null, $corte = null){

        //========================================================
        //Selecciona el Layout de Transferencia
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Vecedulaica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================

        if($libro != '' and $inicio != '' and $corte != ''){

            $this->set('libro', $libro);
            $this->set('inicio', $inicio);
            $this->set('corte', $corte);

            if($libro == 1){
                $this->EjecucionDetalladaRamo($libro, $inicio, $corte, "PDF");
            }else if($libro == 2){
                $this->EjecucionDetalladaSector($libro, $inicio, $corte, "PDF");
            }else if($libro == 3){
                $this->EjecucionDetalladaPrograma($libro, $inicio, $corte, "PDF");
            }else if($libro == 4){
                $this->EjecucionDetalladaSubPrograma($libro, $inicio, $corte, "PDF");
            }else if($libro == 5){
                $this->EjecucionDetalladaActProy($libro, $inicio, $corte, "PDF");
            }else if($libro == 6){
                $this->EjecucionGeneral($libro, $inicio, $corte, "PDF");
            }
        }
        //========================================================

        if($this->request->is('post')){
            $libro = $this->request->data['libro'];
            $inicio = $this->request->data['inicio'];
            $corte = $this->request->data['corte'];

            if($libro != '' and $inicio != '' and $corte != ''){

                return $this->redirect(['action' => 'index', $libro, $inicio, $corte, "PDF"]); 
            }
        } 
    }


    public function EjecucionGeneral($libro = null, $inicio = null, $corte = null){

        if($libro == null or $inicio == null or $corte == null){
            return $this->redirect(['action' => 'index']); 
        }

        $pdf = new PDF_EjecucionPresupuestaria('L','mm',array(300,390));
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);

        $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'ramo' => 'ASC', 'sub_ramo' => 'ASC', 'especifico' => 'ASC', 'sub_especifico' => 'ASC'];
        $this->loadModel('ViewEjecucionBalanceGeneral');
        $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

        $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
        $this->loadModel('PresupuestoForma2121Ajuste');
        $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);

        $condicion = ['ano' => ANO_FISCAL];
        $this->loadModel('ViewOrdenamiento');
        $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);

        foreach($data as $reg){  
            $pdf -> SetX(5);
            
            $pdf -> Cell(6,5,$reg['sector'] ,1,0,'C'); //SECTOR
            $pdf -> Cell(6,5,$reg['programa'] ,1,0,'C'); //PROGRAMA
            $pdf -> Cell(6,5,$reg['sub_programa'] ,1,0,'C'); //SUB-PROGRAMA
            $pdf -> Cell(6,5,$reg['actividad'] ,1,0,'C'); //ACTIVIDAD
            //                           'O'
            $pdf -> Cell(6,5,substr($reg['proyecto'],1) ,1,0,'C'); // PROYECTO

            $pdf -> Cell(6,5,$reg['ramo'] ,1,0,'C'); // RAMO
            $pdf -> Cell(6,5,$reg['sub_ramo'] ,1,0,'C'); // SUB-RAMO
            $pdf -> Cell(6,5,$reg['especifico'] ,1,0,'C'); // ESPECIFICO
            $pdf -> Cell(6,5,$reg['sub_especifico'] ,1,0,'C'); // SUB-ESPECIFICO
            $pdf -> Cell(6,5,$reg['ordinal'] ,1,0,'C'); // ORDINAL

            $pdf -> Cell(70,5, @substr($this->mayus($reg['ordinald_denominacion']), 0, 35). "..." ,1,0,'L'); // DESCRICPION DE LA PARTIDA COMPLETA 

            if($reg['resolucion'] == false){
                $pdf -> Cell(30,5, @$this->moneda($reg['monto']) ,1,0,'R'); // ASIGNADO EN FORMULACION
            }else{
                $pdf -> Cell(30,5, "" ,1,0,'C'); // ASIGNADO EN FORMULACION
            }

            if($reg['resolucion'] == true){
                $pdf -> Cell(30,5, @$this->moneda($reg['monto']) ,1,0,'R'); // ASIGNACION EN RESOLUCION
            }else{
                $pdf -> Cell(30,5, "" ,1,0,'C'); // ASIGNACION EN RESOLUCION
            }

            $aumento = 0;
            foreach ($ajuste as $key) {
                if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                    $aumento += $key['incrementar'];
                }
            }

            $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'R'); // AUMENTO

            $disminucion = 0;
            foreach ($ajuste as $key) {
                if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                    $disminucion += $key['disminuir'];
                }
            }

            $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'R');      // DISMINUCION
            $pdf -> Cell(30,5, @$this->moneda($reg['monto'] + $aumento - $disminucion) ,1,0,'R'); // TOTAL AJUSTADO
            
            $monto_comprometido = 0;
            foreach ($comprometido as $key) {
                if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                    $monto_comprometido += $key['monto'];
                }
            }

            $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'R');  // TOTAL DE MONTO DE COMPROMISOS 

            $monto_causado = 0;
            foreach ($comprometido as $key) {
                if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                    $monto_causado += $key['monto'];
                }
            }

            $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'R');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
            $pdf -> Cell(30,5, @$this->moneda($reg['monto'] + $aumento - $disminucion - $monto_causado) ,1,1,'R');          // DISPONIBLE EL AJUSTE - COMPROMISOS
        }

        $pdf -> Output();
    }


      // AQUI AGARRAMOS TODOS LOS REPORTES DETALLADOS 
        // POR SECTOR   00
        // POR PROGRAMA 00.00 
        // POR ACTIVIDAD/PROYECTO 00 
        // POR PARTIDA 00 SOLO RAMO

        // CUANDO SEA POR PROGRAMA HAY QUE SEPARAR POR HOJAS LOS PROGRAMAS EN UNA HOJA EL PROGRAMA 01... OTRA HOJA EL 02 ...
        // CUANDO SEA POR ACTIVIDAD/PROYECTO HAY QUE SEPARAR POR HOJAS IGUAL SIMILAR A COMO ES EL REPORTE DE RELACION DE PROYECTO QUE SEPARA ...
        // POR PARTIDA RAMO NO APLICA ESTO AL IGUAL QUE SECTORES...

      public function EjecucionDetalladaRamo($libro = null, $inicio = null, $corte = null){

                if($libro == null or $inicio == null or $corte == null){
                    return $this->redirect(['action' => 'index']); 
                }

                $pdf = new PDF_EjecucionPresupuestariaPartidas('L','mm',array(300,390));
                $pdf -> AddPage();
                $pdf -> SetFont('Arial','I',8);

                $order = ['ramo' => 'ASC'];
                $condicion = ['OR' => ['id <' => 12, 'id >' => 24]];
                $this->loadModel('PresupuestoRamo');
                $ramos = $this->PresupuestoRamo->find('all')->where($condicion)->order($order);

                $order = ['ramo' => 'ASC'];
                $this->loadModel('ViewEjecucionBalanceGeneral');
                $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

                $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
                $this->loadModel('PresupuestoForma2121Ajuste');
                $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);

                $condicion = ['ano' => ANO_FISCAL];
                $this->loadModel('ViewOrdenamiento');
                $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);

                $r = 0;

                foreach($ramos as $ramo){

                    if($r != $ramo['ramo']){
                        $r = $ramo['ramo'];
                        $formulacion = 0;
                        $resolucion = 0;
                        $aumento = 0;
                        $disminucion = 0;
                        $monto_comprometido = 0;
                        $monto_causado = 0;

                        foreach($data as $reg){
                            if($r == $reg['ramo']){

                                if($reg['resolucion'] == false){
                                    $formulacion += $reg['monto'];
                                }else{
                                    $resolucion += $reg['monto'];
                                }

                                foreach ($ajuste as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                                        $aumento += $key['incrementar'];
                                    }
                                }

                                foreach ($ajuste as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                                        $disminucion += $key['disminuir'];
                                    }
                                }

                                foreach ($comprometido as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                                        $monto_comprometido += $key['monto'];
                                    }
                                }

                                foreach ($comprometido as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                                        $monto_causado += $key['monto'];
                                    }
                                }

                            }
                        }

                        if($formulacion != 0 and $resolucion != 0){

                            $pdf -> SetX(5);
                            
                            $pdf -> Cell(40,5,$ramo['ramo'] ,1,0,'C'); //PARTIDAS

                            $pdf -> Cell(80,5, @substr($this->mayus($ramo['descripcion']), 0, 35) ,1,0,'C'); // DESCRICPION DE LA PARTIDA COMPLETA 

                            $pdf -> Cell(30,5, @$this->moneda($formulacion) ,1,0,'C'); // ASIGNADO EN FORMULACION
                            $pdf -> Cell(30,5, @$this->moneda($resolucion) ,1,0,'C'); // ASIGNACION EN RESOLUCION
        
                            $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'C'); // AUMENTO

                            $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'C');      // DISMINUCION
                            $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion) ,1,0,'C'); // TOTAL AJUSTADO
                            
                            $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'C');  // TOTAL DE MONTO DE COMPROMISOS 

                            $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'C');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
                            $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion - $monto_causado) ,1,1,'C');          // DISPONIBLE EL AJUSTE - COMPROMISOS
                        }
                    }
                }

                
        
                $pdf -> Output();
      }






























      public function EjecucionDetalladaSector($libro = null, $inicio = null, $corte = null){

                if($libro == null or $inicio == null or $corte == null){
                    return $this->redirect(['action' => 'index']); 
                }

                $pdf = new PDF_EjecucionPresupuestariaSectores('L','mm',array(300,390));
                $pdf -> AddPage();
                $pdf -> SetFont('Arial','I',8);

                $order = ['sector' => 'ASC'];
                $this->loadModel('PresupuestoSector');
                $sectores = $this->PresupuestoSector->find('all')->order($order);

                $order = ['sector' => 'ASC'];
                $this->loadModel('ViewEjecucionBalanceGeneral');
                $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

                $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
                $this->loadModel('PresupuestoForma2121Ajuste');
                $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);

                $condicion = ['ano' => ANO_FISCAL];
                $this->loadModel('ViewOrdenamiento');
                $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);

                $s = 0;

                foreach($sectores as $sector){

                    if($s != $sector['sector']){
                        $s = $sector['sector'];
                        $formulacion = 0;
                        $resolucion = 0;
                        $aumento = 0;
                        $disminucion = 0;
                        $monto_comprometido = 0;
                        $monto_causado = 0;

                        foreach($data as $reg){
                            if($s == $reg['sector']){

                                if($reg['resolucion'] == false){
                                    $formulacion += $reg['monto'];
                                }else{
                                    $resolucion += $reg['monto'];
                                }

                                foreach ($ajuste as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                                        $aumento += $key['incrementar'];
                                    }
                                }

                                foreach ($ajuste as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                                        $disminucion += $key['disminuir'];
                                    }
                                }

                                foreach ($comprometido as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                                        $monto_comprometido += $key['monto'];
                                    }
                                }

                                foreach ($comprometido as $key) {
                                    if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                                        $monto_causado += $key['monto'];
                                    }
                                }

                            }
                        }

                        if($formulacion != 0 and $resolucion != 0){

                            $pdf -> SetX(5);
                            
                            $pdf -> Cell(40,5,$sector['sector'] ,1,0,'C'); //PARTIDAS

                            $pdf -> Cell(80,5, @substr($this->mayus($sector['denominacion']), 0, 35) ,1,0,'C'); // DESCRICPION DE LA PARTIDA COMPLETA 

                            $pdf -> Cell(30,5, @$this->moneda($formulacion) ,1,0,'C'); // ASIGNADO EN FORMULACION
                            $pdf -> Cell(30,5, @$this->moneda($resolucion) ,1,0,'C'); // ASIGNACION EN RESOLUCION
        
                            $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'C'); // AUMENTO

                            $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'C');      // DISMINUCION
                            $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion) ,1,0,'C'); // TOTAL AJUSTADO
                            
                            $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'C');  // TOTAL DE MONTO DE COMPROMISOS 

                            $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'C');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
                            $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion - $monto_causado) ,1,1,'C');          // DISPONIBLE EL AJUSTE - COMPROMISOS
                        }
                    }
                }
                $pdf -> Output();
      }

















      public function EjecucionDetalladaPrograma($libro = null, $inicio = null, $corte = null){

                if($libro == null or $inicio == null or $corte == null){
                    return $this->redirect(['action' => 'index']); 
                }

                $pdf = new PDF_EjecucionPresupuestariaProgramas('L','mm',array(300,390));
                $pdf -> SetFont('Arial','I',8);

                $order = ['sector' => 'ASC'];
                $this->loadModel('PresupuestoSector');
                $sectores = $this->PresupuestoSector->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC'];
                $this->loadModel('ViewPresupuestoPrograma');
                $programas = $this->ViewPresupuestoPrograma->find('all')->order($order);

                $order = ['sector' => 'ASC'];
                $this->loadModel('ViewEjecucionBalanceGeneral');
                $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

                $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
                $this->loadModel('PresupuestoForma2121Ajuste');
                $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);

                $condicion = ['ano' => ANO_FISCAL];
                $this->loadModel('ViewOrdenamiento');
                $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);

                $s = 'x';

                foreach($sectores as $sector){
                    if($s != $sector['id']){
                        $s = $sector['id'];
                        $pdf -> AddPage();
                
                        $p = 'x';

                        foreach($programas as $programa){
                            if($p!= $programa['id']){
                                $p = $programa['id'];

                                $formulacion = 0;
                                $resolucion = 0;
                                $aumento = 0;
                                $disminucion = 0;
                                $monto_comprometido = 0;
                                $monto_causado = 0;

                                foreach($data as $reg){
                                    if($s == $reg['id_sector'] and $p == $reg['id_programa']){

                                        if($reg['resolucion'] == false){
                                            $formulacion += $reg['monto'];
                                        }else{
                                            $resolucion += $reg['monto'];
                                        }

                                        foreach ($ajuste as $key) {
                                            if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                                                $aumento += $key['incrementar'];
                                            }
                                        }

                                        foreach ($ajuste as $key) {
                                            if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                                                $disminucion += $key['disminuir'];
                                            }
                                        }

                                        foreach ($comprometido as $key) {
                                            if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                                                $monto_comprometido += $key['monto'];
                                            }
                                        }

                                        foreach ($comprometido as $key) {
                                            if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                                                $monto_causado += $key['monto'];
                                            }
                                        }

                                    }
                                }

                                if($formulacion != 0 and $resolucion != 0){

                                    $pdf -> SetX(5);
                                    
                                    $pdf -> Cell(40,5,$programa['sector'] . "." . $programa['programa'],1,0,'C'); //PARTIDAS

                                    $pdf -> Cell(80,5, @substr($this->mayus($programa['denominacion']), 0, 35) ,1,0,'C'); // DESCRICPION DE LA PARTIDA COMPLETA 

                                    $pdf -> Cell(30,5, @$this->moneda($formulacion) ,1,0,'C'); // ASIGNADO EN FORMULACION
                                    $pdf -> Cell(30,5, @$this->moneda($resolucion) ,1,0,'C'); // ASIGNACION EN RESOLUCION
                
                                    $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'C'); // AUMENTO

                                    $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'C');      // DISMINUCION
                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion) ,1,0,'C'); // TOTAL AJUSTADO
                                    
                                    $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'C');  // TOTAL DE MONTO DE COMPROMISOS 

                                    $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'C');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion - $monto_causado) ,1,1,'C');          // DISPONIBLE EL AJUSTE - COMPROMISOS
                                }
  
                            }
                        }
                        
                    }
                }
                $pdf -> Output();
      }















       public function EjecucionDetalladaSubPrograma($libro = null, $inicio = null, $corte = null){

                if($libro == null or $inicio == null or $corte == null){
                    return $this->redirect(['action' => 'index']); 
                }

                $pdf = new PDF_EjecucionPresupuestariaSubprogramas('L','mm',array(300,390));
                $pdf -> SetFont('Arial','I',8);

                $order = ['sector' => 'ASC'];
                $this->loadModel('PresupuestoSector');
                $sectores = $this->PresupuestoSector->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC'];
                $this->loadModel('ViewPresupuestoPrograma');
                $programas = $this->ViewPresupuestoPrograma->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC'];
                $this->loadModel('ViewPresupuestoSubPrograma');
                $sub_programas = $this->ViewPresupuestoSubPrograma->find('all')->order($order);

                $order = ['sector' => 'ASC'];
                $this->loadModel('ViewEjecucionBalanceGeneral');
                $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

                $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
                $this->loadModel('PresupuestoForma2121Ajuste');
                $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);

                $condicion = ['ano' => ANO_FISCAL];
                $this->loadModel('ViewOrdenamiento');
                $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);

                $s = 'x';

                                $pdf -> AddPage();
                foreach($sectores as $sector){
                    if($s != $sector['id']){
                        $s = $sector['id'];
                
                        $p = 'x';

                        foreach($programas as $programa){
                            if($p!= $programa['id']){
                                $p = $programa['id'];

                                $sp = 'x';

                                foreach($sub_programas as $sub_programa){
                                    if($sp!= $sub_programa['id']){
                                        $sp = $sub_programa['id'];


                                        $formulacion = 0;
                                        $resolucion = 0;
                                        $aumento = 0;
                                        $disminucion = 0;
                                        $monto_comprometido = 0;
                                        $monto_causado = 0;

                                        foreach($data as $reg){
                                            if($s == $reg['id_sector'] and $p == $reg['id_programa'] and $sp == $reg['id_sub_programa']){

                                                if($reg['resolucion'] == false){
                                                    $formulacion += $reg['monto'];
                                                }else{
                                                    $resolucion += $reg['monto'];
                                                }

                                                foreach ($ajuste as $key) {
                                                    if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                                                        $aumento += $key['incrementar'];
                                                    }
                                                }

                                                foreach ($ajuste as $key) {
                                                    if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                                                        $disminucion += $key['disminuir'];
                                                    }
                                                }

                                                foreach ($comprometido as $key) {
                                                    if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                                                        $monto_comprometido += $key['monto'];
                                                    }
                                                }

                                                foreach ($comprometido as $key) {
                                                    if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                                                        $monto_causado += $key['monto'];
                                                    }
                                                }

                                            }
                                        }

                                        if($formulacion != 0 and $resolucion != 0){

                                            $pdf -> SetX(5);
                                            
                                            $pdf -> Cell(40,5,$sub_programa['sector'] . "." . $sub_programa['programa'] . "." . $sub_programa['sub_programa'],1,0,'C'); //PARTIDAS

                                            $pdf -> Cell(80,5, @substr($this->mayus($sub_programa['denominacion']), 0, 35) ,1,0,'C'); // DESCRICPION DE LA PARTIDA COMPLETA 

                                            $pdf -> Cell(30,5, @$this->moneda($formulacion) ,1,0,'C'); // ASIGNADO EN FORMULACION
                                            $pdf -> Cell(30,5, @$this->moneda($resolucion) ,1,0,'C'); // ASIGNACION EN RESOLUCION
                        
                                            $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'C'); // AUMENTO

                                            $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'C');      // DISMINUCION
                                            $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion) ,1,0,'C'); // TOTAL AJUSTADO
                                            
                                            $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'C');  // TOTAL DE MONTO DE COMPROMISOS 

                                            $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'C');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion - $monto_causado) ,1,1,'C');          // DISPONIBLE EL AJUSTE - COMPROMISOS
                                }
                                        
          
                                    }
                                }
                                
  
                            }
                        }
                        
                    }
                }
                $pdf -> Output();
      }



































       public function EjecucionDetalladaActProy($libro = null, $inicio = null, $corte = null){

                if($libro == null or $inicio == null or $corte == null){
                    return $this->redirect(['action' => 'index']); 
                }

                $pdf = new PDF_EjecucionPresupuestariaActividadProyecto('L','mm',array(300,390));
                $pdf -> SetFont('Arial','I',8);

                $order = ['sector' => 'ASC'];
                $this->loadModel('PresupuestoSector');
                $sectores = $this->PresupuestoSector->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC'];
                $this->loadModel('ViewPresupuestoPrograma');
                $programas = $this->ViewPresupuestoPrograma->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC'];
                $this->loadModel('ViewPresupuestoSubPrograma');
                $sub_programas = $this->ViewPresupuestoSubPrograma->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'actividad' => 'ASC'];
                $this->loadModel('ViewPresupuestoActividad');
                $actividades = $this->ViewPresupuestoActividad->find('all')->order($order);

                $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'proyecto' => 'ASC'];
                $this->loadModel('ViewPresupuestoProyecto');
                $proyectos = $this->ViewPresupuestoProyecto->find('all')->order($order);

                $order = ['sector' => 'ASC'];
                $this->loadModel('ViewEjecucionBalanceGeneral');
                $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

                $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
                $this->loadModel('PresupuestoForma2121Ajuste');
                $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);

                $condicion = ['ano' => ANO_FISCAL];
                $this->loadModel('ViewOrdenamiento');
                $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);

                $s = 'x';

                $pdf -> AddPage();
                
                foreach($sectores as $sector){
                    if($s != $sector['id']){
                        $s = $sector['id'];
                
                        $p = 'x';

                        foreach($programas as $programa){
                            if($p!= $programa['id']){
                                $p = $programa['id'];

                                $sp = 'x';

                                foreach($sub_programas as $sub_programa){
                                    if($sp!= $sub_programa['id']){
                                        $sp = $sub_programa['id'];

                                        $act = 'x';

                                        foreach($actividades as $actividad){
                                            if($act!= $actividad['id']){
                                                $act = $actividad['id'];


                                                $formulacion = 0;
                                                $resolucion = 0;
                                                $aumento = 0;
                                                $disminucion = 0;
                                                $monto_comprometido = 0;
                                                $monto_causado = 0;

                                                foreach($data as $reg){
                                                    if($s == $reg['id_sector'] and $p == $reg['id_programa'] and $sp == $reg['id_sub_programa'] and $act == $reg['id_actividad']){

                                                        if($reg['resolucion'] == false){
                                                            $formulacion += $reg['monto'];
                                                        }else{
                                                            $resolucion += $reg['monto'];
                                                        }

                                                        foreach ($ajuste as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                                                                $aumento += $key['incrementar'];
                                                            }
                                                        }

                                                        foreach ($ajuste as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                                                                $disminucion += $key['disminuir'];
                                                            }
                                                        }

                                                        foreach ($comprometido as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                                                                $monto_comprometido += $key['monto'];
                                                            }
                                                        }

                                                        foreach ($comprometido as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                                                                $monto_causado += $key['monto'];
                                                            }
                                                        }

                                                    }
                                                }

                                                if($formulacion != 0 and $resolucion != 0){

                                                    $pdf -> SetX(5);
                                                    
                                                    $pdf -> Cell(40,5,$actividad['sector'] . "." . $actividad['programa'] . "." . $actividad['sub_programa'] . "." . $actividad['actividad'],1,0,'C'); //PARTIDAS

                                                    $pdf -> Cell(80,5, @substr($this->mayus($actividad['denominacion']), 0, 35) ,1,0,'C'); // DESCRICPION DE LA PARTIDA COMPLETA 

                                                    $pdf -> Cell(30,5, @$this->moneda($formulacion) ,1,0,'C'); // ASIGNADO EN FORMULACION
                                                    $pdf -> Cell(30,5, @$this->moneda($resolucion) ,1,0,'C'); // ASIGNACION EN RESOLUCION
                                
                                                    $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'C'); // AUMENTO

                                                    $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'C');      // DISMINUCION
                                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion) ,1,0,'C'); // TOTAL AJUSTADO
                                                    
                                                    $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'C');  // TOTAL DE MONTO DE COMPROMISOS 

                                                    $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'C');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
                                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion - $monto_causado) ,1,1,'C');          // DISPONIBLE EL AJUSTE - COMPROMISOS
                                                }
                                                
                                                
                  
                                            }
                                        }

                                        //===========================================================================
                                        
                                        $proy = 'x';

                                        foreach($proyectos as $proyecto){
                                            if($proy!= $proyecto['id']){
                                                $proy = $proyecto['id'];


                                                
                                                $formulacion = 0;
                                                $resolucion = 0;
                                                $aumento = 0;
                                                $disminucion = 0;
                                                $monto_comprometido = 0;
                                                $monto_causado = 0;

                                                foreach($data as $reg){
                                                    if($s == $reg['id_sector'] and $p == $reg['id_programa'] and $sp == $reg['id_sub_programa'] and $proy == $reg['id_proyecto']){

                                                        if($reg['resolucion'] == false){
                                                            $formulacion += $reg['monto'];
                                                        }else{
                                                            $resolucion += $reg['monto'];
                                                        }

                                                        foreach ($ajuste as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '+'){
                                                                $aumento += $key['incrementar'];
                                                            }
                                                        }

                                                        foreach ($ajuste as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['tipo_ajuste'] == '-'){
                                                                $disminucion += $key['disminuir'];
                                                            }
                                                        }

                                                        foreach ($comprometido as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['status'] >=2 ){
                                                                $monto_comprometido += $key['monto'];
                                                            }
                                                        }

                                                        foreach ($comprometido as $key) {
                                                            if($key['partida'] == $reg['concatenado'] and $key['status'] >= 5){
                                                                $monto_causado += $key['monto'];
                                                            }
                                                        }

                                                    }
                                                }

                                                if($formulacion != 0 and $resolucion != 0){

                                                    $pdf -> SetX(5);
                                                    
                                                    $pdf -> Cell(40,5,$proyecto['sector'] . "." . $proyecto['programa'] . "." . $proyecto['sub_programa'] . "." . $proyecto['proyecto'],1,0,'C'); //PARTIDAS

                                                    $pdf -> Cell(80,5, @substr($this->mayus($proyecto['denominacion']), 0, 35) ,1,0,'C'); // DESCRICPION DE LA PARTIDA COMPLETA 

                                                    $pdf -> Cell(30,5, @$this->moneda($formulacion) ,1,0,'C'); // ASIGNADO EN FORMULACION
                                                    $pdf -> Cell(30,5, @$this->moneda($resolucion) ,1,0,'C'); // ASIGNACION EN RESOLUCION
                                
                                                    $pdf -> Cell(30,5, @$this->moneda($aumento) ,1,0,'C'); // AUMENTO

                                                    $pdf -> Cell(30,5, @$this->moneda($disminucion) ,1,0,'C');      // DISMINUCION
                                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion) ,1,0,'C'); // TOTAL AJUSTADO
                                                    
                                                    $pdf -> Cell(30,5, @$this->moneda($monto_comprometido) ,1,0,'C');  // TOTAL DE MONTO DE COMPROMISOS 

                                                    $pdf -> Cell(30,5, @$this->moneda($monto_causado) ,1,0,'C');                    // ESTO CAUSADO QUEDA EN 0.00 PORQUE NO SE
                                                    $pdf -> Cell(30,5, @$this->moneda($formulacion + $resolucion + $aumento - $disminucion - $monto_causado) ,1,1,'C');          // DISPONIBLE EL AJUSTE - COMPROMISOS
                                                }
                                                
                  
                                            }
                                        }
          
                                    }
                                }
                            }
                        }
                        
                    }
                }
                $pdf -> Output();
      }
}