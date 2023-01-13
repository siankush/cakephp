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
            <?= $this->Html->link(__('List Tableinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tableinfo form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('login info') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->postlink(__('Submit'),['action'=>'mail']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>




