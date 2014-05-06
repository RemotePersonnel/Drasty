<ul>
	<li>
		<span class="glyphicon glyphicon-dashboard"> </span><br>
		<?php echo $this->Html->link( "Dashboard",   array('controller'=>'dashboard','action'=>'index') ); ?>
	</li>
	<li>
		<span class="glyphicon glyphicon-user"></span><br>
		Customers
	</li>
	<li>
		<span class="glyphicons glyphicons-cogwheel"></span><br>
		Settings
	</li>	
	<li>
		<span class="glyphicon glyphicon-log-out"></span><br>
		<?php if($logged_in){
                     echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'));
                      
                    }else{
                      echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'));
                    }
                      ?></li>
</ul>