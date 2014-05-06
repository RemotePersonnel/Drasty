 <div id="store-setting-wrapper"> 
      <div id="store-setting-content">         
          <div class="demo">
            <h2>Store Detail Page</h2>
            <h3 class="expand">Restaurant Details</h3>
            <div class="collapse" id="store-detail-container">
            	<p class="col-md-12 no-padding"> </p>
            	<?php echo $this->Form->create('Store');?>
            	<p class="col-md-12 no-padding">
					<p class="col-md-6">
						<?php 
							 echo $this->Form->input('name',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Restaurant Name',
                                    'div' => array('class' => 'form-group','id' => 'store-name'),
                                    'class' => 'form-control'                                                                  
                            ));

							echo $this->Form->input('User.username',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Email Address',
                                    'div' => array('class' => 'form-group','id' => 'store-email'),
                                    'class' => 'form-control'                                 
                            ));

                            echo $this->Form->input('suburb',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Suburb',
                                    'div' => array('class' => 'form-group','id' => 'store-suburb'),
                                    'class' => 'form-control'                                 
                            ));

                            echo $this->Form->input('postcode',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Postcode',
                                     'div' => array('class' => 'form-group','id' => 'store-postcode'),
                                    'class' => 'form-control'                                
                            ));
						
               
               ?>
					</p>
					<p class="col-md-6">

						<?php 

							echo $this->Form->input('slogan',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Restauran Slogan',
                                    'div' => array('class' => 'form-group','id' => 'store-slogan'),
                                    'class' => 'form-control'                                   
                            ));	

                            echo $this->Form->input('contact',array(
							 		'label' => FALSE,
							 		'placeholder' => 'Phone Number',
                                   	'div' => array('class' => 'form-group','id' => 'store-contact'),
                                    'class' => 'form-control'                                
                            ));

                            echo $this->Form->input('state',array(
							 		'label' => FALSE,
							 		'placeholder' => 'State',
                                   	'div' => array('class' => 'form-group','id' => 'store-state'),
                                    'class' => 'form-control'                                  
                            ));

						?>
					
					</p>
            	</p>
            	<p class="col-md-12 no-padding">
            		<?php 	echo $this->Form->submit('Save'); ?>
            	</p>
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
                <table class="table">
                    <tbody>
                      <tr>
                        <td width="5%">SUN</td>
                        <td>
								<div id="slider-range-sun"></div>
								<span id="time-sun"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-sun").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                       
                      </tr>
                      <tr>
                        <td width="5%">MON</td>
                        <td>
								<div id="slider-range-mon"></div>
								<span id="time-mon"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-mon").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                      
                      </tr>
                      <tr>
                        <td width="5%">TUES</td>
                         <td>
								<div id="slider-range-tues"></div>
								<span id="time-tues"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-tues").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                         
                      </tr>
                      <tr>
                        <td width="5%">WED</td>
                         <td>
								<div id="slider-range-wed"></div>
								<span id="time-wed"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-wed").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                       
                      </tr>
                      <tr>
                        <td width="5%">THURS</td>
                         <td>
								<div id="slider-range-thurs"></div>
								<span id="time-thurs"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-thurs").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                       
                      </tr>
                      <tr>
                        <td width="5%">FRI</td>
                         <td>
								<div id="slider-range-fri"></div>
								<span id="time-fri"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-fri").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                       
                      </tr>
                       <tr>
                        <td width="5%">SAT</td>
                         <td>
								<div id="slider-range-sat"></div>
								<span id="time-sat"></span>
								</script>
								<script type="text/javascript">
								    $("#slider-range-sat").slider({
								        range: true,
								        min: 0,
								        max: 1439,
								        values: [540, 1020],
								        slide: slideTime
								    });
								</script>
                        </td>                        
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
         
        </div>
    </div>

<div id="slider-range"></div>
<span id="time"></span>
</script>
<script type="text/javascript">
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 1439,
        values: [540, 1020],
        slide: slideTime
    });
</script>
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