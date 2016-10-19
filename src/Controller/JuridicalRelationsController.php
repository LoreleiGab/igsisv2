<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * JuridicalRelations Controller
 *
 * @property \App\Model\Table\JuridicalRelationsTable $JuridicalRelations
 */
class JuridicalRelationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $juridicalRelations = $this->paginate($this->JuridicalRelations);

        $this->set(compact('juridicalRelations'));
        $this->set('_serialize', ['juridicalRelations']);
    }

    /**
     * View method
     *
     * @param string|null $id Juridical Relation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $juridicalRelation = $this->JuridicalRelations->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('juridicalRelation', $juridicalRelation);
        $this->set('_serialize', ['juridicalRelation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $juridicalRelation = $this->JuridicalRelations->newEntity();
        if ($this->request->is('post')) {
            $juridicalRelation = $this->JuridicalRelations->patchEntity($juridicalRelation, $this->request->data);
            if ($this->JuridicalRelations->save($juridicalRelation)) {
                $this->Flash->success(__('The juridical relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The juridical relation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('juridicalRelation'));
        $this->set('_serialize', ['juridicalRelation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Juridical Relation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $juridicalRelation = $this->JuridicalRelations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $juridicalRelation = $this->JuridicalRelations->patchEntity($juridicalRelation, $this->request->data);
            if ($this->JuridicalRelations->save($juridicalRelation)) {
                $this->Flash->success(__('The juridical relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The juridical relation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('juridicalRelation'));
        $this->set('_serialize', ['juridicalRelation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Juridical Relation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $juridicalRelation = $this->JuridicalRelations->get($id);
        if ($this->JuridicalRelations->delete($juridicalRelation)) {
            $this->Flash->success(__('The juridical relation has been deleted.'));
        } else {
            $this->Flash->error(__('The juridical relation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
