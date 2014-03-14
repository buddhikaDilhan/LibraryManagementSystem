<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 */
class Member extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'member_index';
        var $name ='Member';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'member_index' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'member index should be a number',
				
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
			
			),
		),
		'first_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
			
			),
		),
		'last_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
			
			),
		),
		'department' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
			
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
			
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'please enter correct email address',
		
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
			
			),
		),
	);
        public $hasOne = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_index',
		),
            
		'Staff' => array(
			'className' => 'Staff',
			'foreignKey' => 'staff_index',
		)
	
	);
}
