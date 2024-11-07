<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $group_id = mysqli_real_escape_string($conn, $_GET['group_id']);
          $sql = mysqli_query($conn, "SELECT * FROM user_group WHERE group_id = {$group_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <a href="group.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['name']?></span>
          <?php
										$sqlrecored = "SELECT * FROM users where status = 'Active now' ORDER BY user_id";
										if ($resultdore = mysqli_query($conn, $sqlrecored)) {
											$rowcount = mysqli_num_rows($resultdore); ?>
											<h6> Users online (<?php echo "$rowcount"; ?>)</h6>
										<?php mysqli_free_result($resultdore);
										} ?>
          
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $group_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat_group.js"></script>

</body>
</html>