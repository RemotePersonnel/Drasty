<?php
/*App::uses('AuthComponent', 'Controller/Component');*/

class Registration extends AppModel {
	
	 public $validate = array(
	 	'client_name' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'A client_name is required'
			
            )
    	),
        'client_email' => array(
            'required' => array(
                'rule' => array('email', true),    
                'message' => 'Please provide a valid email address.'    
            ),
             'unique' => array(
                'rule'    => array('isUniqueEmail'),
                'message' => 'This email is already in use',
            )
        )
    );

    function isUniqueEmail($check) {

        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'Registration.id'
                ),
                'conditions' => array(
                    'Registration.client_email' => $check['client_email']
                )
            )
        );

        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['Registration']['id']){
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