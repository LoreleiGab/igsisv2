<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Surrogates Controller
 *
 * @property \App\Model\Table\SurrogatesTable $Surrogates
 */
class SurrogatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $surrogates = $this->paginate($this->Surrogates);

        $this->set(compact('surrogates'));
        $this->set('_serialize', ['surrogates']);
    }

    /**
     * View method
     *
     * @param string|null $id Surrogate id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $surrogate = $this->Surrogates->get($id, [
            'contain' => ['Events', 'InternalEvents']
        ]);

        $this->set('surrogate', $surrogate);
        $this->set('_serialize', ['surrogate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $surrogate = $this->Surrogates->newEntity();
        if ($this->request->is('post')) {
            $surrogate = $this->Surrogates->patchEntity($surrogate, $this->request->data);
            if ($this->Surrogates->save($surrogate)) {
                $this->Flash->success(__('The surrogate has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The surrogate could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('surrogate'));
        $this->set('_serialize', ['surrogate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Surrogate id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $surrogate = $this->Surrogates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $surrogate = $this->Surrogates->patchEntity($surrogate, $this->request->data);
            if ($this->Surrogates->save($surrogate)) {
                $this->Flash->success(__('The surrogate has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The surrogate could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('surrogate'));
        $this->set('_serialize', ['surrogate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Surrogate id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $surrogate = $this->Surrogates->get($id);
        if ($this->Surrogates->delete($surrogate)) {
            $this->Flash->success(__('The surrogate has been deleted.'));
        } else {
            $this->Flash->error(__('The surrogate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
