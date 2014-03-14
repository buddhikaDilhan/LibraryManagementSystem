<?php
App::uses('AppModel', 'Model');
/**
 * Cd Model
 *
 * @property Item $Item
 * @property CdDetails $CeDetails
 */
class Cd extends AppModel {

    var $name='Cd';
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
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ISSN' => array(
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

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CdDetail' => array(
			'className' => 'CdDetail',
			'foreignKey' => 'ISSN'
		),
                'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
		)
	);
}
