<?php include 'connection.php';
    if(isset($_POST["update_category"])) {
       $id = $_POST["id"];
       $categoryName = $_POST["category_name"];
       $categoryIcon = $_POST["category_icon"];
        if(empty($categoryName) || empty($categoryIcon)) {
           echo "Please fill in all required fields.";
        } else {
           // Continue with file upload and database insertion
        $sql = "UPDATE category SET category_name='$categoryName',category_icon='$categoryIcon' WHERE id='$id'";
                    if ($conn->query($sql) === TRUE) {
                       echo "<script>alert('Category submitted successfully.')</script>";
                        header("location:category.php");
                    } else {
                       echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            }
?>
<?php include 'header.php'; ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="form-head d-flex mb-3 align-items-start">
         <div class="me-auto d-none d-lg-block">
            <h2 class="text-primary font-w600 mb-0">Dashboard</h2>
            <p class="mb-0">Welcome to Cloud!</p>
         </div>
         
      </div>
      <?php if(!empty($response)) { ?>
      <div class="alert alert-success alert-dismissible fade show">
         <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
         </svg>
         <strong><?php echo $response["type"]; ?>!</strong> <?php echo $response["message"]; ?>.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
         </button>
      </div>
      <?php }?>
      <div class="row">
         <div class="col-xl-12 col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Category Form</h4>
               </div>
               <?php
                              include 'connection.php';
                              
                              $sel_query="Select * from category where status='1' ORDER BY id desc;";
                              $result = mysqli_query($conn,$sel_query);
                              if($row = mysqli_fetch_assoc($result)) { ?>
               <div class="card-body">
                  <div class="basic-form">
                     <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Category Name</label>
                           <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Category Name" required="" name="category_name" value="<?php echo $row['category_name'] ?>">
                              
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Category Icon</label>
                           <div class="col-sm-9">
                              <input type="text"  name="category_icon" class="form-control" placeholder="Category Icon" required="" value="<?php echo $row['category_icon'] ?>">
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <div class="col-sm-10">
                              <button type="submit" name="update_category" class="btn btn-primary">Update Category</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            <?php } ?>
            </div>
         </div>
         
      </div>
   </div>
</div>
</div>
</div>
<?php include 'footer.php' ?>