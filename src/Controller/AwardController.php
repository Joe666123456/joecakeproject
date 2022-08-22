<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Award Controller
 *
 * @property \App\Model\Table\AwardTable $Award
 * @method \App\Model\Entity\Award[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AwardController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Student', 'Certification'],
        ];
        $award = $this->paginate($this->Award);

        $this->set(compact('award'));
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
        $award = $this->Award->get($id, [
            'contain' => ['Student', 'Certification'],
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
        $award = $this->Award->newEmptyEntity();
        if ($this->request->is('post')) {
            $award = $this->Award->patchEntity($award, $this->request->getData());
            if ($this->Award->save($award)) {
                $this->Flash->success(__('The award has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The award could not be saved. Please, try again.'));
        }
        $student = $this->Award->Student->find('list', ['limit' => 200])->all();
        $certification = $this->Award->Certification->find('list', ['limit' => 200])->all();
        $this->set(compact('award', 'student', 'certification'));
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
        $award = $this->Award->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $award = $this->Award->patchEntity($award, $this->request->getData());
            if ($this->Award->save($award)) {
                $this->Flash->success(__('The award has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The award could not be saved. Please, try again.'));
        }
        $student = $this->Award->Student->find('list', ['limit' => 200])->all();
        $certification = $this->Award->Certification->find('list', ['limit' => 200])->all();
        $this->set(compact('award', 'student', 'certification'));
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
        $award = $this->Award->get($id);
        if ($this->Award->delete($award)) {
            $this->Flash->success(__('The award has been deleted.'));
        } else {
            $this->Flash->error(__('The award could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
