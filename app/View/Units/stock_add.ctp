<?php $this->assign('title','Ajouter une unité') ?>
<div class="content">
<?= $this->Form->create('Unit'); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->submit('Ajouter',array('class'=>'btn btn-madera')); ?> 
<?= $this->Form->end(); ?>
</div>