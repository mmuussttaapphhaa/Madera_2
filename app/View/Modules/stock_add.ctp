<?php $this->assign('title','Ajouter un module') ?>
<div class="content">
<?= $this->Form->create('Module',array('type'=>'file')); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->input('caracteristics',array('label'=>'caractéristiques','class'=>'form-control')); ?>
	<?= $this->Form->input('unit_id',array('label'=>'Unité','class'=>'form-control')); ?>
	<?= $this->Form->input('Composant',array('label'=>'Composants','class'=>'form-control','multiple'=>true)); ?>
	<?= $this->Form->input('img_file',array('type'=>'file','label'=>'Image','class'=>'form-control','required'=>false)); ?>
	<?= $this->Form->submit('Ajouter',array('class'=>'btn btn-madera')); ?> 
<?= $this->Form->end(); ?>
</div>