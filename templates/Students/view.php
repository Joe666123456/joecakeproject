<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($student->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($student->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($student->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($student->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($student->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $student->age === null ? '' : $this->Number->format($student->age) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Awards') ?></h4>
                <?php if (!empty($student->awards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Certification Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->awards as $awards) : ?>
                        <tr>
                            <td><?= h($awards->id) ?></td>
                            <td><?= h($awards->student_id) ?></td>
                            <td><?= h($awards->certification_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Awards', 'action' => 'view', $awards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Awards', 'action' => 'edit', $awards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Awards', 'action' => 'delete', $awards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $awards->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Enrolments') ?></h4>
                <?php if (!empty($student->enrolments)) : ?>
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
                        <?php foreach ($student->enrolments as $enrolments) : ?>
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
        </div>
    </div>
</div>
