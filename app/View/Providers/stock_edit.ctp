<div class="providers form">
<?php echo $this->Form->create('Provider'); ?>
	<fieldset>
		<legend><?php echo __('Editer un fournisseur'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('adress');
		echo $this->Form->input('cp');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editer')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Liste Fournisseurs'), array('controller' => 'providers','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste composants'), array('controller' => 'composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Familles'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste TVA'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
	</ul>
</div>
