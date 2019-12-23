<?php
App::uses('AppController', 'Controller');
/**
 * StudentBorrowings Controller
 *
 * @property StudentBorrowing $StudentBorrowing
 */
 App::import('Vendor', '/Classes/PHPExcel/IOFactory'); //import statement for Excel editing classes
class StudentBorrowingsController extends AppController {
//borrwing PDF
public function borrowing_excel() {
	$this->StudentBorrowing->recursive = 0;
		$this->set('studentBorrowings', $this->paginate());
			$this->render('borrowing_excel','export_xls');
}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->loadModel('StudentDetail');
		$userdata=$this->Auth->user();
			$system_group_id=$userdata['system_group_id'];
			//compare the two dates
 $stud_data  = $this->StudentDetail->find('first',array('conditions'=>array('reg_number'=>$userdata['username']),'fields'=>array('id')));
 $stud_id= $stud_data['StudentDetail']['id'];
			if(($system_group_id ==3)){
				$options = array('conditions'=>array('StudentBorrowing.student_detail_id'=>$stud_id),'order'=>array('StudentBorrowing.id DESC'));
				$this->paginate = $options;
			}
		$this->StudentBorrowing->recursive = 0;
		$this->set('studentBorrowings', $this->paginate());
		$this->set(compact('system_group_id'));
		
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StudentBorrowing->id = $id;
		if (!$this->StudentBorrowing->exists()) {
			throw new NotFoundException(__('Invalid student borrowing'));
		}
		$this->set('studentBorrowing', $this->StudentBorrowing->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentBorrowing->create();
			if ($this->StudentBorrowing->save($this->request->data)) {
				$this->Session->setFlash('The student borrowing has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student borrowing could not be saved. Please, try again.'));
			}
		}
		$studentDetails = $this->StudentBorrowing->StudentDetail->find('list');
		$books = $this->StudentBorrowing->Book->find('list');
		$this->set(compact('studentDetails', 'books'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StudentBorrowing->id = $id;
		if (!$this->StudentBorrowing->exists()) {
			throw new NotFoundException(__('Invalid student borrowing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StudentBorrowing->save($this->request->data)) {
				$this->Session->setFlash('The student borrowing has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student borrowing could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StudentBorrowing->read(null, $id);
		}
		$studentDetails = $this->StudentBorrowing->StudentDetail->find('list');
		$books = $this->StudentBorrowing->Book->find('list');
		$this->set(compact('studentDetails', 'books'));
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
		$this->StudentBorrowing->id = $id;
		if (!$this->StudentBorrowing->exists()) {
			throw new NotFoundException(__('Invalid student borrowing'));
		}
		if ($this->StudentBorrowing->delete()) {
			$this->Session->setFlash(__('Student borrowing deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Student borrowing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
