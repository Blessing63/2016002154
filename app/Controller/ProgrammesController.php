<?php
App::uses('AppController', 'Controller');
/**
 * Programmes Controller
 *
 * @property Programme $Programme
 */
class ProgrammesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Programme->recursive = 0;
		$this->set('programmes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Programme->id = $id;
		if (!$this->Programme->exists()) {
			throw new NotFoundException(__('Invalid programme'));
		}
		$this->set('programme', $this->Programme->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Programme->create();
			if ($this->Programme->save($this->request->data)) {
				$this->Session->setFlash('The programme has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The programme could not be saved. Please, try again.'));
			}
		}
		$departments = $this->Programme->Department->find('list');
		$this->set(compact('departments'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Programme->id = $id;
		if (!$this->Programme->exists()) {
			throw new NotFoundException(__('Invalid programme'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Programme->save($this->request->data)) {
				$this->Session->setFlash('The programme has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The programme could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Programme->read(null, $id);
		}
		$departments = $this->Programme->Department->find('list');
		$this->set(compact('departments'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Programme->id = $id;
		if (!$this->Programme->exists()) {
			throw new NotFoundException(__('Invalid programme'));
		}
		if ($this->Programme->delete()) {
			$this->Session->setFlash(__('Programme deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Programme was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
