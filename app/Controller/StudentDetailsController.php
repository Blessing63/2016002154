<?php
App::uses('AppController', 'Controller');
/**
 * StudentDetails Controller
 *
 * @property StudentDetail $StudentDetail
 */
class StudentDetailsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$userdata=$this->Auth->user();
			$system_group_id=$userdata['system_group_id'];
			if(($system_group_id ==3)){
				$options = array('conditions'=>array('StudentDetail.reg_number'=>$userdata['username']),'order'=>array('StudentDetail.id DESC'));
				$this->paginate = $options;
			}
		$this->StudentDetail->recursive = 0;
		$this->set('studentDetails', $this->paginate());
		$this->set(compact('system_group_id'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StudentDetail->id = $id;
		if (!$this->StudentDetail->exists()) {
			throw new NotFoundException(__('Invalid student detail'));
		}
		$this->set('studentDetail', $this->StudentDetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentDetail->create();
			//find if the Merchant email already exist
			$email  = $this->StudentDetail->find('list',array('conditions'=>array('reg_number'=>$this->request->data['StudentDetail']['reg_number']),'fields'=>array('id')));
			if(!empty($email)){
			$this->Session->setFlash(__('Student registration already in use.Please,try again.'));
			$this->redirect(array('action' => 'add'));			
			}
			if ($this->StudentDetail->save($this->request->data)) {
				//=====automatically create user from the Student data after checking if username doesn't exist====//
								$this->loadModel('User');
								$this->User->create();
								$this->User->set(array(
									'firstname' =>$this->request->data['StudentDetail']['firstname'],
									'lastname' =>$this->request->data['StudentDetail']['lastname'],
									'username' =>$this->request->data['StudentDetail']['reg_number'],
									'email_address' =>$this->request->data['StudentDetail']['email_address'],
									'password'=>"password",
									'system_group_id'=>3,
									'account_status'=>1,
									'created_by'=>$current_user['username'],
									));
									$this->User->save();
				$this->Session->setFlash('The student detail has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student detail could not be saved. Please, try again.'));
			}
		}
		$programmes = $this->StudentDetail->Programme->find('list');
		$this->set(compact('programmes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StudentDetail->id = $id;
		if (!$this->StudentDetail->exists()) {
			throw new NotFoundException(__('Invalid student detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StudentDetail->save($this->request->data)) {
				$this->Session->setFlash('The student detail has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student detail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StudentDetail->read(null, $id);
		}
		$programmes = $this->StudentDetail->Programme->find('list');
		$this->set(compact('programmes'));
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
		$this->StudentDetail->id = $id;
		if (!$this->StudentDetail->exists()) {
			throw new NotFoundException(__('Invalid student detail'));
		}
		if ($this->StudentDetail->delete()) {
			$this->Session->setFlash(__('Student detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Student detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
