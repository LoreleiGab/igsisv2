<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubEvents Controller
 *
 * @property \App\Model\Table\SubEventsTable $SubEvents
 */
class SubEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'TypeEvents']
        ];
        $subEvents = $this->paginate($this->SubEvents);

        $this->set(compact('subEvents'));
        $this->set('_serialize', ['subEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Sub Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subEvent = $this->SubEvents->get($id, [
            'contain' => ['Events', 'TypeEvents', 'HistoricOccurrences', 'Occurrences']
        ]);

        $this->set('subEvent', $subEvent);
        $this->set('_serialize', ['subEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subEvent = $this->SubEvents->newEntity();
        if ($this->request->is('post')) {
            $subEvent = $this->SubEvents->patchEntity($subEvent, $this->request->data);
            if ($this->SubEvents->save($subEvent)) {
                $this->Flash->success(__('The sub event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sub event could not be saved. Please, try again.'));
            }
        }
        $events = $this->SubEvents->Events->find('list', ['limit' => 200]);
        $typeEvents = $this->SubEvents->TypeEvents->find('list', ['limit' => 200]);
        $this->set(compact('subEvent', 'events', 'typeEvents'));
        $this->set('_serialize', ['subEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sub Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subEvent = $this->SubEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subEvent = $this->SubEvents->patchEntity($subEvent, $this->request->data);
            if ($this->SubEvents->save($subEvent)) {
                $this->Flash->success(__('The sub event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sub event could not be saved. Please, try again.'));
            }
        }
        $events = $this->SubEvents->Events->find('list', ['limit' => 200]);
        $typeEvents = $this->SubEvents->TypeEvents->find('list', ['limit' => 200]);
        $this->set(compact('subEvent', 'events', 'typeEvents'));
        $this->set('_serialize', ['subEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sub Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subEvent = $this->SubEvents->get($id);
        if ($this->SubEvents->delete($subEvent)) {
            $this->Flash->success(__('The sub event has been deleted.'));
        } else {
            $this->Flash->error(__('The sub event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
