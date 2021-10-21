<?php
namespace App\Controller;

use App\Controller\AppController;

class MUGRRHHAsignacionesController extends AppController
{
	public function index(){
		//========================================================
        //Selecciona el Layout de Uso General
        //========================================================
        $this->viewBuilder()->setLayout('usogeneral');
	}
}
