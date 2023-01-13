<!-- <?php
echo $varr;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?= $this->Html->css(['style']) ?>
  <?= $this->Html->script(['indexjs']) ?>
  
</head>
<body class="backinfo">
<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4">
              <h4 class="text-capitalise text-center mb-4 fw-bold">form info.</h2>
              <div id="showinfo"></div>

                 <div class="row">
                
                <?= $this->Html->image('ss.jpg', ['alt' => 'CakePHP']) ?> 
                <?= $this->Form->control('name') ?>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('phone') ?>
          
                </div>
             </div>

                <div class=" mt-4 d-flex justify-content-center">
                <?= $this->Form->button(__('Submit')) ?>
                </div>


              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html> -->

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
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
                <?php foreach ($user as $userinfo): ?>
                <tr>
                    <td><?= $this->Number->format($userinfo->id) ?></td>
                    <td><?= h($userinfo->name) ?></td>
                    <td><?= h($userinfo->email) ?></td>
                    <td><?= h($userinfo->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userinfo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userinfo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
