<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Instituicaos Controller
 *
 * @property \App\Model\Table\InstituicaosTable $Instituicaos
 */
class InstituicaosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $instituicaos = $this->paginate($this->Instituicaos);

        $this->set(compact('instituicaos'));
        $this->set('_serialize', ['instituicaos']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituicao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituicao = $this->Instituicaos->get($id, [
            'contain' => ['AgendaEmCartazs', 'Agendas', 'Comunicacaos', 'ControleOrcamentos', 'Eventos', 'Locals', 'PedidoContratacaos', 'Usuarios', 'Verbas', 'VerificaProducaos']
        ]);

        $this->set('instituicao', $instituicao);
        $this->set('_serialize', ['instituicao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instituicao = $this->Instituicaos->newEntity();
        if ($this->request->is('post')) {
            $instituicao = $this->Instituicaos->patchEntity($instituicao, $this->request->data);
            if ($this->Instituicaos->save($instituicao)) {
                $this->Flash->success(__('The instituicao has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicao'));
        $this->set('_serialize', ['instituicao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituicao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituicao = $this->Instituicaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituicao = $this->Instituicaos->patchEntity($instituicao, $this->request->data);
            if ($this->Instituicaos->save($instituicao)) {
                $this->Flash->success(__('The instituicao has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicao'));
        $this->set('_serialize', ['instituicao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituicao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituicao = $this->Instituicaos->get($id);
        if ($this->Instituicaos->delete($instituicao)) {
            $this->Flash->success(__('The instituicao has been deleted.'));
        } else {
            $this->Flash->error(__('The instituicao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
