<?php $this->assign('title','Ajouter une TVA') ?>
<div class="content">
<?= $this->Form->create('Tax'); ?>
	<?= $this->Form->input('value',array('label'=>'TVA','class'=>'form-control')); ?>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?> 
<?= $this->Form->end(); ?>
</div>