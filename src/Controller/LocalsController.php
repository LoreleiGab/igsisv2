<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locals Controller
 *
 * @property \App\Model\Table\LocalsTable $Locals
 */
class LocalsController extends AppController
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
        $locals = $this->paginate($this->Locals);

        $this->set(compact('locals'));
        $this->set('_serialize', ['locals']);
    }

    /**
     * View method
     *
     * @param string|null $id Local id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $local = $this->Locals->get($id, [
            'contain' => ['Instituicaos', 'Usuarios', 'AgendaEmCartazs', 'Agendas', 'DetalheLocals', 'HistoricoOcorrencias', 'Ocorrencias']
        ]);

        $this->set('local', $local);
        $this->set('_serialize', ['local']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $local = $this->Locals->newEntity();
        if ($this->request->is('post')) {
            $local = $this->Locals->patchEntity($local, $this->request->data);
            if ($this->Locals->save($local)) {
                $this->Flash->success(__('The local has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The local could not be saved. Please, try again.'));
            }
        }
        $instituicaos = $this->Locals->Instituicaos->find('list', ['limit' => 200]);
        $usuarios = $this->Locals->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('local', 'instituicaos', 'usuarios'));
        $this->set('_serialize', ['local']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Local id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $local = $this->Locals->get($id, [
            'contain' => ['Usuarios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $local = $this->Locals->patchEntity($local, $this->request->data);
            if ($this->Locals->save($local)) {
                $this->Flash->success(__('The local has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The local could not be saved. Please, try again.'));
            }
        }
        $instituicaos = $this->Locals->Instituicaos->find('list', ['limit' => 200]);
        $usuarios = $this->Locals->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('local', 'instituicaos', 'usuarios'));
        $this->set('_serialize', ['local']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Local id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $local = $this->Locals->get($id);
        if ($this->Locals->delete($local)) {
            $this->Flash->success(__('The local has been deleted.'));
        } else {
            $this->Flash->error(__('The local could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
