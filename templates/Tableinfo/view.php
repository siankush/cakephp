<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tableinfo $tableinfo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tableinfo'), ['action' => 'edit', $tableinfo->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tableinfo'), ['action' => 'delete', $tableinfo->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $tableinfo->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tableinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tableinfo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tableinfo view content">
            <h3><?= h($tableinfo->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tableinfo->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($tableinfo->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($tableinfo->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($tableinfo->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tableinfo->Id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
