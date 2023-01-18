<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tableinfo $tableinfo
 */
?>
<html>
    <head>
        <title></title>

<style>

.formcontent{
  margin-top: 140px;
  margin-bottom: 100px;
}
 </style> 
</head> 
<body>
<div class="container formcontent">
<div class="row">

<div class="m-auto w-50 mt-5">
            <?= $this->Form->create($tableinfo,['enctype'=>'multipart/form-data']) ?>
              <div class="row">
                <legend><?= __('Register Info.') ?></legend>
                
                <div class="form-group mt-3">
                <?php echo $this->Form->control('name',['required'=>false, 'class'=>'form-control']); ?>
                </div>
                <div class="form-group mt-3">
                <?php  echo $this->Form->control('email',['required'=>false, 'class'=>'form-control']); ?>
                </div>
                <div class="form-group mt-3">
                  <?php  echo $this->Form->control('phone',['required'=>false,'class'=>'form-control']); ?>
                </div>
                <div class="form-group mt-3">
                  <?php  echo $this->Form->control('gender',['required'=>false,'class'=>'form-control']); ?>
                </div>
                <div class="form-group mt-3">
                   <?php echo $this->Form->control('password',['required' =>false,'class'=>'form-control']); ?>
                </div>
                <div class="form-group mt-3">
                   <?php echo $this->Form->control('image_file',['type'=>'file' ,'required' => false, 'class'=>'form-control']); ?>
                </div>
               </div>
            <div class="text-center mt-3">
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Html->link(__('if have an account? login'),['controller'=>'Theme', 'action'=>'login']) ?>
           </div>
            <?= $this->Form->end() ?>
    </div>
</div>
</div>
</body>
</html>
