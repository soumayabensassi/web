<?php
include_once "../controller/notificationcontroller.php" ;
include_once "../model/notification.php" ;

$notificationcontroller = new notificationcontroller();
$numbre=$notificationcontroller->affichernotification($_SESSION['e']);



$i=0;
foreach ($numbre as $notification) { $i++; }

$liste=$notificationcontroller->affichernotification($_SESSION['e']);

?>

<link rel="stylesheet" href="../assets/css/styles/test.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="navbar">
       
        <div class="right">
        <div style = "position:relative; left:-480px;">
            <ul>
            
               
                 
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-bell"></i><span class="caret"></span></button>
                <?php if ($i>0) { ?>
                <ul class="dropdown-menu">
                <?php
                    foreach ($liste as $notification) { ?>
                    <form action="modifiernotification.php" method='POST' >
                    
                      <li> <small><i><?php echo $notification['date']; ?> </i></small></li>
                      <li><button type=submit onclick="notification()"> <?php echo $notification['message']; echo $notification['status']; ?></button> </li>
                    
                    
                  <input type="hidden" id="id_notification" name="id_notification" value=<?PHP echo $notification['id_notification']; ?>>
                  <input type="hidden" id="status" name="status" value=<?PHP echo $notification['status']; ?>>
                  <input type="hidden" id="message" name="message" value=<?PHP echo $notification['message']; ?>>
                  <input type="hidden" id="date" name="date" value=<?PHP echo $notification['date']; ?>>
                  </form>
                  <?php } ?>
                  </ul>
                  <?php }else { ?>    
                    <ul class="dropdown-menu">
                      <li><p>vous n'avez pas de notification</p></li>
                      <?php } ?>                  
                </div>

               

          </ul> 
        </div> 
        </div>
    </div>
</div>

<script>
  function notification ()
  {
    alert("<?php echo $notification['date'];?> : <?php echo $notification['message']; echo $notification['status']; ?>");
  }
</script>

                






