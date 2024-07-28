<?php 
session_start();
include 'connection.php';
if(isset($_POST['signin'])){
  $error="";
  $email = $_POST['email'];
  $UserPassword = $_POST['password'];
  $password = $UserPassword;
  $query="SELECT * FROM users Where email='$email' AND con_pass='$password'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result)==1){
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
   
    header("Location:dashboard.php");
  }else{
    $_SESSION['error']="Incorrect Email or Password";
    header("Location:login.php");
  }
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Cloud</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Cloud" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" >
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <style type="text/css">
        #error{
            color:red;
        }
    </style>
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >
</head>

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" data-bgimage='url(images/background/6.jpg) top' class="full-height no-top no-bottom">
            <div class="v-center">
                <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 offset-lg-4">
                                <div class="padding40 rounded-3 shadow-soft text-center" data-bgcolor="#ffffff">
                                    <h4>Sign in your account</h4>
                                    <?php if(isset($_SESSION['error'])){
                                        $error=$_SESSION['error'];
                                       echo "<span class='error'>$error</span>";}
                                      ?>
                                    <div class="spacer-10"></div>
                                    <form id="form_register" class="form-border" autocomplete="off" method="post" action="">
                                        <div class="field-set">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email" >
                                        </div>
                                        <div class="field-set">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Your password" >
                                        </div>
                                        <div id="submit">
                                            <input type="submit" name="signin" id="" value="Sign In" class="btn-main btn-fullwidth rounded-3" >
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
   
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>