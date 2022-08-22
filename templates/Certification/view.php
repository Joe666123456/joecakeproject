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
            <?= $this->Html->link(__('List Certification'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Certification'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="certification view content">
            <h3><?= h($certification->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($certification->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quiz') ?></th>
                    <td><?= $certification->has('quiz') ? $this->Html->link($certification->quiz->id, ['controller' => 'Quiz', 'action' => 'view', $certification->quiz->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($certification->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Award') ?></h4>
                <?php if (!empty($certification->award)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Certification Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($certification->award as $award) : ?>
                        <tr>
                            <td><?= h($award->id) ?></td>
                            <td><?= h($award->student_id) ?></td>
                            <td><?= h($award->certification_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Award', 'action' => 'view', $award->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Award', 'action' => 'edit', $award->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Award', 'action' => 'delete', $award->id], ['confirm' => __('Are you sure you want to delete # {0}?', $award->id)]) ?>
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
