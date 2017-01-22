<div class="composants index">
	<h2><?php echo __('Composants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($composants as $composant): ?>
	<tr>
		<td><?php echo h($composant['Composant']['id']); ?>&nbsp;</td>
		<td><?php echo h($composant['Composant']['name']); ?>&nbsp;</td>
		<td><?php echo h($composant['Composant']['price']); ?>&nbsp;</td>
		<td><?php echo h($composant['Composant']['stock']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $composant['Composant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $composant['Composant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $composant['Composant']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Ajouter Composant'), array('controller' => 'composants','action' => 'add')); ?></li>
		<hr><br>
		<li><?php echo $this->Html->link(__('Liste Familles'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste TVA'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste fournisseurs'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
	</ul>
</div>
