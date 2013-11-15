<?php
App::uses('AppController', 'Controller');

class SimpleCmsAppController extends AppController {
   // var $layout = 'simplecss';
    
    public $helpers = array('SimpleCms.Seo');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('generateMetaArray');
    } 
    
    public function generateMetaArray($Content, $Section){
        if($Content===false){
            $modeldata = $Section['Section'];
        }else{
            $modeldata = $Content['Content'];
        }
        
        $metadata = array();
        if(array_key_exists('description', $modeldata)){
            $metadata['description'] = $modeldata['description'];
        }

        if(array_key_exists('index', $modeldata)){
            $metadata['robots']['index'] = $modeldata['index'];
        }

        if(array_key_exists('follow', $modeldata)){
            $metadata['robots']['follow'] = $modeldata['follow'];
        }
        
        if(array_key_exists('urlpart', $Section) && array_key_exists('urlpart', $modeldata) ){
            $metadata['canonical']= Router::url(array('plugin'=>null, 'controller'=>null, 'action'=> $section['urlpart'], $modeldata['urlpart'] ), true);
            // 'true' for full URL
        }
        if(array_key_exists('title', $Section) && array_key_exists('title', $modeldata) ){
            $this->set('title_for_layout', $section['title'].' - '.$modeldata['title']);
        }
        
        return $metadata;
    }
    
}
