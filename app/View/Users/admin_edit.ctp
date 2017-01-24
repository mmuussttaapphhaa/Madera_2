<?php $this->assign('title','Editer un utilisateur') ?>
<div class="content">
<?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('username',array('label'=>'Login','class'=>'form-control')); ?>
        <?php echo $this->Form->input('password',array('label'=>'Mot de passe','required'=>false,'class'=>'form-control')); ?>
        <?php echo $this->Form->input('passwordconfirm',array('label'=>'Confirmer mot de passe','type'=>'password','required'=>false,'class'=>'form-control')); ?>
        <?php echo $this->Form->input('mail',array('label'=>"E-mail",'class'=>'form-control')); ?>
        <?php echo $this->Form->input('active',array('label'=>"Activer")); ?>
        <?php echo $this->Form->input('role_id',array('label'=>"Rôle",'class'=>'form-control')); ?>
        <?php echo $this->Form->input('id'); ?>
        <hr>
        <?php echo $this->Form->submit('Envoyer',array('class'=>'btn btn-madera')); ?>
<?php echo $this->Form->end(); ?>
</div>