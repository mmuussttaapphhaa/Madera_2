<div class="families index">
	<h2><?php echo __('Families'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($families as $family): ?>
	<tr>
		<td><?php echo h($family['Family']['id']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $family['Family']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $family['Family']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $family['Family']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __(''), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ajouter une familles'), array('controller' => 'families', 'action' => 'add')); ?> </li>
		<hr><br>
		<li><?php echo $this->Html->link(__('Liste Composants'), array('controller' => 'composants','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste TVA'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste fournisseurs'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
	</ul>
</div>
