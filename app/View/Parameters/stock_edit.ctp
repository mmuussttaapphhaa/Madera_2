<?php $this->assign('title','Editer une marge commerciale') ?>
<div class="content">
<?= $this->Form->create('Parameter'); ?>	
		<?= $this->Form->input('id'); ?>		
		<?= $this->Form->input('per',array('label'=>'Marge commerciale','class'=>'form-control')); ?>		
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>
</div>