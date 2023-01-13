<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tabledata $tabledata
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tabledata'), ['action' => 'edit', $tabledata->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tabledata'), ['action' => 'delete', $tabledata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabledata->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tabledata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tabledata'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tabledata view content">
            <h3><?= h($tabledata->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= ($tabledata->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($tabledata->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($tabledata->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($tabledata->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tabledata->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
