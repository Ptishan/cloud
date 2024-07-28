<?php
include 'top.php';
if(isset($_POST["add_project"])) {
    $userName = $_SESSION['email'];
    $categoryName = $_POST["category_id"];
    $projectName = $_POST["project_name"];
    $projectDesc = $_POST["project_desc"];
    if(empty($projectName) || empty($projectDesc)) {
        echo "Please fill in all required fields.";
    } else {
        $allowedExtensions = array('doc', 'docx', 'pdf', 'xls', 'xlsx', 'ppt', 'pptx', 'php', 'html', 'css', 'js','png','jpg','jpeg','gif');
        $allowedExtensions1 = array('png','jpg','jpeg','gif');
        $projectImageExtension = strtolower(pathinfo($_FILES["projectImage"]["name"], PATHINFO_EXTENSION));
        $projectFileExtension = strtolower(pathinfo($_FILES["projectFile"]["name"], PATHINFO_EXTENSION));
        if(!in_array($projectImageExtension, $allowedExtensions1) || !in_array($projectFileExtension, $allowedExtensions)) {
            $_SESSION['error']="Invalid file type. Allowed extensions are: ". implode(', ', $allowedExtensions);
        } else {
            if(move_uploaded_file($_FILES["projectImage"]["tmp_name"], "uploads/images/" . $_FILES["projectImage"]["name"]) && move_uploaded_file($_FILES["projectFile"]["tmp_name"], "uploads/project/" . $_FILES["projectFile"]["name"])) {
                $projectImage = "uploads/images/" . $_FILES["projectImage"]["name"];
                $projectFile = "uploads/project/" . $_FILES["projectFile"]["name"];
                $sql = "INSERT INTO projects (category_id,user_name, project_name, project_desc, projectImage, projectFile) 
                        VALUES ('".$categoryName."','".$userName."', '".$projectName."', '".$projectDesc."', '".$projectImage."', '".$projectFile."')";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "<script>alert('Project submitted successfully.')</script>";
                    header("location:add-file.php");
                } else {
                        $_SESSION['error']="Error: " . $sql . "<br>" . $conn->error;
                }
               
            } else {
                $_SESSION['error']="Sorry, there was an error uploading your files.";
            }
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
                                    <h1>Add Project</h1>
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
                            <h3>Do you want to upload a project? Upload here.</h3>
                            <!-- <p>High performance secured hosting for your website. Don't lose anymore clients for the slowest speed of your hosting service.</p> -->
                                <?php if(isset($_SESSION['error'])){
                                    $error=$_SESSION['error'];
                                    echo "<span class='error'>$error</span>";}
                                ?>
                            <div class="spacer-10"></div>
                            <form name="contactForm" enctype="multipart/form-data" id='contact_form' class="form-border" method="post" action="">
                                <input type="hidden" name="user_name" value="<?php echo $row['id']; ?>">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <label>File Category:</label>
                                            <select name="category_id" class="form-control">
                                                <option value="selected">--Please Selected Value--</option>
                                                <?php $sel_query="Select * from category where status='1' ORDER BY id desc";
                                                    $result = mysqli_query($conn,$sel_query);
                                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["category_name"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <label>Project Name:</label>
                                            <input type="text" class="form-control" placeholder="Place Name" required name="project_name" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <label>Project File:</label>
                                            <input type="file"  name="projectFile" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <label>Image:</label>
                                            <input type="file" name="projectImage" class="form-control" accept="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <label>Project Details:</label>
                                             <textarea id="summernote" name="project_desc" value="Insert Details" required class="form-control"> </textarea>
                                        </div>
                                    </div>

                                    

                                  

                                    <div class="col-md-12">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' name="add_project" id='send_message' value='Add Project' class="btn-main color-2">
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