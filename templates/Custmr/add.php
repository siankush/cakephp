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
            <?= $this->Html->link(__('List Custmr'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="custmr form content">
            <?= $this->Form->create($custmr) ?>
            <fieldset>
                <legend><?= __('Add Custmr') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('profile.occupation');
                    echo $this->Form->control('profile.address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
