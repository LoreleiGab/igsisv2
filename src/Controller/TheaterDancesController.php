<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TheaterDances Controller
 *
 * @property \App\Model\Table\TheaterDancesTable $TheaterDances
 */
class TheaterDancesController extends AppController
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
        $theaterDances = $this->paginate($this->TheaterDances);

        $this->set(compact('theaterDances'));
        $this->set('_serialize', ['theaterDances']);
    }

    /**
     * View method
     *
     * @param string|null $id Theater Dance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $theaterDance = $this->TheaterDances->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('theaterDance', $theaterDance);
        $this->set('_serialize', ['theaterDance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $theaterDance = $this->TheaterDances->newEntity();
        if ($this->request->is('post')) {
            $theaterDance = $this->TheaterDances->patchEntity($theaterDance, $this->request->data);
            if ($this->TheaterDances->save($theaterDance)) {
                $this->Flash->success(__('The theater dance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The theater dance could not be saved. Please, try again.'));
            }
        }
        $events = $this->TheaterDances->Events->find('list', ['limit' => 200]);
        $this->set(compact('theaterDance', 'events'));
        $this->set('_serialize', ['theaterDance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Theater Dance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $theaterDance = $this->TheaterDances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $theaterDance = $this->TheaterDances->patchEntity($theaterDance, $this->request->data);
            if ($this->TheaterDances->save($theaterDance)) {
                $this->Flash->success(__('The theater dance has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The theater dance could not be saved. Please, try again.'));
            }
        }
        $events = $this->TheaterDances->Events->find('list', ['limit' => 200]);
        $this->set(compact('theaterDance', 'events'));
        $this->set('_serialize', ['theaterDance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Theater Dance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $theaterDance = $this->TheaterDances->get($id);
        if ($this->TheaterDances->delete($theaterDance)) {
            $this->Flash->success(__('The theater dance has been deleted.'));
        } else {
            $this->Flash->error(__('The theater dance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
