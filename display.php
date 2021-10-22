<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bootstrap Site</title>
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<?php include 'Header.php' ?>
		<h1 class="text-center bg-primary text-white">Show Database Data</h1>
		<table class="table table-bordered table-dark">
			<thead>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Messages</th>
				<th colspan="2">Operation</th>
			</thead>
			<tbody>
				<?php
				$con =mysqli_connect('localhost','root' );
				if ($con) {
				echo "<script> alert(connection successful)</script>";
				}
				else
				{
				echo"No connection";
				}
				mysqli_select_db($con ,'portfolio');
				$sql="SELECT * FROM userinfo";
				$query=mysqli_query($con,$sql);
				$nums=mysqli_num_rows($query);
				while($res= mysqli_fetch_array($query)){
				?>
				
				<tr>
					<td><?php echo $res['id']; ?></td>
					<td><?php echo $res['FirstName']; ?></td>
					<td><?php echo $res['LastName']; ?></td>
					<td><?php echo $res['Email']; ?></td>
					<td><?php echo $res['Mobile']; ?></td>
					<td><?php echo $res['Address']; ?></td>
					<td><?php echo $res['Message']; ?></td>
					<td><i class="fas fa-edit"></i></td>
					<td><i class="fas fa-trash"></i></td>

					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<?php include 'footer.php' ?>
	</body>
</html>