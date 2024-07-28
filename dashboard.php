<?php include 'top.php'; ?>
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
                  <h1>Welcome To User</h1>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- section close -->
   <section id="section-hero" aria-label="section">
      <div class="container">
         <div class="row gx-5">
            <div class="col-lg-8">
               <div class="row">
                  <?php
                     include 'connection.php';
                    $count=1;
                     $sel_query = "SELECT * FROM projects WHERE status='1' ORDER BY id DESC";
                     $result = mysqli_query($conn, $sel_query);
                     if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                   
                    
                     ?>
                  <div class="col-lg-6 mb10">
                     <div class="bloglist item">
                        <div class="post-content">
                           <?php  if($row["user_name"]==$_SESSION['email']){ ?> 
                            <div class="post-image">
                              <img alt="" src="<?php echo $row["projectImage"]; ?>" class="lazy" height="300" width="300">
                           </div>
                           <?php } else { ?> 
                               <div class="post-image">
                              <img alt="" src="admin/<?php echo $row["projectImage"]; ?>" class="lazy" height="300" width="300">
                           </div>
                           <?php } ?>
                           <div class="post-text">
                              <span class="p-tagline">Web Hosting</span>
                              <h4><a href="#"><?php echo $row["project_name"]; ?><span></span></a></h4>
                              <p><div id="full-description" style="display:none;"><?php //echo $row["project_desc"] ;?></div></p>
                              <p>
                                 <?php
                                 $description = $row["project_desc"];
                                 $limit = 10;       
                                 if (strlen($description) > $limit) {
                                   $description = substr($description, 0, $limit) . '...';
                                   echo $description;
                                   echo '<a href="#" onclick="showFullDescription()">Read More</a>';
                                   echo '';
                                 } else { 
                                     echo $description;
                                 }
                                 ?>
                              </p>
                           <td><a href="<?php echo $row["projectFile"]; ?>" class="btn btn-danger">Download PDF</a></td>
                             
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php $count++; } } else {
                         ?>
                         <div class="col-md-12">
                             <div class="alert alert-warning" role="alert">
                                 <strong>No data found!</strong> Please try again later.
                             </div>
                         </div>
                         <?php
                     }
                     ?>
                  <div class="spacer-single"></div>
                  <div class="col-md-12">
                   
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="widget">
                  <h4>Testimonials</h4>
                  <div class="small-border"></div>
                  <div class="owl-carousel owl-theme" id="testimonial-carousel-1-col">
                      <?php
                     include 'connection.php';
                    $count=1;
                     $sel_query = "SELECT * FROM review WHERE status='1' ORDER BY id DESC";
                     $result = mysqli_query($conn, $sel_query);
                     if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                   
                    
                     ?>
                     <div class="item">
                        <div class="de_testi type-2">
                           <blockquote>
                              <h4>Customer Rating</h4>
                              <p><?php echo $row["customer_rating"]; ?>
                              </p>
                              <div class="de_testi_by">
                                 <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span><?php echo $row["user_name"]; ?></span>
                              </div>
                           </blockquote>
                        </div>
                     </div>
                     <?php $count++; } } else {
                         ?>
                         <div class="col-md-12">
                             <div class="alert alert-warning" role="alert">
                                 <strong>No data found!</strong> Please try again later.
                             </div>
                         </div>
                         <?php
                     }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- content close -->
</div>
<!-- Modal for Customer Rating -->
<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ratingModalLabel">Customer Rating</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form elements for rating here -->
                <!-- Example: <input type="number" name="rating" min="1" max="5"> -->
                <p>Please rate this project:</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit Rating</button>
            </div>
        </div>
    </div>
</div>
<script>
    // function showFullDescription() {
    //     document.getElementById("full-description").style.display = "block";
    // }
 </script>
<?php include 'footer.php'; ?>