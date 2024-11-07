<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM group_messages where groups_id = {$row['group_id']}
                ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['message'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outcoming_id'])){
            ($outgoing_id == $row2['outcoming_id']) ? $you = "You: " : $you = "";
        }else{
            $you = ""; 
        } 


        $output .= '<a href="group_chat.php?group_id='. $row['group_id'] .'">
                    <div class="content">
                    <img src="'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['name'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                   
                </a>';
    }
?>