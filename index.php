<?php  include('top.php');
include 'connection.php'; ?>
<style type="text/css">
/*        section {
            padding: 0px 0 120px 0;
        }*/
</style>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" data-bgimage='url(images/background/1.jpg) bottom'>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1>Cloud Storage 
                                for everyone, <span class="color-gradient">small</span> or <span class="color-gradient">large</span></h1>
                            <p class="lead">"Securely store and access your files anytime, anywhere with our reliable cloud storage solution."</p>
                            <!-- <form action='#' class="row" data-wow-delay="1.25s" id='form_sb' method="post" name="form_sb">
                                <div class="col">
                                    <div class="spacer-10"></div>
                                    <input class="form-control" id='domain_name' name='domain_name' placeholder="enter domain name" type='text'> <a id="btn-submit" href="javascript:;" onclick="document.getElementById('form_sb').submit();"><i class="arrow_right"></i></a>
                                    <div class="clearfix"></div>
                                    <div class="spacer-10"></div>
                                    
                                </div>
                            </form> -->
                            <div class="spacer-double"></div>
                        </div>
                        <div class="col-md-6 xs-hide" >
                            <img src="images/misc/server-2.png" class="lazy img-fluid anim-up-down" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 wow fadeInUp">
                            <img class="img-fluid anim-up-down" src="images/misc/server.png" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="p-sm-30 pb-sm-0 mb-sm-0">
                                <h2>New functionality brings maximum <span class="color-gradient">power</span> to your cloud Storage</h2>
                              <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <ul class="ul-style-2">
                                            <li><h4>Instant Updation</h4></li>
                                            <li><h4>Fast Uploading Speed</h4></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="ul-style-2">
                                            <li><h4>Reliable Hardware</h4></li>
                                            <li><h4>24 / 7 Support</h4></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="spacer-half"></div>
                                <a class="btn-main" href="#">Learn More</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-top">
                <div class="container">
                    <div class="row g-custom-x force-text-center">
                        <div class="col-md-4 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="40" data-speed="3000"> </h3>
                                Total User
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="20" data-speed="3000"></h3>
                                Total Category
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="100"  data-speed="3000"><?php
                                 echo $count2;
                                ?></h3>
                                Total File Uploaded
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         
            <section id="section-steps" class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h5 class="s2">Easy Steps</h5>
                            <h2>How It Works</h2>
                            <!-- <p class="lead">Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit et ut anim.</p> -->
                            <div class="spacer-20"></div>
                        </div>
                        <div class="col-md-12 wow fadeInUp">
                            <div class="container-timeline">
                                <ul>
                                    <li>
                                        <h4>Register</h4>
                                    </li>
                                    <li>
                                        <h4>SignIn</h4>
                                    </li>
                                    <li>
                                        <h4>Add Project</h4>
                                    </li>
                                    <li>
                                        <h4>Download Project</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="section-testimonial" class="no-top">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-6 offset-lg-3 text-center">
                            <h5 class="s2">Testimonials</h5>
                            <h2>Trusted by over 5,000 happy customers <span class="id-color">worldwide</span></h2>
                            <p class="lead">Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit et ut anim.</p>
                            <div class="spacer-20"></div>
                        </div> -->
                        <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.
                                        </p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>John, Pixar Studio</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Sarah, Microsoft</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Michael, Apple</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/4.jpg"> <span>Thomas, Samsung</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>John, Pixar Studio</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Sarah, Microsoft</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Michael, Apple</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi type-2">
                                    <blockquote>
                                        <h4>Excellent Cloud Storage</h4>
                                        <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                        <div class="de_testi_by">
                                            <img alt="" class="rounded-circle" src="images/people/4.jpg"> <span>Thomas, Samsung</span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-faq">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="s2">Do You Have</h5>
                            <h2>Any Questions?</h2>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                    <div class="row g-custom-x">
                        <div class="col-md-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-1">
                                        How secure is my data on your file management cloud platform?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-1">
                                        <p>We prioritize the security of your data. We employ robust encryption protocols and stringent access controls to ensure the utmost protection for your files.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-2">
                                        Can I access my files from any device or location?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-2">
                                        <p>Absolutely! Our file management cloud platform is designed to be accessible from any device with an internet connection. You can access your files conveniently from anywhere, anytime.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-3">
                                         Is there a file size limit for uploads and downloads?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-3">
                                        <p>We support large file uploads and downloads, and there is no specific file size limit. However, please note that extremely large files may require more time to upload or download, depending on your internet connection.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-b-4">
                                       Can I share files with others using your platform?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-4">
                                        <p>Yes, our file management cloud platform allows you to easily share files with others. You can generate shareable links or invite specific individuals to access and collaborate on files or folders.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-b-5">
                                        Do you offer automated backup and versioning features?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-5">
                                        <p>Yes, we provide automated backup functionality to ensure that your files are regularly backed up and protected against accidental loss. Additionally, our versioning feature allows you to keep track of file revisions and revert to previous versions if needed.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-b-6">
                                        What integration options are available with third-party applications?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-6">
                                        <p>We offer seamless integration with popular third-party applications, such as document editors, project management tools, and more. This allows you to streamline your workflows and enhance productivity within your preferred applications.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php include('footer.php'); ?>