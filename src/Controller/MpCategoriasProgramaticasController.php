<?php
namespace App\Controller;

use App\Controller\AppController;

class MpCategoriasProgramaticasController extends AppController
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
        $condicion = ['ano' => ANO_FISCAL, 'categorias' => true];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        if(!empty($status)){
            $this->set('status', 'procesado');
        }
        
        //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2103');
        $registros = $this->paginate($this->ViewPresupuestoForma2103->find('all')->where(['resolucion' => false]));
        $this->set(compact('registros'));

        //========================================================
        //Carga del Select Sectores
        //========================================================
        $this->loadModel('PresupuestoSector');

        $sectores = $this->PresupuestoSector->find('all')->where(['resolucion' => false])->order(['sector' => 'ASC'])->toArray();
        $options = [];
        foreach ($sectores as $key) 
        {
            $options[$key->id] = $key->sector;
        }
        $this->set('sectores', $options);


        //========================================================
        //Almacena los datos ingresados
        //========================================================
        
        if ($this->request->is('post')) {
            
            $sector = @$this->request->data['sector'];
            $nuevo_sector = @$this->request->data['nuevo_sector'];
            $denominacion_sector = @$this->request->data['denominacion_sector'];

            //------------------------------------------------------- 

            $programa = @$this->request->data['programa'];
            $nuevo_programa = @$this->request->data['nuevo_programa'];
            $denominacion_programa = @$this->request->data['denominacion_programa'];

            //------------------------------------------------------- 

            $subprograma = @$this->request->data['subprograma']; 
            $nuevo_subprograma = @$this->request->data['nuevo_subprograma']; 
            $denominacion_subprograma = @$this->request->data['denominacion_subprograma'];

            //------------------------------------------------------- 

            if (($sector == null and $nuevo_sector == null) or ($programa == null and $nuevo_programa == null) or ($subprograma == null and $nuevo_subprograma == null)) {
                $this->Flash->error(__('Ingrese los datos correctamente'));
                return $this->redirect(['action' => 'index']);
            }

            //------------------------------------------------------- 

            $unidad_ejecutora = @$this->request->data['unidad_ejecutora'];

            //================================================================

            if($nuevo_sector != null){
                $this->loadModel('PresupuestoSector');
                $condicion = ['sector' => $nuevo_sector, 'resolucion' => false];
                $query = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->count();

                if($query == 0){
                    $add_sector = $this->PresupuestoSector->newEntity();
                    $add_sector = $this->PresupuestoSector->patchEntity($add_sector, $this->request->getData());

                    $add_sector->sector = $nuevo_sector;
                    $add_sector->denominacion = $denominacion_sector;
                    $add_sector->resolucion = false;
                    $add_sector->n_resolucion = 0;

                    if (!$this->PresupuestoSector->save($add_sector)) {
                        $this->Flash->error(__('No se ha podido registrar el sector'));
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->loadModel('PresupuestoSector');
                        $condicion = ['sector' => $nuevo_sector, 'resolucion' => false];
                        $secuencia = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->last()->toArray();
                        $id_sector = $secuencia['id'];
                    }
                }else{
                    $this->Flash->error(__('El sector ' . $nuevo_sector . ' no se registró. En cambio ya fue asignado al sector existente'));
                    $this->loadModel('PresupuestoSector');
                    $condicion = ['sector' => $nuevo_sector, 'resolucion' => false];
                    $secuencia = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->last()->toArray();
                    $id_sector = $secuencia['id'];
                }
            }else{
                $this->loadModel('PresupuestoSector');
                $condicion = ['id' => $sector, 'resolucion' => false];
                $secuencia = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->last()->toArray();
                $id_sector = $secuencia['id'];
            }

            //================================================================

            if($nuevo_programa != null){
                $this->loadModel('PresupuestoPrograma');
                $condicion = ['id_sector' => $id_sector, 'programa' => $nuevo_programa, 'resolucion' => false];
                $query = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->count();

                if($query == 0){
                    $add_programa = $this->PresupuestoPrograma->newEntity();
                    $add_programa = $this->PresupuestoPrograma->patchEntity($add_programa, $this->request->getData());

                    $add_programa->id_sector = $id_sector;
                    $add_programa->programa = $nuevo_programa;
                    $add_programa->denominacion = $denominacion_programa;
                    $add_programa->resolucion = false;
                    $add_programa->n_resolucion = 0;

                    if (!$this->PresupuestoPrograma->save($add_programa)) {
                        $this->Flash->error(__('No se ha podido registrar el programa'));
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->loadModel('PresupuestoPrograma');
                        $condicion = ['id_sector' => $id_sector, 'programa' => $nuevo_programa, 'resolucion' => false];
                        $secuencia = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                        $id_programa = $secuencia['id'];
                    }
                }else{
                    $this->Flash->error(__('El programa ' . $nuevo_programa . ' no se registró. En cambio ya fue asignado al programa existente'));
                    $this->loadModel('PresupuestoPrograma');
                    $condicion = ['id_sector' => $id_sector, 'programa' => $nuevo_programa, 'resolucion' => false];
                    $secuencia = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                    $id_programa = $secuencia['id'];
                }
            }else{
                $this->loadModel('PresupuestoPrograma');
                $condicion = ['id_sector' => $id_sector, 'id' => $programa, 'resolucion' => false];
                $secuencia = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                $id_programa = $secuencia['id'];
            }

            //================================================================

            if($nuevo_subprograma != null){
                $this->loadModel('PresupuestoSubPrograma');
                $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'sub_programa' => $nuevo_subprograma, 'resolucion' => false];
                $query = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->count();

                if($query == 0){
                    $add_subprograma = $this->PresupuestoSubPrograma->newEntity();
                    $add_subprograma = $this->PresupuestoSubPrograma->patchEntity($add_subprograma, $this->request->getData());

                    $add_subprograma->id_sector = $id_sector;
                    $add_subprograma->id_programa = $id_programa;
                    $add_subprograma->sub_programa = $nuevo_subprograma;
                    $add_subprograma->denominacion = $denominacion_subprograma;
                    $add_subprograma->resolucion = false;
                    $add_subprograma->n_resolucion = 0;

                    if (!$this->PresupuestoSubPrograma->save($add_subprograma)) {
                        $this->Flash->error(__('No se ha podido registrar el subprograma'));
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->loadModel('PresupuestoSubPrograma');
                        $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'sub_programa' => $nuevo_subprograma, 'resolucion' => false];
                        $secuencia = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                        $id_sub_programa = $secuencia['id'];
                    }
                }else{
                    $this->Flash->error(__('El subprograma ' . $nuevo_subprograma . ' no se registró. En cambio ya fue asignado al programa existente'));
                    $this->loadModel('PresupuestoSubPrograma');
                    $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'sub_programa' => $nuevo_subprograma, 'resolucion' => false];
                    $secuencia = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                    $id_sub_programa = $secuencia['id'];
                }
            }else{
                $this->loadModel('PresupuestoSubPrograma');
                $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id' => $subprograma, 'resolucion' => false];
                $secuencia = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                $id_sub_programa = $secuencia['id'];
            }


            //==================================================================

            if($id_sector != null and $id_programa != null and $id_sub_programa != null){

                $this->loadModel('PresupuestoForma2103');
                $forma2103 = $this->PresupuestoForma2103->newEntity();
                $forma2103 = $this->PresupuestoForma2103->patchEntity($forma2103, $this->request->getData());

                $forma2103->id_sector = $id_sector;
                $forma2103->id_programa = $id_programa;
                $forma2103->id_sub_programa = $id_sub_programa;
                $forma2103->unidad_ejecutora = $unidad_ejecutora;
                $forma2103->ano = ANO_FISCAL;
                $forma2103->resolucion = false;
                $forma2103->n_resolucion = 0;

                if ($this->PresupuestoForma2103->save($forma2103)) {

                    $this->Flash->success(__('Categoria Programática almacenada'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('No se ha podido registrar la partida'));
            }else{
                $this->Flash->error(__('Ingrese los datos correctamente'));
                return $this->redirect(['action' => 'index']);
            }
        }
        @$this->set(compact('forma2103'));
    }

    public function delete($id = null)
    {
        $this->loadModel('PresupuestoForma2103');
        $condicion = ['id' => $id];
        $query = $this->PresupuestoForma2103->find('all', ['conditions' => $condicion])->last()->toArray();

        $this->loadModel('ViewPresupuestoForma2121');
        $condicion = ['id_sector' => $query['id_sector'], 'id_programa' => $query['id_programa'], 'id_sub_programa' => $query['id_sub_programa']];
        $n = $this->ViewPresupuestoForma2121->find('all', ['conditions' => $condicion])->count();

        if($n == 0){

            $this->loadModel('PresupuestoActividad');
            $this->PresupuestoActividad->deleteAll(['id_sector IN' => $query['id_sector'], 'id_programa IN' => $query['id_programa'], 'id_sub_programa IN' => $query['id_sub_programa']]);

            $this->loadModel('PresupuestoProyecto');
            $this->PresupuestoProyecto->deleteAll(['id_sector IN' => $query['id_sector'], 'id_programa IN' => $query['id_programa'], 'id_sub_programa IN' => $query['id_sub_programa']]);


            $this->loadModel('PresupuestoForma2103');
            $this->request->allowMethod(['post', 'delete']);
            $data = $this->PresupuestoForma2103->get($id);
            if ($this->PresupuestoForma2103->delete($data)) {
                $this->Flash->success(__('El sector ha sido eliminado.'));
            } else {
                $this->Flash->error(__('Error. Intente de nuevo.'));
            }
        }else{
            $this->Flash->error(__('Error. Esta Categoria ya se encuentra asociada a un proyecto - Forma 2121'));
        } 

        return $this->redirect(['action' => 'index']);
    }

    public function seguimiento(){
        if ($this->seguimiento_categorias()) {
            $this->Flash->success(__('Módulo Procesado. Ahora puede generar el Reporte'));
            return $this->redirect(['controller' => 'MpReportes', 'action' => 'index']);
        }
    }





    public function proyecto($s = null, $p = null, $sp = null){
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
            $this->loadModel('ViewPresupuestoForma2103Proyecto');
            $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp, 'resolucion' => false];
            $registros = $this->paginate($this->ViewPresupuestoForma2103Proyecto->find('all')->order(['proyecto' => 'ASC'])->where($condicion));
            $this->set(compact('registros'));

             //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('PresupuestoProyecto');
            $proyecto = $this->PresupuestoProyecto->newEntity();
            
            if ($this->request->is('post')) {
                $proyecto = $this->PresupuestoProyecto->patchEntity($proyecto, $this->request->getData());
                $proyecto->ano = ANO_FISCAL;
                $proyecto->resolucion = false;
                $proyecto->n_resolucion = 0;

                if ($this->PresupuestoProyecto->save($proyecto)) {
                    $this->Flash->success(__('Proyecto registrado'));
                    return $this->redirect(['action' => 'proyecto', $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa']]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            $this->set(compact('proyecto'));
        }else{
            return $this->redirect(['action' => 'index']);
        }
    }

    public function deleteproyecto($id = null, $s = null, $p = null, $sp = null){

       $this->loadModel('PresupuestoProyecto');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoProyecto->get($id);
        if ($this->PresupuestoProyecto->delete($data)) {
            $this->Flash->success(__('El proyecto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'proyecto', $s, $p, $sp]);
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
            $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp, 'resolucion' => false];
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
                $actividad->resolucion = false;
                $actividad->n_resolucion = 0;

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
