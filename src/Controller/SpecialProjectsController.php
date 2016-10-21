<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SpecialProjects Controller
 *
 * @property \App\Model\Table\SpecialProjectsTable $SpecialProjects
 */
class SpecialProjectsController extends AppController
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
        $specialProjects = $this->paginate($this->SpecialProjects);

        $this->set(compact('specialProjects'));
        $this->set('_serialize', ['specialProjects']);
    }

    /**
     * View method
     *
     * @param string|null $id Special Project id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialProject = $this->SpecialProjects->get($id, [
            'contain' => ['Institutions']
        ]);

        $this->set('specialProject', $specialProject);
        $this->set('_serialize', ['specialProject']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialProject = $this->SpecialProjects->newEntity();
        if ($this->request->is('post')) {
            $specialProject = $this->SpecialProjects->patchEntity($specialProject, $this->request->data);
            if ($this->SpecialProjects->save($specialProject)) {
                $this->Flash->success(__('The special project has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The special project could not be saved. Please, try again.'));
            }
        }
        $institutions = $this->SpecialProjects->Institutions->find('list', ['limit' => 200]);
        $this->set(compact('specialProject', 'institutions'));
        $this->set('_serialize', ['specialProject']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Special Project id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialProject = $this->SpecialProjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialProject = $this->SpecialProjects->patchEntity($specialProject, $this->request->data);
            if ($this->SpecialProjects->save($specialProject)) {
                $this->Flash->success(__('The special project has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The special project could not be saved. Please, try again.'));
            }
        }
        $institutions = $this->SpecialProjects->Institutions->find('list', ['limit' => 200]);
        $this->set(compact('specialProject', 'institutions'));
        $this->set('_serialize', ['specialProject']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Special Project id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialProject = $this->SpecialProjects->get($id);
        if ($this->SpecialProjects->delete($specialProject)) {
            $this->Flash->success(__('The special project has been deleted.'));
        } else {
            $this->Flash->error(__('The special project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
