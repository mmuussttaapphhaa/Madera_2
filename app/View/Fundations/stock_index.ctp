<?php $this->assign('title','Gestion des plans de fondation') ?>
<div class="content">
	<?= $this->Html->link("Ajouter un plan",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Nom</th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fundations as $fundation): ?>
	<tr>
		<td><?= h($fundation['Fundation']['id']); ?></td>
		<td><?= h($fundation['Fundation']['name']); ?></td>
		<td class="actions">
			<?= $this->Html->link(__('Voir'), $fundation['Fundation']['plan'], array('class'=>'btn btn-info','target'=>'_blank')); ?>
			<?= $this->Html->link(__('Editer'), array('action' => 'edit', $fundation['Fundation']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?= $this->Form->postLink(__('supprimer'), array('action' => 'delete', $fundation['Fundation']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $fundation['Fundation']['id']))); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</div>
