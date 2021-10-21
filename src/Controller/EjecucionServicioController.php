<?php
namespace App\Controller;

use App\Controller\AppController;

class EjecucionServicioController extends AppController
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

        $this->loadModel('ViewMrrhhRequisicionServicios');
        $data = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['status >=' => 1])->order(['id' => 'DESC']));
        $this->set(compact('data'));

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['status >=' => 1])->where(['id' => $req])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }

            if($op != null){
                $data = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['status >=' => 1])->where(['numero_orden_pago' => $op])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }

            if($d != null and $h != null){
                $data = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all')->where(['status >=' => 1])->where(['and' => ['fecha_rrhh >=' => $d, 'fecha_rrhh <=' => $h]])->order(['id' => 'DESC']));
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
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewEjecucionRequisicionServicio');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewEjecucionRequisicionServicio->find('all')->where($condicion));
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $status = $this->ViewMrrhhRequisicionServicios->find('all')->where($condicion)->last()->toArray();
        $this->set('status', $status);
        $this->set('concepto', $status);
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('EjecucionRequisicionServicio');
        $ejecucion = $this->EjecucionRequisicionServicio->newEntity();

        if ($this->request->is('post')) {
            if($this->request->data('monto_restante')<0){
                $this->Flash->error(__('El monto restante no puede ser negativo'));
            }else{

                $ejecucion = $this->EjecucionRequisicionServicio->patchEntity($ejecucion, $this->request->getData());
                //$ejecucion->id_requisicion = $requisicion;
                $ejecucion->ano = ANO_FISCAL;

                if ($this->EjecucionRequisicionServicio->save($ejecucion)) {

                    $this->loadModel('MrrhhRequisicionServicios');
                    $query = $this->MrrhhRequisicionServicios->query();
                    $query->update()
                        ->set(['concepto_mod' => $this->request->data('concepto'), 'beneficiario' => $this->request->data('beneficiario')])
                        ->where(['ano' => ANO_FISCAL, 'id' => $this->request->data('id_requisicion')])
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
        $this->loadModel('EjecucionRequisicionServicio');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->EjecucionRequisicionServicio->get($id);
        if ($this->EjecucionRequisicionServicio->delete($data)) {
            $this->Flash->success(__('La partida ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function comprometer($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 2, 'fecha_ejecucion' => date('d/m/Y'), 'hora_ejecucion' => date('h:i:s')])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Comprometida'));
        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function rechazar($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 0])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'index']);
    }
    
    public function revertir($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 1])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'partidas', $requisicion]);
    }


     public function elaborarservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'index']);
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

}
