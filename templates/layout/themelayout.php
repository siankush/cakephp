<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
echo $this->Breadcrumbs->render();

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <?= $this->Html->css(['themecss/vendor/aos/aos','themecss/vendor/bootstrap-icons/bootstrap-icons','themecss/vendor/bootstrap/css/bootstrap.min','themecss/vendor/boxicons/css/boxicons.min','themecss/vendor/glightbox/css/glightbox.min','themecss/vendor/remixicon/remixicon','themecss/vendor/swiper/swiper-bundle.min']); ?>



<!-- Template Main CSS File -->
<?= $this->Html->css('themecss/style'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?php echo $this->element('flash/theme/header')?>      
    
  
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <footer>
    
    </footer>
<?php echo $this->element('flash/theme/footer')?>
    <?= $this->Html->script(['themejs/vendor/aos/aos','themejs/vendor/bootstrap/js/bootstrap.bundle.min','themejs/vendor/glightbox/js/glightbox.min','themejs/vendor/isotope-layout/isotope.pkgd.min','themejs/vendor/swiper/swiper-bundle.min','themejs/vendor/waypoints/noframework.waypoints','themejs/vendor/php-email-form/validate']); ?>


</body>
</html>
