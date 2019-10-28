<?php
	class TeacherModel extends Model{
		
		function __construct(){
			parent::__construct();
		}

		public function showAllTeachers() {
			$query = $this->db->query("SELECT * FROM teacher");
			$date = $query->fetchAll();
			return $date;
		}

		public function getTchInfo($id) {
			$teacherQuery = $this->db->prepare("SELECT * FROM `teacher` WHERE id = :id");
			$teacherQuery->execute([':id' => $id]);
			return $teacherQuery->fetch();
		}
	}
?>