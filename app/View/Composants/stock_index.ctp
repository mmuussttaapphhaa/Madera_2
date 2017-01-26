<?php $this->assign('title','Gestion des composants') ?>
<div class="content">
	<?php echo $this->Html->link("Ajouter un composant",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<div style="float:right">
	<?php echo $this->Html->link("Gestion des Familles",array('controller'=>'families','action'=>'index'),
		array('id'=>"modal","class"=>"btn btn-warning")); 
	?>
	<?php echo $this->Html->link("Gestion des TVA",array('controller'=>'taxes','action'=>'index'),
		array('id'=>"modal","class"=>"btn btn-warning")); 
	?>
	<?php echo $this->Html->link("Gestion des Unités",array('controller'=>'units','action'=>'index'),
		array('id'=>"modal","class"=>"btn btn-warning")); 
	?>
	</div>
	<hr>
	<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Nature</th>
		<th>Prix</th>
		<th>Stock</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($composants as $composant): ?>
	<tr>
		<td><?php echo h($composant['Composant']['id']); ?></td>
		<td><?php echo h($composant['Composant']['name']); ?></td>
		<td><?php echo h($composant['Composant']['price']); ?></td>
		<td><?php echo h($composant['Composant']['stock']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $composant['Composant']['id']),array('class'=>'btn btn-default','id'=>'modal')); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $composant['Composant']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $composant['Composant']['id']))); ?>
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
