<?php
App::uses('AppModel', 'Model');
/**
 * Author Model
 *
 * @property BookDetail $BookDetail
 */
class Author extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ISBN';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ISBN';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ISBN' => array(
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
		'author_name_1' => array(
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
		'BookDetail' => array(
			'className' => 'BookDetail',
			'foreignKey' => 'ISBN',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
