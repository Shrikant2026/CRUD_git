
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Updation Page</title>
	<style type="text/css">
		body {
			background-image: linear-gradient(to right, #076185 , #fff);
		}
		.container {
			max-width: 1520px;
			margin: 0px auto;
		}
		table {
		    border-radius: 10px;
		    border-collapse: collapse;
		    background-color: floralwhite;
		    text-align: center;
		    border: 2px solid black;
		}
		th {
			height: 40px;
		    width: 240px;
		    font-weight: 700;
		    background-color: rgb(0,128,128);
		}
		td {
			height: 40px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<h1>Records</h1>
			<table  border="1">
				<thead>
					<tr>
						<th>S.no</th>
						<th>First name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Hobbies</th>
						<th>Contact</th>
						<th>Address</th>
						<th>Email</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>

				<tbody>
					<?php
					include_once('conn.php');
					$stmt = $myConn->prepare("SELECT id,first_name,last_name,age,gender,hobbies,contact_number,address,email
						FROM emp_record");
					$stmt->execute();
					$details = $stmt->fetchAll();
					foreach($details as $user)
					{
						?>
						<tr>
							<td><?php echo $user['id']; ?></td>
							<td><?php echo $user['first_name']; ?></td>
							<td><?php echo $user['last_name']; ?></td>
							<td><?php echo $user['age']; ?></td>

							<td>
								<?php if ($user['gender'] ==1) {
									echo "male";
								} 
								elseif ($user['gender'] == 2) {
									echo "female";
								}
								else {
									echo "others";
								}
								?>

							</td>
							<td> <?php echo $user['hobbies']; ?> </td>
							<td><?php echo $user['contact_number']; ?></td>
							<td><?php echo $user['address']; ?></td>
							<td><?php echo $user['email']; ?></td>
							<td><a href="edit.php?id=<?php echo $user['id']; ?>">EDIT</a></td>
							<td><a href="delete.php?id=<?php echo $user['id']; ?>">DELETE</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>

		</div>
	</div>
</body>

</html>
