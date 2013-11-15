<?php

class SeoHelper extends AppHelper { 
    var $helpers = array('Html');
	function generate($data){
            $robots=array('index'=>'index', 'follow'=>'follow');
            $seoString = "\n";
            if(array_key_exists('description', $data)){
                $seoString.= $this->Html->meta('description',$data['description'] )."\n"; 
            }                 

            if(array_key_exists('canonical', $data)){
                $canonical = trim($data['canonical'], '/');
            }else{
                $canonical = trim(Router::url( null, true ), '/');
                $seoString.= "<!-- can-link generated. Deze link exact de link zoals deze in de adresbalk staat! -->\n";
            }
            $seoString.=  $this->Html->meta('canonical', $canonical, array('rel'=>'canonical', 'type'=>null, 'title'=>null))."\n";
            if(array_key_exists('robots', $data)){               
                if(array_key_exists('index', $data['robots'])){
                    if($data['robots']['index'] ===0 || $data['robots']['index'] ==='0' || $data['robots']['index'] ===false){
                        $robots['index']='noindex';
                    }
                }

                if(array_key_exists('follow', $data['robots'])){
                    if($data['robots']['follow'] ===0 || $data['robots']['follow'] ==='0'|| $data['robots']['follow'] ===false ){
                        $robots['follow']='nofollow';
                    }
                }
            }            
            $seoString.= $this->Html->meta(array('name' => 'robots', 'content' => implode(',', $robots)))."\n"; 
            return $seoString;
	}
}
?>