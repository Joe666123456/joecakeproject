<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <h3><?= h($course->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($course->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($course->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($course->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $this->Number->format($course->level) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Enrolments') ?></h4>
                <?php if (!empty($course->enrolments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Startdate') ?></th>
                            <th><?= __('Payfee') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->enrolments as $enrolments) : ?>
                        <tr>
                            <td><?= h($enrolments->id) ?></td>
                            <td><?= h($enrolments->type) ?></td>
                            <td><?= h($enrolments->startdate) ?></td>
                            <td><?= h($enrolments->payfee) ?></td>
                            <td><?= h($enrolments->student_id) ?></td>
                            <td><?= h($enrolments->course_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Enrolments', 'action' => 'view', $enrolments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Enrolments', 'action' => 'edit', $enrolments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enrolments', 'action' => 'delete', $enrolments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Quizzes') ?></h4>
                <?php if (!empty($course->quizzes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quiz Title') ?></th>
                            <th><?= __('Quiz Time') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->quizzes as $quizzes) : ?>
                        <tr>
                            <td><?= h($quizzes->id) ?></td>
                            <td><?= h($quizzes->quiz_title) ?></td>
                            <td><?= h($quizzes->quiz_time) ?></td>
                            <td><?= h($quizzes->course_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Quizzes', 'action' => 'view', $quizzes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Quizzes', 'action' => 'edit', $quizzes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quizzes', 'action' => 'delete', $quizzes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Records') ?></h4>
                <?php if (!empty($course->records)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Record File') ?></th>
                            <th><?= __('Record Title') ?></th>
                            <th><?= __('Record Length') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->records as $records) : ?>
                        <tr>
                            <td><?= h($records->id) ?></td>
                            <td><?= h($records->record_file) ?></td>
                            <td><?= h($records->record_title) ?></td>
                            <td><?= h($records->record_length) ?></td>
                            <td><?= h($records->course_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Records', 'action' => 'view', $records->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Records', 'action' => 'edit', $records->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Records', 'action' => 'delete', $records->id], ['confirm' => __('Are you sure you want to delete # {0}?', $records->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
