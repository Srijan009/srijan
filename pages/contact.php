<?php 
    session_start();
    //include 'inc/generalfunctions.php';
    //tester($conn,true);
    //tester($_SERVER['PHP_SELF'],true);
    // tester($_POST);
  
?>
<div class="panel panel-primary">
        <div class="panel-heading">
            Contact us        
        </div>
        <?php include 'inc/message.php'; ?>
        <div class="panel-body">
            <form action="login-process.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name..">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" class="form-control" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form> 
        </div>
    </div>
