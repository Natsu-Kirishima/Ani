<?php
	class StudentModel extends Model{
		
		function __construct(){
			parent::__construct();
		}

		public function showAllStudents() {
			$query = $this->db->query("SELECT * FROM student");
			$date = $query->fetchAll();
			return $date;
		}

		public function getStdInfo($id) {
			$studentQuery = $this->db->prepare("SELECT * FROM `student` WHERE id = :id");
			$studentQuery->execute([':id' => $id]);
			return $studentQuery->fetch();
		}

		
	}
?>