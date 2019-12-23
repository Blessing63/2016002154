<?php
App::uses('AppModel', 'Model');
/**
 * SuspendedStudent Model
 *
 * @property StudentDetail $StudentDetail
 * @property SuspensionReason $SuspensionReason
 */
class SuspendedStudent extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'student_detail_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'suspension_reason_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'active' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'StudentDetail' => array(
			'className' => 'StudentDetail',
			'foreignKey' => 'student_detail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SuspensionReason' => array(
			'className' => 'SuspensionReason',
			'foreignKey' => 'suspension_reason_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
