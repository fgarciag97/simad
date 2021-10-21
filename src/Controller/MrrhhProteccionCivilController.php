<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MrrhhProteccionCivil Controller
 *
 * @property \App\Model\Table\MrrhhProteccionCivilTable $MrrhhProteccionCivil
 *
 * @method \App\Model\Entity\MrrhhProteccionCivil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MrrhhProteccionCivilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mrrhhProteccionCivil = $this->paginate($this->MrrhhProteccionCivil);

        $this->set(compact('mrrhhProteccionCivil'));
    }

    /**
     * View method
     *
     * @param string|null $id Mrrhh Proteccion Civil id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mrrhhProteccionCivil = $this->MrrhhProteccionCivil->get($id, [
            'contain' => []
        ]);

        $this->set('mrrhhProteccionCivil', $mrrhhProteccionCivil);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mrrhhProteccionCivil = $this->MrrhhProteccionCivil->newEntity();
        if ($this->request->is('post')) {
            $mrrhhProteccionCivil = $this->MrrhhProteccionCivil->patchEntity($mrrhhProteccionCivil, $this->request->getData());
            if ($this->MrrhhProteccionCivil->save($mrrhhProteccionCivil)) {
                $this->Flash->success(__('The mrrhh proteccion civil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mrrhh proteccion civil could not be saved. Please, try again.'));
        }
        $this->set(compact('mrrhhProteccionCivil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mrrhh Proteccion Civil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mrrhhProteccionCivil = $this->MrrhhProteccionCivil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mrrhhProteccionCivil = $this->MrrhhProteccionCivil->patchEntity($mrrhhProteccionCivil, $this->request->getData());
            if ($this->MrrhhProteccionCivil->save($mrrhhProteccionCivil)) {
                $this->Flash->success(__('The mrrhh proteccion civil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mrrhh proteccion civil could not be saved. Please, try again.'));
        }
        $this->set(compact('mrrhhProteccionCivil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mrrhh Proteccion Civil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mrrhhProteccionCivil = $this->MrrhhProteccionCivil->get($id);
        if ($this->MrrhhProteccionCivil->delete($mrrhhProteccionCivil)) {
            $this->Flash->success(__('The mrrhh proteccion civil has been deleted.'));
        } else {
            $this->Flash->error(__('The mrrhh proteccion civil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
