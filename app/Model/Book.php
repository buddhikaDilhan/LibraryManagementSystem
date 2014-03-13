<?php
App::uses('AppModel', 'Model');
/**
 * Book Model
 *
 * @property Item $Item
 * @property bookDetails $bookDetails
 */
class Book extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'item_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'item_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'item_id' => array(
			'25_24' => array(
				'rule' => array('25 24'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ISBN' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'bookDetails' => array(
			'className' => 'bookDetails',
			'foreignKey' => 'ISBN',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
