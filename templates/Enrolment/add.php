<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrolment $enrolment
 * @var \Cake\Collection\CollectionInterface|string[] $student
 * @var \Cake\Collection\CollectionInterface|string[] $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enrolment'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enrolment form content">
            <?= $this->Form->create($enrolment) ?>
            <fieldset>
                <legend><?= __('Add Enrolment') ?></legend>
                <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('startdate', ['empty' => true]);
                    echo $this->Form->control('payfee');
                    echo $this->Form->control('student_id', ['options' => $student]);
                    echo $this->Form->control('course_id', ['options' => $course]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
