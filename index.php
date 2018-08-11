<?php
    include 'init.php';
    include 'inc/generalfunctions.php';
    use Sagarmatha\User;
    // use Sagarmatha\Account;
    // use Sagarmatha\Model\Filter;
    // use Sagarmatha\repo\repo;
    // $name = new Account();
    // $name = new repo();
    // $name = new Srijan;
    $pagename =(isset($_GET['page']))?$_GET['page']:'home';
    //  echo $_SERVER['PHP_SELF'];
    //  exit;
    // header("location:$pagename");
    $pagename = "pages/$pagename.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php include 'inc/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2><?php echo User::$user; ?></h2>
                <?php 
                //include $pagename;
                // echo Srijan::$name
                if(file_exists($pagename)){
                    include $pagename;
                }else{
                    include 'pages/404.php';
                }
                
                ?>
            </div>      
            <?php include 'inc/sidebar.php'; ?>
        </div>
    </div>
    <?php  include 'inc/footer.php'; ?>