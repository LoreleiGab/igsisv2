<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ModulosUsuarios Controller
 *
 * @property \App\Model\Table\ModulosUsuariosTable $ModulosUsuarios
 */
class ModulosUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Modulos']
        ];
        $modulosUsuarios = $this->paginate($this->ModulosUsuarios);

        $this->set(compact('modulosUsuarios'));
        $this->set('_serialize', ['modulosUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Modulos Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modulosUsuario = $this->ModulosUsuarios->get($id, [
            'contain' => ['Usuarios', 'Modulos']
        ]);

        $this->set('modulosUsuario', $modulosUsuario);
        $this->set('_serialize', ['modulosUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modulosUsuario = $this->ModulosUsuarios->newEntity();
        if ($this->request->is('post')) {
            $modulosUsuario = $this->ModulosUsuarios->patchEntity($modulosUsuario, $this->request->data);
            if ($this->ModulosUsuarios->save($modulosUsuario)) {
                $this->Flash->success(__('The modulos usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modulos usuario could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->ModulosUsuarios->Usuarios->find('list', ['limit' => 200]);
        $modulos = $this->ModulosUsuarios->Modulos->find('list', ['limit' => 200]);
        $this->set(compact('modulosUsuario', 'usuarios', 'modulos'));
        $this->set('_serialize', ['modulosUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modulos Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modulosUsuario = $this->ModulosUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modulosUsuario = $this->ModulosUsuarios->patchEntity($modulosUsuario, $this->request->data);
            if ($this->ModulosUsuarios->save($modulosUsuario)) {
                $this->Flash->success(__('The modulos usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modulos usuario could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->ModulosUsuarios->Usuarios->find('list', ['limit' => 200]);
        $modulos = $this->ModulosUsuarios->Modulos->find('list', ['limit' => 200]);
        $this->set(compact('modulosUsuario', 'usuarios', 'modulos'));
        $this->set('_serialize', ['modulosUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modulos Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modulosUsuario = $this->ModulosUsuarios->get($id);
        if ($this->ModulosUsuarios->delete($modulosUsuario)) {
            $this->Flash->success(__('The modulos usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The modulos usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
