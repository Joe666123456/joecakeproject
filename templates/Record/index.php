<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record[]|\Cake\Collection\CollectionInterface $record
 */
?>
<div class="record index content">
    <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Record') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('record_file') ?></th>
                    <th><?= $this->Paginator->sort('record_title') ?></th>
                    <th><?= $this->Paginator->sort('record_length') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($record as $record): ?>
                <tr>
                    <td><?= $this->Number->format($record->id) ?></td>
                    <td><?= h($record->record_file) ?></td>
                    <td><?= h($record->record_title) ?></td>
                    <td><?= h($record->record_length) ?></td>
                    <td><?= $record->has('course') ? $this->Html->link($record->course->name, ['controller' => 'Course', 'action' => 'view', $record->course->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $record->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
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
