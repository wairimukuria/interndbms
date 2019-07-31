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
     <title>Reset</title>
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

             <li class="breadcrumb-item active">FILL THIS FORM TO RESET PASSWORD.</li>
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
                             <i class="fa fa-table"></i> Reset
                         </div>
                         <div class="card-body">
                             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                 <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                                     <label>New Password</label>
                                     <input type="password" name="new_password" class="form-control">
                                 </div>
                                 <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                     <label>Confirm Password</label>
                                     <input type="password" name="confirm_password" class="form-control">
                                 </div>
                                 <div class="form-group">
                                     <input type="submit" class="btn btn-primary" value="Submit">
                                     <input type="submit" class="btn btn-danger" value="Cancel" a href="reset.php"></a></br>
                                 </div>
                             </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>

 </html>