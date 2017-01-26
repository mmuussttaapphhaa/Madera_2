<?php $this->assign('title','Editer un modèle') ?>
<div class="content">
<?= $this->Form->create('Modele'); ?>
	<div class="row">
		<div class="col-md-6">
			<?= $this->Form->input('id'); ?>
			<?= $this->Form->input('name',array('label'=>'Nom','class'=>'form-control')); ?>
			<?= $this->Form->input('price',array('label'=>'Prix HT','class'=>'form-control')); ?>
			<?= $this->Form->input('tax_id',array('label'=>"TVA",'class'=>'form-control')); ?>			
		</div>
		<div class="col-md-6">
			<?= $this->Form->input('parameter_id',array('label'=>"Marge Commerciale",'class'=>'form-control')); ?>
			<?= $this->Form->input('crosssection_id',array('label'=>"Coupe de principe",'class'=>'form-control')); ?>
			<?= $this->Form->input('fundation_id',array('label'=>"Fondation",'class'=>'form-control')); ?>
		</div>
	</div>
	<?= $this->Form->input('Composant',array('label'=>'Composants','class'=>'form-control','multiple'=>true)); ?>
	<hr>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>
</div>