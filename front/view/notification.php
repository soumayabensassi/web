<?php
include_once "../controller/notificationcontroller.php" ;
include_once "../model/notification.php" ;

$notification = new notificationcontroller();

$liste=$notification->affichernotification($_SESSION['e']);
?>

<link rel="stylesheet" href="../assets/css/styles/test.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="navbar">
       
        <div class="right">
            <ul>
            
              <li>
                <a href="#">
                <i class="fas fa-bell"></i> <!--<i class="far fa-bell"></i>-->
                </a>
                 
                <div class="dropdown">
                <?php
                    foreach ($liste as $notification) { ?>
                    <ul>
                      <li> <small><i><?php echo $notification['date']; ?> </i></small></li>
                      <li> <a 
                         <?php
                            if($notification['status']=='unread'){
                                echo "font-weight:bold;";
                            }
                         ?>
                         " class='dropdown-item'><?php echo $notification['message']; echo $notification['status']; ?></a> </li>
                  </ul>
                  <?php } ?>
                </div>
                
              </li>
          </ul>   
        </div>
    </div>
</div>




                






