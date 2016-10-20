<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occurrences Controller
 *
 * @property \App\Model\Table\OccurrencesTable $Occurrences
 */
class OccurrencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'SubEvents', 'TypeOccurrences', 'Locals', 'Cinemas']
        ];
        $occurrences = $this->paginate($this->Occurrences);

        $this->set(compact('occurrences'));
        $this->set('_serialize', ['occurrences']);
    }

    /**
     * View method
     *
     * @param string|null $id Occurrence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occurrence = $this->Occurrences->get($id, [
            'contain' => ['Events', 'SubEvents', 'TypeOccurrences', 'Locals', 'Cinemas']
        ]);

        $this->set('occurrence', $occurrence);
        $this->set('_serialize', ['occurrence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occurrence = $this->Occurrences->newEntity();
        if ($this->request->is('post')) {
            $occurrence = $this->Occurrences->patchEntity($occurrence, $this->request->data);
            if ($this->Occurrences->save($occurrence)) {
                $this->Flash->success(__('The occurrence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The occurrence could not be saved. Please, try again.'));
            }
        }
        $events = $this->Occurrences->Events->find('list', ['limit' => 200]);
        $subEvents = $this->Occurrences->SubEvents->find('list', ['limit' => 200]);
        $typeOccurrences = $this->Occurrences->TypeOccurrences->find('list', ['limit' => 200]);
        $locals = $this->Occurrences->Locals->find('list', ['limit' => 200]);
        $cinemas = $this->Occurrences->Cinemas->find('list', ['limit' => 200]);
        $this->set(compact('occurrence', 'events', 'subEvents', 'typeOccurrences', 'locals', 'cinemas'));
        $this->set('_serialize', ['occurrence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occurrence id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occurrence = $this->Occurrences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occurrence = $this->Occurrences->patchEntity($occurrence, $this->request->data);
            if ($this->Occurrences->save($occurrence)) {
                $this->Flash->success(__('The occurrence has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The occurrence could not be saved. Please, try again.'));
            }
        }
        $events = $this->Occurrences->Events->find('list', ['limit' => 200]);
        $subEvents = $this->Occurrences->SubEvents->find('list', ['limit' => 200]);
        $typeOccurrences = $this->Occurrences->TypeOccurrences->find('list', ['limit' => 200]);
        $locals = $this->Occurrences->Locals->find('list', ['limit' => 200]);
        $cinemas = $this->Occurrences->Cinemas->find('list', ['limit' => 200]);
        $this->set(compact('occurrence', 'events', 'subEvents', 'typeOccurrences', 'locals', 'cinemas'));
        $this->set('_serialize', ['occurrence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occurrence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occurrence = $this->Occurrences->get($id);
        if ($this->Occurrences->delete($occurrence)) {
            $this->Flash->success(__('The occurrence has been deleted.'));
        } else {
            $this->Flash->error(__('The occurrence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
