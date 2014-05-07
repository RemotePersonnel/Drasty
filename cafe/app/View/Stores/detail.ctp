 <div id="store-setting-wrapper"> 
      <div id="store-setting-content">         
          <div class="demo">            
            <h3 class="expand">Restaurant Details</h3>
            <div class="collapse" id="store-detail-container">
            	
            	<?php echo $this->Form->create('Store',array('class' => 'form-horizontal'));?>
          <div class="col-md-12 no-padding">
					<div class="col-md-6">
						<?php 
							 echo $this->Form->input('Store.0.name',array(
							 		'label' => FALSE,'readonly' => 'readonly',
							 		'placeholder' => 'Restaurant Name',
                                    'div' => array('class' => 'form-group','id' => 'store-name'),
                                    'class' => 'form-control'                                                                  
                            ));

							echo $this->Form->input('User.username',array(
							 		'label' => FALSE,'readonly' => 'readonly',
							 		'placeholder' => 'Email Address',
                                    'div' => array('class' => 'form-group','id' => 'store-email'),
                                    'class' => 'form-control'                                 
                            ));

              echo $this->Form->input('Store.0.suburb',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Suburb',
                                    'div' => array('class' => 'form-group','id' => 'store-suburb'),
                                    'class' => 'form-control'                                 
                            ));

              echo $this->Form->input('Store.0.postcode',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Postcode',
                                     'div' => array('class' => 'form-group','id' => 'store-postcode'),
                                    'class' => 'form-control'                                
                            ));
						
               
               ?>
					</div>
					<div class="col-md-6">

						<?php 

							echo $this->Form->input('Store.0.slogan',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Restauran Slogan',
                                    'div' => array('class' => 'form-group','id' => 'store-slogan'),
                                    'class' => 'form-control'                                   
                            ));	

              echo $this->Form->input('Store.0.contact',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Phone Number',
                                   	'div' => array('class' => 'form-group','id' => 'store-contact'),
                                    'class' => 'form-control'                                
                            ));

              echo $this->Form->input('Store.0.state',array(
							 		'label' => FALSE,
							 		'placeholder' => 'State',
                                   	'div' => array('class' => 'form-group','id' => 'store-state'),
                                    'class' => 'form-control'                                  
                            ));

						?>
					
					</div>
            	</div>
            	<div class="col-md-12 no-padding">
            		<?php 	echo $this->Form->submit('Save'); ?>
            	</div>
               	<?php echo $this->Form->end(); ?>
            </div>
            <h3 class="expand">Restaurant Service</h3>
            <div class="collapse">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <h3 class="expand">Restaurant Service Hours</h3>
            <div class="collapse" id="store-hours-container">
                <?php echo $this->Form->create('Store',array('class' => 'form-horizontal'));?>
               
                <table class="table">
                    <tbody>
                      <tr>
                        <td width="5%">SUN</td>
                        <td>
            								<div id="slider-range-sun"></div>
                            <input id="time-sun" readonly>

                            </script>
                            <script type="text/javascript">
                                $("#slider-range-sun").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeSun
                                });
                            </script>
                        </td>  
                        <td width="20%">
                          <?php  echo $this->Form->input('sun',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                    
                      </tr>
                      <tr>
                        <td width="5%">MON</td>
                        <td>
                            <div id="slider-range-mon"></div>
                            <input id="time-mon" readonly>
                            </script>
                            <script type="text/javascript" readonly>
                                $("#slider-range-mon").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeMon
                                });
                            </script>
                        </td>
                        <td width="20%">
                          <?php  echo $this->Form->input('mon',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                          
                      </tr>
                      <tr>
                        <td width="5%">TUES</td>
                        <td>
                            <div id="slider-range-tues"></div>
                            <input id="time-tues" readonly>
                            </script>
                            <script type="text/javascript">
                                $("#slider-range-tues").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeTues
                                });
                            </script>
                        </td>   
                        <td width="20%">
                          <?php  echo $this->Form->input('tues',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                       
                      </tr>
                      <tr>
                        <td width="5%">WED</td>
                        <td>
                            <div id="slider-range-wed"></div>
                            <input id="time-wed" readonly>
                            </script>
                            <script type="text/javascript">
                                $("#slider-range-wed").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeWed
                                });
                            </script>
                        </td> 
                        <td width="20%">
                          <?php  echo $this->Form->input('wed',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                         
                      </tr>
                      <tr>
                        <td width="5%">THURS</td>
                        <td>
                            <div id="slider-range-thurs"></div>
                            <input id="time-thurs" readonly>
                            </script>
                            <script type="text/javascript">
                                $("#slider-range-thurs").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeThurs
                                });
                            </script>
                        </td>    
                        <td width="20%">
                          <?php  echo $this->Form->input('thurs',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                      
                      </tr>
                      <tr>
                        <td width="5%">FRI</td>
                        <td>
                            <div id="slider-range-fri"></div>
                            <input id="time-fri" readonly>
                            </script>
                            <script type="text/javascript">
                                $("#slider-range-fri").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeFri
                                });
                            </script>
                        </td>         
                        <td width="20%">
                          <?php  echo $this->Form->input('fri',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                 
                      </tr>
                      <tr>
                        <td width="5%">SAT</td>
                        <td>
                            <div id="slider-range-sat"></div>
                            <input id="time-sat" readonly>
                            </script>
                            <script type="text/javascript">
                                $("#slider-range-sat").slider({
                                    range: true,
                                    min: 0,
                                    max: 1439,
                                    values: [540, 1020],
                                    slide: slideTimeSat
                                });
                            </script>
                        </td>     
                        <td width="20%">
                          <?php  echo $this->Form->input('sat',array(
                                      'label' => FALSE,                                     
                                      'div' => array('class' => 'form-group'),
                                      'before' => '<div class="col-md-2"><div class="make-switch" data-on="success" data-off="warning">',
                                      'after' => '</div></div>',
                                      'type' => 'checkbox',
                                      'checked' => 'checked'                                 
                            )); ?>                          
                        </td>                     
                      </tr>
                     
                    </tbody>
                  </table>
                  <div class="col-md-12 no-padding">
                    <?php   echo $this->Form->submit('Save'); ?>
                  </div>
                  <?php echo $this->Form->end(); ?>
            </div>
          </div>
         
        </div>
    </div>


<script type="text/javascript">
$(function() {	
    $("#store-setting-content h3.expand").toggler();
    $("#store-setting-content div.demo").expandAll({trigger: "h3.expand", ref: "h3.expand"});
    $("#store-setting-content div.other").expandAll({
      expTxt : "[Show]", 
      cllpsTxt : "[Hide]",
      ref : "ul.collapse",
      showMethod : "show",
      hideMethod : "hide"
    });
    $("#store-setting-content div.post").expandAll({
      expTxt : "[Read this entry]", 
      cllpsTxt : "[Hide this entry]",
      ref : "div.collapse", 
      localLinks: "p.top a"    
    });    
});
</script>