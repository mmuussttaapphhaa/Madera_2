<div class="content">
	<?php echo $this->Html->link("Ajouter une marge",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>La marge</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($parameters as $parameter): ?>
	<tr>
		<td><?php echo h($parameter['Parameter']['id']); ?></td>
		<td><?php echo h($parameter['Parameter']['per']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $parameter['Parameter']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $parameter['Parameter']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $parameter['Parameter']['per']))); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>
