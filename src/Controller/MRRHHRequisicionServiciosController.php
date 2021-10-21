<?php
namespace App\Controller;

use App\Controller\AppController;

class MRRHHRequisicionServiciosController extends AppController
{

	public function index(){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewMrrhhRequisicion');

        $condicion = ['id <>' => '9999'];
        $nomina = $this->ViewMrrhhRequisicion->find('all')->where($condicion)->toArray();
        $options = [];
        foreach ($nomina as $key) 
        {
            $options[$key->id] = strtoupper($key->tipo_personal_denominacion) . "  (" . strtoupper($key->ano) . " - " . strtoupper($key->mes_denominacion) . " - " . strtoupper($key->quincena_denominacion) . ") ";
        }
        $this->set('nomina', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_personal = $this->MrrhhTipoPersonal->find('all')->toArray();
        $options = [];
        foreach ($tipo_personal as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_personal', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Quincena');

        $quincena = $this->Quincena->find('all')->toArray();
        $options = [];
        foreach ($quincena as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('quincena', $options);

        //========================================================
        //Carga todos los datos registrados
        //========================================================
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $condicion = ['ano' => ANO_FISCAL];
        $data = $this->paginate($this->ViewMrrhhRequisicionServicios->find('all', ['conditions' => $condicion])->order(['id' => 'DESC']));
        $this->set(compact('data'));

        //========================================================

        if($this->request->is('post')){

            if($this->request->data['concepto'] != ''){
                $this->loadModel('MrrhhRequisicionServicios');
                $data = $this->MrrhhRequisicionServicios->newEntity();
                $data = $this->MrrhhRequisicionServicios->patchEntity($data, $this->request->getData());

                $data->ano = ANO_FISCAL;
                $data->id = $this->DameRequisicion();
                $data->numero_orden_pago = $this->DameOrdenServicio();

                if ($this->MrrhhRequisicionServicios->save($data)) {
                    $this->Flash->success(__('Requisicion registrada'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }else{
                $this->Flash->error(__('Error. Ingrese los datos nuevamente'));
                return $this->redirect(['action' => 'index']); 
            }
        } 
    }

    public function view($id){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga todos los datos registrados
        //========================================================
        $this->loadModel('ViewMrrhhRequisicionServicios');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $id];
        $data = $this->ViewMrrhhRequisicionServicios->find('all', ['conditions' => $condicion])->toArray();
        $this->set('data', $data);

        $this->set('requisicion', $this->requisicion($id));


        $this->loadModel('ViewMrrhhRequisicionServiciosPartidas');
        $condicion = ['requisicion' => $id, 'ano' => ANO_FISCAL];
        $datap = $this->paginate($this->ViewMrrhhRequisicionServiciosPartidas->find('all', ['conditions' => $condicion]));
        $this->set(compact('datap'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('PresupuestoEgresos');

        $partidas = $this->PresupuestoEgresos->find('all')->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->id] = $key->partida . " - " . $key->denominacion;
        } 
        $this->set('partidas', $options);

    }

    public function partidas(){
        if($this->request->is('post')){

            $this->loadModel('MrrhhRequisicionServiciosPartidas');
            $p = $this->MrrhhRequisicionServiciosPartidas->newEntity();
            $p = $this->MrrhhRequisicionServiciosPartidas->patchEntity($p, $this->request->getData());

            $p->ano = ANO_FISCAL;
            $p->monto = $this->revertir_moneda($this->request->data['monto']);

            if ($this->MrrhhRequisicionServiciosPartidas->save($p)) {
                $this->Flash->success(__('Partida registrada'));
                return $this->redirect(['action' => 'view', $this->request->data['requisicion']]);
            }else{
                $this->Flash->error(__('Error. Intente de nuevo '));
                return $this->redirect(['action' => 'view', $this->request->data['requisicion']]);
            } 
        }else{
            $this->Flash->error(__('Error. Intente de nuevo'));
            return $this->redirect(['action' => 'view', $this->request->data['requisicion']]);
        }
    }

    public function enviar($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 1, 'fecha_rrhh' => date('d/m/Y'), 'hora_rrhh' => date('h:i:s')])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisicion de Servicios Enviada'));
        return $this->redirect(['action' => 'view', $requisicion]);
    }

    public function revertir($requisicion = null){
        $this->loadModel('MrrhhRequisicionServicios');
        $query = $this->MrrhhRequisicionServicios->query();
        $query->update()
            ->set(['status' => 0])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisicion de Servicios Revertida'));
        return $this->redirect(['action' => 'view', $requisicion]);
    }

    public function delete($req = null){
        $this->request->allowMethod(['get', 'delete']);

        $condicion = ['id' => $req];

        //-----------------------------------------------------------------------

        if($req != null){
    
            $this->loadModel('MrrhhRequisicionServicios');
            $n = $this->MrrhhRequisicionServicios->find('All', ['conditions' => $condicion])->count();

            if($n != 0){

                $this->loadModel('MrrhhRequisicionServiciosPartidas');
                $query = $this->MrrhhRequisicionServiciosPartidas->deleteAll(['requisicion IN' => $req]);

                $servicios = $this->MrrhhRequisicionServicios->get($req);
                $this->MrrhhRequisicionServicios->delete($servicios);
                $this->Flash->success(__('Requisicion Eliminada'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function deletep($id = null, $requisicion = null){
        $this->request->allowMethod(['get', 'delete']);

        $condicion = ['id' => $id];

        //-----------------------------------------------------------------------

        if($id != null){
    
            $this->loadModel('MrrhhRequisicionServiciosPartidas');
            $n = $this->MrrhhRequisicionServiciosPartidas->find('All', ['conditions' => $condicion])->count();

            if($n != 0){
                $servicios = $this->MrrhhRequisicionServiciosPartidas->get($id);
                $this->MrrhhRequisicionServiciosPartidas->delete($servicios);
                $this->Flash->success(__('Partida Eliminada'));
                return $this->redirect(['action' => 'view', $requisicion]);
            }
        }
    }

    public function edit($req = ''){
        //========================================================
        //Selecciona el Layout de RRHH
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('MrrhhTipoPersonal');

        $tipo_personal = $this->MrrhhTipoPersonal->find('all')->toArray();
        $options = [];
        foreach ($tipo_personal as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('tipo_personal', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Quincena');

        $quincena = $this->Quincena->find('all')->toArray();
        $options = [];
        foreach ($quincena as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('quincena', $options);


        //========================================================
        //Carga todos los datos de las cuentas bancarias
        //========================================================
        $this->loadModel('MrrhhRequisicionServicios');

        $servicios = $this->MrrhhRequisicionServicios->get($req, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicios = $this->MrrhhRequisicionServicios->patchEntity($servicios, $this->request->getData());

            if ($this->MrrhhRequisicionServicios->save($servicios)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view', $req]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('servicios'));

        $this->set('requisicion', $req);
    }

    public function reporte($requisicion){

        $this->loadModel('MrrhhRequisicionServicios');
        $data = $this->MrrhhRequisicionServicios->find('all', ['conditions' => ['id' => @$requisicion]])->last();

        $this->loadModel('ViewMrrhhRequisicionServiciosPartidas');
        $data2 = $this->ViewMrrhhRequisicionServiciosPartidas->find('all')->where(['requisicion' => @$requisicion])->toArray();
        
        $this->loadModel('mes');
        $mes = $this->mes->find('all', ['conditions' => ['id' => @$mes]])->last();

        $pdf = new \FPDF();
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
    $pdf -> Cell(80,5,'REQUISICION DE SERVICIO: ' . '00'.$requisicion,0,1,'C');
    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','',8);

    $pdf -> SetY(50);
    $pdf -> SetX(90);/*Esta fecha puede ser la tomada por el servidor*/
    //$pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' .$this->fecha($data['fecha_rrhh']). '
    //$pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . $this->fecha($data['fecha_rrhh']) .'
    $pdf -> MultiCell(110,5,'FECHA DE EMISION:         ' . date('d/m/y') .'
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
    $pdf -> MultiCell(200,5,$this->mayus($data['concepto']),0,'L',0);

            $pdf -> ln();$pdf -> ln();
            $pdf -> SetX(5);   
            $pdf -> Cell(20,5,'Categoria',1,0,'C');
            $pdf -> Cell(20,5,'Partida',1,0,'C');
            $pdf -> Cell(130,5,'Denominacion',1,0,'C');
            $pdf -> Cell(30,5,'Monto',1,1,'C');

        foreach ($data2 as $key) {
            /*$pdf -> SetX(5);   
            $pdf -> Cell(20,5,'14.01.52',1,0,'C');
            $pdf -> Cell(20,5,$key['partida'],1,0,'C');
            $pdf -> Cell(130,5,$key['denominacion_partida'],1,0,'C');
            $pdf -> Cell(30,5,number_format($key['monto'], 2, ',', '.'),1,1,'C');*/

                    $y = $pdf->GetY(110);
                    $x = $pdf->GetX(8);

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY(5,$y);
                            if($data['id_tipo_personal'] == 1 OR $data['id_tipo_personal'] == 2 OR $data['id_tipo_personal'] == 3 OR $data['id_tipo_personal'] == 7 OR $data['id_tipo_personal'] == 9 OR $data['id_tipo_personal'] == 10 OR $data['id_tipo_personal'] == 11 OR $data['id_tipo_personal'] == 14 OR $data['id_tipo_personal'] == 16 OR $data['id_tipo_personal'] == 17){
                        
                        $pdf -> Cell(20,3, "14.01.51",0,0,'C');
                    }else{
                        $pdf -> Cell(20,3, "14.01.52",0,0,'C');

                    }

                    $pdf -> SetFont('Arial','I',8);
                    $pdf->SetXY($x + 15,$y);
                    $pdf->MultiCell(20,3,$this->mayus($key['partida']),0,'C',0);

                    $pdf->SetXY($x + 35,$y);
                    $pdf->MultiCell(130,3,$key['denominacion_partida'],0,'J',0);

                    $pdf->SetXY($x + 165,$y);
                    $pdf->MultiCell(30,3,number_format($key['monto'], 2, ',', '.'),0,'C',0);

                    $pdf->SetXY($x + 160,$y + 5);
                    $pdf->MultiCell(25,3,'',0,'C',0);
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




        $pdf -> Output();
    }
}
