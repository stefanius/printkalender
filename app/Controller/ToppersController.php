<?php
App::uses('AppController', 'Controller');
/**
 * Toppers Controller
 *
 * @property Topper $Topper
 */
class ToppersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('showtopper', 'weektoppermainpage');
       
    }   
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Topper->recursive = 0;
		$this->set('toppers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Topper->exists($id)) {
			throw new NotFoundException(__('Invalid topper'));
		}
		$options = array('conditions' => array('Topper.' . $this->Topper->primaryKey => $id));
		$this->set('topper', $this->Topper->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Topper->create();
			if ($this->Topper->save($this->request->data)) {
				$this->Session->setFlash(__('The topper has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The topper could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Topper->exists($id)) {
			throw new NotFoundException(__('Invalid topper'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Topper->save($this->request->data)) {
				$this->Session->setFlash(__('The topper has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The topper could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Topper.' . $this->Topper->primaryKey => $id));
			$this->request->data = $this->Topper->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Topper->id = $id;
		if (!$this->Topper->exists()) {
			throw new NotFoundException(__('Invalid topper'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Topper->delete()) {
			$this->Session->setFlash(__('Topper deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Topper was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

        public function weektoppermainpage(){
                    $this->set('title_for_layout','Topper van de Week - Index' );
                    $description = 'Voor elk jaar, en elke week is er een Topper van de Week. Hier vindt u de jaren waar wij Weektoppers van hebben verzameld!';
                    $canonical = 'http://dagvandeweek.nl/topper-van-de-week';
                    $years = array('2012', '2013');
                    $this->set(compact('years', 'canonical', 'description'));              
        }        
        
        public function showtopper($year=null, $week=null){
                if(is_null($year) || strlen($year) !== 4 ){
                    throw new NotFoundException(__('Geen weektoppers gevonden'));
                }
            
                if(!is_null($week)){
                    $week = (int)$week;
                    if($week < 10){
                        $week = '0'.$week;
                    }
                    $filter = array(
                        'conditions' => 
                                array('Topper.year' => $year, 'Topper.week' => $week) //array of conditions
                    );    
                    $Topper =  $this->Topper->find('first', $filter);
                    $canonical='/topper-van-de-week/'.$year.'/'.$week;

                    if(strlen($Topper['Topper']['description']) < 2){
                        $description = 'Week '.$Topper['Topper']['week'] . '('.$Topper['Topper']['year'].'). Elke week een nieuwe Topper van de Week!'.substr($Topper['Topper']['pagecontent'], 0,50);
                    }else{
                        $description=$Topper['Topper']['description'];
                    }          
                    $this->set('title_for_layout', $Topper['Topper']['title'].' - Topper v/d Week '.$Topper['Topper']['week'].' (' .$Topper['Topper']['year'].')' );
                    $this->set(compact('Topper', 'canonical', 'description', 'year'));                       
                    
                }else{
                    $filter = array(
                        'conditions' => 
                                array('Topper.year' => $year), //array of conditions
                        'order' => array('Topper.week DESC')
                    );    
                    
                    $description = $year. ' Jaaroverzicht. Elke week een NIEUWE Topper van de Week op Dag Van De Week. Hier vind u het overzicht uit '.$year.'! Naast de Weektopper is '.$year.' natuurlijk een Topjaar!';
                    $Toppers =  $this->Topper->find('all', $filter);
                    $this->set('title_for_layout',  'Topper van de Week - '.$year.' Jaaroverzicht '.$year);
                    $this->set('pagetitle',  'Topper van de Week - Jaaroverzicht '.$year );
                    $this->set('year',  $year );
                    $this->set('description',  $description );
                    $this->set('Toppers',  $Toppers );
                    $canonical='/topper-van-de-week/'.$year;       
                    $this->render('weektopperindex');
                }
        }
}
