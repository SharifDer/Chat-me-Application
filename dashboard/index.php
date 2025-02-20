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

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
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
                        <a href="index-2.html" class="logo">
                            <img src="assets/img/icon-5.png" width="30" height="30" alt="">
                            <span class="text-uppercase">ChatMe</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="index.php"><img src="assets/img/sidebar/icon-1.png"
                                    alt="icon"><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Groups</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="group_list.php"><span>All Groups</span></a></li>
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

                <!-- page-header-->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">statistics</h3>
                        </div>
                    </div>
                </div>
                <!--/ page-header-->

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/user.webp" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Users of our ChatMe</span>
                                <?php
										$sqlrecored = "SELECT * FROM users ORDER BY user_id";
										if ($resultdore = mysqli_query($conn, $sqlrecored)) {
											$rowcount = mysqli_num_rows($resultdore); ?>
											<h3><?php echo "$rowcount"; ?></h3>
										<?php mysqli_free_result($resultdore);
										} ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info text-left d-inline-block">
                                <span>Number of Groups</span>
                                <?php
										$sqlrecored = "SELECT * FROM user_group ORDER BY group_id";
										if ($resultdore = mysqli_query($conn, $sqlrecored)) {
											$rowcount = mysqli_num_rows($resultdore); ?>
											<h3><?php echo "$rowcount"; ?></h3>
										<?php mysqli_free_result($resultdore);
										} ?>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/group.jpg" width="80" alt=""></span>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/mes2.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Number of Messages</span>
                                <?php
										$sqlrecored = "SELECT * FROM messages ORDER BY msg_id";
										if ($resultdore = mysqli_query($conn, $sqlrecored)) {
											$rowcount = mysqli_num_rows($resultdore); ?>
											<h3><?php echo "$rowcount"; ?></h3>
										<?php mysqli_free_result($resultdore);
										} ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
                            <span>Groups Messages</span>
                                <?php
										$sqlrecored = "SELECT * FROM group_messages ORDER BY msg_id";
										if ($resultdore = mysqli_query($conn, $sqlrecored)) {
											$rowcount = mysqli_num_rows($resultdore); ?>
											<h3><?php echo "$rowcount"; ?></h3>
										<?php mysqli_free_result($resultdore);
										} ?>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/mes1.png" alt="" width="80"></span>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">Users</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="table-responsive">
                            <table class="table custom-table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Unique Id</th>
                                        <th>Status</th>
                                        
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                             <?php   $sqlbooking = "SELECT  * FROM  users";
                                 $resultnb = $conn->query($sqlbooking);
                                 if (mysqli_num_rows($resultnb) >= 1) {
                                    while ($rownb = $resultnb->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $rownb['fname'].$rownb['lname']  ?></td>
                                        <td><?php echo $rownb['email'] ?></td>
                                        <td><?php echo $rownb['unique_id'] ?></td>
                                        <td><?php echo $rownb['status_band'] ?></td>
                                       <td class="text-right" >
                                        <?php if($rownb['status_band'] == "active"){ ?>
                                       <a <?php echo "href='update.php?id={$rownb['user_id']}'" ?> class="btn btn-danger btn-sm mb-1">
											<i class="fa fa-toggle-off"></i>
                                    </a>	<?php } else{?>
                                        <a <?php echo "href='update.php?id={$rownb['user_id']}'" ?> class="btn btn-info btn-sm mb-1">
											<i class="fa fa-toggle-on"></i>
                                    </a>	<?php } ?>
										</td>
                                        
                                    </tr>
                                   <?php }} ?>
                                </tbody>
                            </table>
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

        <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

        <!-- custom Js -->
        <script src="assets/js/app.js"></script>

</body>

</html>
