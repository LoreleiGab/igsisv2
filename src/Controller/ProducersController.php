<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Producers Controller
 *
 * @property \App\Model\Table\ProducersTable $Producers
 */
class ProducersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $producers = $this->paginate($this->Producers);

        $this->set(compact('producers'));
        $this->set('_serialize', ['producers']);
    }

    /**
     * View method
     *
     * @param string|null $id Producer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producer = $this->Producers->get($id, [
            'contain' => ['Events', 'InternalEvents']
        ]);

        $this->set('producer', $producer);
        $this->set('_serialize', ['producer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producer = $this->Producers->newEntity();
        if ($this->request->is('post')) {
            $producer = $this->Producers->patchEntity($producer, $this->request->data);
            if ($this->Producers->save($producer)) {
                $this->Flash->success(__('The producer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('producer'));
        $this->set('_serialize', ['producer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Producer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producer = $this->Producers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producer = $this->Producers->patchEntity($producer, $this->request->data);
            if ($this->Producers->save($producer)) {
                $this->Flash->success(__('The producer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('producer'));
        $this->set('_serialize', ['producer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producer = $this->Producers->get($id);
        if ($this->Producers->delete($producer)) {
            $this->Flash->success(__('The producer has been deleted.'));
        } else {
            $this->Flash->error(__('The producer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
