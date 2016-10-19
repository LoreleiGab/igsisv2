<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fiscals Controller
 *
 * @property \App\Model\Table\FiscalsTable $Fiscals
 */
class FiscalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fiscals = $this->paginate($this->Fiscals);

        $this->set(compact('fiscals'));
        $this->set('_serialize', ['fiscals']);
    }

    /**
     * View method
     *
     * @param string|null $id Fiscal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fiscal = $this->Fiscals->get($id, [
            'contain' => ['Events', 'InternalEvents']
        ]);

        $this->set('fiscal', $fiscal);
        $this->set('_serialize', ['fiscal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fiscal = $this->Fiscals->newEntity();
        if ($this->request->is('post')) {
            $fiscal = $this->Fiscals->patchEntity($fiscal, $this->request->data);
            if ($this->Fiscals->save($fiscal)) {
                $this->Flash->success(__('The fiscal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fiscal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fiscal'));
        $this->set('_serialize', ['fiscal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fiscal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fiscal = $this->Fiscals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fiscal = $this->Fiscals->patchEntity($fiscal, $this->request->data);
            if ($this->Fiscals->save($fiscal)) {
                $this->Flash->success(__('The fiscal has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fiscal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fiscal'));
        $this->set('_serialize', ['fiscal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fiscal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fiscal = $this->Fiscals->get($id);
        if ($this->Fiscals->delete($fiscal)) {
            $this->Flash->success(__('The fiscal has been deleted.'));
        } else {
            $this->Flash->error(__('The fiscal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
