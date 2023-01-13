<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustmrTable $custmrTable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Custmr Table'), ['action' => 'edit', $custmrTable->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Custmr Table'), ['action' => 'delete', $custmrTable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $custmrTable->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Custmr Tables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Custmr Table'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="custmrTables view content">
            <h3><?= h($custmrTable->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($custmrTable->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($custmrTable->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($custmrTable->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($custmrTable->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
