<?php
namespace App\Controller;

use App\Controller\AppController;

class MCompraProveedoresController extends AppController
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

        $this->loadModel('CompraProveedores');
        $data = $this->paginate($this->CompraProveedores->find('all'));
        $this->set(compact('data'));
        $this->set('n_data', $this->CompraProveedores->find('all')->count());
             
}

    //Verifica si el proveedor existe
    public function buscar(){
        //========================================================
        //Verifica si existe el rif
        //========================================================
        $this->loadModel('CompraProveedores');

        if($this->request->is('post')){
            $rif = @$this->request->data['rif'];
            $letra = @$this->request->data['letra'];

            if ($rif != null and $letra != null){
                $condicion = ['conditions' => ['rif' => $rif, 'letra' => $letra]];
                $n = $this->CompraProveedores->find('all', $condicion)->count();

                if ($n > 0) {
                    $this->Flash->success(__('Proveedor encontrado. A continuacion podrá visualizar sus datos'));
                    return $this->redirect(['action' => 'view', $letra, $rif]);
                }else{
                    $this->Flash->success(__('Este proveedor no se encuentra registrado. Por favor ingrese sus datos a continuacion'));
                    return $this->redirect(['action' => 'add', $letra, $rif]);
                }
            }
        }
    }

    public function add($letra = null, $rif = null){
        //========================================================
        //Selecciona el Layout de Compras
        //========================================================
        $this->viewBuilder()->setLayout('compra');
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('CompraProveedores');
        $proveedor = $this->CompraProveedores->newEntity();
        
        if ($this->request->is('post')) {
            $proveedor = $this->CompraProveedores->patchEntity($proveedor, $this->request->getData());

            if ($this->CompraProveedores->save($proveedor)) {
                $this->Flash->success(__('Datos del proveedor Registrado'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('proveedor'));
        $this->set('rif', $rif);
        $this->set('letra', $letra);
    }

    public function view($letra = '', $rif = ''){
        //========================================================
        //Selecciona el Layout de compra
        //========================================================
        $this->viewBuilder()->setLayout('compra');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        if($rif != '' and $letra != ''){
            $condicion = ['rif' => $rif, 'letra' => $letra];

            $this->loadModel('CompraProveedores');
            $compra = $this->CompraProveedores->find('all', ['conditions' => $condicion])->last();
            $this->set('compra', $compra);
        }
    }


    public function desactivar($letra = null, $rif = null){

        $this->loadModel('CompraProveedores');

        $this->request->allowMethod(['get', 'save']);
        $compra = $this->CompraProveedores->get($rif);
        $compra->estado = false;

        if ($this->CompraProveedores->save($compra)) {
            $this->Flash->success(__('Desactivado'));
            return $this->redirect(['action' => 'view', $letra, $rif]);
        }
    }

    public function activar($letra = null, $rif = null){

        $this->loadModel('CompraProveedores');

        $this->request->allowMethod(['get', 'save']);
        $compra = $this->CompraProveedores->get($rif);
        $compra->estado = true;

        if ($this->CompraProveedores->save($compra)) {
            $this->Flash->success(__('Activado'));
            return $this->redirect(['action' => 'view', $letra, $rif]);
        }
    }

    public function delete($letra = null, $rif = null){
        $this->request->allowMethod(['get', 'delete']);

        //-----------------------------------------------------------------------

        if($letra != null and $rif != null){

            $condicion = ['proveedor' => $rif];

            $this->loadModel('CompraOrdenCompras');
            $n1 = $this->CompraOrdenCompras->find('All', ['conditions' => $condicion])->count();

            $this->loadModel('CompraOrdenServicio');
            $n2 = $this->CompraOrdenServicio->find('All', ['conditions' => $condicion])->count();

            if($n1 == 0 and $n2 == 0){

                $this->loadModel('CompraProveedores');
                $condicion = ['letra' => $letra, 'rif' => $rif];
                $n = $this->CompraProveedores->find('All', ['conditions' => $condicion])->count();

                if($n != 0){
                    $compra = $this->CompraProveedores->get($rif);
                    $this->CompraProveedores->delete($compra);
                    $this->Flash->success(__('Proveedor Eliminado'));
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                $this->Flash->error(__('Este proveedor ya tiene ordenes registradas, Por lo tanto no puede ser eliminado'));
                return $this->redirect(['action' => 'view', $letra, $rif]);
            }
        }
    }

    public function edit($letra = null, $rif = ''){
        //========================================================
        //Selecciona el Layout de compra
        //========================================================
        $this->viewBuilder()->setLayout('compra');


        //========================================================
        //Carga todos los datos del proveedor
        //========================================================
        $this->loadModel('CompraProveedores');

        $compra = $this->CompraProveedores->get($rif, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compra = $this->CompraProveedores->patchEntity($compra, $this->request->getData());

            if ($this->CompraProveedores->save($compra)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view', $letra, $rif]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('compra'));
    }

}
