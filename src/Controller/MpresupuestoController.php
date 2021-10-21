<?php
namespace App\Controller;

use App\Controller\AppController;

class MpresupuestoController extends AppController
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
        
		//========================================================
        //Verifica los booleanos para marcar los check del sidebar
        //========================================================
        $this->loadModel('MpSeguimiento');
        $condicion = ['ano' => ANO_FISCAL];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();
	}
}
