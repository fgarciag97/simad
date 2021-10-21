<?php
namespace App\Controller;

use App\Controller\AppController;

class EjecucionHistorialOrdenesController extends AppController
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

        $this->loadModel('ViewMrrhhRequisicion');
        $nomina = $this->ViewMrrhhRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->order(['id' => 'DESC']);
        $this->set(compact('nomina'));

        $this->loadModel('ViewCompraRequisicion');
        $compra = $this->ViewCompraRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->order(['id' => 'DESC']);
        $this->set(compact('compra'));

        $this->loadModel('ViewMrrhhRequisicionServicios');
        $servicios = $this->ViewMrrhhRequisicionServicios->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->order(['id' => 'DESC']);
        $this->set(compact('servicios'));
    } 

    public function nomina(){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->loadModel('ViewMrrhhRequisicion');
        $nomina = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->order(['id' => 'DESC']));
        $this->set(compact('nomina'));

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $nomina = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['id' => $req])->order(['id' => 'DESC']));
                $this->set(compact('nomina'));
            }

            if($op != null){
                $nomina = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['numero_orden_pago' => $op])->order(['id' => 'DESC']));
                $this->set(compact('nomina'));
            }

            if($d != null and $h != null){
                $nomina = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['and' => ['fecha_ejecucion >=' => $d, 'fecha_ejecucion <=' => $h]])->order(['id' => 'DESC']));
                $this->set(compact('nomina'));
            }
        }
    } 

    public function compra(){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->loadModel('ViewCompraRequisicion');
        $compra = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->order(['id' => 'DESC']));
        $this->set(compact('compra'));

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $compra = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['id' => $req])->order(['id' => 'DESC']));
                $this->set(compact('compra'));
            }

            if($op != null){
                $compra = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['numero_orden_pago' => $op])->order(['id' => 'DESC']));
                $this->set(compact('compra'));
            }

            if($d != null and $h != null){
                $compra = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['and' => ['fecha_ejecucion >=' => $d, 'fecha_ejecucion <=' => $h]])->order(['id' => 'DESC']));
                $this->set(compact('compra'));
            }
        }
    } 

    public function servicios(){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $this->loadModel('ViewMrrhhRequisicionServicios');
        $servicios = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->order(['id' => 'DESC']));
        $this->set(compact('servicios'));

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $servicios = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['id' => $req])->order(['id' => 'DESC']));
                $this->set(compact('servicios'));
            }

            if($op != null){
                $servicios = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['numero_orden_pago' => $op])->order(['id' => 'DESC']));
                $this->set(compact('servicios'));
            }

            if($d != null and $h != null){
                $servicios = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['ano' => ANO_FISCAL, 'and' => ['status >' => 1]])->where(['and' => ['fecha_ejecucion >=' => $d, 'fecha_ejecucion <=' => $h]])->order(['id' => 'DESC']));
                $this->set(compact('servicios'));
            }
        }
    } 

    public function elaborarnomina($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'nomina']);
    }

    public function elaborarservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'servicios']);
    }

    public function elaborarcompra($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'compra']);
    }

    public function reportecompra($req = null, $num = null, $tipo = null){
            
        $condicion = ['requisicion' => $req];

        if($tipo == 'COMPRA'){
            $this->loadModel('ViewCompraOrdenComprasItems');
            $data = $this->ViewCompraOrdenComprasItems->find('all')->where($condicion)->toArray();

            $this->loadModel('ViewCompraOrdenCompras');
            $orden = $this->ViewCompraOrdenCompras->find('all')->where($condicion)->toArray();
        }else if($tipo == 'SERVICIO'){
            $this->loadModel('ViewCompraOrdenServicioItems');
            $data = $this->ViewCompraOrdenServicioItems->find('all')->where($condicion)->toArray();

            $this->loadModel('ViewCompraOrdenServicio');
            $orden = $this->ViewCompraOrdenServicio->find('all')->where($condicion)->toArray();
        }
    
        

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> ln();$pdf -> ln();$pdf -> ln();

         $n = 10 - strlen($orden[0]['requisicion']);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $orden[0]['requisicion'];

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $n;

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE COMPRA: ' .'00'. $orden[0]['numero_orden_pago'],0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Senor(es):',0,1,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5, $orden[0]['proveedor'],0,1,'L');
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'RIF: ' . $orden[0]['letra'] . '-' . $orden[0]['rif'] ,0,1,'L');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'Presente.-',0,1,'L');

        if ($orden[0]['status'] == 1) {
            $status = 'ELABORADA';
        }else if ($orden[0]['status'] == 2) {
            $status = 'COMPROMETIDA';
        }else if ($orden[0]['status'] == 4) {
            $status = 'EN EJECUCION';
        }else if ($orden[0]['status'] == 5) {
            $status = 'APROBADA';
        }else if ($orden[0]['status'] == 6) {
            $status = 'LIQUIDADO';
        }


        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Unidad Solicitante:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,' '.$data[0]['unidad_ejecutora'],0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '. $this->fecha($data[0]['fecha']),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Sub-Total:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'], 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'I.V.A. (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'] * 0.16, 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Estado de la Orden:',0,0,'L');
        $pdf -> SetX(150);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'            '.$status,0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Total (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'] + ($orden[0]['total'] * 0.16), 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'FECHA DE COMPROMISO:',0,0,'L');
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,$this->fecha($data[0]['fecha']),0,1,'L');



        /* Descripcion ingresada por el usuario*/
        $pdf -> SetFont('Arial','',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(20,2,'Descripcion:',0,1,'L');
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($orden[0]['descripcion_ordena']),0,'L',0);
        $pdf -> SetFont('Arial','',8);
     
        $pdf -> ln();


        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(20,6,'Categoria P.',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(110,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $total = 0;

         foreach ($data as $reg) {

            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(15);
            $pdf -> Cell(20,6, $reg['unidad_solicitante'],1,0,'C');
            $pdf -> Cell(25,6, $reg['id_partida'],1,0,'C');
            $pdf -> Cell(110,6, $this->mayus($reg['descripcion_partida']),1,0,'C');
            $pdf -> Cell(30,6, number_format($reg['sub_total'], 2, ',', '.'),1,1,'C');

            $total += $reg['sub_total'];
        }






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
    

   

        $pdf -> Output('Orden de Compra ' . $req, 'I');
    }


    public function reportereqservicio($req = null, $num = null){
            
        $condicion = ['id_requisicion' => $req];
        $this->loadModel('EjecucionRequisicionServicio');
        $data = $this->EjecucionRequisicionServicio->find('all')->where($condicion)->toArray();
 
        $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $orden = $this->ViewMrrhhRequisicionServicios->find('all')->where($condicion)->toArray();

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> ln();$pdf -> ln();$pdf -> ln();

         $n = 10 - strlen($orden[0]['requisicion']);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $orden[0]['requisicion'];

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $n;

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE SERVICIO: ' . '00'. $orden[0]['numero_orden_pago'],0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Senor(es):',0,1,'L');
        $pdf -> SetFont('Arial','',8);


        if($orden[0]['id'] == 838) {

            $pdf->SetY(55);
            $pdf->SetX(15);
            $pdf->MultiCell(100,4,$this->mayus('ALONSO MANZANO'),0,'J',0);
            $pdf->ln();
            $pdf -> SetX(15);
            $pdf -> Cell(80,5,'C.I / RIF: ' .'J'.' - '. '27.116.522',0,1,'L');
            $pdf -> SetFont('Arial','B',8);

        }else{
            $pdf->SetY(55);
            $pdf->SetX(15);
            $pdf->MultiCell(100,4,$this->mayus($orden[0]['beneficiario']),0,'J',0);
            $pdf -> SetX(15);
            $pdf -> Cell(80,5,'C.I / RIF: ' .$orden[0]['letra'].' - '. $orden[0]['rif'],0,1,'L');
            $pdf -> SetFont('Arial','B',8);
        }

        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'Presente.-',0,1,'L');

         if ($orden[0]['status'] == 1) {
            $status = 'ELABORADA';
        }else if ($orden[0]['status'] == 2) {
            $status = 'COMPROMETIDA';
        }else if ($orden[0]['status'] == 4) {
            $status = 'EN EJECUCION';
        }else if ($orden[0]['status'] == 5) {
            $status = 'APROBADA';
        }else if ($orden[0]['status'] == 6) {
            $status = 'LIQUIDADO';
        }


        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Unidad Solicitante:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                     ',0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                     '. date_format($orden[0]['fecha_ejecucion'], 'd/m/Y'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Sub-Total:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                     '.  number_format($orden[0]['monto'], 2, ',', '.'),0,1,'L');

        /*$pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'I.V.A. (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'] * 0.16, 2, ',', '.'),0,1,'L');
    */
        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Estado de la Orden:',0,0,'L');
        $pdf -> SetX(150);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'              '.$status,0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Total (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                     '.  number_format($orden[0]['monto'], 2, ',', '.'),0,1,'L');
        //$pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'] + ($orden[0]['total'] * 0.16), 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'FECHA DE COMPROMISO:',0,0,'L');
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'  '. date_format($orden[0]['fecha_ejecucion'], 'd/m/Y'),0,1,'L');
        //$pdf -> Cell(40,5,$data[0]['fecha'],0,1,'L');



        /* Descripcion ingresada por el usuario*/
        $pdf -> SetFont('Arial','',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(20,2,'Descripcion:',0,1,'L');
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($orden[0]['concepto_mod']),0,'L',0);
        $pdf -> SetFont('Arial','',8);
     
        $pdf -> ln();


        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(20,6,'Partida',1,0,'C');
        $pdf -> Cell(130,6,'Descripcion',1,0,'C');
        $pdf -> Cell(20,6,'Monto (Bs.S)',1,1,'C');

        $total = 0;

         foreach ($data as $reg) {

            $pdf -> SetFont('Arial','B',8);
            $pdf -> SetX(15);
            //$pdf -> Cell(20,6, '14.01.51',1,0,'C');

            if($orden[0]['id_tipo_personal'] == 1 OR $orden[0]['id_tipo_personal'] == 2 OR $orden[0]['id_tipo_personal'] == 3 OR $orden[0]['id_tipo_personal'] == 7 OR $orden[0]['id_tipo_personal'] == 9 OR $orden[0]['id_tipo_personal'] == 10 OR $orden[0]['id_tipo_personal'] == 11 OR $orden[0]['id_tipo_personal'] == 14 OR $orden[0]['id_tipo_personal'] == 16 OR $orden[0]['id_tipo_personal'] == 17){
                
                $pdf -> Cell(20,6, "14.01.51",1,0,'C');
            }else{
                $pdf -> Cell(20,6, "14.01.52",1,0,'C');

            }


            
            $pdf -> Cell(20,6, $reg['partida'],1,0,'C');
            $pdf -> Cell(130,6, substr($reg['denominacion'],0,90),1,0,'C');
            $pdf -> Cell(20,6, number_format($reg['monto_comprometer'], 2, ',', '.'),1,1,'C');

            $total += $reg['sub_total'];
        }


         /*   if ($orden[0]['id'] == 661){
                $pdf -> SetX(15);
                $pdf -> Cell(20,6, "14.01.51",0,0,'C');
                $pdf -> Cell(20,6,'4.07.01.01.14.00',0,0,'C');
                $pdf -> Cell(130,6, substr('Aportes a caja de ahorro del personal jubilado',0,90),0,0,'C');
                $pdf -> Cell(20,6, number_format(8038318, 2, ',', '.'),0,1,'C');
            }
        */





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
    

   

        $pdf -> Output('Orden de Servicio ' . $req, 'I');
    }


    public function reporteservicio($req = null, $num = null){
            
        $condicion = ['requisicion' => $req];

    
        $this->loadModel('ViewCompraOrdenServicioItems');
        $data = $this->ViewCompraOrdenServicioItems->find('all')->where($condicion)->toArray();

        $this->loadModel('ViewCompraOrdenServicio');
        $orden = $this->ViewCompraOrdenServicio->find('all')->where($condicion)->toArray();

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',165,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> ln();$pdf -> ln();$pdf -> ln();

         $n = 10 - strlen($orden[0]['requisicion']);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $orden[0]['requisicion'];

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $n;

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE SERVICIO: ' . '00'. $orden[0]['numero_orden_pago'],0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Senor(es):',0,1,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5, $orden[0]['proveedor'],0,1,'L');
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'RIF: ' . $orden[0]['letra'] . '-' . $orden[0]['rif'] ,0,1,'L');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'Presente.-',0,1,'L');

         if ($orden[0]['status'] == 1) {
            $status = 'ELABORADA';
        }else if ($orden[0]['status'] == 2) {
            $status = 'COMPROMETIDA';
        }else if ($orden[0]['status'] == 4) {
            $status = 'EN EJECUCION';
        }else if ($orden[0]['status'] == 5) {
            $status = 'APROBADA';
        }else if ($orden[0]['status'] == 6) {
            $status = 'LIQUIDADO';
        }


        if ($data[0]['unidad_solicitante'] == '02.02.02') {
            $unidad_solicitante = 'SECRETARIA DE HACIENDA MUNICIPAL';
        }else{
            $unidad_solicitante = 'DIRECCION DEL ESTADO';
        }

        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Unidad Solicitante:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,' '.$unidad_solicitante,0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'          '. $this->fecha($data[0]['fecha']),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Sub-Total:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'], 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'I.V.A. (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'] * 0.16, 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Estado de la Orden:',0,0,'L');
        $pdf -> SetX(150);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'            '.$status,0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Total (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'                  '.  number_format($orden[0]['total'] + ($orden[0]['total'] * 0.16), 2, ',', '.'),0,1,'L');

        $pdf -> SetX(120);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'FECHA DE COMPROMISO:',0,0,'L');
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,$this->fecha($data[0]['fecha']),0,1,'L');



        /* Descripcion ingresada por el usuario*/
        $pdf -> SetFont('Arial','',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(20,2,'Descripcion:',0,1,'L');
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$orden[0]['descripcion_ordena'],0,'L',0);
        $pdf -> SetFont('Arial','',8);
     
        $pdf -> ln();


        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(110,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $total = 0;

        foreach ($data as $reg) {

            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(15);
            $pdf -> Cell(20,6, $reg['unidad_solicitante'],1,0,'C');
            $pdf -> Cell(25,6, $reg['id_partida'],1,0,'C');
            $pdf -> Cell(110,6, $this->mayus($reg['descripcion_partida']),1,0,'C');
            $pdf -> Cell(30,6, number_format($reg['sub_total'], 2, ',', '.'),1,1,'C');

            $total += $reg['sub_total'];
        }






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
    

   

        $pdf -> Output('Orden de Servicio ' . $req, 'I');
    }

    public function reportenomina($req = null, $num = null){
            
        $condicion = ['id_requisicion' => $req];

        $this->loadModel('ViewEjecucionRequisicionNomina');
        $data = $this->ViewEjecucionRequisicionNomina->find('all')->where($condicion)->toArray();
        
        $condicion = ['id' => $req];
        $this->loadModel('ViewMrrhhRequisicion');
        $nomina = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();

        $pdf = new \FPDF('P','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);
        
        /* Membrete Faltan Imagenes a los lados */
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',170,5,35,25,"JPG","");


        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $pdf -> ln();$pdf -> ln();$pdf -> ln();

         $n = 10 - strlen($req);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }

        $requisicion .= $req; 

        $n = 6 - strlen($num);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $n;

        $pdf -> SetFont('Arial','B',16);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE SERVICIO: ' .'00'. $nomina[0]['numero_orden_pago'],0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Senor(es):',0,1,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> SetX(15);
        $pdf -> Cell(80,5, "ALCALDIA DEL MUNICIPIO MIRANDA",0,1,'L');
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'RIF: G-20000169-0' ,0,1,'L');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'Presente.-',0,1,'L');

        $unidad_solicitante = 'ALCALDIA DE MIRANDA';

        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Unidad Solicitante:',0,0,'L');
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'          '.$unidad_solicitante,0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:' .'    ' .$this->fecha($data[0]['fecha']),0,1,'L');
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);
        //$pdf -> Cell(40,5,'          ',0,1,'L');

        $total = 0;

          foreach ($data as $reg) {
            $total += $reg['monto_comprometer'];
        }

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Sub-Total:',0,0,'L');
        $pdf -> SetX(160);
        $pdf -> SetFont('Arial','',8);

        if($data[0]['id_requisicion'] == 741){
            $pdf -> Cell(40,5,'          '. number_format(@52906154.87, 2, ',', '.'),0,1,'L');
        }else{
            $pdf -> Cell(40,5,'          '. number_format(@$total, 2, ',', '.'),0,1,'L');

        }

        if ($nomina[0]['status'] == 0) {
            $status = 'ELABORADA';
        }else if ($nomina[0]['status'] == 1) {
            $status = 'ELABORADA';
        }else if ($nomina[0]['status'] == 2) {
            $status = 'COMPROMETIDA';
        }else if ($nomina[0]['status'] == 4) {
            $status = 'EN EJECUCION';
        }else if ($nomina[0]['status'] == 5) {
            $status = 'APROBADA';
        }else if ($nomina[0]['status'] == 6) {
            $status = 'LIQUIDADA';
        }

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Estado de la Orden:',0,0,'L');
        $pdf -> SetX(170);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, $status,0,1,'L');

        $pdf -> SetX(140);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'FECHA DE COMPROMISO:',0,0,'L');
        $pdf -> SetX(178);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,$this->fecha($data[0]['fecha']),0,1,'L');



        /* Descripcion ingresada por el usuario*/
        $pdf -> SetFont('Arial','',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(20,2,'Descripcion:',0,1,'L');
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4,$this->mayus($nomina[0]['concepto']),0,'L',0);
        $pdf -> SetFont('Arial','',8);
     
        $pdf -> ln();


        $pdf -> SetFont('Arial','B',7);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria P.',1,0,'C');
        $pdf -> Cell(25,6,'Partida',1,0,'C');
        $pdf -> Cell(120,6,'Descripcion',1,0,'C');
        $pdf -> Cell(30,6,'Monto (Bs.S)',1,1,'C');

        $total = 0;



         foreach ($data as $reg) {


            $pdf -> SetFont('Arial','',8);
            $pdf -> SetX(5);
            if($nomina[0]['id_tipo_personal'] == 1 OR $nomina[0]['id_tipo_personal'] ==  2 OR $nomina[0]['id_tipo_personal'] ==  3 OR $nomina[0]['id_tipo_personal'] ==  7 OR $nomina[0]['id_tipo_personal'] ==  9 OR $nomina[0]['id_tipo_personal'] ==  10 OR $nomina[0]['id_tipo_personal'] ==  11 OR $nomina[0]['id_tipo_personal'] ==  14 OR $nomina[0]['id_tipo_personal'] ==  16 OR $nomina[0]['id_tipo_personal'] ==  17){
                
                $pdf -> Cell(20,4, "14.01.51",0,0,'C');
            }else{
                $pdf -> Cell(20,4, "14.01.52",0,0,'C');

            }

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x,$y);
                    $pdf->MultiCell($x,4,$reg['partida'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(35 + 15,$y);
                    $pdf->MultiCell(110,4,$this->mayus($reg['denominacion']),0,'C',0);

                    $pdf->SetXY(75 + 95,$y);
                    $pdf->MultiCell(30,4,number_format($reg['monto_comprometer'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 6);
                    $pdf->MultiCell(25,4,'',0,'C',0);

            $total += $reg['monto_comprometer'];
        }






    $pdf -> SetY(230);
    $pdf -> SetX(10);
    $pdf -> MultiCell(60,2,'
REVISADO POR:






___________________________

FIRMA Y SELLO.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(70);
    $pdf -> MultiCell(60,2,'
APROBADO POR:






___________________________

FIRMA Y SELLO.

',1,'L',0);
    $pdf -> SetY(230);
    $pdf -> SetX(130);
    $pdf -> MultiCell(60,2,'
RECIBIDO CONFORME:

NOMBRE COMPLETO:




___________________________

FIRMA Y SELLO.

',1,'L',0);
    

   

        $pdf -> Output('Orden de Nomina ' . $req, 'I');
    }    
}
