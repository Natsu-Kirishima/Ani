<table border="1">
	<thead>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Profession</th>
		<th>Email</th>
		<th>Salary</th>
		<th>Phone</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php foreach($teacherList as $teacher){?>
		<tr>
			<td><?=$teacher['id']?></td>
			<td><?=$teacher['fname']?></td>
			<td><?=$teacher['lname']?></td>
			<td><?=$teacher['age']?></td>
			<td><?=$teacher['gender']?></td>
			<td><?=$teacher['profession']?></td>
			<td><?=$teacher['email']?></td>
			<td><?=$teacher['salary']?></td>
			<td><?=$teacher['phone']?></td>
			<td>
				<a href="index.php?controller=teacher&action=edit&param=<?=$teacher['id']?>">Edit</a><br>
				<a href="index.php?controller=teacher&action=view&param=<?=$teacher['id']?>">View</a><br>
				<a href="index.php?controller=teacher&action=delete&param=<?=$teacher['id']?>">Delete</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>