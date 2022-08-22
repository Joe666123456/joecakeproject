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
            <?= $this->Html->link(__('List Course'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="course view content">
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
                <h4><?= __('Related Enrolment') ?></h4>
                <?php if (!empty($course->enrolment)) : ?>
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
                        <?php foreach ($course->enrolment as $enrolment) : ?>
                        <tr>
                            <td><?= h($enrolment->id) ?></td>
                            <td><?= h($enrolment->type) ?></td>
                            <td><?= h($enrolment->startdate) ?></td>
                            <td><?= h($enrolment->payfee) ?></td>
                            <td><?= h($enrolment->student_id) ?></td>
                            <td><?= h($enrolment->course_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Enrolment', 'action' => 'view', $enrolment->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Enrolment', 'action' => 'edit', $enrolment->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enrolment', 'action' => 'delete', $enrolment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolment->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Quiz') ?></h4>
                <?php if (!empty($course->quiz)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quiz Title') ?></th>
                            <th><?= __('Quiz Time') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->quiz as $quiz) : ?>
                        <tr>
                            <td><?= h($quiz->id) ?></td>
                            <td><?= h($quiz->quiz_title) ?></td>
                            <td><?= h($quiz->quiz_time) ?></td>
                            <td><?= h($quiz->course_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Quiz', 'action' => 'view', $quiz->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Quiz', 'action' => 'edit', $quiz->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quiz', 'action' => 'delete', $quiz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Record') ?></h4>
                <?php if (!empty($course->record)) : ?>
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
                        <?php foreach ($course->record as $record) : ?>
                        <tr>
                            <td><?= h($record->id) ?></td>
                            <td><?= h($record->record_file) ?></td>
                            <td><?= h($record->record_title) ?></td>
                            <td><?= h($record->record_length) ?></td>
                            <td><?= h($record->course_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Record', 'action' => 'view', $record->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Record', 'action' => 'edit', $record->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Record', 'action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
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
