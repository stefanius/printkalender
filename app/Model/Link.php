<?php
App::uses('AppModel', 'Model');
/**
 * Link Model
 *
 * @property WikiListitem $WikiListitem
 */
class Link extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'WikiListitem' => array(
			'className' => 'WikiListitem',
			'foreignKey' => 'wiki_listitem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
