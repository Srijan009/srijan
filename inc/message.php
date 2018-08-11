<?php
  //session_start();
  if(isset($_SESSION['error']) && $_SESSION['error'] != ''):
?>
<div class="alert alert-danger">
<?php  $error = $_SESSION['error'];
    echo $error;  

  ?>
</div>
<?php
endif;
$_SESSION['error'] = '';
?>
<?php 
if(isset($_SESSION['success']) && $_SESSION['success'] != ''):
?>
    <div class="alert alert-danger">
    <?php  $success = $_SESSION['success'];
        echo $success;  
    
      ?>
    </div>
    <?php
    endif;
    $_SESSION['success'] = '';
 ?>

  
