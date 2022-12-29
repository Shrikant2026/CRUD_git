<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	echo "good to go ";die();
	include('conn.php');

 	// print_r(strlen($contact));die();
 	$id = $_GET['id'];

$fnameErr = $lnameErr = $addressErr = $emailErr = $contactErr = $ageErr = $hobbieErr = $genErr = "";

	if (isset($_POST['update'])){
 	$firstName   = trim($_POST['fname']);
 	$lastName    = trim($_POST['lname']);
 	$address     = trim($_POST['address']);
 	$email       = trim($_POST['email']);
 	$contact     = trim($_POST['contact_number']);

 	$age         = trim($_POST['age']);
 	$gender      = $_POST['gender'];
 	$hobbies     = $_POST['hobbies'];
 	$hobbiesList = implode(",", $hobbies);

 	if(empty($firstName))
 	{
 		$fnameErr = "<span class='error'>Please enter your first name.</span>";
 	}
 	else if (!ctype_alpha($firstName)) {
 		$fnameErr = "<span class='error'>Please use alphabets only.</span>";
 	}
 	else if(empty($lastName))
 	{
 		$lnameErr = "<span class='error'>Please enter your last name</span>";
 	}
 	else if (!ctype_alpha($lastName)) {
 		$lnameErr = "<span class='error'>Please use alphabets only.</span>";
 	}
 	else if(empty($age)){
 		$ageErr = "<span class='error'>Please enter your Age</span>";
 	}
 	 else if(!is_numeric($age))
	 {
	  $ageErr = "<span class='error'>Numbers Only!</span>";
	 }
 	else if(!isset($gender) && $gender == ''){
 		$genErr = "<span class='error'>Please enter your Gender</span>";
 	}
 	else if(!isset($hobbiesList))
 	{
 		$hobbieErr = "<span class='error'>Please choose atleast one hobbie</span>";
 	}
 	else if(empty($email))
 	{
 		$emailErr = "<span class='error'>Please enter your Email</span>";
 	}
	else if(!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email))
	{
		$emailErr = "<span class='error'>not valid email !</span>";
	}
 	else if(empty($contact))
 	{
 		$contactErr = "<span class='error'>please enter Contact Number</span>";
 	}
	 else if(!is_numeric($contact))
	 {
	  $contactErr = "<span class='error'>Numbers Only!</span>";
	 }
	 else if(strlen($contact)!=10)
	 {
	  $contactErr = "<span class='error'>Please enter 10 digit number !</span>";
	 }
		else{
				$sql = 	"UPDATE `emp_record` 
						SET first_name	  = :fname, 
							last_name 	  = :lname,
							age		 	  = :age,
							gender        = :gender,
							contact_number= :contact_number,
							address   	  = :address, 
							email		  = :email 
						WHERE id 	= $id ";

					$result = $myConn->prepare($sql);
    				$result_run = $result->execute(array(':fname' => $firstName, ':lname' =>  $lastName, ':age' => $age, ':gender' => $gender, ':contact_number' =>  $contact, ':address' => $address, ':email' => $email));

    				echo "<br>";
    				echo "Record updated successfully";
		}
?>