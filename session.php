<?php
// Start the session
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
 $session_id=$_SESSION['id'];
$sql = "SELECT * FROM users WHERE user_id = '$session_id'";
$stmt = $conn->query($sql);

$row = mysqli_fetch_array($stmt);

$session_role = $row['role_id'];
$session_user = $row['username'];
$session_dept = $row['dept_id'];
$session_station = $row['station_id'];
?>
