<?php

	include('conn.php');
	$id= $_GET['id'];
	//Query for deletion
	$sql = "DELETE FROM emp_record WHERE id = $id";



	// Prepare query for execution
	$query = $myConn->prepare($sql);
	
	// bind the parameters
	$query-> bindParam(':id',$id, PDO::PARAM_INT);
	// Query Execution
	$query -> execute();
	// Message after updation
	echo "Record Updated successfully";
	// Code for redirection
	echo "<script>window.location.href='displayData.php'</script>";



?>