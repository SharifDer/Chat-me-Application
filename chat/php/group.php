<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM user_group WHERE status = 'active'  ORDER BY group_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No groups are available to chat";
    }elseif(mysqli_num_rows($query) > 0){ 
        include_once "datagroup.php";
    }
    echo $output;
?>