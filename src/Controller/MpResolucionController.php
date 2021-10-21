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
        $this->MultiCell(130,7,'Descripcion',1,'C',0);

        $this->SetY(60);
        $this->SetX(165);
        $this->MultiCell(40,7,'Monto Presupuestado',1,'C',0);

        $this->SetY(60);
        $this->SetX(205);
        $this->MultiCell(40,7,'Monto Ajustado',1,'C',0);

        $this->SetY(60);
        $this->SetX(245);
        $this->MultiCell(40,7,'Monto Actualizado',1,'C',0);

        $this->SetY(60);
        $this->SetX(285);
        $this->MultiCell(40,7,'Monto Comprometido',1,'C',0);

        $this->SetY(60);
        $this->SetX(325);
        $this->MultiCell(40,7,'Monto Disponible',1,'C',0);
    }

        
}


class PDF_Resolucion extends \FPDF {
     function Header()
    {
        $this->SetFont('Arial','I',8);
        $this->Image(WWW_ROOT.'img/logo.jpg',10,6,30,20,"JPG","");
        $this->Image(WWW_ROOT.'img/escudo.jpg',175,6,25,20,"JPG","");

        $this -> SetX(70);
        $this -> Cell(80,4,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,1,'C');
        $this -> SetX(70);
        $this -> Cell(80,4,'ALCALDIA DEL MUNICIPIO MIRANDA - ESTADO FALCON',0,1,'C');
        $this -> SetX(70);
        $this -> Cell(80,4,'DIRECCION DE PLANIFICACION Y PRESUPUESTO',0,1,'C');
        $this -> ln();$this -> ln();$this -> ln();
        $this -> ln();
    }

        
}


  

class MpResolucionController extends AppController
{

    //====================================================================================================================
    
    public function index() {
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
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('Resoluciones');
        $condicion = ['ano' => ANO_FISCAL];
        $registros = $this->paginate($this->Resoluciones->find('all')->where(['n_resolucion <>' => '0'])->order(['n_resolucion' => 'ASC']));
        $this->set(compact('registros'));

        //========================================================
        //Almacena los datos ingresados 
        //========================================================
        $this->loadModel('Resoluciones');
        $Resoluciones = $this->Resoluciones->newEntity();

        if ($this->request->is('post')) {

            //=====================================================================================
            $Resoluciones = $this->Resoluciones->patchEntity($Resoluciones, $this->request->getData());

            if ($this->Resoluciones->save($Resoluciones)) {

                $this->Flash->success(__('Resolucion almacenada'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar la Resolucion'));
        }
        $this->set(compact('Resoluciones'));
    }


     public function opcion($rel = null, $id_sector = null, $id_programa = null, $id_sub_programa = null, $us = null)
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
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($rel == null)
            return $this->redirect(['action' => 'index']);

        if($rel != null){
            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $n = $deno_rel->count();
            $deno_rel = $deno_rel->last();

            if($n != 0){
                $this->set('rel', $rel);
                $this->set('deno_rel', $deno_rel['denominacion']);
            }else{
                $this->set('rel', 0);
            }
        }

         //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121Ajuste');
        $condicion = ['ano' => ANO_FISCAL, 'n_resolucion' => $rel];
        $ajustes = $this->paginate($this->ViewPresupuestoForma2121Ajuste->find('all')->where($condicion)->order(['sector' => 'ASC', 'programa' => 'ASC', 'actividad' => 'ASC', 'proyecto' => 'ASC', 'partida' => 'ASC']));
        $this->set(compact('ajustes'));

        if($id_sector != null and $id_programa != null and $id_sub_programa != null){
            $this->set('show', $show = true);
            $this->set('id_sector', $id_sector);
            $this->set('id_programa', $id_programa);
            $this->set('id_sub_programa', $id_sub_programa);
            $this->set('us', $us);
        }

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewPresupuestoForma2103');

        $s = 0;
        $p = 0;
        $sp = 0;

        $unidad_solicitante = $this->ViewPresupuestoForma2103->find('all', ['order' => ['sector' => 'ASC', 'programa' => 'ASC', 'sub_programa' => 'ASC']])->toArray();
        $options = [];
        foreach ($unidad_solicitante as $key) 
        {
            if($s != $key->sector or $p != $key->programa or $sp != $key->sub_programa){
                $s = $key->sector;
                $p = $key->programa;
                $sp = $key->sub_programa;
                $options[$key->id] = $key->sector . "." . $key->programa . "." . $key->sub_programa;
            }
        } 
        $this->set('unidad_solicitante', $options);

        //========================================================

        if ($this->request->is('post')) {

            $this->loadModel('ViewPresupuestoForma2103');
            $condicion = ['id' => @$this->request->data['unidad_solicitante']];
            $us = $this->ViewPresupuestoForma2103->find('all')->where($condicion)->last();

            $id_sector = $us['id_sector'];
            $id_programa = $us['id_programa'];
            $id_sub_programa = $us['id_sub_programa'];
            $us = @$this->request->data['unidad_solicitante'];
         
            return $this->redirect(['action' => 'opcion', $rel, $id_sector, $id_programa, $id_sub_programa, $us]);
        }
         
         //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2103Proyecto');
        //$condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa, 'resolucion' => true, 'n_resolucion' => $rel];
        $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa];
        $proyectos = $this->paginate($this->ViewPresupuestoForma2103Proyecto->find('all')->order(['proyecto' => 'ASC'])->where($condicion));
        $this->set(compact('proyectos'));

         //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2103Actividad');
        $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa];
        //$condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa, 'resolucion' => true, 'n_resolucion' => $rel];
        $actividades = $this->paginate($this->ViewPresupuestoForma2103Actividad->find('all')->order(['actividad' => 'ASC'])->where($condicion));
        $this->set(compact('actividades'));
    }

    public function categorias($rel = null){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        if($rel != null){
            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $n = $deno_rel->count();
            $deno_rel = $deno_rel->last();

            if($n != 0){
                $this->set('rel', $rel);
                $this->set('deno_rel', $deno_rel['denominacion']);
            }else{
                $this->set('rel', 0);
            }
        }else{
            $this->set('rel', 0);
        }

        //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2103');
        $registros = $this->paginate($this->ViewPresupuestoForma2103->find('all')->where(['resolucion' => true, 'n_resolucion' => $rel]));
        $this->set(compact('registros'));

        //========================================================
        //Carga del Select Sectores
        //========================================================
        $this->loadModel('PresupuestoSector');

        $sectores = $this->PresupuestoSector->find('all')->order(['sector' => 'ASC'])->toArray();
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

            if(@$this->request->data['rel'] != null){
                return $this->redirect(['action' => 'categorias', $this->request->data['rel']]);
            }
            
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
                return $this->redirect(['action' => 'categorias', $rel]);
            }

            //------------------------------------------------------- 

            $unidad_ejecutora = @$this->request->data['unidad_ejecutora'];

            //================================================================

            if($nuevo_sector != null){
                $this->loadModel('PresupuestoSector');
                $condicion = ['sector' => $nuevo_sector, 'resolucion' => true];
                $query = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->count();

                if($query == 0){
                    $add_sector = $this->PresupuestoSector->newEntity();
                    $add_sector = $this->PresupuestoSector->patchEntity($add_sector, $this->request->getData());

                    $add_sector->sector = $nuevo_sector;
                    $add_sector->denominacion = $denominacion_sector;
                    $add_sector->resolucion = true;
                    $add_sector->n_resolucion = $rel;

                    if (!$this->PresupuestoSector->save($add_sector)) {
                        $this->Flash->error(__('No se ha podido registrar el sector'));
                        return $this->redirect(['action' => 'categorias', $rel]);
                    }else{
                        $this->loadModel('PresupuestoSector');
                        $condicion = ['sector' => $nuevo_sector, 'resolucion' => true];
                        $secuencia = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->last()->toArray();
                        $id_sector = $secuencia['id'];
                    }
                }else{
                    $this->Flash->error(__('El sector ' . $nuevo_sector . ' no se registró. En cambio ya fue asignado al sector existente'));
                    $this->loadModel('PresupuestoSector');
                    $condicion = ['sector' => $nuevo_sector, 'resolucion' => true];
                    $secuencia = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->last()->toArray();
                    $id_sector = $secuencia['id'];
                }
            }else{
                $this->loadModel('PresupuestoSector');
                $condicion = ['id' => $sector];
                $secuencia = $this->PresupuestoSector->find('all', ['conditions' => $condicion])->last()->toArray();
                $id_sector = $secuencia['id'];
            }

            //================================================================

            if($nuevo_programa != null){
                $this->loadModel('PresupuestoPrograma');
                $condicion = ['id_sector' => $id_sector, 'programa' => $nuevo_programa, 'resolucion' => true];
                $query = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->count();

                if($query == 0){
                    $add_programa = $this->PresupuestoPrograma->newEntity();
                    $add_programa = $this->PresupuestoPrograma->patchEntity($add_programa, $this->request->getData());

                    $add_programa->id_sector = $id_sector;
                    $add_programa->programa = $nuevo_programa;
                    $add_programa->denominacion = $denominacion_programa;
                    $add_programa->resolucion = true;
                    $add_programa->n_resolucion = $rel;

                    if (!$this->PresupuestoPrograma->save($add_programa)) {
                        $this->Flash->error(__('No se ha podido registrar el programa'));
                        return $this->redirect(['action' => 'categorias', $rel]);
                    }else{
                        $this->loadModel('PresupuestoPrograma');
                        $condicion = ['id_sector' => $id_sector, 'programa' => $nuevo_programa, 'resolucion' => true];
                        $secuencia = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                        $id_programa = $secuencia['id'];
                    }
                }else{
                    $this->Flash->error(__('El programa ' . $nuevo_programa . ' no se registró. En cambio ya fue asignado al programa existente'));
                    $this->loadModel('PresupuestoPrograma');
                    $condicion = ['id_sector' => $id_sector, 'programa' => $nuevo_programa, 'resolucion' => true];
                    $secuencia = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                    $id_programa = $secuencia['id'];
                }
            }else{
                $this->loadModel('PresupuestoPrograma');
                $condicion = ['id_sector' => $id_sector, 'id' => $programa];
                $secuencia = $this->PresupuestoPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                $id_programa = $secuencia['id'];
            }

            //================================================================

            if($nuevo_subprograma != null){
                $this->loadModel('PresupuestoSubPrograma');
                $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'sub_programa' => $nuevo_subprograma, 'resolucion' => true];
                $query = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->count();

                if($query == 0){
                    $add_subprograma = $this->PresupuestoSubPrograma->newEntity();
                    $add_subprograma = $this->PresupuestoSubPrograma->patchEntity($add_subprograma, $this->request->getData());

                    $add_subprograma->id_sector = $id_sector;
                    $add_subprograma->id_programa = $id_programa;
                    $add_subprograma->sub_programa = $nuevo_subprograma;
                    $add_subprograma->denominacion = $denominacion_subprograma;
                    $add_subprograma->resolucion = true;
                    $add_subprograma->n_resolucion = $rel;

                    if (!$this->PresupuestoSubPrograma->save($add_subprograma)) {
                        $this->Flash->error(__('No se ha podido registrar el subprograma'));
                        return $this->redirect(['action' => 'categorias', $rel]);
                    }else{
                        $this->loadModel('PresupuestoSubPrograma');
                        $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'sub_programa' => $nuevo_subprograma, 'resolucion' => true];
                        $secuencia = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                        $id_sub_programa = $secuencia['id'];
                    }
                }else{
                    $this->Flash->error(__('El subprograma ' . $nuevo_subprograma . ' no se registró. En cambio ya fue asignado al programa existente'));
                    $this->loadModel('PresupuestoSubPrograma');
                    $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'sub_programa' => $nuevo_subprograma, 'resolucion' => true];
                    $secuencia = $this->PresupuestoSubPrograma->find('all', ['conditions' => $condicion])->last()->toArray();
                    $id_sub_programa = $secuencia['id'];
                }
            }else{
                $this->loadModel('PresupuestoSubPrograma');
                $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id' => $subprograma];
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
                $forma2103->resolucion = true;
                $forma2103->n_resolucion = $rel;

                if ($this->PresupuestoForma2103->save($forma2103)) {

                    $this->Flash->success(__('Categoria Programática almacenada'));
                    return $this->redirect(['action' => 'categorias', $rel]);
                }
                $this->Flash->error(__('No se ha podido registrar la partida'));
            }else{
                $this->Flash->error(__('Ingrese los datos correctamente'));
                return $this->redirect(['action' => 'categorias', $rel]);
            }
        }
        @$this->set(compact('forma2103'));
    }

    public function delete($id = null, $rel = null){

        $this->loadModel('PresupuestoForma2103');
        $condicion = ['id' => $id];
        $query = $this->PresupuestoForma2103->find('all', ['conditions' => $condicion])->last()->toArray();

        $this->loadModel('ViewPresupuestoForma2121');
        $condicion = ['id_sector' => $query['id_sector'], 'id_programa' => $query['id_programa'], 'id_sub_programa' => $query['id_sub_programa'], 'resolucion' => true];
        $n = $this->ViewPresupuestoForma2121->find('all', ['conditions' => $condicion])->count();

        if($n == 0){

            $this->loadModel('PresupuestoActividad');
            $this->PresupuestoActividad->deleteAll(['id_sector IN' => $query['id_sector'], 'id_programa IN' => $query['id_programa'], 'id_sub_programa IN' => $query['id_sub_programa'], 'resolucion IN' => true]);

            $this->loadModel('PresupuestoProyecto');
            $this->PresupuestoProyecto->deleteAll(['id_sector IN' => $query['id_sector'], 'id_programa IN' => $query['id_programa'], 'id_sub_programa IN' => $query['id_sub_programa'], 'resolucion IN' => true]);


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

        return $this->redirect(['action' => 'categorias', $rel]);
    }

    public function deleteajuste($id = null, $rel = null){

        $this->loadModel('PresupuestoForma2121Ajuste');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoForma2121Ajuste->get($id);
        if ($this->PresupuestoForma2121Ajuste->delete($data)) {
            $this->Flash->success(__('Ajuste Eliminado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'opcion', $rel]);
    }

    public function proyecto($rel = null, $s = null, $p = null, $sp = null, $us = null){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        if($rel != null){
            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $n = $deno_rel->count();
            $deno_rel = $deno_rel->last();

            if($n != 0){
                $this->set('rel', $rel);
                $this->set('deno_rel', $deno_rel['denominacion']);
            }else{
                $this->set('rel', 0);
            }
        }else{
            $this->set('rel', 0);
        }

        if($s != null and $p != null and $sp != null and $rel != null){
            $this->set('id_sector', $s);
            $this->set('id_programa', $p);
            $this->set('id_sub_programa', $sp);
            $this->set('rel', $rel);
            $this->set('us', $us);

             //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('PresupuestoProyecto');
            $proyecto = $this->PresupuestoProyecto->newEntity();
            
            if ($this->request->is('post')) {
                $proyecto = $this->PresupuestoProyecto->patchEntity($proyecto, $this->request->getData());
                $proyecto->ano = ANO_FISCAL;
                $proyecto->resolucion = true;
                $proyecto->n_resolucion = $rel;

                if ($this->PresupuestoProyecto->save($proyecto)) {
                    $this->Flash->success(__('Proyecto registrado'));
                    return $this->redirect(['action' => 'opcion', @$rel, $s, $p, $sp, $us]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            $this->set(compact('proyecto'));
        }else{
            return $this->redirect(['action' => 'opcion', @$rel, $s, $p, $sp, $us]);
        }

    }

    public function actividad($rel = null, $s = null, $p = null, $sp = null, $us = null){
        //========================================================
        //Selecciona el Layout de Presupuestos
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        if($rel != null){
            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $n = $deno_rel->count();
            $deno_rel = $deno_rel->last();

            if($n != 0){
                $this->set('rel', $rel);
                $this->set('deno_rel', $deno_rel['denominacion']);
            }else{
                $this->set('rel', 0);
            }
        }else{
            $this->set('rel', 0);
        }

        if($s != null and $p != null and $sp != null and $rel != null){
            $this->set('id_sector', $s);
            $this->set('id_programa', $p);
            $this->set('id_sub_programa', $sp);
            $this->set('rel', $rel);
            $this->set('us', $us);

             //========================================================
            //Almacena los datos ingresados
            //========================================================
            $this->loadModel('PresupuestoActividad');
            $actividad = $this->PresupuestoActividad->newEntity();
            
            if ($this->request->is('post')) {
                $actividad = $this->PresupuestoActividad->patchEntity($actividad, $this->request->getData());
                $actividad->ano = ANO_FISCAL;
                $actividad->resolucion = true;
                $actividad->n_resolucion = $rel;

                if ($this->PresupuestoActividad->save($actividad)) {
                    $this->Flash->success(__('Actividad registrado'));
                    return $this->redirect(['action' => 'opcion', @$rel, $s, $p, $sp, $us]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            $this->set(compact('actividad'));
        }else{
            return $this->redirect(['action' => 'opcion', @$rel, $s, $p, $sp, $us]);
        }

    }


    public function deleteproyecto($id = null, $s = null, $p = null, $sp = null, $rel = null, $us = null){

       $this->loadModel('PresupuestoProyecto');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoProyecto->get($id);
        if ($this->PresupuestoProyecto->delete($data)) {
            $this->Flash->success(__('El proyecto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'opcion', $rel, $s, $p, $sp, $us]);
    }

    
    public function deleteactividad($id = null, $s = null, $p = null, $sp = null, $rel = null, $us = null){

       $this->loadModel('PresupuestoActividad');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoActividad->get($id);
        if ($this->PresupuestoActividad->delete($data)) {
            $this->Flash->success(__('La actividad ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'opcion', $rel, $s, $p, $sp, $us]);
    }



    public function ajuste($rel = null, $id_sector = null, $id_programa = null, $id_sub_programa = null, $id_proyecto = null, $id_actividad = null, $us = null)
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

        if($rel != null){
            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $n = $deno_rel->count();
            $deno_rel = $deno_rel->last();

            if($n != 0){
                $this->set('rel', $rel);
                $this->set('deno_rel', $deno_rel['denominacion']);
            }else{
                $this->set('rel', 0);
            }
        }else{
            $this->set('rel', 0);
        }

        if($id_sector != null and $id_programa != null and $id_sub_programa != null and $id_proyecto != null and $id_actividad != null  and $rel != null){

            $this->set('id_sector', $id_sector);
            $this->set('id_programa', $id_programa);
            $this->set('id_sub_programa', $id_sub_programa);
            $this->set('id_proyecto', $id_proyecto);
            $this->set('id_actividad', $id_actividad);
            $this->set('rel', $rel);
            $this->set('us', $us);

            if($id_proyecto != 0){
                $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa, 'id_proyecto' => $id_proyecto];
            }else if($id_actividad != 0){
                $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa, 'id_actividad' => $id_actividad];
            }

            $this->loadModel('ViewPresupuestoForma2121Disponible');
            $data = $this->paginate($this->ViewPresupuestoForma2121Disponible->find('all')->where($condicion));
            $this->set(compact('data'));
        }else{
            $this->loadModel('ViewPresupuestoForma2121Disponible');
            $data = $this->paginate($this->ViewPresupuestoForma2121Disponible->find('all'));
            $this->set(compact('data'));
        }

        if($this->request->is('post')){

            if(@$this->request->data['rel'] != null){
                return $this->redirect(['action' => 'ajuste', $this->request->data['rel']]);
            }

            $us = ($this->request->data['unidad_solicitante'] == null) ? 0 : $this->request->data['unidad_solicitante'];

            if ($us == 0) {
                return $this->redirect(['action' => 'ajuste']);
            }

            $this->loadModel('ViewPresupuestoForma2121');
            $condicion = ['id' => $us];
            $aux = $this->ViewPresupuestoForma2121->find('all')->where($condicion)->last();

            $rel = $this->request->data['rel2'];
            $id_sector = $aux['id_sector'];
            $id_programa = $aux['id_programa'];
            $id_sub_programa = $aux['id_sub_programa'];
            $id_proyecto = ($aux['id_proyecto'] == null) ? 0 : $aux['id_proyecto'];
            $id_actividad = ($aux['id_actividad'] == null) ? 0 : $aux['id_actividad'];

            return $this->redirect(['action' => 'ajuste', $rel, $id_sector, $id_programa, $id_sub_programa, $id_proyecto, $id_actividad]);
            
        }

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('ViewEjecucionForma2121');

        $unidad_solicitante = $this->ViewEjecucionForma2121->find('all', ['order' => 'sector'])->toArray();
        $options = [];
        foreach ($unidad_solicitante as $key) 
        {
            $options[$key->id] = $key->sector . "." . $key->programa . "." . $key->proyecto.$key->actividad;
        } 
        $this->set('unidad_solicitante', $options);

        //========================================================
        //Carga del Select Sectores
        //========================================================
        $this->loadModel('Resoluciones');

        $resoluciones = $this->Resoluciones->find('all')->where(['n_resolucion <>' => 0])->order(['n_resolucion' => 'ASC'])->toArray();
        $options = [];
        foreach ($resoluciones as $key) 
        {
            $options[$key->n_resolucion] = $key->n_resolucion . " - " . strtoupper($key->denominacion);
        }
        $this->set('resoluciones', $options);
    }


    public function incrementar(){
        $this->request->allowMethod(['post', 'get', 'save']);

        $this->loadModel('PresupuestoForma2121Ajuste');
        $ajuste = $this->PresupuestoForma2121Ajuste->newEntity();
        
        $ajuste->resolucion = true;
        $ajuste->n_resolucion = $this->request->data['n_resolucion'];
        $ajuste->id_sector = $this->request->data['id_sector'];
        $ajuste->id_programa = $this->request->data['id_programa'];
        $ajuste->id_sub_programa = $this->request->data['id_sub_programa'];
        $ajuste->id_proyecto = @$this->request->data['id_proyecto'];
        $ajuste->id_actividad = @$this->request->data['id_actividad'];
        $ajuste->tipo_ajuste = $this->request->data['tipo_ajuste'];
        
        $ajuste->partida = $this->request->data['partida'];
        $ajuste->incrementar = $this->revertir_moneda($this->request->data['incrementar']);
        $ajuste->ano = ANO_FISCAL;

        if ($this->PresupuestoForma2121Ajuste->save($ajuste)) {
            $this->Flash->success(__('Partida Incrementada'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'ajuste', $this->request->data['n_resolucion'], $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa'], @$this->request->data['id_proyecto'], @$this->request->data['id_actividad'], @$this->request->data['us']]);
    }


    public function disminuir(){
        $this->request->allowMethod(['post', 'get', 'save']);

        $this->loadModel('PresupuestoForma2121Ajuste');
        $ajuste = $this->PresupuestoForma2121Ajuste->newEntity();

        $ajuste->resolucion = true;
        $ajuste->n_resolucion = $this->request->data['n_resolucion'];
        $ajuste->id_sector = $this->request->data['id_sector'];
        $ajuste->id_programa = $this->request->data['id_programa'];
        $ajuste->id_sub_programa = $this->request->data['id_sub_programa'];
        $ajuste->id_proyecto = @$this->request->data['id_proyecto'];
        $ajuste->id_actividad = @$this->request->data['id_actividad'];
        $ajuste->tipo_ajuste = $this->request->data['tipo_ajuste'];

        $ajuste->partida = $this->request->data['partida'];
        $ajuste->disminuir = $this->revertir_moneda($this->request->data['disminuir']);
        $ajuste->ano = ANO_FISCAL;

        if ($this->PresupuestoForma2121Ajuste->save($ajuste)) {
            $this->Flash->success(__('Partida Disminuida'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'ajuste', $this->request->data['n_resolucion'], $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa'], @$this->request->data['id_proyecto'], @$this->request->data['id_actividad'], @$this->request->data['us']]);
    }


    //====================================================================================================================
    
    public function proyectos($rel = null, $id_sector = null, $id_programa = null, $id_sub_programa = null, $us = null)
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
        if($rel != null){
            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $n = $deno_rel->count();
            $deno_rel = $deno_rel->last();

            if($n != 0){
                $this->set('rel', $rel);
                $this->set('deno_rel', $deno_rel['denominacion']);
            }else{
                $this->set('rel', 0);
            }
        }else{
            $this->set('rel', 0);
        }

        if($id_sector != null and $id_programa != null and $id_sub_programa != null and $rel != null){
            $this->set('id_sector', $id_sector);
            $this->set('id_programa', $id_programa);
            $this->set('id_sub_programa', $id_sub_programa);
            $this->set('rel', $rel);
            $this->set('us', $us);
        }

        //========================================================
        //Carga todos los datos y los muestra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2121');
        $condicion = ['ano' => ANO_FISCAL, 'resolucion' => true, 'n_resolucion' => $rel, 'id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa];
        $registros = $this->paginate($this->ViewPresupuestoForma2121->find('all')->where($condicion)->order(['sector' => 'ASC', 'programa' => 'ASC']));
        $this->set(compact('registros'));

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('PresupuestoActividad');
        $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa];
        $actividades = $this->PresupuestoActividad->find('all')->where($condicion)->order(['actividad' => 'ASC'])->toArray();
        $options = [];
        foreach ($actividades as $key) 
        {
            $options[$key->id] = $key->actividad;
        } 
        $this->set('actividades', $options);

        $this->loadModel('PresupuestoProyecto');
        $condicion = ['id_sector' => $id_sector, 'id_programa' => $id_programa, 'id_sub_programa' => $id_sub_programa];
        $proyectos = $this->PresupuestoProyecto->find('all')->where($condicion)->order(['proyecto' => 'ASC'])->toArray();
        $options = [];
        foreach ($proyectos as $key) 
        {
            $options[$key->id] = $key->proyecto;
        } 
        $this->set('proyectos', $options);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('PresupuestoForma2121');
        $forma2121 = $this->PresupuestoForma2121->newEntity();

        if ($this->request->is('post')) {

            if(@$this->request->data['rel'] != null){
                return $this->redirect(['action' => 'proyectos', $rel, $id_sector, $id_programa, $id_sub_programa, $us]);
            }

            $forma2121 = $this->PresupuestoForma2121->patchEntity($forma2121, $this->request->getData());
            $forma2121->resolucion = true;
            $forma2121->n_resolucion = $rel;

            if ($this->PresupuestoForma2121->save($forma2121)) {

                $this->Flash->success(__('Presupuesto Almacenado'));
                return $this->redirect(['action' => 'proyectos', $rel, $id_sector, $id_programa, $id_sub_programa, $us]);
            }
            $this->Flash->error(__('No se ha podido registrar el Presupuesto'));
        }
        $this->set(compact('forma2121'));
    }



    public function deleteproyectos($id = null, $rel = null, $id_sector = null, $id_programa = null, $id_sub_programa = null, $us = null)
    {
        $this->loadModel('PresupuestoForma2121');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoForma2121->get($id);
        if ($this->PresupuestoForma2121->delete($data)) {
            $this->Flash->success(__('El Presupuesto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'proyectos', $rel, $id_sector, $id_programa, $id_sub_programa, $us]);
    }


     public function partidas($s = null, $p = null, $sp = null, $proy = null, $act = null, $rel = null, $us = null){
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

        if($s != null and $p != null and $sp != null and $act != null and $proy != null and $rel != null){
            $this->set('s', $s);
            $this->set('p', $p);
            $this->set('sp', $sp);
            $this->set('rel', $rel);
            $this->set('us', $us);

            $this->loadModel('Resoluciones');
            $deno_rel = $this->Resoluciones->find('all')->where(['n_resolucion' => $rel]);
            $deno_rel = $deno_rel->last();
            $this->set('deno_rel', $deno_rel['denominacion']);

            if($act != 0){
                $this->set('act', $act);

                //========================================================
                //Carga todos los datos y los mustra en una paginacion
                //========================================================
                $this->loadModel('ViewPresupuestoForma2121Partidas');
                $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp, 'id_actividad' => $act, 'resolucion' => true];
                $registros = $this->paginate($this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion)->order(['concatenado' => 'ASC']));
                $this->set(compact('registros'));
            }

            if($proy != 0){
                $this->set('proy', $proy);

                //========================================================
                //Carga todos los datos y los mustra en una paginacion
                //========================================================
                $this->loadModel('ViewPresupuestoForma2121Partidas');
                $condicion = ['id_sector' => $s, 'id_programa' => $p, 'id_sub_programa' => $sp, 'id_proyecto' => $proy, 'resolucion' => true];
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
                $ordinal->monto = $this->request->data['monto'];
                $ordinal->resolucion = true;
                $ordinal->n_resolucion = $rel;

                //=====================================================================================

                $proyecto = $this->PresupuestoForma2121Partidas->patchEntity($proyecto, $this->request->getData());
                $proyecto->ano = ANO_FISCAL; 
                $proyecto->resolucion = true; 
                $proyecto->n_resolucion = $rel;

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
                    return $this->redirect(['action' => 'partidas', $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa'], $proy, $act, $rel, $us]);
                }
                $this->Flash->error(__('Error. Intente de nuevo'));
            }
            $this->set(compact('proyecto'));
        }else{
            return $this->redirect(['action' => 'proyectos', $rel, $s, $p, $sp, $us]);
        }
    }

    public function deletepartida($id = null, $s = null, $p = null, $sp = null, $proy = null, $act = null, $rel = null){

       $this->loadModel('PresupuestoForma2121Partidas');
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->PresupuestoForma2121Partidas->get($id);
        if ($this->PresupuestoForma2121Partidas->delete($data)) {
            $this->Flash->success(__('La partida ha sido eliminado.'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }
        return $this->redirect(['action' => 'partidas', $s, $p, $sp, $proy, $act, $rel]);
    }

    //====================================================================================================================






    public function editarpartidarel(){
        $this->request->allowMethod(['post', 'get', 'save']);

        $this->loadModel('ViewPresupuestoForma2121Partidas');
        $data = $this->ViewPresupuestoForma2121Partidas->find('all')->where(['id' => $this->request->data['id']])->last();
        $monto_viejo = $data['monto'];

        //============================================================================================================

        $this->loadModel('PresupuestoForma2121Partidas');
        $query = $this->PresupuestoForma2121Partidas->query();
        $query->update()
            ->set(['ingreso_propio' => $this->request->data['ingreso_propio'], 'situado' => $this->request->data['situado'], 'ingreso_estadal' => $this->request->data['ingreso_estadal'], 'ingreso_fci' => $this->request->data['ingreso_fci'], 'otra_fuente' => $this->request->data['otra_fuente'], 'monto' => $this->request->data['monto']])
            ->where(['id' => $this->request->data['id']])
            ->execute();

        //============================================================================================================
        
        $this->loadModel('PresupuestoOrdinal');
        $query = $this->PresupuestoOrdinal->query();
        $query->update()
            ->set(['monto' => $this->request->data['monto']])
            ->where(['id_sub_especifico' => $data['id_sub_especifico'], 'ordinal' => $data['ordinal']])
            ->execute();

        //============================================================================================================

        $this->loadModel('PresupuestoSubEspecifico');
        $actual = $this->PresupuestoSubEspecifico->find('all')->where(['id_especifico' => $data['id_especifico'], 'sub_especifico' => $data['sub_especifico']])->last();
        $actual = $actual['monto'];

        $query = $this->PresupuestoSubEspecifico->query();
        $query->update()
            ->set(['monto' => ($actual - $monto_viejo) + $this->request->data['monto']])
            ->where(['id_especifico' => $data['id_especifico'], 'sub_especifico' => $data['sub_especifico']])
            ->execute();

        //============================================================================================================

        $this->loadModel('PresupuestoEspecifico');
        $actual = $this->PresupuestoEspecifico->find('all')->where(['id_sub_ramo' => $data['id_sub_ramo'], 'especifico' => $data['especifico']])->last();
        $actual = $actual['monto'];

        $query = $this->PresupuestoEspecifico->query();
        $query->update()
            ->set(['monto' => ($actual - $monto_viejo) + $this->request->data['monto']])
            ->where(['id_sub_ramo' => $data['id_sub_ramo'], 'especifico' => $data['especifico']])
            ->execute();

        //============================================================================================================

        $this->loadModel('PresupuestoSubRamo');
        $actual = $this->PresupuestoSubRamo->find('all')->where(['id_ramo' => $data['id_ramo'], 'sub_ramo' => $data['sub_ramo']])->last();
        $actual = $actual['monto'];

        $query = $this->PresupuestoSubRamo->query();
        $query->update()
            ->set(['monto' => ($actual - $monto_viejo) + $this->request->data['monto']])
            ->where(['id_ramo' => $data['id_ramo'], 'sub_ramo' => $data['sub_ramo']])
            ->execute();

        //============================================================================================================

        $this->loadModel('PresupuestoRamo');
        $actual = $this->PresupuestoRamo->find('all')->where(['id' => $data['id_ramo']])->last();
        $actual = $actual['monto'];

        $query = $this->PresupuestoRamo->query();
        $query->update()
            ->set(['monto' => ($actual - $monto_viejo) + $this->request->data['monto']])
            ->where(['id' => $data['id_ramo']])
            ->execute();

        //============================================================================================================

        $this->Flash->success(__('Partida Actualizada'));

        return $this->redirect(['action' => 'partidas', $this->request->data['id_sector'], $this->request->data['id_programa'], $this->request->data['id_sub_programa'], @$this->request->data['id_proyecto'], @$this->request->data['id_actividad'], @$this->request->data['rel']]);
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
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetY(30);
        $pdf -> SetX(160);
        $pdf -> Cell(70,5,'ANALITICO DE DISPONIBILIDAD - '.ANO_FISCAL ,0,1,'C');

        $pdf-> ln();
        $pdf -> SetX(10);
        $pdf -> Cell(70,5, @$data[0]['sector']. '  --  ' . $this->mayus(@$data[0]['denominacion_sector']),0,1,'L');
        $pdf -> SetX(10);
        $pdf -> Cell(70,5, @$data[0]['programa']. '  --  ' . $this->mayus(@$data[0]['denominacion_programa']),0,1,'L');
        $pdf -> SetX(10);
        $pdf -> Cell(70,5, @$data[0]['proyecto']. @$data[0]['actividad'].'  --  ' . $this->mayus(@$data[0]['denominacion_proyecto'].@$data[0]['denominacion_actividad']),0,1,'L');



        $pdf -> SetY(67);


        $pdf -> SetFont('Arial','I',8);

        $monto_presupuesto = 0;
        $monto_ajustado = 0;
        $monto_actualizado = 0;
        $monto_comprometido = 0;
        $monto_disponible = 0;

        foreach ($data as $key) {
            $pdf -> SetX(5);
            $pdf -> Cell(30,5, $key['concatenado'] ,1,0,'C');
            $pdf -> Cell(130,5, $this->mayus($key['ordinald_denominacion']) ,1,0,'L');
            $pdf -> Cell(40,5, $this->moneda($key['monto_presupuesto']) ,1,0,'L');
            $pdf -> Cell(40,5, $this->moneda($key['monto_incremento']) ,1,0,'L');
            $pdf -> Cell(40,5,$this->moneda($key['monto_presupuesto'] + $key['monto_incremento']) ,1,0,'L');
            $pdf -> Cell(40,5, $this->moneda($key['monto_comprometido_nomina'] + $key['monto_comprometido_compra']),1,0,'L');
            $pdf -> Cell(40,5, $this->moneda(($key['monto_presupuesto'] + $key['monto_incremento']) - ($key['monto_comprometido_nomina'] + $key['monto_comprometido_compra'])),1,1,'L');

            $monto_presupuesto += $key['monto_presupuesto'];
            $monto_ajustado += $key['monto_incremento'];
            $monto_actualizado += $key['monto_presupuesto'] + $key['monto_incremento'];
            $monto_comprometido += $key['monto_comprometido_nomina'] + $key['monto_comprometido_compra'];
            $monto_disponible += ($key['monto_presupuesto'] + $key['monto_incremento']) - ($key['monto_comprometido_nomina'] + $key['monto_comprometido_compra']);
        }

            $pdf -> SetFont('Arial','B',8);
            // total con nombre otra vez del proyecto
            $pdf -> SetX(5);
            $pdf -> Cell(160,5,'TOTAL' ,1,0,'C');
            $pdf -> Cell(40,5, $this->moneda($monto_presupuesto) ,1,0,'L');
            $pdf -> Cell(40,5, $this->moneda($monto_ajustado) ,1,0,'L');
            $pdf -> Cell(40,5,$this->moneda($monto_actualizado) ,1,0,'L');
            $pdf -> Cell(40,5,$this->moneda($monto_comprometido) ,1,0,'L');
            $pdf -> Cell(40,5,$this->moneda($monto_disponible) ,1,0,'L');




    $pdf -> Output();
    }




    public function PresupuestoResolucion($n_resolucion = null){

        //==========================================================================

        $condicion = ['n_resolucion' => $n_resolucion];
        $this->loadModel('Resoluciones');
        $rel = $this->Resoluciones->find('all')->where($condicion)->last();

        //==========================================================================

        $this->loadModel('ViewPresupuestoForma2121Ajuste2');
        $data = $this->ViewPresupuestoForma2121Ajuste2->find()->where(['ano' => ANO_FISCAL, 'resolucion' => true, 'n_resolucion' => $n_resolucion])->toArray();

        //==========================================================================

        $condicion = ['resolucion' => true, 'n_resolucion' => $n_resolucion];
        $us = $this->ViewPresupuestoForma2121Ajuste2->find('all')->where($condicion)->toArray();

        $n = $this->ViewPresupuestoForma2121Ajuste2->find('all')->where($condicion)->count();
        $n_d = $this->ViewPresupuestoForma2121Ajuste2->find('all')->where($condicion)->where(['tipo_ajuste' => '-'])->count();
        $n_i = $this->ViewPresupuestoForma2121Ajuste2->find('all')->where($condicion)->where(['tipo_ajuste' => '+'])->count();

        //==========================================================================

        $this->loadModel('ViewPresupuestoForma2121Partidas');
        $ord = $this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion)->toArray();
        $n_ord = $this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion)->count();

        //==========================================================================

        $condicion = ['resolucion' => true, 'n_resolucion' => $n_resolucion];
        $this->loadModel('ViewPresupuestoForma2121Partidas');
        $query1 = $this->ViewPresupuestoForma2121Partidas->find('all')->order(['sector' => 'ASC'])->where($condicion);
        $query2 = $this->ViewPresupuestoForma2121Partidas->find('all')->order(['programa' => 'ASC'])->where($condicion);
        $query3 = $this->ViewPresupuestoForma2121Partidas->find('all')->order(['sub_programa' => 'ASC'])->where($condicion);
        $query4 = $this->ViewPresupuestoForma2121Partidas->find('all')->order(['actividad' => 'ASC','concatenado' => 'ASC'])->where($condicion);
        $query5 = $this->ViewPresupuestoForma2121Partidas->find('all')->order(['proyecto' => 'ASC', 'concatenado' => 'ASC'])->where($condicion);
        //==========================================================================


        
        $this->loadModel('ViewPresupuestoForma2121Partidas');
        $query = $this->ViewPresupuestoForma2121Partidas->find('all')->where($condicion);
            // DOCUMENTO DE RESOLUCION PARTE I
        
        //==========================================================================
       $pdf = new PDF_Resolucion();
        $pdf -> AddPage();
        $pdf -> SetFont('Arial','B',8);

        $pdf -> SetX(20);
        $pdf -> Cell(5,4,'Resolucion Nro  '.$n_resolucion ,0,0,'C');
        //$pdf -> Cell(160,4,'',0,0,'C');
        //$pdf -> Cell(10,4, date('d/m/Y').'  '. date('h:m:s'),0,1,'C'); // Fecha capturada del servidor al imprimir esto queda asi
        $pdf -> SetX(190);
        $pdf -> Cell(10,4,'Santa Ana de Coro; ' . date_format($rel['fecha'], 'd') . ' de ' . $this->mes_castellano(date_format($rel['fecha'], 'F')) . ' del ' . date_format($rel['fecha'], 'Y'),0,1,'R');


        //==============================================================================================
        //Acumuladores
        //==============================================================================================

         $general = 0;
         $partida = 0;
         $incremento = 0;
         $disminucion = 0;

        if($n_d != 0){
            foreach ($data as $key) {
                if($key['tipo_ajuste'] == '-'){
                    $disminucion += $key['disminuir'];
                }
            }
        }

        //==============================================================================================

         if($n_i != 0){
            foreach ($data as $key) {
                if($key['tipo_ajuste'] == '+'){
                    $incremento += $key['incrementar'];
                }
            }
        }

        //==============================================================================================

        $s = "x";

        //sectores
        foreach ($query1 as $key1) {
            if($s != $key1['sector']){
                $s = $key1['sector'];
                $p = "x";


                //programas
                foreach ($query2 as $key2) {
                    if($s == $key2['sector']){
                        if($p != $key2['programa']){
                            $p = $key2['programa'];
                            $sp = "x";

                
                            //sub-programas
                            foreach ($query3 as $key3) {
                                if($s == $key3['sector'] and $p == $key3['programa']){
                                    if($sp != $key3['sub_programa']){
                                        $sp = $key3['sub_programa'];
                                        $act = "x";
                                        $proy = "x";


                                        //actividad
                                        foreach ($query4 as $key4) {
                                            if($s == $key4['sector'] and $p == $key4['programa'] and $sp == $key4['sub_programa']  and $key4['actividad'] != null){
                                                if($act != $key4['actividad']){
                                                    $act = $key4['actividad'];
                                                    $total = 0;

                                                    foreach ($query as $reg) {
                                                        
                                                        if($s == $reg['sector'] and $p == $reg['programa'] and $sp == $reg['sub_programa'] and $act == $reg['actividad']){

                                                            @$partida += $reg['monto'];
                                                        }

                                                    }
                                                }
                                            }
                                        }

                                        //proyecto
                                        foreach ($query5 as $key4) {
                                            if($s == $key4['sector'] and $p == $key4['programa'] and $sp == $key4['sub_programa'] and $key4['proyecto'] != null){
                                                if($proy != $key4['proyecto']){
                                                    $proy = $key4['proyecto'];
                                                    $total = 0;

                                                    foreach ($query as $reg) {
                                                        
                                                        if($s == $reg['sector'] and $p == $reg['programa'] and $sp == $reg['sub_programa'] and $proy == $reg['proyecto']){

                                                            @$partida += $reg['monto'];
                                                        }

                                                    }
                                                }
                                            }
                                        }
                                        
                                    }
                                }
                            }

                        }
                    }
                }

            }
        }

        //==============================================================================================

        if ($disminucion == $incremento){
            $general = $partida + $incremento;
        } else if($disminucion == $partida){
            $general = $partida + $incremento;
        } else {
            $general = $partida + $incremento - $disminucion;
        }


        $pdf -> SetFont('Arial','I',8);
        $pdf -> SetX(10);
        $pdf->MultiCell(190,5,$this->mayus($rel['denominacion']),0,'J',0);

        $pdf -> SetFont('Arial','B',10);
        $pdf -> SetX(150);
        $pdf -> Cell(50,5,'Total Resolucion:',0,1,'C');
        $pdf -> SetX(150);
        $pdf -> Cell(50,5, number_format(@$general, 2, ',', '.'), 1, 1,'C');


         $general = 0;
         $partida = 0;
         $incremento = 0;
         $disminucion = 0;

        //EN CASO QUE EXISTA









































































         //=========================================================================================================
         //=========================================================================================================
         //============================================ Disminucion    ==============================================
         //=========================================================================================================
         //=========================================================================================================
         //=========================================================================================================

       $pdf -> SetFont('Arial','B',10);


        if($n_d != 0){
        //$pdf->SetTextColor(000,000,000);

            $s = 0;
            $p = 0;
            $proy = 0;
            $act = 0;

            foreach ($data as $reg) {

                if($key['tipo_ajuste'] == '-'){

                    if($s != $reg['sector'] or $p != $reg['programa'] or (($act != $reg['actividad'] and $reg['actividad'] == null) or ($proy != $reg['proyecto'] and $reg['proyecto'] == null))){


                        $s = $reg['sector'];
                        $p = $reg['programa'];
                        $act = $reg['actividad'];
                        $proy = $reg['proyecto'];

                        $pdf->ln();

                        $pdf -> SetFont('Arial','B',8);
                        $pdf -> SetX(10);
                        $pdf -> Cell(195,5,'DISMINUIR',1,0,'C');
                        $pdf->ln();

                        $pdf -> SetX(10);
                        $pdf -> SetFont('Arial','B',7);
                        $pdf -> Cell(100,4,' SECTOR',0,0,'L');
                        
                        $pdf -> SetX(30);
                        $pdf -> SetFont('Arial','',7);
                        $pdf -> Cell(100,4, @$reg['sector'],0,0,'L');
                        
                        $pdf -> SetX(35);
                        $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg['denominacion_sector'])),0,1,'L');

                        $pdf -> SetX(10);
                        $pdf -> SetFont('Arial','B',7);
                        $pdf -> Cell(100,4,'PROGRAMA',0,0,'L');
                        
                        $pdf -> SetX(30);
                        $pdf -> SetFont('Arial','',7);
                        $pdf -> Cell(100,4, @$reg['programa'],0,0,'L');
                        
                        $pdf -> SetX(35);
                        $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg['denominacion_programa'])),0,1,'L');

                        $pdf -> SetX(10);
                        
                        $pdf -> SetFont('Arial','B',7);
                        if($reg['proyecto'] != ''){
                            $pdf -> Cell(100,4,'PROYECTO',0,0,'L');
                        }else{
                            $pdf -> Cell(100,4,'ACTIVIDAD',0,0,'L');
                        }
                        
                        $pdf -> SetX(30);
                        $pdf -> SetFont('Arial','',7);
                        $pdf -> Cell(100,4, @$reg['proyecto'].@$reg['actividad'],0,0,'L');
                        
                        $pdf -> SetX(35);
                        $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg['denominacion_proyecto'])) . strtoupper(utf8_decode(@$reg['denominacion_actividad'])),0,1,'L');

                        $y = $pdf-> GetY();
                        $pdf -> SetY($y+2);
                        $pdf -> SetFont('Arial','B',8);

                        $pdf -> SetX(10);
                        $pdf -> Cell(25,5,'PARTIDA ',1,0,'C');
                        $pdf -> Cell(140,5,'DENOMINACION',1,0,'J');
                        $pdf -> Cell(30,5,'MONTO',1,1,'C');

                        $pdf -> SetFont('Arial','',7);

                        foreach ($data as $reg2) {

                            if($reg['sector'] == $reg2['sector'] and $reg['programa'] == $reg2['programa'] and $reg['actividad'] == $reg2['actividad'] and $reg['proyecto'] == $reg2['proyecto']){
                                $y = $pdf->GetY(110);
                                $x = $pdf->GetX(5);

                                $pdf -> SetFont('Arial','I',8);
                                $pdf->SetXY($x ,$y);
                                $pdf->MultiCell($x + 15,3,$reg2['partida'],0,'C',0);

                                $pdf -> SetFont('Arial','I',8);
                                $pdf->SetXY($x + 25,$y);
                                $pdf->MultiCell(140,3,$this->mayus($reg2['denominacion_partida']),0,'J',0);

                                $pdf->SetXY($x + 165,$y);
                                $pdf->MultiCell(30,3,number_format($reg2['disminuir'], 2, ',', '.'),0,'R',0);

                                $pdf->SetXY($x + 160,$y);

                                $pdf->SetXY($x + 170,$y + 4);
                                $pdf->MultiCell(25,3,'',0,'C',0);

                                @$total += $reg2['disminuir'];
                            }
                        }

                        $pdf -> ln();

                        $pdf -> SetFont('Arial','B',8);

                        $pdf ->SetX(10);
                        $pdf -> Cell(140, 4, '', 0, 0,'C');
                        $pdf -> Cell(25, 4, 'Total', 1, 0,'C');
                        $pdf -> Cell(30,4, number_format(@$total, 2, ',', '.'), 1, 1,'R');


                        $y = $pdf -> GetY();
                        if($y > 240){
                            $pdf -> AddPage();
                        }

                        if($y > 240){
                            $pdf -> SetX(20);
                            $pdf -> Cell(5,4,'Resolucion Nro  '.$n_resolucion ,0,0,'C');
                            //$pdf -> Cell(160,4,'',0,0,'C');
                            //$pdf -> Cell(10,4, date('d/m/Y').'  '. date('h:m:s'),0,1,'C'); // Fecha capturada del servidor al imprimir esto queda asi
                            $pdf -> SetX(190);
                            $pdf -> Cell(10,4,'Santa Ana de Coro; ' . date_format($rel['fecha'], 'd') . ' de ' . $this->mes_castellano(date_format($rel['fecha'], 'F')) . ' del ' . date_format($rel['fecha'], 'Y'),0,1,'R');

                            $pdf -> SetFont('Arial','I',8);
                            $pdf -> SetX(10);
                            $pdf->MultiCell(190,5,$this->mayus($rel['denominacion']),0,'J',0);

                        }

                    }
                }
            }
        }











































        //=========================================================================================================
         //=========================================================================================================
         //============================================ INCREMENTO    ==============================================
         //=========================================================================================================
         //=========================================================================================================
         //=========================================================================================================


        $pdf -> SetFont('Arial','B',10);


        if($n_i != 0){
        //$pdf->SetTextColor(000,000,000);

            $s = 0;
            $p = 0;
            $proy = 0;
            $act = 0;

            foreach ($data as $reg) {

                if($key['tipo_ajuste'] == '+'){

                    if($s != $reg['sector'] or $p != $reg['programa'] or (($act != $reg['actividad']) or ($proy != $reg['proyecto']))){


                        $s = $reg['sector'];
                        $p = $reg['programa'];
                        $act = $reg['actividad'];
                        $proy = $reg['proyecto'];

                        $pdf->ln();

                        $pdf -> SetFont('Arial','B',8);
                        $pdf -> SetX(10);
                        $pdf -> Cell(195,5,'INCREMENTAR',1,0,'C');
                        $pdf->ln();

                        $pdf -> SetX(10);
                        $pdf -> SetFont('Arial','B',7);
                        $pdf -> Cell(100,4,' SECTOR',0,0,'L');
                        
                        $pdf -> SetX(30);
                        $pdf -> SetFont('Arial','',7);
                        $pdf -> Cell(100,4, @$reg['sector'],0,0,'L');
                        
                        $pdf -> SetX(35);
                        $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg['denominacion_sector'])),0,1,'L');

                        $pdf -> SetX(10);
                        $pdf -> SetFont('Arial','B',7);
                        $pdf -> Cell(100,4,'PROGRAMA',0,0,'L');
                        
                        $pdf -> SetX(30);
                        $pdf -> SetFont('Arial','',7);
                        $pdf -> Cell(100,4, @$reg['programa'],0,0,'L');
                        
                        $pdf -> SetX(35);
                        $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg['denominacion_programa'])),0,1,'L');

                        $pdf -> SetX(10);
                        
                        $pdf -> SetFont('Arial','B',7);
                        if($reg['proyecto'] != ''){
                            $pdf -> Cell(100,4,'PROYECTO',0,0,'L');
                        }else{
                            $pdf -> Cell(100,4,'ACTIVIDAD',0,0,'L');
                        }
                        
                        $pdf -> SetX(30);
                        $pdf -> SetFont('Arial','',7);
                        $pdf -> Cell(100,4, @$reg['proyecto'].@$reg['actividad'],0,0,'L');
                        
                        $pdf -> SetX(35);
                        $pdf -> Cell(100,4, strtoupper(utf8_decode(@$reg['denominacion_proyecto'])) . strtoupper(utf8_decode(@$reg['denominacion_actividad'])),0,1,'L');

                        $y = $pdf-> GetY();
                        $pdf -> SetY($y+2);
                        $pdf -> SetFont('Arial','B',8);

                        $pdf -> SetX(10);
                        $pdf -> Cell(25,5,'PARTIDA ',1,0,'C');
                        $pdf -> Cell(140,5,'DENOMINACION',1,0,'J');
                        $pdf -> Cell(30,5,'MONTO',1,1,'C');

                        $pdf -> SetFont('Arial','',7);

                        foreach ($data as $reg2) {

                            if($reg['sector'] == $reg2['sector'] and $reg['programa'] == $reg2['programa'] and $reg['actividad'] == $reg2['actividad'] and $reg['proyecto'] == $reg2['proyecto']){

                                $y = $pdf->GetY(110);
                                $x = $pdf->GetX(5);

                                $pdf -> SetFont('Arial','I',8);
                                $pdf->SetXY($x ,$y);
                                $pdf->MultiCell($x + 15,3,$reg2['partida'],0,'C',0);

                                $pdf -> SetFont('Arial','I',8);
                                $pdf->SetXY($x + 25,$y);
                                $pdf->MultiCell(140,3,$this->mayus($reg2['denominacion_partida']),0,'J',0);

                                $pdf->SetXY($x + 165,$y);
                                $pdf->MultiCell(30,3,number_format($reg2['incrementar'], 2, ',', '.'),0,'R',0);

                                $pdf->SetXY($x + 160,$y);

                                $pdf->SetXY($x + 170,$y + 4);
                                $pdf->MultiCell(25,3,'',0,'C',0);

                                @$total += $reg2['incrementar'];
                            }
                        }


                        $pdf -> ln();

                        $pdf -> SetFont('Arial','B',8);

                        $pdf ->SetX(10);
                        $pdf -> Cell(140, 4, '', 0, 0,'C');
                        $pdf -> Cell(25, 4, 'Total', 1, 0,'C');
                        $pdf -> Cell(30,4, number_format(@$total, 2, ',', '.'), 1, 1,'R');
                        $total = 0;


                        $y = $pdf -> GetY();
                        if($y > 240){
                            $pdf -> AddPage();
                        }

                        if($y > 240){
                            $pdf -> SetX(20);
                            $pdf -> Cell(5,4,'Resolucion Nro  '.$n_resolucion ,0,0,'C');
                            //$pdf -> Cell(160,4,'',0,0,'C');
                            //$pdf -> Cell(10,4, date('d/m/Y').'  '. date('h:m:s'),0,1,'C'); // Fecha capturada del servidor al imprimir esto queda asi
                            $pdf -> SetX(190);
                            $pdf -> Cell(10,4,'Santa Ana de Coro; ' . date_format($rel['fecha'], 'd') . ' de ' . $this->mes_castellano(date_format($rel['fecha'], 'F')) . ' del ' . date_format($rel['fecha'], 'Y'),0,1,'R');

                            $pdf -> SetFont('Arial','I',8);
                            $pdf -> SetX(10);
                            $pdf->MultiCell(190,5,$this->mayus($rel['denominacion']),0,'J',0);

                        }

                    }
                }
            }
        }




























        //=========================================================================================================
         //=========================================================================================================
         //============================================ CREACION    ==============================================
         //=========================================================================================================
         //=========================================================================================================
         //=========================================================================================================


        if($n_i != 0 and $n_d != 0){
            $pdf -> AddPage();
        }
        //$pdf->SetTextColor(000,000,000);

        $s = "x";

        //sectores
        foreach ($query1 as $key1) {
            if($s != $key1['sector']){
                $s = $key1['sector'];
                $p = "x";


                //programas
                foreach ($query2 as $key2) {
                    if($s == $key2['sector']){
                        if($p != $key2['programa']){
                            $p = $key2['programa'];
                            $sp = "x";

                
                            //sub-programas
                            foreach ($query3 as $key3) {
                                if($s == $key3['sector'] and $p == $key3['programa']){
                                    if($sp != $key3['sub_programa']){
                                        $sp = $key3['sub_programa'];
                                        $act = "x";
                                        $proy = "x";


                                        //actividad
                                        foreach ($query4 as $key4) {
                                            if($s == $key4['sector'] and $p == $key4['programa'] and $sp == $key4['sub_programa']  and $key4['actividad'] != null){
                                                if($act != $key4['actividad']){
                                                    $act = $key4['actividad'];
                                                    $total = 0;

                                                    $pdf->ln();
                                                    $pdf -> SetFont('Arial','B',8);
                                                    $pdf -> SetX(10);
                                                    $pdf -> Cell(195,5,'CREACION DE PARTIDA O ORDINALES',1,0,'C');
                                                    $pdf->ln();

                                                    $pdf -> SetX(10);
                                                    $pdf -> SetFont('Arial','B',7);
                                                    $pdf -> Cell(100,4,' SECTOR',0,0,'L');
                                                    
                                                    $pdf -> SetX(30);
                                                    $pdf -> SetFont('Arial','',7);
                                                    $pdf -> Cell(100,4, @$key4['sector'],0,0,'L');
                                                    
                                                    $pdf -> SetX(35);
                                                    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$key4['denominacion_sector'])),0,1,'L');

                                                    $pdf -> SetX(10);
                                                    $pdf -> SetFont('Arial','B',7);
                                                    $pdf -> Cell(100,4,'PROGRAMA',0,0,'L');
                                                    
                                                    $pdf -> SetX(30);
                                                    $pdf -> SetFont('Arial','',7);
                                                    $pdf -> Cell(100,4, @$key4['programa'],0,0,'L');
                                                    
                                                    $pdf -> SetX(35);
                                                    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$key4['denominacion_programa'])),0,1,'L');

                                                    $pdf -> SetX(10);
                                                    
                                                    $pdf -> SetFont('Arial','B',7);
                                                    
                                                    $pdf -> Cell(100,4,'ACTIVIDAD',0,0,'L');
                                                    
                                                    
                                                    $pdf -> SetX(30);
                                                    $pdf -> SetFont('Arial','',7);
                                                    $pdf -> Cell(100,4, @$key4['actividad'],0,0,'L');
                                                    
                                                    $pdf -> SetX(35);
                                                    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$key4['denominacion_actividad'])),0,1,'L');

                                                    $y = $pdf-> GetY();
                                                    $pdf -> SetY($y+2);
                                                    $pdf -> SetFont('Arial','B',8);

                                                    $pdf -> SetX(10);
                                                    $pdf -> Cell(25,5,'PARTIDA ',1,0,'C');
                                                    $pdf -> Cell(140,5,'DENOMINACION',1,0,'J');
                                                    $pdf -> Cell(30,5,'MONTO',1,1,'C');

                                                    $pdf -> SetFont('Arial','',7);

                                                    foreach ($query as $reg) {
                                                        
                                                        if($s == $reg['sector'] and $p == $reg['programa'] and $sp == $reg['sub_programa'] and $act == $reg['actividad']){

                                                            $y = $pdf->GetY(110);
                                                            $x = $pdf->GetX(5);

                                                            $pdf -> SetFont('Arial','I',8);
                                                            $pdf->SetXY($x ,$y);
                                                            $pdf->MultiCell($x + 15,3,$reg['concatenado'],0,'C',0);

                                                            $pdf -> SetFont('Arial','I',8);
                                                            $pdf->SetXY($x + 25,$y);
                                                            $pdf->MultiCell(140,3,$this->mayus($reg['ordinald_denominacion']),0,'J',0);

                                                            $pdf->SetXY($x + 165,$y);
                                                            $pdf->MultiCell(30,3,number_format($reg['monto'], 2, ',', '.'),0,'R',0);

                                                            $pdf->SetXY($x + 160,$y);

                                                            $pdf->SetXY($x + 170,$y + 4);
                                                            $pdf->MultiCell(25,3,'',0,'R',0);

                                                            @$total += $reg['monto'];
                                                        }

                                                    }

                                                    $pdf -> ln();

                                                    $pdf -> SetFont('Arial','B',8);

                                                    $pdf ->SetX(10);
                                                    $pdf -> Cell(140, 4, '', 0, 0,'C');
                                                    $pdf -> Cell(25, 4, 'Total', 1, 0,'C');
                                                    $pdf -> Cell(30,4, number_format(@$total, 2, ',', '.'), 1, 1,'R');

                                                }
                                            }
                                        }

                                        //proyecto
                                        foreach ($query5 as $key4) {
                                            if($s == $key4['sector'] and $p == $key4['programa'] and $sp == $key4['sub_programa'] and $key4['proyecto'] != null){
                                                if($proy != $key4['proyecto']){
                                                    $proy = $key4['proyecto'];
                                                    $total = 0;

                                                    $pdf->ln();
                                                    $pdf -> SetFont('Arial','B',8);
                                                    $pdf -> SetX(10);
                                                    $pdf -> Cell(195,5,'CREACION DE PARTIDA O ORDINALES',1,0,'C');
                                                    $pdf->ln();

                                                    $pdf -> SetX(10);
                                                    $pdf -> SetFont('Arial','B',7);
                                                    $pdf -> Cell(100,4,' SECTOR',0,0,'L');
                                                    
                                                    $pdf -> SetX(30);
                                                    $pdf -> SetFont('Arial','',7);
                                                    $pdf -> Cell(100,4, @$key4['sector'],0,0,'L');
                                                    
                                                    $pdf -> SetX(35);
                                                    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$key4['denominacion_sector'])),0,1,'L');

                                                    $pdf -> SetX(10);
                                                    $pdf -> SetFont('Arial','B',7);
                                                    $pdf -> Cell(100,4,'PROGRAMA',0,0,'L');
                                                    
                                                    $pdf -> SetX(30);
                                                    $pdf -> SetFont('Arial','',7);
                                                    $pdf -> Cell(100,4, @$key4['programa'],0,0,'L');
                                                    
                                                    $pdf -> SetX(35);
                                                    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$key4['denominacion_programa'])),0,1,'L');

                                                    $pdf -> SetX(10);
                                                    
                                                    $pdf -> SetFont('Arial','B',7);
                                                    
                                                    $pdf -> Cell(100,4,'PROYECTO',0,0,'L');
                                                    
                                                    
                                                    $pdf -> SetX(30);
                                                    $pdf -> SetFont('Arial','',7);
                                                    $pdf -> Cell(100,4, @$key4['proyecto'],0,0,'L');
                                                    
                                                    $pdf -> SetX(35);
                                                    $pdf -> Cell(100,4, strtoupper(utf8_decode(@$key4['denominacion_proyecto'])),0,1,'L');

                                                    $y = $pdf-> GetY();
                                                    $pdf -> SetY($y+2);
                                                    $pdf -> SetFont('Arial','B',8);

                                                    $pdf -> SetX(10);
                                                    $pdf -> Cell(25,5,'PARTIDA ',1,0,'C');
                                                    $pdf -> Cell(140,5,'DENOMINACION',1,0,'J');
                                                    $pdf -> Cell(30,5,'MONTO',1,1,'C');

                                                    $pdf -> SetFont('Arial','',7);

                                                    foreach ($query as $reg) {
                                                        
                                                        if($s == $reg['sector'] and $p == $reg['programa'] and $sp == $reg['sub_programa'] and $proy == $reg['proyecto']){

                                                            $y = $pdf->GetY(110);
                                                            $x = $pdf->GetX(5);

                                                            $pdf -> SetFont('Arial','I',8);
                                                            $pdf->SetXY($x ,$y);
                                                            $pdf->MultiCell($x + 15,3,$reg['concatenado'],0,'C',0);

                                                            $pdf -> SetFont('Arial','I',8);
                                                            $pdf->SetXY($x + 25,$y);
                                                            $pdf->MultiCell(140,3,$this->mayus($reg['ordinald_denominacion']),0,'J',0);

                                                            $pdf->SetXY($x + 165,$y);
                                                            $pdf->MultiCell(30,3,number_format($reg['monto'], 2, ',', '.'),0,'R',0);

                                                            $pdf->SetXY($x + 160,$y);

                                                            $pdf->SetXY($x + 170,$y + 4);
                                                            $pdf->MultiCell(25,3,'',0,'R',0);

                                                            @$total += $reg['monto'];
                                                        }

                                                    }

                                                    $pdf -> ln();

                                                    $pdf -> SetFont('Arial','B',8);

                                                    $pdf ->SetX(10);
                                                    $pdf -> Cell(140, 4, '', 0, 0,'C');
                                                    $pdf -> Cell(25, 4, 'Total', 1, 0,'C');
                                                    $pdf -> Cell(30,4, number_format(@$total, 2, ',', '.'), 1, 1,'R');



                                                }
                                            }
                                        }
                                        
                                    }
                                }
                            }

                        }
                    }
                }

            }
        }














            if($y > 240){
                $pdf -> SetX(20);
                $pdf -> Cell(5,4,'Resolucion Nro  '.$n_resolucion ,0,0,'C');
                //$pdf -> Cell(160,4,'',0,0,'C');
                //$pdf -> Cell(10,4, date('d/m/Y').'  '. date('h:m:s'),0,1,'C'); // Fecha capturada del servidor al imprimir esto queda asi
                $pdf -> SetX(190);
                $pdf -> Cell(10,4,'Santa Ana de Coro; ' . date_format($rel['fecha'], 'd') . ' de ' . $this->mes_castellano(date_format($rel['fecha'], 'F')) . ' del ' . date_format($rel['fecha'], 'Y'),0,1,'R');

                $pdf -> SetFont('Arial','I',8);
                $pdf -> SetX(10);
                $pdf->MultiCell(190,5,$this->mayus($rel['denominacion']),0,'J',0);

            }                 
        




































        $pdf -> Output();
    }

    public function limpiar(){

        $this->loadModel('PresupuestoForma2121Partidas');
        $condicion = ['resolucion' => true, 'n_resolucion <>' => 2];
        $partidas = $this->PresupuestoForma2121Partidas->find('all')->where($condicion)->toArray();

        foreach ($partidas as $key) {
            
            //================================================================================================
            $this->loadModel('PresupuestoSubEspecifico');
            
            $condicion = ['id' => $key['id_sub_especifico'], 'id_especifico' => $key['id_especifico']];
            $query = $this->PresupuestoSubEspecifico->find('all')->where($condicion)->last();
            $monto = 0;
            $monto = $query['monto'] - $key['monto'];

            $query = $this->PresupuestoSubEspecifico->query();
            $query->update()
                ->set(['monto' => $monto])
                ->where(['id' => $key['id_sub_especifico'], 'id_especifico' => $key['id_especifico']])
                ->execute();

            //================================================================================================

            $this->loadModel('PresupuestoEspecifico');

            $condicion = ['id' => $key['id_especifico'], 'id_sub_ramo' => $key['id_sub_ramo']];
            $query = $this->PresupuestoEspecifico->find('all')->where($condicion)->last();
            
            $monto = 0;
            $monto = $query['monto'] - $key['monto'];

            $query = $this->PresupuestoEspecifico->query();
            $query->update()
                ->set(['monto' => $monto])
                ->where(['id' => $key['id_especifico'], 'id_sub_ramo' => $key['id_sub_ramo']])
                ->execute();

            //================================================================================================

            $this->loadModel('PresupuestoSubRamo');

            $condicion = ['id' => $key['id_sub_ramo'], 'id_ramo' => $key['id_ramo']];
            $query = $this->PresupuestoSubRamo->find('all')->where($condicion)->last();
            
            $monto = 0;
            $monto = $query['monto'] - $key['monto'];

            $query = $this->PresupuestoSubRamo->query();
            $query->update()
                ->set(['monto' => $monto])
                ->where(['id' => $key['id_sub_ramo'], 'id_ramo' => $key['id_ramo']])
                ->execute();

            //================================================================================================

            $this->loadModel('PresupuestoRamo');

            $condicion = ['id' => $key['id_ramo']];
            $query = $this->PresupuestoRamo->find('all')->where($condicion)->last();
            
            $monto = 0;
            $monto = $query['monto'] - $key['monto'];

            $query = $this->PresupuestoRamo->query();
            $query->update()
                ->set(['monto' => $monto])
                ->where(['id' => $key['id_ramo']])
                ->execute();


        }

            $this->loadModel('CompraOrdenComprasItems');
            $query = $this->CompraOrdenComprasItems->deleteAll(['id_partida' => 285]);
            $query = $this->CompraOrdenComprasItems->deleteAll(['id_partida' => 374]);
            $query = $this->CompraOrdenComprasItems->deleteAll(['id_partida' => 377]);

            $this->loadModel('EjecucionTransferenciaItems');
            $query = $this->EjecucionTransferenciaItems->deleteAll(['unidad_solicitante' => 29]);
            $query = $this->EjecucionTransferenciaItems->deleteAll(['unidad_solicitante' => 42]);

            $this->loadModel('PresupuestoForma2121Partidas');
            $query = $this->PresupuestoForma2121Partidas->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);

            $this->loadModel('PresupuestoOrdinal');
            $query = $this->PresupuestoOrdinal->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);

            $this->loadModel('PresupuestoSubEspecifico');
            $query = $this->PresupuestoSubEspecifico->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);

            $this->loadModel('PresupuestoEspecifico');
            $query = $this->PresupuestoEspecifico->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);

            $this->loadModel('PresupuestoSubRamo');
            $query = $this->PresupuestoSubRamo->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);

            $this->loadModel('PresupuestoRamo');
            $query = $this->PresupuestoRamo->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);  

            $this->loadModel('PresupuestoForma2121Ajuste');
            $query = $this->PresupuestoForma2121Ajuste->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);  

            $this->loadModel('PresupuestoForma2121');
            $query = $this->PresupuestoForma2121->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);  

            $this->loadModel('PresupuestoForma2121');
            $query = $this->PresupuestoForma2121->deleteAll(['id' => 47]); 

            $this->loadModel('PresupuestoForma2102');
            $query = $this->PresupuestoForma2102->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);  

            $this->loadModel('PresupuestoForma2103');
            $query = $this->PresupuestoForma2103->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);  

            $this->loadModel('PresupuestoActividad');
            $query = $this->PresupuestoActividad->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);

            $this->loadModel('PresupuestoProyecto');
            $query = $this->PresupuestoProyecto->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]);             
        
            $this->loadModel('PresupuestoSubPrograma');
            $query = $this->PresupuestoSubPrograma->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]); 

            $this->loadModel('PresupuestoPrograma');
            $query = $this->PresupuestoPrograma->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]); 

            $this->loadModel('PresupuestoSector');
            $query = $this->PresupuestoSector->deleteAll(['resolucion' => true, 'n_resolucion <>' => 2]); 

            $this->loadModel('Resoluciones');
            $query = $this->Resoluciones->deleteAll(['n_resolucion >' => 2]); 
            

        $this->Flash->info(__('Calembero borrado'));
        return $this->redirect(['action' => 'index']);
    }
}