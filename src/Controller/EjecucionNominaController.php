<?php
namespace App\Controller;

use App\Controller\AppController;

class EjecucionNominaController extends AppController
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
        $data = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['status >=' => 1])->order(['id' => 'DESC']));
        $this->set(compact('data'));

        if($this->request->is('post')){
            $req = (@$this->request->data['req'] != '') ? @$this->request->data['req'] : null;
            $op = (@$this->request->data['op'] != '') ? @$this->request->data['op'] : null;
            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : null;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : null;

             if($req != null){
                $data = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['status >=' => 1])->where(['id' => $req])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }

            if($op != null){
                $data = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['status >=' => 1])->where(['numero_orden_pago' => $op])->order(['id' => 'DESC']));
                $this->set(compact('data'));
            }

            if($d != null and $h != null){
                $data = $this->paginate($this->ViewMrrhhRequisicion->find('all')->where(['status >=' => 1])->where(['and' => ['fecha_rrhh >=' => $d, 'fecha_rrhh <=' => $h]])->order(['id' => 'DESC']));
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
        //Condicion para obtener las partidas 
        //========================================================

        $this->loadModel('ViewMrrhhRequisicion');
        $tp = $this->ViewMrrhhRequisicion->find('all')->where(['id' => $requisicion])->last();
        $tp = $tp['id_tipo_personal'];

        if($tp == 1 or $tp == 2 or $tp == 3 or $tp == 7 or $tp == 9 or $tp == 10 or $tp == 11 or $tp == 14 or $tp == 15 or $tp == 16){
            $condicion = ['sector' => '14', 'programa' => '01', 'actividad' => '51'];
            $this->set('sector', '14');
            $this->set('programa', '01');
            $this->set('actividad', '51');
        }else if($tp == 4 or $tp == 5 or $tp == 6 or $tp == 8 or $tp == 12 or $tp == 13){
            $condicion = ['sector' => '14', 'programa' => '01', 'actividad' => '52'];
            $this->set('sector', '14');
            $this->set('programa', '01');
            $this->set('actividad', '52');
        }

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121Disponible');

        $partidas = $this->ViewPresupuestoForma2121Disponible->find('all')->where($condicion)->order(['concatenado' => 'ASC'])->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->concatenado] = $key->concatenado;
        } 
        $this->set('partidas', $options);

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewEjecucionRequisicionNomina');
        $condicion = ['ano' => ANO_FISCAL, 'id_requisicion' => $requisicion];
        $registros = $this->paginate($this->ViewEjecucionRequisicionNomina->find('all')->where($condicion));
        $this->set(compact('registros'));

        //========================================================
        //Verifica el estatus de la requisicion
        //========================================================
        $this->loadModel('MrrhhRequisicion');
        $condicion = ['ano' => ANO_FISCAL, 'id' => $requisicion];
        $status = $this->MrrhhRequisicion->find('all')->where($condicion)->toArray();
        $this->set('status', $status);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('EjecucionRequisicionNomina');
        $ejecucion = $this->EjecucionRequisicionNomina->newEntity();

        if ($this->request->is('post')) {
            if($this->request->data('monto_restante')<0){
                $this->Flash->error(__('El monto restante no puede ser negativo'));
            }else{
                
                $ejecucion = $this->EjecucionRequisicionNomina->patchEntity($ejecucion, $this->request->getData());
                //$ejecucion->id_requisicion = $requisicion; 
                $ejecucion->ano = ANO_FISCAL; 

                if ($this->EjecucionRequisicionNomina->save($ejecucion)) {

                    $this->loadModel('MrrhhRequisicion');
                    $query = $this->MrrhhRequisicion->query();
                    $query->update()
                        ->set(['concepto_mod' => $this->request->data('concepto')])
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
        $this->loadModel('EjecucionRequisicionNomina');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->EjecucionRequisicionNomina->get($id);
        if ($this->EjecucionRequisicionNomina->delete($data)) {
            $this->Flash->success(__('La partida ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function comprometer($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 2, 'fecha_ejecucion' => date('d/m/Y'), 'hora_ejecucion' => date('h:i:s')])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Comprometida'));
        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function rechazar($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 0])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Rechazada'));
        return $this->redirect(['action' => 'index']);
    }
    
    public function revertir($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 1])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Requisición Revertida'));
        return $this->redirect(['action' => 'partidas', $requisicion]);
    }

    public function elaborarnomina($requisicion = null){
        $this->loadModel('MrrhhRequisicion');
        $query = $this->MrrhhRequisicion->query();
        $query->update()
            ->set(['status' => 4])
            ->where(['id' => $requisicion, 'ano' => ANO_FISCAL])
            ->execute();

        $this->Flash->success(__('Orden Enviada'));
        return $this->redirect(['action' => 'index']);
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
