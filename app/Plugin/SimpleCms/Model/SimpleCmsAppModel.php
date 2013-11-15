<?php

App::uses('AppModel', 'Model');

class SimpleCmsAppModel extends AppModel {
    function _toSlug($string) {
        return strtolower(Inflector::slug($string, '-'));
    }   
    
    public function beforeSave($options = array()) {

        if(array_key_exists('urlpart', $this->data[$this->name])){
            if (!empty($this->data[$this->name]['title']) && empty($this->data[$this->name]['urlpart']) ) {
                $this->data[$this->name]['urlpart']=$this->_toSlug($this->data[$this->name]['title']);
            }            
        }

        return true;
    }
}
