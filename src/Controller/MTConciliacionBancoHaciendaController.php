<?php
namespace App\Controller;

use App\Controller\AppController;

class PDF_Conciliacion extends \FPDF {
    function Header()
    {
        $this->SetFont('Arial','B',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',5,4,35,25,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,7,30,20,"JPG","");

        $this -> SetX(70);
        $this -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this -> SetX(70);
        $this -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $this -> SetX(70);
        $this -> Cell(80,5,'ESTADO FALCON',0,1,'C');
        $this -> SetX(70);
        $this -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
        $this -> ln();$this -> ln();$this -> ln();


        $this -> SetFont('Arial','B',8);
        $this -> SetX(70);
        $this -> Cell(80,5,'CONCILIACION BANCARIA',0,1,'C');
    }

    function Footer()
    {
        $this->SetY(-35);
        $this->Cell(180,5,' ',0,0,'C');
        $this->write(5, $this->PageNo());
    }
}

class MTConciliacionBancoHaciendaController extends AppController
{
    public function index($d = null, $h = null, $b = null){

        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('TesoreriaCuentas');

        $tipo_propiedad = $this->TesoreriaCuentas->find('all')->order(['nombre_banco' => 'ASC'])->toArray();
        $options = [];
        foreach ($tipo_propiedad as $key) 
        {
            $options[$key->numero_cuenta] = strtoupper($key->nombre_banco);
        }
        $this->set('nombre_banco', $options);

        //========================================================

        $this->loadModel('ViewConciliacionHacienda');
        $data = $this->paginate($this->ViewConciliacionHacienda->find('all'));
        $this->set(compact('data'));


      if ($d != null and $h != null and $b != null){
            
            $this->set('b', $b);
            $this->set('d', $d);
            $this->set('h', $h);

            $this->loadModel('ViewConciliacionHacienda');

            if($b == "TODOS"){
                $condicion = ['fecha_inicio >=' => $d, 'fecha_corte <=' => $h];
            }else{
                $condicion = ['numero_cuenta' => $b, 'fecha_inicio >=' => $d, 'fecha_corte <=' => $h];
            }

            $data = $this->ViewConciliacionHacienda->find('all')->where($condicion)->order(['fecha_inicio' => 'ASC', 'id' => 'ASC']);

            $data = $this->paginate($data);

            $this->set(compact('data'));
        }

        //========================================================
        //Data capturada via POST
        //========================================================

        if($this->request->is('post')){
            $b = (@$this->request->data['b'] == null) ? "TODOS" : @$this->request->data['b'];
            $d = @$this->request->data['d'];
            $h = @$this->request->data['h'];

            if($d != null and $h != null){
                return $this->redirect(['action' => 'index', $d, $h, $b]); 
            }else{
                $this->Flash->error(__('Error. Seleccione los datos a buscar'));
                return $this->redirect(['action' => 'index']);
            }     
        }
        
    }

    public function add(){

        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('TesoreriaCuentas');

        $tipo_propiedad = $this->TesoreriaCuentas->find('all')->order(['nombre_banco' => 'ASC'])->toArray();
        $options = [];
        foreach ($tipo_propiedad as $key) 
        {
            $options[$key->id_banco] = strtoupper($key->nombre_banco);
        }
        $this->set('nombre_banco', $options);   


        $this->loadModel('ConciliacionHacienda');
        $tesoreria = $this->ConciliacionHacienda->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->ConciliacionHacienda->patchEntity($tesoreria, $this->request->getData());
            //$tesoreria->saldo_libro = @$this->revertir_moneda(@$this->request->data['saldo_libro']);
            $tesoreria->saldo_libro = @$this->request->data['saldo_libro'];
           //$tesoreria->saldo_estado_cuenta = @$this->revertir_moneda(@$this->request->data['saldo_estado_cuenta']);
            $tesoreria->saldo_estado_cuenta = @$this->request->data['saldo_estado_cuenta'];

            $this->loadModel('TesoreriaCuentas');
            $nc = $this->TesoreriaCuentas->find('all')->where(['id_banco' => @$this->request->data['id_banco']])->last();
            $tesoreria->numero_cuenta = $nc['numero_cuenta'];

            if ($this->ConciliacionHacienda->save($tesoreria)) { 
                $this->Flash->success(__('Registro almacenado'));
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Error. Intente de nuevo'));
                return $this->redirect(['action' => 'add']);
            }
        }
    }

    public function view($id = null){

        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        $this->set('id', $id);

        $this->loadModel('ConciliacionHacienda');
        $status = $this->ConciliacionHacienda->find('all')->where(['id' => $id])->last();
        $this->set('status', $status['status']);

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //=====================================================================================================
        $this->loadModel('ConciliacionHaciendaC');
        $c = $this->ConciliacionHaciendaC->find('all')->where(['id_conciliacion' => $id])->count();

        $this->loadModel('ConciliacionHaciendaD');
        $d = $this->ConciliacionHaciendaD->find('all')->where(['id_conciliacion' => $id])->count();


        if ($c == 0 and $d == 0) {
            $this->precargar($id);
        }
        //=====================================================================================================

        $this->loadModel('ConciliacionHaciendaC');
        $registros_c = $this->ConciliacionHaciendaC->find('all')->where(['id_conciliacion' => $id]);
        $this->set('registros_c', $registros_c);

        $this->loadModel('ConciliacionHaciendaD');
        $registros_d = $this->ConciliacionHaciendaD->find('all')->where(['id_conciliacion' => $id]);
        $this->set('registros_d', $registros_d);
    }

    public function addc(){

        $this->loadModel('ConciliacionHaciendaC');
        $tesoreria = $this->ConciliacionHaciendaC->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->ConciliacionHaciendaC->patchEntity($tesoreria, $this->request->getData());
            $tesoreria->monto = @$this->revertir_moneda(@$this->request->data['monto']);

            if ($this->ConciliacionHaciendaC->save($tesoreria)) { 
                $this->Flash->success(__('Registro almacenado'));
            }else{
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            
            return $this->redirect(['action' => 'view', @$this->request->data['id_conciliacion']]);
        }
    }

    public function addd(){

        $this->loadModel('ConciliacionHaciendaD');
        $tesoreria = $this->ConciliacionHaciendaD->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->ConciliacionHaciendaD->patchEntity($tesoreria, $this->request->getData());
            $tesoreria->monto = @$this->revertir_moneda(@$this->request->data['monto']);

            if ($this->ConciliacionHaciendaD->save($tesoreria)) { 
                $this->Flash->success(__('Registro almacenado'));
            }else{
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            
            return $this->redirect(['action' => 'view', @$this->request->data['id_conciliacion']]);
        }
    }

    public function precargar($id = null){



        $this->loadModel('ConciliacionHacienda');
        $n = $this->ConciliacionHacienda->find('all')->where(['id' => $id])->last();

        $this->loadModel('ConciliacionHacienda');
        $x = $this->ConciliacionHacienda->find('all')->where(['id_banco' => $n['id_banco']])->first();



        if($x['id'] != 0){

            $this->loadModel('ConciliacionHaciendaC');
            $c = $this->ConciliacionHaciendaC->find('all')->where(['id_conciliacion' => $x['id']]);

            $this->loadModel('ConciliacionHaciendaD');
            $d = $this->ConciliacionHaciendaD->find('all')->where(['id_conciliacion' => $x['id']]);

            //=====================================================================================================

            if ($c->count() != 0 or $d->count() != 0) {

                foreach ($c as $key) {
                    $this->loadModel('ConciliacionHaciendaC');
                    $tesoreria = $this->ConciliacionHaciendaC->newEntity();
                    $tesoreria->id_conciliacion = $id;
                    $tesoreria->fecha = $key['fecha'];
                    $tesoreria->motivo = $key['motivo'];
                    $tesoreria->monto = $key['monto'];

                    $this->ConciliacionHaciendaC->save($tesoreria);
                }

                foreach ($d as $key) {
                    $this->loadModel('ConciliacionHaciendaD');
                    $tesoreria = $this->ConciliacionHaciendaD->newEntity();
                    $tesoreria->id_conciliacion = $id;
                    $tesoreria->fecha = $key['fecha'];
                    $tesoreria->numero = $key['numero'];
                    $tesoreria->concepto = $key['concepto'];
                    $tesoreria->monto = $key['monto'];

                    $this->ConciliacionHaciendaD->save($tesoreria);
                } 
            }
        }

        return true;
    }


    public function deletec($id = null, $id_conciliacion = null){
        $this->request->allowMethod(['get', 'delete']);

        $this->loadModel('ConciliacionHaciendaC');
        $tesoreria = $this->ConciliacionHaciendaC->get($id);
        $this->ConciliacionHaciendaC->delete($tesoreria);
        $this->Flash->success(__('Eliminado'));
        return $this->redirect(['action' => 'view', $id_conciliacion]);
    }

    public function deleted($id = null, $id_conciliacion = null){
        $this->request->allowMethod(['get', 'delete']);

        $this->loadModel('ConciliacionHaciendaD');
        $tesoreria = $this->ConciliacionHaciendaD->get($id);
        $this->ConciliacionHaciendaD->delete($tesoreria);
        $this->Flash->success(__('Eliminado'));
        return $this->redirect(['action' => 'view', $id_conciliacion]);
    }

    public function procesar($id = null){
        
        $this->loadModel('ConciliacionHacienda');
        $variable = $this->ConciliacionHacienda->query();
        $variable->update()
            ->set(['status' => true])
            ->where(['id' => $id])
            ->execute(); 

        if($variable){
            $this->Flash->success(__('Finalizada'));
            return $this->redirect(['action' => 'index']);
        }else{
            $this->Flash->error(__('Error, Intente de nuevo'));
            return $this->redirect(['action' => 'view', $id]);
        }
    }

    public function revertir($id = null){
        
        $this->loadModel('ConciliacionHacienda');
        $variable = $this->ConciliacionHacienda->query();
        $variable->update()
            ->set(['status' => false])
            ->where(['id' => $id])
            ->execute(); 

        if($variable){
            $this->Flash->success(__('Revertida'));
            return $this->redirect(['action' => 'view', $id]);
        }else{
            $this->Flash->error(__('Error, Intente de nuevo'));
            return $this->redirect(['action' => 'view', $id]);
        }
    }

    public function eliminar($id = null){
        
        $this->loadModel('ConciliacionHaciendaC');
        $variable = $this->ConciliacionHaciendaC->deleteAll(['id_conciliacion IN' => $id]);

        $this->loadModel('ConciliacionHaciendaD');
        $variable = $this->ConciliacionHaciendaD->deleteAll(['id_conciliacion IN' => $id]);

        $this->loadModel('ConciliacionHacienda');
        $variable = $this->ConciliacionHacienda->deleteAll(['id IN' => $id]);

        if($variable){
            $this->Flash->success(__('Eliminada'));
            return $this->redirect(['action' => 'index']);
        }
    }



    public function edit($id = null)
    {
        //========================================================
        //Selecciona el Layout de Compra
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewTesoreriaCuentas');

        $cuentas = $this->ViewTesoreriaCuentas->find('all', ['order' => 'nombre_banco'])->toArray();
        $options = [];
        foreach ($cuentas as $key) 
        {
            $options[$key->id_banco] =  $key->nombre_banco;
        } 
        $this->set('cuentas', $options);
        //========================================================

        $this->loadModel('ConciliacionHacienda');
        $registro = $this->ConciliacionHacienda->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registro = $this->ConciliacionHacienda->patchEntity($registro, $this->request->getData());
            //$registro->saldo_libro = @$this->revertir_moneda(@$this->request->data['saldo_libro']);
            //$registro->saldo_estado_cuenta = @$this->revertir_moneda(@$this->request->data['saldo_estado_cuenta']);

            $registro->saldo_libro = @$this->request->data['saldo_libro'];
            $registro->saldo_estado_cuenta = @$this->request->data['saldo_estado_cuenta'];
            
            if ($this->ConciliacionHacienda->save($registro)) {
                $this->Flash->success(__('El registro de ha actualizado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('registro'));
    } 

    public function reporte($id = null){

        $this->loadModel('ViewConciliacionHacienda');
        $data = $this->ViewConciliacionHacienda->find('all')->where(['id' => $id])->toArray();

        $this->loadModel('ConciliacionHaciendaC');
        $cheques = $this->ConciliacionHaciendaC->find('all')->where(['id_conciliacion' => $id])->order(['fecha' => 'ASC'])->toArray();

        $this->loadModel('ConciliacionHaciendaD');
        $depositos = $this->ConciliacionHaciendaD->find('all')->where(['id_conciliacion' => $id])->order(['fecha' => 'ASC'])->toArray();


        $pdf = new PDF_Conciliacion();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',10);


        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetX(70);
        $pdf -> Cell(80,5,$this->mayus($data[0]['descripcion']),0,1,'C');


        $pdf -> ln();$pdf -> ln();

        // Datos del Banco

        $total_depositos = 0;
        $total_cheques = 0;

        $total_depositos2 = 0;
        $total_cheques2 = 0;
        $i = 0;

        foreach ($depositos as $key) {

            $total_depositos2 += $key['monto'];

            $pdf -> Cell(5,5,'',0,0,'L');

            foreach ($cheques as $key2) {
                $total_cheques2 += $key2['monto'];
            }
        }


        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(50,5,' Nombre del Banco:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(70,5,$this->mayus($data[0]['nombre_banco']),1,0,'L');
        $pdf -> Cell(5,5,'',0,0,'L');
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(7,5,'Nro',1,0,'L');

        $cadena = $data[0]['numero_cuenta'];
        $array = explode("-", $data[0]['numero_cuenta']);

        $pdf -> Cell(68,5,$this->mayus($cadena),1,1,'R');

        $pdf->ln();

        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(50,5,'Saldo segun Estado Bancario:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(70,5,number_format($data[0]['saldo_estado_cuenta'], 2, ',', '.'),1,1,'R');

        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(50,5,'Saldo Segun libro:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(70,5,number_format($data[0]['saldo_libro'], 2, ',', '.'),1,1,'R');


        $diferencia = $data[0]['saldo_estado_cuenta'] - $data[0]['saldo_libro'];
        $diferencia2 = $total_cheques2 - $total_depositos2;
        // Datos de Transito



        $pdf -> SetY(80);
        $pdf -> SetX(130);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(35,5,'Cheques sin Cobrar:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,number_format($total_cheques2, 2, ',', '.'),1,1,'R');

        $pdf -> SetY(75);
        $pdf -> SetX(130);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(35,5,'Transferencias Transito:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,number_format($total_depositos2, 2, ',', '.'),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(50,5,'Diferencia a Conciliar:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(70,5,number_format($diferencia, 2, ',', '.'),1,0,'R');

        $pdf -> Cell(5,5,'',0,0,'L');

        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(35,5,'Diferencia a Conciliar:',1,0,'L');
        $pdf -> SetFont('Arial','',8);
        $pdf -> Cell(40,5,number_format($diferencia2, 2, ',', '.'),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(200,5,' REGISTROS DE DEPOSITOS EN TRANSITO',1,1,'C');

        // Registro Manuales de Depositos en Transito 


        $pdf -> ln();
        /*
        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(95,5,'Depositos en Transito',1,0,'C');
        $pdf -> Cell(5,5,'',0,0,'L');
        $pdf -> Cell(100,5,'Cheques Sin Cobrar',1,1,'C');
        */


        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(4,5,$this->mayus('N°'),1,0,'C');
        $pdf -> Cell(23.75,5,'Fecha',1,0,'C');
        $pdf -> Cell(25,5,'Nro',1,0,'C');
        $pdf -> Cell(122,5,'Concepto',1,0,'C');
        $pdf -> Cell(25,5,'Monto',1,1,'C');

        // Foreach


        $pdf -> Cell(5,5,'',0,0,'L');

        // Registro Manuales de Cheques sin Cobrar 

        /*$pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(23.75,5,'Fecha',1,0,'C');
        $pdf -> Cell(52.5,5,'Motivo',1,0,'C');
        $pdf -> Cell(23.75,5,'Monto',1,1,'C');*/


        foreach ($depositos as $key) {

            ++$i;

            $pdf -> SetX(5);
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(4,5,$i,1,0,'C');
            $pdf -> Cell(23.75,5,$this->fecha($key['fecha']),1,0,'C');
            $pdf -> Cell(25,5,$key['numero'],1,0,'C');
            $pdf -> Cell(122,5,$this->mayus($key['concepto']),1,0,'C');
            $pdf -> Cell(25,5,number_format($key['monto'], 2, ',', '.'),1,1,'R');

            $total_depositos += $key['monto'];

            $pdf -> Cell(5,5,'',0,0,'L');

            /*foreach ($cheques as $key2) {
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(23.75,5,$this->fecha($key2['fecha']),1,0,'C');
                $pdf -> Cell(52.5,5,$this->mayus($key2['motivo']),1,0,'C');
                $pdf -> Cell(23.75,5,number_format($key2['monto'], 2, ',', '.'),1,1,'C');

                $total_cheques += $key2['monto'];
            }*/

            $y = $pdf -> GetY();
            if($y > 240){
                $pdf -> AddPage();
            }

            if($y > 240){

                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetX(70);
                $pdf -> Cell(80,5,$this->mayus($data[0]['descripcion']),0,1,'C');


                $pdf -> ln();$pdf -> ln();

                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(50,5,' Nombre del Banco:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(70,5,$this->mayus($data[0]['nombre_banco']),1,0,'L');
                $pdf -> Cell(5,5,'',0,0,'L');
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(7,5,'Nro',1,0,'L');
                $pdf -> Cell(68,5,$this->mayus($data[0]['numero_cuenta']),1,1,'R');

                $pdf->ln();

                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(50,5,'Saldo segun Estado Bancario:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(70,5,number_format($data[0]['saldo_estado_cuenta'], 2, ',', '.'),1,1,'R');

                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(50,5,'Saldo Segun libro:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(70,5,number_format($data[0]['saldo_libro'], 2, ',', '.'),1,1,'R');


                $diferencia = $data[0]['saldo_estado_cuenta'] - $data[0]['saldo_libro'];
                $diferencia2 = $total_cheques2 - $total_depositos2;
                // Datos de Transito



                $pdf -> SetY(80);
                $pdf -> SetX(130);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(35,5,'Cheques sin Cobrar:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,number_format($total_cheques2, 2, ',', '.'),1,1,'R');

                $pdf -> SetY(75);
                $pdf -> SetX(130);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(35,5,'Transferencias Transito:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,number_format($total_depositos2, 2, ',', '.'),1,1,'R');

                $pdf -> ln();

                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(50,5,'Diferencia a Conciliar:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(70,5,number_format($diferencia, 2, ',', '.'),1,0,'R');

                $pdf -> Cell(5,5,'',0,0,'L');

                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(35,5,'Diferencia a Conciliar:',1,0,'L');
                $pdf -> SetFont('Arial','',8);
                $pdf -> Cell(40,5,number_format($diferencia2, 2, ',', '.'),1,1,'R');

                $pdf -> ln();

                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(200,5,' REGISTROS DE DEPOSITOS EN TRANSITO',1,1,'C');

                // Registro Manuales de Depositos en Transito 


                $pdf -> ln();
                /*
                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(95,5,'Depositos en Transito',1,0,'C');
                $pdf -> Cell(5,5,'',0,0,'L');
                $pdf -> Cell(100,5,'Cheques Sin Cobrar',1,1,'C');
                */


                $pdf -> SetX(5);
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(4,5,$this->mayus('N°'),1,0,'C');
                $pdf -> Cell(23.75,5,'Fecha',1,0,'C');
                $pdf -> Cell(25,5,'Nro',1,0,'C');
                $pdf -> Cell(122,5,'Concepto',1,0,'C');
                $pdf -> Cell(25,5,'Monto',1,1,'C');
            }
        }
        $pdf -> ln();

        $y = $pdf-> GetY();
        $pdf -> SetY($y+10);

        // Totales 


            

        $pdf -> SetX(5);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(152,5,'',0,0,'L');
        $pdf -> Cell(23.75,5,'Total',1,0,'L');
        $pdf -> Cell(23.75,5,number_format($total_depositos, 2, ',', '.'),1,0,'R');

        $pdf -> Cell(5,5,'',0,0,'L');

        /*$pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(23.75,5,'Total',1,0,'L');
        $pdf -> Cell(76.2,5,number_format($total_cheques, 2, ',', '.'),1,1,'R');*/


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

