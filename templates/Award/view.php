<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Award $award
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Award'), ['action' => 'edit', $award->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Award'), ['action' => 'delete', $award->id], ['confirm' => __('Are you sure you want to delete # {0}?', $award->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Award'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Award'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="award view content">
            <h3><?= h($award->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $award->has('student') ? $this->Html->link($award->student->id, ['controller' => 'Student', 'action' => 'view', $award->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Certification') ?></th>
                    <td><?= $award->has('certification') ? $this->Html->link($award->certification->title, ['controller' => 'Certification', 'action' => 'view', $award->certification->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($award->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
