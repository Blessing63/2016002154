<?php
App::uses('AppController', 'Controller');
/**
 * StackRooms Controller
 *
 * @property StackRoom $StackRoom
 */
class StackRoomsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StackRoom->recursive = 0;
		$this->set('stackRooms', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StackRoom->id = $id;
		if (!$this->StackRoom->exists()) {
			throw new NotFoundException(__('Invalid stack room'));
		}
		$this->set('stackRoom', $this->StackRoom->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StackRoom->create();
			if ($this->StackRoom->save($this->request->data)) {
				$this->Session->setFlash('The stack room has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stack room could not be saved. Please, try again.'));
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
		$this->StackRoom->id = $id;
		if (!$this->StackRoom->exists()) {
			throw new NotFoundException(__('Invalid stack room'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StackRoom->save($this->request->data)) {
				$this->Session->setFlash('The stack room has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stack room could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StackRoom->read(null, $id);
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
		$this->StackRoom->id = $id;
		if (!$this->StackRoom->exists()) {
			throw new NotFoundException(__('Invalid stack room'));
		}
		if ($this->StackRoom->delete()) {
			$this->Session->setFlash(__('Stack room deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Stack room was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
