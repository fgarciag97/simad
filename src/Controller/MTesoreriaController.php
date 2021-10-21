<?php
namespace App\Controller;

use App\Controller\AppController;

class MTesoreriaController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

	}
}
