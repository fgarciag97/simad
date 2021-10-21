<?php
namespace App\Controller;

use App\Controller\AppController;

class PrincipalController extends AppController
{
    public function excel(){
    $this->layout='ajax';
    $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }
}
