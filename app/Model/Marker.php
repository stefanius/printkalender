<?php
App::uses('AppModel', 'Model');
/**
 * Marker Model
 *
 * @property History $History
 */
class Marker extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'History' => array(
			'className' => 'History',
			'joinTable' => 'markers_history',
			'foreignKey' => 'marker_id',
			'associationForeignKey' => 'history_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
