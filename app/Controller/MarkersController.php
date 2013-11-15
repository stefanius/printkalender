<?php
App::uses('AppController', 'Controller');
/**
 * Markers Controller
 *
 * @property Marker $Marker
 */
class MarkersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Marker->recursive = 0;
		$this->set('markers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Marker->exists($id)) {
			throw new NotFoundException(__('Invalid marker'));
		}
		$options = array('conditions' => array('Marker.' . $this->Marker->primaryKey => $id));
		$this->set('marker', $this->Marker->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Marker->create();
			if ($this->Marker->save($this->request->data)) {
				$this->Session->setFlash(__('The marker has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marker could not be saved. Please, try again.'));
			}
		}
		$histories = $this->Marker->History->find('list');
		$this->set(compact('histories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Marker->exists($id)) {
			throw new NotFoundException(__('Invalid marker'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Marker->save($this->request->data)) {
				$this->Session->setFlash(__('The marker has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Marker.' . $this->Marker->primaryKey => $id));
			$this->request->data = $this->Marker->find('first', $options);
		}
		$histories = $this->Marker->History->find('list');
		$this->set(compact('histories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Marker->id = $id;
		if (!$this->Marker->exists()) {
			throw new NotFoundException(__('Invalid marker'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Marker->delete()) {
			$this->Session->setFlash(__('Marker deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Marker was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
