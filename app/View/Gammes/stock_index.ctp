<div class="content">
	<?php echo $this->Html->link("Ajouter une Gamme",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<table class="table">
	<thead>
	<tr>
			<th>#</th>
			<th>Nom</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($gammes as $gamme): ?>
	<tr>
		<td><?php echo h($gamme['Gamme']['id']); ?></td>
		<td><?php echo h($gamme['Gamme']['name']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editer'), array('action' => 'edit', $gamme['Gamme']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?php echo $this->Form->postLink(__('supprimer'), array('action' => 'delete', $gamme['Gamme']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $gamme['Gamme']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>

