<?php
namespace App\Controller;

use App\Controller\AppController;

class MUGAnoFiscalController extends AppController
{
	public function index(){
		//========================================================
        //Selecciona el Layout de Uso General
        //========================================================
		$this->viewBuilder()->setLayout('usogeneral');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.usogeneral')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('AnoFiscal');
        $ano_fiscal = $this->AnoFiscal->newEntity();

        if ($this->request->is('post')) {
            $ano_fiscal = $this->AnoFiscal->patchEntity($ano_fiscal, $this->request->getData());
            if ($this->AnoFiscal->save($ano_fiscal)) {

                $this->Flash->success(__('Ano Fiscal actualizado'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('ano_fiscal'));
	}
}
