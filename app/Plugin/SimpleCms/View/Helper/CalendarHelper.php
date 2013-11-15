<?php

class CalendarHelper extends AppHelper { 
    var $weeknumberBefore = true;
    var $weeknumberAfter = false;
    var $lang = 'nl';
    var $weeknumberHeaderText = 'W#';
    var $title = '#MONTH# #YEAR#';
    var $titleElement='h2';
    var $todayTimeStamp;
    var $helpers = array('Html'); 
    var $months = array('nl' =>
                          array(         
                                    '01'=>'Januari',
                                    '02'=>'Februari',
                                    '03'=>'Maart',
                                    '04'=>'April',
                                    '05'=>'Mei',
                                    '06'=>'Juni',
                                    '07'=>'Juli',
                                    '08'=>'Augustus',
                                    '09'=>'September',
                                    '10'=>'Oktober',
                                    '11'=>'November',
                                    '12'=>'December'
                                ));    

    var $days = array('nl' => array(
        '00'=>'Zondag',
        '01'=>'Maandag',
        '02'=>'Dinsdag',
        '03'=>'Woensdag',
        '04'=>'Donderdag',
        '05'=>'Vrijdag',
        '06'=>'Zaterdag',
        '07'=>'Zondag',
    ));  
 
    var $daysAbbreviation = array('nl' => array(
        '01'=>'Ma',
        '02'=>'Di',
        '03'=>'Wo',
        '04'=>'Do',
        '05'=>'Vr',
        '06'=>'Za',
        '07'=>'Zo',
    ));    
    
    function __construct() {
        $this->todayTimeStamp = mktime(0,0,0,date('m'),date('d'),date('Y'));
    }
    
    /**
     *
     * @param type $toggle
     * @throws CakeException 
     */
    function setDisplayWeeknumberBefore($toggle){
        if(is_bool($toggle)){
            $this->weeknumberBefore=$toggle;
        }else{
            throw new CakeException();
        }
    }
    
    /**
     *
     * @param type $toggle
     * @throws CakeException 
     */
    function setDisplayWeeknumberAfter($toggle){
        if(is_bool($toggle)){
            $this->weeknumberAfter=$toggle;
        }else{
            throw new CakeException();
        }
    }
 
    /**
     *
     * @param type $lang
     * @throws CakeException 
     */
    function setLang($lang){
        $lang=  strtolower($lang);
        if(array_key_exists($lang, $this->daysAbbreviation) && array_key_exists($lang, $this->days)  && array_key_exists($lang, $this->months)){
            $this->lang = $lang;
        }else{
            throw new CakeException();
        }
    }

    /**
     *
     * @param type $element 
     */
    function setTitleElement($element){
        $this->titleElement = strtolower($element);
    }

    function setTitle($title){
        $this->title = strtolower($title);
    }
    
    /**
     *
     * @param type $text 
     */
    function setWeeknumberHeaderText($text){
        $this->weeknumberHeaderText=$text;
    }
    
    /**
     *
     * @return type 
     */
    private function generateDayHeader(){
        $row='';
        foreach($this->daysAbbreviation[$this->lang] as $d){
            $row.='<th>'.$d.'</th>';
        }
        
        if($this->weeknumberAfter){
            $row.='<th class="weeknumber">'.$this->weeknumberHeaderText.'</th>';
        }
        if($this->weeknumberBefore){
            $row ='<th class="weeknumber">'.$this->weeknumberHeaderText.'</th>'.$row;
        }
        
        return '<tr>'.$row.'</tr>';
    }
    
    /**
     *
     * @param type $month
     * @param type $year
     * @param type $linkdays
     * @param type $linkprop
     * @return string 
     */
    function generatemonth($month, $year, $linkdays=array(), $linkprop=false){
        $month=(int)$month;
        if($month < 10){
            $month = '0'.(string)$month;
        }
        $rows=0;
        $month=(string)$month;
        $rtrn='<div class="calendar-wrapper">';
        $title =  str_replace(array('#YEAR#', '#MONTH#'), array($year,$this->months[$this->lang][$month]), $this->title);
        $days = range(1,date('t', mktime(0,0,0,$month,1,$year)));

        $rtrn.= '<'.$this->titleElement.'>'.$title.'</'.$this->titleElement.'>';
        $rtrn.=  '<table>';
        $rtrn.=  $this->generateDayHeader();
        $firstday = date('w', mktime(0,0,0,$month,1,$year));

       $firstday=(int)$firstday;

        if($this->weeknumberBefore && $firstday > 1 ){
            $weeknumber = date('W', mktime(0,0,0,$month,1,$year));
            $rtrn.='<td class="weeknumber">'.$weeknumber.'</td>';
        }       
       
        if($firstday !== 1){
            for($i = 1; $i <= 7; $i++)
            {
                if($i != $firstday)
                {
                    $rtrn.=  '<td></td>';
                }else{
                    break;
                }
            }            
        }

        foreach($days as $day)
        {
            if($day < 10){
                $day= '0'.$day;
            }
            $dayTimeStamp= mktime(0,0,0,$month,$day,$year);
            $weekday = date('w',$dayTimeStamp);
            $weeknumber = date('W', mktime(0,0,0,$month,$day,$year));
            if($weekday == 1)
            {
                $rtrn.=  '<tr>';
                if($this->weeknumberBefore){
                    $rtrn.='<td class="weeknumber">'.$weeknumber.'</td>';
                }
            } 

            if($this->todayTimeStamp==$dayTimeStamp){
                $todayclass='class="today"';
            }else{
                $todayclass='';
            }
            $rtrn.=  '<td '.$todayclass.'>';   
            if(isset($linkdays[$year][$month][$day]) && $linkprop !== false){
                $l = str_replace(array('#DAY#', '#YEAR#', '#MONTH#'), array($day,$year,$month), $linkprop);
                $rtrn.=  $this->Html->link((int) $day , $l, array('rel'=>'follow'));
            }else{
                $rtrn.=  (int)$day;
            }

            $rtrn.=  '</td>';

            if($weekday == 0 || count($days)==$day)
            {
                if($this->weeknumberAfter){
                    $rtrn.='<td class="weeknumber">'.$weeknumber.'</td>';
                }
 
                $rtrn.=  '</tr>';
                $rows++;
            }    
        }
        while($rows < 6){
            $rtrn.=  '<tr><td></td></tr>';
            $rows++;
        }
        $rtrn.=  '</table>';    
        $rtrn.=  '</div>';
        
        return $rtrn;
    }
    
    function generateTextLine($data){
        if(!array_key_exists('year', $data) &&
           !array_key_exists('month', $data) &&  
           !array_key_exists('day', $data) && 
           !array_key_exists('title', $data)){
                throw new CakeException();
        }
        
        $arrDates=array();
        
        foreach($data['month'] as $m){
            foreach($data['day'] as $d){
                $weekday = date('w', mktime(0,0,0,$m,$d,$data['year']));
                $weekday=(int)$weekday;
                $weekday='0'.$weekday;
                
                if($m < 10 && strlen($m)==1){
                    $mo=(int)$m;
                    $mo='0'.$m;
                }else{
                    $mo=$m;
                }
                $arrDates[] = $this->days['nl'][$weekday].'&nbsp;'.$d.'&nbsp;'.$this->months['nl'][$mo];
            }
        }
       
        $rtrn = '<dt>'.$data['title'].': </dt><dd>'.implode( ' & ', $arrDates).'</dd>';
        return $rtrn;
        
    }
    
    function generateTextBlock($data){
        $rtrn='';
        $year=0;
        foreach($data as $d){
            $year=$d['year'];
            $rtrn.=$this->generateTextLine($d);
        }
        $summerwinter = $this->summerWinterTime($year);
        
        foreach($summerwinter as $d){
            $rtrn.=$this->generateTextLine($d);
        }        
        return '<dl>'.$rtrn.'</dl>';
    }
    
    function summerWinterTime($year){
        //de zomertijd begint op de laatste zondag van maart, 
        //en eindigt op de laatste zondag van oktober
        //vanaf 2002
        
        if($year < 2002){
            return array();
        }
        $summertime=array();
        $wintertime=array();
        
        $summertime['month']='03';
        $wintertime['month']='10';
        
        for($i=1;$i<32;$i++){
            $summerday = date('w', mktime(0,0,0,$summertime['month'],$i,$year));
            $winterday = date('w', mktime(0,0,0,$wintertime['month'],$i,$year));
            
            if($summerday==0){
                $summertime['day']=$i;
            }

            if($winterday==0){
                $wintertime['day']=$i;
            }
        }
        
        $summertime['month'] = array($summertime['month']);
        $summertime['day'] = array($summertime['day']);
        $summertime['year'] =$year;
        $summertime['title'] ='Zomertijd';
        
        $wintertime['month'] = array($wintertime['month']);
        $wintertime['day'] = array($wintertime['day']);
        $wintertime['year'] =$year;
        $wintertime['title'] ='Wintertijd';
        return array($summertime,$wintertime);
    }
}
?>