<?php
class CheckdayController extends AppController {
    
    var $name = 'Checkday';
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }   
        
    private function doRender($DayResult, $showwhatislink=true){
        $description = $DayResult['description'];
        $robots = $DayResult['robots'];
        $this->set(compact('DayResult', 'description', 'robots', 'showwhatislink')); 
    }
    function zaagmans(){
        $this->set('title_for_layout', 'Is zaagmans al geweest?');
        $this->doRender($this->Checkday->isZaagmans());
    }   
    
    function gehaktdag(){
        $this->set('title_for_layout', 'Is het al woensdag gehaktdag?');
        $this->doRender($this->Checkday->isGehaktdag());              
    }
    
    function bieruur(){
        $this->set('title_for_layout', 'Is het al bieruur?');
        $this->doRender($this->Checkday->isBieruur());              
    }
    
    function weekday($daynumber=false){
        if($daynumber===false){
            $this->redirect('/');
        }
        $daynumber=(int)$daynumber;
        $Checkday = $this->Checkday->isWeekday($daynumber);
        $this->set('title_for_layout', 'Is het vandaag '.$Checkday['dayname'].'?');
        $this->doRender($Checkday, false);   
    }
}