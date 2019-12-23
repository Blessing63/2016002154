<?php
App::uses('AppController', 'Controller');
/**
 * SuspendedStudents Controller
 *
 * @property SuspendedStudent $SuspendedStudent
 */
class SuspendedStudentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SuspendedStudent->recursive = 0;
		$this->set('suspendedStudents', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SuspendedStudent->id = $id;
		if (!$this->SuspendedStudent->exists()) {
			throw new NotFoundException(__('Invalid suspended student'));
		}
		$this->set('suspendedStudent', $this->SuspendedStudent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SuspendedStudent->create();
			if ($this->SuspendedStudent->save($this->request->data)) {
				$this->loadModel('StudentDetail');
				//update book to returned
        $this->StudentDetail->updateAll(
				array('StudentDetail.suspended'=>"'Yes'"),
				array('StudentDetail.id'=>$this->request->data['SuspendedStudent']['student_detail_id'])
				);
				$this->Session->setFlash('The suspended student has been suspended successfully','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suspended student could not be saved. Please, try again.'));
			}
		}
		$studentDetails = $this->SuspendedStudent->StudentDetail->find('list',array('fields'=>array('id','reg_number')));
		$suspensionReasons = $this->SuspendedStudent->SuspensionReason->find('list',array('fields'=>array('id','reason')));
		$this->set(compact('studentDetails', 'suspensionReasons'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SuspendedStudent->id = $id;
		if (!$this->SuspendedStudent->exists()) {
			throw new NotFoundException(__('Invalid suspended student'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SuspendedStudent->save($this->request->data)) {
								$this->loadModel('StudentDetail');
				//update book to returned
				//un suspend student if not active
				if($this->request->data['SuspendedStudent']['active']=="No"){
				//update book to returned
        $this->StudentDetail->updateAll(
				array('StudentDetail.suspended'=>"'No'"),
				array('StudentDetail.id'=>$this->request->data['SuspendedStudent']['student_detail_id'])
				);	
				}
				$this->Session->setFlash('The student suspension updated successfully','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suspended student could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SuspendedStudent->read(null, $id);
		}
		$studentDetails = $this->SuspendedStudent->StudentDetail->find('list',array('fields'=>array('id','reg_number')));
		$suspensionReasons = $this->SuspendedStudent->SuspensionReason->find('list',array('fields'=>array('id','reason')));
		$this->set(compact('studentDetails', 'suspensionReasons'));
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
		$this->SuspendedStudent->id = $id;
		if (!$this->SuspendedStudent->exists()) {
			throw new NotFoundException(__('Invalid suspended student'));
		}
		if ($this->SuspendedStudent->delete()) {
			$this->Session->setFlash(__('Suspended student deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Suspended student was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
