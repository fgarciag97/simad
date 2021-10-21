<?php
namespace App\Controller;

use App\Controller\AppController;

/*------------------------------ FIJOS ------------------------------------*/
class PDF_AsignacionesEmpleadosFijos extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','B',10);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',250,8,35,25,"JPG","");

        $this->SetX(110);
        $this -> SetX(120);
        $this -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this -> SetX(120);
        $this -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $this -> SetX(120);
        $this -> Cell(80,5,'ESTADO FALCON',0,1,'C');
        $this -> SetX(120);
        $this -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
        $this -> ln();$this -> ln();

        $this -> SetX(120);

        $this -> SetFont('Arial','B',8);
        $this -> Cell(80,5,'REGISTROS CORRESPONDIENTES A INGRESOS DE LA OFICINA DE HACIENDA MUNICIPAL',0,1,'C');
    }
}


class MTHaciendaMunicipalController extends AppController
{
    public function index($d = null, $h = null, $b = null, $r = null){

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

        $this->loadModel('ViewRegistrosHacienda');
        $data = $this->paginate($this->ViewRegistrosHacienda->find('all')->order(['fecha_pago' => 'ASC', 'id' => 'ASC']));
        $this->set(compact('data'));

        $this->set('show', false);


      if ($d != null and $h != null and $b != null and $r != null){
            
            $this->set('b', $b);
            $this->set('d', $d);
            $this->set('h', $h);
            $this->set('r', $r);
            $this->set('show', true);

            $this->loadModel('ViewRegistrosHacienda');

            if($b == "TODOS"){
                $condicion = ['fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else{
                $condicion = ['numero_cuenta' => $b, 'fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }

            $data = $this->ViewRegistrosHacienda->find('all')->where($condicion)->order(['fecha_pago' => 'ASC', 'id' => 'ASC']);

            if($r != "TODOS"){
                $condicion = ['revision' => $r];
                $data = $data->where($condicion);
            }
            $data = $this->paginate($data);

            $this->set(compact('data'));
        }

        //========================================================
        //Data capturada via POST
        //========================================================

        if($this->request->is('post')){

            $n1 = (@$this->request->data['n1'] != '') ? @$this->request->data['n1'] : null;
            $n2 = (@$this->request->data['n2'] != '') ? @$this->request->data['n2'] : null;

            if($n1 != null or $n2 != null){

                $data = $this->ViewRegistrosHacienda->find('all');

                if($n1 != null){
                    $data = $data->where(['referencia' => $n1]);
                }

                if($n2 != null){
                    $data = $data->where(['recibo' => $n2]);
                }
                $data = $this->paginate($data);
                $this->set(compact('data'));
                $this->set('show', true);

            }else{

                $b = (@$this->request->data['id_banco'] == null) ? "TODOS" : @$this->request->data['id_banco'];
                $r = (@$this->request->data['r'] == null) ? "TODOS" : @$this->request->data['r'];
                $d = @$this->request->data['desde'];
                $h = @$this->request->data['hasta'];

                if($d != null and $h != null){
                    return $this->redirect(['action' => 'index', $d, $h, $b, $r]); 
                }else{
                    $this->Flash->error(__('Error. Seleccione los datos a buscar'));
                    return $this->redirect(['action' => 'index']);
                }   
            }  
        }
    }


    public function revision($id = null, $status = null, $b = null, $d = null, $h = null, $r = null){

        $this->loadModel('RegistrosHacienda');
        $query = $this->RegistrosHacienda->query();
        $query->update()
            ->set(['revision' => $status])
            ->where(['id' => $id])
            ->execute();

        $reg = $this->RegistrosHacienda->find('all')->where(['id' => $id])->last();
        
        $this->loadModel('TesoreriaCuentas');
        $saldo = $this->TesoreriaCuentas->find('all')->where(['numero_cuenta' => $reg['numero_cuenta']])->last();

        if($query){
            $query = $this->TesoreriaCuentas->query();
            $query->update()
                ->set(['saldo' => $reg['monto'] + $saldo['saldo']])
                ->where(['numero_cuenta' => $reg['numero_cuenta']])
                ->execute();
        }
        
        return $this->redirect(['action' => 'index', $d, $h, $b, $r]);
    }



    public function add(){

        //========================================================
        //Selecciona el Layout de Compra
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

        $cuentas = $this->TesoreriaCuentas->find('all')->order(['nombre_banco' => 'ASC'])->toArray();
        $options = [];
        foreach ($cuentas as $key) 
        {
            $options[$key->id_banco] = strtoupper($key->nombre_banco);
        }
        $this->set('cuentas', $options);

        //========================================================

        if ($this->request->is('post')) {
                
            $this->loadModel('RegistrosHacienda');
            $registro = $this->RegistrosHacienda->newEntity();
            $registro = $this->RegistrosHacienda->patchEntity($registro, $this->request->getData());
            $registro->monto_debe = (@$this->request->data['monto_debe'] == null) ? 0.00 : $this->revertir_moneda(@$this->request->data['monto_debe']);
            $registro->monto_haber = (@$this->request->data['monto_haber'] == null) ? 0.00 : $this->revertir_moneda(@$this->request->data['monto_haber']);
            $registro->saldo = 0;
            $registro->banco = @$this->request->data['banco'];

            $nc = $this->TesoreriaCuentas->find('all')->where(['id_banco' => @$this->request->data['banco']])->last();
            $registro->numero_cuenta = $nc['numero_cuenta'];

            if ($this->RegistrosHacienda->save($registro)) {

                $this->Flash->success(__('Registro exitoso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar. Intente de nuevo'));
        }
    }

    /*public function delete($id = null)
    {
        $this->loadModel('RegistrosHacienda');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->RegistrosHacienda->get($id);
        if ($this->RegistrosHacienda->delete($data)) {
            $this->Flash->success(__('Registro ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index',]);
    }*/

     public function delete($id= null){

        $condicion = ['id IN' => $id];

        $this->loadModel('RegistrosHacienda');
        $this->RegistrosHacienda->deleteAll($condicion);

        $this->Flash->success(__('Registro Eliminado'));
        return $this->redirect(['action' => 'index']);
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
            $options[$key->nombre_banco] =  $key->nombre_banco;
        } 
        $this->set('cuentas', $options);
        //========================================================

        $this->loadModel('RegistrosHacienda');
        $registro = $this->RegistrosHacienda->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registro = $this->RegistrosHacienda->patchEntity($registro, $this->request->getData());
            $registro->monto_debe = $this->revertir_moneda(@$this->request->data['monto_debe']);
            $registro->monto_haber = $this->revertir_moneda(@$this->request->data['monto_haber']);
            if ($this->RegistrosHacienda->save($registro)) {
                $this->Flash->success(__('El registro de ha actualizado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('registro'));
    } 




    public function saldo(){
        //==================================================================================================
        //Actualizacion de saldos

        $this->loadModel('ViewRegistrosHacienda');
        $data = $this->ViewRegistrosHacienda->find('all')->order(['banco' => 'ASC', 'fecha_pago' => 'ASC', 'id' => 'ASC'])->toArray();

        $banco = 0;
        $saldo = 0;

        foreach ($data as $key) {

            if($banco != $key['banco']){

                $this->loadModel('TesoreriaCuentas');
                $query = $this->TesoreriaCuentas->query();
                $query->update()
                    ->set(['saldo' => $saldo])
                    ->where(['id_banco' => $banco])
                    ->execute();

                $saldo = 0;
                $banco = $key['banco'];
            }

            if($key['monto_debe'] != 0){
                $saldo += $key['monto_debe'];
            }
            if($key['monto_haber'] != 0){
                $saldo -= $key['monto_haber'];
            }

            $this->loadModel('RegistrosHacienda');
            $query = $this->RegistrosHacienda->query();
            $query->update()
                ->set(['saldo' => $saldo])
                ->where(['id' => $key['id']])
                ->execute();
        }

        //==================================================================================================

        $this->Flash->success(__('Saldos actualizados'));
        return $this->redirect(['action' => 'index']);
    }




    public function reporte($d = null, $h = null, $b = null, $r = null){

        if($d != null and $h != null){

            if($b == "TODOS" and $r == "TODOS"){
                $condicion = ['fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else if($b == "TODOS"){
                $condicion = ['revision' => $r, 'fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else if($r == "TODOS"){
                $condicion = ['numero_cuenta' => $b, 'fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else{
                $condicion = ['id <>' => 0];
            }
            $this->loadModel('ViewRegistrosHacienda');
            $n = $this->ViewRegistrosHacienda->find('all')->where($condicion)->count();

            if ($n > 0) {
                $data = $this->ViewRegistrosHacienda->find('all')->where($condicion)->toArray();
            }else{
                $this->Flash->error(__('No se encontraron registros'));
                return $this->redirect(['action' => 'index']);
            }
        }else{
            $this->loadModel('ViewRegistrosHacienda');
            $data = $this->ViewRegistrosHacienda->find('all')->toArray();
        }

        $pdf = new PDF_AsignacionesEmpleadosFijos('L','mm',array(300,250));
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);

    $pdf -> SetX(120);
    $pdf -> Cell(80,5, $d . " - " . $h,0,0,'C');

    $pdf -> ln();
    $pdf -> ln();

     $pdf -> SetX(120);

    $pdf -> SetFont('Arial','B',8);
    $pdf -> Cell(80,5,'Cuenta Bancaria'.  ' Nro:  '.  $data[0]['numero_cuenta']. ' - '. $data[0]['nombre_banco'],0,1,'C');


    $pdf -> SetX(10);
    $pdf -> Cell(30,5,'FECHA DE PAGO',1,0,'C');
    $pdf -> Cell(20,5,'TIPO',1,0,'C');
    $pdf -> Cell(100,5,'DESCRIPCION',1,0,'C');
    $pdf -> Cell(20,5,'RECIBO',1,0,'C');
    $pdf -> Cell(20,5,'REFERENCIA',1,0,'C');
    $pdf -> Cell(30,5,'DEBE',1,0,'C');
    $pdf -> Cell(30,5,'HABER',1,0,'C');
    $pdf -> Cell(30,5,'SALDO',1,1,'C');

    $pdf -> SetFont('Arial','',8);
    
    $total = 0;
    $t_saldo = 0;

    $debe = 0;
    $haber = 0;
    $t_debe = 0;
    $t_haber = 0;

    foreach ($data as $key) {  

        if($key['monto_debe'] == 0) $debe = 0; else $debe = $key['monto_debe'];
        if($key['monto_haber'] == 0) $haber = 0; else $haber = $key['monto_haber'];

        $saldo = $key['monto'] - $key['monto_haber'];
        if($key['revision'] != FALSE){

            if ($key['monto_debe'] == 0 and $key['monto_haber'] == 0) {
                $pdf -> SetX(10);
                $pdf -> Cell(30,5, '',1,0,'L');
                $pdf -> Cell(20,5, '',1,0,'L');
                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(100,5,'--'.substr($key['descripcion'].'--',0,57),1,0,'C');
                $pdf -> SetFont('Arial','',8);
            }else{
                $pdf -> SetX(10);
                $pdf -> Cell(30,5, $this->fecha($key['fecha_pago']),1,0,'L');
                $pdf -> Cell(20,5, 'DEPOSITO',1,0,'L');
                $pdf -> Cell(100,5,substr($key['descripcion'],0,57),1,0,'L');
            }

            if($key['recibo'] != 0){
                $pdf -> Cell(20,5, $key['recibo'],1,0,'C');
            }else{
                $pdf -> Cell(20,5, '--',1,0,'C');
            }

            if($key['referencia'] != 0){
                $pdf -> Cell(20,5, $key['referencia'],1,0,'C');
            }else{
                $pdf -> Cell(20,5, '--',1,0,'C');
            }

            if($key['monto_debe'] == 0){
                $pdf -> Cell(30,5,'',1,0,'C');
            }else{
                $pdf -> Cell(30,5, number_format(@$debe, 2, ',', '.'),1,0,'R');
            }

            if($key['monto_haber'] == 0){
                $pdf -> Cell(30,5,'',1,0,'C');
            }else{
                $pdf -> Cell(30,5, number_format(@$haber, 2, ',', '.'),1,0,'R');
            }

            $pdf -> Cell(30,5, number_format(@$key['saldo'], 2, ',', '.'),1,1,'R');


            $t_saldo = $key['saldo'];

            $t_debe += $key['monto_debe'];
            $t_haber += $key['monto_haber'];
        }

            $y = $pdf -> GetY();
            if($y > 215){
                $pdf -> AddPage();
            }

            if($y > 215){
                $pdf -> SetX(120);
                $pdf -> Cell(80,5, $d . " - " . $h,0,0,'C');

                $pdf -> ln();
                $pdf -> ln();

                 $pdf -> SetX(120);

                $pdf -> SetFont('Arial','B',8);
                $pdf -> Cell(80,5,'Cuenta Bancaria'.  ' Nro:  '.  $data[0]['numero_cuenta']. ' - '. $data[0]['nombre_banco'],0,1,'C');
                $pdf -> SetX(10);
                $pdf -> Cell(30,5,'FECHA DE PAGO',1,0,'C');
                $pdf -> Cell(20,5,'TIPO',1,0,'C');
                $pdf -> Cell(100,5,'DESCRIPCION',1,0,'C');
                $pdf -> Cell(20,5,'RECIBO',1,0,'C');
                $pdf -> Cell(20,5,'REFERENCIA',1,0,'C');
                $pdf -> Cell(30,5,'DEBE',1,0,'C');
                $pdf -> Cell(30,5,'HABER',1,0,'C');
                $pdf -> Cell(30,5,'SALDO',1,1,'C');
                $pdf -> SetFont('Arial','',8);
            }

    }

                $pdf -> SetFont('Arial','B',8);
                $pdf -> SetX(10);
                $pdf -> Cell(30,5, '',1,0,'L');
                $pdf -> Cell(20,5, '',1,0,'L');
                $pdf -> Cell(100,5,'-- VAN --',1,0,'C');
                $pdf -> Cell(20,5,'',1,0,'C');
                $pdf -> Cell(20,5,'',1,0,'C');
                $pdf -> Cell(30,5, number_format(@$t_debe, 2, ',', '.'),1,0,'R');
                $pdf -> Cell(30,5, number_format(@$t_haber, 2, ',', '.'),1,0,'R');
                $pdf -> Cell(30,5, number_format(@$key['saldo'], 2, ',', '.'),1,1,'R');

        $pdf -> ln();

        $pdf -> SetX(230);
        $pdf -> SetFont('Arial','B',8);
        $pdf -> Cell(30,5, "Total en Banco",0,0,'C');
        $pdf -> Cell(30,5, number_format(@$t_saldo, 2, ',', '.'),1,1,'C');
    
        $pdf -> Output();
    }































    public function excel($d = null, $h = null, $b = null, $r = null){
        
        $this->layout='ajax';

        if($d != null and $h != null){

            if($b == "TODOS" and $r == "TODOS"){
                $condicion = ['fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else if($b == "TODOS"){
                $condicion = ['revision' => $r, 'fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else if($r == "TODOS"){
                $condicion = ['numero_cuenta' => $b, 'fecha_pago >=' => $d, 'AND' => ['fecha_pago <=' => $h]];
            }else{
                $condicion = ['id <>' => 0];
            }
            $this->loadModel('ViewRegistrosHacienda');
            $n = $this->ViewRegistrosHacienda->find('all')->where($condicion)->count();

            if ($n > 0) {
                $data = $this->ViewRegistrosHacienda->find('all')->where($condicion)->toArray();
            }else{
                $this->Flash->error(__('No se encontraron registros'));
                return $this->redirect(['action' => 'index']);
            }
        }else{
            $this->loadModel('ViewRegistrosHacienda');
            $data = $this->ViewRegistrosHacienda->find('all')->toArray();
        }

        //AQUI FALTA LO TUYO, USA LA VARIABLE $data

        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }

}
