<?php $this->assign('title','Gestion des modèles') ?>
<div class="content">
	<?php echo $this->Html->link("Ajouter un modèle",array('action'=>'add'),
		array('id'=>"modal","class"=>"btn btn-primary")); 
	?>
	<div style="float:right">
		<?php echo $this->Html->link("Gestion des Gammes",array('controller'=>'gammes','action'=>'index'),
			array('id'=>"modal","class"=>"btn btn-warning")); 
		?>
		<?php echo $this->Html->link("Gestion des Coupes",array('controller'=>'crosssections','action'=>'index'),
			array("class"=>"btn btn-warning")); 
		?>
		<?php echo $this->Html->link("Gestion des Fondations",array('controller'=>'fundations','action'=>'index'),
			array('id'=>"modal","class"=>"btn btn-warning")); 
		?>
		<?php echo $this->Html->link("Gestion marges commerciales",array('controller'=>'parameters','action'=>'index'),
			array('id'=>"modal","class"=>"btn btn-warning")); 
		?>
		<?php echo $this->Html->link("Ajouter une TVA",array('controller'=>'taxes','action'=>'add'),
			array('id'=>"modal","class"=>"btn btn-primary")); 
		?>
	</div>
	<table class="table">
	<thead>
	<tr>
		<th>#</th>
		<th>Nom</th>
		<th>Prix HT - marge</th>
		<th>Gamme</th>
		<th>Coupe de principe</th>
		<th>Fondation</th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($modeles as $modele): ?>
	<tr>
		<td><?= h($modele['Modele']['id']); ?></td>
		<td><?= h($modele['Modele']['name']); ?></td>
		<td><?= h($modele['Modele']['price']). ' - ' .$modele['Parameter']['per'] ?></td>
		<td>
			<?= $this->Html->link($modele['Gamme']['name'], array('controller' => 'gammes', 'action' => 'view', $modele['Gamme']['id'])); ?>
		</td>
		<td>
			<?= $this->Html->link($modele['Crosssection']['name'], $modele['Crosssection']['plan'],array('target'=>'_blank')); ?>
		</td>
		<td>
			<?= $this->Html->link($modele['Fundation']['name'],$modele['Fundation']['plan'],array('target'=>'_blank')); ?>
		</td>
		<td class="actions">
			<?= $this->Html->link(__('Editer'), array('action' => 'edit', $modele['Modele']['id']),array('id'=>'modal','class'=>'btn btn-default')); ?>
			<?= $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $modele['Modele']['id']), array('class'=>'admin btn btn-danger','confirm' => __('Are you sure you want to delete # %s?', $modele['Modele']['id']))); ?>
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
