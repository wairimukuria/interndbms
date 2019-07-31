<?php
include('db.php');

if( isset($_POST['Submit'])){

	echo $fn = mysqli_real_escape_string($conn, $_POST['firstname']);
	echo $o= mysqli_real_escape_string($conn, $_POST['othernames']);
	echo $usn= mysqli_real_escape_string($conn, $_POST['username']);
	echo $pwd= mysqli_real_escape_string($conn, $_POST['password']);
	echo $st= mysqli_real_escape_string($conn, $_POST['station']);
	echo $dpt= mysqli_real_escape_string($conn, $_POST['department']);
	echo $role= mysqli_real_escape_string($conn, $_POST['role_name']);
	$sql="INSERT INTO users(firstname,othernames,username,password,station_id,dept_id,role_id)
                    VALUES('$fn','$o','$usn', '$pwd', '$st','$dpt', '$role' )";

mysqli_query($conn, $sql) OR DIE (mysqli_error($conn));
?>
<script>
	alert("user detail succefully added");
window.location = 'system_users.php';
	</script>

	<?php
}
else echo(mysqli_error($conn));
?>
           