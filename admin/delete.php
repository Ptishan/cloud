<?php include 'connection.php';
if(isset($_POST["category_delete"])) {
 $id = $_POST["id"];
     // Continue with file upload and database insertion
  $sql = "UPDATE category SET status='0' WHERE id='$id'";
           if ($conn->query($sql) === TRUE) {
              echo "<script>alert('Category Delete successfully.')</script>";
               header("location:../category.php");
           } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
           }
     
      }
// Project Delete
if(isset($_POST["project_delete"])) {
 $id = $_POST["id"];
     // Continue with file upload and database insertion
  $sql = "UPDATE projects SET status='0' WHERE id='$id'";
           if ($conn->query($sql) === TRUE) {
              echo "<script>alert('Project Delete successfully.')</script>";
               header("location:../allfile.php");
           } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
           }
     
      }
?>