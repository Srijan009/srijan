<?php
session_start();
include 'inc/generalfunctions.php';
include 'inc/config.php';
// select query
$sql = "select email,password from users where email = 'srijanlama81@gmail.com'";
$query = $conn->query($sql);
$result = $query->fetch_assoc();
    $my_email =  $result['email'];
    $my_password = $result['password'];
    // echo $encryption_key_256bit = base64_encode(openssl_random_pseudo_bytes(32));
    //echo strlen($encryption_key_256bit);
//     exit;
//     $key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';
//    //$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
//         $plaintext = $result['password'];
//         $cipher = "aes-128-gcm";
//         if (in_array($cipher, openssl_get_cipher_methods()))
//         {
//             $ivlen = openssl_cipher_iv_length($cipher);
//             $iv = openssl_random_pseudo_bytes($ivlen);
//             $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
//             //store $cipher, $iv, and $tag for decryption later
//             $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
//             echo $original_plaintext."\n";
//         }
// //         exit;
//     tester($my_email);
//     tester($my_password);
//     tester($result,true);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
// tester($_POST);
if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     if(!empty($name) && !empty($email) && !empty($subject)){
        include 'vendor/autoload.php';
        $m = new PHPMailer;
        //properties
        $m->isSMTP();
        $m->SMTPAuth = true;
        $m->SMTPDebug = 2;
        $m->Host = 'smtp.gmail.com';
        $m->Username =  $my_email;
        $m->Password =  $my_password;
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;
        //methods
        // $m->From = $email;
        // $m->FromName = $name;
        $m->setFrom($email,$name);
        $m->addReplyTo($email,'replay address');
        $m->addAddress('srijanlama81@gmail.com','srijan lama');
        $m->Subject = 'Here is a mail by '.$name;
        $m->Body = $subject;
        $m->AltBody = 'This is body of an email';
        
        //tester($m->send());
        if($m->send()){
            $_SESSION['success'] = 'Thanks for your Contacting us';
            header('location:index.php?page=contact');
            // exit;
        }
        else{
            $_SESSION['error']= 'Error sending email';
            header('location:index.php?page=contact');
            exit;
       }

     }
     else{
         $_SESSION['error'] = 'Input the required fields';
         header('location:index.php?page=contact');
         exit;
     }
    // if(empty($name,$email)){
    //     $msg = "hello";
    // }
    // tester($_POST);
    
}else{
    $_SESSION['error'] = "Invalid page";
    header('location:index.php?page=contact');
    exit;
}
