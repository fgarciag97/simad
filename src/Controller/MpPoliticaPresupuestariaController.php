<?php
namespace App\Controller;

use App\Controller\AppController;


class MpPoliticaPresupuestariaController extends AppController
{
    public function index()
    {
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Verifica los booleanos para marcar los check del sidebar
        //========================================================
        $this->loadModel('MpSeguimiento');
        $condicion = ['ano' => ANO_FISCAL];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        $this->set('menu', $status);

        //========================================================
        //Verifica si el modulo ya ha sido procesado
        //========================================================
        $condicion = ['ano' => ANO_FISCAL, 'politica_presupuestaria' => true];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        if(!empty($status)){
            $this->set('status', 'procesado');

            $this->loadModel('MpForma2101');
            $condicion = ['ano' => ANO_FISCAL];
            $query = $this->MpForma2101->find('all', ['conditions' => ['ano = ' . ANO_FISCAL], 'order' => ['forma' => 'DESC'], 'limit' => 1]);
            $data = $query->toArray();
            $this->set('data', $data);
        }
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('MpForma2101');
        $forma2101 = $this->MpForma2101->newEntity();

        if ($this->request->is('post')) {
            $forma2101 = $this->MpForma2101->patchEntity($forma2101, $this->request->getData());

            if ($this->MpForma2101->save($forma2101) and $this->seguimiento_PoliticaPresupuestaria()) {

                $this->Flash->success(__('Datos de las Politicas Presupuestarias Almacenadas correctamente. Ahora puede generar el Reporte'));
                return $this->redirect(['controller' => 'MpReportes', 'action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('forma2101'));
        //========================================================
    }

    public function editar(){
        $this->seguimiento_PoliticaPresupuestaria_editar();
        return $this->redirect(['action' => 'index']);
    }
}
