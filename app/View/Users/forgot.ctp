<?= $this->Form->create('User'); ?>
    <?= $this->Form->input('mail',array('label'=>'Votre E-mail','class'=>'form-control')); ?><br>
<?= $this->Form->submit('Regénérer mon mot de passe',array('class'=>'btn btn-madera')); ?>
<?= $this->Form->end(); ?>