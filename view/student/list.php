<table border="1">
	<thead>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Email</th>
		<th>Status</th>
		<th>Gender</th>
		<th>Teacher</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php foreach($studentList as $student){?>
		<tr>
			<td><?=$student['id']?></td>
			<td><?=$student['fname']?></td>
			<td><?=$student['lname']?></td>
			<td><?=$student['age']?></td>
			<td><?=$student['email']?></td>
			<td><?=$student['status']?></td>
			<td><?=$student['gender']?></td>
			<td><?=$student['teacher_id']?></td>
			<td>
				<a href="index.php?controller=student&action=edit&param=<?=$student['id']?>">Edit</a><br>
				<a href="index.php?controller=student&action=view&param=<?=$student['id']?>">View</a><br>
				<a href="index.php?controller=student&action=delete&param=<?=$student['id']?>">Delete</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>