<!--confic.php Connection-->
<?php
include 'confic.php';
?>
<!--confic.php Connection End-->

<?php


if(isset($_REQUEST['submit'])){

    $fName = $_REQUEST['fName'];
    $lName = $_REQUEST['lName'];
    $email = $_REQUEST['email'];
    $mob = $_REQUEST['mobile'];
    $pwd =$_REQUEST['password'];
    $confpwd =$_REQUEST['cnf-pwd'];
    $university = $_REQUEST['university'];

    $pwdcount = strlen($pwd);
    $pswdencrip = md5(sha1($pwd));


    $emailexit ="SELECT * FROM my_user WHERE email = '$email' ";
    $run =mysqli_query($connect,$emailexit);

    $authToken = md5(sha1($pwd.$email));
    $vkey = md5(sha1($mob.$email));

   



   if(mysqli_num_rows($run)>0){
       header("location:singup.php?exit");
   }elseif(empty($fName) || empty($lName) || empty($email) || empty($mob) || empty($pwd) || empty($confpwd) || empty($university)){
       header("location:singup.php?error");
   }elseif($pwd!=$confpwd){
    header("location:singup.php?pwderror");
   }elseif($pwdcount<5){
    header("location:singup.php?lenth");
}else{

    // INSERT INTO `my_user` (`id`, `fName`, `lName`, `email`, `mob`, `password`, `university`) VALUES (NULL, 'subrata', 'nath', 'dadadad', '4454', 'dadad', '');

    $sql ="INSERT INTO my_user (auth,fName,lName,email,mob,password,university,v_key,v_status) VALUES ('$authToken','$fName','$lName','$email','$mob','$pswdencrip','$university','$vkey',0)";

    $runQuery = mysqli_query($connect,$sql);

    if($runQuery){
        
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'subratanath186@gmail.com';                 // SMTP username
$mail->Password = 'Djsoykot1998';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, 'Subrata');
$mail->addAddress($email, 'SHUVO');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'E-Shikon Verifaction Key';
$mail->Body    = "<a href='http://localhost/blog/verify.php?vkey=$vkey'>click Here.....</a>";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location:success.php');
}

    }




}



   


}elseif(!isset($_REQUEST['submit'])){
    header("location:singup.php");
}


 





?>
