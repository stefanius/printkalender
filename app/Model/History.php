<?php
App::uses('AppModel', 'Model');
/**
 * History Model
 *
 * @property Marker $Marker
 */
class History extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'history';

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
		'Marker' => array(
			'className' => 'Marker',
			'joinTable' => 'markers_history',
			'foreignKey' => 'history_id',
			'associationForeignKey' => 'marker_id',
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
