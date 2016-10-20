<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternalEvents Controller
 *
 * @property \App\Model\Table\InternalEventsTable $InternalEvents
 */
class InternalEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TypeEvents', 'SpecialProjects', 'Fiscals', 'Surrogates', 'Producers', 'InformationProductions']
        ];
        $internalEvents = $this->paginate($this->InternalEvents);

        $this->set(compact('internalEvents'));
        $this->set('_serialize', ['internalEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Internal Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internalEvent = $this->InternalEvents->get($id, [
            'contain' => ['TypeEvents', 'SpecialProjects', 'Fiscals', 'Surrogates', 'Producers', 'InformationProductions']
        ]);

        $this->set('internalEvent', $internalEvent);
        $this->set('_serialize', ['internalEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internalEvent = $this->InternalEvents->newEntity();
        if ($this->request->is('post')) {
            $internalEvent = $this->InternalEvents->patchEntity($internalEvent, $this->request->data);
            if ($this->InternalEvents->save($internalEvent)) {
                $this->Flash->success(__('The internal event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internal event could not be saved. Please, try again.'));
            }
        }
        $typeEvents = $this->InternalEvents->TypeEvents->find('list', ['limit' => 200]);
        $specialProjects = $this->InternalEvents->SpecialProjects->find('list', ['limit' => 200]);
        $fiscals = $this->InternalEvents->Fiscals->find('list', ['limit' => 200]);
        $surrogates = $this->InternalEvents->Surrogates->find('list', ['limit' => 200]);
        $producers = $this->InternalEvents->Producers->find('list', ['limit' => 200]);
        $informationProductions = $this->InternalEvents->InformationProductions->find('list', ['limit' => 200]);
        $this->set(compact('internalEvent', 'typeEvents', 'specialProjects', 'fiscals', 'surrogates', 'producers', 'informationProductions'));
        $this->set('_serialize', ['internalEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Internal Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internalEvent = $this->InternalEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internalEvent = $this->InternalEvents->patchEntity($internalEvent, $this->request->data);
            if ($this->InternalEvents->save($internalEvent)) {
                $this->Flash->success(__('The internal event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internal event could not be saved. Please, try again.'));
            }
        }
        $typeEvents = $this->InternalEvents->TypeEvents->find('list', ['limit' => 200]);
        $specialProjects = $this->InternalEvents->SpecialProjects->find('list', ['limit' => 200]);
        $fiscals = $this->InternalEvents->Fiscals->find('list', ['limit' => 200]);
        $surrogates = $this->InternalEvents->Surrogates->find('list', ['limit' => 200]);
        $producers = $this->InternalEvents->Producers->find('list', ['limit' => 200]);
        $informationProductions = $this->InternalEvents->InformationProductions->find('list', ['limit' => 200]);
        $this->set(compact('internalEvent', 'typeEvents', 'specialProjects', 'fiscals', 'surrogates', 'producers', 'informationProductions'));
        $this->set('_serialize', ['internalEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Internal Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internalEvent = $this->InternalEvents->get($id);
        if ($this->InternalEvents->delete($internalEvent)) {
            $this->Flash->success(__('The internal event has been deleted.'));
        } else {
            $this->Flash->error(__('The internal event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
