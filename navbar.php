<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Navigation bar</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <h1 a class="navbar-brand" href="index.html" align:center;>KENYA BROADCASTING CORPORATION</a></h1>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                    <a class="nav-link" href="home.php">
                        <i class="fa fa-fw fa-home"></i>
                        <span class="nav-link-text">Home</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reset Password ">
                    <a class="nav-link" href="reset.php">
                        <i class="fa fa-fw fa-refresh"></i>
                        <span class="nav-link-text">Reset Password </span>
                    </a>
                </li>
                <?php if ($session_role == 1) { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Register">
                        <a class="nav-link" href="register.php">
                            <i class="fa fa-fw fa-plus"></i>
                            <span class="nav-link-text">Register</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Users">
                        <a class="nav-link" href="system_users.php">
                            <i class="fa fa-fw fa-group"></i>
                            <span class="nav-link-text">Manage Users</span>
                        </a>
                    </li>
                <?php    } ?>
                <?php if ($session_role == 2) { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Intern">
                        <a class="nav-link" href="intern.php">
                            <i class="fa fa-fw fa-edit"></i>
                            <span class="nav-link-text">Intern</span>
                        </a>
                    </li>
                <?php    } ?>
                <?php if ($session_role == 3) { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Supervisor">
                        <a class="nav-link" href="supervisor.php">
                            <i class="fa fa-fw fa-edit"></i>
                            <span class="nav-link-text">Supervisor</span>
                        </a>
                    </li>
                <?php    } ?> <?php if ($session_role == 3) { ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Intern Reports">
                        <a class="nav-link" href="intern_report.php">
                            <i class="fa fa-fw fa-edit"></i>
                            <span class="nav-link-text">Intern Reports</span>
                        </a>
                    </li>
                <?php    } ?>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-fw fa-lock"></i>
                        <span class="nav-link-text">Logout</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </div>
    </nav>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Intern Database Management System @ KBC 2019 </small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    </div>

</body>

</html>