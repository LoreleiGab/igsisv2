<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UploadEvents Controller
 *
 * @property \App\Model\Table\UploadEventsTable $UploadEvents
 */
class UploadEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $uploadEvents = $this->paginate($this->UploadEvents);

        $this->set(compact('uploadEvents'));
        $this->set('_serialize', ['uploadEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Upload Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uploadEvent = $this->UploadEvents->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('uploadEvent', $uploadEvent);
        $this->set('_serialize', ['uploadEvent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uploadEvent = $this->UploadEvents->newEntity();
        if ($this->request->is('post')) {
            $uploadEvent = $this->UploadEvents->patchEntity($uploadEvent, $this->request->data);
            if ($this->UploadEvents->save($uploadEvent)) {
                $this->Flash->success(__('The upload event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The upload event could not be saved. Please, try again.'));
            }
        }
        $events = $this->UploadEvents->Events->find('list', ['limit' => 200]);
        $this->set(compact('uploadEvent', 'events'));
        $this->set('_serialize', ['uploadEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Upload Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uploadEvent = $this->UploadEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uploadEvent = $this->UploadEvents->patchEntity($uploadEvent, $this->request->data);
            if ($this->UploadEvents->save($uploadEvent)) {
                $this->Flash->success(__('The upload event has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The upload event could not be saved. Please, try again.'));
            }
        }
        $events = $this->UploadEvents->Events->find('list', ['limit' => 200]);
        $this->set(compact('uploadEvent', 'events'));
        $this->set('_serialize', ['uploadEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Upload Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uploadEvent = $this->UploadEvents->get($id);
        if ($this->UploadEvents->delete($uploadEvent)) {
            $this->Flash->success(__('The upload event has been deleted.'));
        } else {
            $this->Flash->error(__('The upload event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
