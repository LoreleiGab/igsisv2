<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Funds Controller
 *
 * @property \App\Model\Table\FundsTable $Funds
 */
class FundsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Institutions']
        ];
        $funds = $this->paginate($this->Funds);

        $this->set(compact('funds'));
        $this->set('_serialize', ['funds']);
    }

    /**
     * View method
     *
     * @param string|null $id Fund id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fund = $this->Funds->get($id, [
            'contain' => ['Institutions', 'Users', 'EstimateControls', 'HiringRequests', 'HistoricHiringResquests']
        ]);

        $this->set('fund', $fund);
        $this->set('_serialize', ['fund']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fund = $this->Funds->newEntity();
        if ($this->request->is('post')) {
            $fund = $this->Funds->patchEntity($fund, $this->request->data);
            if ($this->Funds->save($fund)) {
                $this->Flash->success(__('The fund has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fund could not be saved. Please, try again.'));
            }
        }
        $institutions = $this->Funds->Institutions->find('list', ['limit' => 200]);
        $users = $this->Funds->Users->find('list', ['limit' => 200]);
        $this->set(compact('fund', 'institutions', 'users'));
        $this->set('_serialize', ['fund']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fund id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fund = $this->Funds->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fund = $this->Funds->patchEntity($fund, $this->request->data);
            if ($this->Funds->save($fund)) {
                $this->Flash->success(__('The fund has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fund could not be saved. Please, try again.'));
            }
        }
        $institutions = $this->Funds->Institutions->find('list', ['limit' => 200]);
        $users = $this->Funds->Users->find('list', ['limit' => 200]);
        $this->set(compact('fund', 'institutions', 'users'));
        $this->set('_serialize', ['fund']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fund id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fund = $this->Funds->get($id);
        if ($this->Funds->delete($fund)) {
            $this->Flash->success(__('The fund has been deleted.'));
        } else {
            $this->Flash->error(__('The fund could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
