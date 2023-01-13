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
            <!-- <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tabledata->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tabledata->id), 'class' => 'side-nav-item']
            ) ?> -->
            <?= $this->Html->link(__('List Tabledata'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tabledata form content">
            <?= $this->Form->create($tabledata) ?>
            <fieldset>
                <legend><?= __('Edit Tabledata') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
