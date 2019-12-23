<?php
App::uses('AppModel', 'Model');
/**
 * SuspensionReason Model
 *
 * @property SuspendedStudent $SuspendedStudent
 */
class SuspensionReason extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'reason' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SuspendedStudent' => array(
			'className' => 'SuspendedStudent',
			'foreignKey' => 'suspension_reason_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
