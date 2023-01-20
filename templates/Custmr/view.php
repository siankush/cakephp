<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Custmr $custmr
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Custmr'), ['action' => 'edit', $custmr->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Custmr'), ['action' => 'delete', $custmr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $custmr->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Custmr'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Custmr'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="custmr view content">
            <h3><?= h($custmr->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($custmr->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($custmr->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($custmr->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($custmr->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Profile') ?></h4>
                <?php if (!empty($custmr->profile)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Custmr Id') ?></th>
                            <th><?= __('Occupation') ?></th>
                            <th><?= __('Address') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($custmr->profile as $profile) : ?>
                        <tr>
                            <td><?= h($profile->id) ?></td>
                            <td><?= h($profile->custmr_id) ?></td>
                            <td><?= h($profile->occupation) ?></td>
                            <td><?= h($profile->address) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Profile', 'action' => 'view', $profile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Profile', 'action' => 'edit', $profile->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profile', 'action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
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
