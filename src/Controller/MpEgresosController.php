<?php
namespace App\Controller;

use App\Controller\AppController;

class MpEgresosController extends AppController
{
	public function index()
    {
    	//========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //$this->migrar();
        
        //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        
        $this->loadModel('ViewPresupuestoForma2121Disponible');
        $registros = $this->paginate($this->ViewPresupuestoForma2121Disponible->find('all'));
        $this->set(compact('registros'));
	}


    public function ajustar(){
        $this->request->allowMethod(['post', 'get', 'save']);

        $this->loadModel('PresupuestoForma2121Ajuste');
        $ajuste = $this->PresupuestoForma2121Ajuste->newEntity();
        $ajuste->partida = $this->request->data['partida'];
        $ajuste->ajuste = $this->revertir_moneda($this->request->data['nuevo_ajuste']);
        $ajuste->ano = ANO_FISCAL;

        if ($this->PresupuestoForma2121Ajuste->save($ajuste)) {
            $this->Flash->success(__('Partida Ajustada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
