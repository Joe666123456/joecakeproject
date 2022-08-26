<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="questions view content">
            <h3><?= h($question->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Quiz') ?></th>
                    <td><?= $question->has('quiz') ? $this->Html->link($question->quiz->id, ['controller' => 'Quizzes', 'action' => 'view', $question->quiz->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Option1') ?></th>
                    <td><?= h($question->option1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Option2') ?></th>
                    <td><?= h($question->option2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Option3') ?></th>
                    <td><?= h($question->option3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer') ?></th>
                    <td><?= h($question->answer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($question->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
