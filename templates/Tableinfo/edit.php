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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tableinfo->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tableinfo->Id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tableinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tableinfo form content">
            <?= $this->Form->create($tableinfo,['enctype'=>'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit Tableinfo') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('password');
                    echo $this->Form->control('imgfile',['type'=>'file']);
                    echo $this->Html->image($tableinfo->image);
                ?>
            </fieldset>
            <?= $this->Form->button(__('update')) ?>

            <?= $this->Html->link(__('logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
