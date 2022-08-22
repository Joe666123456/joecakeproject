<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Certification[]|\Cake\Collection\CollectionInterface $certification
 */
?>
<div class="certification index content">
    <?= $this->Html->link(__('New Certification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Certification') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('quiz_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($certification as $certification): ?>
                <tr>
                    <td><?= $this->Number->format($certification->id) ?></td>
                    <td><?= h($certification->title) ?></td>
                    <td><?= $certification->has('quiz') ? $this->Html->link($certification->quiz->id, ['controller' => 'Quiz', 'action' => 'view', $certification->quiz->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $certification->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $certification->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $certification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $certification->id)]) ?>
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
