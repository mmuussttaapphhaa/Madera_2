<div class="composants view">
<h2><?php echo __('Composant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Characteristics'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['characteristics']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composant['Family']['name'], array('controller' => 'families', 'action' => 'view', $composant['Family']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composant['Tax']['value'], array('controller' => 'taxes', 'action' => 'view', $composant['Tax']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composant['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $composant['Provider']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Composant'), array('action' => 'edit', $composant['Composant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Composant'), array('action' => 'delete', $composant['Composant']['id']), array(), __('Are you sure you want to delete # %s?', $composant['Composant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Composants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
