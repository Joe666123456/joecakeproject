<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Course Controller
 *
 * @property \App\Model\Table\CourseTable $Course
 * @method \App\Model\Entity\Course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CourseController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $course = $this->paginate($this->Course);

        $this->set(compact('course'));
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Course->get($id, [
            'contain' => ['Enrolment', 'Quiz', 'Record'],
        ]);

        $this->set(compact('course'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $course = $this->Course->newEmptyEntity();
        if ($this->request->is('post')) {
            $course = $this->Course->patchEntity($course, $this->request->getData());
            if ($this->Course->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $course = $this->Course->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $course = $this->Course->patchEntity($course, $this->request->getData());
            if ($this->Course->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Course->get($id);
        if ($this->Course->delete($course)) {
            $this->Flash->success(__('The course has been deleted.'));
        } else {
            $this->Flash->error(__('The course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
