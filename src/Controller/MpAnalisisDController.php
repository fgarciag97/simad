<?php
namespace App\Controller;

use App\Controller\AppController;


class PDF_EjecucionPresupuestariaAnalitico extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);

        $this->Image(WWW_ROOT.'img/logo.jpg',15,0,40,30,"JPG",""); 
        $this->Image(WWW_ROOT.'img/escudo.jpg',320,8,35,25,"JPG","");

        $this->SetX(150);
        $this->Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA ESTADO FALCON',0,1,'C');
        $this->SetX(150);
        $this->Cell(80,5,'DIRECCION DE PRESUPUESTO Y PLANIFICACION DE GASTOS',0,1,'C');

        $this->SetFont('Arial','B',6); 

        $this->SetY(60);
        $this->SetX(5);
        $this->MultiCell(30,7,'Partida',1,'C',0);

        $this->SetY(60);
        $this->SetX(35);
        $this->MultiCell(260,7,'Descripcion',1,'C',0);

        $this->SetY(60);
        $this->SetX(295);
        $this->MultiCell(40,7,'Monto Incremento',1,'C',0);

        $this->SetY(60);
        $this->SetX(335);
        $this->MultiCell(40,7,'Monto Disminucion',1,'C',0);
    }

        
}


class MpAnalisisDController extends AppController
{ 
	public function index($d = null, $h = null, $rel = null, $us = null) {
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        if ($d != null and $h != null and $rel != null and $us != null){
            
            $this->set('d', $d);
            $this->set('h', $h);
            $this->set('rel', $rel);
            $this->set('us', $us);
            $this->set('show', true);

            $condicion = ['fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            $this->loadModel('ViewPresupuestoForma2121Ajuste');
            $data = $this->ViewPresupuestoForma2121Ajuste->find('all')->where($condicion);

            if($us != 'TODOS' and $us != null){
            	$this->loadModel('ViewPresupuestoForma2103');
            	$aux = $this->ViewPresupuestoForma2103->find('all')->where(['id' => $us])->last();	

            	$condicion = ['id_sector' => $aux['id_sector'], 'id_programa' => $aux['id_programa'], 'id_sub_programa' => $aux['id_sub_programa']];
            	$data = $data->where($condicion);
            }

            if($rel != 'TODOS' and $rel != null){
            	$condicion = ['n_resolucion' => $rel];
            	$data = $data->where($condicion);
            }

            $ordenar = ['n_resolucion' => 'ASC', 'fecha' => 'ASC', 'sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'partida' => 'ASC'];
            $data = $this->paginate($data->order($ordenar));

            $this->set(compact('data'));
        }


        if($this->request->is('post')){

            $d = (@$this->request->data['d'] != '') ? @$this->request->data['d'] : 0;
            $h = (@$this->request->data['h'] != '') ? @$this->request->data['h'] : 0;

            if($d != 0 or $h != 0){

                $rel = (@$this->request->data['rel'] == null) ? "TODOS" : @$this->request->data['rel'];
                $us = (@$this->request->data['us'] == null) ? "TODOS" : @$this->request->data['us'];

                 return $this->redirect(['action' => 'index', $d, $h, $rel, $us]); 
            }else{
                $this->Flash->error(__('Error. Seleccione los datos a buscar'));
                return $this->redirect(['action' => 'index']);
            }   
              
        }

        
        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Resoluciones');
        $condicion = ['ano' => ANO_FISCAL];
        $resoluciones = $this->Resoluciones->find('all')->where($condicion)->toArray();
        $options = [];
        foreach ($resoluciones as $key) 
        {
            $options[$key->n_resolucion] = $key->n_resolucion . ". - " . strtoupper($key->denominacion);
        }
        $this->set('resoluciones', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2103');

        $unidad_solicitante = $this->ViewPresupuestoForma2103->find('all', ['order' => ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC']])->toArray();
        $options = [];
        foreach ($unidad_solicitante as $key) 
        {
            $options[$key->id] = $key->sector . "." . $key->programa . "." . $key->sub_programa;
        } 
        $this->set('unidad_solicitante', $options); 

        //========================================================

    }



     public function Reporte($d = null, $h = null, $rel = null, $us = null){

        $condicion = ['fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
        $this->loadModel('ViewPresupuestoForma2121Ajuste');
        $data = $this->ViewPresupuestoForma2121Ajuste->find('all')->where($condicion);

        if($us != 'TODOS' and $us != null){
            $this->loadModel('ViewPresupuestoForma2103');
            $aux = $this->ViewPresupuestoForma2103->find('all')->where(['id' => $us])->last();  

            $condicion = ['id_sector' => $aux['id_sector'], 'id_programa' => $aux['id_programa'], 'id_sub_programa' => $aux['id_sub_programa']];
            $data = $data->where($condicion);
        }

        if($rel != 'TODOS' and $rel != null){
            $condicion = ['n_resolucion' => $rel];
            $data = $data->where($condicion);
        }

        $ordenar = ['n_resolucion' => 'ASC', 'fecha' => 'ASC', 'sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'partida' => 'ASC'];
        $data = $data->order($ordenar)->toArray();

    // DOCUMENTO DE RESOLUCION PARTE I

        $pdf = new PDF_EjecucionPresupuestariaAnalitico('L','mm',array(300,390));
        
        $r = 0;
        $s = 0;
        $p = 0;
        $sp = 0;


        foreach ($data as $key1) {

        	if($r != $key1['n_resolucion'] or $s != $key1['sector'] or $p != $key1['programa'] or $sp != $key1['sub_programa']){

        		$r = $key1['n_resolucion'];
        		$s = $key1['sector'];
        		$p = $key1['programa'];
        		$sp = $key1['sub_programa'];

        		$pdf -> AddPage();
        		$pdf -> SetFont('Arial','B',8);

        		$pdf -> SetY(30);
		        $pdf -> SetX(160);
		        $pdf -> Cell(70,5,'ANALITICO DE DISPONIBILIDAD - '.ANO_FISCAL ,0,1,'C');

		        $pdf-> ln();
		        $pdf -> SetX(10);
		        $pdf -> Cell(70,5, 'RESOLUCION ' . @$key1['n_resolucion'],0,1,'L');
		        $pdf -> SetX(10);
		        $pdf -> Cell(70,5, @$key1['sector']. '  --  ' . $this->mayus($key1['denominacion_sector']),0,1,'L');
		        $pdf -> SetX(10);
		        $pdf -> Cell(70,5, $key1['programa']. '  --  ' . $this->mayus($key1['denominacion_programa']),0,1,'L');
		        $pdf -> SetX(10);
		        $pdf -> Cell(70,5, $key1['sub_programa'].'  --  ' . $this->mayus(@$data[0]['denominacion_sub_programa']),0,1,'L');



		        $pdf -> SetY(67);


		        $pdf -> SetFont('Arial','I',8);

		        $monto_i = 0;
		        $monto_d = 0;

		        foreach ($data as $key2) {

		        	if($key1['n_resolucion'] == $key2['n_resolucion'] and $key1['sector'] == $key2['sector'] and $key1['programa'] == $key2['programa'] and $key1['sub_programa'] == $key2['sub_programa']){

			            $pdf -> SetX(5);
			            $pdf -> Cell(30,5, $key2['partida'] ,1,0,'C');
			            $pdf -> Cell(260,5, $this->mayus($key2['denominacion_partida']) ,1,0,'L');
			            $pdf -> Cell(40,5, $this->moneda($key2['incrementar']) ,1,0,'L');
			            $pdf -> Cell(40,5, $this->moneda($key2['disminuir']) ,1,1,'L');

			            $monto_i += @$key2['incrementar'];
			            $monto_d += @$key2['disminuir'];
			        }
		        }

		        $pdf -> SetFont('Arial','B',8);
	            // total con nombre otra vez del proyecto
	            $pdf -> SetX(5);
	            $pdf -> Cell(290,5,'TOTAL' ,1,0,'C');
	            $pdf -> Cell(40,5, $this->moneda($monto_i) ,1,0,'L');
	            $pdf -> Cell(40,5, $this->moneda($monto_d) ,1,0,'L');
		    }
	    }

    	$pdf -> Output();
    }
}
