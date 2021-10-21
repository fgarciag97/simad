<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{

	public function index()
    {
        $this->cierres();
        $this->viewBuilder()->setLayout('login');

        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->loadModel('LogUser');
                $usuario = $this->LogUser->newEntity();
                if ($this->request->is('post')) {
                    
                    if(!$this->usuario_unico($user['id'])){
                        $this->Flash->error('Ya existe una sesión activa.');
                        return $this->redirect(['action' => 'index']);
                    }

                    $usuario->id_usuario = $user['id'];
                    $usuario->fecha_inicio = date('d/m/Y');
                    $usuario->hora_inicio = date('h:i:s');
                    $usuario->ip_sesion = $this->IPreal();
                    $usuario->status = 1;
                    $usuario->ultima_fecha = date('d/m/Y');
                    $usuario->ultima_hora = date('h:i:s');
                    $this->LogUser->save($usuario);
                }
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error('Datos incorrectos');
            }
        }
    }

    public function logout(){   

        $this->loadModel('LogUser');
        $x = $this->LogUser->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id")])->order(['id' => 'ASC'])->last();

        $query = $this->LogUser->query();
        $query->update()
            ->set(['fecha_cierre' => date('d/m/Y'), 'hora_cierre' => date('h:i:s'), 'status' => 0])
            ->where(['id' => $x['id'], 'id_usuario' => @$this->request->session()->read("Auth.User.id")])
            ->execute();

        $this->Auth->logout();
        return $this->redirect($this->Auth->logout());
    }
}
