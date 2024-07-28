<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
   header("Location:index.php");
}
   if(isset($_POST['signin'])) {
      include 'connection.php';
           $email =  $_REQUEST['email'];
           $pass = md5($_REQUEST['password']);
           $password=$pass;         
           if(empty($email)){
           header("Location:index.php?error=User Name is required");
           exit();
           }else if(empty($pass)){
           header("Location: index.php?error=Password is required");
           exit();
          }else{
          $sql = "SELECT * FROM admin WHERE email='$email' and password='$password' and status='1'";
          // echo $sql;
          // die();
          if(mysqli_query($conn,$sql)){
                   // echo "Logged in!";
                   $_SESSION['username'] = $username;
                   $_SESSION['email'] = $email;
                   $_SESSION['id'] = $id;
               header("location:dashboard.php");
           } else{
            header("Location: index.php?error=Incorect User name or password");
                   exit();
           }
       }
       }
    ?>

<!-- Login System End -->
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>HostCo</title>
    <!-- Favicon icon -->
    <style>
    	.error{
    		color: red;
    	}
    </style>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/icon.png">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	
</head>

<body class="vh-100">
	<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">

                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="../images/logo.png" alt=""></a>
									</div>
									<div>
         <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
         <!-- <div class="form-head">Login</div> -->
         
      </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control"  name="email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <a href="forgot_password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="signin" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page_register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="assets/vendor/global/global.min.js"></script>
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/js/deznav-init.js"></script>
</body>
</html>