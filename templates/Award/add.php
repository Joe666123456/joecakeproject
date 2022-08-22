<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Award $award
 * @var \Cake\Collection\CollectionInterface|string[] $student
 * @var \Cake\Collection\CollectionInterface|string[] $certification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Award'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="award form content">
            <?= $this->Form->create($award) ?>
            <fieldset>
                <legend><?= __('Add Award') ?></legend>
                <?php
                    echo $this->Form->control('student_id', ['options' => $student]);
                    echo $this->Form->control('certification_id', ['options' => $certification]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
