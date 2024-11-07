<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM group_messages where groups_id = $incoming_id
                 ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $user = $row['outcoming_id'];
                $date = new DateTime($row['send_datetime']);
                    $formatted_date_time = $date->format('h:i:s A');
                if($row['outcoming_id'] === $outgoing_id){
                    
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['message']. '</p>
                                    <h6>'.$formatted_date_time .'</h6>
                                    
                                </div>
                                </div>';
                }else{
                    $sql1 = "SELECT  * FROM  users where unique_id = $user";
                    $result1 = $conn->query($sql1);
                    if (mysqli_num_rows($result1) >= 1) {
                       while ($row1 = $result1->fetch_assoc()) {
                       

                    $output .= '<div class="chat incoming">
                    <img src="php/images/'.$row1['img'].'" alt="">
                                <div class="details">
                                <h6>'.$row1['fname'] . '</h6>
                                    <p>'. $row['message'] .'</p>
                                    <h6>'.$formatted_date_time .'</h6>
                                </div>
                                </div>';
                }}}
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>