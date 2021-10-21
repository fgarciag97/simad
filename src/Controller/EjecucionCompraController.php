<?php
namespace App\Controller;

use App\Controller\AppController;

class EjecucionCompraController extends AppController
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

        $this->loadModel('ViewCompraRequisicion');
        $data = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['status >=' => 1])->order(['id' => 'DESC']));
        $this->set(compact('data'));

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['status >=' => 1])->where(['id' => $req])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }

            if($op != null){
                $data = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['status >=' => 1])->where(['numero_orden_pago' => $op])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }

            if($d != null and $h != null){
                $data = $this->paginate($this->ViewCompraRequisicion->find('all')->where(['status >=' => 1])->where(['and' => ['fecha_rrhh >=' => $d, 'fecha_rrhh <=' => $h]])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }
        }
    }

    public function partidas($requisicion = null){

        $this->set('requisicion', $requisicion);
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
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121Disponible');

        $partidas = $this->ViewPresupuestoForma2121Disponible->find('all')->order(['concatenado' => 'ASC'])->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->concatenado] = $key->concatenado;
        } 
        $this->set('partidas', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewEjecucionRequisicionCompra');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewEjecucionRequisicionCompra->find('all')->where($condicion));
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('CompraRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $status = $this->CompraRequisicion->find('all')->where($condicion)->last()->toArray();
        $this->set('status', $status);

        //========================================================
        //Extrae concepto
        //========================================================
        if($status['tipo'] == 'COMPRA'){
            $this->loadModel('CompraOrdenCompras');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $concepto = $this->CompraOrdenCompras->find('all')->where($condicion)->last()->toArray();
            $this->set('concepto', $concepto);
        }else if($status['tipo'] == 'SERVICIO'){
            $this->loadModel('CompraOrdenServicio');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $requisicion];
            $concepto = $this->CompraOrdenServicio->find('all')->where($condicion)->last()->toArray();
            $this->set('concepto', $concepto);
        }

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('EjecucionRequisicionCompra');
        $ejecucion = $this->EjecucionRequisicionCompra->newEntity();

        if ($this->request->is('post')) {
            if($this->request->data('monto_restante')<0){
                $this->Flash->error(__('El monto restante no puede ser negativo'));
            }else{

                $ejecucion = $this->EjecucionRequisicionCompra->patchEntity($ejecucion, $this->request->getData());
                //$ejecucion->id_requisicion = $requisicion;
                $ejecucion->ano = ANO_FISCAL;

                if ($this->EjecucionRequisicionCompra->save($ejecucion)) {

                    $this->loadModel('CompraOrdenCompras');
                    $query = $this->CompraOrdenCompras->query();
                    $query->update()
                        ->set(['descripcion_ordena_mod' => $this->request->data('concepto')])
                        ->where(['ano' => ANO_FISCAL, 'requisicion' => $this->request->data('id_requisicion')])
                        ->execute();

                    $this->loadModel('CompraOrdenServicio');
                    $query = $this->CompraOrdenServicio->query();
                    $query->update()
                        ->set(['descripcion_ordena_mod' => $this->request->data('concepto')])
                        ->where(['ano' => ANO_FISCAL, 'requisicion' => $this->request->data('id_requisicion')])
                        ->execute();

                    $this->Flash->success(__('Calculo Registrado'));
                    return $this->redirect(['action' => 'partidas', $requisicion]);
                }
                $this->Flash->error(__('No se ha podido registrar los datos'));
            }
        }
        $this->set(compact('ejecucion'));
        //========================================================
    } 

    public function delete($id = null, $requisicion = null)
    {
        $this->loadModel('EjecucionRequisicionCompra');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->EjecucionRequisicionCompra->get($id);
        if ($this->EjecucionRequisicionCompra->delete($data)) {
            $this->Flash->success(__('La partida ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function comprometer($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 2, 'fecha_ejecucion' => date('d/m/Y'), 'hora_ejecucion' => date('h:i:s')])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Comprometida'));
        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function rechazar($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 0])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'index']);
    }
    
    public function revertir($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 1])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'partidas', $requisicion]);
    }








     public function elaborarcompra($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'index']);
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
}
