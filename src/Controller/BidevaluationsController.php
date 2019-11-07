<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bidevaluations Controller
 *
 * @property \App\Model\Table\BidevaluationsTable $Bidevaluations
 *
 * @method \App\Model\Entity\Bidevaluation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidevaluationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bidinfos', 'Users']
        ];
        $bidevaluations = $this->paginate($this->Bidevaluations);

        $this->set(compact('bidevaluations'));
    }

    /**
     * View method
     *
     * @param string|null $id Bidevaluation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidevaluation = $this->Bidevaluations->get($id, [
            'contain' => ['Bidinfos', 'Users']
        ]);

        $this->set('bidevaluation', $bidevaluation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidevaluation = $this->Bidevaluations->newEntity();
        if ($this->request->is('post')) {
            $bidevaluation = $this->Bidevaluations->patchEntity($bidevaluation, $this->request->getData());
            if ($this->Bidevaluations->save($bidevaluation)) {
                $this->Flash->success(__('The bidevaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidevaluation could not be saved. Please, try again.'));
        }
        $bidinfos = $this->Bidevaluations->Bidinfos->find('list', ['limit' => 200]);
        $users = $this->Bidevaluations->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidevaluation', 'bidinfos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bidevaluation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidevaluation = $this->Bidevaluations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidevaluation = $this->Bidevaluations->patchEntity($bidevaluation, $this->request->getData());
            if ($this->Bidevaluations->save($bidevaluation)) {
                $this->Flash->success(__('The bidevaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidevaluation could not be saved. Please, try again.'));
        }
        $bidinfos = $this->Bidevaluations->Bidinfos->find('list', ['limit' => 200]);
        $users = $this->Bidevaluations->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidevaluation', 'bidinfos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bidevaluation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidevaluation = $this->Bidevaluations->get($id);
        if ($this->Bidevaluations->delete($bidevaluation)) {
            $this->Flash->success(__('The bidevaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The bidevaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
