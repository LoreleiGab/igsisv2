<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjetoEspecials Controller
 *
 * @property \App\Model\Table\ProjetoEspecialsTable $ProjetoEspecials
 */
class ProjetoEspecialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $projetoEspecials = $this->paginate($this->ProjetoEspecials);

        $this->set(compact('projetoEspecials'));
        $this->set('_serialize', ['projetoEspecials']);
    }

    /**
     * View method
     *
     * @param string|null $id Projeto Especial id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetoEspecial = $this->ProjetoEspecials->get($id, [
            'contain' => ['EventoInternos', 'Eventos']
        ]);

        $this->set('projetoEspecial', $projetoEspecial);
        $this->set('_serialize', ['projetoEspecial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetoEspecial = $this->ProjetoEspecials->newEntity();
        if ($this->request->is('post')) {
            $projetoEspecial = $this->ProjetoEspecials->patchEntity($projetoEspecial, $this->request->data);
            if ($this->ProjetoEspecials->save($projetoEspecial)) {
                $this->Flash->success(__('The projeto especial has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The projeto especial could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('projetoEspecial'));
        $this->set('_serialize', ['projetoEspecial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Projeto Especial id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetoEspecial = $this->ProjetoEspecials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetoEspecial = $this->ProjetoEspecials->patchEntity($projetoEspecial, $this->request->data);
            if ($this->ProjetoEspecials->save($projetoEspecial)) {
                $this->Flash->success(__('The projeto especial has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The projeto especial could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('projetoEspecial'));
        $this->set('_serialize', ['projetoEspecial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Projeto Especial id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetoEspecial = $this->ProjetoEspecials->get($id);
        if ($this->ProjetoEspecials->delete($projetoEspecial)) {
            $this->Flash->success(__('The projeto especial has been deleted.'));
        } else {
            $this->Flash->error(__('The projeto especial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
