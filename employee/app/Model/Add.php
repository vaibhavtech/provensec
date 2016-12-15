<?php


class Code extends AppModel {
	
	public $useTable="codes";
	var $validate = array(
    
    'email' => array(
        'email' => array(
            'rule' => 'notEmpty',
            'message' => 'Email is required',
            'type'=>"email"
        ))
);


public function beforeSave($options = Array()) {
    return true;
}
}
?>