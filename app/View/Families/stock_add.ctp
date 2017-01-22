<div class="families form">
<?php echo $this->Form->create('Family'); ?>
	<fieldset>
		<legend><?php echo __('Ajouter une famille'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ajouter')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Liste Composants'), array('controller' => 'composants','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Familles'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste TVA'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste fournisseurs'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
	</ul>
</div>
