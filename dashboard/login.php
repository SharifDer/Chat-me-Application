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

    <!-- MAin CSs -->
    <link rel="stylesheet" href="assets/css/style2.css">

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<?php
	 include('../chat/php/config.php');

	session_start();

	if (isset($_POST['loginadmin'])) {

		$user_name     = $conn->real_escape_string($_POST['user_name']);
		$Password     = $conn->real_escape_string($_POST['password']);

		$query = "SELECT * FROM admin WHERE user_name=('$user_name') AND password=('$Password')";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) == 1) {

			$row = mysqli_fetch_assoc($result);

			$_SESSION['user_name'] = $row['user_name'];
			$_SESSION['success'] = "you are now logged in";
			header('location: index.php');
		} else {
			echo '<script>alert("The user name/Password not correct")</script>';
			header("refresh:0;url= login.php");
		}
	} else {
	?>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <h4>Login to Dashboard of ChatMe</h4>
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="user_name">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block account-btn" name="loginadmin" type="submit">Login</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Slimscroll -->
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- custom JS -->
    <script src="assets/js/app.js"></script>
    <?php } ?>
</body>
</html>