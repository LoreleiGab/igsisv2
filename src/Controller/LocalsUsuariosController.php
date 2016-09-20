<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LocalsUsuarios Controller
 *
 * @property \App\Model\Table\LocalsUsuariosTable $LocalsUsuarios
 */
class LocalsUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Locals', 'Usuarios']
        ];
        $localsUsuarios = $this->paginate($this->LocalsUsuarios);

        $this->set(compact('localsUsuarios'));
        $this->set('_serialize', ['localsUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Locals Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $localsUsuario = $this->LocalsUsuarios->get($id, [
            'contain' => ['Locals', 'Usuarios']
        ]);

        $this->set('localsUsuario', $localsUsuario);
        $this->set('_serialize', ['localsUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $localsUsuario = $this->LocalsUsuarios->newEntity();
        if ($this->request->is('post')) {
            $localsUsuario = $this->LocalsUsuarios->patchEntity($localsUsuario, $this->request->data);
            if ($this->LocalsUsuarios->save($localsUsuario)) {
                $this->Flash->success(__('The locals usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The locals usuario could not be saved. Please, try again.'));
            }
        }
        $locals = $this->LocalsUsuarios->Locals->find('list', ['limit' => 200]);
        $usuarios = $this->LocalsUsuarios->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('localsUsuario', 'locals', 'usuarios'));
        $this->set('_serialize', ['localsUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Locals Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $localsUsuario = $this->LocalsUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $localsUsuario = $this->LocalsUsuarios->patchEntity($localsUsuario, $this->request->data);
            if ($this->LocalsUsuarios->save($localsUsuario)) {
                $this->Flash->success(__('The locals usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The locals usuario could not be saved. Please, try again.'));
            }
        }
        $locals = $this->LocalsUsuarios->Locals->find('list', ['limit' => 200]);
        $usuarios = $this->LocalsUsuarios->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('localsUsuario', 'locals', 'usuarios'));
        $this->set('_serialize', ['localsUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Locals Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $localsUsuario = $this->LocalsUsuarios->get($id);
        if ($this->LocalsUsuarios->delete($localsUsuario)) {
            $this->Flash->success(__('The locals usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The locals usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
