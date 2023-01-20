<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Custmr> $custmr
 */
?>
<div class="custmr index content">
    <?= $this->Html->link(__('New Custmr'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Custmr') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($custmr as $custmr): ?>
                <tr>
                    <td><?= $this->Number->format($custmr->id) ?></td>
                    <td><?= h($custmr->name) ?></td>
                    <td><?= h($custmr->email) ?></td>
                    <td><?= h($custmr->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $custmr->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $custmr->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $custmr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $custmr->id)]) ?>
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
