<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mes Controller
 *
 * @property \App\Model\Table\MesTable $Mes
 *
 * @method \App\Model\Entity\Me[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mes = $this->paginate($this->Mes);

        $this->set(compact('mes'));
    }

    /**
     * View method
     *
     * @param string|null $id Me id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $me = $this->Mes->get($id, [
            'contain' => []
        ]);

        $this->set('me', $me);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $me = $this->Mes->newEntity();
        if ($this->request->is('post')) {
            $me = $this->Mes->patchEntity($me, $this->request->getData());
            if ($this->Mes->save($me)) {
                $this->Flash->success(__('The me has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The me could not be saved. Please, try again.'));
        }
        $this->set(compact('me'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Me id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $me = $this->Mes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $me = $this->Mes->patchEntity($me, $this->request->getData());
            if ($this->Mes->save($me)) {
                $this->Flash->success(__('The me has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The me could not be saved. Please, try again.'));
        }
        $this->set(compact('me'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Me id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $me = $this->Mes->get($id);
        if ($this->Mes->delete($me)) {
            $this->Flash->success(__('The me has been deleted.'));
        } else {
            $this->Flash->error(__('The me could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
