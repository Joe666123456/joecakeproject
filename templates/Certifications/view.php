<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Certification $certification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Certification'), ['action' => 'edit', $certification->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Certification'), ['action' => 'delete', $certification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $certification->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Certifications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Certification'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="certifications view content">
            <h3><?= h($certification->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($certification->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quiz') ?></th>
                    <td><?= $certification->has('quiz') ? $this->Html->link($certification->quiz->id, ['controller' => 'Quizzes', 'action' => 'view', $certification->quiz->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($certification->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Awards') ?></h4>
                <?php if (!empty($certification->awards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Certification Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($certification->awards as $awards) : ?>
                        <tr>
                            <td><?= h($awards->id) ?></td>
                            <td><?= h($awards->student_id) ?></td>
                            <td><?= h($awards->certification_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Awards', 'action' => 'view', $awards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Awards', 'action' => 'edit', $awards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Awards', 'action' => 'delete', $awards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $awards->id)]) ?>
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
