<?php 
include 'connection.php';
$file = $_GET['file'];
$file_path =''. $file;
// echo $file_path;
// die();
if (file_exists($file_path)) {
  header('Content-Type: application/octet-stream');
  header('Content-Description: File Transfer');
  header('Content-Disposition: attachment; filename=' . basename($file_path));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file_path));
  readfile($file_path);
  exit;
} else {
  echo "File not found.";
}
?>