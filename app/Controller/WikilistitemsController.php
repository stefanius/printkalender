<?php
App::uses('AppController', 'Controller');
/**
 * Wikilistitems Controller
 *
 * @property WikiListitem $WikiListitem
 */
class WikiListitemsController extends AppController {

	public $uses = array('WikiListitem', 'History');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->WikiListitem->recursive = 0;
		$this->set('wikiListitems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WikiListitem->exists($id)) {
			throw new NotFoundException(__('Invalid wiki listitem'));
		}
		$options = array('conditions' => array('WikiListitem.' . $this->WikiListitem->primaryKey => $id));
		$this->set('wikiListitem', $this->WikiListitem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WikiListitem->create();
			if ($this->WikiListitem->save($this->request->data)) {
				$this->Session->setFlash(__('The wiki listitem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wiki listitem could not be saved. Please, try again.'));
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
		if (!$this->WikiListitem->exists($id)) {
			throw new NotFoundException(__('Invalid wiki listitem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->WikiListitem->save($this->request->data)) {
				$this->Session->setFlash(__('The wiki listitem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wiki listitem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WikiListitem.' . $this->WikiListitem->primaryKey => $id));
			$this->request->data = $this->WikiListitem->find('first', $options);
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
		$this->WikiListitem->id = $id;
		if (!$this->WikiListitem->exists()) {
			throw new NotFoundException(__('Invalid wiki listitem'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WikiListitem->delete()) {
			$this->Session->setFlash(__('Wiki listitem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Wiki listitem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function newhistory($id = null) {
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->History->save($this->request->data)) {
				$this->Session->setFlash(__('The wiki listitem has been saved'));
				$this->WikiListitem->id = $id;
				$this->WikiListitem->delete();
				$id = $id+1;
				$this->redirect(array('action' => 'newhistory', $id));
			} else {
				$this->Session->setFlash(__('The wiki listitem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WikiListitem.' . $this->WikiListitem->primaryKey => $id));
			$this->set('wikiListitem', $this->WikiListitem->find('first', $options));
		}
	}	
}
