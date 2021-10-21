<?php
namespace App\Controller;

use App\Controller\AppController;

class MpPresupuestosController extends AppController
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
        $this->loadModel('MpSeguimiento');
        $condicion = ['ano' => ANO_FISCAL, 'presupuestos' => true];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        if(!empty($status)){
            $this->set('status', 'procesado');
        }
        
        //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('MpForma2119');
        $registros = $this->paginate($this->MpForma2119);
        $this->set(compact('registros'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Egresos');

        $partidas = $this->Egresos->find('all')->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[strtoupper($key->denominacion)] = $key->partida;
        } 
        $this->set('partidas', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Sectores');

        $sectores = $this->Sectores->find('all')->toArray();
        $options = [];
        foreach ($sectores as $key) 
        {
            $options[$key->sector] = $key->sector . ". " . $key->denominacion;
        } 
        $this->set('sectores', $options);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('MpForma2119');
        $forma2119 = $this->MpForma2119->newEntity();

        if ($this->request->is('post')) {
            $forma2119 = $this->MpForma2119->patchEntity($forma2119, $this->request->getData());
            if ($this->MpForma2119->save($forma2119)) {

                $this->Flash->success(__('Presupuesto Almacenado'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar el Presupuesto'));
        }
        $this->set(compact('forma2119'));
    }

    public function delete($forma = null)
    {
        $this->loadModel('MpForma2119');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->MpForma2119->get($forma);
        if ($this->MpForma2119->delete($data)) {
            $this->Flash->success(__('El Presupuesto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function seguimiento(){
        if ($this->seguimiento_presupuestos()) {
            $this->Flash->success(__('Módulo Procesado. Ahora puede generar el Reporte'));
            return $this->redirect(['controller' => 'MpReportes', 'action' => 'index']);
        }
    }
}
