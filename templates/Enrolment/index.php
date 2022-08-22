<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrolment[]|\Cake\Collection\CollectionInterface $enrolment
 */
?>
<div class="enrolment index content">
    <?= $this->Html->link(__('New Enrolment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Enrolment') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('startdate') ?></th>
                    <th><?= $this->Paginator->sort('payfee') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enrolment as $enrolment): ?>
                <tr>
                    <td><?= $this->Number->format($enrolment->id) ?></td>
                    <td><?= h($enrolment->type) ?></td>
                    <td><?= h($enrolment->startdate) ?></td>
                    <td><?= $enrolment->payfee === null ? '' : $this->Number->format($enrolment->payfee) ?></td>
                    <td><?= $enrolment->has('student') ? $this->Html->link($enrolment->student->id, ['controller' => 'Student', 'action' => 'view', $enrolment->student->id]) : '' ?></td>
                    <td><?= $enrolment->has('course') ? $this->Html->link($enrolment->course->name, ['controller' => 'Course', 'action' => 'view', $enrolment->course->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enrolment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enrolment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enrolment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolment->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
