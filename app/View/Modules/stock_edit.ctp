<?php $this->assign('title','Editer un module') ?>
<div class="content">
<?= $this->Form->create('Unit'); ?>
	<?= $this->Form->input('id'); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->input('caracteristics',array('label'=>'caractéristiques','class'=>'form-control')); ?>
	<?= $this->Form->input('unit_id',array('label'=>'Unité','class'=>'form-control')); ?>
	<?= $this->Form->input('Composant',array('label'=>'Composants','class'=>'form-control','multiple'=>true)); ?>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?> 
<?= $this->Form->end(); ?>
</div>
