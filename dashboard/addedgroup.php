<?php include('../chat/php/config.php')  ?>

<?php
if (isset($_POST['add'])) {

    $Fname   = $_POST['name'];
    $image = $_FILES['image'];
    $imagefilename = $image['name'];
    $imagefileerror = $image['error'];
    $imagefiletemp = $image['tmp_name'];
    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));
    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
      $upload_image = '../chat/php/images/' . $imagefilename;
      move_uploaded_file($imagefiletemp, $upload_image);
  
      $sql = "INSERT INTO  `user_group` (name, img) VALUES ('$Fname','$upload_image')";
      // print_r($sql);
      // exit;
  
      $resultdo = mysqli_query($conn, $sql);
  
      if ($resultdo) {
  
        echo '<script>alert("Group Added successfully")</script>';
        header("refresh:0;url=addgroup.php");
      } else {
  
        echo '<script>alert("Error. Failed to add Group")</script>';
  
        header("refresh:0;url=addgroup.php");
      }
    }
  }