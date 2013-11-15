<?php

/**
 * Content Model
 *
 */
class Content extends SimpleCmsAppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'content';
        public $belongsTo = 'Section';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';        
}