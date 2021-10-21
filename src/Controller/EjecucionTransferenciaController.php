<?php
namespace App\Controller;

use App\Controller\AppController;

class EjecucionTransferenciaController extends AppController
{
	public function index(){

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
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewEjecucionTransferencia');
        $data = $this->paginate($this->ViewEjecucionTransferencia->find('all')->order(['numero_orden_pago' => 'DESC']));
        $this->set(compact('data')); 

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $this->paginate($this->ViewEjecucionTransferencia->find('all')->where(['requisicion' => $req])->order(['numero_orden_pago' => 'DESC']));
                $this->set(compact('data'));
            }

            if($op != null){
                $data = $this->paginate($this->ViewEjecucionTransferencia->find('all')->where(['numero_orden_pago' => $op])->order(['numero_orden_pago' => 'DESC']));
                $this->set(compact('data'));
            }

            if($d != null and $h != null){
                $data = $this->paginate($this->ViewEjecucionTransferencia->find('all')->where(['and' => ['fecha >=' => $d, 'fecha <=' => $h]])->order(['numero_orden_pago' => 'DESC']));
                $this->set(compact('data'));
            }
        }


        $this->loadModel('EjecucionBeneficiarios');
        $this->set('total_beneficiarios', $this->EjecucionBeneficiarios->find('all')->count());
    }

    public function add(){

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
        //Carga del Select
        //========================================================
        $this->loadModel('EjecucionBeneficiarios');

        $beneficiarios = $this->EjecucionBeneficiarios->find('all', ['order' => 'nombres'])->toArray();
        $options = [];
        foreach ($beneficiarios as $key) 
        {
            $options[$key->cedula] = "(" . $key->letra . "-" . $key->cedula . ") - " . $key->nombres;
        } 
        $this->set('beneficiarios', $options);

        if ($this->request->is('post')) {
            //========================================================
            //Numero de requisicion
            //========================================================
            $requisicion = $this->DameRequisicion();
            $numero_orden_pago = $this->DameOrdenServicio();

            $this->loadModel('EjecucionRequisicionTransferencia');
            $req = $this->EjecucionRequisicionTransferencia->newEntity();
            $req = $this->EjecucionRequisicionTransferencia->patchEntity($req, $this->request->getData());
            $req->id = $requisicion;
            $req->numero_orden_pago = $numero_orden_pago;
            $req->ano = ANO_FISCAL;
            $req->fecha = date('d/m/Y');
            $req->mes = date('m');
            $req->tipo = 'TRANSFERENCIA';
            $req->status = '2';

            if($this->EjecucionRequisicionTransferencia->save($req)){
                //========================================================
                //Almacena los datos ingresados
                //========================================================
                $this->loadModel('EjecucionTransferencia');
                $presupuesto = $this->EjecucionTransferencia->newEntity();
                $presupuesto = $this->EjecucionTransferencia->patchEntity($presupuesto, $this->request->getData());
                $presupuesto->requisicion = $requisicion;
                $presupuesto->ano = ANO_FISCAL;

                if ($this->EjecucionTransferencia->save($presupuesto)) {

                    $condicion = ['requisicion' => $requisicion];
                    $id = $this->EjecucionTransferencia->find('all')->where($condicion)->last();

                    $this->Flash->success(__('Transferencia registrada. A continuación registre Items y asocie sus partidas'));
                    return $this->redirect(['action' => 'view', $id['id'], $requisicion]);
                }
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }     
    }

    public function view($id = null, $req = null){

        $this->set('id', $id);
        $this->set('req', $req);

        //========================================================
        //Selecciona el Layout de Transferencia
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);

        $this->loadModel('ViewEjecucionTransferencia');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $id, 'requisicion' => $req];
        $orden = $this->ViewEjecucionTransferencia->find('all')->where($condicion)->last();
        $this->set(compact('orden'));

        $this->loadModel('ViewEjecucionTransferenciaItems');
        $condicion = ['ano' => ANO_FISCAL, 'id_orden' => $id];
        $data = $this->paginate($this->ViewEjecucionTransferenciaItems->find('all')->where($condicion));
        $this->set(compact('data'));

        $unidad_s = $data;
        $this->set('unidad_s', $unidad_s->toArray());

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121');

        $us = $this->ViewPresupuestoForma2121->find('all', ['order' => 'sector'])->toArray();
        $options = [];
        foreach ($us as $key) 
        {
            $options[$key->id] = $key->sector . "." . $key->programa . "." . $key->proyecto . $key->actividad;
        } 
        $this->set('us', $options);


        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('EjecucionBeneficiarios');

        $beneficiarios = $this->EjecucionBeneficiarios->find('all', ['order' => 'nombres'])->toArray();
        $options = [];
        foreach ($beneficiarios as $key) 
        {
            $options[$key->cedula] = "(" . $key->letra . "-" . $key->cedula . ") - " . $key->nombres;
        } 
        $this->set('beneficiarios', $options);

        //========================================================
        //Vecedulaica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoPartidasTransf');

        $partidas = $this->ViewPresupuestoPartidasTransf->find('all', ['order' => 'concatenado'])->toArray();
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
            $this->loadModel('EjecucionTransferencia');
            $condicion = ['ano' => ANO_FISCAL, 'requisicion' => $this->request->data['req']];
            $orden = $this->EjecucionTransferencia->find('all', ['conditions' => $condicion])->last()->toArray();

            //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('EjecucionTransferenciaItems');
            $presupuesto = $this->EjecucionTransferenciaItems->newEntity();
            $presupuesto = $this->EjecucionTransferenciaItems->patchEntity($presupuesto, $this->request->getData());
            $presupuesto->id_orden = $orden['id'];
            $presupuesto->fecha = date('Y-m-d');
            $presupuesto->ano = ANO_FISCAL;

            if ($this->EjecucionTransferenciaItems->save($presupuesto)) {

                $this->Flash->success(__('Transferencia registrada'));
                return $this->redirect(['action' => 'view', $this->request->data['id'], $this->request->data['req']]);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
            return $this->redirect(['action' => 'view', $this->request->data['id'], $this->request->data['req']]);
            //========================================================        
        }
    }


    //===================================================================================================================

    public function CrearOrdinal($id = null, $req = null){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        $this->set('id', $id);
        $this->set('req', $req);

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //=========================================================

        if($id != null and $req != null){

            //========================================================
            //Carga todos los datos y los mustra en una paginacion
            //========================================================
            $this->loadModel('ViewPresupuestoNuevoOrdinal');
            $registros = $this->paginate($this->ViewPresupuestoNuevoOrdinal->find('all'));
            $this->set(compact('registros'));
            

             //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('PresupuestoNuevoOrdinal');
            $partida = $this->PresupuestoNuevoOrdinal->newEntity();

            $this->loadModel('PresupuestoOrdinalNuevo');
            $ordinal = $this->PresupuestoOrdinalNuevo->newEntity();
            
            if ($this->request->is('post')) {

                //=====================================================================================
                $ordinal = $this->PresupuestoOrdinalNuevo->patchEntity($ordinal, $this->request->getData());

                $ordinal->id_sub_especifico = $this->request->data['id_sub_especifico'];
                $ordinal->ordinal = $this->request->data['ordinal'];
                $ordinal->descripcion = $this->request->data['denominacion'];
                $ordinal->monto = $this->revertir_moneda($this->request->data['monto']);

                //=====================================================================================

                $partida = $this->PresupuestoNuevoOrdinal->patchEntity($partida, $this->request->getData());
                $partida->ano = ANO_FISCAL; 

                if ($this->PresupuestoOrdinalNuevo->save($ordinal) and $this->PresupuestoNuevoOrdinal->save($partida)) {
                    $this->Flash->success(__('Partida registrada con nuevo ordinal'));
                    return $this->redirect(['action' => 'view', $id, $req]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            $this->set(compact('partida'));
        }else{
            return $this->redirect(['action' => 'CrearOrdinal', $id, $req]);
        }
    }

    public function deletepartida($partida = null, $id = null, $req = null){

       $this->loadModel('PresupuestoNuevoOrdinal');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->PresupuestoNuevoOrdinal->get($partida);
        if ($this->PresupuestoNuevoOrdinal->delete($data)) {
            $this->Flash->success(__('La partida ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'CrearOrdinal', $id, $req]);
    }

    //===================================================================================================================

     public function EditarOrden(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('EjecucionTransferencia');
        $compra = $this->EjecucionTransferencia->get($this->request->data['id']);
        $compra->descripcion_ordena = $this->request->data['descripcion_ordena'];
        $compra->beneficiario = $this->request->data['beneficiario'];

        if ($this->EjecucionTransferencia->save($compra)) {
            $this->Flash->success(__('Descripcion Actualizada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'view', $this->request->data['id_orden'], $this->request->data['requisicion']]);
    }

    public function editar(){
        $this->loadModel('EjecucionTransferenciaItems');
        $this->request->allowMethod(['post', 'get', 'save']);
        $compra = $this->EjecucionTransferenciaItems->get($this->request->data['id']);
        $compra->requisicion = $this->request->data['requisicion'];
        $compra->unidad_solicitante = $this->request->data['unidad_solicitante'];
        $compra->descripcion_item = $this->request->data['descripcion_item'];
        $compra->id_partida = $this->request->data['id_partida'];
        $compra->descripcion_partida = $this->request->data['descripcion_partida'];
        $compra->cantidad = $this->request->data['cantidad'];
        $compra->unidad_medida = $this->request->data['unidad_medida'];
        $compra->precio_unitario = $this->request->data['precio_unitario'];
        $compra->sub_total = $this->request->data['cantidad'] * $this->request->data['precio_unitario'];

        if ($this->EjecucionTransferenciaItems->save($compra)) {
            $this->Flash->success(__('Item Actualizado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'view', $this->request->data['id_orden'], $this->request->data['requisicion']]);
    }

    public function enviar($requisicion = null){
        $this->loadModel('EjecucionRequisicionTransferencia');
        $query = $this->EjecucionRequisicionTransferencia->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null)
    {

        $this->loadModel('EjecucionTransferenciaItems');
        $this->EjecucionTransferenciaItems->deleteAll(['id_orden IN' => $id]);
        
        $this->loadModel('EjecucionTransferencia');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->EjecucionTransferencia->get($id);

        if ($this->EjecucionTransferencia->delete($data)) {
            $this->Flash->success(__('La Orden ha sido eliminada.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function deleteItem($id = null, $id_orden = null, $req = null)
    {
        $this->loadModel('EjecucionTransferenciaItems');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->EjecucionTransferenciaItems->get($id);
        if ($this->EjecucionTransferenciaItems->delete($data)) {
            $this->Flash->success(__('El Item ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'view', $id_orden, $req]);
    }

    public function reporte($id = null, $req = null){
            
            $condicion = ['requisicion' => $req];

    
        $this->loadModel('ViewEjecucionTransferenciaItems');
        $data = $this->ViewEjecucionTransferenciaItems->find('all')->where($condicion)->toArray();

        $this->loadModel('ViewEjecucionTransferencia');
        $orden = $this->ViewEjecucionTransferencia->find('all')->where($condicion)->toArray();

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

        $n = 6 - strlen($orden[0]['numero_orden_pago']);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $orden[0]['numero_orden_pago'];

        $pdf -> SetFont('Arial','B',12);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,'ORDEN DE SERVICIO: ' .'0000'.$numero_orden_pago,0,1,'C');
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> ln();

        $pdf -> SetFont('Arial','',8);

        /* DATOS DEL PROVEEDOR A QUIEN SE LE REALIZA LA TRANSFERENCIA */
        $pdf -> SetY(50);
        $pdf -> SetX(15);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(80,5,'Senor(es):',0,1,'L');
        $pdf -> SetFont('Arial','B',8);

        $pdf->SetY(55);
        $pdf->SetX(15);
        $pdf->MultiCell(100,4,$this->mayus($orden[0]['beneficiario']),0,'J',0);


        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'Cedula: ' . $orden[0]['letra'] . '-' . $orden[0]['cedula'] ,0,1,'L');


        $pdf -> SetFont('Arial','B',8);
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(80,5,'Presente.-',0,1,'L');
        $pdf->ln();



        /* DATOS DE LA UNIDAD SOLICITANTE*/
        $pdf -> SetY(50);
        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Unidad Solicitante:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,' ',0,1,'L');

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Fecha de Emision:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, $this->fecha($orden[0]['fecha']),0,1,'L');

        /*$pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Sub-Total:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, number_format($orden[0]['total'], 2, ',', '.'),0,1,'L');*/

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Total (Bs):',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5, number_format($orden[0]['total'], 2, ',', '.'),0,1,'L');

        $pdf -> SetX(118);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(40,5,'Estado de la Orden:',0,0,'L');
        $pdf -> SetX(145);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,'COMPROMETIDA',0,1,'L');



        /* Descripcion ingresada por el usuario*/
        $pdf -> SetFont('Arial','',8);
        $pdf -> ln();
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> Cell(20,2,'Descripcion:',0,1,'L');
        $pdf -> ln();
        $pdf -> SetX(15);
        $pdf -> MultiCell(180,4, $this->mayus($orden[0]['descripcion_ordena']),0,'L',0);
        $pdf -> SetFont('Arial','',8);


         $pdf -> ln(); $pdf -> ln();

        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(20,6,'U. Solicitante',1,0,'C');
        $pdf -> Cell(80,6,'Items',1,0,'C');
        $pdf -> Cell(10,6,'Cant.',1,0,'C');
        $pdf -> Cell(20,6,'U. Medida',1,0,'C');
        $pdf -> Cell(30,6,'Precio Unitario (Bs)',1,0,'C');
        $pdf -> Cell(25,6,'Subtotal (Bs)',1,1,'C');

        $pdf -> SetFont('Arial','',8);

        foreach ($data as $reg) {

            $pdf -> SetFont('Arial','I',7);


                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(8);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(15,$y);
                    $pdf->MultiCell(20,3,$reg['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 20,$y);
                    $pdf->MultiCell(80,3,$this->mayus($reg['descripcion_item']),0,'C',0);

                    $pdf->SetXY($x + 105,$y);
                    $pdf->MultiCell(10,3,$reg['cantidad'],0,'C',0);

                    $pdf->SetXY($x + 115,$y);
                    $pdf->MultiCell(20,3,$reg['unidad_medida'],0,'C',0);
                
                    $pdf->SetXY($x + 135,$y);
                    $pdf->MultiCell(30,3,number_format($reg['precio_unitario'], 2, ',', '.'),0,'C',0);
               
                    $pdf->SetXY($x + 165,$y);
                    $pdf->MultiCell(25,3,number_format($reg['sub_total'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 160,$y + 18);
                    $pdf->MultiCell(25,3,'',0,'C',0);
    
        }

        $pdf -> ln(); $pdf -> ln();

        /* Tabla de calculos presupuestarios por PARTIDAS relacionadas a ITEMS */
        $pdf -> SetFont('Arial','B',8);
        $pdf -> SetX(15);
        $pdf -> Cell(20,6,'Categoria',1,0,'C');
        $pdf -> Cell(30,6,'Partida',1,0,'C');
        $pdf -> Cell(95,6,'Descripcion de la Partida',1,0,'C');
        $pdf -> Cell(40,6,'Monto (Bs)',1,1,'C');

        $pdf -> SetFont('Arial','',8);

        $total = 0;

        foreach ($data as $reg) {

                    $y = $pdf->GetY(120);
                    $x = $pdf->GetX(8);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(15,$y);
                    $pdf->MultiCell(20,3,$reg['unidad_solicitante'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 2,$y);
                    $pdf->MultiCell(80,3,$this->mayus($reg['id_partida']),0,'C',0);

                    $pdf->SetXY($x + 55,$y);
                    $pdf->MultiCell(80,3,$this->mayus($reg['descripcion_partida']),0,'J',0);
               
                    $pdf->SetXY($x + 155,$y);
                    $pdf->MultiCell(25,3,number_format($reg['sub_total'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 160,$y + 30);
                    $pdf->MultiCell(25,3,'',0,'C',0);

            /*$pdf->SetY(125);
            $pdf->SetX(3);
            $pdf->MultiCell(40,4,$this->mayus($reg['unidad_solicitante']),0,'C',0);
            $pdf->SetY(125);
            $pdf->SetX(17);
            $pdf->MultiCell(65,4,$this->mayus($reg['id_partida']),0,'C',0);
            $pdf->SetY(125);
            $pdf->SetX(65);
            $pdf->MultiCell(90,4,$this->mayus($reg['descripcion_partida']),0,'J',0);
            $pdf->SetY(125);
            $pdf->SetX(145);
            $pdf->MultiCell(65,4,number_format($reg['sub_total'], 2, ',', '.'),0,'C',0);*/

        }


        $pdf -> SetY(230);
        $pdf -> SetX(15);
        $pdf -> MultiCell(45,2,'






    _______________________



    REVISADO POR:


    ',1,'L',0);
        $pdf -> SetY(230);
        $pdf -> SetX(60);
        $pdf -> MultiCell(40,2,'





    _______________________


    CONFORMADO POR 

    JEFE DE PRESUPUESTO

    ',1,'L',0);
        $pdf -> SetY(230);
        $pdf -> SetX(100);
        $pdf -> MultiCell(50,2,'





    ___________________________

    APROBADO POR DIRECTOR DE 

    LA SECRETARIA DE HACIENDA

    MUNICIPAL

    ',1,'L',0);
        $pdf -> SetY(230);
        $pdf -> SetX(150);
        $pdf -> MultiCell(50,2,'

    Nombre: __________________

    C.I:    ___________________

    Cargo: ___________________

    Firma: ___________________





    ',1,'L',0);
        $pdf -> SetFont('Arial','I',5);
        $pdf -> SetY(265);
        $pdf -> SetX(55);
        $pdf -> MultiCell(100,2,'
Este Servicio cumple con el Decreto N° 4.000 COMPRAS DEL ESTADO. Dandole continuidad al decreto Nro 1.892 Medidas Temporales para la Promocion y Desarrollo de la Pequena y Medina Industria, Cooperativas y cualquier otra forma asociativa, productores de Bienes, Prestadoras de Servicios y Ejecutoras de Obras que esten ubicadas en el Pais.
Publicao en Gaceta Oficial de la Republica Bolivariana de Venezuela Nro 38.296 del 19 de Octubre de 2005',0,'C',0);

        $pdf -> AddPage();

        $pdf -> SetFont('Arial','B',10);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',160,5,35,25,"JPG","");

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
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' .$this->fecha($orden[0]['fecha']). '
UNIDAD SOLICITANTE:  OFIC. DE PRESUPUESTO

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
    $pdf -> MultiCell(200,5,$orden[0]['descripcion_ordena'],0,'L',0);


    $pdf -> ln();$pdf -> ln();
    $pdf -> ln();$pdf -> ln();

     foreach ($data as $reg) {
            $pdf -> SetX(15);
            $pdf -> Cell(20,6, 'Cantidad',1,0,'C');
            $pdf -> Cell(30,6, 'Unidad de Medida',1,0,'C');
            $pdf -> Cell(130,6, 'Descripcion',1,1,'C');
            /*$pdf -> Cell(40,6, 'Monto',1,1,'C');*/

            $total += $reg['sub_total'];
        }

        if(count($data) != 0){


                    $y = $pdf->GetY(120);
                    $x = $pdf->GetX(8);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(15,$y);
                    $pdf->MultiCell(20,3,$reg['cantidad'],0,'C',0);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 2,$y);
                    $pdf->MultiCell(80,3,$this->mayus($reg['unidad_medida']),0,'C',0);

                    $pdf->SetXY($x + 55,$y);
                    $pdf->MultiCell(80,3,$this->mayus($reg['descripcion_partida']),0,'J',0);

                    $pdf->SetXY($x + 160,$y + 30);
                    $pdf->MultiCell(25,3,'',0,'C',0);

            /*$pdf->ln();
            $pdf->SetY(118);
            $pdf->SetX(3);
            $pdf->MultiCell(40,4,$this->mayus($reg['cantidad']),0,'C',0);
            $pdf->SetY(118);
            $pdf->SetX(17);
            $pdf->MultiCell(65,4,$this->mayus($reg['unidad_medida']),0,'C',0);
            $pdf->SetY(118);
            $pdf->SetX(65);
            $pdf->MultiCell(130,4,$this->mayus($reg['descripcion_partida']),0,'J',0);*/

            /*
            $pdf -> SetX(15);
            $pdf -> Cell(20,6, $data[0]['cantidad'],1,0,'C');
            $pdf -> Cell(30,6, $data[0]['unidad_medida'],1,0,'C');
            $pdf -> Cell(120,6, $data[0]['descripcion_partida'],1,1,'C');
            /*$pdf -> Cell(40,6, number_format($reg['sub_total'], 2, ',', '.'),1,1,'C');*/
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

        $pdf -> SetFont('Arial','I',5);
        $pdf -> SetY(265);
        $pdf -> SetX(55);
        $pdf -> MultiCell(100,2,'
Este Servicio cumple con el Decreto N° 4.000 COMPRAS DEL ESTADO. Dandole continuidad al decreto Nro 1.892 Medidas Temporales para la Promocion y Desarrollo de la Pequena y Medina Industria, Cooperativas y cualquier otra forma asociativa, productores de Bienes, Prestadoras de Servicios y Ejecutoras de Obras que esten ubicadas en el Pais.
Publicao en Gaceta Oficial de la Republica Bolivariana de Venezuela Nro 38.296 del 19 de Octubre de 2005',0,'C',0);

        $pdf -> Output('Orden de Transferencia ' . $requisicion, 'I');
    }
}
