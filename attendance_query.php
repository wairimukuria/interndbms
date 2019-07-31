<?php
include('db.php');
include('session.php');
?>
<?php

?>

<?php
if (isset($_POST['Save'])) {
    echo $records = $_POST["records"] . "<br>";
    $count = 1;
    while ($count <= $records) {
        if (isset($_POST["attendance1"])) {
            echo $_POST["attendance" . $count] .  $_POST["user" . $count] . "<br>";
        } else {
            echo 'not checked' . "<br>";
        }
        $user_id = mysqli_real_escape_string($conn, $_POST["user" . $count]);
        $status = mysqli_real_escape_string($conn, $_POST["attendance" . $count]);

        $sql = "INSERT INTO attendance (user_id,supervisor_id,date,status)
                    VALUES('$user_id','$session_id',CURDATE(),'$status' )";

        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count++;
    }
    
   
    ?>
    <script>
         alert("Attendance updated");
         window.location = 'intern_list.php';
    </script>

<?php
} else echo (mysqli_error($conn));
?>