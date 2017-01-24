<div class="content">
	<?php echo $this->Html->link(__('Ajouter une familles'), array('controller' => 'families', 'action' => 'add'),array('id'=>'modal','class'=>'btn btn-primary')); ?>
	<h2><?php echo __('Families'); ?></h2>
	<table class="table">
	<thead>
	<tr>
			<th>#</th>
			<th>Nom</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($families as $family): ?>
	<tr>
		<td><?php echo h($family['Family']['id']); ?>&nbsp;</td>
		<td><?php echo h($family['Family']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $family['Family']['id']),array('id'=>'modal','class'=>"btn btn-default")); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $family['Family']['id']), array('class'=>'btn btn-danger admin','confirm' => __('Are you sure you want to delete # %s?', $family['Family']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
