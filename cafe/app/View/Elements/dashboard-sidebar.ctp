<?php if($logged_in){ ?>
           
           <ul class="nav sidebar-nav">

              <li>
                <a href="/cafe/dashboard">
                  <span class="glyphicons glyphicons-list"></span>
                  <span class="sidebar-title">Products/Orders</span>
                </a>
              </li>
              <li>                            
                  <?php echo $this->Html->link( "<span class='glyphicons glyphicons-list'></span><span class='sidebar-title'>Store Details</span>",   array('controller'=>'stores','action'=>'detail'), array('escape'=>FALSE) ); ?>
              </li>
              <li>
                <a href="/cafe/dashboard">
                  <span class="glyphicons glyphicons-list"></span>
                  <span class="sidebar-title">Add Events</span>
                </a>
              </li>
              <li>
                <a href="/cafe/dashboard">
                  <span class="glyphicons glyphicons-list"></span>
                  <span class="sidebar-title">Add Loyalty</span>
                </a>
              </li>
              <li>
                <a href="/cafe/dashboard">
                  <span class="glyphicons glyphicons-list"></span>
                  <span class="sidebar-title">Special Deals</span>
                </a>
              </li>
              <li>
                <a href="/cafe/dashboard">
                  <span class="glyphicons glyphicons-list"></span>
                  <span class="sidebar-title">Customize App</span>
                </a>
              </li>
              <li>
                <?php echo $this->Html->link( "<span class='glyphicons glyphicons-power'></span><span class='sidebar-title'>Logout</span>",   array('controller'=>'users','action'=>'logout'), array('escape'=>FALSE) ); ?>
              </li>

          </ul>
 
          
<?php }?>
        