<?php $this->assign('title','Ajouter un composant') ?>
<div class="content">
<?= $this->Form->create('Composant'); ?>
	<?= $this->Form->input('id'); ?>	
	<div class="row">
		<div class="col-md-6">
			<?= $this->Form->input('name',array('label'=>'Nature','class'=>'form-control')); ?>
			<?= $this->Form->input('price',array('label'=>'Prix HT','class'=>'form-control')); ?>
			<?= $this->Form->input('stock',array('label'=>"Stock",'class'=>'form-control')); ?>
		</div>
		<div class="col-md-6">
			<?= $this->Form->input('family_id',array('label'=>"Famille du composant",'class'=>'form-control')); ?>
			<?= $this->Form->input('tax_id',array('label'=>"TVA",'class'=>'form-control')); ?>
			<?= $this->Form->input('provider_id',array('label'=>"Fournisseur",'class'=>'form-control')); ?>
		</div>
	</div>
	<label>Unité</label><br>
	<?php foreach($units as $uk => $u): ?>
		<div class="radio-inline">
			<label>
				<input type ="radio" name='data[Composant][unit_id]' value = '<?= $uk ?>'><?= $u ?>
			</label>
		</div>
	<?php endforeach ?>
	<?= $this->Form->input('characteristics',array('label'=>'Caractéristiques','type'=>'textarea','class'=>'form-control')); ?>
	<hr>
	<?= $this->Form->submit('Editer',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>
</div>

