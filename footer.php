        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-4">
                        <a href="index.html">
                            <img src="images/logo.png" alt="" >
                            <div class="spacer-20"></div>
                            <p>We are HostCo, we offer an exceptional cloud hosting service that allows you to seamlessly upload and retrieve files for your website. Our reliable and scalable infrastructure ensures that your data is securely stored and readily accessible whenever you need it. With our cloud hosting solution, you can confidently manage and share files, knowing that they are stored in a secure and high-performance environment. Whether you're a business owner, a developer, or an individual looking for efficient file management, HostCo provides the cloud hosting capabilities you need. Trust us to deliver a seamless and reliable file storage and retrieval experience for your website.</p>
                        </a>
                        <!-- <div class="spacer-10"></div>
                        <div class="widget">
                            <h5>We Accepted</h5>
                            <img class="img-card-sm" src="images/payments-logo/visa.png" alt="">
                            <img class="img-card-sm" src="images/payments-logo/master-card.png" alt="">
                            <img class="img-card-sm" src="images/payments-logo/jcb.png" alt="">
                            <img class="img-card-sm" src="images/payments-logo/paypal.png" alt="">
                        </div> -->
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                        <div class="widget">
                            <h5>Hostco</h5>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><?php
                                        if(isset($_SESSION['username'])) {
                                            echo '<a href="add-file.php">Add Project</a>';
                                        } else {
                                            echo '<a href="login.php">Add Project</a>';
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="widget">
                            <h5>Links</h5>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                
                            </ul>
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <!-- <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="#" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" > <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                            <div class="spacer-30"></div> -->
                            <div class="widget">
                                <h5>Follow Us on</h5>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        Copyright 2023 - Hostco by Lakshya Chaurasia
                                    </a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

    
</body>
</html>