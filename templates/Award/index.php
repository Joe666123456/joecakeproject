<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Award[]|\Cake\Collection\CollectionInterface $award
 */
?>
<div class="award index content">
    <?= $this->Html->link(__('New Award'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Award') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('certification_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($award as $award): ?>
                <tr>
                    <td><?= $this->Number->format($award->id) ?></td>
                    <td><?= $award->has('student') ? $this->Html->link($award->student->id, ['controller' => 'Student', 'action' => 'view', $award->student->id]) : '' ?></td>
                    <td><?= $award->has('certification') ? $this->Html->link($award->certification->title, ['controller' => 'Certification', 'action' => 'view', $award->certification->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $award->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $award->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $award->id], ['confirm' => __('Are you sure you want to delete # {0}?', $award->id)]) ?>
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
