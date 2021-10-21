<?php
namespace App\Controller;

use App\Controller\AppController;
/*------------------------------ EJECUCION ------------------------------------*/

class BalanceComprometidoController extends AppController
{
    public function index($us = null, $inicio = null, $corte = null){

        //========================================================
        //Selecciona el Layout de Transferencia
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Vecedulaica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'ramo' => 'ASC', 'sub_ramo' => 'ASC', 'especifico' => 'ASC', 'sub_especifico' => 'ASC'];
        $this->loadModel('ViewEjecucionBalanceGeneral');
        $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);

        $options = [];
        $ultimo = 0;
        foreach ($data as $key) 
        {
            $concatenado = $key->sector.".".$key->programa.".".$key->sub_programa.".".$key->actividad.$key->proyecto;

            if($ultimo != $concatenado){
                $options[$concatenado] = $concatenado;
                $ultimo = $concatenado;
            }
        } 
        $this->set('uss', $options);

        //========================================================

        if($inicio != '' and $corte != ''){
            $this->set('us', $us);
            $this->set('inicio', $inicio);
            $this->set('corte', $corte);
            $this->set('show', $show = true);

            $order = ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC', 'ramo' => 'ASC', 'sub_ramo' => 'ASC', 'especifico' => 'ASC', 'sub_especifico' => 'ASC'];
            $this->loadModel('ViewEjecucionBalanceGeneral');
            $data = $this->ViewEjecucionBalanceGeneral->find('all')->order($order);
            $this->set('data', $data);

            $condicion = ['AND' => ['fecha >=' => $inicio, 'fecha <=' => $corte]];
            $this->loadModel('PresupuestoForma2121Ajuste');
            $ajuste = $this->PresupuestoForma2121Ajuste->find('all')->where($condicion);
            $this->set('ajuste', $ajuste);

            $condicion = ['ano' => ANO_FISCAL, 'AND' => ['fecha_ejecucion >=' => $inicio, 'fecha_ejecucion <=' => $corte]];
            $this->loadModel('ViewOrdenamiento');
            $comprometido = $this->ViewOrdenamiento->find('all')->where($condicion);
            $this->set('comprometido', $comprometido);

        }
        //========================================================

        if($this->request->is('post')){
            $us = ($this->request->data['us'] == null) ? 0 : $this->request->data['us'];
            $inicio = $this->request->data['inicio'];
            $corte = $this->request->data['corte'];

            if($inicio != '' and $corte != ''){

                return $this->redirect(['action' => 'index', $us, $inicio, $corte]); 
            }
        } 
    }


    public function reporte($us = null, $inicio = null, $corte = null){

        if($us == null or $inicio == null or $corte == null){
            return $this->redirect(['action' => 'index']); 
        }

        $pdf = new \FPDF('L','mm',array(300,390));
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','I',8);
        $pdf -> Output();
        exit();
    }

}