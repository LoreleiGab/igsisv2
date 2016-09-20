<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Verbas Controller
 *
 * @property \App\Model\Table\VerbasTable $Verbas
 */
class VerbasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Instituicaos']
        ];
        $verbas = $this->paginate($this->Verbas);

        $this->set(compact('verbas'));
        $this->set('_serialize', ['verbas']);
    }

    /**
     * View method
     *
     * @param string|null $id Verba id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $verba = $this->Verbas->get($id, [
            'contain' => ['Instituicaos', 'Usuarios', 'ControleOrcamentos', 'PedidoContratacaos', 'VerbaMultiplas']
        ]);

        $this->set('verba', $verba);
        $this->set('_serialize', ['verba']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $verba = $this->Verbas->newEntity();
        if ($this->request->is('post')) {
            $verba = $this->Verbas->patchEntity($verba, $this->request->data);
            if ($this->Verbas->save($verba)) {
                $this->Flash->success(__('The verba has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The verba could not be saved. Please, try again.'));
            }
        }
        $instituicaos = $this->Verbas->Instituicaos->find('list', ['limit' => 200]);
        $usuarios = $this->Verbas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('verba', 'instituicaos', 'usuarios'));
        $this->set('_serialize', ['verba']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Verba id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $verba = $this->Verbas->get($id, [
            'contain' => ['Usuarios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $verba = $this->Verbas->patchEntity($verba, $this->request->data);
            if ($this->Verbas->save($verba)) {
                $this->Flash->success(__('The verba has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The verba could not be saved. Please, try again.'));
            }
        }
        $instituicaos = $this->Verbas->Instituicaos->find('list', ['limit' => 200]);
        $usuarios = $this->Verbas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('verba', 'instituicaos', 'usuarios'));
        $this->set('_serialize', ['verba']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Verba id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $verba = $this->Verbas->get($id);
        if ($this->Verbas->delete($verba)) {
            $this->Flash->success(__('The verba has been deleted.'));
        } else {
            $this->Flash->error(__('The verba could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
