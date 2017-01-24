<?php $this->assign('title','Gestion des composants') ?>
<div class="content">
	<?= $this->Html->link("Ajouter une unité",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Unité</th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($units as $unit): ?>
	<tr>
		<td><?= $unit['Unit']['id']; ?></td>
		<td><?= $unit['Unit']['name']; ?></td>
		<td class="actions">
			<?= $this->Html->link(__('Editer'), array('action' => 'edit', $unit['Unit']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?= $this->Form->postLink(__('Delete'), array('action' => 'delete', $unit['Unit']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $unit['Unit']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>

