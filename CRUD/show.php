<?php
	require('conn.php');
$getId = $_GET['id'];
	$sql =  "SELECT id,first_name,last_name,age,hobbies,gender,contact_number,address,email
			FROM `emp_record`
			WHERE id = :id" ;
	
	$query = $myConn->prepare($sql);
	
	$query->bindParam(':id',$getId,PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetch(PDO::FETCH_ASSOC);
	$genderValue = $results['gender'];
	$hobbiesValue = $results['hobbies'];
    $hobbiesArray = explode(",",$hobbiesValue);
?>