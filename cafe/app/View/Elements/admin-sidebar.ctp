Admin
<ul>
	<li><?php if($logged_in){
                     echo '<a href="/cafe/users/logout">Logout</a>';
                      
                    }else{
                      echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'));
                    }
                      ?></li>
</ul>