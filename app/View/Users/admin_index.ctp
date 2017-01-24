<?php $this->assign('title','Gestion des utilisateurs') ?>

<?php echo $this->Html->link("Ajouter un utilisateur",array('action'=>'edit'),
	array('id'=>"modal","class"=>"btn btn-primary")); 
?>

<table class="table">
	<tr>
		<th>ID</th>
		<th>Login</th>
		<th>E-mail</th>
		<th>Actions</th>
	</tr>
	<?php foreach($users as $k=>$v): $v = current($v); ?>
	<tr>
		<td><?php echo $v['id']; ?></td>
		<td><?php echo $v['username']; ?></td>
		<td><?php echo $v['mail']; ?></td>
		<td>
		<?php echo $this->Html->link("Editer",array('action'=>'edit',$v['id']),array('id'=>"modal","class"=>"btn btn-default")); ?> -
		<?php echo $this->Html->link("Supprimer",array('action'=>'delete',$v['id']),array("class"=>"btn btn-danger"),'Voulez vous vraiment supprimer cet utilisateur ?'); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->Paginator->numbers(); ?>
