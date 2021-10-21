<?php
namespace App\Controller;

use App\Controller\AppController;

class MCompraOrdenesEmitidasController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Compra
        //========================================================
		$this->viewBuilder()->setLayout('compra');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.compra')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewCompraOrdenCompras');
        $data = $this->paginate($this->ViewCompraOrdenCompras->find('all')->order(['id' => 'DESC']));
        $this->set(compact('data'));
    }

    public function add(){

        //========================================================
        //Selecciona el Layout de Compra
        //========================================================
        $this->viewBuilder()->setLayout('compra');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.compra')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('CompraProveedores');

        $proveedores = $this->CompraProveedores->find('all', ['order' => 'razon_social'])->toArray();
        $options = [];
        foreach ($proveedores as $key) 
        {
            $options[$key->rif] = "(" . $key->letra . "-" . $key->rif . ") - " . $key->razon_social;
        } 
        $this->set('proveedores', $options);

        if ($this->request->is('post')) {
            //========================================================
            //Numero de requisicion
            //========================================================
            $requisicion = $this->DameRequisicion();
            $numero_orden_pago = $this->DameOrdenCompra();

            $this->loadModel('CompraRequisicion');
            $req = $this->CompraRequisicion->newEntity();
            $req = $this->CompraRequisicion->patchEntity($req, $this->request->getData());
            $req->id = $requisicion;
            $req->numero_orden_pago = $numero_orden_pago;
            $req->ano = ANO_FISCAL;
            $req->fecha = date('d/m/Y');
            $req->mes = date('m');
            $req->tipo = 'COMPRA';
            $this->CompraRequisicion->save($req);

            //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('CompraOrdenCompras');
            $compra = $this->CompraOrdenCompras->newEntity();
            $compra = $this->CompraOrdenCompras->patchEntity($compra, $this->request->getData());
            $compra->requisicion = $requisicion;
            $compra->ano = ANO_FISCAL;
            $compra->fecha = date('Y-m-d');

            if ($this->CompraOrdenCompras->save($compra)) {

                $condicion = ['requisicion' => $requisicion];
                $id = $this->CompraOrdenCompras->find('all')->where($condicion)->last();

                $this->Flash->success(__('Orden de compra registrada. A continuación registre Items y asocie sus partidas'));
                return $this->redirect(['action' => 'view', $id['id'], $requisicion]);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }     
    }

    public function view($id = null, $req = null){

        $this->set('id', $id);
        $this->set('req', $req);

        //========================================================
        //Selecciona el Layout de Compra
        //========================================================
        $this->viewBuilder()->setLayout('compra');

        //========================================================
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewCompraOrdenCompras');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $id];
        $orden = $this->ViewCompraOrdenCompras->find('all')->where($condicion)->last();
        $this->set(compact('orden'));

        $this->loadModel('ViewCompraOrdenComprasItems');
        $condicion = ['ano' => ANO_FISCAL, 'id_orden' => $id];
        $data = $this->paginate($this->ViewCompraOrdenComprasItems->find('all')->where($condicion));
        $this->set(compact('data'));

        $unidad_s = $data;
        $this->set('unidad_s', $unidad_s->toArray());

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewEjecucionForma2121');

        $us = $this->ViewEjecucionForma2121->find('all', ['order' => 'sector'])->toArray();
        $options = [];
        foreach ($us as $key) 
        {
            $options[$key->id] = $key->sector . "." . $key->programa . "." . $key->proyecto.$key->actividad;
        } 
        $this->set('us', $options);

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.compra')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121Partidas');

        $partidas = $this->ViewPresupuestoForma2121Partidas->find('all', ['order' => 'concatenado'])->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->id] = $key->concatenado;
        } 
        $this->set('partidas', $options);

        if ($this->request->is('post')) {
            
            //========================================================
            //Busca el ID de la orden a traves de la requisicion
            //========================================================
            $this->loadModel('CompraOrdenCompras');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $this->request->data['req']];
            $orden = $this->CompraOrdenCompras->find('all', ['conditions' => $condicion])->last()->toArray();

            //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('CompraOrdenComprasItems');
            $compra = $this->CompraOrdenComprasItems->newEntity();
            $compra = $this->CompraOrdenComprasItems->patchEntity($compra, $this->request->getData());
            $compra->id_orden = $orden['id'];
            $compra->fecha = date('Y-m-d');
            $compra->ano = ANO_FISCAL;

            if ($this->CompraOrdenComprasItems->save($compra)) {

                $this->Flash->success(__('Orden de compra registrada'));
                return $this->redirect(['action' => 'view', $this->request->data['id'], $this->request->data['req']]);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
            return $this->redirect(['action' => 'view', $this->request->data['id'], $this->request->data['req']]);
            //========================================================        
        }
    }

    public function EditarCompra(){
        $this->loadModel('CompraOrdenComprasItems');
        $this->request->allowMethod(['post', 'get', 'save']);
        $compra = $this->CompraOrdenComprasItems->get($this->request->data['id']);
        $compra->requisicion = $this->request->data['requisicion'];
        $compra->unidad_solicitante = $this->request->data['unidad_solicitante'];
        $compra->descripcion_item = $this->request->data['descripcion_item'];
        $compra->id_partida = $this->request->data['id_partida'];
        $compra->descripcion_partida = $this->request->data['descripcion_partida'];
        $compra->cantidad = $this->request->data['cantidad'];
        $compra->unidad_medida = $this->request->data['unidad_medida'];
        $compra->precio_unitario = $this->request->data['precio_unitario'];
        $compra->sub_total = $this->request->data['cantidad'] * $this->request->data['precio_unitario'];

        if ($this->CompraOrdenComprasItems->save($compra)) {
            $this->Flash->success(__('Item Actualizado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'view', $this->request->data['id_orden'], $this->request->data['requisicion']]);
    }


     public function EditarOrden(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('CompraOrdenCompras');
        $compra = $this->CompraOrdenCompras->get($this->request->data['id']);
        $compra->descripcion_ordena = $this->request->data['descripcion_ordena'];
        
        if ($this->CompraOrdenCompras->save($compra)) {
            $this->Flash->success(__('Descripcion Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'view', $this->request->data['id_orden'], $this->request->data['requisicion']]);
    }

    public function enviar($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 1, 'fecha_rrhh' => date('d/m/Y'), 'hora_rrhh' => date('h:i:s')])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null)
    {

        $this->loadModel('CompraOrdenComprasItems');
        $this->CompraOrdenComprasItems->deleteAll(['id_orden IN' => $id]);
        
        $this->loadModel('CompraOrdenCompras');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->CompraOrdenCompras->get($id);

        if ($this->CompraOrdenCompras->delete($data)) {
            $this->Flash->success(__('La Orden ha sido eliminada.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function deleteItem($id = null, $req = null, $orden = null)
    {
        $this->loadModel('CompraOrdenComprasItems');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->CompraOrdenComprasItems->get($id);
        if ($this->CompraOrdenComprasItems->delete($data)) {
            $this->Flash->success(__('El Item ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'view', $orden, $req]);
    }

    public function reporte($id = null, $req = null){
            
        $condicion = ['requisicion' => $req];

    
        $this->loadModel('ViewCompraOrdenComprasItems');
        $data = $this->ViewCompraOrdenComprasItems->find('all')->where($condicion)->toArray();

        $this->loadModel('ViewCompraOrdenCompras');
        $orden = $this->ViewCompraOrdenCompras->find('all')->where($condicion)->toArray();

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

        $n = 10 - strlen($orden[0]['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $orden[0]['numero_orden_pago'];


        $n = 10 - strlen($orden[0]['requisicion']);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $orden[0]['requisicion'];

        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE COMPRA: ' . substr($numero_orden_pago,6,10),0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA COMPRA */
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

    

        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Unidad Solicitante:'.'  '. $data[0]['unidad_ejecutora'],0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, $this->fecha($data[0]['fecha']),0,1,'L');

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Sub-Total:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, number_format($orden[0]['total'], 2, ',', '.'),0,1,'L');

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'I.V.A. (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, number_format($orden[0]['total'] * 0.16, 2, ',', '.'),0,1,'L');

        /*$pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Contraparte (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'',0,1,'L');*/

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Total (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, number_format($orden[0]['total'] + ($orden[0]['total'] * 0.16), 2, ',', '.'),0,1,'L');


        $status = 'COMPROMETIDA';

        
        if ($orden[0]['status'] == 0) {
            $status = 'ELABORADA';
        }else if ($orden[0]['status'] == 1) {
            $status = 'ELABORADA';
        }else if ($orden[0]['status'] == 2) {
            $status = 'COMPROMETIDA';
        }else if ($orden[0]['status'] == 4) {
            $status = 'EN EJECUCION';
        }else if ($orden[0]['status'] == 5) {
            $status = 'APROBADA';
        }else if ($orden[0]['status'] == 6) {
            $status = 'LIQUIDADA';
        }


        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Estado de la Orden:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,' '.$status,0,1,'L');



        /* Descripcion ingresada por el usuario*/
        $pdf -> SetFont('Arial','',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(20,2,'Descripcion:',0,1,'L');
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4, $this->mayus($orden[0]['descripcion_ordena']),0,'L',0);
        $pdf -> SetFont('Arial','',8);


        $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(20,4,'U. Solicitante',1,0,'C');
        $pdf -> Cell(80,4,'Items',1,0,'C');
        $pdf -> Cell(10,4,'Cant.',1,0,'C');
        $pdf -> Cell(20,4,'U. Medida',1,0,'C');
        $pdf -> Cell(30,4,'Precio Unitario (Bs)',1,0,'C');
        $pdf -> Cell(15,4,'I.V.A (%)',1,0,'C');
        $pdf -> Cell(25,4,'Subtotal (Bs)',1,1,'C');
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        foreach ($data as $reg) {


           
                $pdf -> SetFont('Arial','I',8);

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(5);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x - 4,$y);
                    $pdf->MultiCell($x + 8,3,$reg['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(80,3,$this->mayus($reg['descripcion_item']),0,'C',0);

                    $pdf->SetXY($x + 95,$y);
                    $pdf->MultiCell(10,3,$reg['cantidad'],0,'C',0);

                    $pdf->SetXY($x + 105,$y);
                    $pdf->MultiCell(20,3,$this->mayus($reg['unidad_medida']),0,'C',0);
                
                    $pdf->SetXY($x + 125,$y);
                    $pdf->MultiCell(30,3,number_format($reg['precio_unitario'], 2, ',', '.'),0,'C',0);
               
                    $pdf->SetXY($x + 155,$y);
                    $pdf->MultiCell(15,3,$reg['iva'].'%',0,'C',0);
              
                    $pdf->SetXY($x + 170,$y);
                    $pdf->MultiCell(25,3,number_format($reg['sub_total'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 170,$y + 4);
                    $pdf->MultiCell(25,3,'',0,'C',0);
                    
                
        }

        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        /* Tabla de calculos presupuestarios por PARTIDAS relacionadas a ITEMS */
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(5);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(30,6,'Partida',1,0,'C');
        $pdf -> Cell(110,6,'Descripcion de la Partida',1,0,'C');
        $pdf -> Cell(40,6,'Monto (Bs)',1,1,'C');

        $pdf -> SetFont('Arial','',8);

        $total = 0;

        $this->loadModel('ViewCompraOrdenComprasItems');

        $data2 = $this->ViewCompraOrdenComprasItems->find();
        $data2->select([
            'id_partida', 
            'descripcion_partida', 
            'unidad_solicitante', 
            'sub_total' => $data2->func()->sum('sub_total')
                ])
                ->group(['id_partida', 'descripcion_partida', 'unidad_solicitante'])
                ->where($condicion)
                ->toArray();

        foreach ($data2 as $reg) {

            $pdf -> SetFont('Arial','I',8);

            $pdf -> SetX(5);
            $pdf -> Cell(20,6, $reg['unidad_solicitante'],1,0,'C');
            $pdf -> Cell(30,6, $reg['id_partida'],1,0,'C');
            $pdf -> Cell(110,6, $this->mayus(substr($reg['descripcion_partida'],0,60)),1,0,'C');
            $pdf -> Cell(40,6, number_format($reg['sub_total'], 2, ',', '.'),1,1,'C');

            $total += $reg['sub_total'];
        }



        if(count($data) != 0){

            $pdf -> SetFont('Arial','I',8);

            $pdf -> SetX(5);
            $pdf -> Cell(20,6, $data[0]['unidad_solicitante'],1,0,'C');
            $pdf -> Cell(30,6, "4.03.18.01.00",1,0,'C');
            $pdf -> Cell(110,6, "Impuesto al Valor Agregado",1,0,'C');
            $pdf -> Cell(40,6, number_format($total * 0.16, 2, ',', '.'),1,1,'C');
        }

        $pdf -> SetFont('Arial','',8);

        $pdf -> SetY(240);
        $pdf -> SetX(15);
        $pdf -> MultiCell(45,2,'






    ___________________________



    REVISADO POR:


    ',1,'L',0);
        $pdf -> SetY(240);
        $pdf -> SetX(60);
        $pdf -> MultiCell(40,2,'






    ________________________


    CONFORMADO POR 

    JEFE DE PRESUPUESTO

    ',1,'L',0);
        $pdf -> SetY(240);
        $pdf -> SetX(100);
        $pdf -> MultiCell(50,2,'






    ___________________________

    APROBADO POR DIRECTOR DE 

    LA SECRETARIA DE HACIENDA

    MUNICIPAL

    ',1,'L',0);
        $pdf -> SetY(240);
        $pdf -> SetX(150);
        $pdf -> MultiCell(50,2,'

            

    Nombre: ____________________

    C.I:    ____________________

    Cargo: _____________________

    Firma: _____________________


    PROVEEDOR O CONTRATISTA

    ',1,'L',0);

        $pdf -> Output('Orden de Compra ' . $requisicion, 'I');
    }
}
