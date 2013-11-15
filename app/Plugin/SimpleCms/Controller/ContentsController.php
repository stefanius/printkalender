<?php

/**
 * Contents Controller
 *
 * @property Content $Content
 */
class ContentsController extends SimpleCmsAppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('load', 'sectionindex');
    } 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Content->recursive = 0;
		$this->set('contents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
                $options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
                $content = $this->Content->find('first', $options);
                $metadata = $this->generateMetaArray($content);
		$this->set(compact( 'content','metadata') );
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Content->create();
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		}
                $sections = $this->Content->Section->find('list');
                $Model = $this->Content;
                $this->set(compact('sections', 'Model'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
			$this->request->data = $this->Content->find('first', $options);
		}
                $sections = $this->Content->Section->find('list');
                $Model = $this->Content;
                $this->set(compact('sections', 'Model'));                
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('Content deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Content was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

        
	public function load($section_url = null, $urlpart = null) {
		if (is_null($section_url) || is_null($urlpart)) {
			throw new NotFoundException(__('Invalid content'));
		}
                
                $filter = array(
                    'conditions' => 
                            array('Section.urlpart' => $section_url) //array of conditions
                );   
                
                $Section = $this->Content->Section->find('first', $filter);
                if (empty($Section)) {
                        throw new NotFoundException(__('Invalid content'));
                }                
                $filter = array(
                    'conditions' => 
                            array('Content.urlpart' => $urlpart, 'Content.section_id' => $Section['Section']['id']) //array of conditions
                ); 
                
                $Content = $this->Content->find('first', $filter);
                if (empty($Content)) {
                        throw new NotFoundException(__('Invalid content'));
                } 
                $metadata = $this->generateMetaArray($Content, $Section);
                $this->set('title_for_layout',$Content['Content']['title'].'' );
		$this->set(compact('Content', 'metadata' ));   
	}

        public function sectionindex($section_url=null){
            if (is_null($section_url)) {
                    throw new NotFoundException(__('Invalid content'));
            }
            $filter = array(
                'conditions' => array('Section.urlpart' => $section_url),
            );            
            $Section = $this->Content->Section->find('first', $filter); 

            if (empty($Section)) {
                    throw new NotFoundException(__('Invalid content'));
            }
            
            $filter = array(
                'conditions' => array('Content.section' => $section_url),
                'order' => array('Content.created DESC'),
            );
            $list = $this->Content->find('all', $filter);         
            $metadata = $this->generateMetaArray(false, $Section);
            $this->set('title_for_layout',$Section['Section']['title'].' - Index' );
            $this->set(compact('list', 'Section', 'metadata'));
        }           
        
}

