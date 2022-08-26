<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="records view content">
            <h3><?= h($record->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Record File') ?></th>
                    <td><?= h($record->record_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Title') ?></th>
                    <td><?= h($record->record_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Length') ?></th>
                    <td><?= h($record->record_length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $record->has('course') ? $this->Html->link($record->course->name, ['controller' => 'Courses', 'action' => 'view', $record->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($record->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
