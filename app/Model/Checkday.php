<?php
App::uses('AppModel', 'Model');
/**
 * Content Model
 *
 */
class Checkday extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = false;

        private function fetch($description,$doaction=false,$robots=false, $dayofweek=0, $countdown=false, $dayname=''){
            if($robots===false){
                $robots = 'INDEX, FOLLOW';
            }
            $result = array(
                'description'=>$description,
                'robots'=>$robots,
                'doaction'=>$doaction,
                'dayofweek'=>$dayofweek,
                'countdown'=>$countdown,
                'dayname'=>$dayname
            );
            return $result;
        }

        public function isZaagmans(){
            $zaagmansGeweest = false;
            $dayofweek =  (int)date ("N");

            if($dayofweek === 3){
                $hour =  (int)date ("H");

                if($hour > 11){
                    $zaagmansGeweest=true;
                }

            }elseif($dayofweek > 3){
                $zaagmansGeweest=true;
            }
            $description = 'Bekijk hier dagelijks of Zaagmans al is geweest. Zaagmaans komt elke woensdag langs op Dag Van De Week. Elke week weer een zaagmans.';
            return $this->fetch($description, $zaagmansGeweest, false, $dayofweek);
        }
        
        public function isGehaktdag(){
            $gehaktdag = false;
            $dayofweek =  (int)date ("N");

            if($dayofweek === 3){
                $gehaktdag=true;
            }

            if($dayofweek <=3){
                $countdown = 3-$dayofweek;
            }else{
                $countdown = 4 + (6-$dayofweek);
            }

            $description = 'Woensdag Gehaktdag. Bekijk hier dagelijks of het al gehaktdag is. Elke woensdag is Gehaktdag op Dag Van De Week. Elke week weer een gehaktdag.';

            return $this->fetch($description, $gehaktdag, false, $dayofweek, $countdown);
        }
        
        public function isBieruur(){
            $isBieruur = false;
            $dayofweek =  (int)date ("N");

            if($dayofweek === 5){
                $hour =  (int)date ("H");

                if($hour === 16){
                    $isBieruur=true;
                }

            }
            $description = 'Tijd voor bier? Is het al Bieruur? Is het al tijd voor de VrijMiBo? Kijk op Dag Van De Week of het al bieruur is! Elke week op vrijdag. Vier uur is bier uur.';
            return $this->fetch($description, $isBieruur, false, $dayofweek);
        }
     
        public function isWeekday($daynumber){
            $dag='';
            $dayofweek =  (int)date ("N");
            
            if($daynumber==1){
                $dag='Maandag';
            }elseif($daynumber==2){
                $dag='Dinsdag';
            }elseif($daynumber==3){
                $dag='Woensdag';
            }elseif($daynumber==4){
                $dag='Donderdag';
            }elseif($daynumber==5){
                $dag='Vrijdag';
            }elseif($daynumber==6){
                $dag='Zaterdag';
            }elseif($daynumber==7){
                $dag='Zondag';
            }elseif($daynumber==8){
                $dag='VANDAAG';
            }elseif($daynumber==9){
                $dag='Gisteren';
            }elseif($daynumber==10){
                $dag='Morgen';
            }
            
            if($dayofweek===$daynumber || $daynumber===8){
                $today=true;
            }else{
                $today=false;
            }
            $description='Is het al '.$dag.'? Kijk elke dag of het al '.$dag. ' is. Bij twijfel van elke dag, kijk op Dag Van De Week voor weer een nieuwe '.$dag.'!';
            return $this->fetch($description, $today, false, $dayofweek, 0,$dag);
        }
}
