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
     <title>Welcome</title>
     <!-- Bootstrap core CSS-->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom fonts for this template-->
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- Page level plugin CSS-->
     <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
     <!-- Custom styles for this template-->
     <link href="css/sb-admin.css" rel="stylesheet">
 </head>

 <!-- <div class="content-wrapper"> -->
 <div class="container">
     <!-- Breadcrumbs-->
     <ol class="breadcrumb">

         <li class="breadcrumb-item active">Welcome</li>
     </ol>
     <!-- Icon Cards-->
     <div class="container">
         <?php
            include('navbar.php');
            ?>
         <div class="row">
             <div class="col-sm-12 col-sm-offset-3">
                 <div class="card mb-12">
                     <div class="card-body">
                         <div class="page-header">
                             <h3>Hi, <b><?php echo htmlspecialchars($session_user); ?></b>. Welcome to Intern Database Management System.</h3>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>