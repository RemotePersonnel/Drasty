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
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>fonts/glyphicons_pro/glyphicons.min.css">

  <!-- Core Javascript - via CDN -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/calendar/fullcalendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/datatables/css/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/datepicker/datepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/chosen/chosen.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/datatables/extras/TableTools/media/css/TableTools.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/editors/xeditable/css/bootstrap-editable.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/gritter/css/jquery.gritter.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/formswitch/css/bootstrap-switch.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>vendor/plugins/chosen/chosen.min.css">

  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/bootstrap/holder.js"></script> 
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/bootstrap/paginator/src/bootstrap-paginator.js"></script>
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.1/jquery.flot.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.js"></script> 
  -->
  <!--<script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/plugins/datatables/extras/TableTools/media/js/TableTools.min.js">-->
  </script><!-- Datatable TableTools Addon -->
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/plugins/datatables/extras/TableTools/media/js/ZeroClipboard.js">
  </script><!-- Datatable TableTools Addon -->
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/editors/xeditable/js/bootstrap-editable.js"></script> 
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/plugins/chosen/chosen.jquery.min.js"></script> 
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/plugins/formswitch/js/bootstrap-switch.min.js"></script> 
  <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/plugins/globalize/globalize.js"></script> 

    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        /* Bootstrap core CSS */
        echo $this->Html->css('bootstrap.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('jquery.flot.min');
    echo $this->Html->script('jquery.sparkline.min');
    echo $this->Html->script('jquery.dataTables.min');
    echo $this->Html->script('fullcalendar.min');

        /* Custom styles for this template */
        echo $this->Html->css('custom');

    /* Theme Javascript */
    echo $this->Html->script('uniform.min');
    echo $this->Html->script('main');
    /* Theme Javascript */
    echo $this->Html->css('animate');
    echo $this->Html->css('boxed');
    echo $this->Html->css('theme-custom');
    echo $this->Html->css('customizer');
    echo $this->Html->css('demo');
    echo $this->Html->css('flat-skin');
    echo $this->Html->css('pages');
    echo $this->Html->css('plugins');
    echo $this->Html->css('responsive');
    echo $this->Html->css('theme');
    /* Fonts CSS Starts */
    echo $this->Html->css('fonts/font-awesome/css/font-awesome.min');
    echo $this->Html->css('fonts/glyphicons_pro/glyphicons.min');
    echo $this->Html->css('fonts/icomoon/style.min');
    echo $this->Html->css('fonts/iconsweets/style');
    echo $this->Html->css('fonts/zocial/css/zocial');
    //echo $this->Html->script('fonts/iconsweets/lte-ie7');
    /* Fonts CSS  Ends */
        echo $this->Html->css('admin-dashboard');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
<div id="admindashboard-container">
   
    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="pull-left"> <a class="navbar-brand" href="dashboard.html">
        <div class="navbar-logo">Logo<?php //echo $this->Html->image('logo.png'); ?></div>
        </a> </div>
      <div class="pull-right header-btns">
        <?php echo $this->element('admin-topright-nav'); ?>  
      </div>
    </header>
    <!-- End: Header --> 
    <!-- Start: Main -->
    <div id="main"> 
      <!-- Start: Sidebar -->
      <aside id="sidebar">        
        <div id="sidebar-menu">
            <?php echo $this->element('admin-sidebar'); ?>  
        </div>
      </aside>
      <!-- End: Sidebar --> 
      <!-- Start: Content -->
      <section id="content">        
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End: Content --> 
    </div>
    <!-- End: Main -->
  <?php //echo $this->element('sql_dump'); ?>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    
</body>
</html>

<script type="text/javascript">
jQuery(document).ready(function(){
  Core.init();

    // Init Datatables
  $('#datatable, #datatable_2').dataTable( {
    "bSort": true,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": false,
    "bInfo": false,
    "bAutoWidth": false,
    "aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ -1 ] }]
  });

  });
</script>
