<?php
	
	class TeacherController extends Controller {
		
		function __construct() {
			parent::__construct();
			$this->loadModel('teacher');
		}

		public function index() {
			$this->view->render('teacher/index');
		}

		public function actionList() {
			$actionList = $this->teacher->showAllTeachers();
			$this->view->render('teacher/list', ['teacherList'=>$actionList]);
		}

		public function actionAdd(){
			$this->view->render('teacher/add');
		}

		public function actionEdit($id){
			if(isset($_POST['editteacher'])) {
				echo "<pre>"; print_r($_POST); die;
			}
			$actionEdit = $this->teacher->getTchInfo($id);
			$this->view->render('teacher/edit', ['tch'=>$actionEdit]);
		}
	}
?>