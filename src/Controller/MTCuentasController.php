<?php
namespace App\Controller;

use App\Controller\AppController;

class MTCuentasController extends AppController
{
	public function index1(){

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
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);
        $condicion = ['tipo' => true];

        $this->loadModel('ViewTesoreriaCuentas');
        $data = $this->paginate($this->ViewTesoreriaCuentas->find('all')->where($condicion));
        $this->set(compact('data'));
        $this->set('n_data', $this->ViewTesoreriaCuentas->find('all')->where($condicion)->count());
    }

    public function index2(){

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
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);
        $condicion = ['tipo' => false];

        $this->loadModel('TesoreriaCuentas');
        $data = $this->paginate($this->TesoreriaCuentas->find('all')->where($condicion));
        $this->set(compact('data'));
        $this->set('n_data', $this->TesoreriaCuentas->find('all')->where($condicion)->count());
    }

    //Verifica si la cuenta existe
    public function buscar1(){
        $this->loadModel('TesoreriaCuentas');

        if($this->request->is('post')){
            $cuenta = @$this->request->data['numero_cuenta'];

            if ($cuenta != null){
                $condicion = ['conditions' => ['numero_cuenta' => $cuenta, 'tipo' => true]];
                $n = $this->TesoreriaCuentas->find('all', $condicion)->count();

                if ($n > 0) {
                    $this->Flash->success(__('Cuenta Bancaria encontrada. A continuacion podrá visualizar sus datos'));
                    return $this->redirect(['action' => 'view1', $cuenta]);
                }else{
                    $this->Flash->success(__('Esta Cuenta Bancaria no se encuentra registrada. Por favor ingrese sus datos a continuacion'));
                    return $this->redirect(['action' => 'add1', $cuenta]);
                }
            }
        }
    }

     //Verifica si la cuenta existe
    public function buscar2(){
        $this->loadModel('TesoreriaCuentas');

        if($this->request->is('post')){
            $cuenta = @$this->request->data['numero_cuenta'];

            if ($cuenta != null){
                $condicion = ['conditions' => ['numero_cuenta' => $cuenta, 'tipo' => false]];
                $n = $this->TesoreriaCuentas->find('all', $condicion)->count();

                if ($n > 0) {
                    $this->Flash->success(__('Cuenta Bancaria encontrada. A continuacion podrá visualizar sus datos'));
                    return $this->redirect(['action' => 'view2', $cuenta]);
                }else{
                    $this->Flash->success(__('Esta Cuenta Bancaria no se encuentra registrada. Por favor ingrese sus datos a continuacion'));
                    return $this->redirect(['action' => 'add2', $cuenta]);
                }
            }
        }
    }

    public function add1($cuenta = null){
        //========================================================
        //Selecciona el Layout de EjecucionTransferencias
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('TesoreriaCuentas');
        $tesoreria = $this->TesoreriaCuentas->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->TesoreriaCuentas->patchEntity($tesoreria, $this->request->getData());
            $tesoreria->tipo = true;
            $tesoreria->saldo = $this->revertir_moneda($this->request->data['saldo']);

            if ($this->TesoreriaCuentas->save($tesoreria)) {
                $this->Flash->success(__('Datos de la cuenta registrada'));
                return $this->redirect(['action' => 'index1']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('tesoreria'));
        $this->set('cuenta', $cuenta);
    }

    public function add2($cuenta = null){
        //========================================================
        //Selecciona el Layout de EjecucionTransferencias
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('TesoreriaCuentas');
        $tesoreria = $this->TesoreriaCuentas->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->TesoreriaCuentas->patchEntity($tesoreria, $this->request->getData());
            $tesoreria->tipo = false;

            if ($this->TesoreriaCuentas->save($tesoreria)) {
                $this->Flash->success(__('Datos de la cuenta registrada'));
                return $this->redirect(['action' => 'index2']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('tesoreria'));
        $this->set('cuenta', $cuenta);
    }

    public function chequeras1($cuenta = null){
        //========================================================
        //Selecciona el Layout de EjecucionTransferencias
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        $this->set('cuenta', $cuenta);
        //========================================================
        //Consulta los datos ingresados
        //========================================================
        $this->loadModel('TesoreriaChequeras');
        $condicion = ['numero_cuenta' => $cuenta];
        $data = $this->TesoreriaChequeras->find('all')->where($condicion)->toArray();
        $this->set('data', $data);

        $this->loadModel('TesoreriaCheques');
        $condicion = ['numero_cuenta' => $cuenta];
        $cheques = $this->TesoreriaCheques->find('all')->where($condicion)->toArray();
        $this->set('cheques', $cheques);
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('TesoreriaChequeras');
        $tesoreria = $this->TesoreriaChequeras->newEntity();
        
        if ($this->request->is('post')) {
            $tesoreria = $this->TesoreriaChequeras->patchEntity($tesoreria, $this->request->getData());
            $tesoreria->numero_cuenta = $cuenta;
            
            $cheque_desde = $this->request->data['numero_inicio'];
            $cantidad = $this->request->data['cantidad_cheques'];
            $chequera = $this->request->data['numero_chequera'];

            if ($this->TesoreriaChequeras->save($tesoreria)) {

                //Crea los cheques
                $this->loadModel('TesoreriaCheques');

                for($i = $cheque_desde; $i < ($cheque_desde + $cantidad); $i++){

                    $cheque = $this->TesoreriaCheques->newEntity();
                    $cheque = $this->TesoreriaChequeras->patchEntity($cheque, $this->request->getData());
                    $cheque->numero_cuenta = $cuenta;
                    $cheque->numero_chequera =$chequera;                    
                    $cheque->numero_cheque = $i; 
                    $cheque->status = 0;
                    $this->TesoreriaCheques->save($cheque);
                }

                $this->Flash->success(__('Datos de la chequera registrada'));
                return $this->redirect(['action' => 'chequeras1', $cuenta]);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('tesoreria'));
        $this->set('cuenta', $cuenta);
    }

    public function view1($cuenta = ''){
        //========================================================
        //Selecciona el Layout de tesoreria
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        if($cuenta != ''){
            $condicion = ['numero_cuenta' => $cuenta];

            $this->loadModel('TesoreriaCuentas');
            $tesoreria = $this->TesoreriaCuentas->find('all', ['conditions' => $condicion])->last();
            $this->set('tesoreria', $tesoreria);

            $this->loadModel('TesoreriaChequeras');
            $tesoreriac = $this->TesoreriaChequeras->find('all', ['conditions' => $condicion])->toArray();
            $this->set('tesoreriaC', $tesoreriac);

            $this->loadModel('TesoreriaCheques');
            $tesorerias = $this->TesoreriaCheques->find('all', ['conditions' => $condicion])->toArray();
            $this->set('tesorerias', $tesorerias);
        }
    }

    public function view2($cuenta = ''){
        //========================================================
        //Selecciona el Layout de tesoreria
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        if($cuenta != ''){
            $condicion = ['numero_cuenta' => $cuenta];

            $this->loadModel('TesoreriaCuentas');
            $tesoreria = $this->TesoreriaCuentas->find('all', ['conditions' => $condicion])->last();
            $this->set('tesoreria', $tesoreria);

        }
    }


    public function delete1($cuenta = null){
        $this->request->allowMethod(['get', 'delete']);

        $condicion = ['numero_cuenta' => $cuenta, 'tipo' => true];

        //-----------------------------------------------------------------------

        if($cuenta != null){
    
            $this->loadModel('TesoreriaCuentas');
            $n = $this->TesoreriaCuentas->find('All', ['conditions' => $condicion])->count();

            if($n != 0){
                $tesoreria = $this->TesoreriaCuentas->get($cuenta);
                $this->TesoreriaCuentas->delete($tesoreria);
                $this->Flash->success(__('Cuenta Bancaria Eliminado'));
                return $this->redirect(['action' => 'index1']);
            }
        }
    }

    public function delete2($cuenta = null){
        $this->request->allowMethod(['get', 'delete']);

        $condicion = ['numero_cuenta' => $cuenta, 'tipo' => false];

        //-----------------------------------------------------------------------

        if($cuenta != null){
    
            $this->loadModel('TesoreriaCuentas');
            $n = $this->TesoreriaCuentas->find('All', ['conditions' => $condicion])->count();

            if($n != 0){
                $tesoreria = $this->TesoreriaCuentas->get($cuenta);
                $this->TesoreriaCuentas->delete($tesoreria);
                $this->Flash->success(__('Cuenta Bancaria Eliminado'));
                return $this->redirect(['action' => 'index2']);
            }
        }
    }

    public function edit1($cuenta = ''){
        //========================================================
        //Selecciona el Layout de tesoreria
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');


        //========================================================
        //Carga todos los datos de las cuentas bancarias
        //========================================================
        $this->loadModel('TesoreriaCuentas');

        $tesoreria = $this->TesoreriaCuentas->get($cuenta, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tesoreria = $this->TesoreriaCuentas->patchEntity($tesoreria, $this->request->getData());

            if ($this->TesoreriaCuentas->save($tesoreria)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view1', $cuenta]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('tesoreria'));
    }

    public function edit2($cuenta = ''){
        //========================================================
        //Selecciona el Layout de tesoreria
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');


        //========================================================
        //Carga todos los datos de las cuentas bancarias
        //========================================================
        $this->loadModel('TesoreriaCuentas');

        $tesoreria = $this->TesoreriaCuentas->get($cuenta, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tesoreria = $this->TesoreriaCuentas->patchEntity($tesoreria, $this->request->getData());

            if ($this->TesoreriaCuentas->save($tesoreria)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view2', $cuenta]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('tesoreria'));
    }
}
