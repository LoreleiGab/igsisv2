<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeEvents Controller
 *
 * @property \App\Model\Table\TypeEventsTable $TypeEvents
 */
class TypeEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $typeEvents = $this->paginate($this->TypeEvents);

        $this->set(compact('typeEvents'));
        $this->set('_serialize', ['typeEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeEvent = $this->TypeEvents->get($id, [
            'contain' => ['AgendaPosters', 'Agendas', 'Events', 'InternalEvents', 'SubEvents', 'TempPosters']
        ]);

        $this->set('typeEvent', $typeEvent);
        $this->set('_serialize', ['typeEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeEvent = $this->TypeEvents->newEntity();
        if ($this->request->is('post')) {
            $typeEvent = $this->TypeEvents->patchEntity($typeEvent, $this->request->data);
            if ($this->TypeEvents->save($typeEvent)) {
                $this->Flash->success(__('The type event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeEvent'));
        $this->set('_serialize', ['typeEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeEvent = $this->TypeEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeEvent = $this->TypeEvents->patchEntity($typeEvent, $this->request->data);
            if ($this->TypeEvents->save($typeEvent)) {
                $this->Flash->success(__('The type event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type event could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeEvent'));
        $this->set('_serialize', ['typeEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeEvent = $this->TypeEvents->get($id);
        if ($this->TypeEvents->delete($typeEvent)) {
            $this->Flash->success(__('The type event has been deleted.'));
        } else {
            $this->Flash->error(__('The type event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
