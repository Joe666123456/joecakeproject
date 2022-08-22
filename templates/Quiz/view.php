<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quiz'), ['action' => 'edit', $quiz->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quiz'), ['action' => 'delete', $quiz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quiz'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quiz'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quiz view content">
            <h3><?= h($quiz->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Quiz Title') ?></th>
                    <td><?= h($quiz->quiz_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $quiz->has('course') ? $this->Html->link($quiz->course->name, ['controller' => 'Course', 'action' => 'view', $quiz->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quiz->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quiz Time') ?></th>
                    <td><?= h($quiz->quiz_time) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Certification') ?></h4>
                <?php if (!empty($quiz->certification)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Quiz Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quiz->certification as $certification) : ?>
                        <tr>
                            <td><?= h($certification->id) ?></td>
                            <td><?= h($certification->title) ?></td>
                            <td><?= h($certification->quiz_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Certification', 'action' => 'view', $certification->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Certification', 'action' => 'edit', $certification->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Certification', 'action' => 'delete', $certification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $certification->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
