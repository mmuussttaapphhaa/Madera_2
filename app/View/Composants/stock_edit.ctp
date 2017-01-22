<div class="composants form">
<?php echo $this->Form->create('Composant'); ?>
	<fieldset>
		<legend><?php echo __('Editer des composants'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('characteristics');
		echo $this->Form->input('price');
		echo $this->Form->input('stock');
		echo $this->Form->input('family_id');
		echo $this->Form->input('tax_id');
		echo $this->Form->input('provider_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editer')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Liste Composants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Familles'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste TVA'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste fournisseurs'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
	</ul>
</div>
