<?php 
include 'header.php'; 
include 'connection.php';
?>
 <!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head d-flex mb-3 align-items-start">
			<div class="me-auto d-none d-lg-block">
				<h2 class="text-primary font-w600 mb-0">Dashboard</h2>
				<p class="mb-0">Welcome to <strong><?php echo $_SESSION['email']; ?></strong></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon d-flex">	
							<span class="me-3 bgl-primary text-primary">
								<i class="ti-user"></i>
								

							</span>
							<div class="media-body">
								<h3 class="mb-0 text-black"><span class="counter ms-0"></span></h3>
								<p class="mb-0">Total Users</p>
								<?php
								 $sql = "SELECT COUNT(*) AS user_count FROM users";
								$result = mysqli_query($conn, $sql);

								if ($result) {
								    $row = mysqli_fetch_assoc($result);
								    echo "Number of users: " . $row["user_count"];
								} else {
								    echo "Error: " . mysqli_error($conn);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon d-flex">	
							<span class="me-3 bgl-primary text-primary">
								<i class="ti-user"></i>
								

							</span>
							<div class="media-body">
								<h3 class="mb-0 text-black"><span class="counter ms-0"></span></h3>
								<p class="mb-0">Total Category</p>
								<?php
								 $sql = "SELECT COUNT(*) AS category FROM category";
								$result = mysqli_query($conn, $sql);

								if ($result) {
								    $row = mysqli_fetch_assoc($result);
								    echo "Number of category: " . $row["category"];
								} else {
								    echo "Error: " . mysqli_error($conn);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon d-flex">	
							<span class="me-3 bgl-primary text-primary">
								<i class="ti-user"></i>
								

							</span>
							<div class="media-body">
								<h3 class="mb-0 text-black"><span class="counter ms-0"></span></h3>
								<p class="mb-0">Total Files Uploaded</p>
								<?php
								$sql = "SELECT COUNT(*) AS projects FROM projects";
								$result = mysqli_query($conn, $sql);

								if ($result) {
								    $row = mysqli_fetch_assoc($result);
								    echo "Number of projects: " . $row["projects"];
								} else {
								    echo "Error: " . mysqli_error($conn);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		 </div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
<?php include 'footer.php'; ?>