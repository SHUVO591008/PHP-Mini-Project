
<!--confic.php Connection-->
<?php
include 'confic.php';
?>
<!--confic.php Connection End-->

<?php
if(isset($_REQUEST['submit'])){

    $useremail =$_REQUEST['email'];
    $userpwd =$_REQUEST['password'];

    $crtauth =md5(sha1($userpwd.$useremail));

    if(empty($useremail) || empty($userpwd)){
        header("location:page-login.php?error");
    }else{

    $pwdencrift =md5(sha1($userpwd));




    $sql ="SELECT * FROM my_user WHERE email ='$useremail' AND password='$pwdencrift' AND v_status =1";
    $run =mysqli_query($connect,$sql);

        if(mysqli_num_rows($run)>=1){

            setcookie("XYZSDHFA", $crtauth, time() + (86400*7));
            header('location:index.php'); 
            
         
           }else{
            header('location:page-login.php?error'); 
           }
        
        
        }

    }elseif(!isset($_REQUEST['submit'])){
        header('location:page-login.php'); 
    }



?>
