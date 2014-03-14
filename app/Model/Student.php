<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Member $Member
 */
class Student extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
        var $name = 'student';
	public $primaryKey = 'student_index';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'student_index';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'student_index' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'student id should be numeric',
				
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'cannot be empty',
				
			),
		),
		'batch' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'include the batch here',
			
			),
		),
		'registered_date' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'date is incorrect ',
				
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $belongsto = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'student_index',
			
		)
	);
}
