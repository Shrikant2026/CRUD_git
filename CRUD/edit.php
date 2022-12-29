<?php
	include_once('show.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Updation Page</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style type="text/css">
		*{
			box-sizing: border-box;

		}
		body{
			margin: 0px auto;
			max-width: 1320px;
			background-color: aliceblue;
			padding-top: 100px;
			background-image: linear-gradient(to right, #076185 , #fff);
		}
		header {
			text-align: center;
			height: 100px;
			width: 1320px;
		}
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container .BOX {
			display: flex;
			justify-content: center;;
			align-items: center;
		}
		div.left_box{
			width: 200px;
			height: 60px;
		}
		div.right_box{
			width: 600px;
		
		}
		.enter {
			height: 30px;
			width: 300px;
		}

	</style>
<header>
	<h1>Update record</h1>
</header>
<body>

	<div class="container">
		<form action="update.php?id=<?php echo $results['id'] ?>" method="POST">
			<div class="BOX">
				<div class="left_box">
					<label for="fname">First Name</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="fname" value="<?php echo $results['first_name'] ?>" required>
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="lname">Last Name</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="lname" value = "<?php echo $results['last_name'] ?>" required>
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="age">Age</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="age" value = "<?php echo $results['age'] ?>" >
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="gender">Gender</label>
				</div>
				<div class="right_box">
					  <input type="radio" id="male" name="gender" value="1" <?php echo ($genderValue == '1') ? 'checked' : ''; ?> >
					  <label for="male">Male</label>

					  <input type="radio" id="female" name="gender" value="2" <?php echo ($genderValue == '2') ? 'checked' : ''; ?> >
					  <label for="female">Female</label>

					  <input type="radio" id="others" name="gender" value="3" <?php echo ($genderValue == '3') ? 'checked' : ''; ?> >
					  <label for="others">Others</label>
				</div>		
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="hobbies">Hobbies</label>
				</div>
				<div class="right_box" id="right_box_checkspace">
					<input type="checkbox" name="hobbies[]" id="football" class ="hobbies" value="football"    <?= (in_array('football',$hobbiesArray) ? 'checked="checked"' : '')?> > 
					<label for="football">Football</label>
					<input type="checkbox" name="hobbies[]" id="badminton" class ="hobbies" value="badminton" <?= (in_array('badminton',$hobbiesArray) ? 'checked="checked"' : '')?> >
					<label for="badminton">Badminton </label> 
					<input type="checkbox" name="hobbies[]" id="cricket" class ="hobbies" value="cricket"      <?= (in_array('cricket',$hobbiesArray) ? 'checked="checked"' : '')?> > 
					<label for="cricket">Cricket</label>
					<input type="checkbox" name="hobbies[]" id="swimming" class ="hobbies" value="swimming"    <?= (in_array('swimming',$hobbiesArray) ? 'checked="checked"' : '')?> >
					<label for="swimming">Swimming</label> 
	
				</div>
				
			
				<script src="show.js"></script>
			</div>

			<div class="BOX">	
				<div class="left_box">
					<label for="contact_number">Contact</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="contact_number" value = "<?php echo $results['contact_number'] ?>" required>
				</div>
			</div>	
			<div class="BOX">
				<div class="left_box">
					<label for="address">Address</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="address" value = "<?php echo $results['address'] ?>" required>
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="email">Email</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="email" value = "<?php echo $results['email'] ?>" required>
				</div>
			</div>
			<div class="BOX">
				<input type="submit" name="update" value="UPDATE">	

			</div>
		</form>
	</div>
</body>
</html>



				
