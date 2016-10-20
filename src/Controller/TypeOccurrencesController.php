<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeOccurrences Controller
 *
 * @property \App\Model\Table\TypeOccurrencesTable $TypeOccurrences
 */
class TypeOccurrencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $typeOccurrences = $this->paginate($this->TypeOccurrences);

        $this->set(compact('typeOccurrences'));
        $this->set('_serialize', ['typeOccurrences']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Occurrence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeOccurrence = $this->TypeOccurrences->get($id, [
            'contain' => []
        ]);

        $this->set('typeOccurrence', $typeOccurrence);
        $this->set('_serialize', ['typeOccurrence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeOccurrence = $this->TypeOccurrences->newEntity();
        if ($this->request->is('post')) {
            $typeOccurrence = $this->TypeOccurrences->patchEntity($typeOccurrence, $this->request->data);
            if ($this->TypeOccurrences->save($typeOccurrence)) {
                $this->Flash->success(__('The type occurrence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type occurrence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeOccurrence'));
        $this->set('_serialize', ['typeOccurrence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Occurrence id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeOccurrence = $this->TypeOccurrences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeOccurrence = $this->TypeOccurrences->patchEntity($typeOccurrence, $this->request->data);
            if ($this->TypeOccurrences->save($typeOccurrence)) {
                $this->Flash->success(__('The type occurrence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type occurrence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeOccurrence'));
        $this->set('_serialize', ['typeOccurrence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Occurrence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeOccurrence = $this->TypeOccurrences->get($id);
        if ($this->TypeOccurrences->delete($typeOccurrence)) {
            $this->Flash->success(__('The type occurrence has been deleted.'));
        } else {
            $this->Flash->error(__('The type occurrence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
