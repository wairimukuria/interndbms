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
     <title>Register</title>
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

             <li class="breadcrumb-item active">KINDLY FILL IN DETAILS TO REGISTER A NEW USER :</li>
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
                             <i class="fa fa-table"></i> Register
                         </div>
                         <div class="card-body">
                             <form method="post" action="server.php">
                                 <div class="row ">
                                     <div class="col-lg-10">
                                         <label>Fistname :</label>
                                         <input type="text" name="firstname" id="inputName" class="form-control" placeholder="Enter firstname" required><br>
                                         <label>Othernames :</label>
                                         <input type="text" name="othernames" id="inputName" class="form-control" placeholder=" Enter other names" required><br>
                                         <label>Username :</label>
                                         <input type="text" name="username" id="inputName" class="form-control" placeholder="Enter your username" required><br>
                                         <label>Password :</label>
                                         <input type="text" name="password" id="inputName" class="form-control" placeholder="Enter password" required><br>
                                     </div>
                                 </div>

                                 <label>Station:</label> <select name="station" required>
                                     <option value=''>select</option>
                                     <?php
                                        $sql = "select * from station";
                                        $resultSet = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        while ($st = $resultSet->fetch_assoc()) {
                                            echo $station_name = $st['station_name'];
                                            $station_id = $st['station_id'];
                                            echo "<option value='$station_id'>$station_name</option>";
                                        } ?>
                                 </select>

                                 <label>Department :</label> <select name="department" required>
                                     <option value=''>select</option>
                                     <?php
                                        $sql = "select * from department";
                                        $resultSet = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        while ($dp = $resultSet->fetch_assoc()) {
                                            $dept_name = $dp['dept_name'];
                                            $dept_id = $dp['dept_id'];
                                            ?>
                                         <option value="<?php echo $dept_id; ?>"><?php echo $dept_name; ?></option>
                                     <?php    } ?>
                                 </select>

                                 <label>Role : </label> <select id="sel" name="role_name" required>
                                     <option value=''>select</option>
                                     <?php
                                        $sql = "select * from roles";
                                        $resultSet = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        while ($rows = $resultSet->fetch_assoc()) {
                                            $role_name = $rows['role_name'];
                                            $role_id = $rows['role_id'];
                                            ?>
                                         <option value="<?php echo $role_id; ?>" selected><?php echo $role_name; ?></option>
                                     <?php    } ?>
                                 </select><br><br>

                                 <input type="Submit" class="btn btn-primary" name="Submit" value="Submit">
                                 <input type="button" class="btn btn-danger" value="Cancel" a href="register.php"></a></br>
                                 <a href=" login.php">Already have an account? Login here.</a>
                         </div>
                     </div>
                 </div>

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