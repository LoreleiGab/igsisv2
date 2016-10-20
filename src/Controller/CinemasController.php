<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cinemas Controller
 *
 * @property \App\Model\Table\CinemasTable $Cinemas
 */
class CinemasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'MovieCountries']
        ];
        $cinemas = $this->paginate($this->Cinemas);

        $this->set(compact('cinemas'));
        $this->set('_serialize', ['cinemas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cinema = $this->Cinemas->get($id, [
            'contain' => ['Events', 'MovieCountries', 'AgendaPosters', 'Agendas', 'HistoricOccurrences', 'Occurrences']
        ]);

        $this->set('cinema', $cinema);
        $this->set('_serialize', ['cinema']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cinema = $this->Cinemas->newEntity();
        if ($this->request->is('post')) {
            $cinema = $this->Cinemas->patchEntity($cinema, $this->request->data);
            if ($this->Cinemas->save($cinema)) {
                $this->Flash->success(__('The cinema has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cinema could not be saved. Please, try again.'));
            }
        }
        $events = $this->Cinemas->Events->find('list', ['limit' => 200]);
        $movieCountries = $this->Cinemas->MovieCountries->find('list', ['limit' => 200]);
        $this->set(compact('cinema', 'events', 'movieCountries'));
        $this->set('_serialize', ['cinema']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cinema = $this->Cinemas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cinema = $this->Cinemas->patchEntity($cinema, $this->request->data);
            if ($this->Cinemas->save($cinema)) {
                $this->Flash->success(__('The cinema has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cinema could not be saved. Please, try again.'));
            }
        }
        $events = $this->Cinemas->Events->find('list', ['limit' => 200]);
        $movieCountries = $this->Cinemas->MovieCountries->find('list', ['limit' => 200]);
        $this->set(compact('cinema', 'events', 'movieCountries'));
        $this->set('_serialize', ['cinema']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cinema id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cinema = $this->Cinemas->get($id);
        if ($this->Cinemas->delete($cinema)) {
            $this->Flash->success(__('The cinema has been deleted.'));
        } else {
            $this->Flash->error(__('The cinema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
