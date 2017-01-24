<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Madera | Connexion</title>
  
  <link rel="icon" type="image/png" href="dist/img/favicon.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('AdminLTE/AdminLTE.min'); ?>
    <?php echo $this->Html->css('AdminLTE/skins/_all-skins.min'); ?>
    <?php echo $this->Html->css('AdminLTE/custom'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini body">
<div class="wrapper">
  <div class="content-wrapper connexion-wrapper">
    <section class="container">
        <?php echo $this->Html->image('madera-logo',array('class'=>'img-connexion')) ?>
    </section>
    <section class="container">
      <div class="connexion-app">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
      </div>
    </section>
  </div>
</div>
</body>
<?php echo $this->Html->script('jquery-2.2.3.min') ?>
</html>
