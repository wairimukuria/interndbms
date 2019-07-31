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

             <li class="breadcrumb-item active">INTERN DETAILS :</li>
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
                             <i class="fa fa-table"></i> Interns Attendance List
                         </div>
                         <div class="card-body">
                             <table class="table">
                                 <tr>
                                     <th>No.</th>
                                     <th>Firstname</th>
                                     <th>Othernames</th>
                                     <th>Date </th>
                                     <th>Status</th>
                                 </tr>

                                 <?php
                                    $sql = "SELECT users.firstname,users.othernames,users.role_id,attendance.supervisor_id,attendance.date,attendance.status FROM users 
											LEFT JOIN department ON users.dept_id = department.dept_id LEFT JOIN station ON station.station_id = users.station_id LEFT JOIN attendance on attendance.user_id = users.user_id
											LEFT JOIN roles ON roles.role_id = users.role_id WHERE users.role_id = 2 AND users.dept_id='$session_dept' AND users.station_id='$session_station'";

                                    $result = $conn->query($sql);
                                    $cnt = 1;
                                    $num = mysqli_num_rows($result);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                     <tr>
                                         <td><?php echo $cnt; ?></td>
                                         <td><?php echo $row["firstname"]; ?><br></td>
                                         <td><?php echo $row["othernames"]; ?><br></td>
                                         <td><?php echo $row["date"]; ?><br></td>
                                         <td><?php echo $row["status"]; ?><br></td>
                                     </tr>

                                     <?php $cnt++;
                                    } ?>
                             </table>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>

 </html>