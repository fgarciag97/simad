<?php
namespace App\Controller;

use App\Controller\AppController;

class PanelController extends AppController
{
	public function index(){
		$this->viewBuilder()->setLayout('panel');
	}
}