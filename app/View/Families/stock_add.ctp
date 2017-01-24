<?php $this->assign('title','Ajouter une famille') ?>
<div class="content">
<?= $this->Form->create('Family'); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->submit('Ajouter',array('class'=>'btn btn-madera')); ?> 
<?= $this->Form->end(); ?>
</div>
