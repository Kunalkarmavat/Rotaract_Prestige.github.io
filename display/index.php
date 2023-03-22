

  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

	<!-- scss -->
	<link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

	  <?php
	@include "./connection.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$sql = "INSERT INTO users (name,dob,email,mobile) VALUES ('$name','$dob','$email','$mobile')";
		if ($conn->query($sql) === TRUE) {
			header("location: ./index.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
	
	
	?>



<div class="fluid-container">
	<form class="form-group container d-flex" action="index.php" method="post">

	
		<input class="form-control " type="text" name="name" id="name" placeholder="Name">
		<input class="form-control " type="date" name="dob" id="dob">
		<input class="form-control " type="email" name="email" id="email" placeholder="Email">
		<input class="form-control " type="text" name="mobile" id="mobile" placeholder="Mobile">
		<input class="form-control submit " type="submit" value="Submit">
		
	</form>	
	
	<table class="container glassEffect">

		<thead>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>dob</th>
				<th>email</th>
				<th>Password</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead>
		<tbody>
			<?php
			@include_once('connection.php');
			$sql = "SELECT * FROM users ORDER BY id ASC";
			$result = $conn->query($sql);
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			?>
			<?php foreach ($rows as $row): ?>
				<tr>
					<td><label>
							<?php echo $row['id'] ?>
						</label></td>
					<td><label>
							<?php echo $row['name']; ?>
						</label></td>
					<td><label><?php echo $row['dob']; ?></label></td>
					<td><label>
							<?php echo $row['email']; ?>
						</label></td>
					<td><label><?php echo $row['mobile']; ?></label></td>
					<td>
						<form action="delete_user.php" method="post">
							<input type="hidden" name="id" value="<?= $row['id'] ?>">
							<input border='0' type="submit" value="Delete">
						</form>
					</td>
					<td>
						<form action="update_user.php" method="get">
							<input type="hidden" name="id" value="<?= $row['id'] ?>">
							<input type="submit" value="Update">
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	

</div>

 <script>

	
 </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


