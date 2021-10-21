<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MRRHHPruebaDeelte Controller
 *
 *
 * @method \App\Model\Entity\MRRHHPruebaDeelte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MRRHHPruebaDeelteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mRRHHPruebaDeelte = $this->paginate($this->MRRHHPruebaDeelte);

        $this->set(compact('mRRHHPruebaDeelte'));
    }

    /**
     * View method
     *
     * @param string|null $id M R R H H Prueba Deelte id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mRRHHPruebaDeelte = $this->MRRHHPruebaDeelte->get($id, [
            'contain' => []
        ]);

        $this->set('mRRHHPruebaDeelte', $mRRHHPruebaDeelte);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mRRHHPruebaDeelte = $this->MRRHHPruebaDeelte->newEntity();
        if ($this->request->is('post')) {
            $mRRHHPruebaDeelte = $this->MRRHHPruebaDeelte->patchEntity($mRRHHPruebaDeelte, $this->request->getData());
            if ($this->MRRHHPruebaDeelte->save($mRRHHPruebaDeelte)) {
                $this->Flash->success(__('The m r r h h prueba deelte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m r r h h prueba deelte could not be saved. Please, try again.'));
        }
        $this->set(compact('mRRHHPruebaDeelte'));
    }

    /**
     * Edit method
     *
     * @param string|null $id M R R H H Prueba Deelte id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mRRHHPruebaDeelte = $this->MRRHHPruebaDeelte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mRRHHPruebaDeelte = $this->MRRHHPruebaDeelte->patchEntity($mRRHHPruebaDeelte, $this->request->getData());
            if ($this->MRRHHPruebaDeelte->save($mRRHHPruebaDeelte)) {
                $this->Flash->success(__('The m r r h h prueba deelte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m r r h h prueba deelte could not be saved. Please, try again.'));
        }
        $this->set(compact('mRRHHPruebaDeelte'));
    }

    /**
     * Delete method
     *
     * @param string|null $id M R R H H Prueba Deelte id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mRRHHPruebaDeelte = $this->MRRHHPruebaDeelte->get($id);
        if ($this->MRRHHPruebaDeelte->delete($mRRHHPruebaDeelte)) {
            $this->Flash->success(__('The m r r h h prueba deelte has been deleted.'));
        } else {
            $this->Flash->error(__('The m r r h h prueba deelte could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
