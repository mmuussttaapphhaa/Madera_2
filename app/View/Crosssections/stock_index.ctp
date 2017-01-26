<?php $this->assign('title','Gestion des coupes de principes') ?>
<div class="content">
	<?= $this->Html->link("Retour",array('controller'=>'modeles','action'=>'index'),
		array("class"=>"btn btn-default")); 
	?>
	<?= $this->Html->link("Ajouter une coupe de principe",array('action'=>'add'),
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
	<?php foreach ($crosssections as $crosssection): ?>
	<tr>
		<td><?= h($crosssection['Crosssection']['id']); ?></td>
		<td><?= h($crosssection['Crosssection']['name']); ?></td>
		<td class="actions">
			<?= $this->Html->link(__('Voir le plan'), $crosssection['Crosssection']['plan'],array('class'=>'btn btn-info','target'=>'_blank')); ?>
			<?= $this->Html->link(__('Editer'), array('action' => 'edit', $crosssection['Crosssection']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?= $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $crosssection['Crosssection']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $crosssection['Crosssection']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
