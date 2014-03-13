<?php
App::uses('AppModel', 'Model');
/**
 * Staff Model
 *
 * @property Member $Member
 */
class Staff extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'staff_index';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'staff_index';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'staff_index' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'year_of_appoinment' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'position' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_index',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
