<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Certification Controller
 *
 * @property \App\Model\Table\CertificationTable $Certification
 * @method \App\Model\Entity\Certification[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CertificationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quiz'],
        ];
        $certification = $this->paginate($this->Certification);

        $this->set(compact('certification'));
    }

    /**
     * View method
     *
     * @param string|null $id Certification id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $certification = $this->Certification->get($id, [
            'contain' => ['Quiz', 'Award'],
        ]);

        $this->set(compact('certification'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $certification = $this->Certification->newEmptyEntity();
        if ($this->request->is('post')) {
            $certification = $this->Certification->patchEntity($certification, $this->request->getData());
            if ($this->Certification->save($certification)) {
                $this->Flash->success(__('The certification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certification could not be saved. Please, try again.'));
        }
        $quiz = $this->Certification->Quiz->find('list', ['limit' => 200])->all();
        $this->set(compact('certification', 'quiz'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Certification id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $certification = $this->Certification->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $certification = $this->Certification->patchEntity($certification, $this->request->getData());
            if ($this->Certification->save($certification)) {
                $this->Flash->success(__('The certification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certification could not be saved. Please, try again.'));
        }
        $quiz = $this->Certification->Quiz->find('list', ['limit' => 200])->all();
        $this->set(compact('certification', 'quiz'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Certification id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $certification = $this->Certification->get($id);
        if ($this->Certification->delete($certification)) {
            $this->Flash->success(__('The certification has been deleted.'));
        } else {
            $this->Flash->error(__('The certification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
