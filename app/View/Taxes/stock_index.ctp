<?php $this->assign('title','Gestion des TVA') ?>
<div class="content">
	<?php echo $this->Html->link("Ajouter une TVA",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>TVA</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($taxes as $tax): ?>
	<tr>
		<td><?php echo h($tax['Tax']['id']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $tax['Tax']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $tax['Tax']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $tax['Tax']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>

