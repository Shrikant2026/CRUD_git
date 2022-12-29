<?php
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

    include('form.php');
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Registration</title>
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
			background-image: linear-gradient(to right, #076185 , #fff);
		
		}
		header {
			height: 200px;
			width: 1320px;
			padding: 50px; 
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
			font-size: 24px;
			font-weight: 80px;
			text-align: center;
			padding: 12px;
		}
		div.right_box{
			width: 600px;
			height: 60px;
			padding: 12px; 
		}
		.enter {
			height: 30px;
			width: 300px;
		}
		#right_box_checkspace {
			height: 85px;
		}
		.error {
			color: red;
		}
	</style>
</head>
<header>
	<div class="heading">
		<h1 style="text-align: center; font-weight: 60">Please enter your Details below</h1>
	</div>
</header>
<body>

	<div class="container">
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="new" value="1" />
			<div class="BOX">
				<div class="left_box">
					<label for="fname">First Name</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="fname" value="<?=(isset($firstName))?$firstName:""?>" >  
					<?php echo $fnameErr;?>
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="lname">Last Name</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="lname"  value="<?=(isset($lastName))?$lastName:""?>">
					<?php echo $lnameErr;?>
				</div>
			</div>
				<div class="BOX">
				<div class="left_box">
					<label for="age">Age</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="age" placeholder="" value="<?=(isset($age))?$age:""?>"><?php echo $ageErr;?>
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="gender">Gender</label>
				</div>
				<div class="right_box">
					  <input type="radio" id="male" name="gender" value="1">
					  <label for="male">Male</label>

					  <input type="radio" id="female" name="gender" value="2">
					  <label for="female">Female</label>

					  <input type="radio" id="others" name="gender" value="3">
					  <label for="others">Others</label><?php echo $genErr;?>
				</div>		
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="hobbies">Hobbies</label>
				</div>
				<div class="right_box" id="right_box_checkspace">
					<input type="checkbox" name="hobbies[]" id="football" class ="hobbies" value="football"> 
					<label for="football">Football</label>
					<input type="checkbox" name="hobbies[]" id="badminton" class ="hobbies" value="badminton">
					<label for="badminton">Badminton </label> 
					<input type="checkbox" name="hobbies[]" id="cricket" class ="hobbies" value="cricket"> 
					<label for="cricket">Cricket</label>
					<input type="checkbox" name="hobbies[]" id="swimming" class ="hobbies" value="swimming">
					<label for="swimming">Swimming</label> <?php echo $hobbieErr;?>
					<p id="valueList"></p>		
				</div>
				
			
				<script src="show.js"></script>
			</div>

			<div class="BOX">	
				<div class="left_box">
					<label for="contact_number">Contact</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="contact_number" value="<?=(isset($contact))?$contact:""?>">
					<?php echo $contactErr;?>
				</div>
			</div>	
			<!-- <div class="BOX">		
				<div class="left_box">
					<label for="date">Date</label>
				</div>
				<div class="right_box">
					<input type="date" name="date">
				</div>
			</div> -->
			<div class="BOX">
				<div class="left_box">
					<label for="address">Address</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="address" value="<?=(isset($address))?$address:""?>">
					<?php echo $addressErr;?>
				</div>
			</div>
			<div class="BOX">
				<div class="left_box">
					<label for="email">Email</label>
				</div>
				<div class="right_box">
					<input class="enter" type="text" name="email" placeholder="xyz@abc.com/in" value="<?=(isset($email))?$email:""?>">
					<?php echo $emailErr;?>
				</div>
			</div>
<!-- 			<div class="BOX">
				<div class="left_box">
					<label for="image">Upload Images</label>
				</div>
				<div class="right_box">
					<input type="file" name="files[]" accept="image/jpg,image/jpeg,image/png" multiple="true" style="font-size: 20px;">
				</div>
			</div> -->
			<div class="BOX">
				<input type="submit" name="submit">
			</div>
		</form>
	</div>


<!-- <script>
  var checkBox = document.getElementById("cricket");
  console.log(checkBox);
  document.getElementById("text").onclick = myFunction() {
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script> -->


</body>
</html>
