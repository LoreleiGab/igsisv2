<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AgeGroups Controller
 *
 * @property \App\Model\Table\AgeGroupsTable $AgeGroups
 */
class AgeGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ageGroups = $this->paginate($this->AgeGroups);

        $this->set(compact('ageGroups'));
        $this->set('_serialize', ['ageGroups']);
    }

    /**
     * View method
     *
     * @param string|null $id Age Group id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ageGroup = $this->AgeGroups->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('ageGroup', $ageGroup);
        $this->set('_serialize', ['ageGroup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ageGroup = $this->AgeGroups->newEntity();
        if ($this->request->is('post')) {
            $ageGroup = $this->AgeGroups->patchEntity($ageGroup, $this->request->data);
            if ($this->AgeGroups->save($ageGroup)) {
                $this->Flash->success(__('The age group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The age group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ageGroup'));
        $this->set('_serialize', ['ageGroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Age Group id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ageGroup = $this->AgeGroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ageGroup = $this->AgeGroups->patchEntity($ageGroup, $this->request->data);
            if ($this->AgeGroups->save($ageGroup)) {
                $this->Flash->success(__('The age group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The age group could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ageGroup'));
        $this->set('_serialize', ['ageGroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Age Group id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ageGroup = $this->AgeGroups->get($id);
        if ($this->AgeGroups->delete($ageGroup)) {
            $this->Flash->success(__('The age group has been deleted.'));
        } else {
            $this->Flash->error(__('The age group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
