<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 ?>
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
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <?= $this->Html->css('bootstrap.min'); ?>
    <?= $this->Html->css('AdminLTE/AdminLTE.min'); ?>
    <?= $this->Html->css('AdminLTE/skins/_all-skins.min'); ?>
    <?= $this->Html->css('AdminLTE/custom'); ?>
	<?= $this->fetch('meta'); ?>
	<?= $this->fetch('css'); ?>
	<?= $this->Html->script('jquery-2.2.3.min') ?>
	<?= $this->Html->script('bootstrap.min') ?>
	<?= $this->Html->script('main') ?>
	<?= $this->fetch('script'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini body">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="home.html" class="logo">
		<?= $this->Html->image('logo',array('class'=>'img-logo')) ?>
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MADERA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MADERA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Menu de navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<ul class="sidebar-menu">
			<li class="header">Menu de Navigation</li>
      <?php if($this->Session->read('Auth.User.Role.prefix') == "admin"): ?>
        <li>
          <a href="<?= $this->Html->url(array('controller'=>'users','action'=>'index','admin'=>true)) ?>">
            <i class="fa fa-user"></i> <span>Gestion des Utilisateurs</span>
          </a>
        </li>
      <?php endif ?>
			<li>
				<a href="<?= $this->Html->url(array('controller'=>'composants','action'=>'index','stock'=>true)) ?>">
					<i class="fa fa-th"></i> <span>Gestion des Composants</span>
				</a>
			</li>
      <li>
				<a href="<?= $this->Html->url(array('controller'=>'modules','action'=>'index','stock'=>true)) ?>">
					<i class="fa fa-th"></i> <span>Gestion des Modules</span>
				</a>
			</li>
		</ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="container">
		
		<div class="box box-madera">
			<?= $this->Flash->render(); ?>
        	<div class="box-header with-border">
          		<h3 class="box-title"><?= $this->fetch('title'); ?></h3>
        	</div>
			<?= $this->fetch('content'); ?>
		</div>
    </section>
  </div>
</div>
<!-- ./wrapper -->
</body>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" id="closeModal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalTitle"><?= $this->fetch('title'); ?></h4>
      </div>
      <div class="modal-body" id="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

</html>
