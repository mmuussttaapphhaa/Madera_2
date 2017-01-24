<?php $this->assign('title','Editer une famille') ?>
<div class="content">
<?= $this->Form->create('Family'); ?>
	<?= $this->Form->input('id'); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?> 
<?= $this->Form->end(); ?>
</div>