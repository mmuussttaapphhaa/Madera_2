<?php $this->assign('title','Ajouter une coupe de principe') ?>
<div class="content">
<?= $this->Form->create('Crosssection',array('type'=>'file')); ?>
	<?= $this->Form->input('id',array('type'=>'text','label'=>'Code','class'=>'form-control')); ?>
	<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
	<?= $this->Form->input('plan_file',array('type'=>'file','label'=>'Importer le plan','class'=>'form-control')); ?>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>
</div>