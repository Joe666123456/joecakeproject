<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Award $award
 * @var string[]|\Cake\Collection\CollectionInterface $student
 * @var string[]|\Cake\Collection\CollectionInterface $certification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $award->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $award->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Award'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="award form content">
            <?= $this->Form->create($award) ?>
            <fieldset>
                <legend><?= __('Edit Award') ?></legend>
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
