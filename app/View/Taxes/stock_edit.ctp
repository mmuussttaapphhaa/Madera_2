<div class="taxes form">
<?php echo $this->Form->create('Tax'); ?>
	<fieldset>
		<legend><?php echo __('Editer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
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
