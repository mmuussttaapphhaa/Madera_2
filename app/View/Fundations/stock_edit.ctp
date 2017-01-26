<?php $this->assign('title','Editer un plan de fondation') ?>
<div class="content">
<?= $this->Form->create('Fundation',array('type'=>'file')); ?>
	<?= $this->Form->input('id'); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->input('plan_file',array('type'=>'file','label'=>'Importer le plan','class'=>'form-control')); ?>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>
</div>
