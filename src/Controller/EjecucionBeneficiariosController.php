<?php
namespace App\Controller;

use App\Controller\AppController;

class EjecucionBeneficiariosController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Transferencia
        //========================================================
		$this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Vecedulaica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.presupuestof')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

        //========================================================
        //Limite de la paginacion
        //========================================================
        $this->paginate = array('limit' => 50);

        $this->loadModel('EjecucionBeneficiarios');
        $data = $this->paginate($this->EjecucionBeneficiarios->find('all'));
        $this->set(compact('data'));
        $this->set('n_data', $this->EjecucionBeneficiarios->find('all')->count());
             
}

    //Vecedulaica si el beneficiario existe
    public function buscar(){
        //========================================================
        //Vecedulaica si existe el cedula
        //========================================================
        $this->loadModel('EjecucionBeneficiarios');

        if($this->request->is('post')){
            $cedula = @$this->request->data['cedula'];
            $letra = @$this->request->data['letra'];

            if ($cedula != null and $letra != null){
                $condicion = ['conditions' => ['cedula' => $cedula, 'letra' => $letra]];
                $n = $this->EjecucionBeneficiarios->find('all', $condicion)->count();

                if ($n > 0) {
                    $this->Flash->success(__('Beneficiario encontrado. A continuacion podrá visualizar sus datos'));
                    return $this->redirect(['action' => 'view', $letra, $cedula]);
                }else{
                    $this->Flash->success(__('Este beneficiario no se encuentra registrado. Por favor ingrese sus datos a continuacion'));
                    return $this->redirect(['action' => 'add', $letra, $cedula]);
                }
            }
        }
    }

    public function add($letra = null, $cedula = null){
        //========================================================
        //Selecciona el Layout de EjecucionTransferencias
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');
        
        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('EjecucionBeneficiarios');
        $beneficiario = $this->EjecucionBeneficiarios->newEntity();
        
        if ($this->request->is('post')) {
            $beneficiario = $this->EjecucionBeneficiarios->patchEntity($beneficiario, $this->request->getData());

            if ($this->EjecucionBeneficiarios->save($beneficiario)) {
                $this->Flash->success(__('Datos del beneficiario Registrado'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('beneficiario'));
        $this->set('cedula', $cedula);
        $this->set('letra', $letra);
    }

    public function view($letra = '', $cedula = ''){
        //========================================================
        //Selecciona el Layout de presupuesto
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');

        //========================================================
        //Carga todos los datos del personal seleccionado
        //========================================================
        if($cedula != '' and $letra != ''){
            $condicion = ['cedula' => $cedula, 'letra' => $letra];

            $this->loadModel('EjecucionBeneficiarios');
            $presupuesto = $this->EjecucionBeneficiarios->find('all', ['conditions' => $condicion])->last();
            $this->set('presupuesto', $presupuesto);
        }
    }


    public function desactivar($letra = null, $cedula = null){

        $this->loadModel('EjecucionBeneficiarios');

        $this->request->allowMethod(['get', 'save']);
        $presupuesto = $this->EjecucionBeneficiarios->get($cedula);
        $presupuesto->estado = false;

        if ($this->EjecucionBeneficiarios->save($presupuesto)) {
            $this->Flash->success(__('Desactivado'));
            return $this->redirect(['action' => 'view', $letra, $cedula]);
        }
    }

    public function activar($letra = null, $cedula = null){

        $this->loadModel('EjecucionBeneficiarios');

        $this->request->allowMethod(['get', 'save']);
        $presupuesto = $this->EjecucionBeneficiarios->get($cedula);
        $presupuesto->estado = true;

        if ($this->EjecucionBeneficiarios->save($presupuesto)) {
            $this->Flash->success(__('Activado'));
            return $this->redirect(['action' => 'view', $letra, $cedula]);
        }
    }

    public function delete($letra = null, $cedula = null){
        $this->request->allowMethod(['get', 'delete']);

        $condicion = ['letra' => $letra, 'cedula' => $cedula];

        //-----------------------------------------------------------------------

        if($letra != null and $cedula != null){
    
            $this->loadModel('EjecucionBeneficiarios');
            $n = $this->EjecucionBeneficiarios->find('All', ['conditions' => $condicion])->count();

            if($n != 0){
                $presupuesto = $this->EjecucionBeneficiarios->get($cedula);
                $this->EjecucionBeneficiarios->delete($presupuesto);
                $this->Flash->success(__('Beneficiario Eliminado'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function edit($letra = null, $cedula = ''){
        //========================================================
        //Selecciona el Layout de presupuesto
        //========================================================
        $this->viewBuilder()->setLayout('presupuesto');


        //========================================================
        //Carga todos los datos del beneficiario
        //========================================================
        $this->loadModel('EjecucionBeneficiarios');

        $presupuesto = $this->EjecucionBeneficiarios->get($cedula, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $presupuesto = $this->EjecucionBeneficiarios->patchEntity($presupuesto, $this->request->getData());

            if ($this->EjecucionBeneficiarios->save($presupuesto)) {
                $this->Flash->success(__('El registro ha sido actualizado'));
                return $this->redirect(['action' => 'view', $letra, $cedula]);
            }
            $this->Flash->error(__('Error al actualizar. Intente de nuevo'));
        }
        $this->set(compact('presupuesto'));
    }

}
