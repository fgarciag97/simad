<?php
namespace App\Controller;

use App\Controller\AppController;

class MCompraOrdenesComprometidasController extends AppController
{
	public function index($d = null, $h = null, $to = null, $p = null, $s = null){

       	//========================================================
        //Selecciona el Layout de Compra
        //========================================================
		$this->viewBuilder()->setLayout('compra');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.compra')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);


         //========================================================
        //Consulta año segun requiscion
        //========================================================
        $this->loadModel('CompraRequisicion');

        $ano = $this->CompraRequisicion->find('all')->distinct(['ano'])->toArray();
        $options = [];
        foreach ($ano as $key) 
        {
            $options[$key->ano] = strtoupper($key->ano);
        }
        $this->set('anoo', $options);


        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('CompraProveedores');

        $proveedores = $this->CompraProveedores->find('all', ['order' => 'razon_social'])->toArray();
        $options = [];
        foreach ($proveedores as $key) 
        {
            $options[$key->rif] = "(" . $key->letra . "-" . $key->rif . ") - " . $key->razon_social;
        } 
        $this->set('proveedores', $options);

        //========================================================

        if ($d != null and $h != null and $to != null and $p != null and $s != null){
            
            $this->set('to', $to);
            $this->set('p', $p);
            $this->set('s', $s);
            $this->set('d', $d);
            $this->set('h', $h);

            $this->loadModel('ViewCompraFiltroOrdenesComprometidas');

            if($to == "TODOS" and $p == "TODOS" and $s == "TODOS"){
                $condicion = ['fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($to == "TODOS" and $p == "TODOS"){
                $condicion = ['status' => $s, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($p == "TODOS" and $s == "TODOS"){
                $condicion = ['tipo' => $to, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($to == "TODOS" and $s == "TODOS"){
                $condicion = ['proveedor' => $p,'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($to == "TODOS"){
                $condicion = ['proveedor' => $p, 'status' => $s, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($s == "TODOS"){
                $condicion = ['tipo' => $to, 'proveedor' => $p, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($p == "TODOS"){
                $condicion = ['tipo' => $to, 'status' => $s, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }else if($to != "TODOS" and $p != "TODOS" and $s != "TODOS"){
                $condicion = ['tipo' => $to, 'proveedor' => $p, 'status' => $s, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
            }

            $data = $this->ViewCompraFiltroOrdenesComprometidas->find('all')->where($condicion);
            $this->set(compact('data'));
        }

        //========================================================
        //Data capturada via POST
        //========================================================

        if($this->request->is('post')){
            $to = ($this->request->data['tipo_orden'] == null) ? "TODOS" : $this->request->data['tipo_orden'];
            $p = ($this->request->data['proveedor'] == null) ? "TODOS" : $this->request->data['proveedor'];
            $s = ($this->request->data['status'] == null) ? "TODOS" : $this->request->data['status'];
            $d = $this->request->data['desde'];
            $h = $this->request->data['hasta'];

            if($d != null and $h != null){
                return $this->redirect(['action' => 'index', $d, $h, $to, $p, $s]); 
            }else{
                $this->Flash->error(__('Error. Seleccione los datos a buscar'));
                return $this->redirect(['action' => 'index']);
            }     
        }
    }



    public function reporte($to = null, $p = null, $s = null, $d = null, $h = null){

        if($to != null and $p != null and $s != null and $d != null and $h != null){

                $this->loadModel('ViewCompraFiltroOrdenesComprometidas');
                $condicion = ['tipo' => $to, 'proveedor' => $p, 'status' => $s, 'fecha >=' => $d, 'AND' => ['fecha <=' => $h]];
                $n = $this->ViewCompraFiltroOrdenesComprometidas->find('all')->where($condicion)->count();

                if ($n > 0) {
                    $data = $this->ViewCompraFiltroOrdenesComprometidas->find('all')->where($condicion)->toArray();
                }else{
                    $this->Flash->error(__('No se encontraron registros'));
                    return $this->redirect(['action' => 'index']);
                }
        }

        $pdf = new \FPDF();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        
        $pdf ->Image(WWW_ROOT.'img/logo.jpg',10,5,30,15,"JPG","");
        $pdf ->Image(WWW_ROOT.'img/escudo.jpg',170,10,25,15,"JPG","");

    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'ESTADO FALCON',0,1,'C');
    $pdf -> SetX(70);
    $pdf -> Cell(80,5,'TESORERIA MUNICIPAL',0,1,'C');
    $pdf -> ln();$pdf -> ln();

    $pdf -> SetX(70);

    $pdf -> Cell(80,5,'REPORTE DE ORDENES',0,1,'C');
    
    $pdf -> SetX(70);
    $pdf -> Cell(80,5, $d . " - " . $h,0,0,'C');

    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','B',8);

    $pdf -> SetX(10);
    $pdf -> Cell(20,5,'Requisicion',1,0,'C');
    $pdf -> Cell(80,5,'Proveedor',1,0,'C');
    $pdf -> Cell(20,5,'Tipo',1,0,'C');
    $pdf -> Cell(20,5,'Estatus',1,0,'C');
    $pdf -> Cell(20,5,'Fecha',1,0,'C');
    $pdf -> Cell(20,5,'Monto',1,1,'C');

    $pdf -> SetFont('Arial','',8);
    
    $total = 0;

    foreach ($data as $key) {  

        if($key['status'] == 1){
            $status = "ELABORADA";
        }else if($key['status'] == 2){
            $status = "COMPROMETIDA";
        }else if($key['status'] == 4){
            $status = "EN EJECUCION";
        }else if($key['status'] == 5){
            $status = "APROBADA";
        }else if($key['status'] == 6){
            $status = "LIQUIDADA";
        }

        $x = $key['requisicion'];
        $n = 10 - strlen($x);
        $requisicion = '';
        for($i=0; $i < $n; $i++){
            $requisicion .= "0";
        }
        $requisicion .= $x;

        $sub_total = ($key['monto'] + ($key['monto'] * 0.16));

        $pdf -> SetX(10);
        $pdf -> Cell(20,5, $requisicion,1,0,'C');
        $pdf -> Cell(80,5, $key['proveedor_denominacion'],1,0,'C');
        $pdf -> Cell(20,5, $key['tipo'],1,0,'C');
        $pdf -> Cell(20,5, $status,1,0,'C');
        $pdf -> Cell(20,5, $key['fecha'],1,0,'C');
        $pdf -> Cell(20,5, number_format($sub_total, 2, ',', '.'),1,1,'C');

        $total += $sub_total;
    }

        $pdf -> SetX(10);
        $pdf -> Cell(160,5, "",0,0,'C');
        $pdf -> Cell(20,5, number_format(@$total, 2, ',', '.'),1,1,'C');
    
        $pdf -> Output();
    }
}
