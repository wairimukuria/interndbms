<?php

require_once "db.php";
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$sql = "SELECT user_id, role_id,username FROM users WHERE username = '$username' AND password='$password'";
$stmt = $conn->query($sql);
$num = mysqli_num_rows($stmt);
$row = mysqli_fetch_array($stmt);

session_start();
if ($num == 1) {
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $row['user_id'];
    
?>
    <script>
        alert("Welcome");
        window.location = 'home.php';
    </script>

<?php

} else {
?>

<script >
    alert("Username does not exist!");
    window . location = 'index.php';
</script >

<?php
}
?>