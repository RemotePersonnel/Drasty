<?php

class StoreServicesController extends AppController {

	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'defaultdashboard';
    }

   public function index(){
    
   }

}

?>