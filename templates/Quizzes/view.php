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
            <?= $this->Html->link(__('List Quizzes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quiz'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quizzes view content">
            <h3><?= h($quiz->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Quiz Title') ?></th>
                    <td><?= h($quiz->quiz_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $quiz->has('course') ? $this->Html->link($quiz->course->name, ['controller' => 'Courses', 'action' => 'view', $quiz->course->id]) : '' ?></td>
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
                <h4><?= __('Related Certifications') ?></h4>
                <?php if (!empty($quiz->certifications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Quiz Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quiz->certifications as $certifications) : ?>
                        <tr>
                            <td><?= h($certifications->id) ?></td>
                            <td><?= h($certifications->title) ?></td>
                            <td><?= h($certifications->quiz_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Certifications', 'action' => 'view', $certifications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Certifications', 'action' => 'edit', $certifications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Certifications', 'action' => 'delete', $certifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $certifications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Questions') ?></h4>
                <?php if (!empty($quiz->questions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quiz Id') ?></th>
                            <th><?= __('Option1') ?></th>
                            <th><?= __('Option2') ?></th>
                            <th><?= __('Option3') ?></th>
                            <th><?= __('Answer') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quiz->questions as $questions) : ?>
                        <tr>
                            <td><?= h($questions->id) ?></td>
                            <td><?= h($questions->quiz_id) ?></td>
                            <td><?= h($questions->option1) ?></td>
                            <td><?= h($questions->option2) ?></td>
                            <td><?= h($questions->option3) ?></td>
                            <td><?= h($questions->answer) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
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
