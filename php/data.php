<?php 
while($row = mysqli_fetch_assoc($sql)){
     $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
              OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
              OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC";
     $query2 = mysqli_query($conn, $sql2);
     $row2 = mysqli_fetch_assoc($query2);
     if(mysqli_num_rows($query2) > 0){
          $result = $row2['msg'];
     }else{
          $result = "Tidak Ada Pesan Disini!";
     }


     (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;

     $you = "";
     if ($row2 !== null && $outgoing_id == $row2['outgoing_msg_id']) {
         $you = "Anda: ";
     }

     ($row['status'] == "offline") ? $offline = "offline" : $offline = "";

    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                <div class="content">
                <img src="php/image/'. $row['img'] .'" alt="">
                <div class="details">
                     <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                     <p>'. $you . $msg .'</p>
                </div>
                </div>
                <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
                </a>';
}
?>