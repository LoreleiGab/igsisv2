<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Workshops Controller
 *
 * @property \App\Model\Table\WorkshopsTable $Workshops
 */
class WorkshopsController extends AppController
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
        $workshops = $this->paginate($this->Workshops);

        $this->set(compact('workshops'));
        $this->set('_serialize', ['workshops']);
    }

    /**
     * View method
     *
     * @param string|null $id Workshop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workshop = $this->Workshops->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('workshop', $workshop);
        $this->set('_serialize', ['workshop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workshop = $this->Workshops->newEntity();
        if ($this->request->is('post')) {
            $workshop = $this->Workshops->patchEntity($workshop, $this->request->data);
            if ($this->Workshops->save($workshop)) {
                $this->Flash->success(__('The workshop has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The workshop could not be saved. Please, try again.'));
            }
        }
        $events = $this->Workshops->Events->find('list', ['limit' => 200]);
        $this->set(compact('workshop', 'events'));
        $this->set('_serialize', ['workshop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Workshop id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workshop = $this->Workshops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workshop = $this->Workshops->patchEntity($workshop, $this->request->data);
            if ($this->Workshops->save($workshop)) {
                $this->Flash->success(__('The workshop has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The workshop could not be saved. Please, try again.'));
            }
        }
        $events = $this->Workshops->Events->find('list', ['limit' => 200]);
        $this->set(compact('workshop', 'events'));
        $this->set('_serialize', ['workshop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Workshop id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workshop = $this->Workshops->get($id);
        if ($this->Workshops->delete($workshop)) {
            $this->Flash->success(__('The workshop has been deleted.'));
        } else {
            $this->Flash->error(__('The workshop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
