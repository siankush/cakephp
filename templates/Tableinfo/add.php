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
            <?= $this->Form->create($tableinfo,['enctype'=>'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add Tableinfo') ?></legend>
                <?php
                    echo $this->Form->control('name',['required'=>false]);
                    echo $this->Form->control('email',['required'=>false]);
                    echo $this->Form->control('phone',['required'=>false]);
                    echo $this->Form->control('gender',['required'=>false]);
                    echo $this->Form->control('password',['required' => false]);
                    echo $this->Form->control('commentinfo.address',['required' => true]);
                    echo $this->Form->control('image_file',['type'=>'file' ,'required' => false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
