<?php
namespace App\Controller;

use App\Controller\AppController;

class MRRHHCalculoVacacionesController extends AppController
{
	public function index(){
       	//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.rrhh')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

		//========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key)
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Verifica si existe el mes y el año
        //========================================================
        $this->loadModel('MrrhhVacaciones');
        $this->loadModel('MrrhhPersonal');

        if($this->request->is('post')){
            $ano = $this->request->data['ano'];
            $mes = $this->request->data['mes'];

            $this->set('a', $ano);
            $this->set('m', $mes);

            if ($ano != null and $mes != null){
                $condicion = ['conditions' => ['ano' => $ano, 'mes' => $mes]];
                $data1 = $this->MrrhhVacaciones->find('all', $condicion);
                $data2 = $this->MrrhhPersonal->find('all');
                $n = $data1->count();
                
                if ($n > 0) {
                	$data1 = $this->paginate($data1);
        			$this->set(compact('data1'));
        			$data2 = $this->paginate($data2);
        			$this->set(compact('data2'));
                    $this->Flash->success(__('Personal encontrado'));
                }else{
                	$this->Flash->error(__('Personal no encontrado'));
                }
            }
        }
	}

	public function buscar($ced = ''){
		//========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
		$this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga todos los datos y los mustra en una paginacion
        //========================================================
        $this->loadModel('MrrhhPersonal');
        $condicion = ['conditions' => ['estado' => '1']];
        $activos = $this->paginate($this->MrrhhPersonal->find('all', $condicion));
        $this->set(compact('activos'));

        
        //========================================================
        //Verifica si existe la cedula con POST desde el buscador
        //========================================================
        $this->loadModel('MrrhhPersonal');
        $this->loadModel('MrrhhVacaciones');

        if($this->request->is('post')){
            $cedula = $this->request->data['cedula'];
            if ($cedula != null){
                $condicion = ['conditions' => ['cedula' => $cedula]];
                $n = $this->MrrhhPersonal->find('all', $condicion)->count();
                
                if ($n > 0) {
                    $condicion = ['conditions' => ['cedula' => $cedula]];
                    $n = $this->MrrhhVacaciones->find('all', $condicion)->count();

                    if ($n > 0) {
                        $this->Flash->success(__('Persona encontrada'));
                        return $this->redirect(['action' => 'view', $cedula]);
                    }else{
                        return $this->redirect(['action' => 'asignar', $cedula]);
                    }
                }else{
                	$this->Flash->error(__('Personal no existe'));
                    return $this->redirect(['action' => 'buscar', $cedula]);
                }
            }
        }

        //========================================================
        //Verifica si existe la cedula con GET desde La paginacion
        //========================================================
        $this->loadModel('MrrhhPersonal');
        $this->loadModel('MrrhhVacaciones');

        if ($ced != null){
            $condicion = ['conditions' => ['cedula' => $ced]];
            $n = $this->MrrhhPersonal->find('all', $condicion)->count();
            
            if ($n > 0) {
                $condicion = ['conditions' => ['cedula' => $ced]];
                $n = $this->MrrhhVacaciones->find('all', $condicion)->count();

                if ($n > 0) {
                    $this->Flash->success(__('Persona encontrada'));
                    return $this->redirect(['action' => 'view', $ced]);
                }else{
                    return $this->redirect(['action' => 'asignar', $ced]);
                }
            }else{
                $this->Flash->error(__('Personal no existe'));
                return $this->redirect(['action' => 'buscar', $ced]);
            }
        }
        
    }

    public function editar($cedula = null){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key)
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        $this->loadModel('MrrhhVacaciones');
        $this->loadModel('MrrhhPersonal');

        $data = $this->MrrhhPersonal->get($cedula, [
            'contain' => []
       	]);

        $registro = $this->MrrhhVacaciones->get($cedula, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registro = $this->MrrhhVacaciones->patchEntity($registro, $this->request->getData());
            if ($this->MrrhhVacaciones->save($registro)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view', $cedula]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('data'));
        $this->set(compact('registro'));
    }

    public function delete($cedula = null)
    {
        $this->loadModel('MrrhhVacaciones');
        $this->request->allowMethod(['get', 'delete']);
        $data = $this->MrrhhVacaciones->get($cedula);
        if ($this->MrrhhVacaciones->delete($data)) {
            $this->Flash->success(__('El personal ha sido eliminado de la lista'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function view($cedula = ''){
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');

        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key)
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        $this->loadModel('MrrhhVacaciones');

        $personal = $this->MrrhhVacaciones->get($cedula, [
            'contain' => []
        ]);

        $this->set('personal', $personal);
    }

    public function asignar($cedula = null)
    {
        //========================================================
        //Selecciona el Layout de Recursos Humanos
        //========================================================
        $this->viewBuilder()->setLayout('rrhh');
        
        //========================================================
        //Carga del Select
        //========================================================
        $this->loadModel('Mes');

        $mes = $this->Mes->find('all')->toArray();
        $options = [];
        foreach ($mes as $key)
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('mes', $options);

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        $this->loadModel('MrrhhPersonal');

        $personal = $this->MrrhhPersonal->get($cedula, [
            'contain' => []
        ]);

        $this->set('personal', $personal);
        $this->set('cedula', $cedula);

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('MrrhhVacaciones');
        $vacaciones = $this->MrrhhVacaciones->newEntity();

        if ($this->request->is('post')) {
            $vacaciones = $this->MrrhhVacaciones->patchEntity($vacaciones, $this->request->getData());
            if ($this->MrrhhVacaciones->save($vacaciones)) {

                $this->Flash->success(__('Asignación Almacenada'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido registrar la asignación'));
        }
        $this->set(compact('vacaciones'));
    }
}
