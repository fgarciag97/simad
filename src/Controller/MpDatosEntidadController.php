<?php
namespace App\Controller;

use App\Controller\AppController;

class MpDatosEntidadController extends AppController
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
        $condicion = ['ano' => ANO_FISCAL, 'datosentidad' => true];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        if(!empty($status)){
            $this->set('status', 'procesado');

            $this->loadModel('MpForma2100');
            $query = $this->MpForma2100->find('all', ['conditions' => ['ano = ' . ANO_FISCAL], 'order' => ['forma' => 'DESC'], 'limit' => 1]);;
            $data = $query->toArray();
            $this->set('data', $data);
        }
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('MpForma2100');
        $forma2100 = $this->MpForma2100->newEntity();

        if ($this->request->is('post')) {
            $forma2100 = $this->MpForma2100->patchEntity($forma2100, $this->request->getData());

            if ($this->MpForma2100->save($forma2100) and $this->seguimiento_Datosentidad()) {

                $this->Flash->success(__('Datos de la Entidad almacenados correctamente. Ahora puede generar el Reporte'));
                return $this->redirect(['controller' => 'MpReportes', 'action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar los datos'));
        }
        $this->set(compact('forma2100'));
        //========================================================
    }

    public function editar(){
        $this->seguimiento_Datosentidad_editar();
        return $this->redirect(['action' => 'index']);
    }
}
