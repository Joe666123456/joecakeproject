<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Certification $certification
 * @var \Cake\Collection\CollectionInterface|string[] $quizzes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Certifications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="certifications form content">
            <?= $this->Form->create($certification) ?>
            <fieldset>
                <legend><?= __('Add Certification') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('quiz_id', ['options' => $quizzes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
