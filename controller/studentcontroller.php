<?php
	
	class StudentController extends Controller {
		
		function __construct() {
			parent::__construct();
			$this->loadModel('student');
		}

		public function index() {
			$this->view->render('student/index');
		}

		public function actionList() {
			$actionList = $this->student->showAllStudents();
			$this->view->render('student/list', ['studentList'=>$actionList]);
		}

		public function actionAdd(){
			$this->view->render('student/add');
		}

		public function actionEdit($id){
			if(isset($_POST['editstudent'])) {
				echo "<pre>"; print_r($_POST); die;
				
			}
			$actionEdit = $this->student->getStdInfo($id);
			$this->view->render('student/edit', ['st'=>$actionEdit]);
		}
	}
?>