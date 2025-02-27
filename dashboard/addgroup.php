<?php include('../chat/php/config.php')  ?>
<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

     <!-- Favicons -->
     <link rel="shortcut icon" type="image/x-icon" href="assets/img/ChatMe.png">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">

    <!-- Datatable-->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <!-- Morris-->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header-outer">
            <div class="header">
            <h3 style="text-align: center; font-weight: bold;margin-top:13px">Dashboard of ChatMe Application</h3>

            </div>
        </div>
        <!-- /Header -->

        <!-- sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="index.php" class="logo">
                            <img src="assets/img/icon-5.png" width="30" height="30" alt="">
                            <span class="text-uppercase">ChatMe</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li class="">
                            <a href="index.php"><img src="assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#" class="active"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Groups</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="group_list.php"><span>All Groups</span></a></li>
                                <li class="active"><a href="addgroup.php"><span>Add Group</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="logout.php"><img src="assets/img/sidebar/icon-15.png"
                                    alt="icon"><span>LOGOUT</span></a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <!-- /sidebar -->

        <!-- content -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- page-header-->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">Add New Group</h3>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                <!--/ page-header-->

                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="custom-mt-form" method="post" action="addedgroup.php" enctype="multipart/form-data">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="form-group">
                                                    <label>Group Name</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Group Image</label>
                                                    <input type="file" name="image" accept="image/*" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="form-group text-center custom-mt-form-group">
                                                    <button class="btn btn-primary mr-2" name="add" type="submit">Confirm</button>
                                                    <button class="btn btn-secondary" type="reset">Cancel</button>
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
            <!-- /content -->
        </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Slimscroll -->
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Select2 -->
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <!-- Fullcalendar -->
        <script src="assets/js/fullcalendar.min.js"></script>
        <script src="assets/js/jquery.fullcalendar.js"></script>

        <!-- Chart -->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/js/apexcharts.js"></script>
        <script src="assets/js/chart-data.js"></script>

        <!-- custom Js -->
        <script src="assets/js/app.js"></script>

</body>

</html>