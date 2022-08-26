<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $record->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $record->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="records form content">
            <?= $this->Form->create($record) ?>
            <fieldset>
                <legend><?= __('Edit Record') ?></legend>
                <?php
                    echo $this->Form->control('record_file');
                    echo $this->Form->control('record_title');
                    echo $this->Form->control('record_length');
                    echo $this->Form->control('course_id', ['options' => $courses]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
