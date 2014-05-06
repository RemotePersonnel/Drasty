<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
  <script>
     var _ROOT = "<?php echo $this->Html->url('/', true); ?>";
  </script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		/* Bootstrap core CSS */
		echo $this->Html->css('bootstrap.min');

		/* Custom styles for this template */
		echo $this->Html->css('custom');
    echo $this->Html->css('responsive-custom');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div id="container default">
	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $this->Html->image('logo.png'); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $this->Html->link('Home', array('controller'=>'pages','action'=>'display','home')); ?></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>  
            <li><a href="#">Support</a></li>               
            <li class="login-text"><?php if($logged_in){
                     echo $this->Html->link('Logout', array('controller'=>'users','action'=>'logout'));
                      
                    }else{
                      echo $this->Html->link('Client Login', array('controller'=>'users','action'=>'login'));
                    }
                      ?></li>
            <li class="free-trial"><?php if(!$logged_in){ echo $this->Html->link('Start Freen Trial', array('controller'=>'users','action'=>'register'));} ?></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </div>

    <div class="container-main" id="default">
      
          	 <?php echo $this->Session->flash(); ?>            
			       <?php echo $this->fetch('content'); ?>
        
      </div>
    </div>
	<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/cafe/js/bootstrap.min.js"></script>
    <script src="/cafe/js/docs.min.js"></script>
	
</body>
</html>
