<?php
namespace App\Controller;

use App\Controller\AppController;

class MTEgresosController extends AppController
{
    public function index(){

        //========================================================
        //Selecciona el Layout de Rejkjkjkhkjkcursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('tesoreria');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.tesoreria')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        if($this->request->is('post')){
            $libro = @$this->request->data['libro'];
            $inicio = @$this->request->data['inicio'];
            $corte = @$this->request->data['corte'];

            if ($libro != null and $inicio != null and $corte != null){

                $this->set('libro', $libro);
                $this->set('inicio', $inicio);
                $this->set('corte', $corte);

                if($libro == 1){

                    $this->loadModel('ViewTesoreriaLiquidar');
                    $condicion = ['fecha_pago >=' => $inicio, 'fecha_facturacion <=' => $corte];
                    $n = $this->ViewTesoreriaLiquidar->find('all')->where($condicion)->count();

                    if ($n > 0) {
                        $data = $this->paginate($this->ViewTesoreriaLiquidar->find('all')->where($condicion));
                        $this->set(compact('data'));
                    }else{
                        $this->Flash->error(__('No se encontraron registros'));
                        return $this->redirect(['action' => 'index']);
                    }
                }else if($libro == 2){
                    
                } 
            }
        }
    }

    public function reporteconsultado($libro = null, $inicio = null, $corte = null){

        if ($libro != null and $inicio != null and $corte != null){

            if($libro == 1){

                $this->loadModel('ViewTesoreriaLiquidar');
                $condicion = ['fecha_pago >=' => $inicio, 'fecha_facturacion <=' => $corte];
                $n = $this->ViewTesoreriaLiquidar->find('all')->where($condicion)->count();

                if ($n > 0) {
                    $data = $this->ViewTesoreriaLiquidar->find('all')->where($condicion)->toArray();
                }else{
                    $this->Flash->error(__('No se encontraron registros'));
                    return $this->redirect(['action' => 'index']);
                }
            }else if($libro == 2){
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

    if($libro == 1){
        $pdf -> Cell(80,5,'LIBRO HACIENDA MUNICIPAL',0,1,'C');
    }else{
        $pdf -> Cell(80,5,'LIBRO TESORERIA MUNICIPAL',0,1,'C');
    }
    
    $pdf -> SetX(70);
    $pdf -> Cell(80,5, $inicio . " - " . $corte,0,0,'C');

    $pdf -> ln();
    $pdf -> ln();

    $pdf -> SetFont('Arial','B',8);

    $pdf -> SetX(10);
    $pdf -> Cell(40,5,'Nro de Ref/Op',1,0,'C');
    $pdf -> Cell(20,5,'Fecha',1,0,'C');
    $pdf -> Cell(80,5,'Razon Social',1,0,'C');
    $pdf -> Cell(30,5,'Monto',1,0,'C');
    $pdf -> Cell(20,5,'Estatus',1,1,'C');

    $pdf -> SetFont('Arial','',8);
    /* APARTIR DE AQUI SE IMPRIMEN LOS DATOS DE LA CONSULTA SEGUN RANGO DE FECHA*/
    foreach ($data as $key) {  

        if($key['status'] == 7){
            $status = "Pagado";
        }else{
            $status = "Pendiente";
        }

        $pdf -> SetX(10);
        $pdf -> Cell(40,5, $key['n_referencia'],1,0,'C');
        $pdf -> Cell(20,5, $key['fecha_pago'],1,0,'C');
        $pdf -> Cell(80,5, $key['razon_social'],1,0,'C');
        $pdf -> Cell(30,5, number_format($key['monto'], 2, ',', '.'),1,0,'C');
        $pdf -> Cell(20,5, @$status,1,1,'C');
    }
    
        $pdf -> Output();
    }
}
