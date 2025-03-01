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
                                <li class="active"><a href="group_list.php"><span>All Groups</span></a></li>
                                <li><a href="addgroup.php"><span>Add Group</span></a></li>

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
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Groups List</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">

                        </div>
                    </div>
                </div>

                <div class="content-page">

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="table-responsive">
                                <table class="table custom-table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Name </th>

                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sqlbooking = "SELECT  * FROM  user_group";
                                        $resultnb = $conn->query($sqlbooking);
                                        if (mysqli_num_rows($resultnb) >= 1) {
                                            while ($rownb = $resultnb->fetch_assoc()) { ?>
                                                <tr>

                                                    <td><?php echo $rownb['name'] ?></td>
                                                    <td class="text-right">
                                                        <?php if ($rownb['status'] == "active") { ?>
                                                            <a <?php echo "href='update.php?idgroup={$rownb['group_id']}'" ?> class="btn btn-danger btn-sm mb-1">
                                                                <i class="fa fa-toggle-off"></i>
                                                            </a> <?php } else { ?>
                                                            <a <?php echo "href='update.php?idgroup={$rownb['group_id']}'" ?> class="btn btn-info btn-sm mb-1">
                                                                <i class="fa fa-toggle-on"></i>
                                                            </a> <?php } ?>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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

         <!-- table -->
        <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

        <!-- Chart -->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/js/apexcharts.js"></script>
        <script src="assets/js/chart-data.js"></script>

        <!-- custom Js -->
        <script src="assets/js/app.js"></script>

</body>

</html>