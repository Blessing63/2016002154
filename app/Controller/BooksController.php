<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 */
 App::import('Vendor', '/Classes/PHPExcel/IOFactory'); //import statement for Excel editing classes
class BooksController extends AppController {

//book catalogue
public function book_report() {
	//user data
			$userdata = $this->Auth->user();
			$system_group_id=$userdata['system_group_id'];
	//if book is searched
	if ($this->request->is('post') and !empty($this->request->data['Book']['department_id'])) {
		
	//search by Book id

		$dept_id = $this->request->data['Book']['department_id'];
		$options = array('conditions'=>array('Book.department_id'=>$dept_id));
		$this->paginate = $options;
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
	
		
	}
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
		$departments = $this->Book->Department->find('list');
		$this->set(compact('system_group_id','departments'));
	}

//Return Book
		public function return_book($id = null) {
			if ($this->request->is('post')) {
 //user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$user = $current_user['username'];
 $this->loadModel('StudentBorrowing');
 $today=date('d-m-Y');
 //compare the two dates
 $date_to1  = $this->StudentBorrowing->find('first',array('conditions'=>array('book_id'=>$id),'fields'=>array('date_to')));
 $date_to= $date_to1['StudentBorrowing']['date_to'];
  $firstDate = strtotime($date_to);
	$secondDate = strtotime($today);
	
//update book to returned
$this->StudentBorrowing->updateAll(
				array('StudentBorrowing.created_by'=>"'$user'",'StudentBorrowing.date_returned'=>"'$today'"),
				array('StudentBorrowing.book_id'=>$id)
				);
				//update if ovedue
if($firstDate < $secondDate){
		$this->StudentBorrowing->updateAll(
				array('StudentBorrowing.book_overdue'=>1),
				array('StudentBorrowing.book_id'=>$id)
				);
	}				
//update Book now as checked out
			$this->Book->updateAll(
				array('Book.status_id'=>1),
				array('Book.id'=>$id));				
		//success message
				$this->Session->setFlash('Book has been returned successfully','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index2'));			
			}
	}
	
//Checkout Book
	public function checkout($id = null) {
		if ($this->request->is('post') and !empty($this->request->data['Book']['reg_number'])) {
			$this->loadModel('StudentDetail');
		//search by Book id
			$book_id = $this->request->data['Book']['book_id'];
			$reg_number = $this->request->data['Book']['reg_number'];
		$stud_id  = $this->StudentDetail->find('first',array('conditions'=>array('reg_number'=>$reg_number),'fields'=>array('id')));
		if(empty($stud_id)){
			$this->Session->setFlash(__('Student Reg Number does not exist. Please, try again.'));
				$this->redirect(array('action' => 'checkout',$book_id));
		}
		$student_id = $stud_id['StudentDetail']['id'];
		//check if student is suspended
			$stud_susp  = $this->StudentDetail->find('first',array('conditions'=>array('StudentDetail.id'=>$student_id,'suspended'=>"Yes"),'fields'=>array('id')));
			if(!empty($stud_susp)){
			$this->Session->setFlash(__('Student is still under suspension and cannot borrow books. Please, try again.'));
				$this->redirect(array('action' => 'index2'));
		}
				//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		//add two weeks to current date
		$return_date=Date('d-m-Y', strtotime("+14 days"));
		//debug($return_date);die();
		//insert into student borrowings
		$this->loadModel('StudentBorrowing');
								$this->StudentBorrowing->create();
								$this->StudentBorrowing->SaveAll(array(
									'student_detail_id' =>$student_id,
									'book_id' =>$book_id,
									'date_from' =>date('d-m-Y'),
									'date_to' =>$return_date,
									'created_by'=>$current_user['username'],
									));
								//debug($items);die();	
		//update Book now as checked out
			$this->Book->updateAll(
				array('Book.status_id'=>2),
				array('Book.id'=>$book_id));
		$this->Session->setFlash('Book has been Checked Out successfullly','default',array('class'=>'success'));
		$this->redirect(array('action' => 'index2'));
		}
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->set('book', $this->Book->read(null, $id));
	}




//book catalogue
public function index2() {
	//user data
			$userdata = $this->Auth->user();
			$system_group_id=$userdata['system_group_id'];
	//if book is searched
	if ($this->request->is('post') and !empty($this->request->data['Book']['search_by'])) {
		//search by Book id
		if($this->request->data['Book']['search_by']=="id"){
			$book_id = $this->request->data['Book']['search'];
			$options = array('conditions'=>array('Book.id'=>$book_id));
			$this->paginate = $options;
			$this->Book->recursive = 0;
			//debug($books);die();
		$this->set('books', $this->paginate());
		$this->set(compact('system_group_id'));
	}
	//search by Book id
		elseif($this->request->data['Book']['search_by']=="name"){
		$name = $this->request->data['Book']['search'];
		$options = array('conditions'=>array('Book.name LIKE'=>$name."%"));
		$this->paginate = $options;
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
		}
		
	}
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
		$this->set(compact('system_group_id'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->set('book', $this->Book->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash('The book has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		}
		$publishers = $this->Book->Publisher->find('list');
		$departments = $this->Book->Department->find('list');
		$stackRooms = $this->Book->StackRoom->find('list');
		$statuses = $this->Book->Status->find('list',array('fields'=>array('id','status')));
		$this->set(compact('publishers', 'departments', 'stackRooms', 'statuses'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash('The book has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Book->read(null, $id);
		}
		$publishers = $this->Book->Publisher->find('list');
		$departments = $this->Book->Department->find('list');
		$stackRooms = $this->Book->StackRoom->find('list');
		$statuses = $this->Book->Status->find('list',array('fields'=>array('id','status')));
		$this->set(compact('publishers', 'departments', 'stackRooms', 'statuses'));
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
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('Book deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Book was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
