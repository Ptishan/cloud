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
            <h4 class="card-title">User Data</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example3" class="display">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                </thead>
                <tbody>
                  <?php
                    include 'connection.php';
                    $count=1;
                    $sel_query="Select * from users where status='1' ORDER BY id desc;";
                    $result = mysqli_query($conn,$sel_query);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td align="center"><?php echo $count; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <!-- <td><img src="images/<?php echo $row["image"]; ?>"  class="img-thumbnail" style="width: 100px;"></td> -->
                    <td>
                      <div class="d-flex">
 
                        <a href="" class="delete btn btn-danger shadow btn-xs sharp" data-id='<?= $row['id']; ?>'><i class="fa fa-trash"></i></a>
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
<?php include 'footer.php' ?>