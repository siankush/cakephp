<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tableinfo> $tableinfo
 */
?>
<div class="tableinfo index content">
    <?= $this->Html->link(__('New Tableinfo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tableinfo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tableinfo as $tableinfo): ?>
                <tr>
                    <td><?= $this->Number->format($tableinfo->Id) ?></td>
                    <td><?= h($tableinfo->name) ?></td>
                    <td><?= h($tableinfo->email) ?></td>
                    <td><?= h($tableinfo->phone) ?></td>
                    <td><?= h($tableinfo->gender) ?></td>
                    <td><?= $this->Html->image($tableinfo->image) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tableinfo->Id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tableinfo->Id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tableinfo->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $tableinfo->Id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
            
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
