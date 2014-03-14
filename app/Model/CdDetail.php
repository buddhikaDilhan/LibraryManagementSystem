<?php
App::uses('AppModel', 'Model');
/**
 * CdDetail Model
 *
 */
class CdDetail extends AppModel {
var $name='CdDetail';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ISSN';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
        /**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Cd' => array(
			'className' => 'Cd',
			'foreignKey' => 'ISSN'

		)
	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ISSN' => array(
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
		'title' => array(
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
}
