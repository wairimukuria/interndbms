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
                             <i class="fa fa-table"></i> Intern Report
                         </div>
                         <div class="card-body">
                             <table class="table">
                                 <tr>
                                     <th>No.</th>
                                     <th>Firstname</th>
                                     <th>Othername</th>
                                     <th>Monday</th>
                                     <th>Tuesday</th>
                                     <th>Wednesday</th>
                                     <th>Thursday</th>
                                     <th>Friday</th>
                                     <th>Challenges</th>
                                     <th>Summary</th>
                                 </tr>

                                 <?php
                                    $sql = "SELECT * FROM internreport";
                                    $cnt = 1;

                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {

                                        // echo " <br> firstname: " . $row["firstname"] . " <br> othernames: " . $row["othernames"] . " <br> station: " . $row["station_name"] .
                                        // 	"<br> department: " . $row["dept_name"] . "<br>";

                                        ?>
                                     <tr>
                                         <td><?php echo $cnt; ?></td>
                                         <td><?php echo $row["firstname"]; ?></td>
                                         <td><?php echo $row["othernames"]; ?></td>
                                         <td><?php echo $row["monday"]; ?></td>
                                         <td><?php echo $row["tuesday"]; ?></td>
                                         <td><?php echo $row["wednesday"]; ?></td>
                                         <td><?php echo $row["thursday"]; ?></td>
                                         <td><?php echo $row["friday"]; ?></td>
                                         <td><?php echo $row["challenges"]; ?></td>
                                         <td><?php echo $row["summary"]; ?></td>
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