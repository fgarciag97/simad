<?php
namespace App\Controller;

use App\Controller\AppController;


class MOrdenamientoAprobadasController extends AppController
{
   	public function index(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $data = $this->ViewTesoreria->find('all')->order(['id' => 'DESC']);
        $this->set(compact('data')); 
    }

    public function nomina(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $data = $this->ViewTesoreria->find('all')
            ->where(['tipo <>' => 'COMPRA'])
                ->where(['tipo <>' => 'TRANSFERENCIA'])
                ->where(['tipo <>' => 'SERVICIO'])
                ->where(['tipo <>' => 'REQSERVICIO'])
            ->where(['and' => ['status >=' => '5'], ['status <=' => '6']])
            ->order(['id' => 'DESC']);
        
        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $op2 = (@$this->request->data['op2'] != '') ? @$this->request->data['op2'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $data->where(['id' => $req]);
            }

            if($op != null){
                $data = $data->where(['numero_orden_pago' => $op]);
            }

            if($op2 != null){
                $data = $data->where(['numero_orden_pago_ord' => $op2]);
            }

            if($d != null and $h != null){
                $data = $data->where(['and' => ['fecha_ordenamiento >=' => $d, 'fecha_ordenamiento <=' => $h]]);
            }
        }

        $data = $this->paginate($data);
        $this->set(compact('data'));
    }

    public function compras(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $data = $this->ViewTesoreria->find('all')
            ->where(['tipo <>' => 'NOMINA'])
            ->where(['tipo <>' => 'ESPECIAL'])
            ->where(['tipo <>' => 'VACACIONES'])
            ->where(['tipo <>' => 'CESTA TICKET'])
            ->where(['tipo <>' => 'ASISTENCIA MEDICA'])
            ->where(['tipo <>' => 'BONO ESTABILIDAD'])
            ->where(['tipo <>' => 'HORAS EXTRAS'])
            ->where(['tipo <>' => 'TRANSFERENCIA'])
            ->where(['tipo <>' => 'REQSERVICIO'])
            ->where(['tipo <>' => 'PRESTACIONES SOCIALES'])
            ->where(['and' => ['status >=' => '5'], ['status <=' => '6']])
            ->order(['id' => 'DESC']);
        
        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $op2 = (@$this->request->data['op2'] != '') ? @$this->request->data['op2'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $data->where(['id' => $req]);
            }

            if($op != null){
                $data = $data->where(['numero_orden_pago' => $op]);
            }

            if($op2 != null){
                $data = $data->where(['numero_orden_pago_ord' => $op2]);
            }

            if($d != null and $h != null){
                $data = $data->where(['and' => ['fecha_ordenamiento >=' => $d, 'fecha_ordenamiento <=' => $h]]);
            }
        }

        $data = $this->paginate($data);
        $this->set(compact('data')); 
    }

    public function transferencias(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $data = $this->ViewTesoreria->find('all')
            ->where(['tipo' => 'TRANSFERENCIA'])
            ->where(['and' => ['status >=' => '5'], ['status <=' => '6']])
            ->order(['id' => 'DESC']);
        
        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $op2 = (@$this->request->data['op2'] != '') ? @$this->request->data['op2'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $data->where(['id' => $req]);
            }

            if($op != null){
                $data = $data->where(['numero_orden_pago' => $op]);
            }

            if($op2 != null){
                $data = $data->where(['numero_orden_pago_ord' => $op2]);
            }

            if($d != null and $h != null){
                $data = $data->where(['and' => ['fecha_ordenamiento >=' => $d, 'fecha_ordenamiento <=' => $h]]);
            }
        }

        $data = $this->paginate($data);
        $this->set(compact('data'));
    }

    public function servicios(){
       //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Consulta todas las ordenes
        //========================================================
        $this->loadModel('ViewTesoreria');
        $data = $this->ViewTesoreria->find('all')
            ->where(['tipo' => 'REQSERVICIO'])
            ->where(['and' => ['status >=' => '5'], ['status <=' => '6']])
            ->order(['id' => 'DESC']);

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $op2 = (@$this->request->data['op2'] != '') ? @$this->request->data['op2'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $data->where(['id' => $req]);
            }

            if($op != null){
                $data = $data->where(['numero_orden_pago' => $op]);
            }

            if($op2 != null){
                $data = $data->where(['numero_orden_pago_ord' => $op2]);
            }

            if($d != null and $h != null){
                $data = $data->where(['and' => ['fecha_ordenamiento >=' => $d, 'fecha_ordenamiento <=' => $h]]);
            }
        }

        $data = $this->paginate($data);
        $this->set(compact('data'));
    }

    public function enviarnomina($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 6])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'nomina']);
    }

    public function enviarcompra($requisicion = null){
        $this->loadModel('CompraRequisicion');
        $query = $this->CompraRequisicion->query();
        $query->update()
            ->set(['status' => 6])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'compras']);
    }

    public function enviartransferencia($requisicion = null){
        $this->loadModel('EjecucionRequisicionTransferencia');
        $query = $this->EjecucionRequisicionTransferencia->query();
        $query->update()
            ->set(['status' => 6])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'transferencias']);
    }


    public function enviarreqservicio($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 6])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'servicios']);
    }

    public function reporte($inicio = null, $corte = null, $tipo_orden = null, $estatus = null){
       //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('ordenamiento');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.ordenamiento')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        
        if($inicio != null and $corte != null and $tipo_orden != null and $estatus != null){
            
            if ($inicio != null and $corte != null){

                $this->set('inicio', $inicio);
                $this->set('corte', $corte);
                $this->set('tipo_orden', $tipo_orden);
                $this->set('estatus', $estatus);

                $condicion = ['fecha_ordenamiento >=' => $inicio, 'AND' => ['fecha_ordenamiento <=' => $corte]];

                $this->loadModel('ViewOrdenamiento');
                $data = $this->ViewOrdenamiento->find('all')->order(['id' => 'DESC']);

                if($tipo_orden == 1){
                    $data = $data->where(['tipo <>' => 'COMPRA'])
                                    ->where(['tipo <>' => 'TRANSFERENCIA'])
                                    ->where(['tipo <>' => 'SERVICIO'])
                                    ->where(['tipo <>' => 'REQSERVICIO']);
                }
                
                if($tipo_orden == 2){
                    $data = $data->where(['tipo <>' => 'NOMINA'])
                                    ->where(['tipo <>' => 'VACACIONES'])
                                    ->where(['tipo <>' => 'CESTA TICKET'])
                                    ->where(['tipo <>' => 'ASISTENCIA MEDICA'])
                                    ->where(['tipo <>' => 'BONO ESTABILIDAD'])
                                    ->where(['tipo <>' => 'HORAS EXTRAS'])
                                    ->where(['tipo <>' => 'TRANSFERENCIA'])
                                    ->where(['tipo <>' => 'REQSERVICIO'])
                                    ->where(['tipo <>' => 'PRESTACIONES SOCIALES']);
                }

                if($tipo_orden == 3){ 
                    $data = $data->where(['tipo' => 'TRANSFERENCIA']);
                }

                if($estatus != 0){
                    $data = $data->where(['status' => $estatus]);
                }

                $this->paginate($data);
                $this->set(compact('data'));
            }
        }
            

        if($this->request->is('post')){

            $inicio = @$this->request->data['inicio'];
            $corte = @$this->request->data['corte'];
            $tipo_orden = ($this->request->data['tipo_orden'] == null) ? 0 : $this->request->data['tipo_orden'];
            $estatus = ($this->request->data['estatus'] == null) ? 0 : $this->request->data['estatus'];

            return $this->redirect(['action' => 'reporte', $inicio, $corte, $tipo_orden, $estatus]); 
        }

    }


    public function reporteconsultado($inicio = null, $corte = null, $tipo_orden = null, $estatus){

        if ($inicio != null and $corte != null and $tipo_orden != null){

            $this->loadModel('ViewOrdenamiento');
            $condicion = ['fecha_ordenamiento >=' => $inicio, 'fecha_ordenamiento <=' => $corte];
            $n = $this->ViewOrdenamiento->find('all')->where($condicion)->count();

            if ($n > 0) {
                $this->loadModel('ViewOrdenamiento');
                $data = $this->ViewOrdenamiento->find('all')->order(['id' => 'DESC']);

                if($tipo_orden == 1){
                    $data = $data->where(['tipo <>' => 'COMPRA'])
                                ->where(['tipo <>' => 'TRANSFERENCIA'])
                                ->where(['tipo <>' => 'SERVICIO']);
                }
                
                if($tipo_orden == 2){
                    $data = $data->where(['tipo' => 'COMPRA']);
                }

                if($tipo_orden == 3){
                    $data = $data->where(['tipo' => 'TRANSFERENCIA']);
                }

                if($estatus != 0){
                    $data = $data->where(['status' => $estatus]);
                }
            }else{
                $this->Flash->error(__('No se encontraron registros'));
                return $this->redirect(['action' => 'index']);
            }
        }

        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,5,30,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',170,10,25,15,"JPG","");

    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> ln();$pdf -> ln();

    $pdf -> SetX(70);

    $pdf -> SetX(70);
    $pdf -> Cell(80,5, $inicio . " - " . $corte,0,0,'C');

    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','B',7);

    $pdf -> SetX(10);
    $pdf -> Cell(15,5,'Requisicion',1,0,'C');
    $pdf -> Cell(10,5,'Orden',1,0,'C');
    $pdf -> Cell(10,5,'Pago',1,0,'C');
    $pdf -> Cell(25,5,'Tipo',1,0,'C');
    $pdf -> Cell(10,5,'Fecha',1,0,'C');
    $pdf -> Cell(80,5,'Razon Social',1,0,'C');
    $pdf -> Cell(20,5,'Monto',1,0,'C');
    $pdf -> Cell(20,5,'Estatus',1,1,'C');

    $pdf -> SetFont('Arial','',6);
    /* APARTIR DE AQUI SE IMPRIMEN LOS DATOS DE LA CONSULTA SEGUN RANGO DE FECHA*/
    foreach ($data as $reg) {  

        $n = 10 - strlen(@$reg->id);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $reg->id; 

        $n = 6 - strlen(@$reg->numero_orden_pago);
        $numero_orden_pago = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago .= "0";
        }
        $numero_orden_pago .= $reg->numero_orden_pago; 

        $n = 6 - strlen(@$reg->numero_orden_pago_ord);
        $numero_orden_pago_ord = '';
        for($i=0; $i < $n; $i++){
            $numero_orden_pago_ord .= "0";
        }
        $numero_orden_pago_ord .= $reg->numero_orden_pago_ord; 

        if($reg->status == 4){
            $status = "EN EJECUCION";
        }else if($reg->status == 5){
            $status = "APROBADA";
        }else if($reg->status == 6){
            $status = "EN TESORERIA";
        }else if($reg->status == 7){
            $status = "LIQUIDADA";
        }
        if($reg->numero_orden_pago_ord == 682){
            $pdf -> SetX(10);
            $pdf -> Cell(15,5, $requisicion,1,0,'C');
            $pdf -> Cell(10,5, $numero_orden_pago,1,0,'C');
            $pdf -> Cell(10,5, $numero_orden_pago_ord,1,0,'C');
            $pdf -> Cell(25,5, $reg->tipo,1,0,'C');
            $pdf -> Cell(10,5, $reg->fecha_ordenamiento,1,0,'C');
            $pdf -> Cell(80,5, ($reg->beneficiario != '') ? $reg->beneficiario : "ALCALDIA DE MIRANDA",1,0,'C');
            $pdf -> Cell(20,5, number_format(($reg->monto - 0.01), 2, ',', '.'),1,0,'C');
            $pdf -> Cell(20,5, @$status,1,1,'C');
        }else{
            $pdf -> SetX(10);
            $pdf -> Cell(15,5, $requisicion,1,0,'C');
            $pdf -> Cell(10,5, $numero_orden_pago,1,0,'C');
            $pdf -> Cell(10,5, $numero_orden_pago_ord,1,0,'C');
            $pdf -> Cell(25,5, $reg->tipo,1,0,'C');
            $pdf -> Cell(10,5, $reg->fecha_ordenamiento,1,0,'C');
            $pdf -> Cell(80,5, ($reg->beneficiario != '') ? $reg->beneficiario : "ALCALDIA DE MIRANDA",1,0,'C');
            $pdf -> Cell(20,5, number_format($reg->monto, 2, ',', '.'),1,0,'C');
            $pdf -> Cell(20,5, @$status,1,1,'C');
        }


    }
    
        $pdf -> Output();
    }
}
