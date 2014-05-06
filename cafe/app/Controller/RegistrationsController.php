<?php

class RegistrationsController extends AppController {

	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register'); 
        $this->layout = 'default';
    }
	
	
	public function index(){

	}

	public function register(){

		if ($this->request->is('post')) {

			$data = $this->request->data;
			if ($this->Registration->save($data)) {
				$this->Session->setFlash(__('The client has been created'));
				$this->redirect(array('controller'=>'pages','action' => 'display','home'));
			} else {
				$this->Session->setFlash(__('The client could not be created. Please, try again.'));
			}	
			
			
		}
	}

}

?>