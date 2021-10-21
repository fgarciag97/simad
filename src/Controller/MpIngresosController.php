<?php
namespace App\Controller;

use App\Controller\AppController;

class MpIngresosController extends AppController
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
        $condicion = ['ano' => ANO_FISCAL, 'ingresos' => true];
        $query = $this->MpSeguimiento->find('all')->where($condicion);
        $status = $query->toArray();

        if(!empty($status)){
            $this->set('status', 'procesado');
        }
        
        //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('ViewPresupuestoForma2102');
        $condicion = ['ano' => ANO_FISCAL];
        $registros = $this->paginate($this->ViewPresupuestoForma2102->find('all')->order(['ramo' => 'ASC', 'sub_ramo::integer' => 'ASc', 'especifico::integer' => 'ASC', 'sub_especifico::integer' => 'ASC', 'ordinal::integer' => 'ASC']));
        $this->set(compact('registros'));

        //========================================================
        //Carga del Select
        //========================================================
		$this->loadModel('PresupuestoRamo');

        $ramos = $this->PresupuestoRamo->find('all')->toArray();
        $options = [];
        foreach ($ramos as $key) 
        {
            $options[$key->id] = $key->ramo;
        }
        $this->set('ramos', $options);

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('PresupuestoSubRamo');

        $subramos = $this->PresupuestoSubRamo->find('all')->toArray();
        $options = [];
        foreach ($subramos as $key) 
        {
            $options[$key->id] = $key->sub_ramo;
        }
        $this->set('subramos', $options);

        //========================================================
        //Almacena los datos ingresados 
        //========================================================
		$this->loadModel('PresupuestoOrdinal');
		$ordinal = $this->PresupuestoOrdinal->newEntity();
        $this->loadModel('PresupuestoForma2102');
        $forma2102 = $this->PresupuestoForma2102->newEntity();

        if ($this->request->is('post')) {

            //=====================================================================================
            $ordinal = $this->PresupuestoOrdinal->patchEntity($ordinal, $this->request->getData());

            $ordinal->id_sub_especifico = $this->request->data['subespecifico'];
            $ordinal->ordinal = $this->request->data['ordinal'];
            $ordinal->descripcion = $this->request->data['denominacion'];
            $ordinal->monto = $this->revertir_moneda($this->request->data['monto']);

            //=====================================================================================
            $forma2102 = $this->PresupuestoForma2102->patchEntity($forma2102, $this->request->getData());

            $forma2102->ano = ANO_FISCAL;
            $forma2102->id_ramo = $this->request->data['ramo'];
            $forma2102->id_sub_ramo = $this->request->data['subramo'];
            $forma2102->id_especifico = $this->request->data['especifico'];
            $forma2102->id_sub_especifico = $this->request->data['subespecifico'];
            $forma2102->ordinal = $this->request->data['ordinal'];
            //=====================================================================================

            if ($this->PresupuestoOrdinal->save($ordinal) and $this->PresupuestoForma2102->save($forma2102)) {

                //================================================================================================
                $this->loadModel('PresupuestoSubEspecifico');
                
                $query = $this->PresupuestoSubEspecifico->find('all', ['conditions' => ['id' => $this->request->data['subespecifico'], 'id_especifico' => $this->request->data['especifico']], 'limit' => 1])->toArray();
                $montos = 0;
                $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];

                $query = $this->PresupuestoSubEspecifico->query();
                $query->update()
                    ->set(['monto' => $montos])
                    ->where(['id' => $this->request->data['subespecifico'], 'id_especifico' => $this->request->data['especifico']])
                    ->execute();

                //================================================================================================

                $this->loadModel('PresupuestoEspecifico');
                
                $query = $this->PresupuestoEspecifico->find('all', ['conditions' => ['id' => $this->request->data['especifico'], 'id_sub_ramo' => $this->request->data['subramo']], 'limit' => 1])->toArray();
                
                $montos = 0;
                $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];

                $query = $this->PresupuestoEspecifico->query();
                $query->update()
                    ->set(['monto' => $montos])
                    ->where(['id' => $this->request->data['especifico'], 'id_sub_ramo' => $this->request->data['subramo']])
                    ->execute();

                //================================================================================================

                $this->loadModel('PresupuestoSubRamo');
                
                $query = $this->PresupuestoSubRamo->find('all', ['conditions' => ['id' => $this->request->data['subramo'], 'id_ramo' => $this->request->data['ramo']], 'limit' => 1])->toArray();
                
                $montos = 0;
                $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];

                $query = $this->PresupuestoSubRamo->query();
                $query->update()
                    ->set(['monto' => $montos])
                    ->where(['id' => $this->request->data['subramo'], 'id_ramo' => $this->request->data['ramo']])
                    ->execute();

                //================================================================================================

                $this->loadModel('PresupuestoRamo');

                $query = $this->PresupuestoRamo->find('all', ['conditions' => ['id' => $this->request->data['ramo']], 'limit' => 1])->toArray();
                $montos = $this->revertir_moneda($this->request->data['monto']) + @$query[0]['monto'];
                
                $query = $this->PresupuestoRamo->query();
                $query->update()
                    ->set(['monto' => $montos])
                    ->where(['id' => $this->request->data['ramo']])
                    ->execute();

                //================================================================================================

                $this->Flash->success(__('Partida almacenada'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar la partida'));
        }
        $this->set(compact('ordinal'));
        $this->set(compact('forma2102'));
	}

    public function delete($id = null)
    {
        
        //$this->loadModel('ViewPresupuestoForma2121');
        //$n = $this->ViewPresupuestoForma2121->find('all', ['conditions' => ['id_partida' => $id]])->count();

        //if($n == 0){

            $this->loadModel('ViewPresupuestoForma2102');
            $query = $this->ViewPresupuestoForma2102->find('all', ['conditions' => ['id' => $id], 'limit' => 1])->toArray();

            $this->loadModel('PresupuestoOrdinal');
            $o = $this->PresupuestoOrdinal->find('all', ['conditions' => ['id_sub_especifico' => @$query[0]['id_sub_especifico'], 'ordinal' => @$query[0]['ordinald']], 'limit' => 1])->toArray();

            //=====================================================================================================================

            $this->loadModel('PresupuestoRamo');
            $r = $this->PresupuestoRamo->find('all', ['conditions' => ['id' => @$query[0]['id_ramo']], 'limit' => 1])->toArray();
            $montos = 0;
            $montos = @$r[0]['monto'] - @$o[0]['monto'];

            $x = @$query[0]['id_ramo'];
            $execute = $this->PresupuestoRamo->query();
            $execute->update()
                ->set(['monto' => $montos])
                ->where(['id' => $x])
                ->execute();

            //=====================================================================================================================
            
            $this->loadModel('PresupuestoSubRamo');
            $sr = $this->PresupuestoSubRamo->find('all', ['conditions' => ['id' => @$query[0]['id_sub_ramo']], 'limit' => 1])->toArray();
            $montos = 0;
            $montos = @$sr[0]['monto'] - @$o[0]['monto'];


            $execute = $this->PresupuestoSubRamo->query();
            $execute->update()
                ->set(['monto' => $montos])
                ->where(['id' =>  @$query[0]['id_sub_ramo'], 'id_ramo' =>  @$query[0]['id_ramo']])
                ->execute();

            //=====================================================================================================================

            $this->loadModel('PresupuestoEspecifico');
            $e = $this->PresupuestoEspecifico->find('all', ['conditions' => ['id' => @$query[0]['id_especifico']], 'limit' => 1])->toArray();
            $montos = 0;
            $montos = @$e[0]['monto'] - @$o[0]['monto'];

            $execute = $this->PresupuestoEspecifico->query();
            $execute->update()
                ->set(['monto' => $montos])
                ->where(['id' => @$query[0]['id_especifico'], 'id_sub_ramo' => @$query[0]['id_sub_ramo']])
                ->execute();

            //=====================================================================================================================

            $this->loadModel('PresupuestoSubEspecifico');
            $se = $this->PresupuestoSubEspecifico->find('all', ['conditions' => ['id' => @$query[0]['id_sub_especifico']], 'limit' => 1])->toArray();
            $montos = 0;
            $montos = @$se[0]['monto'] - @$o[0]['monto'];

            $execute = $this->PresupuestoSubEspecifico->query();
            $execute->update()
                ->set(['monto' => $montos])
                ->where(['id' => @$query[0]['id_sub_especifico'], 'id_especifico' => @$query[0]['id_especifico']])
                ->execute();

            //========================================================================================================================================

            $this->loadModel('PresupuestoOrdinal');
            $this->PresupuestoOrdinal->deleteAll(['id IN' => @$o[0]['id']]);

            //========================================================================================================================================

            $this->loadModel('PresupuestoForma2102');
            $this->request->allowMethod(['post', 'delete']);
            $data = $this->PresupuestoForma2102->get($id);
            if ($this->PresupuestoForma2102->delete($data)) {
                $this->Flash->success(__('La partida ha sido eliminada.'));
            } else {
                $this->Flash->error(__('Error. Intente de nuevo.'));
            }
        //}else{
            //$this->Flash->error(__('Error. Esta Partida ya se encuentra asociada a un proyecto - Forma 2121'));
        //}
        return $this->redirect(['action' => 'index']);
    }

    public function seguimiento(){
        if ($this->seguimiento_ingresos()) {
            $this->Flash->success(__('Módulo Procesado. Ahora puede generar el Reporte'));
            return $this->redirect(['controller' => 'MpReportes', 'action' => 'index']);
        }
    }

    public function editar()
    {
        $this->loadModel('PresupuestoOrdinal');
        $this->request->allowMethod(['post', 'get', 'save']);
        $forma = $this->PresupuestoOrdinal->get($this->request->data['id']);
        $forma->denominacion = $this->request->data['denominacion'];
        $forma->monto = $this->revertir_moneda($this->request->data['monto']);

        if ($this->PresupuestoOrdinal->save($forma)) {
            $this->Flash->success(__('Ingresos Actualizados'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } 

    /*public function editar()
    {
        $this->request->allowMethod(['post', 'get', 'save']);

        //===========================================================

        $this->loadModel('Presupuesto2102');
        $forma = $this->Presupuesto2102->get($this->request->data['id']);

        $id_ramo = $forma->id_ramo;
        $id_sub_ramo = $forma->id_sub_ramo;
        $id_especifico = $forma->id_especifico;
        $id_sub_especifico = $forma->id_sub_especifico;
        $ordinal = $forma->ordinal;


        $this->loadModel('PresupuestoOrdinal');
        $o = $this->PresupuestoOrdinal->find('all')->where(['ordinal' => @$ordinal, 'id_sub_especifico' => $id_sub_especifico])->last();
        $restar = $o['monto'];
        $sumar = $this->request->data['monto'];

        //===========================================================

        $execute = $this->PresupuestoSubEspecifico->query();
        $execute->update()
                ->set(['monto' => ['monto -' => $restar]])
                ->where(['id' => @$query[0]['id_sub_especifico'], 'id_especifico' => @$query[0]['id_especifico']])
                ->execute();

        //===========================================================

        if ($this->PresupuestoOrdinal->save($forma)) {
            $this->Flash->success(__('Ingresos Actualizados'.$actual));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    } */
}
