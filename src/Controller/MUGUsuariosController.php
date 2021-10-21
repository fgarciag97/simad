<?php
namespace App\Controller;

use App\Controller\AppController;

class MUGUsuariosController extends AppController
{
	public function index(){

       	//========================================================
        //Selecciona el Layout de Uso General
        //========================================================
		$this->viewBuilder()->setLayout('usogeneral');

        //========================================================
        //Verifica si el usuarios tiene privilegios
        //========================================================
        if($this->request->getSession()->read('Auth.User.usogeneral')==0)
            return $this->redirect(['controller' => 'Panel', 'action' => 'index']);

		//========================================================
        //Paginacion de todos los usuarios
        //========================================================
		$this->loadModel('Usuarios');
        $usuarios = $this->paginate($this->Usuarios->find('all'));
        $this->set(compact('usuarios'));
	}

    public function registrar(){

        //========================================================
        //Selecciona el Layout de Uso General
        //========================================================
        $this->viewBuilder()->setLayout('usogeneral');

        //========================================================
        //Almacena los datos ingresados
        //========================================================
        $this->loadModel('Usuarios');
        $registro = $this->Usuarios->newEntity();

        if ($this->request->is('post')) {
                
            if($this->request->data['password'] == $this->request->data['password2']){
                $registro = $this->Usuarios->patchEntity($registro, $this->request->getData());

                if ($this->Usuarios->save($registro)) {

                    $this->Flash->success(__('Usuario registrado'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('No se ha podido registrar el usuario'));
            }else{
                $this->Flash->error(__('Las contraseñas no coinciden'));
            }
        }
        $this->set(compact('registro'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $this->loadModel('Usuarios');
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('El usuario ha sido eliminado'));
        } else {
            $this->Flash->error(__('Error. Intentelo de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function editar($id = null)
    {
        //========================================================
        //Selecciona el Layout de Uso General
        //========================================================
        $this->viewBuilder()->setLayout('usogeneral');


        //========================================================
        //Actualiza el registro
        //========================================================
        $this->loadModel('Usuarios');
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('Registro actualizado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        $this->set(compact('usuario'));
    }
}
