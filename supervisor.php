<?php
include('db.php');
include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Query</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
	<!-- <div class="content-wrapper"> -->
	<div class="container">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">

			<li class="breadcrumb-item active">SEARCH INTERN DETAILS BY</li>
		</ol>
		<!-- Icon Cards-->
		<div class="container">
			<?php
			include('navbar.php');
			?>
			<div class="row">
				<div class="col-md-12 col-md-offset-3">
					<div class="card mb-12">
						<div class="card-header">
							<i class="fa fa-table"></i> Students Register
						</div>
						<div class="card-body">
							<form method="post" action="attendance_query.php">
								<div class="row ">
									<div class="col-lg-10">
										<table class="table">
											<tr>
												<th>No.</th>
												<th>Firstname</th>
												<th>Othername</th>
												<th>Station</th>
												<th>Department</th>
												<th>Present</th>
												<th>Absent</th>
											</tr>

											<?php
											$sql = "SELECT users.user_id,users.firstname,users.othernames,department.dept_name,station.station_name,roles.role_id FROM users 
											LEFT JOIN department ON users.dept_id = department.dept_id LEFT JOIN station ON station.station_id = users.station_id 
											LEFT JOIN roles ON roles.role_id = users.role_id WHERE users.role_id = 2 AND users.dept_id='$session_dept' AND users.station_id='$session_station'";
											$result = $conn->query($sql);
											$cnt = 1;
											$num = mysqli_num_rows($result);
											while ($row = $result->fetch_assoc()) {
												$id = $row["user_id"];
												$sqlExist = "SELECT * FROM `attendance` WHERE user_id='$id' AND date=CURDATE()";
												$resultExist = $conn->query($sqlExist);

												 
												$erow = $resultExist->fetch_assoc();
												$sts = $erow["status"];
												?>

												<tr>
													<td><?php echo $cnt; ?></td>
													<td><?php echo $row["firstname"]; ?><input type="text" style="display:none" name="user<?php echo $cnt; ?>" value="<?php echo $row["user_id"]; ?>"></td>
													<td><?php echo $row["othernames"]; ?></td>
													<td><?php echo $row["station_name"]; ?></td>
													<td><?php echo $row["dept_name"]; ?></td>
													<td><input type="radio" name="attendance<?php echo $cnt; ?>"  value="present"></td>
													<td><input type="radio" name="attendance<?php echo $cnt; ?>" value="absent"> </a></td>

													<?php $cnt++;
												} ?>
										</table><br>
										<input type="text" style="display:none" name="records" value="<?php echo $num; ?>">
										<input type="Submit" class="btn btn-primary" name="Save" value="Save">
										<input type="button" class="btn btn-danger" value="Cancel" a href="supervisor.php"></a></br>
									</div>
								</div>
							</form>
						</div>
</body>

</html>