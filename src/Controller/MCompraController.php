<?php
namespace App\Controller;

use App\Controller\AppController;

class MCompraController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('compra');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.compra')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);
	}

}
