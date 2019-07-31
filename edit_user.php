<?php
include('db.php');
include('session.php');

echo $user_id = ($_GET['user_id']);
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
mysql_close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Users</title>
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

        <li class="breadcrumb-item active">EDIT USER DETAILS</li>
    </ol>
    <!-- Icon Cards-->
    <div class="container">
        <?php
        include('navbar.php');
        ?>
        <div class="row">
            <div class="col-sm-12 col-sm-offset-3">
                <div class="card mb-12">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Edit
                    </div>
                    <div class="card-body">
                        <form method="post" action="EditStudentData.php" />

                        <table>

                            <tr>
                                <td>User Id:</td>
                                <td><input type="text" name="user_id" value="<? echo "$row[user_id]" ?>"></td>
                            </tr>

                            <tr>
                                <td>Firstname:</td>
                                <td><input type="text" name="firstname" value="<? echo "$row[firstname]" ?>"></td>
                            </tr>

                            <tr>
                                <td>Lastname:</td>
                                <td><input type="text" name="lastname" value="<? echo "$row[lastname]" ?>"></td>
                            </tr>

                            <tr>
                                <td>Station:</td>
                                <td><input type="text" name="station_id" value="<? echo "$row[station_id]" ?>"></td>
                            </tr>

                            <tr>
                                <td>Department:</td>
                                <td><input type="text" name="department_id" value="<? echo "$row[department_id]" ?>"></td>
                            </tr>

                            <tr>
                                <td>Role:</td>
                                <td><input type="text" name="role_id" value="<? echo "$row[role_id]" ?>"></td>
                            </tr>
                        </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>