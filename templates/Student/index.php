<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $student
 */
?>
<div class="student index content">
    <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Student') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($student as $student): ?>
                <tr>
                    <td><?= $this->Number->format($student->id) ?></td>
                    <td><?= h($student->firstname) ?></td>
                    <td><?= h($student->lastname) ?></td>
                    <td><?= $student->age === null ? '' : $this->Number->format($student->age) ?></td>
                    <td><?= h($student->gender) ?></td>
                    <td><?= h($student->phone) ?></td>
                    <td><?= h($student->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
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
