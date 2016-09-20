<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modulos Controller
 *
 * @property \App\Model\Table\ModulosTable $Modulos
 */
class ModulosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $modulos = $this->paginate($this->Modulos);

        $this->set(compact('modulos'));
        $this->set('_serialize', ['modulos']);
    }

    /**
     * View method
     *
     * @param string|null $id Modulo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modulo = $this->Modulos->get($id, [
            'contain' => ['Usuarios']
        ]);

        $this->set('modulo', $modulo);
        $this->set('_serialize', ['modulo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modulo = $this->Modulos->newEntity();
        if ($this->request->is('post')) {
            $modulo = $this->Modulos->patchEntity($modulo, $this->request->data);
            if ($this->Modulos->save($modulo)) {
                $this->Flash->success(__('The modulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modulo could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Modulos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('modulo', 'usuarios'));
        $this->set('_serialize', ['modulo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modulo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modulo = $this->Modulos->get($id, [
            'contain' => ['Usuarios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modulo = $this->Modulos->patchEntity($modulo, $this->request->data);
            if ($this->Modulos->save($modulo)) {
                $this->Flash->success(__('The modulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modulo could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Modulos->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('modulo', 'usuarios'));
        $this->set('_serialize', ['modulo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modulo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modulo = $this->Modulos->get($id);
        if ($this->Modulos->delete($modulo)) {
            $this->Flash->success(__('The modulo has been deleted.'));
        } else {
            $this->Flash->error(__('The modulo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
