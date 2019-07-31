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
     <title>Intern</title>
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

             <li class="breadcrumb-item active">KINDLY FILL AND SUBMIT YOUR WEEKLY REPORT:</li>
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
                             <i class="fa fa-table"></i> Weekly Report
                         </div>
                         <div class="card-body">
                             <form method="post" action="intern_server.php">
                                 <div class="row ">
                                     <div class="col-lg-10">
                                         <label>Firstname :<input type="text" name="firstname" id="inputName" class="form-control" placeholder=" firstname" required></label>
                                         <label>Othernames :<input type="text" name="othernames" id="inputName" class="form-control" placeholder="  other names" required></label>

                                         <label>Station :<br> <select name="station" required>
                                                 <option value=''>select</option>
                                                 <?php
                                                    $sql = "select * from station";
                                                    $resultSet = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                    while ($st = $resultSet->fetch_assoc()) {
                                                        echo $station_name = $st['station_name'];
                                                        $station_id = $st['station_id'];
                                                        ?>
                                                     <option value="<?php echo $station_id; ?>"><?php echo $station_name; ?></option>
                                                 <?php  } ?>
                                         </label></select>

                                         <label>Department :<br> <select name="department" required>
                                                 <option value=''>select</option>
                                                 <?php
                                                    $sql = "select * from department";
                                                    $resultSet = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                    while ($dp = $resultSet->fetch_assoc()) {
                                                        $dept_name = $dp['dept_name'];
                                                        $dept_id = $dp['dept_id'];
                                                        ?>
                                                     <option value="<?php echo $dept_id; ?>"><?php echo $dept_name; ?></option>
                                                 <?php   } ?>
                                         </label></select>
                                     </div>
                                 </div>

                                 <table class="table">
                                     <tr>
                                         <th>MONDAY</th>
                                         <td><input type="textarea" name="monday" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                     <tr>
                                         <th>TUESDAY</th>
                                         <td><input type="textarea" name="tuesday" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                     <tr>
                                         <th>WEDNESDAY</th>
                                         <td><input type="textarea" name="wednesday" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                     <tr>
                                         <th>THURSDAY</th>
                                         <td><input type="textarea" name="thursday" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                     <tr>
                                         <th>FRIDAY</th>
                                         <td><input type="textarea" name="friday" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                     <tr>
                                         <th>CHALLENGES</th>
                                         <td><input type="textarea" name="challenges" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                     <tr>
                                         <th>SUMMARY</th>
                                         <td><input type="textarea" name="summary" id="inputName" class="form-control" placeholder="      . . .  type here  . . ." required><br></td>
                                     </tr>
                                 </table>
                                 <input type="Submit" class="btn btn-primary" name="Save" value="Save">
                                 <input type="submit" class="btn btn-danger" name="Cancel" value="Cancel"><br>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
     </div>
 </body>

 </html>