<?php
include('db.php');

if( isset($_POST['Save'])){
	echo $firstname = mysqli_real_escape_string($conn, $_POST['firstname']); 
    echo $othernames= mysqli_real_escape_string($conn, $_POST['othernames']);
    echo $station= mysqli_real_escape_string($conn, $_POST['station']);
    echo $department= mysqli_real_escape_string($conn, $_POST['department']);
    echo $monday = mysqli_real_escape_string($conn, $_POST['monday']);
    echo $tuesday = mysqli_real_escape_string($conn, $_POST['tuesday']);
    echo $wednesday = mysqli_real_escape_string($conn, $_POST['wednesday']);
    echo $thursday = mysqli_real_escape_string($conn, $_POST['thursday']);
    echo $friday = mysqli_real_escape_string($conn, $_POST['friday']);
    echo $challenges = mysqli_real_escape_string($conn, $_POST['challenges']);
    echo $summary = mysqli_real_escape_string($conn, $_POST['summary']);
	$sql="INSERT INTO internreport(firstname,othernames,station,department,monday,tuesday,wednesday,thursday,friday,challenges,summary)
                    VALUES('$firstname','$othernames','$station','$department','$monday','$tuesday','$wednesday','$thursday','$friday','$challenges','$summary')";

mysqli_query($conn, $sql) OR DIE (mysqli_error($conn));
?>
<script>
	alert("Report succefully submitted");
window.location = 'intern_report.php';
	</script>

	<?php
}
else echo(mysqli_error($conn));
?>
           