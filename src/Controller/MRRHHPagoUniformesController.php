<?php
namespace App\Controller;

use App\Controller\AppController;

class MRRHHPagoUniformesController extends AppController
{
	public function index(){
		//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('rrhh');
	}
}
