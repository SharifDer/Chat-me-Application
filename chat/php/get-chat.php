<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $read= "read";
        $update = mysqli_query($conn, "UPDATE messages SET statues = '{$read}' WHERE  incoming_msg_id = {$outgoing_id} and outgoing_msg_id = {$incoming_id}");
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $date = new DateTime($row['send_datetime']);
                    $formatted_date_time = $date->format('h:i:s A');
                if($row['outgoing_msg_id'] === $outgoing_id){
                    if($row['statues'] == "deliver"){
                    $output .= '<div class="chat outgoing">';

                    $output .= ' <div class="details">
                                    <p>'. $row['msg'] ." ".'<i class="fas fa-check"></i></p>
                                    <h6>'.$formatted_date_time .'</h6>
                                </div>
                                </div>';
               }else{
                $output .= '<div class="chat outgoing">';

                $output .= ' <div class="details">
                                <p>'. $row['msg'] ." ".'<i class="fas fa-check-double"></i></p>
                                <h6>'.$formatted_date_time .'</h6>
                            </div>
                            </div>';
            }}else{
                    $output .= '<div class="chat incoming">
                                <img src="php/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                    <h6>'.$formatted_date_time .'</h6>

                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>