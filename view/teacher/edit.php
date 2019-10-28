<form action="index.php?controller=teacher&action=edit&param=<?=$tch['id']?>" method="post">
	<p>name
		<input type="text" name="fname" value="<?=$tch['fname']?>"><br>
	</p>
	<p>last name
		<input type="text" name="lname" value="<?=$tch['lname']?>"><br>
	</p>
	<p>age
		<input type="text" name="age" value="<?=$tch['age']?>"><br>
	</p>
	<p>gender
		<select name=gender>
			<option value="male" <?php if($tch['gender'] == 'male'):?>selected<?php endif;?>>male</option>
			<option value="female" <?php if($tch['gender'] == 'female'):?>selected<?php endif;?>>female</option>
		</select><br>
	</p>
	<p>profession
		<input type="text" name="profession" value="<?=$tch['profession']?>"><br>
	</p>
	<p>email
		<input type="email" name="email" value="<?=$tch['email']?>"><br>
	</p>
	<p>salary
		<input type="text" name="salary" value="<?=$tch['salary']?>"><br>
	</p>
	<p>phone
		<input type="text" name="phone" value="<?=$tch['phone']?>"><br>
	</p>
	<input type="submit" value="Edit">
</form>