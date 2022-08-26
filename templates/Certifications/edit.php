<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Certification $certification
 * @var string[]|\Cake\Collection\CollectionInterface $quizzes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $certification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $certification->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Certifications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="certifications form content">
            <?= $this->Form->create($certification) ?>
            <fieldset>
                <legend><?= __('Edit Certification') ?></legend>
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
