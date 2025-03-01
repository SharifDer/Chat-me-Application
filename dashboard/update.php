<?php include('../chat/php/config.php')  ?>

<?php
if (isset($_GET['id'])) {
  $upid = $_GET['id'];
  $sqlbooking = "SELECT  * FROM  users where user_id = $upid ";
  $resultnb = $conn->query($sqlbooking);
  if (mysqli_num_rows($resultnb) >= 1) {
     while ($rownb = $resultnb->fetch_assoc()) { 
      $statues =  $rownb["status_band"];
      $uid = $rownb["user_id"] ;
if($statues == "active"){
   
    $sqlsup = "UPDATE users SET status_band='disactive' WHERE user_id=$uid";

  $rsup = mysqli_query($conn, $sqlsup);

  if (!$rsup) {
    echo '<script>alert("Failed to band user")</script>';
    header('refresh:0;url=index.php');
  } else {
    echo '<script>alert("user banded successfully")</script>';
    header('refresh:0;url=index.php');
  }
}
else{
  $sqlsup = "UPDATE users SET status_band='active' WHERE user_id=$uid";

  $rsup = mysqli_query($conn, $sqlsup);

  if (!$rsup) {
    echo '<script>alert("Failed to band user")</script>';
    header('refresh:0;url=index.php');
  } else {
    echo '<script>alert("user active successfully")</script>';
    header('refresh:0;url=index.php');
  }
}

}
  }}
  
if (isset($_GET['idgroup'])) {
  $upid = $_GET['idgroup'];
  $sqlbooking = "SELECT  * FROM  user_group where group_id = $upid ";
  $resultnb = $conn->query($sqlbooking);
  if (mysqli_num_rows($resultnb) >= 1) {
     while ($rownb = $resultnb->fetch_assoc()) { 
      $statues =  $rownb["status"];
      $uid = $rownb["group_id"] ;
if($statues == "active"){
   
    $sqlsup = "UPDATE user_group SET status='disactive' WHERE group_id=$uid";

  $rsup = mysqli_query($conn, $sqlsup);

  if (!$rsup) {
    echo '<script>alert("Failed to band group")</script>';
    header('refresh:0;url=group_list.php');
  } else {
    echo '<script>alert("group banded successfully")</script>';
    header('refresh:0;url=group_list.php');
  }
}
else{
  $sqlsup = "UPDATE user_group SET status='active' WHERE group_id=$uid";

  $rsup = mysqli_query($conn, $sqlsup);

  if (!$rsup) {
    echo '<script>alert("Failed to group user")</script>';
    header('refresh:0;url=group_list.php');
  } else {
    echo '<script>alert("group active successfully")</script>';
    header('refresh:0;url=group_list.php');
  }
}

}
  }}