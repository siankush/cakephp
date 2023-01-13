<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->Breadcrumbs->add([
    ['title' => 'index', 'url' => ['controller' => 'Users', 'action' => 'index']],
    ['title' => 'add', 'url' => ['controller' => 'Users', 'action' => 'add']]
]);


?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user,['enctype'=>'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('name', ['required' => false]);
                    echo $this->Form->control('last_name', ['required'=>false]);
                    echo $this->Form->control('email', ['required'=>false]);
                    echo $this->Form->control('phone_number',['required'=>false]);
                    echo $this->Form->control('password', ['required'=>false]);
                    echo "<label><h4><b>Gender</b></h4></label>";
                    echo $this->Form->radio('gender', ['Masculine', 'Feminine', 'Neuter'], ['required'=>false], ['class'=>'gendrclass']);?>
                    <span><?php echo $this->Form->error('gender') ?></span>
              <?php echo $this->Form->control('created_date');
                    echo $this->Form->control('modified_date');
                    echo $this->Form->control('token');
                    echo $this->Form->control('file',['type'=>'file']);
                ?>
                
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
