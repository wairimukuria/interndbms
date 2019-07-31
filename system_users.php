 <?php
    include('db.php');
    include('session.php');
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>System_users</title>
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

             <li class="breadcrumb-item active">USERS DETAILS :</li>
         </ol>
         <!-- Icon Cards-->
         <div class="container">
             <?php
                include('navbar.php');
                ?>
             <div class="row">
                 <div class="col-md-12 col-md-offset-3">
                     <div class="card mb-14">
                         <div class="card-header">
                             <i class="fa fa-table"></i> Users Register
                         </div>
                         <div class="card-body">
                             <table class="table">
                                 <tr>
                                     <th>User id</th>
                                     <th>Firstname</th>
                                     <th>Othername</th>
                                     <th>Station</th>
                                     <th>Department</th>
                                     <th>Role</th>
                                     <th>Edit</th>
                                     <th>Disable</th>
                                 </tr>

                                 <?php
                                    $sql = "SELECT users.user_id,users.firstname,users.othernames,department.dept_name,station.station_name,roles.role_name FROM users 
				                    LEFT JOIN department ON users.dept_id = department.dept_id LEFT JOIN station ON station.station_id = users.station_id 
				                    LEFT JOIN roles ON roles.role_id = users.role_id ";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row["user_id"];
                                        // echo " <br> firstname: " . $row["firstname"] . " <br> othernames: " . $row["othernames"] . " <br> station: " . $row["station_name"] .
                                        // 	"<br> department: " . $row["dept_name"] . "<br>";

                                        ?>
                                     <tr>
                                         <td><?php echo $row["user_id"]; ?></td>
                                         <td><?php echo $row["firstname"]; ?></td>
                                         <td><?php echo $row["othernames"]; ?></td>
                                         <td><?php echo $row["station_name"]; ?></td>
                                         <td><?php echo $row["dept_name"]; ?></td>
                                         <td><?php echo $row["role_name"]; ?></td>
                                         <td> <a class="btn btn-primary btn-sm" a href="edit_user.php<?php echo '?id=' . $id; ?>">Edit</a></td>
                                         <td> <a class="btn btn-danger btn-sm" a href="disable_user.php<?php echo '?id=' . $id; ?>">Disable</a></td>
                                     </tr>
                                 <?php } ?>
                             </table>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>

 </html>