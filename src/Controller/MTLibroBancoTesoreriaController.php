<?php
namespace App\Controller;

use App\Controller\AppController;


class MTLibroBancoTesoreriaController extends AppController
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

     public function libroBancoHaciendaMunicipal($requisicion = null){

        $pdf = new \FPDF('L','mm','A4');
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf->Image(WWW_ROOT.'img/logo.jpg',20,6,30,20,"JPG","");
        $pdf->Image(WWW_ROOT.'img/escudo.jpg',250,6,25,20,"JPG","");

    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(115);
    $pdf -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
    $pdf -> ln();$pdf -> ln();$pdf -> ln();

    $pdf -> SetFont('Arial','B',8);


        $pdf -> Output();
    }
}
