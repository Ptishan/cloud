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
        <p class="mb-0">Welcome to HOSTCO!</p>
      </div>
      <div class="me-5 d-none d-lg-block">
        <a href="addfile.php" class="btn btn-primary">Add File</a>
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
            <h4 class="card-title">User Data</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example3" class="display">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Project Name</th>
                    <!-- <th>Project Description</th> -->
                    <th>Project File</th>
                    <th>Project Images</th>
                    <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    include 'connection.php';
                    $count=1;
                    $sel_query="Select * from projects where status='1' ORDER BY id desc;";
                    $result = mysqli_query($conn,$sel_query);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td align="center"><?php echo $count; ?></td>
                    <td><?php echo $row["project_name"]; ?></td>
                    <!-- <td width="100px"><?php 
                      $description = $row["project_desc"];
                      $limit = 50; // Set the character limit for the description
                      
                     // if (strlen($description) > $limit) {
                          $description = substr($description, 0, $limit) . '...';
                          echo $description;
                          echo '<a href="#" onclick="showFullDescription()">Read More</a>';
                          echo '<div id="full-description" style="display:none;">' . $row["project_desc"] . '</div>';
                     // } else {
                          echo $description;
                      //}
                      ?></td> -->
                    <td><a href="download.php?file=<?php echo $row["projectFile"]; ?>" class="btn btn-danger"><?php echo $row["project_name"]; ?>/Download PDF</a></td>
                     <?php  if($row["user_name"]==$_SESSION['email']){ ?> 
                    <td><img src="../<?php echo $row["projectImage"]; ?>"  class="img-thumbnail" style="width: 100px;"></td>
                    <?php } else { ?> 
                    <td><img src="<?php echo $row["projectImage"]; ?>"  class="img-thumbnail" style="width: 100px;"></td>
                     <?php } ?>
                    <td>
                      <div class="d-flex">
                        <a href="editproject.php?id=<?php echo $row['id']; ?>" class="delete btn btn-primary shadow btn-xs sharp" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
                        <form action="delete.php/id=<?php echo $row['id']; ?>" method="post"> 
                          <input type="hidden" name="id" value="<?php echo $row['id'] ?>"> 
                          <button type="submit" name="project_delete" class="delete btn btn-danger shadow btn-xs sharp" data-id='<?= $row['id']; ?>'><i class="fa fa-trash"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <?php  $count++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function showFullDescription() {
      document.getElementById("full-description").style.display = "block";
  }
</script>
<?php include 'footer.php' ?>