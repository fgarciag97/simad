<?php
namespace App\Controller;

use App\Controller\AppController;

class MpProyectosController extends AppController
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
        $condicion = ['ano' => ANO_FISCAL, 'proyectos' => true];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        if(!empty($status)){
            $this->set('status', 'procesado');
        }
        
        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121');
        $condicion = ['ano' => ANO_FISCAL, 'resolucion' => false];
        $registros = $this->paginate($this->ViewPresupuestoForma2121->find('all')->where($condicion));
        $this->set(compact('registros'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('PresupuestoSector');

        $sectores = $this->PresupuestoSector->find('all', ['order' => 'sector'])->where(['resolucion' => false])->toArray();
        $options = [];
        foreach ($sectores as $key) 
        {
            $options[$key->id] = $key->sector;
        } 
        $this->set('sectores', $options);


        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('PresupuestoForma2121');
        $forma2121 = $this->PresupuestoForma2121->newEntity();

        if ($this->request->is('post')) {
            $forma2121 = $this->PresupuestoForma2121->patchEntity($forma2121, $this->request->getData());
            $forma2121->resolucion = false;
            $forma2121->n_resolucion = 0;

            if ($this->PresupuestoForma2121->save($forma2121)) {

                $this->Flash->success(__('Presupuesto Almacenado'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar el Presupuesto'));
        }
        $this->set(compact('forma2121'));
    }

    public function delete($id = null)
    {
        $this->loadModel('PresupuestoForma2121');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoForma2121->get($id);
        if ($this->PresupuestoForma2121->delete($data)) {
            $this->Flash->success(__('El Presupuesto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function seguimiento(){

        $this->loadModel('MpSeguimiento');

        $x = $this->MpSeguimiento->updateAll(
            array('proyectos' => true),
            array('ano' => ANO_FISCAL)
        );

        if ($x != 0) {
            $this->Flash->success(__('Módulo Procesado. Ahora puede generar el Reporte'));
            return $this->redirect(['controller' => 'MpReportes', 'action' => 'index']);
        }else{
            $this->Flash->success(__('Error al Procesar. Intente de Nuevo'));
            return $this->redirect(['action' => 'index']);
        }
    }








    public function partidas($s = null, $p = null, $sp = null, $proy = null, $act = null){
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
        //Carga del Select
        //========================================================
        $this->loadModel('PresupuestoEgresos');

        $partidas = $this->PresupuestoEgresos->find('all', ['order' => 'partida'])->toArray();
        $options = [];
        foreach ($partidas as $key) 
        {
            $options[$key->id] = $key->partida;
        } 
        $this->set('partidas', $options);

        //=========================================================

        if($s != null and $p != null and $sp != null and $act != null and $proy != null){
            $this->set('s', $s);
            $this->set('p', $p);
            $this->set('sp', $sp);

            if($act != 0){
                $this->set('act', $act);

                //========================================================
                //Carga todos los datos y los mustra en una paginacion
                //========================================================
                $this->loadModel('ViewPresupuestoForma2121Partidas');
                $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp, 'id_actividad' => $act, 'resolucion' => false];
                $registros = $this->paginate($this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion));
                $this->set(compact('registros'));
            }

            if($proy != 0){
                $this->set('proy', $proy);

                //========================================================
                //Carga todos los datos y los mustra en una paginacion
                //========================================================
                $this->loadModel('ViewPresupuestoForma2121Partidas');
                $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp, 'id_proyecto' => $proy, 'resolucion' => false];
                $registros = $this->paginate($this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion));
                $this->set(compact('registros'));
            }

             //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('PresupuestoForma2121Partidas');
            $proyecto = $this->PresupuestoForma2121Partidas->newEntity();

            $this->loadModel('PresupuestoOrdinal');
            $ordinal = $this->PresupuestoOrdinal->newEntity();
            
            if ($this->request->is('post')) {

                //=====================================================================================
                $ordinal = $this->PresupuestoOrdinal->patchEntity($ordinal, $this->request->getData());

                $ordinal->id_sub_especifico = $this->request->data['id_sub_especifico'];
                $ordinal->ordinal = $this->request->data['ordinal'];
                $ordinal->descripcion = $this->request->data['denominacion'];
                $ordinal->monto = $this->revertir_moneda($this->request->data['monto']);
                $ordinal->resolucion = false;
                $ordinal->n_resolucion = 0;

                //=====================================================================================

                $proyecto = $this->PresupuestoForma2121Partidas->patchEntity($proyecto, $this->request->getData());
                $proyecto->ano = ANO_FISCAL; 
                $proyecto->resolucion = false; 
                $proyecto->n_resolucion = 0;

                if ($this->PresupuestoOrdinal->save($ordinal) and $this->PresupuestoForma2121Partidas->save($proyecto)) {

                    //================================================================================================
                    $this->loadModel('PresupuestoSubEspecifico');
                    
                    $query = $this->PresupuestoSubEspecifico->find('all', ['conditions' => ['id' => $this->request->data['id_sub_especifico'], 'id_especifico' => $this->request->data['id_especifico']], 'limit' => 1])->toArray();
                    $montos = 0;
                    $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];

                    $query = $this->PresupuestoSubEspecifico->query();
                    $query->update()
                        ->set(['monto' => $montos])
                        ->where(['id' => $this->request->data['id_sub_especifico'], 'id_especifico' => $this->request->data['id_especifico']])
                        ->execute();

                    //================================================================================================

                    $this->loadModel('PresupuestoEspecifico');
                    
                    $query = $this->PresupuestoEspecifico->find('all', ['conditions' => ['id' => $this->request->data['id_especifico'], 'id_sub_ramo' => $this->request->data['id_sub_ramo']], 'limit' => 1])->toArray();
                    
                    $montos = 0;
                    $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];

                    $query = $this->PresupuestoEspecifico->query();
                    $query->update()
                        ->set(['monto' => $montos])
                        ->where(['id' => $this->request->data['id_especifico'], 'id_sub_ramo' => $this->request->data['id_sub_ramo']])
                        ->execute();

                    //================================================================================================

                    $this->loadModel('PresupuestoSubRamo');
                    
                    $query = $this->PresupuestoSubRamo->find('all', ['conditions' => ['id' => $this->request->data['id_sub_ramo'], 'id_ramo' => $this->request->data['id_ramo']], 'limit' => 1])->toArray();
                    
                    $montos = 0;
                    $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];

                    $query = $this->PresupuestoSubRamo->query();
                    $query->update()
                        ->set(['monto' => $montos])
                        ->where(['id' => $this->request->data['id_sub_ramo'], 'id_ramo' => $this->request->data['id_ramo']])
                        ->execute();

                    //================================================================================================

                    $this->loadModel('PresupuestoRamo');

                    $query = $this->PresupuestoRamo->find('all', ['conditions' => ['id' => $this->request->data['id_ramo']], 'limit' => 1])->toArray();
                    $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];
                    
                    $query = $this->PresupuestoRamo->query();
                    $query->update()
                        ->set(['monto' => $montos])
                        ->where(['id' => $this->request->data['id_ramo']])
                        ->execute();

                    //================================================================================================

                    $this->Flash->success(__('Partida registrada'));
                    return $this->redirect(['action' => 'partidas', $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa'], $proy, $act]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'.$proyecto));
            }
            $this->set(compact('proyecto'));
        }else{
            return $this->redirect(['action' => 'index']);
        }
    }

    public function deletepartida($id = null, $s = null, $p = null, $sp = null, $proy = null, $act = null){

       $this->loadModel('PresupuestoForma2121Partidas');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoForma2121Partidas->get($id);
        if ($this->PresupuestoForma2121Partidas->delete($data)) {
            $this->Flash->success(__('La partida ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'partidas', $s, $p, $sp, $proy, $act]);
    }










     public function actividad($s = null, $p = null, $sp = null){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        if($s != null and $p != null and $sp != null){
            $this->set('s', $s);
            $this->set('p', $p);
            $this->set('sp', $sp);

             //========================================================
            //Carga todos los datos y los mustra en una paginacion
            //========================================================
            $this->loadModel('ViewPresupuestoForma2103Actividad');
            $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp];
            $registros = $this->paginate($this->ViewPresupuestoForma2103Actividad->find('all')->order(['actividad' => 'ASC'])->where($condicion));
            $this->set(compact('registros'));

             //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('PresupuestoActividad');
            $actividad = $this->PresupuestoActividad->newEntity();
            
            if ($this->request->is('post')) {
                $actividad = $this->PresupuestoActividad->patchEntity($actividad, $this->request->getData());
                $actividad->ano = ANO_FISCAL;

                if ($this->PresupuestoActividad->save($actividad)) {
                    $this->Flash->success(__('Actividad registrada'));
                    return $this->redirect(['action' => 'actividad', $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa']]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            $this->set(compact('actividad'));
        }else{
            return $this->redirect(['action' => 'index']);
        }
    }

    public function deleteactividad($id = null, $s = null, $p = null, $sp = null){

       $this->loadModel('PresupuestoActividad');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoActividad->get($id);
        if ($this->PresupuestoActividad->delete($data)) {
            $this->Flash->success(__('La actividad ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'actividad', $s, $p, $sp]);
    }
}
