<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeCalls Controller
 *
 * @property \App\Model\Table\TypeCallsTable $TypeCalls
 */
class TypeCallsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $typeCalls = $this->paginate($this->TypeCalls);

        $this->set(compact('typeCalls'));
        $this->set('_serialize', ['typeCalls']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Call id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeCall = $this->TypeCalls->get($id, [
            'contain' => ['Calls']
        ]);

        $this->set('typeCall', $typeCall);
        $this->set('_serialize', ['typeCall']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeCall = $this->TypeCalls->newEntity();
        if ($this->request->is('post')) {
            $typeCall = $this->TypeCalls->patchEntity($typeCall, $this->request->data);
            if ($this->TypeCalls->save($typeCall)) {
                $this->Flash->success(__('The type call has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type call could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeCall'));
        $this->set('_serialize', ['typeCall']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Call id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeCall = $this->TypeCalls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeCall = $this->TypeCalls->patchEntity($typeCall, $this->request->data);
            if ($this->TypeCalls->save($typeCall)) {
                $this->Flash->success(__('The type call has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type call could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeCall'));
        $this->set('_serialize', ['typeCall']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Call id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeCall = $this->TypeCalls->get($id);
        if ($this->TypeCalls->delete($typeCall)) {
            $this->Flash->success(__('The type call has been deleted.'));
        } else {
            $this->Flash->error(__('The type call could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
