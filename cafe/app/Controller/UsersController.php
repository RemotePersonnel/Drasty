<?php

class UsersController extends AppController {

	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login');
        $this->Auth->allow('register'); 
    }

    public function register() {

    	$this->layout = 'default';
        if ($this->request->is('post')) {
		
        	$data = array();
        	$data = $this->request->data;
        	$data['User']['role'] = 'client';
        	
        	/*pr($data);
        	die();*/

			$this->User->create();
			if ($this->User->saveAssociated($data)) {
				$this->Session->setFlash(__('You have registered successfully for free trial !'));
				$this->redirect(array('action' => 'index'));
			} else {

				$this->Session->setFlash(__('Oops ! Please, try again.'));
			}	
        }
    }

	public function login() {
		
		$this->layout = 'default';

		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('action' => 'index'));		
		}
		
		// if we get the post information, try to authenticate
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));

				if($this->Auth->user('role')=='admin'){
					$this->Auth->allow('*');
					//$this->redirect('/admin/users/dashboard');	
					$this->redirect(array('controller'=>'users','action'=>'admin_dashboard','admin'=>true));

				}else{
					$this->redirect(array('controller'=>'dashboard','action'=>'index'));
				}
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		} 
	}

	public function logout() {		
		$this->redirect($this->Auth->logout());
	}

	public function admin_logout() {		
		$this->redirect($this->Auth->logout());
	}

    public function index() {
		$this->paginate = array(
			'limit' => 6,
			'order' => array('User.username' => 'asc' )
		);
		$users = $this->paginate('User');
		$this->set(compact('users'));
    }


    public function add() {


        if ($this->request->is('post')) {
				
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}	
        }
    }

    public function edit($id = null) {

		    if (!$id) {
				$this->Session->setFlash('Please provide a user id');
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Session->setFlash('Invalid User ID Provided');
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been updated'));
					$this->redirect(array('action' => 'edit', $id));
				}else{
					$this->Session->setFlash(__('Unable to update your user.'));
				}
			}

			if (!$this->request->data) {
				$this->request->data = $user;
			}
    }

    public function delete($id = null) {
		
		if (!$id) {
			$this->Session->setFlash('Please provide a user id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	
	public function activate($id = null) {
		
		if (!$id) {
			$this->Session->setFlash('Please provide a user id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }

    public function admin_dashboard() {
        $title_for_layout = 'Dashbord';
        $this->set(compact('title_for_layout'));
    }

}

?>