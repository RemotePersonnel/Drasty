<?php
App::uses('AuthComponent', 'Controller/Component');

class Store extends AppModel {
	
	
	public $validate = array(
		'name' => array(
				'nonEmpty' => array(
	                'rule' => array('notEmpty'),
	                'message' => 'A storename is required',
					'allowEmpty' => false
	            ),
				 'unique' => array(
					'rule'    => array('isUniqueStorename'),
					'message' => 'This storename is already in use'
				)
	        )
	);

	function isUniqueStorename($check) {

		$storename = $this->find(
			'first',
			array(
				'fields' => array(
					'Store.id',
					'Store.name'
				),
				'conditions' => array(
					'Store.name' => $check['name']
				)
			)
		);

		if(!empty($storename)){
			if($this->data[$this->alias]['id'] == $storename['Store']['id']){
				return true; 
			}else{
				return false; 
			}
		}else{
			return true; 
		}
    }
}

?>