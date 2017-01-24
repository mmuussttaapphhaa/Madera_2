<?php echo  $this->Form->create('User'); ?>
    <?php echo  $this->Form->input('username', array('label' => "Identifiant",'class'=>'form-control')); ?><br>
    <?php echo  $this->Form->input('password', array('label' => "Mot de passe",'class'=>'form-control')); ?>
    <em><?php echo  $this->Html->link('Mot de passe oublié ?', array('action' => 'forgot')); ?></em><br><br>
    <div>
    <?php echo  $this->Form->submit("Se connecter",array('class'=>'btn btn-madera')); ?>
    </div>
<?php echo  $this->Form->end(); ?>
