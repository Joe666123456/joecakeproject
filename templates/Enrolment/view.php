<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrolment $enrolment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Enrolment'), ['action' => 'edit', $enrolment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Enrolment'), ['action' => 'delete', $enrolment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrolment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enrolment'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Enrolment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enrolment view content">
            <h3><?= h($enrolment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($enrolment->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $enrolment->has('student') ? $this->Html->link($enrolment->student->id, ['controller' => 'Student', 'action' => 'view', $enrolment->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $enrolment->has('course') ? $this->Html->link($enrolment->course->name, ['controller' => 'Course', 'action' => 'view', $enrolment->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($enrolment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payfee') ?></th>
                    <td><?= $enrolment->payfee === null ? '' : $this->Number->format($enrolment->payfee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Startdate') ?></th>
                    <td><?= h($enrolment->startdate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
