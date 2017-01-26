<div class="gammes form">
<?php echo $this->Form->create('Gamme'); ?>
	<fieldset>
		<legend><?php echo __('Stock Edit Gamme'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Gamme.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Gamme.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Gammes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
</div>
