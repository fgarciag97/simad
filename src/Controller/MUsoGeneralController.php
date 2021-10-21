<?php
namespace App\Controller;

use App\Controller\AppController;

class MUsoGeneralController extends AppController
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
	}
}
