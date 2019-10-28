<form action="index.php?controller=student&action=edit&param=<?=$st['id']?>" method="post">
	<p>name
		<input type="text" name="fname" value="<?=$st['fname']?>"><br>
	</p>
	<p>last name
		<input type="text" name="lname" value="<?=$st['lname']?>"><br>
	</p>
	<p>age
		<input type="age" name="age" value="<?=$st['age']?>"><br>
	</p>
	<p>email
		<input type="email" name="email" value="<?=$st['email']?>"><br>
	</p>
	<p>gender
		<select name="gender">
			<option value="male" <?php if($st['gender'] == 'male'):?>selected<?php endif;?>>male</option>
			<option value="female" <?php if($st['gender'] == 'female'):?>selected<?php endif;?>>female</option>
		</select><br>
	</p>
	<p>teacher
		<select name="teacher_id">
			<?php foreach ($teachers as $teacher) {?>
				<option value="<?=$teacher['id']?>" <?php if($st['teacher_id'] == $teacher['id']):?>selected<?php endif;?>><?=$teacher['fullname']?></option>
			<?php };?>
		</select>
	</p>
	<button type="submit" name="editstudent">Edit</button>
</form>					