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
  margin-bottom: 90px;
}
 </style> 
</head> 
<body>
<div class="container formcontent">

<div class="row">
    <div class="m-auto w-50 mt-5">
              <?= $this->Form->create() ?>
            <div class="row">
              <legend><?= __('login info') ?></legend>
                <div class="form-group mt-3">
                  <?php echo $this->Form->control('email',['class'=>'form-control']); ?>
                </div>
                <div class="form-group mt-3">
                  <?php echo $this->Form->control('password',['class'=>'form-control']); ?>
                </div>
              </div>

              <div class="text-center mt-3">
               <?= $this->Form->button(__('Submit'),['class'=>'bg-primary']) ?>
               <br></br>
               <?= $this->Html->link(__("don't have account? register"),['controller'=>'Theme', 'action'=>'register']) ?>
               
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>    


</div>
</body>
</html>

