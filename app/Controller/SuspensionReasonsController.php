<?php
App::uses('AppController', 'Controller');
/**
 * SuspensionReasons Controller
 *
 * @property SuspensionReason $SuspensionReason
 */
class SuspensionReasonsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SuspensionReason->recursive = 0;
		$this->set('suspensionReasons', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SuspensionReason->id = $id;
		if (!$this->SuspensionReason->exists()) {
			throw new NotFoundException(__('Invalid suspension reason'));
		}
		$this->set('suspensionReason', $this->SuspensionReason->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SuspensionReason->create();
			if ($this->SuspensionReason->save($this->request->data)) {
				$this->Session->setFlash('The suspension reason has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suspension reason could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SuspensionReason->id = $id;
		if (!$this->SuspensionReason->exists()) {
			throw new NotFoundException(__('Invalid suspension reason'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SuspensionReason->save($this->request->data)) {
				$this->Session->setFlash('The suspension reason has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suspension reason could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SuspensionReason->read(null, $id);
		}
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
		$this->SuspensionReason->id = $id;
		if (!$this->SuspensionReason->exists()) {
			throw new NotFoundException(__('Invalid suspension reason'));
		}
		if ($this->SuspensionReason->delete()) {
			$this->Session->setFlash(__('Suspension reason deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Suspension reason was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
