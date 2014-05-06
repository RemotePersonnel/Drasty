<div class="register form">
<?php echo $this->Form->create('Registration'); ?>
    <fieldset>
        <legend><?php echo __('CREATE NEW ACCOUNT'); ?></legend>
        <?php echo $this->Form->input('client_name');
        echo $this->Form->input('client_email');
        echo $this->Form->input('I like to recieve important news & special',array('type'=>'checkbox','name'=>'newsletter'));

    ?>
    </fieldset>
<?php echo $this->Form->submit(__('Start your trial 30days free')); ?>
</div>