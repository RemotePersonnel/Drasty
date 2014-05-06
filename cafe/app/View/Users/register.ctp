<!-- app/View/Users/register.ctp -->
<div class="register form">

<?php echo $this->Form->create('User');?>
    <fieldset>
        
        <?php 
        echo $this->Form->input('Store.0.name',array('label'=>'Store Name'));        
        echo $this->Form->input('username',array('label'=>'Email Address'));		
        echo $this->Form->input('password'); 
        echo $this->Form->input('store_number', array(
            'options' => array('' => 'Number of Stores','1 store' => '1 store', '2-10' => '2-10', '10-30'=>'10-30', 'more than 30'=>'more than 30')
        ));      
		
		echo $this->Form->submit('Start for free', array('class' => 'form-submit') ); 
        
        ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
