<?php include 'connection.php';
if(isset($_POST["add_project"])) {
    $userName = 'admin';
    $categoryName = $_POST["category_id"];
    $projectName = $_POST["project_name"];
    $projectDesc = $_POST["project_desc"];
    if(empty($projectName) || empty($projectDesc)) {
        echo "Please fill in all required fields.";
    } else {
        // Continue with file upload and database insertion
      $allowedExtensions = array('doc', 'docx', 'pdf', 'xls', 'xlsx', 'ppt', 'pptx', 'php', 'html', 'css', 'js','png','jpg','jpge','gif');
        $projectImageExtension = strtolower(pathinfo($_FILES["projectImage"]["name"], PATHINFO_EXTENSION));
        $projectFileExtension = strtolower(pathinfo($_FILES["projectFile"]["name"], PATHINFO_EXTENSION));
        if(!in_array($projectImageExtension, $allowedExtensions) || !in_array($projectFileExtension, $allowedExtensions)) {
            echo "Invalid file type. Allowed extensions are: ". implode(', ', $allowedExtensions);
        } else {
            if(move_uploaded_file($_FILES["projectImage"]["tmp_name"], "uploads/images/" . $_FILES["projectImage"]["name"]) && move_uploaded_file($_FILES["projectFile"]["tmp_name"], "uploads/project/" . $_FILES["projectFile"]["name"])) {
                $projectImage = "uploads/images/" . $_FILES["projectImage"]["name"];
                $projectFile = "uploads/project/" . $_FILES["projectFile"]["name"];
                $sql = "INSERT INTO projects (category_id,user_name,project_name, project_desc, projectImage, projectFile)
                VALUES ('".$categoryName."','".$userName."', '".$projectName."', '".$projectDesc."', '".$projectImage."', '".$projectFile."')";
                if ($conn->query($sql) === TRUE) {
                      echo "<script>alert('Project submitted successfully.')</script>";
                      header("location:addfile.php");

                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
               
            } else {
                echo "Sorry, there was an error uploading your files.";
            }
        }
    }
}

?>

<?php include 'header.php'; ?>
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="form-head d-flex mb-3 align-items-start">
      <div class="me-auto d-none d-lg-block">
        <h2 class="text-primary font-w600 mb-0">Dashboard</h2>
        <p class="mb-0">Welcome to HOSTCO!</p>
      </div>
      <div class="me-5 d-none d-lg-block">
       <a href="allfile.php" class="btn btn-primary">View File</a>
      </div>
    </div>
     <?php if(!empty($response)) { ?>
                                    <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                            <strong><?php echo $response["type"]; ?>!</strong> <?php echo $response["message"]; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                            </button>
                        </div>
                  <?php }?>
    <div class="row">
      
      <div class="col-xl-12 col-lg-12">
        <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Project Form</h4>
               </div>
               <div class="card-body">
                  <div class="basic-form">
                     <form action="" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Project Name</label>
                           <div class="col-sm-9">
                              <select name="category_id" class="form-control">
                                                <option value="selected">--Please Selected Value--</option>
                                                <?php $sel_query="Select * from category where status='1' ORDER BY id desc;";
                                                    $result = mysqli_query($conn,$sel_query);
                                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                                         <option value="<?php echo $row["id"]; ?>"><?php echo $row["category_name"]; ?></option>
                                                     <?php } ?>
                                            </select>
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Project Category</label>
                           <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Place Name" required="" name="project_name">
                              </select>
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Project File</label>
                           <div class="col-sm-9">
                              <input type="file"  name="projectFile" class="form-control" placeholder="Place Name" required="">
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Details</label>
                           <div class="col-sm-9">
                              <textarea id="summernote" name="project_desc" value="Insert Details">
                      
                  </textarea>
                              
                           </div>
                        </div>
                        
                        <div class="mb-3 row">
                           <label class="col-sm-3 col-form-label">Image</label>
                           <div class="col-sm-9">
                              <input type="file" name="projectImage" class="form-file-input form-control" >
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <div class="col-sm-10">
                              <button type="submit" name="add_project" class="btn btn-primary">Add Project</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>