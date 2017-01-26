<?php $this->assign('title','Gestion des modules') ?>
<div class="content">
	<?php echo $this->Html->link(__('Ajouter un module'), array('action' => 'add'),array('id'=>'modal','class'=>'btn btn-primary')); ?>
	<div style="float:right">
		<?php echo $this->Html->link("Gestion des Unités",array('controller'=>'units','action'=>'index'),
			array('id'=>"modal","class"=>"btn btn-warning")); 
		?>
		<?php echo $this->Html->link("Ajouter un composant",array('controller'=>'composants','action'=>'add'),
			array('id'=>"modal","class"=>"btn btn-primary")); 
		?>
	</div>
	<hr>
	<table class="table">
	<thead>
	<tr>
			<th>#</th>
			<th>Nom</th>
			<th>Caractéristiques</th>
			<th>Unité</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($modules as $module): ?>
	<tr>
		<td><?php echo h($module['Module']['id']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['name']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['caracteristics']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($module['Unit']['name'], array('controller' => 'units', 'action' => 'edit', $module['Unit']['id']),array('id'=>'modal')); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $module['Module']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?php echo $this->Form->postLink(__('supprimer'), array('action' => 'delete', $module['Module']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $module['Module']['id']))); ?>
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
