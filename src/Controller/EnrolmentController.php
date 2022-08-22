<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Enrolment Controller
 *
 * @property \App\Model\Table\EnrolmentTable $Enrolment
 * @method \App\Model\Entity\Enrolment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnrolmentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Student', 'Course'],
        ];
        $enrolment = $this->paginate($this->Enrolment);

        $this->set(compact('enrolment'));
    }

    /**
     * View method
     *
     * @param string|null $id Enrolment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enrolment = $this->Enrolment->get($id, [
            'contain' => ['Student', 'Course'],
        ]);

        $this->set(compact('enrolment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enrolment = $this->Enrolment->newEmptyEntity();
        if ($this->request->is('post')) {
            $enrolment = $this->Enrolment->patchEntity($enrolment, $this->request->getData());
            if ($this->Enrolment->save($enrolment)) {
                $this->Flash->success(__('The enrolment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrolment could not be saved. Please, try again.'));
        }
        $student = $this->Enrolment->Student->find('list', ['limit' => 200])->all();
        $course = $this->Enrolment->Course->find('list', ['limit' => 200])->all();
        $this->set(compact('enrolment', 'student', 'course'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enrolment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enrolment = $this->Enrolment->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enrolment = $this->Enrolment->patchEntity($enrolment, $this->request->getData());
            if ($this->Enrolment->save($enrolment)) {
                $this->Flash->success(__('The enrolment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrolment could not be saved. Please, try again.'));
        }
        $student = $this->Enrolment->Student->find('list', ['limit' => 200])->all();
        $course = $this->Enrolment->Course->find('list', ['limit' => 200])->all();
        $this->set(compact('enrolment', 'student', 'course'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enrolment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enrolment = $this->Enrolment->get($id);
        if ($this->Enrolment->delete($enrolment)) {
            $this->Flash->success(__('The enrolment has been deleted.'));
        } else {
            $this->Flash->error(__('The enrolment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
