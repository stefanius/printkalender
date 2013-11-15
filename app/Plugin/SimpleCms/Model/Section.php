<?php

/**
 * Section Model
 *
 */
class Section extends SimpleCmsAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
        public $hasMany = 'Content';

}
