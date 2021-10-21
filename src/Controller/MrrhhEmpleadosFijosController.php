<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MrrhhEmpleadosFijos Controller
 *
 * @property \App\Model\Table\MrrhhEmpleadosFijosTable $MrrhhEmpleadosFijos
 *
 * @method \App\Model\Entity\MrrhhEmpleadosFijo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MrrhhEmpleadosFijosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $mrrhhEmpleadosFijos = $this->paginate($this->MrrhhEmpleadosFijos);

        $this->set(compact('mrrhhEmpleadosFijos'));
    }

    /**
     * View method
     *
     * @param string|null $id Mrrhh Empleados Fijo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mrrhhEmpleadosFijo = $this->MrrhhEmpleadosFijos->get($id, [
            'contain' => []
        ]);

        $this->set('mrrhhEmpleadosFijo', $mrrhhEmpleadosFijo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mrrhhEmpleadosFijo = $this->MrrhhEmpleadosFijos->newEntity();
        if ($this->request->is('post')) {
            $mrrhhEmpleadosFijo = $this->MrrhhEmpleadosFijos->patchEntity($mrrhhEmpleadosFijo, $this->request->getData());
            if ($this->MrrhhEmpleadosFijos->save($mrrhhEmpleadosFijo)) {
                $this->Flash->success(__('The mrrhh empleados fijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mrrhh empleados fijo could not be saved. Please, try again.'));
        }
        $this->set(compact('mrrhhEmpleadosFijo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mrrhh Empleados Fijo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mrrhhEmpleadosFijo = $this->MrrhhEmpleadosFijos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mrrhhEmpleadosFijo = $this->MrrhhEmpleadosFijos->patchEntity($mrrhhEmpleadosFijo, $this->request->getData());
            if ($this->MrrhhEmpleadosFijos->save($mrrhhEmpleadosFijo)) {
                $this->Flash->success(__('The mrrhh empleados fijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mrrhh empleados fijo could not be saved. Please, try again.'));
        }
        $this->set(compact('mrrhhEmpleadosFijo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mrrhh Empleados Fijo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mrrhhEmpleadosFijo = $this->MrrhhEmpleadosFijos->get($id);
        if ($this->MrrhhEmpleadosFijos->delete($mrrhhEmpleadosFijo)) {
            $this->Flash->success(__('The mrrhh empleados fijo has been deleted.'));
        } else {
            $this->Flash->error(__('The mrrhh empleados fijo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
