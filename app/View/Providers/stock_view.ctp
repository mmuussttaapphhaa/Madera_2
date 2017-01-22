<div class="providers view">
<h2><?php echo __('Provider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cp'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['cp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['country']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provider'), array('action' => 'edit', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider'), array('action' => 'delete', $provider['Provider']['id']), array(), __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Components'), array('controller' => 'components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Component'), array('controller' => 'components', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Components'); ?></h3>
	<?php if (!empty($provider['Component'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Characteristics'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Family Id'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Provider Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($provider['Component'] as $component): ?>
		<tr>
			<td><?php echo $component['id']; ?></td>
			<td><?php echo $component['name']; ?></td>
			<td><?php echo $component['characteristics']; ?></td>
			<td><?php echo $component['price']; ?></td>
			<td><?php echo $component['stock']; ?></td>
			<td><?php echo $component['family_id']; ?></td>
			<td><?php echo $component['tax_id']; ?></td>
			<td><?php echo $component['provider_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'components', 'action' => 'view', $component['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'components', 'action' => 'edit', $component['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'components', 'action' => 'delete', $component['id']), array(), __('Are you sure you want to delete # %s?', $component['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Component'), array('controller' => 'components', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
