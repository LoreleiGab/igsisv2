<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MovieCountries Controller
 *
 * @property \App\Model\Table\MovieCountriesTable $MovieCountries
 */
class MovieCountriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $movieCountries = $this->paginate($this->MovieCountries);

        $this->set(compact('movieCountries'));
        $this->set('_serialize', ['movieCountries']);
    }

    /**
     * View method
     *
     * @param string|null $id Movie Country id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movieCountry = $this->MovieCountries->get($id, [
            'contain' => []
        ]);

        $this->set('movieCountry', $movieCountry);
        $this->set('_serialize', ['movieCountry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movieCountry = $this->MovieCountries->newEntity();
        if ($this->request->is('post')) {
            $movieCountry = $this->MovieCountries->patchEntity($movieCountry, $this->request->data);
            if ($this->MovieCountries->save($movieCountry)) {
                $this->Flash->success(__('The movie country has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The movie country could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('movieCountry'));
        $this->set('_serialize', ['movieCountry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movie Country id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movieCountry = $this->MovieCountries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movieCountry = $this->MovieCountries->patchEntity($movieCountry, $this->request->data);
            if ($this->MovieCountries->save($movieCountry)) {
                $this->Flash->success(__('The movie country has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The movie country could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('movieCountry'));
        $this->set('_serialize', ['movieCountry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movie Country id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movieCountry = $this->MovieCountries->get($id);
        if ($this->MovieCountries->delete($movieCountry)) {
            $this->Flash->success(__('The movie country has been deleted.'));
        } else {
            $this->Flash->error(__('The movie country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
