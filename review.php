<?php
include 'top.php';
if(isset($_POST["customer_rat"])) {
    $userName = $_POST["user_name"];
    $customerrating = $_POST["customer_rating"];
    if(empty($userName) || empty($customerrating)) {
        echo "Please fill in all required fields.";
    } else {
        
    $sql = "INSERT INTO review (user_name,customer_rating) 
            VALUES ('".$userName."','".$customerrating."')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Review submitted successfully.')</script>";
        header("location:dashboard.php");
    } else {
            $_SESSION['error']="Error: " . $sql . "<br>" . $conn->error;
    }
        
    }
}
?>
<style>
  btn-primary{
color: #de2b18!important;
  }
</style>
 <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1>Coustomer Review</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
   <section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h3>What was your experience?</h3>
                            <!-- <p>High performance secured hosting for your website. Don't lose anymore clients for the slowest speed of your hosting service.</p> -->
                                <?php if(isset($_SESSION['error'])){
                                    $error=$_SESSION['error'];
                                    echo "<span class='error'>$error</span>";}
                                ?>
                            <div class="spacer-10"></div>
                            <form name="contactForm" enctype="multipart/form-data" id='contact_form' class="form-border" method="post" action="">
                                <input type="hidden" name="user_name" value="<?php echo $_SESSION['email']; ?>">
                               
                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <label>Review Our Candles:</label>
                                             <textarea id="summernote" name="customer_rating" value="Insert Details" required class="form-control"> </textarea>
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-12">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' name="customer_rat" id='send_message' value='Submit' class="btn-main color-2">
                                        </div>

                                        

                                    </div>

                                </div>
                            </form>
                  
                    
                        </div>
                    </div>
                </div>
            </section>
            
            
        </div>
        <!-- content close -->

        <?php include('footer.php'); ?>