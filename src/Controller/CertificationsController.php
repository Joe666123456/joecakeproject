<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Certifications Controller
 *
 * @property \App\Model\Table\CertificationsTable $Certifications
 * @method \App\Model\Entity\Certification[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CertificationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quizzes'],
        ];
        $certifications = $this->paginate($this->Certifications);

        $this->set(compact('certifications'));
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
        $certification = $this->Certifications->get($id, [
            'contain' => ['Quizzes', 'Awards'],
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
        $certification = $this->Certifications->newEmptyEntity();
        if ($this->request->is('post')) {
            $certification = $this->Certifications->patchEntity($certification, $this->request->getData());
            if ($this->Certifications->save($certification)) {
                $this->Flash->success(__('The certification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certification could not be saved. Please, try again.'));
        }
        $quizzes = $this->Certifications->Quizzes->find('list', ['limit' => 200])->all();
        $this->set(compact('certification', 'quizzes'));
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
        $certification = $this->Certifications->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $certification = $this->Certifications->patchEntity($certification, $this->request->getData());
            if ($this->Certifications->save($certification)) {
                $this->Flash->success(__('The certification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The certification could not be saved. Please, try again.'));
        }
        $quizzes = $this->Certifications->Quizzes->find('list', ['limit' => 200])->all();
        $this->set(compact('certification', 'quizzes'));
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
        $certification = $this->Certifications->get($id);
        if ($this->Certifications->delete($certification)) {
            $this->Flash->success(__('The certification has been deleted.'));
        } else {
            $this->Flash->error(__('The certification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
