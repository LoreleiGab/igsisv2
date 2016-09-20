<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuariosVerbas Controller
 *
 * @property \App\Model\Table\UsuariosVerbasTable $UsuariosVerbas
 */
class UsuariosVerbasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Verbas', 'Usuarios']
        ];
        $usuariosVerbas = $this->paginate($this->UsuariosVerbas);

        $this->set(compact('usuariosVerbas'));
        $this->set('_serialize', ['usuariosVerbas']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios Verba id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosVerba = $this->UsuariosVerbas->get($id, [
            'contain' => ['Verbas', 'Usuarios']
        ]);

        $this->set('usuariosVerba', $usuariosVerba);
        $this->set('_serialize', ['usuariosVerba']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariosVerba = $this->UsuariosVerbas->newEntity();
        if ($this->request->is('post')) {
            $usuariosVerba = $this->UsuariosVerbas->patchEntity($usuariosVerba, $this->request->data);
            if ($this->UsuariosVerbas->save($usuariosVerba)) {
                $this->Flash->success(__('The usuarios verba has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuarios verba could not be saved. Please, try again.'));
            }
        }
        $verbas = $this->UsuariosVerbas->Verbas->find('list', ['limit' => 200]);
        $usuarios = $this->UsuariosVerbas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('usuariosVerba', 'verbas', 'usuarios'));
        $this->set('_serialize', ['usuariosVerba']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios Verba id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosVerba = $this->UsuariosVerbas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosVerba = $this->UsuariosVerbas->patchEntity($usuariosVerba, $this->request->data);
            if ($this->UsuariosVerbas->save($usuariosVerba)) {
                $this->Flash->success(__('The usuarios verba has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuarios verba could not be saved. Please, try again.'));
            }
        }
        $verbas = $this->UsuariosVerbas->Verbas->find('list', ['limit' => 200]);
        $usuarios = $this->UsuariosVerbas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('usuariosVerba', 'verbas', 'usuarios'));
        $this->set('_serialize', ['usuariosVerba']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios Verba id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosVerba = $this->UsuariosVerbas->get($id);
        if ($this->UsuariosVerbas->delete($usuariosVerba)) {
            $this->Flash->success(__('The usuarios verba has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios verba could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
