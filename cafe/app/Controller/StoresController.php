<?php

class StoresController extends AppController {

	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'defaultdashboard';
    }

    public function detail(){

        $this->loadModel('User');
        $user_id = $this->Auth->user('id');
        $data = $this->User->findById($user_id);

        $store_id = $data['Store']['0']['id'];


        if (!$this->request->data) {
                $this->request->data = $data;
        }

        
        if ($this->request->is('post') || $this->request->is('put')) {
                $store_data = array();
                $store_data = $this->request->data;
                $this->Store->id = $store_id;
                $store_data['Store']['0']['id'] = $store_id;
                if ($this->Store->save($store_data['Store']['0'])) {
                    $this->Session->setFlash(__('The store has been updated'));
                    $this->redirect(array('action' => 'detail'));
                }else{
                    $this->Session->setFlash(__('Unable to update your store.'));
                }
            }

       /* pr($data);
        die();
        */
    	
    }

}

?>