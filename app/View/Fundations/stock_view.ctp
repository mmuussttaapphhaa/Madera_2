<div class="fundations view">
<h2><?php echo __('Fundation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fundation['Fundation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fundation['Fundation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan'); ?></dt>
		<dd>
			<?php echo h($fundation['Fundation']['plan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fundation'), array('action' => 'edit', $fundation['Fundation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fundation'), array('action' => 'delete', $fundation['Fundation']['id']), array(), __('Are you sure you want to delete # %s?', $fundation['Fundation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fundations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fundation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Modeles'); ?></h3>
	<?php if (!empty($fundation['Modele'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Img'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Parameter Id'); ?></th>
		<th><?php echo __('Gamme Id'); ?></th>
		<th><?php echo __('Crosssection Id'); ?></th>
		<th><?php echo __('Fundation Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fundation['Modele'] as $modele): ?>
		<tr>
			<td><?php echo $modele['id']; ?></td>
			<td><?php echo $modele['name']; ?></td>
			<td><?php echo $modele['price']; ?></td>
			<td><?php echo $modele['img']; ?></td>
			<td><?php echo $modele['tax_id']; ?></td>
			<td><?php echo $modele['parameter_id']; ?></td>
			<td><?php echo $modele['gamme_id']; ?></td>
			<td><?php echo $modele['crosssection_id']; ?></td>
			<td><?php echo $modele['fundation_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'modeles', 'action' => 'view', $modele['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'modeles', 'action' => 'edit', $modele['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'modeles', 'action' => 'delete', $modele['id']), array(), __('Are you sure you want to delete # %s?', $modele['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
