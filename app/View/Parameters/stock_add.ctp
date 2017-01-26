
<?php $this->assign('title','Ajouter une marge commerciale') ?>
<div class="content">
<?= $this->Form->create('Parameter'); ?>	
		<?= $this->Form->input('per',array('label'=>'Marge commerciale','class'=>'form-control')); ?>		
	<?= $this->Form->submit('Ajouter',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>
</div>