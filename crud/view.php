<?php
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
	<title>View Page</title>
	<!-- to make it looking good im using bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://localhost:8012/login_user_project/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h2>users</h2>
		<table class="table" border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($result->num_rows > 0) {
					//output data of each row
					while ($row = $result->fetch_assoc()) {
				?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
							&nbsp;
							<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>

				<?php	}
				}
				?>

			</tbody>
		</table>
		<a href="create.php">Create</a>
	</div>

</body>

</html>