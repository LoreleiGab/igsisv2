<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VisualArts Controller
 *
 * @property \App\Model\Table\VisualArtsTable $VisualArts
 */
class VisualArtsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $visualArts = $this->paginate($this->VisualArts);

        $this->set(compact('visualArts'));
        $this->set('_serialize', ['visualArts']);
    }

    /**
     * View method
     *
     * @param string|null $id Visual Art id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visualArt = $this->VisualArts->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('visualArt', $visualArt);
        $this->set('_serialize', ['visualArt']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visualArt = $this->VisualArts->newEntity();
        if ($this->request->is('post')) {
            $visualArt = $this->VisualArts->patchEntity($visualArt, $this->request->data);
            if ($this->VisualArts->save($visualArt)) {
                $this->Flash->success(__('The visual art has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visual art could not be saved. Please, try again.'));
            }
        }
        $events = $this->VisualArts->Events->find('list', ['limit' => 200]);
        $this->set(compact('visualArt', 'events'));
        $this->set('_serialize', ['visualArt']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Visual Art id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visualArt = $this->VisualArts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visualArt = $this->VisualArts->patchEntity($visualArt, $this->request->data);
            if ($this->VisualArts->save($visualArt)) {
                $this->Flash->success(__('The visual art has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visual art could not be saved. Please, try again.'));
            }
        }
        $events = $this->VisualArts->Events->find('list', ['limit' => 200]);
        $this->set(compact('visualArt', 'events'));
        $this->set('_serialize', ['visualArt']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Visual Art id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visualArt = $this->VisualArts->get($id);
        if ($this->VisualArts->delete($visualArt)) {
            $this->Flash->success(__('The visual art has been deleted.'));
        } else {
            $this->Flash->error(__('The visual art could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
