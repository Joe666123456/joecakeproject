<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Awards Controller
 *
 * @property \App\Model\Table\AwardsTable $Awards
 * @method \App\Model\Entity\Award[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AwardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Certifications'],
        ];
        $awards = $this->paginate($this->Awards);

        $this->set(compact('awards'));
    }

    /**
     * View method
     *
     * @param string|null $id Award id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $award = $this->Awards->get($id, [
            'contain' => ['Students', 'Certifications'],
        ]);

        $this->set(compact('award'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $award = $this->Awards->newEmptyEntity();
        if ($this->request->is('post')) {
            $award = $this->Awards->patchEntity($award, $this->request->getData());
            if ($this->Awards->save($award)) {
                $this->Flash->success(__('The award has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The award could not be saved. Please, try again.'));
        }
        $students = $this->Awards->Students->find('list', ['limit' => 200])->all();
        $certifications = $this->Awards->Certifications->find('list', ['limit' => 200])->all();
        $this->set(compact('award', 'students', 'certifications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Award id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $award = $this->Awards->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $award = $this->Awards->patchEntity($award, $this->request->getData());
            if ($this->Awards->save($award)) {
                $this->Flash->success(__('The award has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The award could not be saved. Please, try again.'));
        }
        $students = $this->Awards->Students->find('list', ['limit' => 200])->all();
        $certifications = $this->Awards->Certifications->find('list', ['limit' => 200])->all();
        $this->set(compact('award', 'students', 'certifications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Award id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $award = $this->Awards->get($id);
        if ($this->Awards->delete($award)) {
            $this->Flash->success(__('The award has been deleted.'));
        } else {
            $this->Flash->error(__('The award could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
